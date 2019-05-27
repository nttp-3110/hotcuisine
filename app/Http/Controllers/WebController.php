<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB,Mail;
use App\Http\Requests;
use App\LoaiSP;
use App\SanPham;
use App\Slide;
use App\DichVu; 
use App\About;
use App\NhanVien;
use App\BinhLuan;
use App\User;
class WebController extends Controller
{
    //
    public function trangchu()
    {
        $slide=Slide::all();
        $about=About::where('Moi',1)->take(1)->get();
        $sanphammoi=SanPham::where('Moi',1)->take(2)->get();
        $sanphamnoibat=SanPham::where('NoiBat',1)->take(4)->get();
    	return view('pages.trangchu',['slide'=>$slide,'sanphammoi'=>$sanphammoi,'sanphamnoibat'=>$sanphamnoibat,'about'=>$about]);

    }
    public function gioithieu()
    {
        $slide=Slide::all();
        $about=About::all();
        $nhanvien=NhanVien::all();
        $about_1=About::where('NoiBat',1)->take(1)->get();
        $about_2=About::where('Moi',1)->take(1)->get();
        
        $aboutmoi=About::where('Moi',0)->take(3)->get();
        return view('pages.gioithieu',['slide'=>$slide,'about'=>$about,'aboutmoi'=>$aboutmoi,'about_1'=>$about_1,'about_2'=>$about_2,'nhanvien'=>$nhanvien]);
    }
    public function dichvu()
    {
        $dichvu=DichVu::all();
        $dichvu=DichVu::where('NoiBat',1)->take(3)->get();
        $sanphammoi=SanPham::where('Moi',1)->take(2)->get();
        $sanphamnoibat=SanPham::where('NoiBat',1)->take(1)->get();
        $dichvunoibat=DichVu::where('NoiBat',1)->take(1)->get();
        $dichvumoi=DichVu::where('Moi',1)->take(3)->get();
        return view('pages.dichvu',['dichvu'=>$dichvu,'sanphammoi'=>$sanphammoi,'dichvunoibat'=>$dichvunoibat,'sanphamnoibat'=>$sanphamnoibat,'dichvumoi'=>$dichvumoi]);
    }
    public function thucdon()
    {
       
        $sanpham=SanPham::all();
        $sanphamnoibat=SanPham::where('NoiBat',1)->take(6)->get();
        return view('pages.thucdon',['sanpham'=>$sanpham,'sanphamnoibat'=>$sanphamnoibat]);
    
    }
    
     public function loaisp($id)
    {
    	$loaisp=LoaiSP::find($id);
    	$sanpham=SanPham::where('idLoaiSP',$id)->paginate(3);//paginate phan trang
    	return view('pages.loaisp',['sanpham'=>$sanpham,'loaisp'=>$loaisp]);
    }
    public function sanpham($id)/*theo thu tu lay id hoac ten ko dau dc truyen ben route*/
    {
        $sanpham=SanPham::find($id);
        $sanphamnoibat=SanPham::where('NoiBat',1)->take(4)->get();
        $sanphammoi=SanPham::where('Moi',1)->take(4)->get();
        $sanphamlienquan=SanPham::where('idLoaiSP',$id)->take(4)->get();
       
        $sanpham->SoLuotXem=$sanpham->SoLuotXem+1;
        $sanpham->save();

        return view('pages.chitietsanpham',['sanpham'=>$sanpham,'sanphamnoibat'=>$sanphamnoibat,'sanphammoi'=>$sanphammoi,'sanphamlienquan'=>$sanphamlienquan]);
    }

    public function getLienhe()
    {
        return view('pages.lienhe');
    }
    public function postLienhe(Request $request)
    {
        $data=['hoten'=>$request->input('name'),'noidung'=>$request->input('NoiDung')];
        Mail::send('blanks',$data,function($message){
            $message->from('kelypupi94@gmail.com','Thanh Phương');
            $message->to('kelypupi94@gmail.com','Phương Phương')->subject('Đây là mail của tôi');
        });
        echo "<script>
                alert('Cám ơn bạn đã góp ý. Chúng tôi sẽ liên hệ lại với bạn trong thời gian ngắn nhất');
                window.location='".url('/')."'
        </script>";
    }

}
