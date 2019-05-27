<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;//co de su dung login auth

use App\Http\Requests;
use App\SanPham;
use App\LoaiSP;

class SanPhamController extends Controller
{
    //
      public function getDanhSach()
    {
        //hiển thị view danh sách
    	$sanpham=SanPham::all();
    	return view('admin.sanpham.danhsach',['sanpham'=>$sanpham]);
    }
    public function getThem()
    {
    	//hiển thị view thêm
    	$sanpham=SanPham::all();
        $loaisp=LoaiSP::all();
    	return view('admin.sanpham.them',['sanpham'=>$sanpham,'loaisp'=>$loaisp]);

    }
    public function postThem(Request $request)
    {

    	//nhận dữ liệu từ view để thêm
    	$sanpham=new SanPham;
        $sanpham->idLoaiSP=$request->input('idLoaiSP');
    	$sanpham->Ten=$request->input('Ten');
    	$sanpham->TenKhongDau= changeTitle($request->input('Ten'));
        $sanpham->NoiDung=$request->input('NoiDung');
        $sanpham->NoiDungVanTat=$request->input('NoiDungVanTat');
        $sanpham->NoiBat=$request->input('NoiBat');
        $sanpham->Moi=$request->input('Moi');
        $sanpham->Gia=$request->input('Gia');
        $sanpham->save();
        if($request->hasFile('Hinh'))
        {
            $file=$request->file('Hinh');
            $duoi=$file->getClientOriginalExtension();
            do{
                $name=str_random(10).".".$duoi;
            }while(file_exists($name));
            $file->move('upload/sanpham',$name);
            $sanpham->Hinh=$name;
            $sanpham->save();
            
        }

    	return redirect('admin/sanpham/danhsach');


    }
    public function getSua($id)
    {
            $loaisp=LoaiSP::all();
            $sanpham=SanPham::find($id);
        	return view('admin.sanpham.sua',['loaisp'=>$loaisp,'sanpham'=>$sanpham]);
    }
    public function postSua(Request $request,$id)
    {
    	$sanpham=SanPham::find($id);
        $sanpham->idLoaiSP=$request->input('idLoaiSP');
        $sanpham->Ten=$request->input('Ten');
        $sanpham->TenKhongDau= changeTitle($request->input('Ten'));
        $sanpham->NoiDung=$request->input('NoiDung');
        $sanpham->NoiDungVanTat=$request->input('NoiDungVanTat');
        $sanpham->NoiBat=$request->input('NoiBat');
        $sanpham->Moi=$request->input('Moi');
        $sanpham->Gia=$request->input('Gia');
        $sanpham->save();
        if($request->hasFile('Hinh'))
        {
            $file=$request->file('Hinh');
            $duoi=$file->getClientOriginalExtension();
            do{
                $name=str_random(10).".".$duoi;
            }while(file_exists($name));
            $file->move('upload/sanpham',$name);
            $sanpham->Hinh=$name;
            $sanpham->save();
            
        }
        return redirect('admin/sanpham/danhsach');
    }
    public function getXoa($id)
    {
        $sanpham=SanPham::find($id);
        foreach($sanpham->binhluan as $bl)
            $bl->delete();
        
    	$sanpham->delete();
    	return redirect('admin/sanpham/danhsach');
    }
}
