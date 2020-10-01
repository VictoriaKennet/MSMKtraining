<?php

use Illuminate\Database\Seeder;

class DocMetalTransferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doc2_metal_transfer')->insert([
            'main' => 'Dip',
        ]);
        DB::table('doc2_metal_transfer')->insert([
            'main' => 'Globular',
        ]);
        DB::table('doc2_metal_transfer')->insert([
            'main' => 'Spray',
        ]);
        DB::table('doc2_metal_transfer')->insert([
            'main' => 'Pulsed',
        ]);
        DB::table('doc2_metal_transfer')->insert([
            'main' => 'Dip and Spray',
        ]);
    }
}
