<?php

use Illuminate\Database\Seeder;

class PandiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
				DB::table('students')->insert([
                'sid'=>'18-0921',
                'last_name' => 'Buenaventura',
                'first_name' => 'Alvin',
                'midle_name' => 'James',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'Alvin@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'3',
                'campus_id'=>'5',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);
				DB::table('students')->insert([
                'sid'=>'18-0922',
                'last_name' => 'Buenaventura',
                'first_name' => 'AlvinJames',
                'midle_name' => 'Reyes',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'AlvinJames@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'3',
                'campus_id'=>'5',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);
				DB::table('students')->insert([
                'sid'=>'18-0923',
                'last_name' => 'Buenaventura',
                'first_name' => 'Justine',
                'midle_name' => 'James',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'Justine@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'3',
                'campus_id'=>'5',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);		
				DB::table('students')->insert([
                'sid'=>'18-0924',
                'last_name' => 'Curry',
                'first_name' => 'Stephen',
                'midle_name' => 'Caruso',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'Stephen@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'3',
                'campus_id'=>'5',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);
				DB::table('students')->insert([
                'sid'=>'18-0925',
                'last_name' => 'Sanchez',
                'first_name' => 'Rose',
                'midle_name' => 'Layag',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'Rose@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'3',
                'campus_id'=>'5',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);
				DB::table('students')->insert([
                'sid'=>'18-0926',
                'last_name' => 'Ollit',
                'first_name' => 'Randy',
                'midle_name' => 'James',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'Randyorton@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'3',
                'campus_id'=>'5',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);
				DB::table('students')->insert([
                'sid'=>'18-0927',
                'last_name' => 'Torres',
                'first_name' => 'Jaya',
                'midle_name' => 'Undot',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'Jayasa@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'3',
                'campus_id'=>'5',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);
				DB::table('students')->insert([
                'sid'=>'18-0928',
                'last_name' => 'Clemente',
                'first_name' => 'Aljur',
                'midle_name' => 'James',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'Aljur@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'3',
                'campus_id'=>'5',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);
				DB::table('students')->insert([
                'sid'=>'18-0929',
                'last_name' => 'Dela Torre',
                'first_name' => 'Moira',
                'midle_name' => 'Angeles',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'Moira@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'3',
                'campus_id'=>'5',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);
				DB::table('students')->insert([
                'sid'=>'18-0930',
                'last_name' => 'Buenaventura',
                'first_name' => 'AlvinRey',
                'midle_name' => 'James',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'AlvinRey@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'3',
                'campus_id'=>'5',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);

		DB::table('rooms')->insert([
        		'room_code'=>'ROOM 101',
        		'room_description'=>'Null',
        		'capacity'=>'50',
        		'campus_id'=>'5',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 102',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'5',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 103',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'5',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 104',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'5',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 105',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'5',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 106',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'5',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 107',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'5',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 108',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'5',
        ]); 
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 201',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'5',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 202',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'5',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 203',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'5',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 204',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'5',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 205',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'5',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 211',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'5',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'BUTIL 1',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'5',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'BUTIL 2',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'5',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'SCILAB',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'5',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'KEYLAB',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'5',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'CL 1',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'5',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'CL 2',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'5',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'CTECH LAB',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'5',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'CCM LAB',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'5',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ENICS LAB 1',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'5',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ECAL LAB',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'5',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'WELD LAB',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'5',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'HR LAB 1',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'5',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'HR LAB 2',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'5',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'HR LAB 3',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'5',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'HR LAB 4',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'5',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'HR LEC RM',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'5',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'STAGE',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'5',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'F. PARK',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'5',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'DTS RA',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'5',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'COURT L.S.',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'5',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'COURT R.S.',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'5',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'R.A. LT',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'5',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'R.A. RT',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'5',
        ]);
        //Instructors
               DB::table('professors')->insert([
                'eid'=>'10-0016',
                'last_name' => 'Samalanca',
                'first_name' => 'Jeremiah',
                'midle_name' => 'Cruz',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'Jeremiah@sample.com',
                'password'=> bcrypt('sample'),
                'campus_id'=>'5',
                'status'=>'0',
                'filename'=>'teacher.png',
                'mobile'=>'+639069171012',
        ]);
               DB::table('professors')->insert([
                'eid'=>'10-0017',
                'last_name' => 'Romero',
                'first_name' => 'Leslie Kim',
                'midle_name' => 'Cruz',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'LeslieKimm@sample.com',
                'password'=> bcrypt('sample'),
                'campus_id'=>'5',
                'status'=>'0',
                'filename'=>'teacher.png',
                'mobile'=>'+639069171012',
        ]);

               DB::table('professors')->insert([
                'eid'=>'10-0018',
                'last_name' => 'Reyes',
                'first_name' => 'Raniellaa',
                'midle_name' => 'Salcedo',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'Raniellaa@sample.com',
                'password'=> bcrypt('sample'),
                'campus_id'=>'5',
                'status'=>'0',
                'filename'=>'teacher.png',
                'mobile'=>'+639069171012',
        ]);
               DB::table('professors')->insert([
                'eid'=>'10-0019',
                'last_name' => 'Ollit',
                'first_name' => 'Kimberly Jane',
                'midle_name' => 'Tadeo',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'Kimberly Jane@sample.com',
                'password'=> bcrypt('sample'),
                'campus_id'=>'5',
                'status'=>'0',
                'filename'=>'teacher.png',
                'mobile'=>'+639069171012',
        ]);
               DB::table('professors')->insert([
                'eid'=>'10-0020',
                'last_name' => 'John',
                'first_name' => 'Mikaela Nueva',
                'midle_name' => 'Galvez',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'Nueva@sample.com',
                'password'=> bcrypt('sample'),
                'campus_id'=>'5',
                'status'=>'0',
                'filename'=>'teacher.png',
                'mobile'=>'+639069171012',
        ]);


    }
}
