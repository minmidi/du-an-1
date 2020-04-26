<?php

// Đường dẫn chỉ đến Post
namespace App\Models;

// sử dụng database
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // gọi bảng trong model
    protected $table = 'posts';
    // gọi dữ liệu trong bảng
    protected $fillable = ['title','slug','short_description','description','images','status'];
    public function scopeActive($query)
    {
        $query->where('status',1);
    }

    public function scopeSearch($query, ...$colums)
    {
        $keyWord = request()->search;
        foreach ($colums as $colum) {
            $query->orWhere($colum, 'like', "%$keyWord%");
        }
    }
}
