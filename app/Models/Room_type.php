<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room_type extends Model
{
    // gọi bảng trong model
    protected $table = 'room_types';
    // gọi dữ liệu trong bảng
    protected $fillable = ['name','slug','images','price','short_description','description'];
    public function scopeSearch($query, ...$colums)
    {
        $keyWord = request()->search;
        foreach ($colums as $colum) {
            $query->orWhere($colum, 'like', "%$keyWord%");
        }
    }
}
