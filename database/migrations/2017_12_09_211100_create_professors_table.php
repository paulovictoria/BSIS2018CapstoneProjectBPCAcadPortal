<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professors', function (Blueprint $table) {
            $table->increments('id');
            $table->char('eid')->unique();
            $table->string('last_name');
            $table->string('first_name');
            $table->string('midle_name');
            $table->boolean('approved');
            $table->boolean('status');            
            $table->string('gender');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('campus_id')->nullable()->unsigned();   
            $table->string('filename'); 
            $table->char('mobile');        
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
        Schema::dropIfExists('professors');
    }
}
