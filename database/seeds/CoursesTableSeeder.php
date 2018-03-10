<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
             DB::table('courses')->insert([
             'course_code'=>'1111111',
             'course_name'=>'BSIS',
             'course_description'=>'BS in Information System',
             'degree'=>'1',
            ]);
             DB::table('courses')->insert([
             'course_code'=>'1111112',
             'course_name'=>'BSOM',
             'course_description'=>'BS in Office Management',
             'degree'=>'1',
            ]);
             DB::table('courses')->insert([
             'course_code'=>'1111113',
             'course_name'=>'HRS',
             'course_description'=>'Hotel and Restaurant Services',
             'degree'=>'0',
            ]);
             DB::table('courses')->insert([
             'course_code'=>'1111114',
             'course_name'=>'CS',
             'course_description'=>'Computer Secretarial with competency in Bookkeeping',
             'degree'=>'0',
            ]);
            DB::table('courses')->insert([
             'course_code'=>'1111115',
             'course_name'=>'CES',
             'course_description'=>'Computer Electronics Servicing NC II',
             'degree'=>'0',
            ]);
                                       DB::table('courses')->insert([
             'course_code'=>'1111116',
             'course_name'=>'CCM',
             'course_description'=>'Contact Center Services NC II',
             'degree'=>'0',
            ]);
              DB::table('courses')->insert([
             'course_code'=>'1111117',
             'course_name'=>'DTS',
             'course_description'=>'Welding and Fabrication',
             'degree'=>'0',
            ]);                                      
    }
}
