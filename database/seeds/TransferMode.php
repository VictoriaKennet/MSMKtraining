<?php

use Illuminate\Database\Seeder;

class TransferMode extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transfer_mode')->insert([
            'test' => 'Cold Transfer',
            'range' => 'Cold Transfer / Autogenous'
        ]);
        DB::table('transfer_mode')->insert([
            'test' => 'Globular Transfer',
            'range' => 'Globular and Spray'
        ]);
        DB::table('transfer_mode')->insert([
            'test' => 'Spray Transfer',
            'range' => 'Spray Transfer Only'
        ]);
        DB::table('transfer_mode')->insert([
            'test' => 'Pulse Dip Transfer',
            'range' => 'Dip and Spray'
        ]);
        DB::table('transfer_mode')->insert([
            'test' => 'Pulse Spray Transfer',
            'range' => 'Spray Transfer Only'
        ]);
        DB::table('transfer_mode')->insert([
            'test' => 'Leading Arc/Dipped',
            'range' => 'Leading Arc/Dipped'
        ]);
        DB::table('transfer_mode')->insert([
            'test' => 'DIp Transfer / Spray Transfer',
            'range' => 'Dip and Spray'
        ]);
        DB::table('transfer_mode')->insert([
            'test' => 'Not Applicable',
            'range' => 'Not Applicable'
        ]);
    }
}
