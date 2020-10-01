<?php

use Illuminate\Database\Seeder;

class Doc2ParentMlt extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doc2_parent_mlt')->insert([
            'main' => 'S355J2+N',
            'add' => 'PD CEN ISO/TR 15608:2017 Gr 1.2 and Combination between subgroups:  1.1, 1.2, 1.4'
        ]);
        DB::table('doc2_parent_mlt')->insert([
            'main' => 'S355J2',
            'add' => 'PD CEN ISO/TR 15608:2017 Gr 1.2 and Combination between subgroups:  1.1, 1.2, 1.4'
        ]);
        DB::table('doc2_parent_mlt')->insert([
            'main' => 'S275JR+AR',
            'add' => 'PD CEN ISO/TR 15608:2017 Gr 1.1'
        ]);
        DB::table('doc2_parent_mlt')->insert([
            'main' => 'STRENX 700',
            'add' => 'PD CEN ISO/TR 15608:2017 Sub-Group 2.2 and Combinations of equal or lower minimum yield strength steels Gr 1, 2'
        ]);
        DB::table('doc2_parent_mlt')->insert([
            'main' => '690QL',
            'add' => 'PD CEN ISO/TR 15608:2017 Sub-Group 3.1 and Combinations of equal or lower minimum yield strength steels Gr 1, 2and 3'
        ]);
        DB::table('doc2_parent_mlt')->insert([
            'main' => '1.4301 ( 304) Gr 8.1',
            'add' => 'PD CEN ISO/TR 15608:2017 Group 8, Subgroup 8.1'
        ]);
        DB::table('doc2_parent_mlt')->insert([
            'main' => '1.4301 ( 304) Gr 8.2',
            'add' => 'PD CEN ISO/TR 15608:2017 Group 8, Subgroup 8.1 and 8.2'
        ]);
        DB::table('doc2_parent_mlt')->insert([
            'main' => '1.4307 (304L) Gr 8.1',
            'add' => 'PD CEN ISO/TR 15608:2017 Group 8, Subgroup 8.1'
        ]);
        DB::table('doc2_parent_mlt')->insert([
            'main' => '1.4307 (304L) Gr 8.2',
            'add' => 'PD CEN ISO/TR 15608:2017 Group 8, Subgroup 8.1 and 8.2'
        ]);
        DB::table('doc2_parent_mlt')->insert([
            'main' => '1.4401 (316) Gr 8.1',
            'add' => 'PD CEN ISO/TR 15608:2017 Group 8, Subgroup 8.1'
        ]);
        DB::table('doc2_parent_mlt')->insert([
            'main' => '1.4401 (316) Gr 8.2',
            'add' => 'PD CEN ISO/TR 15608:2017 Group 8, Subgroup 8.1 and 8.2'
        ]);
        DB::table('doc2_parent_mlt')->insert([
            'main' => '1.4404 (316L) Gr 8.1',
            'add' => 'PD CEN ISO/TR 15608:2017 Group 8, Subgroup 8.1'
        ]);
        DB::table('doc2_parent_mlt')->insert([
            'main' => '1.4404 (316L) Gr 8.2',
            'add' => 'PD CEN ISO/TR 15608:2017 Group 8, Subgroup 8.1 and 8.2'
        ]);

    }
}
