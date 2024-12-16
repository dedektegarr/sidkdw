<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cagar_budaya', function (Blueprint $table) {
            $table->id();
            $table->foreignId("jenis_id")->constrained()->onUpdate("cascade")->onDelete("cascade");
            $table->foreignId("status_id")->constrained("status")->onUpdate("cascade")->onDelete("cascade");
            $table->string("nama_objek");
            $table->string("sk_penetapan")->nullable();
            $table->string("desa_kelurahan");
            $table->string("kecamatan");
            $table->string("kabupaten_kota");
            $table->string("provinsi");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cagar_budaya');
    }
};
