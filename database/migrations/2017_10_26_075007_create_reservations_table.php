<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('name',100);
            $table->string('email',100);
            $table->integer('phone');
            $table->integer('no_of_people');
            $table->time('time_slot');
            $table->date('res_date'); 
            $table->string('place',100);
            $table->tinyInteger('delivered');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
