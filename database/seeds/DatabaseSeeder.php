<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            User::class,
            WeldingProcesses::class,
            TransferMode::class,
            ProductType::class,
            TypeWeld::class,
            Process::class,
            ParentMaterialGroup::class,
            FillerMaterialGroup::class,
            ShieldingGas::class,
            TypePolarity::class,
            WeldingDetails::class,
            WeldingPosition::class,
            Header::class,
            Reference::class
        ]);
    }
}
