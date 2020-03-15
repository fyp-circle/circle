<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ConversationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('conversations')->insert([
            'user1_id'     => '1',
            'user2_id'     => '2',
            'circle_id'     => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('conversations')->insert([
            'user1_id'     => '3',
            'user2_id'     => '2',
            'circle_id'     => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('conversations')->insert([
            'user1_id'     => '3',
            'user2_id'     => '2',
            'circle_id'     => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
