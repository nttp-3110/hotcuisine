<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\NhanVien;

class NhanVienController extends Controller
{
    //
    public function getDanhSach()
    {
        //hiển thị view danh sách
    	$nhanvien=NhanVien::all();
    	return view('admin.nhanvien.danhsach',['nhanvien'=>$nhanvien]);
    }
    public function getThem()
    {
    	//hiển thị view thêm
   
    	return view('admin.nhanvien.them');

    }
    public function postThem(Request $request)
    {

    	//nhận dữ liệu từ view để thêm
    	$nhanvien=new NhanVien;
    	$nhanvien->Ten=$request->input('Ten');
        $nhanvien->GioiThieu=$request->input('GioiThieu');
        $nhanvien->LinkFB=$request->input('LinkFB');
        $nhanvien->LinkTwiter=$request->input('LinkTwiter');
        $nhanvien->LinkGoogle=$request->input('LinkGoogle');
        
        $nhanvien->save();
        if($request->hasFile('Hinh'))
        {
            $file=$request->file('Hinh');
            $duoi=$file->getClientOriginalExtension();
            do{
                $name=str_random(10).".".$duoi;
            }while(file_exists($name));
            $file->move('upload/nhanvien',$name);
            $nhanvien->Hinh=$name;
            $nhanvien->save();
            
        }

    	return redirect('admin/nhanvien/danhsach');


    }
    public function getSua($id)
    {
            $nhanvien=nhanvien::find($id);
        	return view('admin.nhanvien.sua',['nhanvien'=>$nhanvien]);
    }
    public function postSua(Request $request,$id)
    {
    	$nhanvien=nhanvien::find($id);
    	$nhanvien->Ten=$request->input('Ten');
        $nhanvien->GioiThieu=$request->input('GioiThieu');
        $nhanvien->LinkFB=$request->input('LinkFB');
        $nhanvien->LinkTwiter=$request->input('LinkTwiter');
        $nhanvien->LinkGoogle=$request->input('LinkGoogle');
        
        $nhanvien->save();
        if($request->hasFile('Hinh'))
        {
            $file=$request->file('Hinh');
            $duoi=$file->getClientOriginalExtension();
            do{
                $name=str_random(10).".".$duoi;
            }while(file_exists($name));
            $file->move('upload/nhanvien',$name);
            $nhanvien->Hinh=$name;
            $nhanvien->save();
            
        }
        return redirect('admin/nhanvien/danhsach');
    }
    public function getXoa($id)
    {
    	$nhanvien=nhanvien::find($id);
    	$nhanvien->delete();
    	return redirect('admin/nhanvien/danhsach');
    }
}
