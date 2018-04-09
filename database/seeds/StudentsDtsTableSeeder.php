<?php

use Illuminate\Database\Seeder;

class StudentsDtsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
				DB::table('students')->insert([
                'sid'=>'13-0911',
                'last_name' => 'Galvez',
                'first_name' => 'Tyson',
                'midle_name' => 'Calapon',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'dfason@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'7',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);
				DB::table('students')->insert([
                'sid'=>'13-0912',
                'last_name' => 'Galvez',
                'first_name' => 'Tyson',
                'midle_name' => 'Calapon',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'erfn@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'7',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);
				DB::table('students')->insert([
                'sid'=>'13-0913',
                'last_name' => 'Galvez',
                'first_name' => 'Mike',
                'midle_name' => 'Calapon',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'Mike@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'7',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);
				DB::table('students')->insert([
                'sid'=>'13-0914',
                'last_name' => 'Galvez',
                'first_name' => 'Mike Angelo',
                'midle_name' => 'Calapon',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'MikeAngelo@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'7',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);
				DB::table('students')->insert([
                'sid'=>'13-0915',
                'last_name' => 'Galvez',
                'first_name' => 'Jaya',
                'midle_name' => 'Calapon',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'Jaya@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'7',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);
				DB::table('students')->insert([
                'sid'=>'13-0916',
                'last_name' => 'Galvez',
                'first_name' => 'Henry',
                'midle_name' => 'Calapon',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'Henry@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'7',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);
				DB::table('students')->insert([
                'sid'=>'13-0917',
                'last_name' => 'Galvez',
                'first_name' => 'Joy',
                'midle_name' => 'Calapon',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'Joy@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'7',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);
				DB::table('students')->insert([
                'sid'=>'13-0918',
                'last_name' => 'Galvez',
                'first_name' => 'Daffaine',
                'midle_name' => 'Calapon',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'Daffaine@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'7',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);
				DB::table('students')->insert([
                'sid'=>'13-0919',
                'last_name' => 'Galvez',
                'first_name' => 'Nick',
                'midle_name' => 'Calapon',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'Nick@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'3',
                'campus_id'=>'7',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);
				DB::table('students')->insert([
                'sid'=>'13-0920',
                'last_name' => 'Galvez',
                'first_name' => 'Jose',
                'midle_name' => 'Calapon',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'fgdfae@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'7',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);






    }
}
