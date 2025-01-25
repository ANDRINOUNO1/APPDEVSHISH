<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomRateController extends Controller
{
    public function index()
{
    $roomRates = RoomRate::all();
    return view('room_rates.index', compact('roomRates'));
}
}
