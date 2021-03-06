<?php

use Illuminate\Database\Seeder;

class ParentMaterialGroup extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parent_material_group')->insert([
            'test' => 'Gr 3.2  Quench and Tempered fine -grain steel with specified minimum yield strength ReH>690N/mm',
            'range' => 'Not Applicable'
        ]);

        DB::table('parent_material_group')->insert([
            'test' => 'Gr 1.2 Steels With Specified Minimum Yield Strength 275N/mm < ReH<=360N/mm',
            'range' => 'Not Applicable'
        ]);

        DB::table('parent_material_group')->insert([
            'test' => 'Gr 8.1 Austenitic Stainless Steel Ni<=31%, Cr <= 19%',
            'range' => 'Not Applicable'
        ]);

        DB::table('parent_material_group')->insert([
            'test' => 'Gr 8.1 Austenitic Stainless Steel Ni<=31%, Cr <= 19%',
            'range' => 'Not Applicable'
        ]);

        DB::table('parent_material_group')->insert([
            'test' => 'Gr 8.1 Austenitic Stainless Steel Ni<=31%, Cr <= 19%',
            'range' => 'Not Applicable'
        ]);

        DB::table('parent_material_group')->insert([
            'test' => 'Gr 1.2 Steels With Specified Minimum Yield Strength 275N/mm < ReH<=360N/mm',
            'range' => 'Not Applicable'
        ]);
    }
}
