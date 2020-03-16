<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class ConnectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //------------------------------------------------------------------------------------------

        DB::table('connections')->insert([
            'user1_id'     => '1',
            'user2_id'     => '2',
            'circle_id'     => '1',
            'approve'     => '1',
            'conversation_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('conversations')->insert([
            'user1_id'     => '1',
            'user2_id'     => '2',
            'circle_id'     => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('messages')->insert([
            'content'     => 'Welcome to My Friends Circle.',
            'conversation_id' => '1',
            'sender_id'     => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        //------------------------------------------------------------------------------------------


        DB::table('connections')->insert([
            'user1_id'     => '1',
            'user2_id'     => '4',
            'circle_id'     => '1',
            'approve'     => '1',
            'conversation_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('conversations')->insert([
            'user1_id'     => '1',
            'user2_id'     => '4',
            'circle_id'     => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('messages')->insert([
            'content'     => 'Welcome to My Friends Circle.',
            'conversation_id' => '2',
            'sender_id'     => '4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        //------------------------------------------------------------------------------------------

        DB::table('connections')->insert([
            'user1_id'     => '3',
            'user2_id'     => '2',
            'circle_id'     => '1',
            'approve'     => '1',
            'conversation_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('conversations')->insert([
            'user1_id'     => '3',
            'user2_id'     => '2',
            'circle_id'     => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('messages')->insert([
            'content'     => 'Welcome to My Friends Circle.',
            'conversation_id' => '3',
            'sender_id'     => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);




        // DB::table('connections')->insert([
        //     'user1_id'     => '1',
        //     'user2_id'     => '5',
        //     'circle_id'     => '1',
        //     'approve'     => '0',
        //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        // ]);

        // DB::table('connections')->insert([
        //     'user1_id'     => '1',
        //     'user2_id'     => '3',
        //     'circle_id'     => '3',
        //     'approve'     => '1',
        //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        // ]);
    }
}
