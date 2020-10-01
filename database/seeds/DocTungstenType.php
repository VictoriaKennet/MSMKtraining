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
        DB::table('doc_tungsten_type')->insert([
            'main' => 'NOT APPLICABLE',
        ]);
        DB::table('doc_tungsten_type')->insert([
            'main' => 'Thoriated 2%',
        ]);
        DB::table('doc_tungsten_type')->insert([
            'main' => 'Zirconiated 2%',
        ]);
        DB::table('doc_tungsten_type')->insert([
            'main' => 'Lanthanated 2%',
        ]);
    }
}
