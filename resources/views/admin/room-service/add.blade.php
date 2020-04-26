@extends('admin.master')
@section('title','room-service-add')
@section('name','Dịch vụ phòng')
@section('log','Thêm dịch vụ phòng')
@section('main')
    <form action="" method="POST" enctype="multipart/form-data" role="form" >
        @csrf
        <div class="form-group m-3">
            <label for="" class="mt-3">Nhập tiêu đề</label>
            <input type="text" class="form-control" name="title" id='name' placeholder="Nhập tiêu đề">
            <!--Gọi validate -->
            @if($errors->has('title'))
                {{$errors->first('title')}}
            @endif
        </div>

        <div class="form-group m-3">
            <label for="">Mô tả ngắn</label>
            <input type="text" class="form-control" name="short_description" id="short_description" placeholder="Nhập mô tả ngắn">
            @if($errors->has('short_description'))
                {{$errors->first('short_description')}}
            @endif
        </div>

        <div class="form-group m-3">
            <label for="">Mô tả chi tiết </label>
            <textarea class="form-control" name="description" id="description" placeholder="Nhập mô tả chi tiết" rows="5"></textarea>
            @if($errors->has('description'))
                {{$errors->first('description')}}
            @endif
        </div>

        <div class="form-group m-3">
            <label for="">Kiểu phòng</label>
            <select name="room_type_id" id="room_type_id" class="form-control" >
            @foreach($room_types as $rs)
                <option value="{{ $rs->id}}">
                    {{ $rs->name }}
                </option>
            @endforeach
            </select>
        </div>


{{--        <div class="form-group m-3">--}}
{{--            <label for="" class="mt-3">Nhập tiêu đề</label>--}}
{{--            <input type="text" class="form-control" name="room_type_id" id='room_type_id' placeholder="Nhập room_type_id">--}}
{{--            <!--Gọi validate -->--}}
{{--            @if($errors->has('room_type_id'))--}}
{{--                {{$errors->first('room_type_id')}}--}}
{{--            @endif--}}
{{--        </div>--}}


        <button type="submit" class="btn btn-primary m-3">Thêm mới</button>
    </form>
@stop
