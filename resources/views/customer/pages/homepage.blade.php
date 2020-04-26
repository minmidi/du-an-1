@extends('customer.master')
@section('title','halovietnam')
@section('active','active')
@section('main')
@include('customer.slider')

    <section id="about_rooms">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    @foreach ($abouts as $about)
                    <div id="about">
                        <div class="main_title mt_wave a_left">
                            <h2>{{ $about->title }}</h2>
                        </div>
                        <p class="main_description a_left">{{ $about->short_description }}</p>
                    </div>
                    @endforeach

                </div>
                <div class="col-md-8">
                    <div id="rooms">
                        <div class="main_title mt_wave a_left">
                            <h2>PHÒNG YÊU THÍCH</h2>
                        </div>
                        <p class="main_description">Chúng tôi rất vui khi được phục vụ quý khách. Với những phòng mang đẳng cấp và chất lượng chúng tôi luôn muốn đem đến cho quý khách một sự trải nghiệm tốt nhất và thoải mái nhất </p>
                        <div class="row">

                            @foreach ($room_types as $item)
                            <div class="col-md-4">
                                <article class="room">
                                    <figure>
                                        <div class="price">${{ $item->price }} <span>/ đêm</span></div>
                                        <a class="hover_effect h_blue h_link" href="{{ route('room_view',['id'=>$item->id]) }}">
                                            <img src="../../../images/{{ $item->images }}" class="img-responsive" alt="Image" style="height: 150px">
                                        </a>
                                        <figcaption>
                                            <h5><a href="{{ route('room_view',['id'=>$item->id]) }}">{{ $item->name }}</a></h5>
                                            <span class="f_right"><a href="{{ route('room_view',['id'=>$item->id]) }}" class="button btn_xs btn_blue">Xem phòng</a></span>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="lightgrey_bg" id="features">
        <div class="container">
            <div class="main_title mt_wave a_center">
                <h2>Dịch vụ tuyệt vời của chúng tôi</h2>
            </div>
            <p class="main_description a_center">Chúng tôi rất vui khi được phục vụ quý khách. Với những dịch vụ tốt nhất của chúng tôi luôn muốn đem đến cho quý khách một sự trải nghiệm tốt nhất và thoải mái nhất</p>
            <div class="row">
                <div class="col-md-7">
                    <img src="../../../Customer/images/spa/spa_hero.jpg" alt="" style="width: 650px; height: 420px;">
                </div>

                <div class="col-md-5">
                    @foreach ($services as $item)
                    <div class="owl-thumbs" data-slider-id="features">
                        <div class="owl-thumb-item">
                            <span class="media-left"><img src="../../../images/{{ $item->images }}" alt="" style="width:38px; height:38px;"></span>
                            <div class="media-body">
                                <h5>{{ $item->title }}</h5>
                                <p>{{ $item->description }}</p>
                            </div>
                        </div>

                    </div>
                    @endforeach
                </div>


            </div>
        </div>
    </section>

    <section id="testimonials_style_2" class="grey_bg">
        <div class="container">
            <div class="main_title mt_wave a_center">
                <h2>Mọi người nghĩ gì về chúng tôi</h2>
            </div>
            <p class="main_description a_center">Hầu hết những khách hàng đều đánh giá rất cao về chúng tôi, hãy xem họ nói gì về chúng tôi</p>
            <div class="row">

                <div class="col-md-4">
                    <div class="review_item">
                        <div class="review_content">
                            <h3>Thật tuyệt vời </h3>
                            <div class="review_rating">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <p>Tôi thấy đây là một nơi thật tuyệt vời, tôi cảm thấy rất thoải mái khi đến đây, bạn nên thử đến đây và trải nghiệm, nó quá hoàn hảo</p>
                        </div>
                        <div class="review_author">
                            <img src="../../../Customer/images/users/user1.jpg" alt="Image">
                            <div class="author_info">
                                <h5>Minmin</h5>
                                <span class="place">Hà Nội</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="review_item">
                        <div class="review_content">
                            <h3>Thật tuyệt vời </h3>
                            <div class="review_rating">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <p>Tôi thấy đây là một nơi thật tuyệt vời, tôi cảm thấy rất thoải mái khi đến đây, bạn nên thử đến đây và trải nghiệm, nó quá hoàn hảo</p>
                        </div>
                        <div class="review_author">
                            <img src="../../../Customer/images/users/user2.jpg" alt="Image">
                            <div class="author_info">
                                <h5>Chimi</h5>
                                <span class="place">Hà Nội</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="review_item">
                        <div class="review_content">
                            <h3>Thật tuyệt vời </h3>
                            <div class="review_rating">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <p>Tôi thấy đây là một nơi thật tuyệt vời, tôi cảm thấy rất thoải mái khi đến đây, bạn nên thử đến đây và trải nghiệm, nó quá hoàn hảo</p>
                        </div>
                        <div class="review_author">
                            <img src="../../../Customer/images/users/user3.jpg" alt="Image">
                            <div class="author_info">
                                <h5>Chipi</h5>
                                <span class="place">Hà Nội</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="white_bg" id="contact">
        <div class="container">
            <div class="main_title mt_wave a_center">
                <h2>Liên hệ với chúng tôi</h2>
            </div>
            <p class="main_description a_center">Nếu quý khách có bất kỳ thắc mắc nào quý khách có thể liên hệ ngay với chúng tôi. Chúng tôi rất hân hạnh được phục vụ và giải đáp những thắc mắc của quý khách</p>
            <div class="row">
                <div class="col-md-6">
                    <div id="map-canvas">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.0510269426486!2d105.7366208144359!3d21.030644193090993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454888e5e549b%3A0xac639a07016b459!2zTmfDtSAzMjAgWHXDom4gUGjGsMahbmcsIE5n4buNYyBN4bqhY2gsIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1587550206559!5m2!1svi!2s"
                                width="570" height="380" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">

                        @foreach ($settings as $item)
                            <div class="contact-items">
                            <div class="col-md-4 col-sm-4">
                                <div class="contact-item">
                                    <i class="fa fa-phone"></i>
                                    <h6>{{ $item->phone_number }}</h6>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="contact-item">
                                    <i class="glyphicon glyphicon-phone-alt"></i>
                                    <h6>{{ $item->hotline }}</h6>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="contact-item">
                                    <i class="fa fa-envelope"></i>
                                    <h6><a href="#" class="__cf_email__" data-cfemail="1e7d71706a7f7d6a5e6d776a7b307d7173">{{ $item->email }}</a></h6>
                                </div>
                            </div>
                        </div>
                        @endforeach


                    </div>
                    <form id="contact-form" name="contact-form" method="POST" action="{{ route('contacts') }}">
                        @csrf
                        @if(session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session()->get('message') }}
                                </div>
                        @endif
                        <div id="contact-result"></div>
                        <div class="form-group">
                            <input class="form-control" name="name" placeholder="Nhập họ và tên" type="text">
                            @if($errors->has('name'))
                            {{$errors->first('name')}}
                        @endif
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="email" placeholder="Nhập địa chỉ email" type="email">
                            @if($errors->has('email'))
                            {{$errors->first('email')}}
                        @endif
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="messenger" placeholder="Ý kiến phản hồi của bạn"></textarea>
                            @if($errors->has('messenger'))
                            {{$errors->first('messenger')}}
                        @endif
                        </div>
                        <button class="button btn_lg btn_blue btn_full upper" type="submit"><i class="fa fa-location-arrow"></i>Gửi phản hồi</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section id="subscribe" class="gradient_overlay">
        <div class="inner">
            <div class="container">
                <div class="main_title mt_wave mt_white a_center">
                    <h2>SUBSCRIBE TO OUR NEWSLETTER</h2>
                </div>
                <p class="main_description md_white a_center">Subscribe to our newsletter to receive exclusive offers and the latest news.</p>
                <form id="subscribe-form" name="subscribe">
                    <div class="form-group">
                        <input type="email" name="subscribe-email" class="form-control" placeholder="Enter your email">
                        <button class="button btn_lg btn_yellow" type="submit"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </section>

@stop
