<?php
use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $levels = [['name' => 'new'],
                   ['name' => 'open'],
                   ['name' => 'processing'],
                   ['name' => 'closed'],
                   ['name' => 'expired']];
        foreach ($levels as $level) {
            DB::table('statuses')->insert($level);
        }
    }
}
