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
        DB::table('product_type')->insert([
            'wps_reference_id' => '1',
            'test' => 'Gr 3.2  Quench and Tempered fine -grain steel with specified minimum yield strength ReH>690N/mm',
            'range' => 'Not Applicable']);

        DB::table('product_type')->insert([
            'wps_reference_id' => '2',
            'test' => 'Gr 1.2 Steels With Specified Minimum Yield Strength 275N/mm < ReH<=360N/mm',
            'range' => 'Not Applicable']);

        DB::table('product_type')->insert([
            'wps_reference_id' => '3',
            'test' => 'Gr 8.1 Austenitic Stainless Steel Ni<=31%, Cr <= 19%',
            'range' => 'Not Applicable']);

        DB::table('product_type')->insert([
            'wps_reference_id' => '4',
            'test' => 'Gr 8.1 Austenitic Stainless Steel Ni<=31%, Cr <= 19%',
            'range' => 'Not Applicable']);
        
        DB::table('product_type')->insert([
            'wps_reference_id' => '5',
            'test' => 'Gr 8.1 Austenitic Stainless Steel Ni<=31%, Cr <= 19%',
            'range' => 'Not Applicable']);

        DB::table('product_type')->insert([
            'wps_reference_id' => '6',
            'test' => 'Gr 1.2 Steels With Specified Minimum Yield Strength 275N/mm < ReH<=360N/mm',
            'range' => 'Not Applicable']);
    }
}
