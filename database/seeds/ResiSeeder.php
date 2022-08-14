<?php

namespace Database\Seeders;

use App\Models\Resi;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $noresi = [
            'JP4229093606',
            '322748938655',
            '10002263898624',
            'JP0835492233',
            'IDS002431607130',
            '002789584354',
        ];

        $kurir = [
            'JNT',
            'SiCepat',
            'Anteraja',
            'JNT',
            'ID Express',
            'SiCepat'
        ];

        $marketplace = [
            'Tokopedia',
            'Tokopedia',
            'Shopee',
            'Tokopedia',
            'Shopee',
            'Tokopedia',
        ];
        $isi = [
            'ESC 25A',
            'Buku tulis',
            'Propeller',
            'Camera',
            'Baterai',
            'Parts',
        ];
        $tanggal_input = [
            '2021-09-22 07:20:00',
            '2022-06-29 06:27:28',
            '2021-09-26 11:14:24',
            '2021-09-26 13:46:00',
            '2021-09-27 07:11:17',
            '2022-01-13 15:00:00',
        ];
        $status = [
            1,
            0,
            1,
            1,
            1,
            1,
        ];
        $aktif = [
            0,
            0,
            0,
            1,
            0,
            0,
        ];
        foreach ($noresi as $key => $value) {
            $user = Resi::create([
                'noresi' => $value,
                'kurir' => $kurir[$key],
                'marketplace' => $marketplace[$key],
                'isi' =>  $isi[$key],
                'tanggal_input' => $tanggal_input[$key],
                'tanggal_scan' => Carbon::now(),
                'status' => $status[$key],
                'aktif' => $aktif[$key],
            ]);
            $user->save();
        }
    }
}
