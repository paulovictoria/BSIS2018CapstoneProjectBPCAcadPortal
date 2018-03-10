<?php

use Illuminate\Database\Seeder;

class ProfessorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('professors')->insert([
        		'eid'=>'18001',
                'last_name' => 'Victoria',
                'first_name' => 'Paulo',
                'midle_name' => 'A',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'paulo@sample.com',
                'password'=> bcrypt('sample'),
                'campus_id'=>'1',
        ]);
        DB::table('professors')->insert([
        		'eid'=>'18002',
                'last_name' => 'Villafuerte',
                'first_name' => 'ED',
                'midle_name' => 'C',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'ed@sample.com',
                'password'=> bcrypt('sample'),
                'campus_id'=>'1',
        ]);
        DB::table('professors')->insert([
        		'eid'=>'18003',
                'last_name' => 'Guirre',
                'first_name' => 'Rose',
                'midle_name' => 'S',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'rose@sample.com',
                'password'=> bcrypt('sample'),
                'campus_id'=>'1',
        ]);                
    }
}
