<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('students')->insert([
        		'sid'=>'18001',
                'last_name' => 'Velayo',
                'first_name' => 'Michael',
                'midle_name' => 'C',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'michael@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'1',
                'campus_id'=>'1',
        ]);
        DB::table('students')->insert([
        		'sid'=>'18002',
                'last_name' => 'Reyes',
                'first_name' => 'Paul',
                'midle_name' => 'C',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'paul@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'1',
                'campus_id'=>'1',
        ]);
        DB::table('students')->insert([
        		'sid'=>'18003',
                'last_name' => 'Blasabas',
                'first_name' => 'Rica',
                'midle_name' => 'P',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'rica@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'1',
                'campus_id'=>'1',
        ]);
        DB::table('students')->insert([
        		'sid'=>'18004',
                'last_name' => 'San Juan',
                'first_name' => 'Jose Lean',
                'midle_name' => 'C',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'jose@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'1',
                'campus_id'=>'1',
        ]);
        DB::table('students')->insert([
        		'sid'=>'18005',
                'last_name' => 'Santiago',
                'first_name' => 'Redel',
                'midle_name' => 'P',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'redel@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'1',
                'campus_id'=>'1',
        ]);  

        DB::table('students')->insert([
        		'sid'=>'18006',
                'last_name' => 'Mendoza',
                'first_name' => 'Nicole',
                'midle_name' => 'P',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'nicole@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'2',
                'campus_id'=>'1',
        ]);                                          

         DB::table('students')->insert([
        		'sid'=>'18007',
                'last_name' => 'palma',
                'first_name' => 'Jemelica',
                'midle_name' => 'P',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'jemelica@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'2',
                'campus_id'=>'1',
        ]);         
    }
}
