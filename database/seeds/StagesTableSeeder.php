<?php
use Illuminate\Database\Seeder;

class StagesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $stages = [['name'        => 'Design',
                    'description' => 'Design of project architecture'],
                   ['name'        => 'Alpha',
                    'description' => 'Beginning of development'],
                   ['name'        => 'Betta',
                    'description' => 'Development of specific modules'],
                   ['name'        => 'Test',
                    'description' => 'Debugging of project'],
                   ['name'        => 'Production',
                    'description' => 'Deploy of ready project']];
        foreach ($stages as $stage) {
            DB::table('stages')->insert($stage);
        }
    }
}
