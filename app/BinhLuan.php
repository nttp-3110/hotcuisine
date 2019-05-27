<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BinhLuan extends Model
{
    //
    protected $table="BinhLuan";
    function user()
    {
    	return $this->hasOne('App\User','id','idUser');
    }
    function sanpham()
    {
    	return $this->hasMany('App\SanPham','idSP','id');
    }
}
