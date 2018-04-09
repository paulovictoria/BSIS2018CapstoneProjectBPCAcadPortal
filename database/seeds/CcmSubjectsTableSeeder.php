<?php

use Illuminate\Database\Seeder;

class CcmSubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
DB::table('subjects')->insert(['subj_code'=>'ENG111','subj_description'=>'English Proficiency Skills','subj_units'=>'3','sem'=>'1st Semester','year'=>'First Year','course_id'=>'6',]);
DB::table('subjects')->insert(['subj_code'=>'ENG112','subj_description'=>'Speech Improvement','subj_units'=>'3','sem'=>'1st Semester','year'=>'First Year','course_id'=>'6',]);
DB::table('subjects')->insert(['subj_code'=>'SocSci','subj_description'=>'General Psychology','subj_units'=>'3','sem'=>'1st Semester','year'=>'First Year','course_id'=>'6',]);
DB::table('subjects')->insert(['subj_code'=>'MGT111','subj_description'=>'Principles of Management','subj_units'=>'3','sem'=>'1st Semester','year'=>'First Year','course_id'=>'6',]);
DB::table('subjects')->insert(['subj_code'=>'Math111','subj_description'=>'Business Mathematics','subj_units'=>'3','sem'=>'1st Semester','year'=>'First Year','course_id'=>'6',]);
DB::table('subjects')->insert(['subj_code'=>'COM111','subj_description'=>'Introduction to Computer with Windows','subj_units'=>'3','sem'=>'1st Semester','year'=>'First Year','course_id'=>'6',]);
DB::table('subjects')->insert(['subj_code'=>'VAL111','subj_description'=>'Values Education & Business Ethics','subj_units'=>'3','sem'=>'1st Semester','year'=>'First Year','course_id'=>'6',]);
DB::table('subjects')->insert(['subj_code'=>'NSTP1','subj_description'=>'National Service Training Program 1','subj_units'=>'3','sem'=>'1st Semester','year'=>'First Year','course_id'=>'6',]);
DB::table('subjects')->insert(['subj_code'=>'PE1','subj_description'=>'Physical Fitness with Arnis','subj_units'=>'2','sem'=>'1st Semester','year'=>'First Year','course_id'=>'6',]);
DB::table('subjects')->insert(['subj_code'=>'ENG123','subj_description'=>'Advance Grammar','subj_units'=>'3','sem'=>'2nd Semester','year'=>'First Year','course_id'=>'6',]);
DB::table('subjects')->insert(['subj_code'=>'ENG124','subj_description'=>'Business Correspondence & Technical Writing','subj_units'=>'3','sem'=>'2nd Semester','year'=>'First Year','course_id'=>'6',]);
DB::table('subjects')->insert(['subj_code'=>'PHLO211','subj_description'=>'Logic','subj_units'=>'3','sem'=>'2nd Semester','year'=>'First Year','course_id'=>'6',]);
DB::table('subjects')->insert(['subj_code'=>'MSC121','subj_description'=>'Interpersonal Communication','subj_units'=>'3','sem'=>'2nd Semester','year'=>'First Year','course_id'=>'6',]);
DB::table('subjects')->insert(['subj_code'=>'PD121','subj_description'=>'Personality Development & Public Relation','subj_units'=>'3','sem'=>'2nd Semester','year'=>'First Year','course_id'=>'6',]);
DB::table('subjects')->insert(['subj_code'=>'CCM121','subj_description'=>'Oral Communication with Accent Neutralization PLDT','subj_units'=>'3','sem'=>'2nd Semester','year'=>'First Year','course_id'=>'6',]);
DB::table('subjects')->insert(['subj_code'=>'COM122','subj_description'=>'Word Processing & Desktop Publication','subj_units'=>'3','sem'=>'2nd Semester','year'=>'First Year','course_id'=>'6',]);
DB::table('subjects')->insert(['subj_code'=>'NSTP2','subj_description'=>'National Service Training Program','subj_units'=>'3','sem'=>'2nd Semester','year'=>'First Year','course_id'=>'6',]);
DB::table('subjects')->insert(['subj_code'=>'PE2','subj_description'=>'Physical Education 2','subj_units'=>'2','sem'=>'2nd Semester','year'=>'First Year','course_id'=>'6',]);
DB::table('subjects')->insert(['subj_code'=>'CCM212','subj_description'=>'American Accent Training 1 PLDT','subj_units'=>'3','sem'=>'1st Semester','year'=>'Second Year','course_id'=>'6',]);
DB::table('subjects')->insert(['subj_code'=>'MKT211','subj_description'=>'Fundamentals of Marketing','subj_units'=>'3','sem'=>'1st Semester','year'=>'Second Year','course_id'=>'6',]);
DB::table('subjects')->insert(['subj_code'=>'SCI211','subj_description'=>'Earth Science','subj_units'=>'3','sem'=>'1st Semester','year'=>'Second Year','course_id'=>'6',]);
DB::table('subjects')->insert(['subj_code'=>'LIT211','subj_description'=>'Word Literature','subj_units'=>'3','sem'=>'1st Semester','year'=>'Second Year','course_id'=>'6',]);
DB::table('subjects')->insert(['subj_code'=>'ECO211','subj_description'=>'Principles of Economics','subj_units'=>'3','sem'=>'1st Semester','year'=>'Second Year','course_id'=>'6',]);
DB::table('subjects')->insert(['subj_code'=>'SSci214','subj_description'=>'American History','subj_units'=>'3','sem'=>'1st Semester','year'=>'Second Year','course_id'=>'6',]);
DB::table('subjects')->insert(['subj_code'=>'COM213','subj_description'=>'Spreadsheets','subj_units'=>'3','sem'=>'1st Semester','year'=>'Second Year','course_id'=>'6',]);
DB::table('subjects')->insert(['subj_code'=>'CCM224','subj_description'=>'Customer Service Management PLDT','subj_units'=>'3','sem'=>'1st Semester','year'=>'Second Year','course_id'=>'6',]);
DB::table('subjects')->insert(['subj_code'=>'PE4','subj_description'=>'Physical Education 4','subj_units'=>'2','sem'=>'1st Semester','year'=>'Second Year','course_id'=>'6',]);
DB::table('subjects')->insert(['subj_code'=>'OP221','subj_description'=>'Office Practicum PLDT','subj_units'=>'6','sem'=>'2nd Semester','year'=>'Second Year','course_id'=>'6',]);















    }
}
