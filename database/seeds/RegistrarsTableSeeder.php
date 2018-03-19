<?php

use Illuminate\Database\Seeder;

class RegistrarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
  

        DB::table('registrars')->insert([
        	 	'eid' => '18-0001',
                'last_name' => 'registrarmalolos',
                'first_name' => 'registrarmalolos',
                'midle_name' => 'registrarmalolos',
                'gender' => 'female',
                'email' => 'registrarmalolos@sample.com',
                'password' => bcrypt('sample'),  
                'campus_id'=>'1',
                'filename'=>'clerk.png',

        ]);
        DB::table('registrars')->insert([
        	 	'eid' => '18-0002',
                'last_name' => 'registrarbocaue',
                'first_name' => 'registrarbocaue',
                'midle_name' => 'registrarbocaue',
                'gender' => 'female',
                'email' => 'registrarbocaue@sample.com',
                'password' => bcrypt('sample'),  
                'campus_id'=>'2',
                'filename'=>'clerk.png',
        ]);
        DB::table('registrars')->insert([
        	 	'eid' => '18-0003',
                'last_name' => 'registrarobando',
                'first_name' => 'registrarobando',
                'midle_name' => 'registrarobando',
                'gender' => 'female',
                'email' => 'registrarobando@sample.com',
                'password' => bcrypt('sample'),  
                'campus_id'=>'3',
                'filename'=>'clerk.png',
        ]);
        DB::table('registrars')->insert([
        	 	'eid' => '18-0004',
                'last_name' => 'registrarangat',
                'first_name' => 'registrarangat',
                'midle_name' => 'registrarangat',
                'gender' => 'female',
                'email' => 'registrarangat@sample.com',
                'password' => bcrypt('sample'),  
                'campus_id'=>'4',
                'filename'=>'clerk.png',
        ]);
        DB::table('registrars')->insert([
        	 	'eid' => '18-0005',
                'last_name' => 'registrarpandi',
                'first_name' => 'registrarpandi',
                'midle_name' => 'registrarpandi',
                'gender' => 'female',
                'email' => 'registrarpandi@sample.com',
                'password' => bcrypt('sample'),  
                'campus_id'=>'5',
                'filename'=>'clerk.png',
        ]);
        DB::table('registrars')->insert([
        	 	'eid' => '18-0006',
                'last_name' => 'registrarsanrafael',
                'first_name' => 'registrarsanrafael',
                'midle_name' => 'registrarsanrafael',
                'gender' => 'female',
                'email' => 'registrarsanrafael@sample.com',
                'password' => bcrypt('sample'),  
                'campus_id'=>'6',
                'filename'=>'clerk.png',
        ]);
        DB::table('registrars')->insert([
        	 	'eid' => '18-0007',
                'last_name' => 'registrarsanjosedelmonte',
                'first_name' => 'registrarsanjosedelmonte',
                'midle_name' => 'registrarsanjosedelmonte',
                'gender' => 'female',
                'email' => 'registrarsanjosedelmonte@sample.com',
                'password' => bcrypt('sample'),  
                'campus_id'=>'7',
                'filename'=>'clerk.png',
        ]);
        DB::table('registrars')->insert([
        	 	'eid' => '18-0008',
                'last_name' => 'registrarsanmiguel',
                'first_name' => 'registrarsanmiguel',
                'midle_name' => 'registrarsanmiguel',
                'gender' => 'female',
                'email' => 'registrarsanmiguel@sample.com',
                'password' => bcrypt('sample'),  
                'campus_id'=>'8',
                'filename'=>'clerk.png',
        ]);                                                        
    }
}
