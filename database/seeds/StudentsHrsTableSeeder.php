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
                'cor'=>'cor.png',

        ]);        

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
                'campus_id'=>'1',
                'filename'=>'student.png',
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
                'campus_id'=>'1',
                'filename'=>'student.png',
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
                'campus_id'=>'1',
                'filename'=>'student.png',
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
                'campus_id'=>'1',
                'filename'=>'student.png',
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
                'campus_id'=>'1',
                'filename'=>'student.png',
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
                'campus_id'=>'1',
                'filename'=>'student.png',
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
                'campus_id'=>'1',
                'filename'=>'student.png',
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
                'campus_id'=>'1',
                'filename'=>'student.png',
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
                'campus_id'=>'1',
                'filename'=>'student.png',
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
                'campus_id'=>'1',
                'filename'=>'student.png',
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
                'campus_id'=>'1',
                'filename'=>'student.png',
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
                'campus_id'=>'1',
                'filename'=>'student.png',
                'cor'=>'cor.png',

        ]);        


    }
}
