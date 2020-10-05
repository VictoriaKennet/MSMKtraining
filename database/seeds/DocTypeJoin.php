<?php

use Illuminate\Database\Seeder;

class DocTypeJoin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doc2_type_join')->insert([
            'main' => 'Butt Weld CJP',
            'add' => 'Complete and Partial Penetration Butt Welds with and without backing and Fillet welds'
        ]);
        DB::table('doc2_type_join')->insert([
            'main' => 'Butt Weld PJP',
            'add' => 'Partial Penetration Butt Welds and Fillet welds'
        ]);
        DB::table('doc2_type_join')->insert([
            'main' => 'Fillet Weld',
            'add' => 'Fillet Welds'
        ]);
        DB::table('doc2_type_join')->insert([
            'main' => 'T-Butt PJP',
            'add' => 'Complete and Partial Penetration T-Butt Welds with and without backing and Fillet welds'
        ]);
        DB::table('doc2_type_join')->insert([
            'main' => 'T-Butt CJP',
            'add' => 'Partial Penetration T-Butt Welds  and Fillet welds'
        ]);

    }
}
