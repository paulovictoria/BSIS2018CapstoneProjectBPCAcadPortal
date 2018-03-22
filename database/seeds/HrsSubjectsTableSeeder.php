<?php

use Illuminate\Database\Seeder;

class HrsSubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
DB::table('subjects')->insert(['subj_code'=>'Eng10','subj_description'=>'Communication Skills','subj_units'=>'3','sem'=>' 1st Semester','year'=>'First Year','course_id'=>'3',]);
DB::table('subjects')->insert(['subj_code'=>'Math11','subj_description'=>'Business Mathematics','subj_units'=>'3','sem'=>' 1st Semester','year'=>'First Year','course_id'=>'3',]);
DB::table('subjects')->insert(['subj_code'=>'Mktg11','subj_description'=>'Introduction to marketing','subj_units'=>'3','sem'=>' 1st Semester','year'=>'First Year','course_id'=>'3',]);
DB::table('subjects')->insert(['subj_code'=>'PD11','subj_description'=>'Personality Development & Public Relations','subj_units'=>'3','sem'=>' 1st Semester','year'=>'First Year','course_id'=>'3',]);
DB::table('subjects')->insert(['subj_code'=>'HRFB11','subj_description'=>'Food & Beverage Services 1','subj_units'=>'5','sem'=>' 1st Semester','year'=>'First Year','course_id'=>'3',]);
DB::table('subjects')->insert(['subj_code'=>'HRC11','subj_description'=>'Cold & Hot Kitchen Cooking 1','subj_units'=>'4','sem'=>' 1st Semester','year'=>'First Year','course_id'=>'3',]);
DB::table('subjects')->insert(['subj_code'=>'HRC13','subj_description'=>'Food Safety & Sanitation','subj_units'=>'3','sem'=>' 1st Semester','year'=>'First Year','course_id'=>'3',]);
DB::table('subjects')->insert(['subj_code'=>'NSTP1','subj_description'=>'National Service Training Program 1','subj_units'=>'3','sem'=>' 1st Semester','year'=>'First Year','course_id'=>'3',]);
DB::table('subjects')->insert(['subj_code'=>'PE11','subj_description'=>'Physical Fitness with Arnis','subj_units'=>'2','sem'=>' 1st Semester','year'=>'First Year','course_id'=>'3',]);
DB::table('subjects')->insert(['subj_code'=>'Eng13','subj_description'=>'Speech and Oral Communication','subj_units'=>'3','sem'=>' 2nd Semester','year'=>'First Year','course_id'=>'3',]);
DB::table('subjects')->insert(['subj_code'=>'MGT11','subj_description'=>'Principles of Business Organization & Management','subj_units'=>'3','sem'=>' 2nd Semester','year'=>'First Year','course_id'=>'3',]);
DB::table('subjects')->insert(['subj_code'=>'HRFB12','subj_description'=>'Food & Beverage Services 2','subj_units'=>'4','sem'=>' 2nd Semester','year'=>'First Year','course_id'=>'3',]);
DB::table('subjects')->insert(['subj_code'=>'HRC12','subj_description'=>'Basic Baking','subj_units'=>'5','sem'=>' 2nd Semester','year'=>'First Year','course_id'=>'3',]);
DB::table('subjects')->insert(['subj_code'=>'HRC14','subj_description'=>'Advance Cold & Hot Kitchen Cooking','subj_units'=>'5','sem'=>' 2nd Semester','year'=>'First Year','course_id'=>'3',]);
DB::table('subjects')->insert(['subj_code'=>'NSTP2','subj_description'=>'National Service Training Program 2','subj_units'=>'3','sem'=>' 2nd Semester','year'=>'First Year','course_id'=>'3',]);
DB::table('subjects')->insert(['subj_code'=>'PE12','subj_description'=>'Outdoor Recreation','subj_units'=>'2','sem'=>' 2nd Semester','year'=>'First Year','course_id'=>'3',]);
DB::table('subjects')->insert(['subj_code'=>'HR11','subj_description'=>'Introduction to Hospitality Industry','subj_units'=>'3','sem'=>' 1st Semester','year'=>'Second Year','course_id'=>'3',]);
DB::table('subjects')->insert(['subj_code'=>'HRH11','subj_description'=>'Housekeeping Services 1','subj_units'=>'5','sem'=>' 1st Semester','year'=>'Second Year','course_id'=>'3',]);
DB::table('subjects')->insert(['subj_code'=>'HRFO11','subj_description'=>'Fromt Office Services 1','subj_units'=>'3','sem'=>' 1st Semester','year'=>'Second Year','course_id'=>'3',]);
DB::table('subjects')->insert(['subj_code'=>'SOC11','subj_description'=>'General Sociology with Gender and Development','subj_units'=>'3','sem'=>' 1st Semester','year'=>'Second Year','course_id'=>'3',]);
DB::table('subjects')->insert(['subj_code'=>'Acc11','subj_description'=>'Principles of Accounting','subj_units'=>'3','sem'=>' 1st Semester','year'=>'Second Year','course_id'=>'3',]);
DB::table('subjects')->insert(['subj_code'=>'VAL11','subj_description'=>'Values Education and Business Ethics','subj_units'=>'3','sem'=>' 1st Semester','year'=>'Second Year','course_id'=>'3',]);
DB::table('subjects')->insert(['subj_code'=>'FL11','subj_description'=>'Foreign Language','subj_units'=>'3','sem'=>' 1st Semester','year'=>'Second Year','course_id'=>'3',]);
DB::table('subjects')->insert(['subj_code'=>'HRH12','subj_description'=>'Housekeeping Services 2','subj_units'=>'4','sem'=>' 2nd Semester','year'=>'Second Year','course_id'=>'3',]);
DB::table('subjects')->insert(['subj_code'=>'HRFO12','subj_description'=>'Front Office Services 2','subj_units'=>'3','sem'=>' 2nd Semester','year'=>'Second Year','course_id'=>'3',]);
DB::table('subjects')->insert(['subj_code'=>'HROJT11','subj_description'=>'Observation & Participation Practicum','subj_units'=>'4','sem'=>' 2nd Semester','year'=>'Second Year','course_id'=>'3',]);











    }
}
