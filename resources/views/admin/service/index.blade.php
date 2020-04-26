@extends('admin.master')
@section('title','service-index')
@section('name','Dịch vụ')
@section('log','Danh sách dịch vụ')
@section('main')
    <form action="" method="GET" class="form-inline" role="form">
        <div class="form-group mr-2">
            <input type="text" class="form-control" name="search" placeholder="nhập tìm kiếm">
        </div>
        <button type="submit" class="btn btn-primary mr-2">
            <i class="fas fa-search"></i>
        </button>
        <a href="{{ route('service_add') }}" class="btn btn-success"> thêm mới</a>
    </form>

    <table class="table table-bordered mt-2">
        <tbody>
        @foreach($services as $sv)
            <tr>
                <th scope="row" style="width: 150px; background: #e9ecef;" >ID</th>
                <td>{{ $sv->id }}</td>
            </tr>

            <tr>
                <th scope="row" style="width: 150px; background: #e9ecef;" >Tiêu đề</th>
                <td>{{ $sv->title }}</td>
            </tr>

            <tr>
                <th scope="row" style="width: 150px; background: #e9ecef;" >Icon </th>
                <td><img src="../images/{{ $sv->images }}" alt="hình ảnh" height="100" width="150"></td>
            </tr>



            <tr>
                <th scope="row" style="width: 150px; background: #e9ecef;" >Mô tả chi tiết</th>
                <td>{{ $sv->description }}</td>
            </tr>



            <tr>
                <th scope="row" style="width: 150px; background: #e9ecef;" >Trạng thái </th>
                <td>{{ $sv->status }}</td>
            </tr>

            <tr>
                <th scope="row" style="width: 150px; background: #e9ecef;" >Chức năng </th>
                <td>
                    <a href="{{ route('service_edit',['id'=>$sv->id]) }}" class="btn btn-primary" ui-toggle-class="">Chỉnh sửa</a>
                    <a href="{{ route('service_del',['id'=>$sv->id]) }}" class="btn btn-danger" ui-toggle-class="" onclick="return confirm('bạn có chắc không')">xóa bài</a>
                </td>

            </tr>

        </tbody>
        @endforeach
    </table>
    <div class="clearfix">
        {{ $services -> links() }}
    </div>
@stop



