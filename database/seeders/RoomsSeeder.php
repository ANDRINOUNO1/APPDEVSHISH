<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rooms = [
            ['room_number' => 101, 'first_name' => '-', 'last_name' => '-', 'email' => '-', 'phone' => '-', 'arrival_date' => null, 'departure_date' => null, 'room_type' => 'Deluxe Suite', 'room_rate' => '399', 'status' => false, 'payment' => '-', 'pay_status' => false],
            ['room_number' => 102, 'first_name' => '-', 'last_name' => '-', 'email' => '-', 'phone' => '-', 'arrival_date' => null, 'departure_date' => null, 'room_type' => 'Deluxe Suite', 'room_rate' => '399', 'status' => false, 'payment' => '-', 'pay_status' => false],
            ['room_number' => 103, 'first_name' => '-', 'last_name' => '-', 'email' => '-', 'phone' => '-', 'arrival_date' => null, 'departure_date' => null, 'room_type' => 'Deluxe Suite', 'room_rate' => '399', 'status' => false, 'payment' => '-', 'pay_status' => false],
            ['room_number' => 104, 'first_name' => '-', 'last_name' => '-', 'email' => '-', 'phone' => '-', 'arrival_date' => null, 'departure_date' => null, 'room_type' => 'Deluxe Suite', 'room_rate' => '399', 'status' => false, 'payment' => '-', 'pay_status' => false],

            ['room_number' => 105, 'first_name' => '-', 'last_name' => '-', 'email' => '-', 'phone' => '-', 'arrival_date' => null, 'departure_date' => null, 'room_type' => 'Family Suite', 'room_rate' => '599', 'status' => false, 'payment' => '-', 'pay_status' => false],
            ['room_number' => 106, 'first_name' => '-', 'last_name' => '-', 'email' => '-', 'phone' => '-', 'arrival_date' => null, 'departure_date' => null, 'room_type' => 'Family Suite', 'room_rate' => '599', 'status' => false, 'payment' => '-', 'pay_status' => false],
            ['room_number' => 107, 'first_name' => '-', 'last_name' => '-', 'email' => '-', 'phone' => '-', 'arrival_date' => null, 'departure_date' => null, 'room_type' => 'Family Suite', 'room_rate' => '599', 'status' => false, 'payment' => '-', 'pay_status' => false],
            ['room_number' => 108, 'first_name' => '-', 'last_name' => '-', 'email' => '-', 'phone' => '-', 'arrival_date' => null, 'departure_date' => null, 'room_type' => 'Family Suite', 'room_rate' => '599', 'status' => false, 'payment' => '-', 'pay_status' => false],

            ['room_number' => 109, 'first_name' => '-', 'last_name' => '-', 'email' => '-', 'phone' => '-', 'arrival_date' => null, 'departure_date' => null, 'room_type' => 'Luxury Penthouse', 'room_rate' => '799', 'status' => false, 'payment' => '-', 'pay_status' => false],
            ['room_number' => 110, 'first_name' => '-', 'last_name' => '-', 'email' => '-', 'phone' => '-', 'arrival_date' => null, 'departure_date' => null, 'room_type' => 'Luxury Penthouse', 'room_rate' => '799', 'status' => false, 'payment' => '-', 'pay_status' => false],
            ['room_number' => 111, 'first_name' => '-', 'last_name' => '-', 'email' => '-', 'phone' => '-', 'arrival_date' => null, 'departure_date' => null, 'room_type' => 'Luxury Penthouse', 'room_rate' => '799', 'status' => false, 'payment' => '-', 'pay_status' => false],
            ['room_number' => 112, 'first_name' => '-', 'last_name' => '-', 'email' => '-', 'phone' => '-', 'arrival_date' => null, 'departure_date' => null, 'room_type' => 'Luxury Penthouse', 'room_rate' => '799', 'status' => false, 'payment' => '-', 'pay_status' => false],

        ];

        foreach ($rooms as $room) {
            DB::table('bookings')->insert([
                'room_number' => $room['room_number'],
                'first_name' => $room['first_name'],
                'last_name' => $room['last_name'],
                'email' => $room['email'],
                'phone' => $room['phone'],
                'arrival_date' => $room['arrival_date'],
                'departure_date' => $room['departure_date'],
                'room_type' => $room['room_type'],
                'room_rate' => $room['room_rate'],
                'status' => $room['status'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
