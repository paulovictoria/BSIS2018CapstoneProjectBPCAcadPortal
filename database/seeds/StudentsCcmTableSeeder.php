<?php

use Illuminate\Database\Seeder;

class StudentsCcmTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
/*				DB::table('students')->insert([
                'sid'=>'13-0991',
                'last_name' => 'Maroto',
                'first_name' => 'JoseAntonio',
                'midle_name' => 'Calapon',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'JoseAntoghgnio@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'3',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);*/
				DB::table('students')->insert([
                'sid'=>'13-0922',
                'last_name' => 'Galileo',
                'first_name' => 'Angelicar',
                'midle_name' => 'Cruz',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'Angelicar@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'6',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);
				DB::table('students')->insert([
                'sid'=>'13-0923',
                'last_name' => 'Mariano',
                'first_name' => 'Kimberly',
                'midle_name' => 'Silva',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'Kimberly@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'6',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);
				DB::table('students')->insert([
                'sid'=>'13-0924',
                'last_name' => 'Hill',
                'first_name' => 'Kim',
                'midle_name' => 'Calapon',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'Kim@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'6',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);
				DB::table('students')->insert([
                'sid'=>'13-0925',
                'last_name' => 'Tantino',
                'first_name' => 'Ester',
                'midle_name' => 'Mariano',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'Ester@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'6',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);
				DB::table('students')->insert([
                'sid'=>'13-0926',
                'last_name' => 'Crisanto',
                'first_name' => 'Joselean',
                'midle_name' => 'Calapon',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'Joseyewlean@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'6',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);
				DB::table('students')->insert([
                'sid'=>'13-0927',
                'last_name' => 'Carlos',
                'first_name' => 'Johnny',
                'midle_name' => 'Cervantes',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'Johnny@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'6',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);
				DB::table('students')->insert([
                'sid'=>'13-0928',
                'last_name' => 'Esquillo',
                'first_name' => 'Erwin',
                'midle_name' => 'Caparas',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'Erwin@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'6',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);
				DB::table('students')->insert([
                'sid'=>'13-0929',
                'last_name' => 'Magalona',
                'first_name' => 'Bea',
                'midle_name' => 'Alonzo',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'Bea@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'6',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);
				DB::table('students')->insert([
                'sid'=>'13-0930',
                'last_name' => 'Locsin',
                'first_name' => 'Angel',
                'midle_name' => 'Cruz',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'Jose@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'6',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);







    }
}
