<?php

use Illuminate\Database\Seeder;

class CesSubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
DB::table('subjects')->insert(['subj_code'=>'EXT113','subj_description'=>'Basic Radio Communication System','subj_units'=>'3','sem'=>' 1st Semester','year'=>'First Year','course_id'=>'5',]);
DB::table('subjects')->insert(['subj_code'=>'EXT116','subj_description'=>'Basic Electricity Electronics & Semiconductors','subj_units'=>'6','sem'=>' 1st Semester','year'=>'First Year','course_id'=>'5',]);
DB::table('subjects')->insert(['subj_code'=>'Comp113','subj_description'=>'Computer Literacy 1','subj_units'=>'3','sem'=>' 1st Semester','year'=>'First Year','course_id'=>'5',]);
DB::table('subjects')->insert(['subj_code'=>'Draw111','subj_description'=>'Drawing 1','subj_units'=>'1','sem'=>' 1st Semester','year'=>'First Year','course_id'=>'5',]);
DB::table('subjects')->insert(['subj_code'=>'Engl113','subj_description'=>'Communication Skills','subj_units'=>'3','sem'=>' 1st Semester','year'=>'First Year','course_id'=>'5',]);
DB::table('subjects')->insert(['subj_code'=>'Math113','subj_description'=>'Industrial Mathematics','subj_units'=>'3','sem'=>' 1st Semester','year'=>'First Year','course_id'=>'5',]);
DB::table('subjects')->insert(['subj_code'=>'Psych113','subj_description'=>'General Psychology','subj_units'=>'3','sem'=>' 1st Semester','year'=>'First Year','course_id'=>'5',]);
DB::table('subjects')->insert(['subj_code'=>'PE112','subj_description'=>'Self Testing Activities','subj_units'=>'2','sem'=>' 1st Semester','year'=>'First Year','course_id'=>'5',]);
DB::table('subjects')->insert(['subj_code'=>'NSTP1','subj_description'=>'National Service Training Program 1','subj_units'=>'3','sem'=>' 1st Semester','year'=>'First Year','course_id'=>'5',]);
DB::table('subjects')->insert(['subj_code'=>'EXT123','subj_description'=>'Advance Semiconductors Electronics','subj_units'=>'3','sem'=>' 2nd Semester','year'=>'First Year','course_id'=>'5',]);
DB::table('subjects')->insert(['subj_code'=>'EXT126','subj_description'=>'AM/FM and TV Receivers and Servicing','subj_units'=>'6','sem'=>' 2nd Semester','year'=>'First Year','course_id'=>'5',]);
DB::table('subjects')->insert(['subj_code'=>'Comp123','subj_description'=>'Computer Literacy II','subj_units'=>'3','sem'=>' 2nd Semester','year'=>'First Year','course_id'=>'5',]);
DB::table('subjects')->insert(['subj_code'=>'Draw121','subj_description'=>'Drawing II','subj_units'=>'1','sem'=>' 2nd Semester','year'=>'First Year','course_id'=>'5',]);
DB::table('subjects')->insert(['subj_code'=>'Engl123','subj_description'=>'Oral Communications','subj_units'=>'3','sem'=>' 2nd Semester','year'=>'First Year','course_id'=>'5',]);
DB::table('subjects')->insert(['subj_code'=>'Math123','subj_description'=>'College Algebra','subj_units'=>'3','sem'=>' 2nd Semester','year'=>'First Year','course_id'=>'5',]);
DB::table('subjects')->insert(['subj_code'=>'RL213','subj_description'=>'Radio Laws and Regulations','subj_units'=>'3','sem'=>' 2nd Semester','year'=>'First Year','course_id'=>'5',]);
DB::table('subjects')->insert(['subj_code'=>'PE122','subj_description'=>'Team Sports','subj_units'=>'2','sem'=>' 2nd Semester','year'=>'First Year','course_id'=>'5',]);
DB::table('subjects')->insert(['subj_code'=>'NSTP2','subj_description'=>'National Service Training Program','subj_units'=>'3','sem'=>' 2nd Semester','year'=>'First Year','course_id'=>'5',]);
DB::table('subjects')->insert(['subj_code'=>'EXT216','subj_description'=>'Amplifiers Oscillators and Audio Stereo','subj_units'=>'6','sem'=>' 1st Semester','year'=>'Second Year','course_id'=>'5',]);
DB::table('subjects')->insert(['subj_code'=>'EXT236','subj_description'=>'Electronics System Trouble Shooting and Maintenance','subj_units'=>'6','sem'=>' 1st Semester','year'=>'Second Year','course_id'=>'5',]);
DB::table('subjects')->insert(['subj_code'=>'EXT213','subj_description'=>'Digital Electronics','subj_units'=>'3','sem'=>' 1st Semester','year'=>'Second Year','course_id'=>'5',]);
DB::table('subjects')->insert(['subj_code'=>'Scie123','subj_description'=>'Physical Science 1','subj_units'=>'3','sem'=>' 1st Semester','year'=>'Second Year','course_id'=>'5',]);
DB::table('subjects')->insert(['subj_code'=>'Mgt123','subj_description'=>'Entrepreneurship and Cooperative','subj_units'=>'3','sem'=>' 1st Semester','year'=>'Second Year','course_id'=>'5',]);
DB::table('subjects')->insert(['subj_code'=>'PVS212','subj_description'=>'Plant Visit and Seminar','subj_units'=>'2','sem'=>' 1st Semester','year'=>'Second Year','course_id'=>'5',]);
DB::table('subjects')->insert(['subj_code'=>'PE212','subj_description'=>'Individual Sports','subj_units'=>'2','sem'=>' 1st Semester','year'=>'Second Year','course_id'=>'5',]);
DB::table('subjects')->insert(['subj_code'=>'EXT2212','subj_description'=>'In Plant Training','subj_units'=>'12','sem'=>' 2nd Semester','year'=>'Second Year','course_id'=>'5',]);








    }
}
