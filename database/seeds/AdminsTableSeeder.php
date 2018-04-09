<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
                'name' => 'Admin Malolos',
                'email' => 'adminmalolos@yahoo.com',
                'password' => bcrypt('sample'),  
                'campus_id'=>'1',
        ]);

        DB::table('admins')->insert([
                'name' => 'Admin Malolos',
                'email' => 'michaelcentenovelayo@yahoo.com',
                'password' => bcrypt('sample'),  
                'campus_id'=>'1',
        ]);

              DB::table('admins')->insert([
                'name' => 'Admin Malolos',
                'email' => 'pauladrian12345678@yahoo.com',
                'password' => bcrypt('sample'),  
                'campus_id'=>'1',
        ]);           

        DB::table('admins')->insert([
                'name' => 'Admin Bocaue',
                'email' => 'adminbocaue@yahoo.com',
                'password' => bcrypt('sample'),  
                'campus_id'=>'2',
        ]); 

        DB::table('admins')->insert([
                'name' => 'Admin Obando',
                'email' => 'adminobando@yahoo.com',
                'password' => bcrypt('sample'),  
                'campus_id'=>'3',
        ]);  

       DB::table('admins')->insert([
                'name' => 'Admin Angat',
                'email' => 'adminangat@yahoo.com',
                'password' => bcrypt('sample'),  
                'campus_id'=>'4',
        ]);  

       DB::table('admins')->insert([
                'name' => 'Admin Pandi',
                'email' => 'adminpandi@yahoo.com',
                'password' => bcrypt('sample'),  
                'campus_id'=>'5',
        ]);  

       DB::table('admins')->insert([
                'name' => 'Admin San Rafael',
                'email' => 'adminsanrafael@yahoo.com',
                'password' => bcrypt('sample'),  
                'campus_id'=>'6',
        ]);         

       DB::table('admins')->insert([
                'name' => 'Admin San Jose Delmonte',
                'email' => 'adminsjdm@yahoo.com',
                'password' => bcrypt('sample'),  
                'campus_id'=>'7',
        ]);         
                                       
       DB::table('admins')->insert([
                'name' => 'Admin San Miguel',
                'email' => 'adminsanmiguel@yahoo.com',
                'password' => bcrypt('sample'),  
                'campus_id'=>'8',
        ]);  
    }
}
