@extends('admin.master')
@section('title','post-index')
@section('name','Bài viết')
@section('log','Danh sách bài viết')
@section('main')
    <form action="" class="form-inline" role="form">
        <div class="form-group mr-2">
            <input type="text" class="form-control" name="search" placeholder="nhập tìm kiếm">
        </div>
        <button type="submit" class="btn btn-primary mr-2">
            <i class="fas fa-search"></i>
        </button>
        <a href="{{ route('post_add') }}" class="btn btn-success"> thêm mới</a>
    </form>

    <table class="table table-bordered mt-2">
        <tbody>
        @foreach($posts as $p)
            <tr>
                <th scope="row" style="width: 150px; background: #e9ecef;" >ID</th>
                <td>{{ $p->id }}</td>
            </tr>

            <tr>
                <th scope="row" style="width: 150px; background: #e9ecef;" >Tiêu đề</th>
                <td>{{ $p->title }}</td>
            </tr>

            <tr>
                <th scope="row" style="width: 150px; background: #e9ecef;" >Slug</th>
                <td>{{ $p->slug }}</td>
            </tr>

            <tr>
                <th scope="row" style="width: 150px; background: #e9ecef;" >Mô tả ngắn</th>
                <td>{{ $p->short_description }}</td>
            </tr>

            <tr>
                <th scope="row" style="width: 150px; background: #e9ecef;" >Mô tả chi tiết</th>
                <td>{{ $p->description }}</td>
            </tr>

            <tr>
                <th scope="row" style="width: 150px; background: #e9ecef;" >Hình ảnh </th>
                <td><img src="../images/{{ $p->images }}" alt="hình ảnh" height="100" width="150"></td>
            </tr>

            <tr>
                <th scope="row" style="width: 150px; background: #e9ecef;" >Trạng thái </th>
                <td>{{ $p->status }}</td>
            </tr>

            <tr>
                <th scope="row" style="width: 150px; background: #e9ecef;" >Chức năng </th>
                <td>
                    <a href="{{ route('post_edit',['id'=>$p->id]) }}" class="btn btn-primary" ui-toggle-class="">Chỉnh sửa</a>
                    <a href="{{ route('post_del',['id'=>$p->id]) }}" class="btn btn-danger" ui-toggle-class="" onclick="return confirm('bạn có chắc không')">xóa bài</a>
                </td>

            </tr>

        </tbody>
        @endforeach
    </table>
    <div class="clearfix">
        {{ $posts -> links() }}
    </div>
@stop



