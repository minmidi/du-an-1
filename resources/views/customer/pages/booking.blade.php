@extends('customer.master')
@section('title','halovietnam')
@section('main')

<div class="page_title gradient_overlay" style="background: url(../../../Customer/images/page_title_bg.jpg);">
    <div class="container">
        <div class="inner">
            <h1>Đặt phòng</h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('homepage') }}">Trang chủ</a></li>
                <li>Đặt phòng</li>
            </ol>
        </div>
    </div>
</div>

<main id="booking_page">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div id="booking_advanced">
                    <div class="main_title a_left upper">
                        <h2>Đặt phòng trực tuyến</h2>
                    </div>

                    <div class="row">
                        <form id="booking_form_advanced" method='POST'>
                            @csrf
                            @if(session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session()->get('message') }}
                                </div>
                            @endif
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tên của bạn</label>
                                    <input name="name" type="text" class="form-control" placeholder="Nhập tên">
                                    @if($errors->has('name'))
                                        {{$errors->first('name')}}
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" name="email" type="email" placeholder="Nhập địa chỉ eamil">
                                    @if($errors->has('email'))
                                        {{$errors->first('email')}}
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Số điện thoại</label>
                                    <input name="number_phone" type="text" class="form-control" placeholder="Nhập số điện thoại">
                                    @if($errors->has('number_phone'))
                                        {{$errors->first('number_phone')}}
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Quốc gia</label>
                                    <input name="country" type="text" class="form-control" value="Việt Nam">
                                    @if($errors->has('country'))
                                        {{$errors->first('country')}}
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Ngày đến</label>
                                    <div class="form_date">
                                        <input class="form-control" name="arrival_date" type="date" value="2020-01-01" id="example-date-input">
                                        @if($errors->has('arrival_date'))
                                            {{$errors->first('arrival_date')}}
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Ngày đi</label>
                                    <div class="form_date">
                                        <input class="form-control" name="departure_date" type="date" value="2020-01-01" id="example-date-input">
                                        @if($errors->has('departure_date'))
                                            {{$errors->first('departure_date')}}
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Người lớn</label>
                                    <input name="aldult" type="number" class="form-control" placeholder="Nhập số người lớn" value="0">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Trẻ em</label>
                                    <input name="children" type="text" class="form-control" placeholder="Nhập số trẻ em" value="0">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Kiểu phòng</label>
                                    <div class="form_select">
                                        <select name="room_type_id" class="form-control" title="Select Room Type" data-header="Select Room Type">
                                            @foreach($room_types as $rs)
                                            <option value="{{ $rs->id}}">
                                                {{ $rs->name }}
                                            </option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Ghi chú</label>
                                    <textarea class="form-control" name="comment" placeholder="Ghi chú của bạn"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="button btn_blue pull-right"> <i
                                        class="fa fa-calendar-check-o" aria-hidden="true"></i> Đặt phòng ngay
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>



            <div class="col-md-4">
                <div class="special_offers">
                    <div class="main_title a_left upper">
                        <h2>Một số phòng</h2>
                    </div>
                    @foreach ($room_detais as $item)
                    <article class="room mb40">
                        <figure>
                            <a href="{{ route('room_view',['id'=>$item->id]) }}" class="hover_effect h_blue h_link">
                                <img src="../../../images/{{ $item->images }}" class="img-responsive" alt="Image">
                            </a>
                            <figcaption>
                                <h4><a href="{{ route('room_view',['id'=>$item->id]) }}">{{ $item->name }}</a></h4>
                                <div class="price">$ {{ $item->price }}<span> / đêm</span></div>
                            </figcaption>
                        </figure>
                    </article>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
</main>


@stop
