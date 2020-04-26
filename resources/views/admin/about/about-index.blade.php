@extends('admin.master')
@section('title','setting-index')
@section('name','Giới thiệu')
@section('log','Giới thiệu chi tiết')
@section('main')

    <table class="table table-bordered mt-2">
        <tbody>
        @foreach($abouts as $a)
            <tr>
                <th scope="row" style="width: 150px; background: #e9ecef;" >Tiêu đề</th>
                <td>{{ $a->title }}</td>
            </tr>

            <tr>
                <th scope="row" style="width: 150px; background: #e9ecef;" >Logo </th>
                <td><img src="../images/{{ $a->images }}" alt="hình ảnh" height="100" width="150"></td>
            </tr>
            <tr>
                <th scope="row" style="width: 150px; background: #e9ecef;" >Mô tả ngắn</th>
                <td>{{ $a->short_description }}</td>
            </tr>

            <tr>
                <th scope="row" style="width: 150px; background: #e9ecef;" >Mô tả </th>
                <td>{{ $a->description }}</td>
            </tr>
            <tr>
                <th scope="row" style="width: 150px; background: #e9ecef;" >Chức năng </th>
                <td>
                    <a href="{{ route('abouts_edit',['id'=>$a->id]) }}" class="btn btn-primary" ui-toggle-class="">Chỉnh sửa</a>
                </td>

            </tr>

        </tbody>
        @endforeach
    </table>

    {{--    <div class="clearfix">--}}
    {{--        {{ $settings -> links() }}--}}
    {{--    </div>--}}

@stop
