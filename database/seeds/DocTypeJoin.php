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
            'main' => '1',
            'add' => '1'
        ]);
        DB::table('doc2_type_join')->insert([
            'main' => '2',
            'add' => '2'
        ]);
        DB::table('doc2_type_join')->insert([
            'main' => '3',
            'add' => '3'
        ]);
    }
}
