<?php

use Illuminate\Database\Seeder;

class Process extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('process')->insert([
            'id' => 1,
            'test' => 'Lincoln Supra MIG; EN 440 G42 4 M G3Si1',
            'range' => 'Solid Wire (S), Metal Cored Wire (M)']);

        DB::table('process')->insert([
            'id' => 2,
            'test' => 'EN ISO 14343-B: SS316LSi',
            'range' => 'Solid Wire, Rod (S), Metal cored (M)']);

        DB::table('process')->insert([
            'id' => 3,
            'test' => 'LINCOLN SUPRA MIG ULTRA ; EN 440 G46 4 M G4Si1',
            'range' => 'Solid Wire (S), Metal Cored Wire (M)']);

        DB::table('process')->insert([
            'id' => 4,
            'test' => 'EN ISO 14343-B / AWS A5.9/A5.9M ER 316L',
            'range' => 'Solid Wire (S), Metal Cored Wire (M)']);

        DB::table('process')->insert([
            'id' => 5,
            'test' => 'Lincoln LNM MoNiVa; EN 12534 G69 4 M Mn3Ni1CrMo',
            'range' => 'Solid Wire (S), Metal Cored Wire (M)']);

        DB::table('process')->insert([
            'id' => 6,
            'test' => 'Lincoln LNM Ni2.5; EN 440 G46 6 M G2Ni2',
            'range' => 'Solid Wire (S), Metal Cored Wire (M)']);

        DB::table('process')->insert([
            'id' => 7,
            'test' => 'Lincoln Outershield MC 710-H; EN 758 T46 3 M M 2 H5',
            'range' => 'Solid Wire (S), Metal Cored Wire (M)']);

        DB::table('process')->insert([
            'id' => 8,
            'test' => 'LINCOLN MIG 316LSi : ISO 14343-A G 19 12 3 L SI1',
            'range' => 'Solid Wire (S), Metal Cored Wire (M)']);

        DB::table('process')->insert([
            'id' => 9,
            'test' => 'Lincoln Outershield 71E-H; EN 758 T46 3 P M 1 H5',
            'range' => 'Flux Cored Wire ( R,P,V,W,Y,Z )']);

        DB::table('process')->insert([
            'id' => 10,
            'test' => 'Lincoln Outershield 81K2-H; EN 758 T50 6 1.5Ni P M 2 H5',
            'range' => 'Flux Cored Wire ( R,P,V,W,Y,Z )']);

        DB::table('process')->insert([
            'id' => 11,
            'test' => 'Conarc 51 ISO 2560-A:E 42 4 B 12 H5 ( E7016)',
            'range' => 'Coating type: A,RA,RBRC,RR,R B']);

        DB::table('process')->insert([
            'id' => 12,
            'test' => 'Conarc 49 ISO 2560-A:E 46 3 B 32 H5 ( E7018)',
            'range' => 'Coating type: A,RA,RBRC,RR,R B']);

        DB::table('process')->insert([
            'id' => 13,
            'test' => 'Not Applicable',
            'range' => 'Not Applicable']);

        DB::table('process')->insert([
            'id' => 14,
            'test' => 'ESAB OK Autrod 16.95; EN 12072 G18 8 Mn',
            'range' => 'Solid Wire (S), Metal Cored Wire (M)']);

        DB::table('process')->insert([
            'id' => 15,
            'test' => 'Metrode Supercore 20.9.3; EN 17633 T20 10 3 R M 3',
            'range' => 'Flux Cored Wire ( R,P,V,W,Y,Z )']);

        DB::table('process')->insert([
            'id' => 16,
            'test' => 'Lincoln LNM AlMg5; ISO 18273 S Al5356',
            'range' => 'Solid Wire (S)']);

        DB::table('process')->insert([
            'id' => 17,
            'test' => 'SIF Sifalumin 15; ISO 18273 ER4043',
            'range' => 'Solid Wire (S)']);
    }
}
