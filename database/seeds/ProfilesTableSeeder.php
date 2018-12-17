<?php
use Illuminate\Database\Seeder;
use App\Models\Profile;

class ProfilesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $faker = Faker\Factory::create();
        foreach (range(1, 50) as $index) {
            Profile::create(['profileable_id'   => $index,
                             'profileable_type' => 'App\Models\Employee',
                             'name'             => $faker->firstNameMale,
                             'surname'          => $faker->lastName,
                             'birthdate'        => $faker->dateTime,
                             'experience'       => $faker->numberBetween(0, 5) . '.' . $faker->numberBetween(1, 12),
                             'city_id'             => $faker->numberBetween(1, 5),
                             'technology_id'       => $faker->numberBetween(1, 5),
                             'level_id'            => $faker->numberBetween(1, 3)]);
        }
    }
}
