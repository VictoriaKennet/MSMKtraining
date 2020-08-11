<?php

use Illuminate\Database\Seeder;

class FillerMaterialDesignation extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('filler_material_designation')->insert([
            'wps_reference_id' => 1,
            'process_number' => 1,
            'process_id' => 5
        ]);

        DB::table('filler_material_designation')->insert([
            'wps_reference_id' => 1,
            'process_number' => 2,
            'process_id' => 13
        ]);

        DB::table('filler_material_designation')->insert([
            'wps_reference_id' => 2,
            'process_number' => 1,
            'process_id' => 12
        ]);

        DB::table('filler_material_designation')->insert([
            'wps_reference_id' => 2,
            'process_number' => 2,
            'process_id' => 13
        ]);


        DB::table('filler_material_designation')->insert([
            'wps_reference_id' => 3,
            'process_number' => 1,
            'process_id' => 4
        ]);

        DB::table('filler_material_designation')->insert([
            'wps_reference_id' => 3,
            'process_number' => 2,
            'process_id' => 13
        ]);

        DB::table('filler_material_designation')->insert([
            'wps_reference_id' => 4,
            'process_number' => 1,
            'process_id' => 2
        ]);

        DB::table('filler_material_designation')->insert([
            'wps_reference_id' => 4,
            'process_number' => 2,
            'process_id' => 13
        ]);

        DB::table('filler_material_designation')->insert([
            'wps_reference_id' => 5,
            'process_number' => 1,
            'process_id' => 2
        ]);

        DB::table('filler_material_designation')->insert([
            'wps_reference_id' => 5,
            'process_number' => 2,
            'process_id' => 13
        ]);

        DB::table('filler_material_designation')->insert([
            'wps_reference_id' => 6,
            'process_number' => 1,
            'process_id' => 3
        ]);

        DB::table('filler_material_designation')->insert([
            'wps_reference_id' => 6,
            'process_number' => 2,
            'process_id' => 9
        ]);
    }
}
