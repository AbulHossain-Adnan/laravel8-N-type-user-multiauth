<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
    'role' => 1,
    'name' => 'admin',
    'email' => 'admin@gmail.com',
    'password' => bcrypt('password'),
]);
         DB::table('users')->insert([
    'role' => 2,
    'name' => 'employee',
    'email' => 'employee@gmail.com',
    'password' => bcrypt('password'),
]);
         DB::table('users')->insert([
    'role' => 3,
    'name' => 'manager',
    'email' => 'manager@gmail.com',
    'password' => bcrypt('password'),
]);
    }
}
