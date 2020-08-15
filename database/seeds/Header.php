<?php

use Illuminate\Database\Seeder;

class Header extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('header')->insert([
            'wps_reference_id' => 1,
            'test' => 'Not Applicable',
            'range' => 'Not Applicable'
        ]);
        DB::table('header')->insert([
            'wps_reference_id' => 2,
            'test' => '111  P  FW  FM1  B',
            'range' => 'ss      nb      ml'
        ]);
        DB::table('header')->insert([
            'wps_reference_id' => 3,
            'test' => '111  P  FW  FM5  R',
            'range' => 'ss      nb      ml'
        ]);
        DB::table('header')->insert([
            'wps_reference_id' => 4,
            'test' => 'Not Applicable',
            'range' => 'Not Applicable'
        ]);
        DB::table('header')->insert([
            'wps_reference_id' => 5,
            'test' => '141  T  BW   FM1',
            'range' => 'ss      nb      ml'
        ]);
        DB::table('header')->insert([
            'wps_reference_id' => 6,
            'test' => '135/136  T  BW  FM1',
            'range' => 'FM1, FM2'
        ]);
        
    }
}
