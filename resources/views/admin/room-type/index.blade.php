@extends('admin.master')
@section('title','room-type-index')
@section('name','Kiểu phòng')
@section('log','Danh sách phòng')
@section('main')
    <form action="" method="GET" class="form-inline" role="form">
        <div class="form-group mr-2">
            <input type="text" class="form-control" name="search" placeholder="nhập tìm kiếm">
        </div>
        <button type="submit" class="btn btn-primary mr-2">
            <i class="fas fa-search"></i>
        </button>
        <a href="{{ route('room_type_add') }}" class="btn btn-success"> thêm mới</a>
    </form>

    <table class="table table-bordered mt-2">
        <tbody>
        @foreach($room_types as $rt)
            <tr>
                <th scope="row" style="width: 150px; background: #e9ecef;" >ID</th>
                <td>{{ $rt->id }}</td>
            </tr>

            <tr>
                <th scope="row" style="width: 150px; background: #e9ecef;" >Tên loại phòng</th>
                <td>{{ $rt->name }}</td>
            </tr>

            <tr>
                <th scope="row" style="width: 150px; background: #e9ecef;" >Slug</th>
                <td>{{ $rt->slug }}</td>
            </tr>

            <tr>
                <th scope="row" style="width: 150px; background: #e9ecef;" >Hình ảnh </th>
                <td><img src="../images/{{ $rt->images }}" alt="hình ảnh" height="100" width="150"></td>
            </tr>

            <tr>
                <th scope="row" style="width: 150px; background: #e9ecef;" >Giá phòng</th>
                <td>{{ $rt->price }}</td>
            </tr>

            <tr>
                <th scope="row" style="width: 150px; background: #e9ecef;" >Mô tả ngắn</th>
                <td>{{ $rt->short_description }}</td>
            </tr>

            <tr>
                <th scope="row" style="width: 150px; background: #e9ecef;" >Mô tả chi tiết</th>
                <td>{{ $rt->description }}</td>
            </tr>

            <tr>
                <th scope="row" style="width: 150px; background: #e9ecef;" >Chức năng </th>
                <td>
                    <a href="{{ route('room_type_edit',['id'=>$rt->id]) }}" class="btn btn-primary" ui-toggle-class="">Chỉnh sửa</a>
                    <a href="{{ route('room_type_del',['id'=>$rt->id]) }}" class="btn btn-danger" ui-toggle-class="" onclick="return confirm('bạn có chắc không')">xóa bài</a>
                </td>

            </tr>

        </tbody>
        @endforeach
    </table>
    <div class="clearfix">
        {{ $room_types -> links() }}
    </div>
@stop



