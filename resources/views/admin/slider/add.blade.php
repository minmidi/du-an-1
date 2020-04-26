@extends('admin.master')
@section('title','slider-add')
@section('name','Slider')
@section('log','Thêm slider')
@section('main')
    <form action="" method="POST" enctype="multipart/form-data" role="form" >
        @csrf
        <div class="form-group m-3">
            <label for="">Thêm ảnh</label>
            <input type="file" class="form-control" name="images" id='images' placeholder="Thêm ảnh">
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

