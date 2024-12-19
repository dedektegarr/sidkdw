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
        Schema::create('wbtb', function (Blueprint $table) {
            $table->id();
            $table->foreignId("domain_id")->nullable()->constrained("domain")->onDelete("cascade")->onUpdate("cascade");
            $table->string("nama_karya");
            $table->string("no_daftar")->nullable();
            $table->string("tahun");
            $table->string("sebaran");
            $table->string("keterangan");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wbtb');
    }
};
