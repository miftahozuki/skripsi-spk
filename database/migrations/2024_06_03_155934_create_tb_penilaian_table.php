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
        Schema::create('tb_penilaian', function (Blueprint $table) {
            $table->id('id_penilaian');
            $table->unsignedBigInteger('kriteria_id');
            $table->unsignedBigInteger('karyawan_id');
            $table->foreign('kriteria_id')->references('id_kriteria')->on('tb_kriteria')->onDelete('cascade');
            $table->foreign('karyawan_id')->references('id_karyawan')->on('tb_karyawan')->onDelete('cascade');
            $table->float('nilai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_penilaian');
    }
};
