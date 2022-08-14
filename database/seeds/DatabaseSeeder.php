<?php

use Database\Seeders\KurirSeeder;
use Database\Seeders\MarketplaceSeeder;
use Database\Seeders\ResiSeeder;
use Database\Seeders\UserSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
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
            ResiSeeder::class,
            MarketplaceSeeder::class,
            KurirSeeder::class
        ]);
    }
}
