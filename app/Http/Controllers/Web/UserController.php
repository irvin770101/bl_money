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
}
