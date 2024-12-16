<?php

namespace Database\Seeders;

use App\Models\Jenis;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_jenis = [
            [
                "nama" => "Bangunan",
                "Keterangan" => null,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "nama" => "Struktur",
                "Keterangan" => null,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "nama" => "Situs",
                "Keterangan" => null,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "nama" => "Kawasan",
                "Keterangan" => null,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "nama" => "Benda",
                "Keterangan" => null,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ]
        ];

        Jenis::insert($data_jenis);
    }
}
