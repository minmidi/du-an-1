<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientContact extends Model
{
     // gọi bảng trong model
     protected $table = 'client_contacts';
     // gọi dữ liệu trong bảng
     protected $fillable = ['name','email','messenger'];

     public function scopeSearch($query, ...$colums)
    {
        $keyWord = request()->search;
        foreach ($colums as $colum) {
            $query->orWhere($colum, 'like', "%$keyWord%");
        }
    }
}
