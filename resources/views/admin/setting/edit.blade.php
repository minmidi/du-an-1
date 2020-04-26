@extends('admin.master')
@section('title','setting-edit')
@section('name',' Hiển thị chung')
@section('log','Chỉnh sửa chung trang web: '. $model->name)
@section('main')
    <form action="" method="POST" enctype="multipart/form-data" role="form" >
        @csrf
        <div class="form-group m-3">
            <label for="" class="mt-3">Nhập tên</label>
            <input type="text" class="form-control" name="name" id='name' placeholder="Nhập tên" value="{{ $model->name }}">
            <!--Gọi validate -->
            @if($errors->has('name'))
                {{$errors->first('name')}}
            @endif
        </div>

        <div class="form-group m-3">
            <label for="">Thêm logo</label>
            <div>
                <img src="../../../images/{{ $model->logo }}" alt="Ảnh">
            </div>
            <input type="file" class="form-control" name="logo" id='logo' placeholder="Thêm logo">
        </div>

        <div class="form-group m-3">
            <label for="" class="mt-3">Số điện thoại</label>
            <input type="text" class="form-control" name="phone_number" id='phone_number' placeholder="Nhập số điện thoại" value="{{ $model->phone_number }}">
            <!--Gọi validate -->
            @if($errors->has('phone_number'))
                {{$errors->first('phone_number')}}
            @endif
        </div>

        <div class="form-group m-3">
            <label for="" class="mt-3">Email</label>
            <input type="text" class="form-control" name="email" id='email' placeholder="Nhập email" value="{{ $model->email }}">
            <!--Gọi validate -->
            @if($errors->has('email'))
                {{$errors->first('email')}}
            @endif
        </div>


        <div class="form-group m-3">
            <label for="">Số hotline</label>
            <input type="text" class="form-control" name="hotline" id="hotline" placeholder="Nhập số hotline" value="{{ $model->hotline }}">
            @if($errors->has('hotline'))
                {{$errors->first('hotline')}}
            @endif
        </div>

        <div class="form-group m-3">
            <label for="">Địa chỉ</label>
            <input type="text" class="form-control" name="address" id="address" placeholder="Nhập địa chỉ" value="{{ $model->address }}">
            @if($errors->has('address'))
                {{$errors->first('address')}}
            @endif
        </div>

        <div class="form-group m-3">
            <label for="">URL_Map</label>
            <input type="text" class="form-control" name="map_url" id="map_url" placeholder="Nhập url map" value="{{ $model->map_url }}">
            @if($errors->has('map_url'))
                {{$errors->first('map_url')}}
            @endif
        </div>

        <div class="form-group m-3">
            <label for="">URL_Youtube</label>
            <input type="text" class="form-control" name="youtube_url" id="youtube_url" placeholder="Nhập url youtube" value="{{ $model->youtube_url }}">
            @if($errors->has('youtube_url'))
                {{$errors->first('youtube_url')}}
            @endif
        </div>

        <div class="form-group m-3">
            <label for="">URL_Facebook</label>
            <input type="text" class="form-control" name="facebook_url" id="facebook_url" placeholder="Nhập url facebook" value="{{ $model->facebook_url }}">
            @if($errors->has('facebook_url'))
                {{$errors->first('facebook_url')}}
            @endif
        </div>

        <div class="form-group m-3">
            <label for="">URL_Video</label>
            <input type="text" class="form-control" name="intro_video_url" id="intro_video_url" placeholder="Nhập url video" value="{{ $model->intro_video_url }}">
            @if($errors->has('intro_video_url'))
                {{$errors->first('intro_video_url')}}
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
