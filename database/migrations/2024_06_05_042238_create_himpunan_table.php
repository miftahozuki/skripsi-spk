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
        Schema::create('tb_himpunan', function (Blueprint $table) {
            $table->id('id_himpunan');
            $table->string('nama_himpunan');
            $table->unsignedBigInteger('kriteria_id');
            $table->foreign('kriteria_id')->references('id_kriteria')->on('tb_kriteria')->onDelete('cascade');
            $table->string('jenis_kurva');
            $table->integer('nilai_a');
            $table->integer('nilai_b');
            $table->integer('nilai_c');
            $table->integer('nilai_d');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_himpunan');
    }
};
