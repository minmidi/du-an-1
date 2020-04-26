<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class WebSetting extends Model
{
    // gọi bảng trong model
    protected $table = 'web_settings';
    // gọi dữ liệu trong bảng
    protected $fillable = ['name','logo','phone_number','email','hotline','address','map_url','youtube_url','facebook_url','backround_img','intro_video_url','description','status'];
}
