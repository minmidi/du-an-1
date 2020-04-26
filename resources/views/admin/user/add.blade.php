@extends('admin.master')
@section('title','user-admin-adđ')
@section('name','Tài khoản')
@section('log','Thêm tài khoản quản trị')
@section('main')
    <form action="" method="POST" role="form">
        @csrf
        <div class="form-group m-3">
            <label for="" class="mt-3">Tên tài khoản</label>
            <input type="text" class="form-control" name="username" id='username' placeholder="Nhập tên tài khoản">
            <!--Gọi validate -->
            @if($errors->has('username'))
                {{$errors->first('username')}}
            @endif
        </div>

        <div class="form-group m-3">
            <label for="">Email</label>
            <input type="text" class="form-control" name="email" id='email' placeholder="Nhập email">
            @if($errors->has('email'))
                {{$errors->first('email')}}
            @endif
        </div>

        <div class="form-group m-3">
            <label for="">Số điện thoại</label>
            <input type="text" class="form-control" name="phone_number" id="phone_number" placeholder="Nhập số điện thoại">
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

        <div class="form-group m-3">
            <label for="">Confirm Password</label>
            <input type="text" class="form-control" name="confirm_password" id="confirm_password" placeholder="Nhập lại password">
            @if($errors->has('confirm_password'))
                {{$errors->first('confirm_password')}}
            @endif
        </div>

        <button type="submit" class="btn btn-primary m-3">Thêm mới</button>
    </form>
@stop
