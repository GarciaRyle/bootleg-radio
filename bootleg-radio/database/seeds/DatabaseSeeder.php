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
        'band_name' => str_random(10),
        'date_created' => Carbon::now(),
        'date_updated' => Carbon::now(),
        'status' => '1',
        'band_image' => str_random(20),
        'band_details' => str_random(30)
      ]);

      DB::table('members')->insert([
        'member_name' => str_random(10),
        'band_id' => rand(1, 100),
        'date_created' => Carbon::now(),
        'date_updated' => Carbon::now(),
        'status' => rand(0,1)
      ]);

      DB::table('gigs')->insert([
        'gig_detail_id' => rand(1,300),
        'band_id' => rand(1, 100),
        'date_and_time' => date("Y-m-d H:i:s" ,mt_rand(1262055681,1262592391)),
        'date_created' => Carbon::now(),
        'date_updated' => Carbon::now(),
      ]);

      DB::table('gigs_details')->insert([
        'gig_name' => str_random(10),
        'gig_type' => str_random(10),
        'venue' => str_random(20),
        'gig_info' => str_random(20),
        'date_and_time' => date("Y-m-d H:i:s" ,mt_rand(1262055681,1262592391)),
        'date_created' => Carbon::now(),
        'date_updated' => Carbon::now(),
        'gig_sponsors' => str_random(10)
      ]);

      DB::table('records')->insert([
        'record_name' => rand(1,300),
        'band_id' => rand(1, 100),
        'date_created' => Carbon::now(),
        'date_updated' => Carbon::now(),
        'record_type' => str_random(5),
        'record_image' => str_random(20)
      ]);

      DB::table('songs')->insert([
        'song_name' => str_random(10),
        'record_id' => rand(1,100),
        'lyrics' => str_random(100),
        'date_created' => Carbon::now(),
        'upload' => date("Y-m-d H:i:s" ,mt_rand(1252055681,1252592391)),
      ]);

        // $this->call(UsersTableSeeder::class);
    }
}
