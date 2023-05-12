<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('users')->insert([
            'name' => 'John Doe',
            'email' => 'john@doe.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123456'),
        ]);
    }
}
