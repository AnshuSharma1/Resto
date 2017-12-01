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


    public function store(Request $request)
    {
        // Validate the request...

        $item = new Menuitem();

        $item->name = $request->name;
        $item->price = $request->price;
        $item->category = $request->category;
        $item->is_veg = $request->is_veg;
        $item->description= $request->description;

        $item->save();

        return redirect('/admin/menu');
    }

    public function destroy(Menuitem $menuitem)
    {
        //
    }
}
