<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('number_phone',10);
            $table->string('country')->default('Việt Nam');
            $table->date('arrival_date');
            $table->date('departure_date');
            $table->integer('aldult');
            $table->integer('children');
            $table->text('comment');
            $table->unsignedBigInteger('room_type_id');
            $table->timestamps();
            $table->foreign('room_type_id')->references('id')->on('room_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
