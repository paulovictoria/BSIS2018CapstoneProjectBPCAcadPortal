<?php

use Illuminate\Database\Seeder;

class SJDMSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
				DB::table('students')->insert([
                'sid'=>'18-0941',
                'last_name' => 'Velayo',
                'first_name' => 'Mila',
                'midle_name' => 'Cox',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'Milaks@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'3',
                'campus_id'=>'7',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);
				DB::table('students')->insert([
                'sid'=>'18-0942',
                'last_name' => 'Calata',
                'first_name' => 'Gilbert',
                'midle_name' => 'Deguzman',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'Gilbert@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'3',
                'campus_id'=>'7',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);
				DB::table('students')->insert([
                'sid'=>'18-0943',
                'last_name' => 'Capiral',
                'first_name' => 'Mark',
                'midle_name' => 'Cox',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'Maryk@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'3',
                'campus_id'=>'7',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);
				DB::table('students')->insert([
                'sid'=>'18-0944',
                'last_name' => 'Ezperanza',
                'first_name' => 'Anna Marie',
                'midle_name' => 'Dela Cruz',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'AnnaMarie@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'3',
                'campus_id'=>'7',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);
				DB::table('students')->insert([
                'sid'=>'18-0945',
                'last_name' => 'Estrella',
                'first_name' => 'Mikee',
                'midle_name' => 'Espina',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'Mikee@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'3',
                'campus_id'=>'7',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);
				DB::table('students')->insert([
                'sid'=>'18-0946',
                'last_name' => 'Mariano',
                'first_name' => 'Tonton',
                'midle_name' => 'Morong',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'Tonton@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'3',
                'campus_id'=>'7',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);
				DB::table('students')->insert([
                'sid'=>'18-0947',
                'last_name' => 'Mariano',
                'first_name' => 'Elfen',
                'midle_name' => 'Bautista',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'Elfen@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'3',
                'campus_id'=>'7',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);
				DB::table('students')->insert([
                'sid'=>'18-0948',
                'last_name' => 'Bautista',
                'first_name' => 'Tina',
                'midle_name' => 'Tan',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'Tina@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'3',
                'campus_id'=>'7',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);
				DB::table('students')->insert([
                'sid'=>'18-0949',
                'last_name' => 'Perez',
                'first_name' => 'Arcadia',
                'midle_name' => 'Jedy',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'Arcadia@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'3',
                'campus_id'=>'7',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);
				DB::table('students')->insert([
                'sid'=>'18-0950',
                'last_name' => 'Perez',
                'first_name' => 'Nenita',
                'midle_name' => 'Carlos',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'Nenita@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'3',
                'campus_id'=>'7',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',
        ]);

		DB::table('rooms')->insert([
        		'room_code'=>'ROOM 101',
        		'room_description'=>'Null',
        		'capacity'=>'50',
        		'campus_id'=>'7',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 102',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'7',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 103',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'7',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 104',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'7',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 105',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'7',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 106',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'7',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 107',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'7',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 108',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'7',
        ]); 
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 201',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'7',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 202',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'7',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 203',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'7',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 204',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'7',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 205',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'7',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 211',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'7',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'BUTIL 1',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'7',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'BUTIL 2',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'7',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'SCILAB',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'7',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'KEYLAB',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'7',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'CL 1',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'7',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'CL 2',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'7',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'CTECH LAB',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'7',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'CCM LAB',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'7',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ENICS LAB 1',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'7',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ECAL LAB',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'7',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'WELD LAB',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'7',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'HR LAB 1',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'7',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'HR LAB 2',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'7',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'HR LAB 3',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'7',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'HR LAB 4',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'7',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'HR LEC RM',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'7',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'STAGE',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'7',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'F. PARK',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'7',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'DTS RA',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'7',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'COURT L.S.',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'7',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'COURT R.S.',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'7',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'R.A. LT',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'7',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'R.A. RT',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'7',
        ]);

        //Instructors
               DB::table('professors')->insert([
                'eid'=>'10-0026',
                'last_name' => 'Samalanca',
                'first_name' => 'Leanne',
                'midle_name' => 'Sanchez',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'Leanne@sample.com',
                'password'=> bcrypt('sample'),
                'campus_id'=>'7',
                'status'=>'0',
                'filename'=>'teacher.png',
                'mobile'=>'+639069171012',
        ]);
               DB::table('professors')->insert([
                'eid'=>'10-0027',
                'last_name' => 'Romero',
                'first_name' => 'Dakotah',
                'midle_name' => 'Cruz',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'Dakotah@sample.com',
                'password'=> bcrypt('sample'),
                'campus_id'=>'7',
                'status'=>'0',
                'filename'=>'teacher.png',
                'mobile'=>'+639069171012',
        ]);

               DB::table('professors')->insert([
                'eid'=>'10-0028',
                'last_name' => 'Reyes',
                'first_name' => 'Andrei',
                'midle_name' => 'Salcedo',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'Andrei@sample.com',
                'password'=> bcrypt('sample'),
                'campus_id'=>'7',
                'status'=>'0',
                'filename'=>'teacher.png',
                'mobile'=>'+639069171012',
        ]);
               DB::table('professors')->insert([
                'eid'=>'10-0029',
                'last_name' => 'Ollit',
                'first_name' => 'Kobe',
                'midle_name' => 'Tadeo',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'Kobe@sample.com',
                'password'=> bcrypt('sample'),
                'campus_id'=>'7',
                'status'=>'0',
                'filename'=>'teacher.png',
                'mobile'=>'+639069171012',
        ]);
               DB::table('professors')->insert([
                'eid'=>'10-0030',
                'last_name' => 'John',
                'first_name' => 'Mayandra',
                'midle_name' => 'Galvez',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'Mayandra@sample.com',
                'password'=> bcrypt('sample'),
                'campus_id'=>'7',
                'status'=>'0',
                'filename'=>'teacher.png',
                'mobile'=>'+639069171012',
        ]);


    }
}
