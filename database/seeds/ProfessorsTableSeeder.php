<?php

use Illuminate\Database\Seeder;

class ProfessorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('professors')->insert([
                'eid'=>'18-0006',
                'last_name' => 'Tamayo',
                'first_name' => 'Ferdinand',
                'midle_name' => 'T',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'tams@sample.com',
                'password'=> bcrypt('sample'),
                'campus_id'=>'1',
                'status'=>'0',
                'filename'=>'teacher.png',
        ]);            
        DB::table('professors')->insert([
        		'eid'=>'18-0001',
                'last_name' => 'Victoria',
                'first_name' => 'Paulo',
                'midle_name' => 'A',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'paulo@sample.com',
                'password'=> bcrypt('sample'),
                'campus_id'=>'1',
                'status'=>'0',
                'filename'=>'teacher.png',
        ]);
        DB::table('professors')->insert([
        		'eid'=>'18-0002',
                'last_name' => 'Villafuerte',
                'first_name' => 'ED',
                'midle_name' => 'C',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'ed@sample.com',
                'password'=> bcrypt('sample'),
                'campus_id'=>'1',
                'status'=>'0',
                'filename'=>'teacher.png',
        ]);
        DB::table('professors')->insert([
        		'eid'=>'18-0003',
                'last_name' => 'Guirre',
                'first_name' => 'RoseMarrie',
                'midle_name' => 'S',  
                'approved'=>true,
                'gender'=>'female',
                'email'=>'rose@sample.com',
                'password'=> bcrypt('sample'),
                'campus_id'=>'1',
                'status'=>'0',
                'filename'=>'teacher.png',
        ]);                
        DB::table('professors')->insert([
                'eid'=>'18-0004',
                'last_name' => 'Caluscusin',
                'first_name' => 'Amado',
                'midle_name' => 'A',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'amado@sample.com',
                'password'=> bcrypt('sample'),
                'campus_id'=>'1',
                'status'=>'0',
                'filename'=>'teacher.png',
        ]);    
        DB::table('professors')->insert([
                'eid'=>'18-0005',
                'last_name' => 'Arenas',
                'first_name' => 'Sheldon',
                'midle_name' => 'V',  
                'approved'=>true,
                'gender'=>'male',
                'email'=>'sheldon@sample.com',
                'password'=> bcrypt('sample'),
                'campus_id'=>'1',
                'status'=>'0',
                'filename'=>'teacher.png',
        ]);   
                 
    }
}
