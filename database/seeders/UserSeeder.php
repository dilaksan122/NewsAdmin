<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            "name"=>"Daily World Entertainment News",
            "email"=>"dilaksandegitweb@gmail.com",
            "password"=>bcrypt("password"),
            "is_admin"=>"1",
           


        ]);
    }
}
