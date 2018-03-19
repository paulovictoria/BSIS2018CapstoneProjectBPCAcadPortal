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
                'sid'=>'18-0001',
                'last_name' => 'Blasabas',
                'first_name' => 'Rica',
                'midle_name' => 'P',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'rica@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'1',
                'campus_id'=>'1',
                'filename'=>'student.png',
        ]);
        DB::table('students')->insert([
                'sid'=>'18-0002',
                'last_name' => 'Bautista',
                'first_name' => 'joana',
                'midle_name' => 'P',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'joana@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'1',
                'campus_id'=>'1',
                'filename'=>'student.png',
        ]);
        DB::table('students')->insert([
                'sid'=>'18-0003',
                'last_name' => 'Bonifacio',
                'first_name' => 'Raymond',
                'midle_name' => 'T',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'raymond@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'1',
                'campus_id'=>'1',
                'filename'=>'student.png',
        ]);
        DB::table('students')->insert([
                'sid'=>'18-0004',
                'last_name' => 'Caparas',
                'first_name' => 'Joshua',
                'midle_name' => 'P',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'joshua@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'1',
                'campus_id'=>'1',
                'filename'=>'student.png',
        ]);
        DB::table('students')->insert([
                'sid'=>'18-0005',
                'last_name' => 'Cierva',
                'first_name' => 'Princess',
                'midle_name' => 'M',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'princess@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'1',
                'campus_id'=>'1',
                'filename'=>'student.png',
        ]);
        DB::table('students')->insert([
                'sid'=>'18-0006',
                'last_name' => 'Fidelis',
                'first_name' => 'Julius',
                'midle_name' => 'h',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'julius@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'1',
                'campus_id'=>'1',
                'filename'=>'student.png',
        ]);
        DB::table('students')->insert([
                'sid'=>'18-0007',
                'last_name' => 'Salamangca',
                'first_name' => 'Linda',
                'midle_name' => 'P',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'linda@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'1',
                'campus_id'=>'1',
                'filename'=>'student.png',
        ]);
        DB::table('students')->insert([
                'sid'=>'18-0008',
                'last_name' => 'Lopez',
                'first_name' => 'Lizeth',
                'midle_name' => 'P',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'lizeth@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'1',
                'campus_id'=>'1',
                'filename'=>'student.png',
        ]);
        DB::table('students')->insert([
                'sid'=>'18-0009',
                'last_name' => 'Romero',
                'first_name' => 'Jireh',
                'midle_name' => 'P',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'Jireh@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'1',
                'campus_id'=>'1',
                'filename'=>'student.png',
        ]);
        DB::table('students')->insert([
                'sid'=>'18-0010',
                'last_name' => 'Canlas',
                'first_name' => 'Vergel',
                'midle_name' => 'P',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'canlas@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'1',
                'campus_id'=>'1',
                'filename'=>'student.png',
        ]);
        DB::table('students')->insert([
                'sid'=>'18-0011',
                'last_name' => 'Reyes',
                'first_name' => 'Paul',
                'midle_name' => 'A',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'paul@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'1',
                'campus_id'=>'1',
                'filename'=>'student.png',
        ]);
        DB::table('students')->insert([
                'sid'=>'18-0013',
                'last_name' => 'Sanchez',
                'first_name' => 'Kimmy',
                'midle_name' => 'P',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'kimmy@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'1',
                'campus_id'=>'1',
                'filename'=>'student.png',
        ]);
        DB::table('students')->insert([
                'sid'=>'18-0014',
                'last_name' => 'Simbulan',
                'first_name' => 'Sunshine',
                'midle_name' => 'P',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'sunshine@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'1',
                'campus_id'=>'1',
                'filename'=>'student.png',
        ]);
        DB::table('students')->insert([
                'sid'=>'18-0015',
                'last_name' => 'Simbulan',
                'first_name' => 'Jhon Ave',
                'midle_name' => 'P',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'ace@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'1',
                'campus_id'=>'1',
                'filename'=>'student.png',
        ]);
        DB::table('students')->insert([
                'sid'=>'18-0016',
                'last_name' => 'San Juan',
                'first_name' => 'Jose',
                'midle_name' => 'P',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'jose@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'1',
                'campus_id'=>'1',
                'filename'=>'student.png',
        ]);
        DB::table('students')->insert([
                'sid'=>'18-0017',
                'last_name' => 'Santiago',
                'first_name' => 'Redel',
                'midle_name' => 'P',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'redel@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'1',
                'campus_id'=>'1',
                'filename'=>'student.png',
        ]);
        DB::table('students')->insert([
                'sid'=>'18-0018-0',
                'last_name' => 'Tan',
                'first_name' => 'John carlmelo',
                'midle_name' => 'P',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'tan@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'1',
                'campus_id'=>'1',
                'filename'=>'student.png',
        ]);
        DB::table('students')->insert([
                'sid'=>'18-0019',
                'last_name' => 'Velayo',
                'first_name' => 'Michael',
                'midle_name' => 'C',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'michael@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'1',
                'campus_id'=>'1',
                'filename'=>'student.png',
        ]);
        DB::table('students')->insert([
                'sid'=>'18-0020',
                'last_name' => 'Ollit',
                'first_name' => 'Rannie',
                'midle_name' => 'P',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'rannie@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'1',
                'campus_id'=>'1',
                'filename'=>'student.png',
        ]);
        DB::table('students')->insert([
                'sid'=>'18-0021',
                'last_name' => 'Gan',
                'first_name' => 'Gieselle',
                'midle_name' => 'P',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'gan@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'1',
                'campus_id'=>'1',
                'filename'=>'student.png',
        ]);                                                                                                                                                                             


    }
}
