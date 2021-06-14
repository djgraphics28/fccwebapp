<?php

use Illuminate\Database\Seeder;

class AllSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            // BarangaySeeder::classs
            CivilStatusSeeder::class,
            PhilippineBarangaysTableSeeder::class,
            PhilippineCitiesTableSeeder::class,
            PhilippineProvincesTableSeeder::class,
            PhilippineRegionsTableSeeder::class
        ]);
    }
}
