<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\BinhLuan;

class NguoiDungController extends Controller
{
    //
    public function getDanhSach()
    {
    		$nguoidung=User::all();
    		return view('admin.nguoidung.danhsach',['nguoidung'=>$nguoidung]);
    }
    public function getThem()
    {
    	return view('admin.nguoidung.them');
    }
    public function postThem(Request $request)
    {
        $this->validate($request,[
                'name'=>'required|min:3',
                'email'=>'required|email|unique:users,email',
                'password'=>'required|min:3|max:32',
                'passwordAgain'=>'required|same:password',
            ],[
                'name.required'=>'Bạn chưa nhập tên người dùng',
                'name.min'=>'Tên người dùng phải có ít nhất 3 ký tự',

                'email.required'=>'Bạn chưa nhập email',
                'email.email'=>'Bạn chưa nhập đúng định dạng email',
                'email.unique'=>'Email đã tồn tại',

                'password.required'=>'Bạn chưa nhập password',
                'password.min'=>'Password phải có ít nhất 3 ký tự',
                'password.max'=>'Password tối đa là 32 ký tự',

                'passwordAgain.required'=>'Bạn chưa nhập lại password',
                'passwordAgain.same'=>'Mật khẩu nhập lại chưa khớp',

            ]);
    	$nguoidung=new User;
    	$nguoidung->name=$request->input('name');
    	$nguoidung->email=$request->input('email');
    	$nguoidung->password=bcrypt($request->password);
        $nguoidung->level=$request->input('level');
        $nguoidung->save();
        return redirect('admin/nguoidung/danhsach')->with('thongbao','Bạn đã thêm user thành công');
    }
    public function getSua($id)
    {
        $nguoidung=User::find($id);
        return view('admin.nguoidung.sua',['nguoidung'=>$nguoidung]);
    }
    public function postSua(Request $request,$id)
    {
        $this->validate($request,[
                'name'=>'required|min:3',
            ],[
                'name.required'=>'Bạn chưa nhập tên người dùng',
                'name.min'=>'Tên người dùng phải có ít nhất 3 ký tự',
            ]);
        $nguoidung=User::find($id);
        $nguoidung->name=$request->input('name');
        $nguoidung->level=$request->input('level');

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
            $nguoidung->password=bcrypt($request->password);

        }
        $nguoidung->save();
        return redirect('admin/nguoidung/danhsach')->with('thongbao','Bạn đã sửa nguoidung thành công');
    }
    public function getXoa($id)
    {
        $nguoidung=User::find($id);
        foreach($nguoidung->binhluan as $bl)
            $bl->delete();
        $nguoidung->delete();
        return redirect('admin/nguoidung/danhsach');
    }
    
}
