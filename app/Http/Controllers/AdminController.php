<?php

namespace Resto\Http\Controllers;

use Illuminate\Http\Request;
use Resto\User;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin');
    }

    public function users()
    {
        $users = User::all();
        return view('admin-users')->with('users',$users);
    }

}
