@extends('admin.master')
@section('title','slider-index')
@section('name','Slider')
@section('log','Danh sách slider')
@section('main')
    <form action="" method="POST" class="form-inline" role="form">
        <div class="form-group mr-2">
            <input type="text" class="form-control" name="search" placeholder="nhập tìm kiếm">
        </div>
        <button type="submit" class="btn btn-primary mr-2">
            <i class="fas fa-search"></i>
        </button>
        <a href="{{ route('slider_add') }}" class="btn btn-success"> thêm mới</a>
    </form>

    <table class="table table-bordered mt-2">
        <tbody>
        @foreach($sliders as $sl)
            <tr>
                <th scope="row" style="width: 150px; background: #e9ecef;" >ID</th>
                <td>{{ $sl->id }}</td>
            </tr>

            <tr>
                <th scope="row" style="width: 150px; background: #e9ecef;" >Hình ảnh </th>
                <td><img src="../images/{{ $sl->images }}" alt="hình ảnh" height="200" width="350"></td>
            </tr>

            <tr>
                <th scope="row" style="width: 150px; background: #e9ecef;" >Trạng thái </th>
                <td>{{ $sl->status }}</td>
            </tr>

            <tr>
                <th scope="row" style="width: 150px; background: #e9ecef;" >Chức năng </th>
                <td>
                    <a href="{{ route('slider_edit',['id'=>$sl->id]) }}" class="btn btn-primary" ui-toggle-class="">Chỉnh sửa</a>
                    <a href="{{ route('slider_del',['id'=>$sl->id]) }}" class="btn btn-danger" ui-toggle-class="" onclick="return confirm('bạn có chắc không')">xóa ảnh</a>
                </td>

            </tr>

        </tbody>
        @endforeach
    </table>
    <div class="clearfix">
        {{ $sliders->links() }}
    </div>
@stop



