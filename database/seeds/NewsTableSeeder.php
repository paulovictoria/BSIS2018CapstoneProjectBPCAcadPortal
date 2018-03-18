<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
 			DB::table('news')->insert([
        	 $table->string('title');
             $table->text('description');
             $table->string('filename');
             $table->integer('campus_id')->nullable()->unsigned(); 
            ]);
    }
}
