<?php

namespace Database\Seeders;

use App\Models\Kurir;
use Illuminate\Database\Seeder;

class KurirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nama = [
            'JNT',
            'SiCepat',
            'Anteraja',
            'ID Express',
        ];
        foreach ($nama as $key => $value) {
            $user = Kurir::create([
                'nama' => $value,
            ]);
            $user->save();
        }
    }
}
