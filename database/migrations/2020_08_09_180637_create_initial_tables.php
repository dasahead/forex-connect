<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInitialTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Properties', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('user');
            $table->string('description');
            $table->foreign('user')->references('id')->on('users');           
        });
        Schema::create('Zones', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('description');
            $table->unsignedBigInteger('property');
            $table->foreign('property')->references('id')->on('Properties');            
        });
        Schema::create('RoomTypes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('description');
            $table->unsignedBigInteger('property');
            $table->foreign('property')->references('id')->on('Properties');                
        });
        Schema::create('Licences', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('usermail');
            $table->string('description');
            $table->date('expiration');
            $table->foreign('usermail')->references('email')->on('users');
        });
        Schema::create('Employee', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('employer');
            $table->unsignedBigInteger('property');
            $table->foreign('property')->references('id')->on('Properties');
        });
        Schema::create('PagesPermit', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('page');
            $table->string('role');
            $table->boolean('view')->default(0);
            $table->boolean('edit')->default(0);
        });
        Schema::create('Rooms', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('description');
            $table->unsignedBigInteger('property');
            $table->unsignedBigInteger('zone');
            $table->unsignedBigInteger('roomtype');
            $table->integer('singlebeds');
            $table->integer('doublebeds');
            $table->integer('sofas');
            $table->foreign('property')->references('id')->on('Properties');
            $table->foreign('zone')->references('id')->on('Zones');
            $table->foreign('roomtype')->references('id')->on('RoomTypes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Properties');
        Schema::dropIfExists('Zones');
        Schema::dropIfExists('Roomtypes');
        Schema::dropIfExists('Licences');
        Schema::dropIfExists('Employee');  
        Schema::dropIfExists('PagesPermit');  
        Schema::dropIfExists('Rooms');
    }
}
