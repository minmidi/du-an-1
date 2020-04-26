<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room_service extends Model
{
    protected $table = 'room_services';
    // gọi dữ liệu trong bảng
    protected $fillable = ['title','short_description','description','room_type_id'];

    public function room_types(){
        return $this->belongsTo('App\Models\Room_type', 'room_type_id', 'id');
    }

    public function scopeSearch($query, ...$colums)
    {
        $keyWord = request()->search;
        foreach ($colums as $colum) {
            $query->orWhere($colum, 'like', "%$keyWord%");
        }
    }

}
