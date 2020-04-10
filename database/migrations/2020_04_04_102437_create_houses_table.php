<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('housetype');
            $table->string('roomtype');
            $table->integer('accommodate');
            $table->integer('bedrooms');
            $table->integer('bathrooms');
            $table->integer('price')->nullable();
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->boolean('amenitie1')->default(false);
            $table->boolean('amenitie2')->default(false);
            $table->boolean('amenitie3')->default(false);
            $table->boolean('amenitie4')->default(false);
            $table->boolean('amenitie5')->default(false);
            $table->string('address')->nullable();
            $table->boolean('publish')->default(false);
            $table->unsignedInteger('user_id');
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
        Schema::dropIfExists('houses');
    }
}
