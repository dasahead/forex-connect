<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTriggers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("
        CREATE TRIGGER after_users_insert AFTER INSERT ON users FOR EACH ROW 
        BEGIN
            INSERT INTO Properties(user, description, created_at, updated_at)
            VALUES(new.id,'Hotel 1',now(),now());
        end
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('after_users_insert');
    }
}
