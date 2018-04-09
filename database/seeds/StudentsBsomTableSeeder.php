<?php

use Illuminate\Database\Seeder;

class StudentsBsomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
                'sid'=>'18-0022',
                'last_name' => 'Ava',
                'first_name' => 'John',
                'midle_name' => 'Cruz',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'JohnAva@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'2',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',

        ]);
        DB::table('students')->insert([
                'sid'=>'18-0023',
                'last_name' => 'Arceo',
                'first_name' => 'Pedro',
                'midle_name' => 'Dela Cruz',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'Pedro@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'2',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',

        ]);
        DB::table('students')->insert([
                'sid'=>'18-0024',
                'last_name' => 'Amaninche',
                'first_name' => 'Elyboy',
                'midle_name' => 'Elton',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'Elyboy@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'2',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',

        ]);

        DB::table('students')->insert([
                'sid'=>'18-0025',
                'last_name' => 'Balite',
                'first_name' => 'Moises',
                'midle_name' => 'Panaligan',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'Moises@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'2',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',

        ]);

        DB::table('students')->insert([
                'sid'=>'18-0026',
                'last_name' => 'Balagtas',
                'first_name' => 'Maximo',
                'midle_name' => 'Olivero',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'Maximo@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'2',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',

        ]);

        DB::table('students')->insert([
                'sid'=>'18-0027',
                'last_name' => 'Caparas',
                'first_name' => 'Jayson',
                'midle_name' => 'Cruz',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'Jayson@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'2',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',

        ]);

        DB::table('students')->insert([
                'sid'=>'18-0028',
                'last_name' => 'Daligdig',
                'first_name' => 'Eunice',
                'midle_name' => 'Parva',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'Eunice@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'2',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',

        ]);

        DB::table('students')->insert([
                'sid'=>'18-0029',
                'last_name' => 'Domingo',
                'first_name' => 'Kelly Jane',
                'midle_name' => 'Cruz',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'Kellyjane@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'2',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',

        ]);

        DB::table('students')->insert([
                'sid'=>'18-0030',
                'last_name' => 'Esguerra',
                'first_name' => 'Chacha',
                'midle_name' => 'Santos',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'Chacha@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'2',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',

        ]);

        DB::table('students')->insert([
                'sid'=>'18-0031',
                'last_name' => 'Faustino',
                'first_name' => 'Jenny',
                'midle_name' => 'Liit',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'Jenny@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'2',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
         ]);
        DB::table('students')->insert([
                'sid'=>'18-0032',
                'last_name' => 'Garcia',
                'first_name' => 'Angel',
                'midle_name' => 'Locsin',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'Angel@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'2',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',

        ]);
        DB::table('students')->insert([
                'sid'=>'18-0033',
                'last_name' => 'Gan',
                'first_name' => 'Gienie',
                'midle_name' => 'Ollit',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'Gienie@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'2',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',

        ]);        

        DB::table('students')->insert([
                'sid'=>'18-0034',
                'last_name' => 'Hilario',
                'first_name' => 'Jerome',
                'midle_name' => 'Locsin',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'Jerome@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'2',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',

        ]);

        DB::table('students')->insert([
                'sid'=>'18-0035',
                'last_name' => 'Indigo',
                'first_name' => 'Mark',
                'midle_name' => 'Caperal',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'Mark@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'2',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',

        ]);
        DB::table('students')->insert([
                'sid'=>'18-0036',
                'last_name' => 'Javier',
                'first_name' => 'Andrew',
                'midle_name' => 'Mendoza',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'Andrew@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'2',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',

        ]);        
       
        DB::table('students')->insert([
                'sid'=>'18-0037',
                'last_name' => 'Montes',
                'first_name' => 'Julia',
                'midle_name' => 'Clarete',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'Julia@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'2',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',

        ]);

        DB::table('students')->insert([
                'sid'=>'18-0038',
                'last_name' => 'Natividad',
                'first_name' => 'Christian',
                'midle_name' => 'Cruz',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'Christian@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'2',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',

        ]);

        DB::table('students')->insert([
                'sid'=>'18-0039',
                'last_name' => 'Oliveros',
                'first_name' => 'Juana',
                'midle_name' => 'Cruz',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'Juana@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'2',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',

        ]);
        DB::table('students')->insert([
                'sid'=>'18-0040',
                'last_name' => 'Pangan',
                'first_name' => 'Angelica',
                'midle_name' => 'Tan',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'Angelica@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'2',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',

        ]);
        DB::table('students')->insert([
                'sid'=>'18-0041',
                'last_name' => 'Roque',
                'first_name' => 'Mary Rose',
                'midle_name' => 'Lipi',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'Maryrose@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'2',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',

        ]);

        DB::table('students')->insert([
                'sid'=>'18-0042',
                'last_name' => 'Reyes',
                'first_name' => 'Christine',
                'midle_name' => 'Sanchez',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'Christine@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'2',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',

        ]);

        DB::table('students')->insert([
                'sid'=>'18-0043',
                'last_name' => 'Santos',
                'first_name' => 'Rannie',
                'midle_name' => 'Locsin',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'Rannie@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'2',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',

        ]);

        DB::table('students')->insert([
                'sid'=>'18-0044',
                'last_name' => 'Suma',
                'first_name' => 'Kaye',
                'midle_name' => 'Pili',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'Kaye@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'2',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',

        ]);

        DB::table('students')->insert([
                'sid'=>'18-0045',
                'last_name' => 'Tanggol',
                'first_name' => 'Martin',
                'midle_name' => 'Ipag',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'Martin@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'2',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',

        ]);

        DB::table('students')->insert([
                'sid'=>'18-0046',
                'last_name' => 'Teodoro',
                'first_name' => 'Jose',
                'midle_name' => 'Teodorita',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'Jose@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'2',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',

        ]);

        DB::table('students')->insert([
                'sid'=>'18-0047',
                'last_name' => 'Trinidad',
                'first_name' => 'Alex',
                'midle_name' => 'Benigno',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'Alex@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'2',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',

        ]);

        DB::table('students')->insert([
                'sid'=>'18-0048',
                'last_name' => 'Ollit',
                'first_name' => 'Ray',
                'midle_name' => 'Innu',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'Ray@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'2',
                'campus_id'=>'1',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',

        ]);

    }
}
