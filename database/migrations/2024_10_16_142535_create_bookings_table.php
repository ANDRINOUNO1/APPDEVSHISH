<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone', 11);
            $table->date('arrival_date')->nullable();
            $table->date('departure_date')->nullable();
            $table->string('room_type')->nullable();
            $table->integer('room_number')->nullable();
            $table->decimal('room_rate', 8, 2)->nullable();
            $table->boolean('status')->default(false);
            $table->string('payment')->nullable();
            $table->boolean('pay_status')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
