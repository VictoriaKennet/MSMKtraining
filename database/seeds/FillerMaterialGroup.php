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
            'test' => 'FM2 High Strenght Steel',
            'range' => 'FM1, FM2'
        ]);

        DB::table('filler_material_group')->insert([
            'test' => 'FM1 Non-Alloy and Fine Grain Steels',
            'range' => 'FM1, FM2'
        ]);

        DB::table('filler_material_group')->insert([
            'test' => 'FM5 Stainless and Heat-Resisting steels',
            'range' => 'FM5'
        ]);

        DB::table('filler_material_group')->insert([
            'test' => 'FM5 Stainless and Heat-Resisting steels',
            'range' => 'FM5'
        ]);

        DB::table('filler_material_group')->insert([
            'test' => 'FM5 Stainless and Heat-Resisting steels',
            'range' => 'Not Applicable'
        ]);

        DB::table('filler_material_group')->insert([
            'test' => 'FM1 Non-Alloy and Fine Grain Steels',
            'range' => 'FM1, FM2'
        ]);
    }
}
