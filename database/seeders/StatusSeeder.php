<?php

namespace Database\Seeders;

use App\Models\Status;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_status = [
            [
                "nama" => "CB",
                "Keterangan" => "Cagar Budaya",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "nama" => "ODCB",
                "Keterangan" => "Objek diduga Cagar Budaya",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
        ];

        Status::insert($data_status);
    }
}
