<?php
// đường dẫn chứa PostController (chỉ ra thư mục mà class đang nằm trong đó)
namespace App\Http\Controllers\Admin;

// sử dụng controller
use App\Http\Controllers\Controller;

// Gọi và sử dụng Models
use App\Models\Post;

// Sử dụng request để thêm trong laravel
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PostController extends Controller
{

    // ADD POSTS
    // get form news post add
    public function add() {
        return view('admin/post/add');
    }

    //save news post add
    // Request để thay thế dd($_POST);
    public function save_add(Request $request) {
        // Validate form
        $this->validate($request,[
            // nguyên tắc chỉ định
            'title' => 'required|unique:posts,title',
            'slug' => 'required|unique:posts,slug',
            'short_description' => 'required|unique:posts,short_description',
            'description' => 'required|unique:posts,description',
        ]);
        $post = new Post();
        $post['title'] = $request->title;
        $post['slug'] = $request->slug;
        $post['short_description'] = $request->short_description;
        $post['description'] = $request->description;
        $post['images'] = $request->images;
        $post['status'] = $request->status;
        $get_image = $request->file('images');
        if ($get_image) {
            $get_image_name = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_image_name));
            $new_images = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();

            $get_image->move('images',$new_images);
            $post['images'] = $new_images;
            $post->images = $new_images;
            //dd($_POST); tương đương dd($request->all());
            $post->fillable($request->all());
            $post->save();
            //Post::created($request->all());
            return redirect() -> route('post');
        }
        $post['images'] = "" ;
        //dd($_POST); tương đương dd($request->all());
        $post->fillable($request->all());
        $post->save();
        //Post::created($request->all());
        return redirect() -> route('post');
    }

    // EDIT POSTS
    // get form news post edit
    public function edit($id) {
        $model = Post::find($id);
        return view('admin/post/edit',[
            'model' => $model
        ]);
    }

    // save news post edit
    public function save_edit(Request $request, $id) {
        // loại bỏ 1 trường _token
        //$request->offsetUnset('_token');
        $post = Post::find($id);
        $post['title'] = $request->title;
        $post['slug'] = $request->slug;
        $post['short_description'] = $request->short_description;
        $post['description'] = $request->description;
        $post['images'] = $request->images;
        $post['status'] = $request->status;
        $get_image = $request->file('images');
        if ($get_image) {
            $get_image_name = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_image_name));
            $new_images = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('images',$new_images);
            $post['images'] = $new_images;
            $post->images = $new_images;
            $post->fillable($request->all());
            $post->save();
            return redirect() -> route('post');
        }
        $post['images']="";
        //dd($_POST); tương đương dd($request->all());
        $post->fillable($request->all());
//        dd($post); die;
        $post->save();
        //Post::created($request->all());
        return redirect() -> route('post');



        // nếu loại bỏ nhiều trường và chỉ lấy những trường
        //dd($request->only('name','status'));
        //Post::where(['id'=>$id])->update($request -> all());
        // truyền nhiều tham số
        //Post::where(['id'=> $id, $name])->update($request -> all());
        //return redirect() -> route('post');
    }


    // DELETE POSTS
    public function delete($id) {
        // trong laravel có hỗ trợ hàm delete
        Post::find($id)->delete();
        // sau khi xóa xong có thể dùng redirect để chuyển hướng đến trang nào đó qua route hoặc dùng back để quay lại trang
        return redirect() -> back();
    }

    // VIEW POSTS
    public function index() {
        // $post = Post::all();  // select * from posts
        //$post = Post::active()->paginate(1);
        $post = Post::search('title','slug')->paginate(1); // select * form limit 0,5 (phân trang và limit hiển thị là 5)
        // dd($post->toArray());
        return view('admin/post/index',[
            'posts' => $post,
        ]);
    }
}
