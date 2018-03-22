<?php

use Illuminate\Database\Seeder;

class CsSubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
DB::table('subjects')->insert(['subj_code'=>'COM101','subj_description'=>'Introduction to Computer with Windows','subj_units'=>'3','sem'=>' 1st Semester','year'=>'First Year','course_id'=>'4',]);
DB::table('subjects')->insert(['subj_code'=>'KEY101','subj_description'=>'Basic Keyboarding','subj_units'=>'5','sem'=>' 1st Semester','year'=>'First Year','course_id'=>'4',]);
DB::table('subjects')->insert(['subj_code'=>'STENO101','subj_description'=>'Fundamentals of Shorthand','subj_units'=>'5','sem'=>' 1st Semester','year'=>'First Year','course_id'=>'4',]);
DB::table('subjects')->insert(['subj_code'=>'ENG101','subj_description'=>'Grammar and Composition','subj_units'=>'3','sem'=>' 1st Semester','year'=>'First Year','course_id'=>'4',]);
DB::table('subjects')->insert(['subj_code'=>'FIL101','subj_description'=>'Komunikasyon sa Akademikong Filipino','subj_units'=>'3','sem'=>' 1st Semester','year'=>'First Year','course_id'=>'4',]);
DB::table('subjects')->insert(['subj_code'=>'MATH101','subj_description'=>'Business Mathematics','subj_units'=>'3','sem'=>' 1st Semester','year'=>'First Year','course_id'=>'4',]);
DB::table('subjects')->insert(['subj_code'=>'PE101','subj_description'=>'Physical Fitness with Arnis','subj_units'=>'2','sem'=>' 1st Semester','year'=>'First Year','course_id'=>'4',]);
DB::table('subjects')->insert(['subj_code'=>'NSTP101','subj_description'=>'National Service Training Program','subj_units'=>'3','sem'=>' 1st Semester','year'=>'First Year','course_id'=>'4',]);
DB::table('subjects')->insert(['subj_code'=>'COM102','subj_description'=>'Word Processing','subj_units'=>'3','sem'=>' 2nd Semester','year'=>'First Year','course_id'=>'4',]);
DB::table('subjects')->insert(['subj_code'=>'KEY102','subj_description'=>'Computer Keyboarding','subj_units'=>'3','sem'=>' 2nd Semester','year'=>'First Year','course_id'=>'4',]);
DB::table('subjects')->insert(['subj_code'=>'STENO102','subj_description'=>'Advance Stenography','subj_units'=>'4','sem'=>' 2nd Semester','year'=>'First Year','course_id'=>'4',]);
DB::table('subjects')->insert(['subj_code'=>'ENG102','subj_description'=>'Advance Grammar','subj_units'=>'3','sem'=>' 2nd Semester','year'=>'First Year','course_id'=>'4',]);
DB::table('subjects')->insert(['subj_code'=>'FIL102','subj_description'=>'Pagbasa at Pagsulat Tungo sa Pananaliksik','subj_units'=>'3','sem'=>' 2nd Semester','year'=>'First Year','course_id'=>'4',]);
DB::table('subjects')->insert(['subj_code'=>'PD101','subj_description'=>'Personality Development & Public Relation','subj_units'=>'3','sem'=>' 2nd Semester','year'=>'First Year','course_id'=>'4',]);
DB::table('subjects')->insert(['subj_code'=>'RIZ101','subj_description'=>'Rizals Life Works & Writings','subj_units'=>'3','sem'=>' 2nd Semester','year'=>'First Year','course_id'=>'4',]);
DB::table('subjects')->insert(['subj_code'=>'PE102','subj_description'=>'Social Dance','subj_units'=>'2','sem'=>' 2nd Semester','year'=>'First Year','course_id'=>'4',]);
DB::table('subjects')->insert(['subj_code'=>'NSTP102','subj_description'=>'National Service Training Program 2','subj_units'=>'3','sem'=>' 2nd Semester','year'=>'First Year','course_id'=>'4',]);

DB::table('subjects')->insert(['subj_code'=>'COM103','subj_description'=>'Spreadsheets','subj_units'=>'3','sem'=>' 1st Semester','year'=>'Second Year','course_id'=>'4',]);
DB::table('subjects')->insert(['subj_code'=>'COM104','subj_description'=>'Presentation Graphics','subj_units'=>'3','sem'=>' 1st Semester','year'=>'Second Year','course_id'=>'4',]);
DB::table('subjects')->insert(['subj_code'=>'STENO103','subj_description'=>'Takigrapiyang Filipino','subj_units'=>'3','sem'=>' 1st Semester','year'=>'Second Year','course_id'=>'4',]);
DB::table('subjects')->insert(['subj_code'=>'ENG13','subj_description'=>'Business Correspondence & Technical Writing','subj_units'=>'3','sem'=>' 1st Semester','year'=>'Second Year','course_id'=>'4',]);
DB::table('subjects')->insert(['subj_code'=>'ENT101','subj_description'=>'Business and Entrepreneurship','subj_units'=>'3','sem'=>' 1st Semester','year'=>'Second Year','course_id'=>'4',]);
DB::table('subjects')->insert(['subj_code'=>'SOC101','subj_description'=>'General Sociology','subj_units'=>'3','sem'=>' 1st Semester','year'=>'Second Year','course_id'=>'4',]);
DB::table('subjects')->insert(['subj_code'=>'OP101','subj_description'=>'Office Procedure and Administration','subj_units'=>'3','sem'=>' 1st Semester','year'=>'Second Year','course_id'=>'4',]);
DB::table('subjects')->insert(['subj_code'=>'ACCT11','subj_description'=>'Basic Principles of Accounting','subj_units'=>'6','sem'=>' 1st Semester','year'=>'Second Year','course_id'=>'4',]);
DB::table('subjects')->insert(['subj_code'=>'PE13','subj_description'=>'Outdoor Recreation','subj_units'=>'2','sem'=>' 1st Semester','year'=>'Second Year','course_id'=>'4',]);
DB::table('subjects')->insert(['subj_code'=>'COM105','subj_description'=>'Internet and Basic Computer Maintenance','subj_units'=>'3','sem'=>' 2nd Semester','year'=>'Second Year','course_id'=>'4',]);
DB::table('subjects')->insert(['subj_code'=>'ACCT12','subj_description'=>'Accounting for Partnership & Corporation','subj_units'=>'6','sem'=>' 2nd Semester','year'=>'Second Year','course_id'=>'4',]);
DB::table('subjects')->insert(['subj_code'=>'ENG14','subj_description'=>'Speech and Oral Communication','subj_units'=>'3','sem'=>' 2nd Semester','year'=>'Second Year','course_id'=>'4',]);
DB::table('subjects')->insert(['subj_code'=>'OP102','subj_description'=>'Office Practicum','subj_units'=>'3','sem'=>' 2nd Semester','year'=>'Second Year','course_id'=>'4',]);
DB::table('subjects')->insert(['subj_code'=>'MKT11','subj_description'=>'Fundamentals of Marketing','subj_units'=>'3','sem'=>' 2nd Semester','year'=>'Second Year','course_id'=>'4',]);
DB::table('subjects')->insert(['subj_code'=>'PE14','subj_description'=>'Team Sports','subj_units'=>'2','sem'=>' 2nd Semester','year'=>'Second Year','course_id'=>'4',]);






    }
}
