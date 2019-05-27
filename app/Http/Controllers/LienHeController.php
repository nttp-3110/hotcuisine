<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\LienHe;

class LienHeController extends Controller
{
    //
    public function getDanhSach()
    {
        //hiển thị view danh sách
    	$lienhe=LienHe::all();
    	return view('admin.lienhe.danhsach',['lienhe'=>$lienhe]);
    }
    

    	
    public function getSua($id)
    {
            $lienhe=LienHe::find($id);
        	return view('admin.lienhe.sua',['lienhe'=>$lienhe]);
    }
    public function postSua(Request $request,$id)
    {
    	$lienhe=LienHe::find($id);
    	$lienhe->DiaChi=$request->input('DiaChi');
        $lienhe->SoDienThoai=$request->input('SoDienThoai');
        $lienhe->Email=$request->input('Email');
        $lienhe->ThongTin=$request->input('ThongTin');
        $lienhe->save();
        if($request->hasFile('Hinh'))
        {
            $file=$request->file('Hinh');
            $duoi=$file->getClientOriginalExtension();
            do{
                $name=str_random(10).".".$duoi;
            }while(file_exists($name));
            $file->move('upload/lienhe',$name);
            $lienhe->Hinh=$name;
            $lienhe->save();
            
        }
        return redirect('admin/lienhe/danhsach');
    }
  
}
