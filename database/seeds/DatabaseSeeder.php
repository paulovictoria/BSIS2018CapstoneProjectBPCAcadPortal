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
        /*$this->call(StudentsTableSeeder::class);*/
     /*   $this->call(ProfessorsTableSeeder::class);*/
        $this->call(RegistrarsTableSeeder::class);

        //SubjectSeesergoesHere
        $this->call(BsisSubjectsTableSeeder::class);
        $this->call(BsomSubjectsTableSeeder::class);
        $this->call(CcmSubjectsTableSeeder::class);
        $this->call(CesSubjectsTableSeeder::class);
        $this->call(CsSubjectsTableSeeder::class);
        $this->call(DtsSubjectsTableSeeder::class);
        $this->call(HrsSubjectsTableSeeder::class);
    }
}
