@extends('customer.master')
@section('title','halovietnam')
@section('active_room','active')
@section('main')
<div class="page_title gradient_overlay" style="background: url(../../../Customer/images/page_title_bg.jpg);">
    <div class="container">
        <div class="inner">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h1>Phòng</h1>
                    <ol class="breadcrumb">
                        <li><a href="{{ route('homepage') }}">Trang chủ</a></li>
                        <li>Phòng</li>
                        <li>{{ $room_types->name }}</li>
                    </ol>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="price">
                        <div class="inner">
                            €90 <span>per night</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<main>
    <div class="container">
        <div class="row">

            <div class="col-md-8">
                <div>
                    <img src="../../../images/{{ $room_types->images }}" style="width:770px; height:500px;" alt="">
                </div>
                <div class="main_title mt50">
                    <h2>Giới thiệu</h2>
                </div>
                <p>{{ $room_types->description }}</p>
                <div class="main_title t_style a_left s_title mt50">
                    <div class="c_inner">
                        <h2 class="c_title">ROOM SERVICES</h2>
                    </div>
                </div>
                <div class="room_facilitys_list">
                    <div class="all_facility_list">
                        <div class="col-sm-4 nopadding">
                            <ul class="list-unstyled">
                                <li><i class="fa fa-check"></i>Double Bed</li>
                                <li><i class="fa fa-check"></i>80 Sq mt</li>
                                <li><i class="fa fa-check"></i>6 Persons</li>
                                <li><i class="fa fa-check"></i>Free Internet</li>
                            </ul>
                        </div>
                        <div class="col-sm-4 nopadding">
                            <ul class="list-unstyled">
                                <li><i class="fa fa-check"></i>Free Wi-Fi</li>
                                <li><i class="fa fa-check"></i>Breakfast Include</li>
                                <li><i class="fa fa-check"></i>Private Balcony</li>
                                <li class="no"><i class="fa fa-times"></i>Free Newspaper</li>
                            </ul>
                        </div>
                        <div class="col-sm-4 nopadding_left">
                            <ul class="list-unstyled">
                                <li class="no"><i class="fa fa-times"></i>Flat Screen Tv</li>
                                <li><i class="fa fa-check"></i>Full Ac</li>
                                <li class="no"><i class="fa fa-times"></i>Beach View</li>
                                <li><i class="fa fa-check"></i>Room Service</li>
                            </ul>
                        </div>
                    </div>
                </div>





                <div class="similar_rooms">
                    <div class="main_title t_style5 l_blue s_title a_left">
                        <div class="c_inner">
                            <h2 class="c_title">Gợi ý phòng</h2>
                        </div>
                    </div>
                    <div class="row">

                        @foreach ($room_type as $item)
                            <div class="col-md-4">
                            <article>
                                <figure>
                                    <a href="{{ route('room_view',['id'=>$item->id]) }}" class="hover_effect h_blue h_link"><img src="../../../images/{{ $item->images }}" alt="Image" style="height: 150px;"></a>
                                    <div class="price">€{{ $item->price }}<span> đêm</span></div>
                                    <figcaption>
                                        <h4><a href="{{ route('room_view',['id'=>$item->id]) }}">{{ $item->name }}</a></h4>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>





            <div class="col-md-4">
                <div class="sidebar">
                    @foreach ($settings as $item)
                    <aside class="widget">
                        <h4>Liên hệ</h4>
                        <div class="help">
                            Nếu bạn có bất kỳ câu hỏi nào có thể liên hệ với chúng tôi
                            <div class="phone"><i class="fa  fa-phone"></i><a href="tel:{{ $item->phone_number }}">{{ $item->phone_number }}</a></div>
                            <div class="email"><i class="fa  fa-envelope-o "></i>{{ $item->email }}
                        </div>
                    </aside>
                    @endforeach

                    <aside class="widget">
                        <h4>Latest Posts</h4>
                        <div class="latest_posts">
                            @foreach ($posts as $item)
                            <article class="latest_post">
                                <figure>
                                    <a href="{{ route('blog_view',['id'=>$item->id]) }}" class="hover_effect h_link h_blue">
                                        <img src="../../../images/{{ $item->images }}" alt="Image" style="width: 55px; height: 41px;">
                                    </a>
                                </figure>
                                <div class="details">
                                    <h6><a href="{{ route('blog_view',['id'=>$item->id]) }}">{{ $item->title }}</a></h6>
                                    <span><i class="fa fa-calendar"></i>{{ $item->created_at }}</span>
                                </div>
                            </article>

                            @endforeach

                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</main>
@stop
