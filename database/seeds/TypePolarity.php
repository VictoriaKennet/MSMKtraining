<?php

use Illuminate\Database\Seeder;

class TypePolarity extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_polarity')->insert([
            'test' => 'AC',
            'range' => 'AC'
        ]);
        DB::table('type_polarity')->insert([
            'test' => 'DC Electrode Positive',
            'range' => 'Not Applicable'
        ]);
        DB::table('type_polarity')->insert([
            'test' => 'DC Electrode Negative',
            'range' => 'Not Applicable'
        ]);
    }
}
