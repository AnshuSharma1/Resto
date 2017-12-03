<?php

namespace Resto\Http\Controllers;

use Illuminate\Http\Request;
use Resto\Contact;

class ContactController extends Controller
{
    
    public function index()
    {
        $con_items = Contact::all();
        return view('admin-contact')->with('con_items',$con_items);
    }

    public function create(Request $request)
    {
        $con = new Contact();

        $con->name = $request->name;
        $con->email = $request->email;
        $con->message = $request->message;

        $con->save();

        $done = "Your form is submitted";

        return view('/contact',compact('done'));
    }
}
