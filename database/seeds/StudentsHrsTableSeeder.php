<?php

use Illuminate\Database\Seeder;

class StudentsHrsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('students')->insert([
                'sid'=>'18-0049',
                'last_name' => 'Ollit',
                'first_name' => 'Raymond',
                'midle_name' => 'Innu',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'Raymond@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'3',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',

        ]);
        DB::table('students')->insert([
                'sid'=>'18-0050',
                'last_name' => 'Arero',
                'first_name' => 'Klhea',
                'midle_name' => 'Delgado',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'Klhea@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'3',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',

        ]);        

        DB::table('students')->insert([
                'sid'=>'18-0051',
                'last_name' => 'Sanchez',
                'first_name' => 'KimyDora',
                'midle_name' => 'Pusod',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'KimyDora@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'3',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',

        ]);        

        DB::table('students')->insert([
                'sid'=>'18-0052',
                'last_name' => 'Arceo',
                'first_name' => 'Jhon Ace',
                'midle_name' => 'Panaligan',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'Jhonace@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'3',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',

        ]);        

        DB::table('students')->insert([
                'sid'=>'18-0053',
                'last_name' => 'Busan',
                'first_name' => 'Maxime',
                'midle_name' => 'Herera',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'Maxime@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'3',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',

        ]);        

        DB::table('students')->insert([
                'sid'=>'18-0054',
                'last_name' => 'Villafuere',
                'first_name' => 'Nohreen',
                'midle_name' => 'Salcedo',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'Nohreen@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'3',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',

        ]);        

        DB::table('students')->insert([
                'sid'=>'18-0055',
                'last_name' => 'Carreon',
                'first_name' => 'Mila',
                'midle_name' => 'Rosales',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'mila@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'3',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',

        ]);        

        DB::table('students')->insert([
                'sid'=>'18-0056',
                'last_name' => 'Villa Juan',
                'first_name' => 'James',
                'midle_name' => 'Delos Reyes',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'james@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'3',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',

        ]);        

        DB::table('students')->insert([
                'sid'=>'18-0057',
                'last_name' => 'Silvano',
                'first_name' => 'Felix',
                'midle_name' => 'Centeno',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'felix@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'3',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',

        ]);        

        DB::table('students')->insert([
                'sid'=>'18-0058',
                'last_name' => 'Millares',
                'first_name' => 'Kevin',
                'midle_name' => 'Roses',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'kevin@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'3',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',

        ]);        



    }
}
