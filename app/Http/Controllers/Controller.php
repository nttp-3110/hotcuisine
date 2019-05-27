<?php


namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

//share lienhe
use App\LienHe;
//dang nhap
use App\User;
use Illuminate\Support\Facades\Auth;
///
class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;
    //de thag con co the truy cap vao function
   //khai bao de dung chug trog cac trang
    public function __construct()
    {
    	$this->callFooter();
        $this->checkLogin();
        
    }
    public function callFooter()
    {
    	$lienhe=LienHe::all();
    	view()->share('lienhe',$lienhe);
    }
    public function checkLogin()
    {
        if(Auth::check())
        {   
            $user=Auth::user();
            view()->share('user',$user);
        }
    }
}
