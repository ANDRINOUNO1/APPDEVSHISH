<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    /**
     * Show the form for creating a new reservation.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created reservation in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create($room_rate_id)
{
    return view('reservations.create', compact('room_rate_id'));
}

public function store(Request $request)
{
    $request->validate([
        'customer_name' => 'required',
        'customer_address' => 'required',
        'customer_contact' => 'required',
        'customer_email' => 'required|email',
        'start_date' => 'required|date',
        'end_date' => 'required|date',
    ]);

    if (!$request->input('room_rate_id')) {
        return redirect()->back()->with('error', 'Room rate ID is required');
    }

    $reservation = new Reservation();
    $reservation->room_rate_id = $request->input('room_rate_id');
    $reservation->customer_name = $request->input('customer_name');
    $reservation->customer_address = $request->input('customer_address');
    $reservation->customer_contact = $request->input('customer_contact');
    $reservation->customer_email = $request->input('customer_email');
    $reservation->start_date = $request->input('start_date');
    $reservation->end_date = $request->input('end_date');
    $reservation->save();

    return redirect()->route('reservations.create')->with('success', 'Reservation created successfully!');
}
}
