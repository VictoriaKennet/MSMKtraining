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
            'test' => 'Single Run Fillet Weld (FW)',
            'range' => 'Fillet Weld (FW)']);

        DB::table('type_weld')->insert([
            'test' => 'Multi Run Fillet Weld (FW)',
            'range' => 'Fillet Weld (FW)']);

        DB::table('type_weld')->insert([
            'test' => 'Multi Run Fillet Weld (FW)',
            'range' => 'Fillet Weld (FW)']);

        DB::table('type_weld')->insert([
            'test' => 'Single Run Fillet Weld (FW)',
            'range' => 'Fillet Weld (FW)']);

        DB::table('type_weld')->insert([
            'test' => 'Butt Weld In Pipe (BW) ',
            'range' => 'Butt Weld (BW) , including branch ≥ 60°']);

        DB::table('type_weld')->insert([
            'test' => 'Butt Weld In Pipe (BW)',
            'range' => 'Butt Weld (BW) , including branch ≥ 60°']);
    }
}
