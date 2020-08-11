<?php

use Illuminate\Database\Seeder;

class TypeWeld extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_weld')->insert([
            'wps_reference_id' => 1,
            'test' => 'Single Run Fillet Weld (FW)',
            'range' => 'Fillet Weld (FW)']);

        DB::table('type_weld')->insert([
            'wps_reference_id' => 2,
            'test' => 'Multi Run Fillet Weld (FW)',
            'range' => 'Fillet Weld (FW)']);

        DB::table('type_weld')->insert([
            'wps_reference_id' => 3,
            'test' => 'Multi Run Fillet Weld (FW)',
            'range' => 'Fillet Weld (FW)']);

        DB::table('type_weld')->insert([
            'wps_reference_id' => 4,
            'test' => 'Single Run Fillet Weld (FW)',
            'range' => 'Fillet Weld (FW)']);

        DB::table('type_weld')->insert([
            'wps_reference_id' => 5,
            'test' => 'Butt Weld In Pipe (BW) ',
            'range' => 'Butt Weld (BW) , including branch ≥ 60°']);

        DB::table('type_weld')->insert([
            'wps_reference_id' => 6,
            'test' => 'Butt Weld In Pipe (BW)',
            'range' => 'Butt Weld (BW) , including branch ≥ 60°']);
    }
}
