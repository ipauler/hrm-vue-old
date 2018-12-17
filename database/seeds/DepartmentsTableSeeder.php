<?php
use Illuminate\Database\Seeder;
use App\Models\Department;

class DepartmentsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $faker = Faker\Factory::create();
        foreach (range(1, 10) as $index) {
            Department::create(['name'        => $faker->company,
                                'description' => $faker->text(199),
                                'headed_by_id'   => $faker->numberBetween(1, 50)]);
        }
    }
}
