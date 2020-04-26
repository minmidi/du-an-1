
<footer>
    <div class="inner ">
        <div class="container ">
            <div class="row ">
                <div class="col-md-3 col-sm-6 widget ">
                    @foreach ($settings as $setting)
                    <div class="about ">
                        <a href="index.html "><img class="logo " src="../../../images/{{ $setting->logo }}" height="32 " alt="Logo "></a>
                        <p>{{ $setting->description }}</p>
                    </div>
                    @endforeach
                </div>
                <div class="col-md-3 col-sm-6 widget ">
                    <h5>Có gì mới</h5>
                    <ul class="blog_posts ">

                            <li><a href="{{ route('blog_view',['id'=>$item->id]) }}">Live your myth in Greece</a><small></small></li>
                            <li><a href="{{ route('blog_view',['id'=>$item->id]) }}">Live your myth in Greece</a><small></small></li>
                            <li><a href="{{ route('blog_view',['id'=>$item->id]) }}">Live your myth in Greece</a><small></small></li>
                            <li><a href="{{ route('blog_view',['id'=>$item->id]) }}">Live your myth in Greece</a><small></small></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 widget ">
                    <h5>Useful Links</h5>
                    <ul class="useful_links ">
                        <li><a href="#">Về chúng tôi</a></li>
                        <li><a href="# ">Liên hệ</a></li>
                    </ul>
                </div>
                @foreach ($settings as $setting)
                <div class="col-md-3 col-sm-6 widget ">
                    <h5>Liên hệ</h5>
                    <address>
                        <ul class="address_details ">
                            <li><i class="glyphicon glyphicon-map-marker "></i>{{ $setting->address }}</li>
                            <li><i class="glyphicon glyphicon-phone-alt "></i> SĐT: {{ $setting->phone_number }} </li>
                            <li><i class="fa fa-fax "></i> Hotline: {{ $setting->hotline }}</li>
                            <li><i class="fa fa-envelope "></i> Email: <a href=""><span class="__cf_email__ " data-cfemail="95f6fafbe1f4f6e1d5e6fce1f0bbf6faf8 ">{{ $setting->email }}</a></li>
                        </ul>
                    </address>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="subfooter ">
        <div class="container ">
            <div class="row ">
                <div class="col-md-6 col-sm-6 ">
                    <div class="copyrights ">
                        Copyright 2020 <a href="{{ route('homepage') }}">Hola Hotel
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 ">
                    <div class="social_media ">
                        <a class="facebook " data-original-title="Facebook " data-toggle="tooltip " href="{{ $setting->facebook_url }}"><i class="fa fa-facebook "></i></a>
                        <a class="twitter " data-original-title="Twitter " data-toggle="tooltip " href="{{ $setting->facebook_url }}"><i class="fa fa-twitter "></i></a>
                        <a class="googleplus " data-original-title="Google Plus " data-toggle="tooltip " href="{{ $setting->facebook_url }} "><i class="fa fa-google-plus "></i></a>
                        <a class="pinterest " data-original-title="Pinterest " data-toggle="tooltip " href="{{ $setting->facebook_url }}"><i class="fa fa-pinterest "></i></a>
                        <a class="linkedin " data-original-title="Linkedin " data-toggle="tooltip " href="{{ $setting->facebook_url }}"><i class="fa fa-linkedin "></i></a>
                        <a class="instagram " data-original-title="Instagram " data-toggle="tooltip " href="{{ $setting->facebook_url }}"><i class="fa fa-instagram "></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

