<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;


class UserBaruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'username'=>'admin',
            'name'=>'administratorbaru',
            'email'=>'adminbaru@gmail.com',
            'password'=>Hash::make('password'),
           ]);
    }
}
