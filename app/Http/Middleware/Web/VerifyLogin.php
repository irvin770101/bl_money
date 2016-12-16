<?php

namespace App\Http\Middleware\Web;

use Closure;
use Validator;
use Session;
class VerifyLogin
{
    /**
     * Run the request filter.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        $validator = Validator::make($request->all(), [
            'account' => 'required',
            'password'  => 'required',
        ]);

        if ($validator->fails()) {
            Session::flash('showMessage', "請輸入帳號或密碼!!");
            return back();
        }
        return $next($request);
    }

}