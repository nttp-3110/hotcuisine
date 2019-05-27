<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\About;

class AboutController extends Controller
{
    //
      public function getDanhSach()
    {
        //hiển thị view danh sách
    	$about=About::all();
    	return view('admin.about.danhsach',['about'=>$about]);
    }
    
    public function getThem()
    {
            $about=About::all();
            return view('admin.about.them',['about'=>$about]);
    }
    public function postThem(Request $request)
    {
        $about=new About;
       
        $about->TieuDe=$request->input('TieuDe');
        $about->NoiDung=$request->input('NoiDung');
        $about->Moi=$request->input('Moi');
        $about->NoiBat=$request->input('NoiBat');
        $about->ThongTinNoiBat=$request->input('ThongTinNoiBat');
        $about->save();
        if($request->hasFile('Hinh'))
        {
            $file=$request->file('Hinh');
            $duoi=$file->getClientOriginalExtension();
            do{
                $name=str_random(10).".".$duoi;
            }while(file_exists($name));
            $file->move('upload/about',$name);
            $about->Hinh=$name;
            $about->save();
            
        }
        return redirect('admin/about/danhsach');
    }
  
    	
    public function getSua($id)
    {
            $about=About::find($id);
        	return view('admin.about.sua',['about'=>$about]);
    }
    public function postSua(Request $request,$id)
    {
    	$about=About::find($id);
    	$about->TieuDe=$request->input('TieuDe');
        $about->NoiDung=$request->input('NoiDung');
        $about->Moi=$request->input('Moi');
        $about->NoiBat=$request->input('NoiBat');
        $about->ThongTinNoiBat=$request->input('ThongTinNoiBat');
        $about->save();
        if($request->hasFile('Hinh'))
        {
            $file=$request->file('Hinh');
            $duoi=$file->getClientOriginalExtension();
            do{
                $name=str_random(10).".".$duoi;
            }while(file_exists($name));
            $file->move('upload/about',$name);
            $about->Hinh=$name;
            $about->save();
            
        }
        return redirect('admin/about/danhsach');
    }
    public function getXoa($id)
    {
        $about=About::find($id);
        $about->delete();
        return redirect('admin/about/danhsach');
    }
  
}
