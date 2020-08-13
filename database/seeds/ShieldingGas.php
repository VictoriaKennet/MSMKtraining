<?php

use Illuminate\Database\Seeder;

class ShieldingGas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shielding_gas')->insert([
            'test' => 'High Purity Argon, EN ISO 14175 :I1',
            'range' => 'Similar Gases']);
        DB::table('shielding_gas')->insert([
            'test' => 'Helium, EN ISO 14175 I2',
            'range' => 'Similar Gases']);
        DB::table('shielding_gas')->insert([
            'test' => 'Not Applicable',
            'range' => 'Not Applicable']);
        DB::table('shielding_gas')->insert([
            'test' => 'Migweld 5, EN ISO 14175: M14',
            'range' => 'Similar Gases']);
        DB::table('shielding_gas')->insert([
            'test' => 'Migweld 20, EN ISO 14175: M26',
            'range' => 'Similar Gases']);
        DB::table('shielding_gas')->insert([
            'test' => 'Universal EN ISO 14175: M24',
            'range' => 'Similar Gases']);
        DB::table('shielding_gas')->insert([
            'test' => 'High Purity Argon, EN ISO 14175 :I1 / Universal EN ISO 14175: M24',
            'range' => 'Similar Gases']);
        DB::table('shielding_gas')->insert([
            'test' => 'Heliweld',
            'range' => 'Similar Gases']);
        
    }
}
