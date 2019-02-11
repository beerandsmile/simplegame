<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'beer',
            'email' => 'beer@buhojmedved.ru',
            'password' => Hash::make('password'),
            'events' => json_encode(['personal' => [Hash::make('beer@buhojmedved.ru')]]),
        ]);

        DB::table('users')->insert([
            'name' => 'smile',
            'email' => 'smile@buhojmedved.ru',
            'password' => Hash::make('password'),
            'events' => json_encode(['personal' => [Hash::make('smile@buhojmedved.ru')]]),
        ]);
    }
}
