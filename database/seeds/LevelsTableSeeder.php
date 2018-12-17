<?php
use Illuminate\Database\Seeder;

class LevelsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $levels = [['name' => 'junior'],
                   ['name' => 'middle'],
                   ['name' => 'senior'],
                   ['name' => 'basic'],
                   ['name' => 'pre-intermediate'],
                   ['name' => 'intermediate'],
                   ['name' => 'upper-intermediate'],
                   ['name' => 'primary'],
                   ['name' => 'advanced'],
                   ['name' => 'fluent'],
                   ['name' => 'native'],
                   ['name' => 'secondary'],
                   ['name' => 'bachelor'],
                   ['name' => 'master']];
        foreach ($levels as $level) {
            DB::table('levels')->insert($level);
        }
    }
}
