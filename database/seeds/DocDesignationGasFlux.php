<?php

use Illuminate\Database\Seeder;

class DocDesignationGasFlux extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doc2_designation_gas_flux')->insert([
            'main' => 'I1',
            'add' => 'EN ISO 14175 : Class I1'
        ]);
        DB::table('doc2_designation_gas_flux')->insert([
            'main' => 'I2',
            'add' => 'EN ISO 14175: Class I2'
        ]);
        DB::table('doc2_designation_gas_flux')->insert([
            'main' => 'Not Applicable',
            'add' => 'Not Applicable'
        ]);
        DB::table('doc2_designation_gas_flux')->insert([
            'main' => 'M14',
            'add' => 'EN ISO 14175: Class M14'
        ]);
        DB::table('doc2_designation_gas_flux')->insert([
            'main' => 'M26',
            'add' => 'EN ISO 14175: Class M26'
        ]);
        DB::table('doc2_designation_gas_flux')->insert([
            'main' => 'M24',
            'add' => 'EN ISO 14175: Class M24'
        ]);
        DB::table('doc2_designation_gas_flux')->insert([
            'main' => 'I1 /  M24',
            'add' => 'EN ISO 14175 :I1 /  EN ISO 14175: M24'
        ]);
        DB::table('doc2_designation_gas_flux')->insert([
            'main' => 'I1 /  M26',
            'add' => 'EN ISO 14175 :I1 /  EN ISO 14175: M26'
        ]);
        DB::table('doc2_designation_gas_flux')->insert([
            'main' => 'I3',
            'add' => 'EN ISO 14175: Class I3'
        ]);
        DB::table('doc2_designation_gas_flux')->insert([
            'main' => 'M11',
            'add' => 'EN ISO 14175: Class M11'
        ]);
        DB::table('doc2_designation_gas_flux')->insert([
            'main' => 'M12',
            'add' => 'EN ISO 14175: Class M12'
        ]);
        DB::table('doc2_designation_gas_flux')->insert([
            'main' => 'M14',
            'add' => 'EN ISO 14175: Class M14'
        ]);

    }
}
