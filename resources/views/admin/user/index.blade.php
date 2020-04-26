@extends('admin.master')
@section('title','user-admin-index')
@section('name','Tài khoản')
@section('log','Danh sách tài khoản quản trị')
@section('main')

    <form action="" method="POST" class="form-inline" role="form">
        <div class="form-group mr-2">
            <input type="text" class="form-control" name="search" placeholder="nhập tìm kiếm">
        </div>
        <button type="submit" class="btn btn-primary mr-2">
            <i class="fas fa-search"></i>
        </button>
        <a href="{{ route('user_add') }}" class="btn btn-success"> thêm mới</a>
    </form>

    <table class="table table-bordered mt-2">
        <tbody>
        @foreach($users as $u)
            <tr>
                <th scope="row" style="width: 150px; background: #e9ecef;" >ID</th>
                <td>{{ $u->id }}</td>
            </tr>

            <tr>
                <th scope="row" style="width: 150px; background: #e9ecef;" > Tên tài khoản</th>
                <td>{{ $u->username }}</td>
            </tr>

            <tr>
                <th scope="row" style="width: 150px; background: #e9ecef;" >Email </th>
                <td>{{ $u->email }}</td>
            </tr>

            <tr>
                <th scope="row" style="width: 150px; background: #e9ecef;" >password  </th>
                <td>{{ $u->password }}</td>
            </tr>

            <tr>
                <th scope="row" style="width: 150px; background: #e9ecef;" >Số điện thoại</th>
                <td>{{ $u->phone_number }}</td>
            </tr>

            <tr>
                <th scope="row" style="width: 150px; background: #e9ecef;" >Chức năng </th>
                <td>
                    <a href="{{ route('user_edit',['id'=>$u->id]) }}" class="btn btn-primary" ui-toggle-class="">Chỉnh sửa</a>
                    <a href="{{ route('user_del',['id'=>$u->id]) }}" class="btn btn-danger" ui-toggle-class="" onclick="return confirm('bạn có chắc muốn xóa tài khoản không?')">xóa tài khoản</a>
                </td>

            </tr>

        </tbody>
        @endforeach
    </table>

    <div class="clearfix">
        {{ $users -> links() }}
    </div>
@stop

