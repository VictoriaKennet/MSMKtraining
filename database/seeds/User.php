<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'email' => 'krukvasyl@googlemail.com',
            'password' => Hash::make('Msmkua1980!')
        ]);
    }
}
