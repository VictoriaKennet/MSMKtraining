<?php

use Illuminate\Database\Seeder;

class DocWeldingPost extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doc2_welding_post')->insert([
            'main' => 'PA',
            'add' => 'PA and Positions with Similar Heat Input'
        ]);
        DB::table('doc2_welding_post')->insert([
            'main' => 'PB',
            'add' => 'PA and Positions with Similar Heat Input'
        ]);
        DB::table('doc2_welding_post')->insert([
            'main' => 'PC',
            'add' => 'PA and Positions with Similar Heat Input'
        ]);
        DB::table('doc2_welding_post')->insert([
            'main' => 'PF',
            'add' => 'PA and Positions with Similar Heat Input'
        ]);
        DB::table('doc2_welding_post')->insert([
            'main' => 'PE',
            'add' => 'PA and Positions with Similar Heat Input'
        ]);
        DB::table('doc2_welding_post')->insert([
            'main' => 'PD',
            'add' => 'PA and Positions with Similar Heat Input'
        ]);
        DB::table('doc2_welding_post')->insert([
            'main' => 'HLO45',
            'add' => 'All Positions , except PG and JLO-45'
        ]);
        DB::table('doc2_welding_post')->insert([
            'main' => 'PG',
            'add' => 'PG Position'
        ]);
        DB::table('doc2_welding_post')->insert([
            'main' => 'PF and PC',
            'add' => 'All Positions , except PG'
        ]);
    }
}

