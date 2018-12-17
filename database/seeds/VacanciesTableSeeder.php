<?php
use Illuminate\Database\Seeder;
use App\Models\Vacancy;

class VacanciesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $faker = Faker\Factory::create();
        foreach (range(1, 10) as $index) {
            Vacancy::create(['name'         => $faker->company,
                             'description'  => $faker->text(255),
                             'status_id'       => $faker->numberBetween(1, 5),
                             'deadline'     => $faker->dateTime,
                             'processed_by' => $faker->numberBetween(1, 50),
                             'comments'     => $faker->text(255)]);
        }
    }
}
