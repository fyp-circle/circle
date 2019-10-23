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
        DB::table('users')->insert([
            'name'     => 'Basit',
            'email'    => 'basitalikhatri98@gmail.com',
            'password' => Hash::make('Fyp123Fyp'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

        ]);

        factory(App\User::class, 20)->create();
    }
}
