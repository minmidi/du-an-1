@extends('admin.master')
@section('title','post-add')
@section('name','Bài viết')
@section('log','Thêm bài viết')
@section('main')
    <form action="" method="POST" enctype="multipart/form-data" role="form" >
        @csrf
        <div class="form-group m-3">
            <label for="" class="mt-3">Nhập tiêu đề</label>
            <input type="text" class="form-control" name="title" id='name' placeholder="Nhập tiêu đề">
            <!--Gọi validate -->
            @if($errors->has('title'))
                {{$errors->first('title')}}
            @endif
        </div>

        <div class="form-group m-3">
            <label for="">Slug</label>
            <input type="text" class="form-control" name="slug" id='slug' placeholder="Nhập Slug">
            @if($errors->has('slug'))
                {{$errors->first('slug')}}
            @endif
        </div>

        <div class="form-group m-3">
            <label for="">Mô tả ngắn</label>
            <input type="text" class="form-control" name="short_description" id="short_description" placeholder="Nhập mô tả ngắn">
            @if($errors->has('short_description'))
                {{$errors->first('short_description')}}
            @endif
        </div>

        <div class="form-group m-3">
            <label for="">Mô tả chi tiết </label>
            <textarea class="form-control" name="description" id="description" placeholder="Nhập mô tả chi tiết" rows="5"></textarea>
            @if($errors->has('description'))
                {{$errors->first('description')}}
            @endif
        </div>

        <div class="form-group m-3">
            <label for="">Thêm ảnh</label>
            <input type="file" class="form-control" name="images" id='images' placeholder="Thêm ảnh">
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
        <button type="submit" class="btn btn-primary m-3">Thêm mới</button>
    </form>
@stop

@section('js')
    <script src="{{ URL::asset('Admins/script/slug.js') }}"></script>
@stop
