@extends('admin.master')
@section('title','room-service-index')
@section('name','Đặt phòng')
@section('log','Danh sách khách đặt phòng')
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
        @foreach( $bookings as $rs)
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
                <th scope="row" style="width: 150px; background: #e9ecef;" >Số điện thoại</th>
                <td>{{ $rs->number_phone }}</td>
            </tr>

            <tr>
                <th scope="row" style="width: 150px; background: #e9ecef;" >Quốc gia</th>
                <td>{{ $rs->country }}</td>
            </tr>

            <tr>
                <th scope="row" style="width: 150px; background: #e9ecef;" >Checkin</th>
                <td>{{ $rs->arrival_date }}</td>
            </tr>

            <tr>
                <th scope="row" style="width: 150px; background: #e9ecef;" >Checkout</th>
                <td>{{ $rs->departure_date }}</td>
            </tr>

            <tr>
                <th scope="row" style="width: 150px; background: #e9ecef;" >Số người lớn</th>
                <td>{{ $rs->aldult }}</td>
            </tr>

            <tr>
                <th scope="row" style="width: 150px; background: #e9ecef;" >Số trẻ em</th>
                <td>{{ $rs->children }}</td>
            </tr>

            <tr>
                <th scope="row" style="width: 150px; background: #e9ecef;" >Ghi chú khách hàng</th>
                <td>{{ $rs->comment }}</td>
            </tr>

            <tr>
                <th scope="row" style="width: 150px; background: #e9ecef;" >Loại phòng</th>
                <td>{{ $rs->room_types->name}}</td>
            </tr>



            <tr>
                <th scope="row" style="width: 150px; background: #e9ecef;" >Chức năng </th>
                <td>
                    <a href="{{ route('booking_room_del',['id'=>$rs->id]) }}" class="btn btn-danger" ui-toggle-class="" onclick="return confirm('bạn có chắc không')">Xóa thông tin</a>
                </td>

            </tr>

        </tbody>
        @endforeach
    </table>
    <div class="clearfix">
        {{ $bookings -> links() }}
    </div>
@stop
