<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //------------------------------------------------------------------------------------------


        DB::table('users')->insert([
            'name'     => 'Basit',
            'email'    => 'basitalikhatri98@gmail.com',
            'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'about_me' => 'I love Football.',
            'country' => 'Pakistan',
            'city' => 'Karachi',
            'phone' => '+99-999-9999999',
            'password' => Hash::make('Fyp123Fyp'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

        ]);

        DB::table('notifs')->insert([
            'title'     => 'Welcome to Circle.',
            'content'   => 'You Have Successfully Created your Friends Circle...',
            'read' => '0',
            'user_id'     => '1',
            'sender_id'     => '1',
            'circle_id'     => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        factory(App\Post::class, 5)->create([
            'user_id' =>1,
            'circle_id' =>1,
        ]);


        //------------------------------------------------------------------------------------------

        DB::table('users')->insert([
            'name'     => 'Munir Hassan',
            'email'    => 'k163761@nu.edu.pk',
            'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'about_me' => 'I love Music.',
            'country' => 'Pakistan',
            'city' => 'Karachi',
            'phone' => '+99-999-9999990',
            'password' => Hash::make('Fyp123Fyp'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

        ]);

        DB::table('notifs')->insert([
            'title'     => 'Welcome to Circle.',
            'content'   => 'You Have Successfully Created your Friends Circle...',
            'read' => '0',
            'user_id'     => '2',
            'sender_id'     => '2',
            'circle_id'     => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        factory(App\Post::class, 5)->create([
            'user_id' =>2,
            'circle_id' =>1,
        ]);


        //------------------------------------------------------------------------------------------

        DB::table('users')->insert([
            'name'     => 'Malik Obaid',
            'email'    => 'k163767@nu.edu.pk',
            'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'about_me' => 'I love DevOps.',
            'country' => 'Pakistan',
            'city' => 'Karachi',
            'phone' => '+99-999-9999998',
            'password' => Hash::make('Fyp123Fyp'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

        ]);

        DB::table('notifs')->insert([
            'title'     => 'Welcome to Circle.',
            'content'   => 'You Have Successfully Created your Friends Circle...',
            'read' => '0',
            'user_id'     => '3',
            'sender_id'     => '3',
            'circle_id'     => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        factory(App\Post::class, 5)->create([
            'user_id' =>3,
            'circle_id' =>1,
        ]);


        factory(App\User::class, 50)->create();
    }
}
