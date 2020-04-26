@extends('admin.master')
@section('title','room-service-index')
@section('name','Ý kiến')
@section('log','Danh sách ý kiến khách hàng')
@section('main')
    <form action="" method="GET" class="form-inline" role="form">
        <div class="form-group mr-2">
            <input type="text" class="form-control" name="search" placeholder="nhập tìm kiếm">
        </div>
        <button type="submit" class="btn btn-primary mr-2">
            <i class="fas fa-search"></i>
        </button>
    </form>

    <table class="table table-bordered mt-2">
        <tbody>
        @foreach( $contacts as $rs)
            <tr>
                <th scope="row" style="width: 150px; background: #e9ecef;" >ID</th>
                <td>{{ $rs->id }}</td>
            </tr>

            <tr>
                <th scope="row" style="width: 150px; background: #e9ecef;" >Tên khách hàng</th>
                <td>{{ $rs->name }}</td>
            </tr>

            <tr>
                <th scope="row" style="width: 150px; background: #e9ecef;" >Địa chỉ mail</th>
                <td>{{ $rs->email }}</td>
            </tr>

            <tr>
                <th scope="row" style="width: 150px; background: #e9ecef;" >Ý kiến phản hồi</th>
                <td>{{ $rs->messenger }}</td>
            </tr>

            <tr>
                <th scope="row" style="width: 150px; background: #e9ecef;" >Chức năng </th>
                <td>
                    <a href="{{ route('contact_del',['id'=>$rs->id]) }}" class="btn btn-danger" ui-toggle-class="" onclick="return confirm('bạn có chắc không')">xóa thông tin</a>
                </td>

            </tr>

        </tbody>
        @endforeach
    </table>
    <div class="clearfix">
        {{ $contacts -> links() }}
    </div>
@stop
