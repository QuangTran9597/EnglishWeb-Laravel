<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

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
           'name' => 'user1',
            'email' => 'user1@gmail.com',
            'password' => Hash::make('123456'),
            'quyen' => '1'
       ]);
    }
}
