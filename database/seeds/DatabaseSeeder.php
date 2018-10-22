<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      DB::table('bands')->insert([
        'bandName' => 'Arctic Monkeys',
        'bandDescription' => 'are an English rock band formed in 2002 in High Green, a suburb of Sheffield. '
        'genre' => 'indie',

      ]);

      DB::table('bands')->insert([
        'bandName' => 'IV of Spades',
        'bandDescription' => 'Filipino rock band formed in 2014.'
        'genre' => 'rock',

      ]);

      DB::table('bands')->insert([
        'bandName' => 'Linkin Park',
        'bandDescription' => ' is an American rock band from Agoura Hills, California.'
        'genre' => 'rock',

      ]);




        // $this->call(UsersTableSeeder::class);
    }
}
