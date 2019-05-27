<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    //
    protected $table="SanPham";
    public function loaisp()
    {
    	return $this->belongsTo('App\LoaiSP','idLoaiSP','id');
    }
    public function binhluan()
    {
    	return $this->hasMany('App\BinhLuan','idSP','id');
    }
   
}

