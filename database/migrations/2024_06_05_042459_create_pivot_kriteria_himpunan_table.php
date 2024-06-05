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
        Schema::create('tb_kriteria_himpunan', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('kriteria_id');
            $table->foreign('kriteria_id')->references('id_kriteria')->on('tb_kriteria')->onDelete('cascade');
            $table->unsignedBigInteger('himpunan_id');
            $table->foreign('himpunan_id')->references('id_himpunan')->on('tb_himpunan')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_kriteria_himpunan');
    }
};
