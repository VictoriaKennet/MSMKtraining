<?php

use Illuminate\Database\Seeder;

class DocPreparationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doc2_preparation')->insert([
            'main' => 'CS Wire Brush',
        ]);
        DB::table('doc2_preparation')->insert([
            'main' => 'SS Wire Brush',
        ]);
    }
}
