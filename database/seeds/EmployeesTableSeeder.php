<?php
use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $faker = Faker\Factory::create();
        foreach (range(1, 50) as $index) {
            Employee::create(['status'     => 1,
                              'startdate'  => $faker->dateTimeBetween('-2 years', '-1 year'),
                              'enddate'    => $faker->dateTimeBetween('-1 years', 'now'),
                              'department_id' => $faker->numberBetween(1, 10)]);
        }
    }
}
