<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\SanPham;
use App\Slide;

class SlideController extends Controller
{
    //
    public function getDanhSach()
    {
        //hiển thị view danh sách
    	$slide=Slide::all();
    	return view('admin.slide.danhsach',['slide'=>$slide]);
    }
    
    public function getSua($id)
    {
            $slide=Slide::find($id);
        	return view('admin.slide.sua',['slide'=>$slide]);
    }
    public function postSua(Request $request,$id)
    {
    	$slide=Slide::find($id);
    	$slide->TieuDe=$request->input('TieuDe');
        $slide->NoiDung=$request->input('NoiDung');
        $slide->AnHien=$request->input('AnHien');
        $slide->STT=$request->input('STT');
        $slide->save();
        if($request->hasFile('Hinh'))
        {
            $file=$request->file('Hinh');
            $duoi=$file->getClientOriginalExtension();
            do{
                $name=str_random(10).".".$duoi;
            }while(file_exists($name));
            $file->move('upload/slide',$name);
            $slide->Hinh=$name;
            $slide->save();
            
        }
        return redirect('admin/slide/danhsach');
    }
    
}
