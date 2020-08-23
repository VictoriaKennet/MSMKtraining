<?php

use Illuminate\Database\Seeder;

class Reference extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wps_reference')->insert([
            'id' => 1,
            'name' => 'MTL WPQR 156',
            'welding_processes_id' => 1,
            'type_weld_id' => 1,
            'product_type_id' => 1,
            'filler_material_group_id' => 1,
            'parent_material_group_id' => 1,
            'header_id' => 1,
            'process_1_id' => 5,
            'process_2_id' => 13
        ]);
        DB::table('wps_reference')->insert([
            'id' => 2,
            'name' => 'MSMK 004',
            'welding_processes_id' => 2,
            'type_weld_id' => 2,
            'product_type_id' => 2,
            'filler_material_group_id' => 2,
            'parent_material_group_id' => 2,
            'header_id' => 2,
            'process_1_id' => 12,
            'process_2_id' => 13
        ]);
        DB::table('wps_reference')->insert([
            'id' => 3,
            'name' => 'MSMK 005',
            'welding_processes_id' => 3,
            'type_weld_id' => 3,
            'product_type_id' => 3,
            'filler_material_group_id' => 3,
            'parent_material_group_id' => 3,
            'header_id' => 3,
            'process_1_id' => 4,
            'process_2_id' => 13
        ]);
        DB::table('wps_reference')->insert([
            'id' => 4,
            'name' => 'MTL WPQR 189',
            'welding_processes_id' => 4,
            'type_weld_id' => 4,
            'product_type_id' => 4,
            'filler_material_group_id' => 4,
            'parent_material_group_id' => 4,
            'header_id' => 4,
            'process_1_id' => 2,
            'process_2_id' => 13
        ]);
        DB::table('wps_reference')->insert([
            'id' => 5,
            'name' => 'MSMK 001',
            'welding_processes_id' => 5,
            'type_weld_id' => 5,
            'product_type_id' => 5,
            'filler_material_group_id' => 5,
            'parent_material_group_id' => 5,
            'header_id' => 5,
            'process_1_id' => 2,
            'process_2_id' => 13
        ]);
        DB::table('wps_reference')->insert([
            'id' => 6,
            'name' => 'MSMK 10',
            'welding_processes_id' => 6,
            'type_weld_id' => 6,
            'product_type_id' => 6,
            'filler_material_group_id' => 6,
            'parent_material_group_id' => 6,
            'header_id' => 6,
            'process_1_id' => 3,
            'process_2_id' => 9
        ]);
    }
}
