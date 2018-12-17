<?php
use Illuminate\Database\Seeder;
use App\Models\Social;

class SocialsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $faker = Faker\Factory::create();
        foreach (range(1, 50) as $index) {
            $username = $faker->userName;
            Social::create(['profile_id' => $index,
                            'github'     => "https://github.com/{$username}",
                            'facebook'   => "https://facebook.com/{$username}",
                            'linkedin'   => "https://linked.in/{$username}",
                            'dou'        => "https://dou.ua/users/{$username}"]);
        }
    }
}
