<?php

use Illuminate\Database\Seeder;

class DocFillerMatDesignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doc2_filler_mat_designation')->insert([
            'main' => 'EN ISO 14341-A-G46 3  C 4Si1',
        ]);
        DB::table('doc2_filler_mat_designation')->insert([
            'main' => 'EN ISO 14341-A-G42 3  C 3Si1',
        ]);
        DB::table('doc2_filler_mat_designation')->insert([
            'main' => 'EN ISO 636: W 42 5 W3Si1',
        ]);
        DB::table('doc2_filler_mat_designation')->insert([
            'main' => 'EN ISO 14343-B / AWS A5.9/A5.9M ER 316L',
        ]);
        DB::table('doc2_filler_mat_designation')->insert([
            'main' => 'EN 12534 G69 4 M Mn3Ni1CrMo',
        ]);
        DB::table('doc2_filler_mat_designation')->insert([
            'main' => 'EN 758 T46 3 M M 2 H5',
        ]);
        DB::table('doc2_filler_mat_designation')->insert([
            'main' => 'ISO 14343-A G 19 12 3 L SI',
        ]);
        DB::table('doc2_filler_mat_designation')->insert([
            'main' => 'EN 758 T46 3 P M 1 H5',
        ]);
        DB::table('doc2_filler_mat_designation')->insert([
            'main' => 'ISO 2560-A:E 42 4 B 12 H5 ( E7016)',
        ]);
        DB::table('doc2_filler_mat_designation')->insert([
            'main' => 'ISO 2560-A:E 46 3 B 32 H5 ( E7018)',
        ]);
        DB::table('doc2_filler_mat_designation')->insert([
            'main' => 'EN 12072 G18 8 Mn',
        ]);
        DB::table('doc2_filler_mat_designation')->insert([
            'main' => 'ISO 18273 S Al5356',
        ]);
        DB::table('doc2_filler_mat_designation')->insert([
            'main' => 'ISO 18273 ER4043',
        ]);
    }
}
