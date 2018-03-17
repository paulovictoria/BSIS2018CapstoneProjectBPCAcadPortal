<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assign_student', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('assign_id')->unsigned();
            $table->foreign('assign_id')->references('id')->on('assigns');
            $table->integer('student_id')->unsigned();
            $table->foreign('student_id')->references('id')->on('students'); 
            $table->float('grade')->default(0.00);             
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
        Schema::dropIfExists('assign_student');
    }
}
