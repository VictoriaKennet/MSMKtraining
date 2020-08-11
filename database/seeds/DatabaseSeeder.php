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
            Reference::class,
            WeldingProcesses::class,
            TransferMode::class,
            ProductType::class,
            TypeWeld::class,
            ParentMaterialGroup::class,
            FillerMaterialGroup::class,
            FillerMaterialDesignation::class,
            Process::class
            
            // ShieldingGas::class,
            // TypePolarity::class,
            // WeldingDetails::class,
            // WeldingPosition::class,
        ]);
    }
}
