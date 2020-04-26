@extends('admin.master')
@section('title','about-edit')
@section('name','Giới thiệu chung')
@section('log','Chỉnh sửa giới thiệu: '. $model->title)
@section('main')
    <form action="" method="POST" enctype="multipart/form-data" role="form" >
        @csrf
        <div class="form-group m-3">
            <label for="" class="mt-3">Nhập tiêu đề</label>
            <input type="text" class="form-control" name="title" id='title' placeholder="Nhập tiêu đề" value="{{ $model->title }}">
            <!--Gọi validate -->
            @if($errors->has('title'))
                {{$errors->first('title')}}
            @endif
        </div>

        <div class="form-group m-3">
            <label for="">Thêm ảnh</label>
            <div>
                <img src="../../../images/{{ $model->images }}" alt="Ảnh">
            </div>
            <input type="file" class="form-control" name="images" id='images' placeholder="Thêm logo">
        </div>

        <div class="form-group m-3">
            <label for="" class="mt-3">Nhập mô tả ngắn</label>
            <input type="text" class="form-control" name="short_description" id='short_description' placeholder="Nhập mô tả ngắn" value="{{ $model->short_description }}">
            <!--Gọi validate -->
            @if($errors->has('short_description'))
                {{$errors->first('short_description')}}
            @endif
        </div>

        <div class="form-group m-3">
            <label for="">Mô tả </label>
            <textarea class="form-control" name="description" id="description" placeholder="Nhập mô tả" rows="5">{{ $model->description }}</textarea>
            @if($errors->has('description'))
                {{$errors->first('description')}}
            @endif
        </div>
        <button type="submit" class="btn btn-primary m-3" onclick="return confirm('bạn có chắc muốn thực hiện chỉnh sửa không?')">Chỉnh sửa</button>
    </form>
@stop

@section('js')
    <script src="{{ URL::asset('Admins/script/slug.js') }}"></script>
@stop
