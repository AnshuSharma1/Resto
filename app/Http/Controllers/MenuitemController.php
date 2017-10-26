<?php

namespace Resto\Http\Controllers;

use Resto\Menuitem;
use Illuminate\Http\Request;

class MenuitemController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $items = Menuitem::all();
            return view('admin-menu')->with('items',$items);

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \Resto\Menuitem  $menuitem
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menuitem $menuitem)
    {
        //
    }
}
