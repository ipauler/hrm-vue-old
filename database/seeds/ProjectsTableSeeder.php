<?php
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $faker = Faker\Factory::create();
        foreach (range(1, 30) as $index) {
            Project::create(['name'         => $faker->company,
                             'description'  => $faker->text(199),
                             'started_from' => $faker->date('Y-m-d', '2017-03-01'),
                             'deadline'     => $faker->dateTime,
                             'manager_id'      => $faker->numberBetween(1, 50),
                             'department_id'   => $faker->numberBetween(1, 10),
                             'stage_id'        => $faker->numberBetween(1, 5)]);
        }
    }
}
