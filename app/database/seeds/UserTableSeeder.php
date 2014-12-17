<?php

use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends seeder
{
    public function run(){
        DB::table('users')->delete();
        User::create(array(
            'name' =>   'Fabi Mesa',
            'username' =>   'enerone',
            'email' =>  'enerone@gmail.com',
            'password' => Hash::make('awesome')
        ));
    }
}