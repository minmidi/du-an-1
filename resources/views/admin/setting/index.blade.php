@extends('admin.master')
@section('title','setting-index')
@section('name','Hiển thị chung')
@section('log','Danh sách cấu hình chung')
@section('main')

    <table class="table table-bordered mt-2">
        <tbody>
        @foreach($settings as $s)
        <tr>
            <th scope="row" style="width: 150px; background: #e9ecef;" >Tên</th>
            <td>{{ $s->name }}</td>
        </tr>

        <tr>
            <th scope="row" style="width: 150px; background: #e9ecef;" >Logo </th>
            <td><img src="../images/{{ $s->logo }}" alt="hình ảnh" height="30" width="200"></td>
        </tr>

        <tr>
            <th scope="row" style="width: 150px; background: #e9ecef;" >Số điện thoại </th>
            <td>{{ $s->phone_number }}</td>
        </tr>

        <tr>
            <th scope="row" style="width: 150px; background: #e9ecef;" >Email  </th>
            <td>{{ $s->email }}</td>
        </tr>

        <tr>
            <th scope="row" style="width: 150px; background: #e9ecef;" >Hotline  </th>
            <td>{{ $s->hotline }}</td>
        </tr>

        <tr>
            <th scope="row" style="width: 150px; background: #e9ecef;" >Địa chỉ  </th>
            <td>{{ $s->address }}</td>
        </tr>

        <tr>
            <th scope="row" style="width: 150px; background: #e9ecef;" >URL_Map </th>
            <td>{{ $s->map_url }}</td>
        </tr>

        <tr>
            <th scope="row" style="width: 150px; background: #e9ecef;" >URL_Youtube </th>
            <td>{{ $s->youtube_url }}</td>
        </tr>

        <tr>
            <th scope="row" style="width: 150px; background: #e9ecef;" >URL_Facebook </th>
            <td>{{ $s->facebook_url }}</td>
        </tr>

        <tr>
            <th scope="row" style="width: 150px; background: #e9ecef;" >URL_Video </th>
            <td>{{ $s->intro_video_url }}</td>
        </tr>

        <tr>
            <th scope="row" style="width: 150px; background: #e9ecef;" >Mô tả </th>
            <td>{{ $s->description }}</td>
        </tr>
        <tr>
            <th scope="row" style="width: 150px; background: #e9ecef;" >Chức năng </th>
            <td>
                <a href="{{ route('setting_edit',['id'=>$s->id]) }}" class="btn btn-primary" ui-toggle-class="">Chỉnh sửa</a>
            </td>

        </tr>

        </tbody>
        @endforeach
    </table>

{{--    <div class="clearfix">--}}
{{--        {{ $settings -> links() }}--}}
{{--    </div>--}}

@stop
