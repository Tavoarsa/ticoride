<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rides', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_ride');
            $table->integer('idUser')->unsigned();
            $table->foreign('idUser')->references('id')->on('users');
            
            $table->string('from')->nullable();
            $table->string('to')->nullable();
            $table->string('lat_start')->nullable();
            $table->string('long_start')->nullable();
            $table->string('lat_end')->nullable();
            $table->string('long_end')->nullable();          
            $table->string('descripcion')->nullable();
            $table->Time('hour_start')->nullable();
            $table->Time('hour_end')->nullable();
            $table->boolean('activo')->nullable();
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
        Schema::drop('rides');
    }
}
