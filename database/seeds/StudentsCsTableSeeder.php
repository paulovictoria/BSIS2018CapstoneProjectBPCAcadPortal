<?php

use Illuminate\Database\Seeder;

class StudentsCsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
				DB::table('students')->insert([
                'sid'=>'13-1901',
                'last_name' => 'Terry',
                'first_name' => 'Peter',
                'midle_name' => 'Gonzales',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'Peterr@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'4',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);
				DB::table('students')->insert([
                'sid'=>'13-1902',
                'last_name' => 'Terry',
                'first_name' => 'Rayanne',
                'midle_name' => 'Gonzales',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'Rayanne@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'4',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);
				DB::table('students')->insert([
                'sid'=>'13-1903',
                'last_name' => 'Villa',
                'first_name' => 'Adrian',
                'midle_name' => 'Reyes',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'Adrian@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'4',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);
				DB::table('students')->insert([
                'sid'=>'13-1904',
                'last_name' => 'Eugenio',
                'first_name' => 'Julius',
                'midle_name' => 'Gamit',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'Juliusss@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'4',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);
				DB::table('students')->insert([
                'sid'=>'13-1905',
                'last_name' => 'Bautista',
                'first_name' => 'Arrian',
                'midle_name' => 'Gonzales',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'Arrian@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'4',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);
				DB::table('students')->insert([
                'sid'=>'13-1906',
                'last_name' => 'Garcia',
                'first_name' => 'Bryan',
                'midle_name' => 'Yabut',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'Bryan@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'4',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);
				DB::table('students')->insert([
                'sid'=>'13-1907',
                'last_name' => 'Augustin',
                'first_name' => 'Christian',
                'midle_name' => 'Laloma',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'Christian@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'4',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);
				DB::table('students')->insert([
                'sid'=>'13-1908',
                'last_name' => 'Jhonson',
                'first_name' => 'DakotaMae',
                'midle_name' => 'Gonzales',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'DakotaMae@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'4',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);
				DB::table('students')->insert([
                'sid'=>'13-1909',
                'last_name' => 'Reyes',
                'first_name' => 'Dale',
                'midle_name' => 'Patapo',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'Dale@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'4',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);
				DB::table('students')->insert([
                'sid'=>'13-1910',
                'last_name' => 'Galvez',
                'first_name' => 'Abby',
                'midle_name' => 'Calapon',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'Abby@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'4',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);


    }
}
