@extends('admin.master')
@section('title','user-admin-index')
@section('name','Tài khoản')
@section('log','Xin chào: '. Auth::user()->username)
@section('main')
    <div>
        Chào mừng bạn đã đăng nhập vào trang quản trị website Hola Việt Nam
    </div>
@stop

