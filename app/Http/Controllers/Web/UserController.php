<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use CFC\User\Services\UserService;

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
}
