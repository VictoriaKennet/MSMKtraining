<?php

use Illuminate\Database\Seeder;

class DocPreparation extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doc_preparation')->insert([
            'main' => 'CS Wire Brush',
        ]);
        DB::table('doc_preparation')->insert([
            'main' => 'SS Wire Brush',
        ]);
    }
}
