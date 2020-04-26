<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    // gọi bảng trong model
    protected $table = 'services';
    // gọi dữ liệu trong bảng
    protected $fillable = ['title','images','description','status'];

    // public function scopeActive($query)
    // {
    //     $query->where('status',1);
    // }

    public function scopeSearch($query, ...$colums)
    {
        $keyWord = request()->search;
        foreach ($colums as $colum) {
            $query->orWhere($colum, 'like', "%$keyWord%");
        }
    }
}
