<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CirclesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('circles')->insert([
            'name'     => 'Friend',
            'user_id'     => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('circles')->insert([
            'name'     => 'Family',
            'user_id'     => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('circles')->insert([
            'name'     => 'Business',
            'user_id'     => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
