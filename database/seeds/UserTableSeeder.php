<?php

use Illuminate\Database\Seeder;

use App\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Hammed',
            'email' => 'grayaahammed@gmail.com',
            'password' => hash::make('pass'),
        ]);

        User::create([
            'name' => 'Farid',
            'email' => 'faridMsaddack@gmail.com',
            'password' => hash::make('pass'),
        ]);
    }
}
