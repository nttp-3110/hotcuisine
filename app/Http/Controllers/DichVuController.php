<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\DichVu;

class DichVuController extends Controller
{
    //
    public function getDanhSach()
    {
        //hiển thị view danh sách
    	$dichvu=DichVu::all();
    	return view('admin.dichvu.danhsach',['dichvu'=>$dichvu]);
    }
    public function getThem()
    {
    	//hiển thị view thêm
    	
    	return view('admin.dichvu.them');

    }
    public function postThem(Request $request)
    {

    	//nhận dữ liệu từ view để thêm
    	$dichvu=new DichVu;
    	$dichvu->TieuDe=$request->input('TieuDe');
        $dichvu->NoiDung=$request->input('NoiDung');
        $dichvu->NoiDungVanTat=$request->input('NoiDungVanTat');
        $dichvu->NoiBat=$request->input('NoiBat');
        $dichvu->Moi=$request->input('Moi');
        
        $dichvu->save();
        if($request->hasFile('Hinh'))
        {
            $file=$request->file('Hinh');
            $duoi=$file->getClientOriginalExtension();
            do{
                $name=str_random(10).".".$duoi;
            }while(file_exists($name));
            $file->move('upload/dichvu',$name);
            $dichvu->Hinh=$name;
            $dichvu->save();
            
        }

    	return redirect('admin/dichvu/danhsach');


    }
    public function getSua($id)
    {
            $dichvu=DichVu::find($id);
        	return view('admin.dichvu.sua',['dichvu'=>$dichvu]);
    }
    public function postSua(Request $request,$id)
    {
    	$dichvu=DichVu::find($id);
    	$dichvu->TieuDe=$request->input('TieuDe');
        $dichvu->NoiDung=$request->input('NoiDung');
        $dichvu->NoiDungVanTat=$request->input('NoiDungVanTat');
        $dichvu->Moi=$request->input('Moi');
        
        $dichvu->NoiBat=$request->input('NoiBat');
        
        $dichvu->save();
        if($request->hasFile('Hinh'))
        {
            $file=$request->file('Hinh');
            $duoi=$file->getClientOriginalExtension();
            do{
                $name=str_random(10).".".$duoi;
            }while(file_exists($name));
            $file->move('upload/dichvu',$name);
            $dichvu->Hinh=$name;
            $dichvu->save();
            
        }
        return redirect('admin/dichvu/danhsach');
    }
    public function getXoa($id)
    {
    	$dichvu=DichVu::find($id);
    	$dichvu->delete();
    	return redirect('admin/dichvu/danhsach');
    }
}
