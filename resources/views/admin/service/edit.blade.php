@extends('admin.master')
@section('title','service-edit')
@section('name','Chỉnh sửa dịch vụ')
@section('log', 'Sửa Dịch vụ: '.$model->title)
@section('main')
    <form action="" method="POST" role="form" enctype="multipart/form-data">
        @csrf
        <div class="form-group m-3">
            <label for="" class="mt-3">Nhập tiêu đề</label>
            <input type="text" class="form-control" name="title" id='name' placeholder="Nhập tiêu đề" value="{{ $model->title }}">
        </div>

        <div class="form-group m-3">
            <label for="">Icon</label>
            <div>
                <img src="../../../images/{{ $model->images }}" alt="Ảnh">
            </div>
            <input type="file" class="form-control" name="images" id='images' placeholder="Thêm logo">
        </div>

        <div class="form-group m-3">
            <label for="">Mô tả chi tiết </label>
            <textarea class="form-control" name="description" id="description" placeholder="Nhập mô tả chi tiết" rows="5">{{ $model->description }}</textarea>
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
        <button type="submit" class="btn btn-primary m-3" onclick="return confirm('bạn có chắc muốn thực hiện chỉnh sửa không?')">Sửa</button>
    </form>
@stop
