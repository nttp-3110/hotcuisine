<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\LoaiTin;

class AjaxController extends Controller
{
    //
    public function loaitin($id)
    {
    	$loaitin=LoaiTin::where('idTheLoai',$id)->get();//lay tat ca the loai 
    	foreach($loaitin as $lt)
    	{
    		echo "<option value='".$lt->id."'>".$lt->Ten."</option>";//cat chuoi de ko bao loi
    	}
    }
}
