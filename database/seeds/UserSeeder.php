<?php

use Illuminate\Database\Seeder;
use App\User;
// use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            // 'id' => 2,
            'name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'password' => Hash::make(123456),
            // 'remember_token' => Str::random(10)
        ]);
    }
}
