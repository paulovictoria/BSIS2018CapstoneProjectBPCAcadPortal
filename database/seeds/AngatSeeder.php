<?php

use Illuminate\Database\Seeder;

class AngatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
				DB::table('students')->insert([
                'sid'=>'18-0911',
                'last_name' => 'Gonzales',
                'first_name' => 'Mika Joy',
                'midle_name' => 'Leti',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'Mikajoy@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'3',
                'campus_id'=>'4',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);
				DB::table('students')->insert([
                'sid'=>'18-0912',
                'last_name' => 'Galimbit',
                'first_name' => 'Jirehh',
                'midle_name' => 'Leti',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'Jirehh@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'3',
                'campus_id'=>'4',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);			
				DB::table('students')->insert([
                'sid'=>'18-0913',
                'last_name' => 'Carpio',
                'first_name' => 'Alma',
                'midle_name' => 'Leti',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'Alma@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'3',
                'campus_id'=>'4',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);		
        		DB::table('students')->insert([
                'sid'=>'18-0914',
                'last_name' => 'Dela Cruz',
                'first_name' => 'Joylen',
                'midle_name' => 'Kanaminshi',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'Joylen@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'3',
                'campus_id'=>'4',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);	
        		DB::table('students')->insert([
                'sid'=>'18-0915',
                'last_name' => 'Faustino',
                'first_name' => 'Abby',
                'midle_name' => 'Go',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'Abbymebaby@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'3',
                'campus_id'=>'4',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);
				DB::table('students')->insert([
                'sid'=>'18-0916',
                'last_name' => 'Gasul',
                'first_name' => 'Joyjoy',
                'midle_name' => 'Ge',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'Joyjoy@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'3',
                'campus_id'=>'4',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);
				DB::table('students')->insert([
                'sid'=>'18-0917',
                'last_name' => 'Gonzales',
                'first_name' => 'Mikaela Joy',
                'midle_name' => 'Leti',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'Mikaelajoy@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'3',
                'campus_id'=>'4',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);
				DB::table('students')->insert([
                'sid'=>'18-0918',
                'last_name' => 'Santana',
                'first_name' => 'Boy',
                'midle_name' => 'Ambrosio',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'Boy@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'3',
                'campus_id'=>'4',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);

				DB::table('students')->insert([
                'sid'=>'18-0919',
                'last_name' => 'Cruz',
                'first_name' => 'Boyong',
                'midle_name' => 'Leti',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'Boyong@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'3',
                'campus_id'=>'4',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);
				DB::table('students')->insert([
                'sid'=>'18-0920',
                'last_name' => 'Caparas',
                'first_name' => 'Santina',
                'midle_name' => 'Leti',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'Santina@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'3',
                'campus_id'=>'4',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);


		DB::table('rooms')->insert([
        		'room_code'=>'ROOM 101',
        		'room_description'=>'Null',
        		'capacity'=>'50',
        		'campus_id'=>'4',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 102',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'4',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 103',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'4',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 104',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'4',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 105',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'4',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 106',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'4',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 107',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'4',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 108',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'4',
        ]); 
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 201',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'4',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 202',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'4',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 203',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'4',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 204',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'4',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 205',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'4',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 211',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'4',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'BUTIL 1',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'4',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'BUTIL 2',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'4',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'SCILAB',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'4',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'KEYLAB',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'4',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'CL 1',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'4',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'CL 2',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'4',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'CTECH LAB',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'4',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'CCM LAB',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'4',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ENICS LAB 1',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'4',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ECAL LAB',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'4',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'WELD LAB',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'4',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'HR LAB 1',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'4',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'HR LAB 2',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'4',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'HR LAB 3',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'4',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'HR LAB 4',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'4',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'HR LEC RM',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'4',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'STAGE',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'4',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'F. PARK',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'4',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'DTS RA',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'4',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'COURT L.S.',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'4',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'COURT R.S.',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'4',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'R.A. LT',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'4',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'R.A. RT',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'4',
        ]);
        //Instructors
               DB::table('professors')->insert([
                'eid'=>'10-0001',
                'last_name' => 'Roque',
                'first_name' => 'Mary Ann',
                'midle_name' => 'Tadeo',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'MaryAnn@sample.com',
                'password'=> bcrypt('sample'),
                'campus_id'=>'4',
                'status'=>'0',
                'filename'=>'teacher.png',
                'mobile'=>'+639069171012',
        ]);
               DB::table('professors')->insert([
                'eid'=>'10-0002',
                'last_name' => 'Eugenio',
                'first_name' => 'Eugene',
                'midle_name' => 'Cruz',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'Eugenio@sample.com',
                'password'=> bcrypt('sample'),
                'campus_id'=>'4',
                'status'=>'0',
                'filename'=>'teacher.png',
                'mobile'=>'+639069171012',
        ]);

               DB::table('professors')->insert([
                'eid'=>'10-0003',
                'last_name' => 'Centeno',
                'first_name' => 'MichaelNoy',
                'midle_name' => 'Tadeo',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'MichaelNoy@sample.com',
                'password'=> bcrypt('sample'),
                'campus_id'=>'4',
                'status'=>'0',
                'filename'=>'teacher.png',
                'mobile'=>'+639069171012',
        ]);
               DB::table('professors')->insert([
                'eid'=>'10-0004',
                'last_name' => 'Dela Cruz',
                'first_name' => 'Monica Joy',
                'midle_name' => 'Tadeo',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'MonicaJoy@sample.com',
                'password'=> bcrypt('sample'),
                'campus_id'=>'4',
                'status'=>'0',
                'filename'=>'teacher.png',
                'mobile'=>'+639069171012',
        ]);
               DB::table('professors')->insert([
                'eid'=>'10-0005',
                'last_name' => 'Dela Torre',
                'first_name' => 'Queenie',
                'midle_name' => 'Galvez',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'Queenie@sample.com',
                'password'=> bcrypt('sample'),
                'campus_id'=>'4',
                'status'=>'0',
                'filename'=>'teacher.png',
                'mobile'=>'+639069171012',
        ]);




    }
}
