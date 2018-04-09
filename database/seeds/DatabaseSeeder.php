<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(AdminsTableSeeder::class);
        $this->call(CampusTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
        $this->call(RoomsTableSeeder::class);
        $this->call(DayTableSeeder::class);
  
        $this->call(ProfessorsTableSeeder::class);
        $this->call(RegistrarsTableSeeder::class);

        //SubjectSeesergoesHere
        $this->call(BsisSubjectsTableSeeder::class);
        $this->call(BsomSubjectsTableSeeder::class);
        $this->call(CcmSubjectsTableSeeder::class);
        $this->call(CesSubjectsTableSeeder::class);
        $this->call(CsSubjectsTableSeeder::class);
        $this->call(DtsSubjectsTableSeeder::class);
        $this->call(HrsSubjectsTableSeeder::class);
        //Users
        $this->call(StudentsTableSeeder::class);
        $this->call(StudentsCsTableSeeder::class);
        $this->call(StudentsCesTableSeeder::class);  
        $this->call(StudentsCcmTableSeeder::class); 
        $this->call(StudentsBsomTableSeeder::class);  
        $this->call(StudentsHrsTableSeeder::class);  
        $this->call(StudentsDtsTableSeeder::class); 
        //Other Campuses Seeder
        $this->call(AngatSeeder::class);
        $this->call(BocaueSeeder::class);
        $this->call(ObandoSeeder::class);  
        $this->call(PandiSeeder::class); 
        $this->call(SRSeeder::class);  
        $this->call(SJDMSeeder::class);  
        $this->call(SMSeeder::class);         

        //Socials
        $this->call(SocialsTableSeeder::class);

    }
}
