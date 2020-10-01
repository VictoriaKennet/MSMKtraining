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
            'main' => ' ',
            'add' => ' '
        ]);
    }
}
