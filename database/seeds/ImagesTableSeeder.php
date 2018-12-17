<?php
use Illuminate\Database\Seeder;
use App\Models\Image;

class ImagesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $faker = Faker\Factory::create();
        foreach (range(1, 50) as $index) {
            Image::create(['profile_id' => $index,
                'image_path' => $faker->image(storage_path('app/public'), 640, 480, null, false)]);
        }
    }
}
