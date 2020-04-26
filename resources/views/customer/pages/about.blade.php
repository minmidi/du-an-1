@extends('customer.master')
@section('title','halovietnam')
@section('active_about','active')
@section('main')

<main id="about_us_page">
    <div class="container">

        @foreach ($abouts as $item)
        <div class="row">
            <div class="col-md-7">
                <h1 class="mb30">{{  $item->title }}</h1>
                <p>{{  $item->description }}</p>
            </div>
            <div class="col-md-5">
                <div class="about_img">
                    <img src="../../../images/{{ $item->images }}" class=" img-responsive" alt="Image">
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="countup_box">
                            <div class="inner">
                                <div class="countup number" data-count="150"></div>
                                <div class="text">Rooms</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="countup_box">
                            <div class="inner">
                                <div class="countup number" data-count="50"></div>
                                <div class="text">staffs</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="countup_box">
                            <div class="inner">
                                <div class="countup number" data-count="4"></div>
                                <div class="text">restaurant</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="countup_box">
                            <div class="inner">
                                <div class="countup number" data-count="3"></div>
                                <div class="text">pools</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        <div class="row image-gallery">
            <div class="col-md-3 col-sm-6 mt20 mb20 br2">
                <a href="images/restaurant.jpg" class="hover_effect h_lightbox h_blue">
                    <img src="{{ asset('Customer/images/restaurant.jpg') }}" class="img-responsive full_width br2" alt="Image">
                </a>
            </div>
            <div class="col-md-3 col-sm-6 mt20 mb20 br2">
                <a href="images/spa.jpg" class="hover_effect h_lightbox h_blue">
                    <img src="{{ asset('Customer/images/spa.jpg') }}" class="img-responsive full_width br2" alt="Image">
                </a>
            </div>
            <div class="col-md-3 col-sm-6 mt20 mb20 br2">
                <a href="images/conference.jpg" class="hover_effect h_lightbox h_blue">
                    <img src="{{ asset('Customer/images/conference.jpg') }}" class="img-responsive full_width br2" alt="Image">
                </a>
            </div>
            <div class="col-md-3 col-sm-6 mt20 mb20 br2">
                <a href="images/swimming.jpg" class="hover_effect h_lightbox h_blue">
                    <img src="{{ asset('Customer/images/swimming.jpg') }}" class="img-responsive full_width br2" alt="Image">
                </a>
            </div>
        </div>
    </div>
</main>

@stop
