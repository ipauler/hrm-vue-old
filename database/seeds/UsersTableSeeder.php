<?php
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run () {
        DB::table('users')->insert(['name'           => 'admin',
                                    'email'          => 'admin@admin.com',
                                    'password'       => bcrypt('123456'),
                                    'remember_token' => str_random(100)]);
        //$faker = Faker\Factory::create();
        //foreach ( range( 1, 10 ) as $index ) {
        //    User::create( [ 'name'           => $faker->firstName,
        //                    'email'          => $faker->unique()->safeEmail,
        //                    'password'       => bcrypt( 'secret' ),
        //                    'remember_token' => str_random( 100 ) ] );
        //}
    }
}
