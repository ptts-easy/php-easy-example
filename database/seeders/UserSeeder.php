<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
            'name' => "user001",
            'email' => "user001@gmail.com",
            'password' => Hash::make("pw001")
        ]);
        DB::table('users')->insert([
            'name' => "user002",
            'email' => "user002@gmail.com",
            'password' => Hash::make("pw002")
        ]);
        DB::table('users')->insert([
            'name' => "user003",
            'email' => "user003@gmail.com",
            'password' => Hash::make("pw003")
        ]);
        //Str::random(10)
    }
}
