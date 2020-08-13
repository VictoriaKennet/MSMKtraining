<?php

use Illuminate\Database\Seeder;

class WeldingPosition extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('welding_position')->insert([
            'test' => 'PA',
            'range' => 'PA'
        ]);
        DB::table('welding_position')->insert([
            'test' => 'PB',
            'range' => 'PA,PB'
        ]);
        DB::table('welding_position')->insert([
            'test' => 'PD',
            'range' => 'PA,PB,PC,PD,PF'
        ]);
        DB::table('welding_position')->insert([
            'test' => 'PF (Butt)',
            'range' => 'PA,PF'
        ]);
        DB::table('welding_position')->insert([
            'test' => 'PF (Fillet)',
            'range' => 'PA,PB,PF'
        ]);
        DB::table('welding_position')->insert([
            'test' => 'PH (Pipe)',
            'range' => 'PA,PE,PF'
        ]);
        DB::table('welding_position')->insert([
            'test' => 'PH (Fillet)',
            'range' => 'All, Except J-LO45'
        ]);
        DB::table('welding_position')->insert([
            'test' => 'PG',
            'range' => 'NA'
        ]);
        DB::table('welding_position')->insert([
            'test' => 'PC (Butt)',
            'range' => 'PA,PC'
        ]);
        DB::table('welding_position')->insert([
            'test' => 'PC (Fillet)',
            'range' => 'PA,PB,PC'
        ]);
        DB::table('welding_position')->insert([
            'test' => 'H-LO45',
            'range' => 'All, Except J-LO45'
        ]);
        DB::table('welding_position')->insert([
            'test' => 'J-LO45',
            'range' => 'All, Except H-LO45'
        ]);
        DB::table('welding_position')->insert([
            'test' => 'PE (Fillet)',
            'range' => 'PA,PB,PC,PD,PE'
        ]);
        DB::table('welding_position')->insert([
            'test' => 'PE (Butt)',
            'range' => 'PA,PC,PE'
        ]);
    }
}
