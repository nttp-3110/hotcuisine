<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoaiSPRequest;


use App\Http\Requests;
use App\LoaiSP;
//use Illuminate\Support\Facades\Validator;//them de kiem tra dieu kien validate
class LoaiSPController extends Controller
{
    //
    public function getDanhSach()
    {
        $loaisp=LoaiSP::all();
        return view('admin.loaisp.danhsach',['loaisp'=>$loaisp]);
    }
    public function getThem()
    {
        
        return view('admin.loaisp.them');

    }
    public function postThem(LoaiSPRequest $request)
    {
        
        $loaisp=new LoaiSP;
        $loaisp->Ten=$request->input('Ten');
        $loaisp->TenKhongDau=changeTitle($request->input('Ten'));
        $loaisp->save();
        return redirect('admin/loaisp/danhsach');
    }
    public function getSua($id)
    {
        $loaisp=LoaiSP::find($id);
        return view('admin.loaisp.sua',['loaisp'=>$loaisp]);
    }
    public function postSua(LoaiSPRequest $request,$id)
    {
        $loaisp=LoaiSP::find($id);
        $loaisp->Ten=$request->input('Ten');
        $loaisp->TenKhongDau=changeTitle($request->input('Ten'));
        $loaisp->save();
        return redirect('admin/loaisp/danhsach');
    }
    public function getXoa($id)
    {
        $loaisp= LoaiSP::find($id);
        $loaisp->delete();
        return redirect('admin/loaisp/danhsach');

    }
}
