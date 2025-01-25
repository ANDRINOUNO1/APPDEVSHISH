<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'room_rate_id',
        'customer_name',
        'customer_address',
        'customer_contact',
        'customer_email',
        'start_date',
        'end_date',
    ];
}
