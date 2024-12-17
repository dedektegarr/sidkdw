<?php

namespace Database\Seeders;

use App\Models\Domain;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DomainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_domain = [
            [
                "nama" => "Kemahiran Dan Kerajinan Tradisional",
                "Keterangan" => null,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "nama" => "Adat Istiadat Masyarakat, Ritus, Dan Perayaan-Perayaan",
                "Keterangan" => null,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "nama" => "Seni Pertunjukan",
                "Keterangan" => null,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "nama" => "Tradisi Dan Ekspresi Lisan",
                "Keterangan" => null,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "nama" => "Pengetahuan Dan Kebiasaan Perilaku Mengenai Alam Dan Semesta",
                "Keterangan" => null,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
        ];

        Domain::insert($data_domain);
    }
}
