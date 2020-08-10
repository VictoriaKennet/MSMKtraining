<?php

use Illuminate\Database\Seeder;

class wps_reference extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wps_reference')->insert(['id' => '1','name' => 'MTL WPQR 156']);
        DB::table('wps_reference')->insert(['id' => '2','name' => 'MSMK 004']);
        DB::table('wps_reference')->insert(['id' => '3','name' => 'MSMK 005']);
        DB::table('wps_reference')->insert(['id' => '4','name' => 'MTL WPQR 189']);
        DB::table('wps_reference')->insert(['id' => '5','name' => 'MSMK 001']);
        DB::table('wps_reference')->insert(['id' => '6','name' => 'MSMK 10']);
    }
}
