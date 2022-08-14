<?php

namespace Database\Seeders;

use App\Models\Marketplace;
use Illuminate\Database\Seeder;

class MarketplaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nama = [
            'Tokopedia',
            'Shopee',
        ];
        foreach ($nama as $key => $value) {
            $user = Marketplace::create([
                'nama' => $value,
            ]);
            $user->save();
        }
    }
}
