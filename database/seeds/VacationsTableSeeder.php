<?php
use Illuminate\Database\Seeder;
use App\Models\Vacation;

class VacationsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $faker = Faker\Factory::create();
        foreach (range(1, 70) as $index) {
            Vacation::create(['employee_id' => $faker->numberBetween(1, 50),
                              'startdate'   => $faker->date('Y-m-d', '2017-04-01'),
                              'enddate'     => $faker->date('Y-m-d', '2017-04-31')]);
        }
    }
}
