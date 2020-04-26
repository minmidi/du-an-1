@extends('admin.master')
@section('title','room-type-edit')
@section('name','kiểu phòng')
@section('log','Sửa phòng phòng'.$model->title)
@section('main')
    <form action="" method="POST" enctype="multipart/form-data" role="form" >
        @csrf
        <div class="form-group m-3">
            <label for="" class="mt-3">Tên loại phòng</label>
            <input type="text" class="form-control" name="name" id='name' placeholder="Nhập tên loại phòng" value="{{ $model->name }}">
            <!--Gọi validate -->
            @if($errors->has('name'))
                {{$errors->first('name')}}
            @endif
        </div>

        <div class="form-group m-3">
            <label for="">Slug</label>
            <input type="text" class="form-control" name="slug" id='slug' placeholder="Nhập Slug" value="{{ $model->slug }}">
            @if($errors->has('slug'))
                {{$errors->first('slug')}}
            @endif
        </div>

        <div class="form-group m-3">
            <label for="">Thêm ảnh</label>
            <div>
                <img src="../../../images/{{ $model->images }}" alt="Ảnh" style="width: 200px; height:150px;">
            </div>
            <br>
            <input type="file" class="form-control" name="images" id='images' placeholder="Thêm logo">
        </div>

        <div class="form-group m-3">
            <label for="" class="mt-3">Giá phòng</label>
            <input type="text" class="form-control" name="price" id='price' placeholder="Nhập giá phòng" value="{{ $model->price }}">
            <!--Gọi validate -->
            @if($errors->has('price'))
                {{$errors->first('price')}}
            @endif
        </div>

        <div class="form-group m-3">
            <label for="">Mô tả ngắn </label>
            <textarea class="form-control" name="short_description" id="short_description" placeholder="Nhập mô tả ngắn" rows="5">{{ $model->short_description }}</textarea>
            @if($errors->has('short_description'))
                {{$errors->first('short_description')}}
            @endif
        </div>


        <div class="form-group m-3">
            <label for="">Mô tả chi tiết </label>
            <textarea class="form-control" name="description" id="description" placeholder="Nhập mô tả chi tiết" rows="5">{{ $model->description }}</textarea>
            @if($errors->has('description'))
                {{$errors->first('description')}}
            @endif
        </div>

        <button type="submit" class="btn btn-primary m-3">Chỉnh sửa</button>
    </form>
@stop

@section('js')
    <script src="{{ URL::asset('Admins/script/slug.js') }}"></script>
@stop
