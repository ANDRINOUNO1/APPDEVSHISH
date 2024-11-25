<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_type', 'room_rate', 'room_number', 'first_name', 'last_name', 'email', 'phone', 'arrival_date', 'departure_date'
    ];
}
