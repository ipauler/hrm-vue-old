<?php
use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $faker = Faker\Factory::create();
        foreach (range(1, 50) as $index) {
            Contact::create(['profile_id' => $index,
                             'email'      => $faker->safeEmail,
                             'phone'      => $faker->phoneNumber,
                             'skype'      => $faker->userName]);
        }
    }
}
