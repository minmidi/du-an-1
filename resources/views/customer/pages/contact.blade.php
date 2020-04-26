@extends('customer.master')
@section('title','halovietnam')
@section('active_contact','active')
@section('main')

    <div id="map">
        <div id="google-map">
            <button class="button  openmap-btn" id="openStreetView">Toggle Street View</button>
        </div>
        <div id="map-canvas"></div>
    </div>

    <main id="contact_page">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="main_title a_left">
                        <h2>CONTACT US</h2>
                    </div>
                    <form id="contact-form-page" method="POST" action="{{ route('contacts') }}">
                        <div class="row">
                            @csrf
                            <div class="form-group col-md-6 col-sm-6">
                                <label class="control-label">Họ và tên</label>
                                <input type="text" class="form-control" name="name" placeholder="Nhập họ vè tên">
                            </div>

                            <div class="form-group col-md-6 col-sm-6">
                                <label class="control-label">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Nhập địa chỉ email">
                            </div>

                            <div class="form-group col-md-12">
                                <label class="control-label">Phản hồi</label>
                                <textarea class="form-control" name="message" placeholder="Ý kiến phản hồi của bạn"></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <button type="submit" class="button  btn_blue mt40 upper pull-right">
                                    <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Gủi phản hồi
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                @foreach ($settings as $item)
                <div class="col-md-4">
                    <div class="main_title a_left">
                        <h2>Thông tin</h2>
                    </div>
                    <ul class="contact-info upper">
                        <li>
                            <span>Địa chỉ</span> {{ $item->address }}
                        </li>
                        <li>
                            <span>EMAIL:</span> {{ $item->email }}
                        </li>
                        <li>
                            <span>Hotline</span> {{ $item->hotline }}
                        </li>
                        <li>
                            <span>PHONE:</span> {{ $item->phone_number }}
                        </li>

                    </ul>

                </div>
                @endforeach

            </div>
        </div>
    </main>

@stop
