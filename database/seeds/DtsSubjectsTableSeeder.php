<?php

use Illuminate\Database\Seeder;

class DtsSubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	DB::table('subjects')->insert(['subj_code'=>'English10','subj_description'=>'Communication Arts','subj_units'=>'3','sem'=>' 1st Semester','year'=>'First Year','course_id'=>'7',]);
	DB::table('subjects')->insert(['subj_code'=>'PE10','subj_description'=>'Physical Fitness','subj_units'=>'2','sem'=>' 1st Semester','year'=>'First Year','course_id'=>'7',]);
	DB::table('subjects')->insert(['subj_code'=>'TechMath11','subj_description'=>'Technical Math','subj_units'=>'3','sem'=>' 1st Semester','year'=>'First Year','course_id'=>'7',]);
	DB::table('subjects')->insert(['subj_code'=>'Tech Drwg11','subj_description'=>'Technical Drawing','subj_units'=>'5','sem'=>' 1st Semester','year'=>'First Year','course_id'=>'7',]);
	DB::table('subjects')->insert(['subj_code'=>'WE11','subj_description'=>'Work Ethics','subj_units'=>'3','sem'=>' 1st Semester','year'=>'First Year','course_id'=>'7',]);
	DB::table('subjects')->insert(['subj_code'=>'Shop11','subj_description'=>'Welding and Fabrication','subj_units'=>'7.5','sem'=>' 1st Semester','year'=>'First Year','course_id'=>'4',]);
	DB::table('subjects')->insert(['subj_code'=>'In Plant','subj_description'=>'Practicum','subj_units'=>'10','sem'=>' 1st Semester','year'=>'First Year','course_id'=>'4',]);

    }
}
