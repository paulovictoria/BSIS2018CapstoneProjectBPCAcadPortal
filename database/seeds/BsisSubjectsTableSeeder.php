<?php

use Illuminate\Database\Seeder;

class BsisSubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
 		DB::table('subjects')->insert([
        	 	'subj_code' => 'IS101',
                'subj_description' => 'Fundamentals of Information Systems',
                'subj_units' => '3',
                'sem' => '1st Semester',
                'year' => 'First Year',
                'course_id' => '1',
        ]);
 		DB::table('subjects')->insert([
        	 	'subj_code' => 'IS102',
                'subj_description' => 'Personal Productivity',
                'subj_units' => '3',
                'sem' => '1st Semester',
                'year' => 'First Year',
                'course_id' => '1',
        ]);
 		DB::table('subjects')->insert([
        	 	'subj_code' => 'Math 101',
                'subj_description' => 'College Algebra',
                'subj_units' => '3',
                'sem' => '1st Semester',
                'year' => 'First Year',
                'course_id' => '1',
        ]);
 		DB::table('subjects')->insert([
        	 	'subj_code' => 'Eng 101',
                'subj_description' => 'Grammar & Composition',
                'subj_units' => '3',
                'sem' => '1st Semester',
                'year' => 'First Year',
                'course_id' => '1',
        ]);
 		DB::table('subjects')->insert([
        	 	'subj_code' => 'Fil 101',
                'subj_description' => 'Komunikasyon sa Adememikong Filipino',
                'subj_units' => '3',
                'sem' => '1st Semester',
                'year' => 'First Year',
                'course_id' => '1',
        ]);
 		DB::table('subjects')->insert([
        	 	'subj_code' => 'Hum 101',
                'subj_description' => 'Introduction to Humanities (Art Appreciation)',
                'subj_units' => '3',
                'sem' => '1st Semester',
                'year' => 'First Year',
                'course_id' => '1',
        ]);
 		DB::table('subjects')->insert([
        	 	'subj_code' => 'TVET 101',
                'subj_description' => 'Occupation Health and Safety Standards',
                'subj_units' => '1.5',
                'sem' => '1st Semester',
                'year' => 'First Year',
                'course_id' => '1',
        ]);
 		DB::table('subjects')->insert([
        	 	'subj_code' => 'TVET 102',
                'subj_description' => 'Professional Development',
                'subj_units' => '1.5',
                'sem' => '1st Semester',
                'year' => 'First Year',
                'course_id' => '1',
        ]);
 		DB::table('subjects')->insert([
        	 	'subj_code' => 'PE 1',
                'subj_description' => 'Physical Fitness with Basic Arnis',
                'subj_units' => '2',
                'sem' => '1st Semester',
                'year' => 'First Year',
                'course_id' => '1',
        ]);
 		DB::table('subjects')->insert([
        	 	'subj_code' => 'NSTP 1',
                'subj_description' => 'National Service Training Program',
                'subj_units' => '3',
                'sem' => '1st Semester',
                'year' => 'First Year',
                'course_id' => '1',
        ]);
 		DB::table('subjects')->insert([
        	 	'subj_code' => 'IS 103',
                'subj_description' => 'Internet Technology and Multimedia Systems',
                'subj_units' => '3',
                'sem' => '2nd Semester',
                'year' => 'First Year',
                'course_id' => '1',
        ]);
 		DB::table('subjects')->insert([
        	 	'subj_code' => 'IS 104',
                'subj_description' => 'Computer Programming',
                'subj_units' => '3',
                'sem' => '2nd Semester',
                'year' => 'First Year',
                'course_id' => '1',
        ]);
 		DB::table('subjects')->insert([
        	 	'subj_code' => 'IS 105',
                'subj_description' => 'Professional Ethics Quality Consciousness and Social Issues in Computing',
                'subj_units' => '3',
                'sem' => '2nd Semester',
                'year' => 'First Year',
                'course_id' => '1',
        ]);

 		DB::table('subjects')->insert([
        	 	'subj_code' => 'IS 106',
                'subj_description' => 'Principles of Management',
                'subj_units' => '3',
                'sem' => '2nd Semester',
                'year' => 'First Year',
                'course_id' => '1',
        ]);
 		DB::table('subjects')->insert([
        	 	'subj_code' => 'Math 102',
                'subj_description' => 'Plane Trigonometry',
                'subj_units' => '3',
                'sem' => '2nd Semester',
                'year' => 'First Year',
                'course_id' => '1',
        ]);
 		DB::table('subjects')->insert([
        	 	'subj_code' => 'Eng 102',
                'subj_description' => 'Advance Grammar',
                'subj_units' => '3',
                'sem' => '2nd Semester',
                'year' => 'First Year',
                'course_id' => '1',
        ]);
  		DB::table('subjects')->insert([
        	 	'subj_code' => 'Fil 102',
                'subj_description' => 'Pagbasa at Pagsulat Tungo sa Pananaliksik',
                'subj_units' => '3',
                'sem' => '2nd Semester',
                'year' => 'First Year',
                'course_id' => '1',
        ]);
 		DB::table('subjects')->insert([
        	 	'subj_code' => 'PE 2',
                'subj_description' => 'Outdoor Recreation',
                'subj_units' => '2',
                'sem' => '2nd Semester',
                'year' => 'First Year',
                'course_id' => '1',
        ]);        
  		DB::table('subjects')->insert([
        	 	'subj_code' => 'NSTP 2',
                'subj_description' => 'National Service Training Program',
                'subj_units' => '3',
                'sem' => '2nd Semester',
                'year' => 'First Year',
                'course_id' => '1',
        ]);               
  		DB::table('subjects')->insert([
        	 	'subj_code' => 'IS 207',
                'subj_description' => 'System Analysis and Design',
                'subj_units' => '3',
                'sem' => '1st Semester',
                'year' => 'Second Year',
                'course_id' => '1',
        ]);
  		DB::table('subjects')->insert([
        	 	'subj_code' => 'IS 208',
                'subj_description' => 'Database Design',
                'subj_units' => '3',
                'sem' => '1st Semester',
                'year' => 'Second Year',
                'course_id' => '1',
        ]);
        DB::table('subjects')->insert([
        	 	'subj_code' => 'IS 209',
                'subj_description' => 'System Infrastructure and Integration',
                'subj_units' => '3',
                'sem' => '1st Semester',
                'year' => 'Second Year',
                'course_id' => '1',
        ]);
        DB::table('subjects')->insert([
        	 	'subj_code' => 'IS 210',
                'subj_description' => 'Business Policy',
                'subj_units' => '3',
                'sem' => '1st Semester',
                'year' => 'Second Year',
                'course_id' => '1',
        ]);
   		DB::table('subjects')->insert([
        	 	'subj_code' => 'IS 211',
                'subj_description' => 'Discrete Structure',
                'subj_units' => '3',
                'sem' => '1st Semester',
                'year' => 'Second Year',
                'course_id' => '1',
        ]); 
  		DB::table('subjects')->insert([
        	 	'subj_code' => 'Eng 203',
                'subj_description' => 'Speech and Oral Communication',
                'subj_units' => '3',
                'sem' => '1st Semester',
                'year' => 'Second Year',
                'course_id' => '1',
        ]);
  		DB::table('subjects')->insert([
        	 	'subj_code' => 'Nsci 201',
                'subj_description' => 'Physics I (Mechanics and Heat)',
                'subj_units' => '3',
                'sem' => '1st Semester',
                'year' => 'Second Year',
                'course_id' => '1',
        ]);
  		DB::table('subjects')->insert([
        	 	'subj_code' => 'PE 3',
                'subj_description' => 'Team Sports',
                'subj_units' => '2',
                'sem' => '1st Semester',
                'year' => 'Second Year',
                'course_id' => '1',
        ]);
  		DB::table('subjects')->insert([
        	 	'subj_code' => 'IS 212',
                'subj_description' => 'Object Oriented Programming',
                'subj_units' => '3',
                'sem' => '2nd Semester',
                'year' => 'Second Year',
                'course_id' => '1',
        ]);
  		DB::table('subjects')->insert([
        	 	'subj_code' => 'IS 213',
                'subj_description' => 'Data Communication and Networking',
                'subj_units' => '3',
                'sem' => '2nd Semester',
                'year' => 'Second Year',
                'course_id' => '1',
        ]);
  		DB::table('subjects')->insert([
        	 	'subj_code' => 'IS 214',
                'subj_description' => 'Principles of Accounting',
                'subj_units' => '3',
                'sem' => '2nd Semester',
                'year' => 'Second Year',
                'course_id' => '1',
        ]);
  		DB::table('subjects')->insert([
        	 	'subj_code' => 'Math 203',
                'subj_description' => 'Probability and Statistics',
                'subj_units' => '3',
                'sem' => '2nd Semester',
                'year' => 'Second Year',
                'course_id' => '1',
        ]);  
  		DB::table('subjects')->insert([
        	 	'subj_code' => 'Nsci 202',
                'subj_description' => 'Physics II (Electricity and Magnetism)',
                'subj_units' => '3',
                'sem' => '2nd Semester',
                'year' => 'Second Year',
                'course_id' => '1',
        ]);  
  		DB::table('subjects')->insert([
        	 	'subj_code' => 'Ssci 201',
                'subj_description' => 'Philippine History and Culture',
                'subj_units' => '3',
                'sem' => '2nd Semester',
                'year' => 'Second Year',
                'course_id' => '1',
        ]);  
  		DB::table('subjects')->insert([
        	 	'subj_code' => 'Ssci 202',
                'subj_description' => 'General Psychology',
                'subj_units' => '3',
                'sem' => '2nd Semester',
                'year' => 'Second Year',
                'course_id' => '1',
        ]);
  		DB::table('subjects')->insert([
        	 	'subj_code' => 'PE 4',
                'subj_description' => 'Social Dance',
                'subj_units' => '2',
                'sem' => '2nd Semester',
                'year' => 'Second Year',
                'course_id' => '1',
        ]);
  		DB::table('subjects')->insert([
        	 	'subj_code' => 'IS 315',
                'subj_description' => 'Project Management and Quality Systems',
                'subj_units' => '3',
                'sem' => '1st Semester',
                'year' => 'Third Year',
                'course_id' => '1',
        ]);
  		DB::table('subjects')->insert([
        	 	'subj_code' => 'IS 316',
                'subj_description' => 'Deployment Maintenance and Services (e-Commerce)',
                'subj_units' => '3',
                'sem' => '1st Semester',
                'year' => 'Third Year',
                'course_id' => '1',
        ]);
  		DB::table('subjects')->insert([
        	 	'subj_code' => 'IS 317',
                'subj_description' => 'Evaluation of System Performance',
                'subj_units' => '3',
                'sem' => '1st Semester',
                'year' => 'Third Year',
                'course_id' => '1',
        ]);
  		DB::table('subjects')->insert([
        	 	'subj_code' => 'ISE 301',
                'subj_description' => 'Image Editing Applications',
                'subj_units' => '3',
                'sem' => '1st Semester',
                'year' => 'Third Year',
                'course_id' => '1',
        ]);  
  		DB::table('subjects')->insert([
        	 	'subj_code' => 'IS 302',
                'subj_description' => 'Web Application',
                'subj_units' => '3',
                'sem' => '1st Semester',
                'year' => 'Third Year',
                'course_id' => '1',
        ]);  
  		DB::table('subjects')->insert([
        	 	'subj_code' => 'Ssci 303',
                'subj_description' => 'General Sociology with Gender & Development',
                'subj_units' => '3',
                'sem' => '1st Semester',
                'year' => 'Third Year',
                'course_id' => '1',
        ]);  
  		DB::table('subjects')->insert([
        	 	'subj_code' => 'Hum 303',
                'subj_description' => 'Philippine Literature',
                'subj_units' => '3',
                'sem' => '1st Semester',
                'year' => 'Third Year',
                'course_id' => '1',
        ]);  
  		DB::table('subjects')->insert([
        	 	'subj_code' => 'IS 318',
                'subj_description' => 'Information System Planning',
                'subj_units' => '3',
                'sem' => '2nd Semester',
                'year' => 'Third Year',
                'course_id' => '1',
        ]);
  		DB::table('subjects')->insert([
        	 	'subj_code' => 'IS 319',
                'subj_description' => 'Management of Technology',
                'subj_units' => '3',
                'sem' => '2nd Semester',
                'year' => 'Third Year',
                'course_id' => '1',
        ]); 
  		DB::table('subjects')->insert([
        	 	'subj_code' => 'ISE 303',
                'subj_description' => 'Human Resource Management',
                'subj_units' => '3',
                'sem' => '2nd Semester',
                'year' => 'Third Year',
                'course_id' => '1',
        ]);
  		DB::table('subjects')->insert([
        	 	'subj_code' => 'ISE 304',
                'subj_description' => 'Web Development',
                'subj_units' => '3',
                'sem' => '2nd Semester',
                'year' => 'Third Year',
                'course_id' => '1',
        ]);
  		DB::table('subjects')->insert([
        	 	'subj_code' => 'FE 301',
                'subj_description' => 'Information & Communication Technology (ICT) Trends',
                'subj_units' => '3',
                'sem' => '2nd Semester',
                'year' => 'Third Year',
                'course_id' => '1',
        ]);
  		DB::table('subjects')->insert([
        	 	'subj_code' => 'Ssci 304',
                'subj_description' => 'Rizals Life, Work and Writing',
                'subj_units' => '3',
                'sem' => '2nd Semester',
                'year' => 'Third Year',
                'course_id' => '1',
         ]);       
  		DB::table('subjects')->insert([
        	 	'subj_code' => 'TVET 403',
                'subj_description' => 'Contact Center',
                'subj_units' => '3',
                'sem' => '2nd Semester',
                'year' => 'Third Year',
                'course_id' => '1',                      
        ]);
  		DB::table('subjects')->insert([
        	 	'subj_code' => 'IS 420b',
                'subj_description' => 'Internship/OJT/Practicum (250 Hours)',
                'subj_units' => '4.5',
                'sem' => '1st Semester',
                'year' => 'Fourth Year',
                'course_id' => '1',
        ]);
  		DB::table('subjects')->insert([
        	 	'subj_code' => 'IS 421',
                'subj_description' => 'Capstone Project 1',
                'subj_units' => '3',
                'sem' => '1st Semester',
                'year' => 'Fourth Year',
                'course_id' => '1',
        ]);
  		DB::table('subjects')->insert([
        	 	'subj_code' => 'IS 422',
                'subj_description' => 'Capstone Project 2',
                'subj_units' => '3',
                'sem' => '2nd Semester',
                'year' => 'Fourth Year',
                'course_id' => '1',
        ]);
  		DB::table('subjects')->insert([
        	 	'subj_code' => 'FE 402',
                'subj_description' => 'Principles of Teaching',
                'subj_units' => '3',
                'sem' => '2nd Semester',
                'year' => 'Fourth Year',
                'course_id' => '1',
        ]);
  		DB::table('subjects')->insert([
        	 	'subj_code' => 'FE 403',
                'subj_description' => 'Partnership and Corporation',
                'subj_units' => '3',
                'sem' => '2nd Semester',
                'year' => 'Fourth Year',
                'course_id' => '1',
        ]);
  		DB::table('subjects')->insert([
        	 	'subj_code' => 'Ssci 405',
                'subj_description' => 'Principles of Economics with Taxation and Land Reform',
                'subj_units' => '3',
                'sem' => '2nd Semester',
                'year' => 'Fourth Year',
                'course_id' => '1',
        ]);
  		DB::table('subjects')->insert([
        	 	'subj_code' => 'HUM 403',
                'subj_description' => 'Philosophy of Man',
                'subj_units' => '3',
                'sem' => '2nd Semester',
                'year' => 'Fourth Year',
                'course_id' => '1',
        ]);
    }
}
