<?php

use Illuminate\Database\Seeder;

class CampusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('campuses')->insert([
        	 'campus_name' => 'Malolos',
        ]);
        DB::table('campuses')->insert([
        	 'campus_name' => 'Bocaue',
        ]);
        DB::table('campuses')->insert([
        	 'campus_name' => 'Obando',
        ]);
        DB::table('campuses')->insert([
        	 'campus_name' => 'Angat',
        ]);
        DB::table('campuses')->insert([
        	 'campus_name' => 'Pandi',
        ]);
        DB::table('campuses')->insert([
        	 'campus_name' => 'San Rafael',
        ]);
        DB::table('campuses')->insert([
        	 'campus_name' => 'San Jose Del Monte',
        ]);
        DB::table('campuses')->insert([
        	 'campus_name' => 'San Miguel',
        ]);                                                        

    }
}
