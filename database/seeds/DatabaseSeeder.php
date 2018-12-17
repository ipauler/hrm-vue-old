<?php
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $this->call(TechnologiesTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(LevelsTableSeeder::class);
        $this->call(DepartmentsTableSeeder::class);
        $this->call(SalariesTableSeeder::class);
        $this->call(SocialsTableSeeder::class);
        $this->call(ContactsTableSeeder::class);
        $this->call(EmployeesTableSeeder::class);
        $this->call(ProfilesTableSeeder::class);
        $this->call(VacationsTableSeeder::class);
        $this->call(ImagesTableSeeder::class);
        $this->call(StagesTableSeeder::class);
        $this->call(StatusesTableSeeder::class);
        $this->call(ProjectsTableSeeder::class);
        $this->call(VacanciesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
