<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\BinhLuan;
use App\SanPham;
use App\User;
use Illuminate\Support\Facades\Auth;

class BinhLuanController extends Controller
{
    //
    
    public function postBinhLuan(Request $request,$id)
    {

    	//nhận dữ liệu từ view để thêm
        $idSP=$id;
        $sanpham=SanPham::find($id);
    	$binhluan=new BinhLuan;
    	$binhluan->idSP=$request->input('idSP');
        $binhluan->NoiDung=$request->input('NoiDung');
        $binhluan->idUser=Auth::user()->id;
        $binhluan->save();

    	return redirect("sanpham/$id"."-".$sanpham->TenKhongDau)->with('thongbao','Bạn đã viết bình luận thành công');


    }
    public function getXoa($id,$idSP)
    {
    	$binhluan=BinhLuan::find($id);
    	$binhluan->delete();
    	return redirect('admin/sanpham/sua/'.$idSP)->with('thongbao','Xóa bình luận thành công');
    }
}
