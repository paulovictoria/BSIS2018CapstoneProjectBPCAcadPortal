<?php

use Illuminate\Database\Seeder;

class BsomSubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


		DB::table('subjects')->insert([
		'subj_code'=>'Coml113',
		'subj_description'=>'Introduction to Computer with Windows',
		'subj_units'=>'3',
		'sem'=> '1st Semester',
		'year'=>'First Year',
		'course_id'=>'2',
		]);

		DB::table('subjects')->insert([
		'subj_code'=>'Key115',
		'subj_description'=>'Basic Keyboarding',
		'subj_units'=>'3',
		'sem'=>'1st Semester',
		'year'=>'First Year',
		'course_id'=>'2', ]); 

		DB::table('subjects')->insert([
		'subj_code'=>'Steno115',
		'subj_description'=>'Fundamentals of Shorthand',
		'subj_units'=>'3',
		'sem'=>'1st Semester',
		'year'=>'First Year',
		'course_id'=>'2', ]);

		
		DB::table('subjects')->insert(['subj_code'=>'Eng113','subj_description'=>'Grammar and Composition','subj_units'=>'3','sem'=>'1st Semester','year'=>'First Year','course_id'=>'2',]);

		DB::table('subjects')->insert(['subj_code'=>'Fil113','subj_description'=>'Komunikasyon sa Akademikong Filipino','subj_units'=>'3','sem'=>' 1st  Semester','year'=>'First Year','course_id'=>'2',]);
		DB::table('subjects')->insert(['subj_code'=>'Math113','subj_description'=>'Business Mathematics','subj_units'=>'3','sem'=>'1st Semester','year'=>'First Year','course_id'=>'2',]);
		DB::table('subjects')->insert(['subj_code'=>'PE112','subj_description'=>'Physical Fitness (w/ Arnis)','subj_units'=>'2','sem'=>'1st Semester','year'=>'First Year','course_id'=>'2',]);
		DB::table('subjects')->insert(['subj_code'=>'NSTP113','subj_description'=>'National Service Training Program','subj_units'=>'3','sem'=>'1st Semester','year'=>'First Year','course_id'=>'2',]);
		DB::table('subjects')->insert(['subj_code'=>'ComP123','subj_description'=>'Word Processing & Document Production','subj_units'=>'3','sem'=>'2nd Semester','year'=>'First Year','course_id'=>'2',]);
		DB::table('subjects')->insert(['subj_code'=>'Key123','subj_description'=>'Advance Computer Keyboarding','subj_units'=>'3','sem'=>'2nd Semester','year'=>'First Year','course_id'=>'2',]);
		DB::table('subjects')->insert(['subj_code'=>'Steno124','subj_description'=>'Advance Stenography','subj_units'=>'4','sem'=>'2nd Semester','year'=>'First Year','course_id'=>'2',]);
		DB::table('subjects')->insert(['subj_code'=>'Eng123','subj_description'=>'Advance Grammar','subj_units'=>'3','sem'=>'2nd Semester','year'=>'First Year','course_id'=>'2',]);
		DB::table('subjects')->insert(['subj_code'=>'Fil123','subj_description'=>'Pagbasa at Pagsulat Tungo sa Pananaliksik','subj_units'=>'3','sem'=>'2nd Semester','year'=>'First Year','course_id'=>'2',]);
		DB::table('subjects')->insert(['subj_code'=>'PDPR123','subj_description'=>'Personal Development & Public Relations','subj_units'=>'3','sem'=>'2nd Semester','year'=>'First Year','course_id'=>'2',]);
		DB::table('subjects')->insert(['subj_code'=>'Eng123','subj_description'=>'Advance Grammar','subj_units'=>'3','sem'=>'2nd Semester','year'=>'First Year','course_id'=>'2',]);
		DB::table('subjects')->insert(['subj_code'=>'Riz123','subj_description'=>'Rizals Life Works & Writings','subj_units'=>'3','sem'=>'2nd Semester','year'=>'First Year','course_id'=>'2',]);
		DB::table('subjects')->insert(['subj_code'=>'PE122','subj_description'=>'Team Sports','subj_units'=>'2','sem'=>'2nd Semester','year'=>'First Year','course_id'=>'2',]);
		DB::table('subjects')->insert(['subj_code'=>'NSTP123','subj_description'=>'National Service Training Program 2','subj_units'=>'3','sem'=>'2nd Semester','year'=>'First Year','course_id'=>'2',]);
		DB::table('subjects')->insert(['subj_code'=>'Coms213','subj_description'=>'Spreadsheets','subj_units'=>'3','sem'=>'1st Semester','year'=>'Second Year','course_id'=>'2',]);
		DB::table('subjects')->insert(['subj_code'=>'ComG213','subj_description'=>'Presentation Graphics','subj_units'=>'3','sem'=>'1st Semester','year'=>'Second Year','course_id'=>'2',]);
		DB::table('subjects')->insert(['subj_code'=>'Steno213','subj_description'=>'Takigrapiyang Filipino','subj_units'=>'3','sem'=>'1st Semester','year'=>'Second Year','course_id'=>'2',]);
		DB::table('subjects')->insert(['subj_code'=>'Eng213','subj_description'=>'Business Correspondence & Technical Writing','subj_units'=>'3','sem'=>'1st Semester','year'=>'Second Year','course_id'=>'2',]);
		DB::table('subjects')->insert(['subj_code'=>'Ent213','subj_description'=>'Business and Entrepreneurship','subj_units'=>'3','sem'=>'1st Semester','year'=>'Second Year','course_id'=>'2',]);
		DB::table('subjects')->insert(['subj_code'=>'Soc213','subj_description'=>'General Sociology with Gender and Development','subj_units'=>'3','sem'=>'1st Semester','year'=>'Second Year','course_id'=>'2',]);
		DB::table('subjects')->insert(['subj_code'=>'OP213','subj_description'=>'Office Procedures and Administration','subj_units'=>'3','sem'=>'1st Semester','year'=>'Second Year','course_id'=>'2',]);
		DB::table('subjects')->insert(['subj_code'=>'BAcc213','subj_description'=>'Basic Principle of Accounting','subj_units'=>'3','sem'=>'1st Semester','year'=>'Second Year','course_id'=>'2',]);
		DB::table('subjects')->insert(['subj_code'=>'PE212','subj_description'=>'Social Dance','subj_units'=>'2','sem'=>'1st Semester','year'=>'Second Year','course_id'=>'2',]);
		DB::table('subjects')->insert(['subj_code'=>'ComW223','subj_description'=>'Internet and Basic Web Design','subj_units'=>'3','sem'=>'2nd Semester','year'=>'Second Year','course_id'=>'2',]);
		DB::table('subjects')->insert(['subj_code'=>'ComA223','subj_description'=>'Advance Software including MS Access','subj_units'=>'3','sem'=>'2nd Semester','year'=>'Second Year','course_id'=>'2',]);
		DB::table('subjects')->insert(['subj_code'=>'Eng223','subj_description'=>'Speech and Oral Communication','subj_units'=>'3','sem'=>'2nd Semester','year'=>'Second Year','course_id'=>'2',]);
		DB::table('subjects')->insert(['subj_code'=>'Mkt223','subj_description'=>'Fundamentals of Marketing','subj_units'=>'3','sem'=>'2nd Semester','year'=>'Second Year','course_id'=>'2',]);
		DB::table('subjects')->insert(['subj_code'=>'OP223','subj_description'=>'Office Practicum (General)','subj_units'=>'3','sem'=>'2nd Semester','year'=>'Second Year','course_id'=>'2',]);
		DB::table('subjects')->insert(['subj_code'=>'PE222','subj_description'=>'Outdoor Recreation','subj_units'=>'2','sem'=>'2nd Semester','year'=>'Second Year','course_id'=>'2',]);
		DB::table('subjects')->insert(['subj_code'=>'Fil313','subj_description'=>'Korespondensyang Filipino','subj_units'=>'3','sem'=>'1st Semester','year'=>'Third Year','course_id'=>'2',]);
		DB::table('subjects')->insert(['subj_code'=>'Lit313','subj_description'=>'Philippine Literature','subj_units'=>'3','sem'=>'1st Semester','year'=>'Third Year','course_id'=>'2',]);
		DB::table('subjects')->insert(['subj_code'=>'Math313','subj_description'=>'College Algebra','subj_units'=>'3','sem'=>'1st Semester','year'=>'Third Year','course_id'=>'2',]);
		DB::table('subjects')->insert(['subj_code'=>'Sci313','subj_description'=>'Biological Science with HIV SARS & AIDS Education','subj_units'=>'3','sem'=>'1st Semester','year'=>'Third Year','course_id'=>'2',]);
		DB::table('subjects')->insert(['subj_code'=>'Hum313','subj_description'=>'Introduction to Logic','subj_units'=>'3','sem'=>'1st Semester','year'=>'Third Year','course_id'=>'2',]);
		DB::table('subjects')->insert(['subj_code'=>'Mgt311','subj_description'=>'Principles of Management','subj_units'=>'3','sem'=>'1st Semester','year'=>'Third Year','course_id'=>'2',]);
		DB::table('subjects')->insert(['subj_code'=>'Bfin313','subj_description'=>'Basic Finance','subj_units'=>'3','sem'=>'1st Semester','year'=>'Third Year','course_id'=>'2',]);
		DB::table('subjects')->insert(['subj_code'=>'Law313','subj_description'=>'Business Law and Taxation','subj_units'=>'3','sem'=>'1st Semester','year'=>'Third Year','course_id'=>'2',]);
		DB::table('subjects')->insert(['subj_code'=>'Sci323','subj_description'=>'Environmental Science','subj_units'=>'3','sem'=>'2nd Semester','year'=>'Third Year','course_id'=>'2',]);
		DB::table('subjects')->insert(['subj_code'=>'Hum323','subj_description'=>'Philosophy of Man','subj_units'=>'3','sem'=>'2nd Semester','year'=>'Third Year','course_id'=>'2',]);
		DB::table('subjects')->insert(['subj_code'=>'Hum333','subj_description'=>'Introduction to Humanities Art Appreciation','subj_units'=>'3','sem'=>'2nd Semester','year'=>'Third Year','course_id'=>'2',]);
		DB::table('subjects')->insert(['subj_code'=>'Psy323','subj_description'=>'General Psychology','subj_units'=>'3','sem'=>'2nd Semester','year'=>'Third Year','course_id'=>'2',]);
		DB::table('subjects')->insert(['subj_code'=>'Bres323','subj_description'=>'Basic Research','subj_units'=>'3','sem'=>'2nd Semester','year'=>'Third Year','course_id'=>'2',]);
		DB::table('subjects')->insert(['subj_code'=>'Bcom313','subj_description'=>'Business Communication','subj_units'=>'3','sem'=>'2nd Semester','year'=>'Third Year','course_id'=>'2',]);
		DB::table('subjects')->insert(['subj_code'=>'PPCR323','subj_description'=>'Principles of Public & Customer Relations','subj_units'=>'3','sem'=>'2nd Semester','year'=>'Third Year','course_id'=>'2',]);
		DB::table('subjects')->insert(['subj_code'=>'Emgt323','subj_description'=>'Events Management','subj_units'=>'3','sem'=>'2nd Semester','year'=>'Third Year','course_id'=>'2',]);
		DB::table('subjects')->insert(['subj_code'=>'Hist413','subj_description'=>'Philippine History','subj_units'=>'3','sem'=>'1st Semester','year'=>'Fourth Year','course_id'=>'2',]);
		DB::table('subjects')->insert(['subj_code'=>'Oacc413','subj_description'=>'Applied Office Accounting','subj_units'=>'3','sem'=>'1st Semester','year'=>'Fourth Year','course_id'=>'2',]);
		DB::table('subjects')->insert(['subj_code'=>'HBO413','subj_description'=>'Human Behavior in Organization','subj_units'=>'3','sem'=>'1st Semester','year'=>'Fourth Year','course_id'=>'2',]);
		DB::table('subjects')->insert(['subj_code'=>'BEL413','subj_description'=>'Business Ethics & Leadership','subj_units'=>'3','sem'=>'1st Semester','year'=>'Fourth Year','course_id'=>'2',]);
		DB::table('subjects')->insert(['subj_code'=>'OP413','subj_description'=>'Specialize Office Procedures Medical/Legal','subj_units'=>'3','sem'=>'1st Semester','year'=>'Fourth Year','course_id'=>'2',]);
		DB::table('subjects')->insert(['subj_code'=>'Iad413','subj_description'=>'Basic Information Administrations','subj_units'=>'3','sem'=>'1st Semester','year'=>'Fourth Year','course_id'=>'2',]);
		DB::table('subjects')->insert(['subj_code'=>'Eco413','subj_description'=>'Principles of Economics','subj_units'=>'3','sem'=>'1st Semester','year'=>'Fourth Year','course_id'=>'2',]);
		DB::table('subjects')->insert(['subj_code'=>'Iad423','subj_description'=>'Advance Information Administration','subj_units'=>'3','sem'=>'2nd Semester','year'=>'Fourth Year','course_id'=>'2',]);
		DB::table('subjects')->insert(['subj_code'=>'Macc423','subj_description'=>'Managerial Accounting','subj_units'=>'3','sem'=>'2nd Semester','year'=>'Fourth Year','course_id'=>'2',]);
		DB::table('subjects')->insert(['subj_code'=>'OP423','subj_description'=>'Office Practicum Specialized','subj_units'=>'3','sem'=>'1st Semester','year'=>'Fourth Year','course_id'=>'2',]);


    }
}
