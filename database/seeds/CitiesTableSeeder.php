<?php
use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $cities = [['name' => 'Odessa'],
                   ['name' => 'Kiev'],
                   ['name' => 'Kharkov'],
                   ['name' => 'Lviv'],
                   ['name' => 'Nikolayev']];
        foreach ($cities as $city) {
            DB::table('cities')->insert($city);
        }
    }
}
