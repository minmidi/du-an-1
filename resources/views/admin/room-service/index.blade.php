@extends('admin.master')
@section('title','room-service-index')
@section('name','Dịch vụ phòng')
@section('log','Danh sách dịch vụ phòng')
@section('main')
    <form action="" method="GET" class="form-inline" role="form">
        <div class="form-group mr-2">
            <input type="text" class="form-control" name="search" placeholder="nhập tìm kiếm">
        </div>
        <button type="submit" class="btn btn-primary mr-2">
            <i class="fas fa-search"></i>
        </button>
        <a href="{{ route('room_service_add') }}" class="btn btn-success"> thêm mới</a>
    </form>

    <table class="table table-bordered mt-2">
        <tbody>
        @foreach($room_sevices as $rs)
            <tr>
                <th scope="row" style="width: 150px; background: #e9ecef;" >ID</th>
                <td>{{ $rs->id }}</td>
            </tr>

            <tr>
                <th scope="row" style="width: 150px; background: #e9ecef;" >Tiêu đề</th>
                <td>{{ $rs->title }}</td>
            </tr>

            <tr>
                <th scope="row" style="width: 150px; background: #e9ecef;" >Mô tả ngắn</th>
                <td>{{ $rs->short_description }}</td>
            </tr>

            <tr>
                <th scope="row" style="width: 150px; background: #e9ecef;" >Mô tả chi tiết</th>
                <td>{{ $rs->description }}</td>
            </tr>

            <tr>
                <th scope="row" style="width: 150px; background: #e9ecef;" >Loại phòng</th>
                <td>{{ $rs->room_types->name}}</td>
            </tr>



            <tr>
                <th scope="row" style="width: 150px; background: #e9ecef;" >Chức năng </th>
                <td>
                    <a href="{{ route('room_service_edit',['id'=>$rs->id]) }}" class="btn btn-primary" ui-toggle-class="">Chỉnh sửa</a>
                    <a href="{{ route('room_service_del',['id'=>$rs->id]) }}" class="btn btn-danger" ui-toggle-class="" onclick="return confirm('bạn có chắc không')">xóa bài</a>
                </td>

            </tr>

        </tbody>
        @endforeach
    </table>
    <div class="clearfix">
        {{ $room_sevices -> links() }}
    </div>
@stop



