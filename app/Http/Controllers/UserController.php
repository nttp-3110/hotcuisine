<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\LoaiTin;
use App\User;
class UserController extends Controller
{
    //

   function getLogin()
   {    
        //kiem tra dang nhap chua, neu roi thi dua ve trang chu
        if(Auth::check())
                return redirect('trangchu');
        else
            return view('pages.dangnhap');

   }
   function postLogin(Request $request)
   {
        $this->validate($request,
        [
            'email'=>'required|min:3|email',
            'password'=>'required|min:3'

        ],
        [
            'email.required'=>'Bạn chưa nhập email',
            'email.min'=>'Email của bạn phải có ít nhất 3 kí tự trở lên',
            'email.email'=>'Bạn phải nhập email để đăng nhập',
            'password.required'=>'Bạn chưa nhập password',
            'password.min'=>'Password phải có ít nhất 3 ký tự'

        ]);//dau vao,mang ten loi, mang thong  bao loi
        $email=$request->email;
        $password=$request->input('password');
        if(Auth::attempt(['email'=>$email,'password'=>$password]))
        {
            return redirect('trangchu');

        }
        else
        {
            return view('pages.dangnhap',['mess'=>'Sai thông tin tài khoản hoặc mật khẩu']);
        }

   }

   public function getLogout()
   {
        Auth::logout();
        return redirect('trangchu');
   }


   public function getRegister()
   {    
        if(Auth::check())
            return redirect('trangchu');
        else
            return  view('pages.dangki');
   }
   public function postRegister(Request $request)
   {
        $this->validate($request,
        [
            'email'=>'required|min:3|email|unique:users,email',//unique ktra da ton tai trong bang user chua unique:tenbang,tencot
            
            'password'=>'required|min:3',
            'name'=>'required',
            'passwordAgain'=>'required|same:password'

        ],
        [
            'email.required'=>'Bạn chưa nhập email',
            'email.min'=>'Email của bạn phải có ít nhất 3 kí tự trở lên',
            'email.email'=>'Bạn phải nhập email để đăng nhập',
            'email.unique'=>'Email đã tồn tại',
            'password.required'=>'Bạn chưa nhập password',
            'password.min'=>'Password phải có ít nhất 3 ký tự',
            'name.required'=>'Bạn chưa nhập tên của bạn',
            'passwordAgain.required'=>'Bạn chưa nhập lại mật khẩu',
            'passwordAgain.same'=>'Mật khẩu không trùng nhau'

        ]); 
        $user=new User;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);//ma hoa mat khau

        $user->level=0;
        $user->save();
        return redirect('login')->with('thongbao','Bạn đã đăng kí thành công');//dag o trog trag do xu ly xong thi redirect sag trag khac,con goi dung trag do thi dung view

   }


   public function getNguoidung()
   {
    //dung midellwere de bao ve ng dung nhom 2 cai route ng dung
        if(Auth::check())
            return view('pages.nguoidung');
        else
            return redirect('login');
   }
   public function postNguoiDung(Request $request)
   {

        $this->validate($request,
        [
            
            'name'=>'required'
            

        ],
        [
           
            'name.required'=>'Bạn chưa nhập tên của bạn'
        ]); 
        $user=Auth::user();//dang đăng nhập nên lay lun du lieu cua ng dug ra de sua
        $user->name=$request->name;
        $user->save();
        //neu nguoi dung muốn đổi mật khẩu
        if($request->has('checkPassword'))
        {
            $this->validate($request,
            [
                'password'=>'required|min:3',
                'passwordAgain'=>'required|same:password'

            ],
            [
                'password.required'=>'Bạn chưa nhập password',
                'password.min'=>'Password phải có ít nhất 3 ký tự',
                'passwordAgain.required'=>'Bạn chưa nhập lại mật khẩu',
                'passwordAgain.same'=>'Mật khẩu không trùng nhau'

            ]);
            $user->password=bcrypt($request->password);

        }
        $user->save();
        return redirect('trangchu')->with('thongbao','Sửa thành công');

   }
}
