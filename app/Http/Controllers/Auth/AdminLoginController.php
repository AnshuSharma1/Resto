<?php

namespace Resto\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Resto\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    public function showLoginForm(){
        return view('auth.admin-login');
    }

    public function login(Request $request){
        //validate the form data
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        //attempt to log in
        if (Auth::guard('admin')->attempt(['email' => $request->email,'password' => $request->password],$request->remember)){
            //if successful
            return redirect()->intended(route('admin.dashboard'));
        }

        //if unsuccessful
        return redirect()->back()->withInput($request->only('email','remember'));

    }
}
