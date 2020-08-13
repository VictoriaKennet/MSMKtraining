<?php

use Illuminate\Database\Seeder;

class WeldingDetails extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('welding_details')->insert([
            'test' => 'No Backing (ss,nb )',
            'range' => 'ss nb,bs'
        ]);
        DB::table('welding_details')->insert([
            'test' => 'Material Backing (ss mb )',
            'range' => 'ss mb,bs'
        ]);
        DB::table('welding_details')->insert([
            'test' => 'Welding From Both Sides (bs )',
            'range' => 'ss mb,bs'
        ]);
        DB::table('welding_details')->insert([
            'test' => 'Gas Backing (ss,gb )',
            'range' => 'ss mb,bs,ss gb'
        ]);
        DB::table('welding_details')->insert([
            'test' => 'Flux Backing (ss,fb )',
            'range' => 'ss mb,bs,ss fb'
        ]);
        DB::table('welding_details')->insert([
            'test' => 'Not Applicable',
            'range' => 'Not Applicable'
        ]);
    }
}
