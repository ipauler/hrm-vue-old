<?php
use Illuminate\Database\Seeder;

class TechnologiesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $technologies = [['name'        => 'PHP',
                          'description' => 'Programming language PHP',
                          'levels'      => '1,2,3'],
                         ['name'        => 'JAVA',
                          'description' => 'Programming language JAVA',
                          'levels'      => '1,2,3'],
                         ['name'        => 'MySQL',
                          'description' => 'Database language MySQL',
                          'levels'      => '1,2,3'],
                         ['name'        => 'Javascript',
                          'description' => 'Script language JS',
                          'levels'      => '1,2,3'],
                         ['name'        => 'Perl',
                          'description' => 'Console language Perl',
                          'levels'      => '1,2,3']];
        foreach ($technologies as $technology) {
            DB::table('technologies')->insert($technology);
        }
    }
}
