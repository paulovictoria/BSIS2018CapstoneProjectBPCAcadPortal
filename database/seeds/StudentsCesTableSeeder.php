<?php

use Illuminate\Database\Seeder;

class StudentsCesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

                 DB::table('students')->insert([
                'sid'=>'18-0077',
                'last_name' => 'Dionisio',
                'first_name' => 'Abby',
                'midle_name' => 'Castro',  
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

                 DB::table('students')->insert([
                'sid'=>'18-0078',
                'last_name' => 'Perez',
                'first_name' => 'Mabel',
                'midle_name' => 'Vergoza',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'Mabel@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'4',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png', 
		]);
                 DB::table('students')->insert([
                'sid'=>'18-0079',
                'last_name' => 'Mallari',
                'first_name' => 'Anna',
                'midle_name' => 'Tobias',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'Anna@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'4',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png', 
		]);

                 DB::table('students')->insert([
                'sid'=>'18-0080',
                'last_name' => 'Camua',
                'first_name' => 'Lawrence',
                'midle_name' => 'Sison',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'Lawrence@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'4',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png', 
		]);

                 DB::table('students')->insert([
                'sid'=>'18-0081',
                'last_name' => 'Nicodemus',
                'first_name' => 'Maynard',
                'midle_name' => 'Marcos',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'Maynard@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'4',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png', 
		]);

                 DB::table('students')->insert([
                'sid'=>'18-0082',
                'last_name' => 'Lumague',
                'first_name' => 'Adam',
                'midle_name' => 'Cortez',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'Adam@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'4',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png', 
		]);

                 DB::table('students')->insert([
                'sid'=>'18-0083',
                'last_name' => 'Fecson',
                'first_name' => 'Adelle',
                'midle_name' => 'Cunna',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'Adelle@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'4',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png', 
		]);

                 DB::table('students')->insert([
                'sid'=>'18-0084',
                'last_name' => 'Estrella',
                'first_name' => 'Adonis',
                'midle_name' => 'Pascual',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'Adonis@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'4',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png', 
		]);

                 DB::table('students')->insert([
                'sid'=>'18-0085',
                'last_name' => 'Concepcion',
                'first_name' => 'Jack',
                'midle_name' => 'Martinez',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'Jack@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'4',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png', 
		]);

                 DB::table('students')->insert([
                'sid'=>'18-0086',
                'last_name' => 'Torres',
                'first_name' => 'Adrian',
                'midle_name' => 'Trinidad',  
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
                'sid'=>'18-0087',
                'last_name' => 'Go',
                'first_name' => 'Noel',
                'midle_name' => 'San Juan',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'Noel@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'4',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png', 
		]);

                 DB::table('students')->insert([
                'sid'=>'18-0088',
                'last_name' => 'Santiago',
                'first_name' => 'Redelita',
                'midle_name' => 'Paloma',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'Redelita@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'4',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png', 
		]);






    }
}
