@extends('admin.master')
@section('title','user-admin-edit')
@section('name','Tài khoản')
@section('log','Sửa thông tin tài khoản quản trị: '.$users->username)
@section('main')
    <form action="" method="POST" role="form">
        @csrf
        <div class="form-group m-3">
            <label for="" class="mt-3">Tên tài khoản</label>
            <input type="text" class="form-control" name="username" id='username' placeholder="Nhập tên tài khoản" value="{{ $users->username }}">
            <!--Gọi validate -->
            @if($errors->has('username'))
                {{$errors->first('username')}}
            @endif
        </div>

        <div class="form-group m-3">
            <label for="">Email</label>
            <input type="text" class="form-control" name="email" id='email' placeholder="Nhập email" value="{{ $users->email }}">
            @if($errors->has('email'))
                {{$errors->first('email')}}
            @endif
        </div>

        <div class="form-group m-3">
            <label for="">Số điện thoại</label>
            <input type="text" class="form-control" name="phone_number" id="phone_number" placeholder="Nhập số điện thoại" value="{{ $users->phone_number }}" >
            @if($errors->has('phone_number'))
                {{$errors->first('phone_number')}}
            @endif
        </div>

        <div class="form-group m-3">
            <label for="">Password</label>
            <input type="text" class="form-control" name="password" id="password" placeholder="Nhập password">
            @if($errors->has('password'))
                {{$errors->first('password')}}
            @endif
        </div>
        <button type="submit" class="btn btn-primary m-3" onclick="return confirm('bạn có chắc muốn thực hiện chỉnh sửa không?')">Chỉnh sửa</button>
    </form>
@stop
