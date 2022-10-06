<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'Yousef Elshrqaw',
            'email' => 'yousef@gmail.com',
            'password' => Hash::make('p@ssw0rd'),
        ]);
    }
}
