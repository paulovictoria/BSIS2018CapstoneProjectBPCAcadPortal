<?php

use Illuminate\Database\Seeder;

class SocialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('announcements')->insert([
        	'title'=>'Your Partner to reach the world is BPC',
        	'description'=>' YOUR PARTNER TO REACH THE WORLD-
			now ACCEPTING INCOMING FRESHMEN, TRANSFEREES AND RETURNEES
			(For School Year 2018-2019)
			',
        	'filename'=>'enroll.jpg',
        	'campus_id'=>1,
        ]);

        DB::table('announcements')->insert([
        	'title'=>'Attention to the following students',
        	'description'=>'Attention to the following students:
			Airra Jane Flores Canda - HRS (Pandi Campus)
			Romarico SG Dela Cruz - HRS (San Miguel Campus)
			Mariell Kyle C. Dela Cruz -HRS (San Miguel Campus)
			John Elbert R. Bareng - HRS (San Miguel Campus)
			Erick Jamille F. Pador - HRS (San Miguel Campus)
			Joshua Natividad - HRS (Malolos Campus)
			Roffer L. Esguerra - HRS (Malolos Campus)
			Kirby Raymundo - HRS (Obando Campus)
			You can claim your requested ID at MIS Office.
			',
        	'filename'=>'studclaim.jpg',
        	'campus_id'=>1,
        ]);

        DB::table('announcements')->insert([
        	'title'=>'BPC is now accepting applicants',
        	'description'=>' BPC is now accepting applicants for teaching position for SY 2018-2019...
			Please email your application and resume to any of the following email address bulpolycol@gmail.com/bulpolycol@yahoo.com/ bpc@bulacan.gov.ph. or visit the Office of the Vice President for Academic Affairs located at Bulacan Polytechnic College Bulihan, City of Malolos, Bulacan

			',
        	'filename'=>'bpcapplicant.jpg',
        	'campus_id'=>1,
        ]);

        DB::table('announcements')->insert([
        	'title'=>'ALCUA Seasons Again',
        	'description'=>' The AlCUA (Athletic Local Colleges and Universities Association will be held on Mabalact city Pampanga please support our passionate and dedicated athletics.))
			',
        	'filename'=>'alcu.jpg',
        	'campus_id'=>1,
        ]);

        //News
        DB::table('news')->insert([
        	'title'=>'TESDA ASSESSMENT CENTER INSPECTION',
        	'description'=>'Congratulations to the BPC Assessment Center Team (BPC ACT)...job well done....successful basta tulung-tulong at sama-sama
			',
        	'filename'=>'tesda.jpg',
        	'campus_id'=>1,
        ]); 

        DB::table('news')->insert([
        	'title'=>'Ginoo at Binibining Malolos 2018',
        	'description'=>'Ginoo at Binibining Malolos 2018...congrats to former Ms. Bpc Malolos Campus 2016 Anna Grace De Guzman for winning the Binibining Malolos 2nd Runner Up
			',
        	'filename'=>'Bb.jpg',
        	'campus_id'=>1,
        ]); 

        DB::table('news')->insert([
        	'title'=>'FACULTY EVALUATION',
        	'description'=>' FACULTY EVALUATION 
			1st Sem, 2017-2018
			Superiors and Students Grade
			Congratulations to all of you!!!

			',
        	'filename'=>'facultyevaluation.jpg',
        	'campus_id'=>1,
        ]); 

        DB::table('news')->insert([
        	'title'=>'Free College Tuition Fee',
        	'description'=>'Ang BPC po ay tutugon sa free college tuition law...
			Sakto dahil mararagdagan na naman ang mga kurso na pwede nyong pagpilian sa darating na pasukan...

			',
        	'filename'=>'freetuition.jpg',
        	'campus_id'=>1,
        ]);  

        //Events

        DB::table('events')->insert([
        	'title'=>'Recollection',
        	'description'=>'Moving on: A spiritual Journey Spiritual Recollection for Graduating Students.
				To all graduating Senior High School and College graduating students, please be on time.
		    To all Grade 12 students, wear your white shirt and do not forget to bring your I.D..
		    To all college students, please wear your department shirts and do not forget to bring your I.D
',
			'date'=>'20 March, 2018',
			'startTime'=>'8:00am',
			'endTime'=>'5:00pm',
			'place'=>'Destination: Provincial Capitol Gymnasium',
        	'filename'=>'recol.jpg',
        	'campus_id'=>1,
        ]); 
            DB::table('events')->insert([
        	'title'=>'Graduation day',
        	'description'=>'Bachelors Degree Graduation day :D BSIS an BSOM',
			'date'=>'05 May, 2018',
			'startTime'=>'1:00pm',
			'endTime'=>'5:00pm',
			'place'=>'Hiyas Convention Malolos Bulacan',
        	'filename'=>'grad.jpg',
        	'campus_id'=>1,
        ]);  
            DB::table('events')->insert([
        	'title'=>'Graduation Ball',
        	'description'=>'Graduation Ball for Bachelors Degree Graduating Students',
			'date'=>'06 April, 2018',
			'startTime'=>'5:00pm',
			'endTime'=>'5:00am',
			'place'=>'BPC covered court',
        	'filename'=>'gradball.jpg',
        	'campus_id'=>1,
        ]);  
            DB::table('events')->insert([
        	'title'=>'Socialization Night',
        	'description'=>'A Night of Pleasure and Happiness with the Non Graduating Students of BPC',
			'date'=>'23 March, 2018',
			'startTime'=>'5:00pm',
			'endTime'=>'10:00pm',
			'place'=>'BPC covered court',
        	'filename'=>'socialization.jpg',
        	'campus_id'=>1,
        ]);              



    }
}
