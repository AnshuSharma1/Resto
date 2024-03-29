<?php

namespace Resto\Http\Controllers;

use Resto\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    
    public function index()
    {
        $res_items = Reservation::all();
        return view('admin-reservations')->with('res_items',$res_items);
    }

    /**
     * Show the form for creating a new resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $res = new Reservation();

        $res->name = $request->name;
        $res->email = $request->email;
        $res->phone = $request->phone;
        $res->no_of_people= $request->no_of_people;
        $res->time_slot = $request->time_slot;
        $res->res_date = $request->res_date;
        $res->place = $request->place;
        $res->delivered = 0;

        $res->save();

        $done = "Your form is submitted";

        return view('/reservation',compact('done'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \Resto\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Resto\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Resto\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $rid)
    {
        $reservation = Reservation::find($rid);
        if ($request->has('delivered')) {
            $reservation->delivered = $request->delivered;
        }
        else{
            $reservation->delivered="0";
        }
        
        $reservation->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Resto\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
