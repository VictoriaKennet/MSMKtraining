<?php

use Illuminate\Database\Seeder;

class FillerMaterialGroup extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('filler_material_group')->insert([
            'wps_reference_id' => 1,
            'test' => 'FM2 High Strenght Steel',
            'range' => 'FM1, FM2'
        ]);

        DB::table('filler_material_group')->insert([
            'wps_reference_id' => 2,
            'test' => 'FM1 Non-Alloy and Fine Grain Steels',
            'range' => 'FM1, FM2'
        ]);

        DB::table('filler_material_group')->insert([
            'wps_reference_id' => 3,
            'test' => 'FM5 Stainless and Heat-Resisting steels',
            'range' => 'FM5'
        ]);

        DB::table('filler_material_group')->insert([
            'wps_reference_id' => 4,
            'test' => 'FM5 Stainless and Heat-Resisting steels',
            'range' => 'FM5'
        ]);

        DB::table('filler_material_group')->insert([
            'wps_reference_id' => 5,
            'test' => 'FM5 Stainless and Heat-Resisting steels',
            'range' => 'Not Applicable'
        ]);

        DB::table('filler_material_group')->insert([
            'wps_reference_id' => 6,
            'test' => 'FM1 Non-Alloy and Fine Grain Steels',
            'range' => 'FM1, FM2'
        ]);

        // DB::table('product_type')->insert([
        //     'wps_reference_id' => '0',
        //     'test' => 'FM3 Creep-Resisting Steels Cr<3.75%',
        //     'range' => 'FM1, FM2, FM3']);

        // DB::table('product_type')->insert([
        //     'wps_reference_id' => '0',
        //     'test' => 'FM4 Creep-resisting steels 3.75≤Cr≤12%',
        //     'range' => 'FM1, FM2, FM3, FM4']);

        // DB::table('product_type')->insert([
        //     'wps_reference_id' => '0',
        //     'test' => 'FM6 Nickel and Nickel Alloys',
        //     'range' => 'FM5, FM6']);

    }
}
