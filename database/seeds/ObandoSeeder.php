<?php

use Illuminate\Database\Seeder;

class ObandoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                DB::table('students')->insert([
                'sid'=>'18-0059',
                'last_name' => 'Tenco',
                'first_name' => 'Victoria',
                'midle_name' => 'Sue',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'victoria@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'3',
                'campus_id'=>'3',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',

        ]);        

        DB::table('students')->insert([
                'sid'=>'18-0060',
                'last_name' => 'Alejo',
                'first_name' => 'Kyle',
                'midle_name' => 'Delmundo',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'kyle@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'3',
                'campus_id'=>'3',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',

        ]);        


        DB::table('students')->insert([
                'sid'=>'18-0061',
                'last_name' => 'Perero',
                'first_name' => 'Zia',
                'midle_name' => 'Pico',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'zia@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'3',
                'campus_id'=>'3',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',

        ]);        

                DB::table('students')->insert([
                'sid'=>'18-0062',
                'last_name' => 'Martinez',
                'first_name' => 'Angelo',
                'midle_name' => 'Pablo',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'angelo@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'3',
                'campus_id'=>'3',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',

        ]);        

                DB::table('students')->insert([
                'sid'=>'18-0063',
                'last_name' => 'Bermudez',
                'first_name' => 'Cath',
                'midle_name' => 'Valencia',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'cath@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'3',
                'campus_id'=>'3',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',

        ]);        


        DB::table('students')->insert([
                'sid'=>'18-0064',
                'last_name' => 'Delmundo',
                'first_name' => 'Glen',
                'midle_name' => 'Castro',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'glen@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'3',
                'campus_id'=>'3',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',

        ]);        

        DB::table('students')->insert([
                'sid'=>'18-0065',
                'last_name' => 'Luna',
                'first_name' => 'KZ',
                'midle_name' => 'Alejo',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'kz@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'3',
                'campus_id'=>'3',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',

        ]);        


        DB::table('students')->insert([
                'sid'=>'18-0066',
                'last_name' => 'Bastes',
                'first_name' => 'Randy',
                'midle_name' => 'Sinco',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'randy@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'3',
                'campus_id'=>'3',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',

        ]);       

                DB::table('students')->insert([
                'sid'=>'18-0067',
                'last_name' => 'Rosales',
                'first_name' => 'Sheryl',
                'midle_name' => 'Chua',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'sheryl@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'3',
                'campus_id'=>'3',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',

        ]);        
 
         DB::table('students')->insert([
                'sid'=>'18-0068',
                'last_name' => 'Vicente',
                'first_name' => 'Vhong',
                'midle_name' => 'Gordon',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'vhong@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'3',
                'campus_id'=>'3',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',

        ]);        

        DB::table('students')->insert([
                'sid'=>'18-0069',
                'last_name' => 'Villa Juan',
                'first_name' => 'Joydee',
                'midle_name' => 'Garcia',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'joydee@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'3',
                'campus_id'=>'3',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',

        ]);        

        DB::table('students')->insert([
                'sid'=>'18-0070',
                'last_name' => 'Quinto',
                'first_name' => 'Jessy',
                'midle_name' => 'Santos',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'jessy@sample.com',
                'password'=> bcrypt('sample'),
                'course_id'=>'3',
                'campus_id'=>'3',
                'filename'=>'student.png',
                'mobile'=>'+639069171012',
                'cor'=>'cor.png',

        ]);        

        DB::table('rooms')->insert([
        		'room_code'=>'ROOM 101',
        		'room_description'=>'Null',
        		'capacity'=>'50',
        		'campus_id'=>'3',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 102',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'3',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 103',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'3',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 104',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'3',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 105',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'3',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 106',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'3',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 107',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'3',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 108',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'3',
        ]); 
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 201',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'3',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 202',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'3',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 203',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'3',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 204',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'3',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 205',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'3',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ROOM 211',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'3',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'BUTIL 1',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'3',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'BUTIL 2',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'3',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'SCILAB',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'3',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'KEYLAB',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'3',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'CL 1',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'3',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'CL 2',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'3',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'CTECH LAB',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'3',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'CCM LAB',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'3',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ENICS LAB 1',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'3',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'ECAL LAB',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'3',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'WELD LAB',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'3',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'HR LAB 1',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'3',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'HR LAB 2',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'3',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'HR LAB 3',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'3',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'HR LAB 4',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'3',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'HR LEC RM',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'3',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'STAGE',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'3',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'F. PARK',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'3',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'DTS RA',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'3',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'COURT L.S.',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'3',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'COURT R.S.',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'3',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'R.A. LT',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'3',
        ]);
        DB::table('rooms')->insert([
                'room_code'=>'R.A. RT',
                'room_description'=>'Null',
                'capacity'=>'50',
                'campus_id'=>'3',
        ]);

        //Instructors
               DB::table('professors')->insert([
                'eid'=>'10-0011',
                'last_name' => 'Yolanda',
                'first_name' => 'Susana',
                'midle_name' => 'Sanchez',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'Susana@sample.com',
                'password'=> bcrypt('sample'),
                'campus_id'=>'3',
                'status'=>'0',
                'filename'=>'teacher.png',
                'mobile'=>'+639069171012',
        ]);
               DB::table('professors')->insert([
                'eid'=>'10-0012',
                'last_name' => 'Romero',
                'first_name' => 'Henry Sun',
                'midle_name' => 'Cruz',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'HenrySunnn@sample.com',
                'password'=> bcrypt('sample'),
                'campus_id'=>'3',
                'status'=>'0',
                'filename'=>'teacher.png',
                'mobile'=>'+639069171012',
        ]);

               DB::table('professors')->insert([
                'eid'=>'10-0013',
                'last_name' => 'Reyes',
                'first_name' => 'Paulito',
                'midle_name' => 'Salcedo',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'Paulito@sample.com',
                'password'=> bcrypt('sample'),
                'campus_id'=>'3',
                'status'=>'0',
                'filename'=>'teacher.png',
                'mobile'=>'+639069171012',
        ]);
               DB::table('professors')->insert([
                'eid'=>'10-0014',
                'last_name' => 'Ollit',
                'first_name' => 'Sheena Mae',
                'midle_name' => 'Tadeo',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'SheenaMaee@sample.com',
                'password'=> bcrypt('sample'),
                'campus_id'=>'3',
                'status'=>'0',
                'filename'=>'teacher.png',
                'mobile'=>'+639069171012',
        ]);
               DB::table('professors')->insert([
                'eid'=>'10-0015',
                'last_name' => 'John',
                'first_name' => 'Kaneki',
                'midle_name' => 'Galvez',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'Kaneki@sample.com',
                'password'=> bcrypt('sample'),
                'campus_id'=>'3',
                'status'=>'0',
                'filename'=>'teacher.png',
                'mobile'=>'+639069171012',
        ]);










    }
}
