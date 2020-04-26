
@foreach ($settings as $setting)
<div class="top_menu">
    <div class="container">
        <div class="welcome_mssg hidden-xs">
            Welcome to {{ $setting->name }}
        </div>
        <ul class="top_menu_right">
            <li><i class="fa fa-phone"></i><a href="tel:0968411721"> {{ $setting->hotline}} </a></li>
            <li class="email hidden-xxs"><i class="fa fa-envelope-o "></i> <a href="#"><span class="__cf_email__" data-cfemail="53303c3d2732302713203a27367d303c3e"></span>{{ $setting->email}}</a></li>
        </ul>
    </div>
</div>

@endforeach
