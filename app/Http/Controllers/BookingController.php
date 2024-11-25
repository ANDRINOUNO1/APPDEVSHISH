<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:11',
            'arrivalDate' => 'required|date',
            'departureDate' => 'required|date',
            'payment_method' => 'required|string',
        ]);
        $booking = Booking::where('room_number', $request->room_number)
                      ->first();
        $booking->first_name = $request->fname;
        $booking->last_name = $request->lname;
        $booking->email = $request->email;
        $booking->phone = $request->phone;
        $booking->arrival_date = $request->arrivalDate;
        $booking->departure_date = $request->departureDate;
        $booking->status = true;
        $booking->payment = $request->payment_method; // Save payment method
        $booking->pay_status = true; // Default payment status
        $booking->save();

        return redirect()->back()->with('booking', $booking);
    }

    
    public function receipt($id) 
    {
        $booking = Booking::findOrFail($id);

        return view('Receipt', compact('booking'));
    }

    public function showForm(Request $request)
    {
        $roomType = $request->query('room_type');
        $roomRate = $request->query('room_rate');
        $roomNumber = $request->query('room_number');

        return view('CheckingIn', compact('roomType', 'roomRate', 'roomNumber'));
    }
}

