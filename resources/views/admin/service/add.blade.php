@extends('admin.master')
@section('title','service-add')
@section('name','Dịch vụ')
@section('log','Thêm dịch vụ')
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
            <label for="">Icon</label>
            <input type="file" class="form-control" name="images" id='images' placeholder="Thêm icon">
        </div>

        <div class="form-group m-3">
            <label for="">Mô tả chi tiết </label>
            <textarea class="form-control" name="description" id="description" placeholder="Nhập mô tả chi tiết" rows="5"></textarea>
            @if($errors->has('description'))
                {{$errors->first('description')}}
            @endif
        </div>

        <div class="form-group m-3">
            <label for="">Trạng thái</label>
            <div class="radio">
                <label>
                    <input type="radio" name="status" value="0" checked="checked">
                    Không kích hoạt
                </label>
                <label>
                    <input type="radio" name="status" value="1" checked="checked">
                    Kích hoạt
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary m-3">Thêm mới</button>
    </form>
@stop

