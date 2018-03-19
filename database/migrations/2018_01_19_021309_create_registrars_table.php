<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrars', function (Blueprint $table) {
            $table->increments('id');
            $table->char('eid')->unique();
            $table->string('last_name');
            $table->string('first_name');
            $table->string('midle_name');
            $table->string('gender');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('campus_id')->nullable()->unsigned();
            $table->string('filename');
            $table->rememberToken();
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
        Schema::dropIfExists('registrars');
    }
}
