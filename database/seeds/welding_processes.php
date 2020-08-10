<?php

use Illuminate\Database\Seeder;

class welding_processes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('welding_processes')->insert([
            'wps_reference_id' => '1',
            'test' => '135 MAG Welding With Solid Wire Electrode',
            'range' => '135 MAG Welding / 138 MAG Metal Cored electrode']);

        DB::table('welding_processes')->insert([
            'wps_reference_id' => '2',
            'test' => '111 Manual Metal Arc Welding',
            'range' => '111 Manual Metal Arc Welding']);

        DB::table('welding_processes')->insert([
            'wps_reference_id' => '3',
            'test' => '111 Manual Metal Arc Welding',
            'range' => '111 Manual Metal Arc Welding']);

        DB::table('welding_processes')->insert([
            'wps_reference_id' => '4',
            'test' => '135 MAG Welding With Solid Wire Electrode',
            'range' => '135 MAG Welding / 138 MAG Metal Cored electrode']);
        
        DB::table('welding_processes')->insert([
            'wps_reference_id' => '5',
            'test' => '141 TIG Welding With Solid Filler Wire',
            'range' => '141 Solid rod,142 Autogenous,143 Tubular Wire, 145 With R Gas']);

        DB::table('welding_processes')->insert([
            'wps_reference_id' => '6',
            'test' => '135/136 MAG and FCAW Combined Process',
            'range' => '135,138 MAG / 136 MAG With Flux Cored Electrode']);
    }
}
