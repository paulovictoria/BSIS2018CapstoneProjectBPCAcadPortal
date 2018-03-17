<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assigns', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('classroom_id')->nullable()->unsigned();
            $table->integer('subject_id')->nullable()->unsigned();
            $table->integer('professor_id')->nullable()->unsigned();
            $table->integer('day_id');
            $table->string('startTime'); 
            $table->string('endTime');
            $table->integer('room_id')->nullable()->unsigned();
            $table->string('class_subj');            
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
        Schema::dropIfExists('assigns');
    }
}
