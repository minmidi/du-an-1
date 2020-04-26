<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    // gọi bảng trong model
    protected $table = 'sliders';
    // gọi dữ liệu trong bảng
    protected $fillable = ['images','status'];
}
