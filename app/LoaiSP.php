<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiSP extends Model
{
    //
     protected $table="LoaiSP";
    function sanpham()
    {
    	return $this->hasMany('App\SanPham',"idLoaiSP","id");
    }
}
