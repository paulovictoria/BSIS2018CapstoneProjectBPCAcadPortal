<?php

use Illuminate\Database\Seeder;

class BocaueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//Students
        DB::table('students')->insert([
                'sid'=>'18-0901',
                'last_name' => 'Blasabas',
                'first_name' => 'Rey',
                'midle_name' => 'Gaban',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'Rey@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'3',
                'campus_id'=>'2',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);
        DB::table('students')->insert([
                'sid'=>'18-0902',
                'last_name' => 'Carlos',
                'first_name' => 'Michaela',
                'midle_name' => 'Gonzales',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'Michaela@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'3',
                'campus_id'=>'2',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);        
        DB::table('students')->insert([
                'sid'=>'18-0903',
                'last_name' => 'De Vera',
                'first_name' => 'Vince',
                'midle_name' => 'Calata',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'Vince@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'3',
                'campus_id'=>'2',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);
        DB::table('students')->insert([
                'sid'=>'18-0904',
                'last_name' => 'Espenoza',
                'first_name' => 'Carlito',
                'midle_name' => 'Ibanez',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'Carlito@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'3',
                'campus_id'=>'2',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);
        DB::table('students')->insert([
                'sid'=>'18-0905',
                'last_name' => 'De Vera',
                'first_name' => 'Vincee',
                'midle_name' => 'Calata',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'Vincee@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'3',
                'campus_id'=>'2',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);                
        DB::table('students')->insert([
                'sid'=>'18-0906',
                'last_name' => 'De Vera',
                'first_name' => 'Gaga',
                'midle_name' => 'Calata',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'Gaga@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'3',
                'campus_id'=>'2',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);     
        DB::table('students')->insert([
                'sid'=>'18-0907',
                'last_name' => 'Reyes',
                'first_name' => 'Stace',
                'midle_name' => 'Gonzales',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'Stace@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'3',
                'campus_id'=>'2',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);   
        DB::table('students')->insert([
                'sid'=>'18-0908',
                'last_name' => 'De Vera',
                'first_name' => 'Jennifer',
                'midle_name' => 'Calunsod',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'Jennifer@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'3',
                'campus_id'=>'2',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]); 
        DB::table('students')->insert([
                'sid'=>'18-0909',
                'last_name' => 'De Vera',
                'first_name' => 'Vincel',
                'midle_name' => 'Calata',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'Vincel@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'3',
                'campus_id'=>'2',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);
        DB::table('students')->insert([
                'sid'=>'18-0910',
                'last_name' => 'De Vera',
                'first_name' => 'Vincent',
                'midle_name' => 'Calata',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'Vincent@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'3',
                'campus_id'=>'2',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);       
        //Rooms
        DB::table('rooms')->insert([
        		'room_code'=>'ROOM 101',
        		'room_description'=>'Null',
        		'capacity'=>'50',
        		'campus_id'=>'2',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 102',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'2',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 103',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'2',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 104',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'2',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 105',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'2',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 106',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'2',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 107',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'2',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 108',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'2',
        ]); 
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 201',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'2',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 202',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'2',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 203',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'2',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 204',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'2',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 205',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'2',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 211',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'2',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'BUTIL 1',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'2',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'BUTIL 2',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'2',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'SCILAB',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'2',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'KEYLAB',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'2',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'CL 1',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'2',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'CL 2',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'2',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'CTECH LAB',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'2',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'CCM LAB',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'2',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ENICS LAB 1',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'2',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ECAL LAB',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'2',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'WELD LAB',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'2',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'HR LAB 1',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'2',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'HR LAB 2',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'2',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'HR LAB 3',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'2',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'HR LAB 4',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'2',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'HR LEC RM',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'2',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'STAGE',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'2',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'F. PARK',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'2',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'DTS RA',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'2',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'COURT L.S.',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'2',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'COURT R.S.',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'2',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'R.A. LT',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'2',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'R.A. RT',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'2',
        ]);

        //Instructors
               DB::table('professors')->insert([
                'eid'=>'10-0006',
                'last_name' => 'Samalanca',
                'first_name' => 'Ma. Linda',
                'midle_name' => 'Sanchez',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'MaLinda@sample.com',
                'password'=> bcrypt('sample'),
                'campus_id'=>'2',
                'status'=>'0',
                'filename'=>'teacher.png',
                'mobile'=>'+639069171012',
        ]);
               DB::table('professors')->insert([
                'eid'=>'10-0007',
                'last_name' => 'Romero',
                'first_name' => 'JirehSan',
                'midle_name' => 'Cruz',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'JirehSan@sample.com',
                'password'=> bcrypt('sample'),
                'campus_id'=>'2',
                'status'=>'0',
                'filename'=>'teacher.png',
                'mobile'=>'+639069171012',
        ]);

               DB::table('professors')->insert([
                'eid'=>'10-0008',
                'last_name' => 'Reyes',
                'first_name' => 'Paula Adriana',
                'midle_name' => 'Salcedo',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'PaulaAdriana@sample.com',
                'password'=> bcrypt('sample'),
                'campus_id'=>'2',
                'status'=>'0',
                'filename'=>'teacher.png',
                'mobile'=>'+639069171012',
        ]);
               DB::table('professors')->insert([
                'eid'=>'10-0009',
                'last_name' => 'Ollit',
                'first_name' => 'Rasheeda Mae',
                'midle_name' => 'Tadeo',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'RashidaMae@sample.com',
                'password'=> bcrypt('sample'),
                'campus_id'=>'2',
                'status'=>'0',
                'filename'=>'teacher.png',
                'mobile'=>'+639069171012',
        ]);
               DB::table('professors')->insert([
                'eid'=>'10-0010',
                'last_name' => 'John',
                'first_name' => 'Elton',
                'midle_name' => 'Galvez',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'Elton@sample.com',
                'password'=> bcrypt('sample'),
                'campus_id'=>'2',
                'status'=>'0',
                'filename'=>'teacher.png',
                'mobile'=>'+639069171012',
        ]);


    }
}
