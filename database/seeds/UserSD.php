<?php

use Illuminate\Database\Seeder;

class UserSD extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wps_reference')->insert(['name' => 'MTL WPQR 156']);
    }
}
