@extends('admin.master')
@section('title','post-edit')
@section('name','Bài viết')
@section('log', 'Sửa bài viết: '.$model->title)
@section('main')
    <form action="" method="POST" role="form" enctype="multipart/form-data">
        @csrf
        <div class="form-group m-3">
            <label for="">Hình ảnh</label>
            <div>
                <img src="../../../images/{{ $model->images }}" alt="Ảnh">
            </div>
            <input type="file" class="form-control" name="images" id='images' placeholder="Thêm hình ảnh">
        </div>


        <div class="form-group m-3">
            <label for="">Trạng thái</label>
            <div class="radio">
                <label>
                    <input type="radio" name="status" value="0" checked="checked">
                    Không kích hoạt
                </label>
                <label>
                    <input type="radio" name="status" value="1" checked="checked">
                    Kích hoạt
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary m-3" onclick="return confirm('bạn có chắc muốn thực hiện chỉnh sửa không?')">Sửa</button>
    </form>
@stop
@section('js')
    <script src="{{ URL::asset('Admins/script/slug.js') }}"></script>
@stop
