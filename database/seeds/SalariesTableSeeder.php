<?php
use Illuminate\Database\Seeder;
use App\Models\Salary;

class SalariesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $faker = Faker\Factory::create();
        foreach (range(1, 50) as $index) {
            Salary::create(['employee_id' => $faker->numberBetween(1, 50),
                            'salary'      => $faker->numberBetween(1, 15) * 100,
                            'start_date'  => $faker->dateTimeBetween('-2 years', '-1 year'),
                            'end_date'    => $faker->dateTimeBetween('-1 years', 'now')]);
        }
    }
}
