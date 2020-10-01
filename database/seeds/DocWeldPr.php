<?php

use Illuminate\Database\Seeder;

class DocWeldPr extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doc2_weld_pr')->insert([
            'main' => '111 MMA',
            'add' => '111 Manual Metal Arc Welding'
        ]);
        DB::table('doc2_weld_pr')->insert([
            'main' => '135 MAG',
            'add' => '135 MAG Welding With Solid Wire Electrode'
        ]);
        DB::table('doc2_weld_pr')->insert([
            'main' => '136 MAG',
            'add' => '136 MAG Welding With Flux Cored Electrode'
        ]);
        DB::table('doc2_weld_pr')->insert([
            'main' => '138 MAG',
            'add' => '138 MAG Welding With Metal Cored Electrode'
        ]);
        DB::table('doc2_weld_pr')->insert([
            'main' => '141 TIG',
            'add' => '141 TIG Welding With Solid Filler Wire'
        ]);
        DB::table('doc2_weld_pr')->insert([
            'main' => '141/136 TIG and FCAW',
            'add' => '141/136 TIG and FCAW Combined Process'
        ]);
        DB::table('doc2_weld_pr')->insert([
            'main' => '111/136 MMA and FCAW',
            'add' => '111/136 MMA and FCAW Combined Process'
        ]);
        DB::table('doc2_weld_pr')->insert([
            'main' => '135/136 MAG and FCAW',
            'add' => '135/136 MAG and FCAW Combined Process'
        ]);
        DB::table('doc2_weld_pr')->insert([
            'main' => '15 PAW',
            'add' => '15 Plasma Arc Welding '
        ]);
        DB::table('doc2_weld_pr')->insert([
            'main' => '121 SAW',
            'add' => '121 Fully Mechanised Submerged Arc Welding'
        ]);
    }
}
