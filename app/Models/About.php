<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    // gọi bảng trong model
    protected $table = 'abouts';
    // gọi dữ liệu trong bảng
    protected $fillable = ['title','images','short_description','description'];
}
