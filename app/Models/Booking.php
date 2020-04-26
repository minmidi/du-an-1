<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Booking extends Model
{
     // gọi bảng trong model
     protected $table = 'bookings';
     // gọi dữ liệu trong bảng
     protected $fillable = ['name','email','number_phone','country','arrival_date','departure_date','aldult','children','arrival_date','comment','room_type_id'];

     public function room_types(){
        return $this->belongsTo('App\Models\Room_type', 'room_type_id', 'id');
    }

    public function scopeSearch($query, ...$colums)
    {
        //$colums = ['name', 'email'];
        $keyWord = request()->search;
        foreach ($colums as $colum) {
            $query->orWhere($colum, 'like', "%$keyWord%");
        }
    }
}
