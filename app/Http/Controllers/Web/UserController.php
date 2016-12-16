<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use CFC\User\Services\UserService;
use Redirect;
use Session;
class UserController extends Controller
{
    protected $userSer;
    function __construct(UserService $userSer) {
        $this->userSer = $userSer;
    }
    
    public function test(){
        $this->userSer->addUser('');
        return 'add';
    }
    
    public function test2(){
        $user = $this->userSer->verify('irvin','123456');
        dd($user);
        
    }
    
    public function login(){
        return view('web.login.index');
    }
    
    public function loginCheck(Request $reauest){
        $account  = $reauest->input('account');
        $password = $reauest->input('password');
        
        $user = $this->userSer->verify($account,$password);
        if($user){
            return '登入成功!!';
        }
        Session::flash('showMessage', "帳號或密碼錯誤!!");
        return back();
        
        
    }
}
