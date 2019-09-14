<?php

use Faker\Factory;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlyersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flyers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('street');
            $table->string('zip');
            $table->string('city');
            $table->string('country');
            $table->string('state');

            $table->unsignedInteger('numberOfBedRooms');
            $table->unsignedInteger('area');
            $table->unsignedInteger('numberOfGarages');
            $table->unsignedInteger('numberOfBathRooms');


            $table->string('price');
            $table->text('description');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('flyers');
    }
}
