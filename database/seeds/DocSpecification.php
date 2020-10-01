<?php

use Illuminate\Database\Seeder;

class DocSpecification extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doc_specification')->insert([
            'main' => 'BS EN 10025-2:2019',
        ]);
        DB::table('doc_specification')->insert([
            'main' => 'BS EN 10025-2:2020',
        ]);
        DB::table('doc_specification')->insert([
            'main' => 'BS EN 10025-2:2021',
        ]);
        DB::table('doc_specification')->insert([
            'main' => 'BS EN 10025-4:2019',
        ]);
        DB::table('doc_specification')->insert([
            'main' => 'BS EN 10025-6:2019',
        ]);
        DB::table('doc_specification')->insert([
            'main' => 'BS EN 10088-2:2014',
        ]);
}
