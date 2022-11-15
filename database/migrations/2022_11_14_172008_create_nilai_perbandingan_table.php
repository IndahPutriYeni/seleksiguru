<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('perbandingan_kriteria');

        Schema::create('nilai_perbandingan', function (Blueprint $table) {
            $table->id();
            $table->json('jumlah_kriteria');
            $table->json('jumlah_eigen');
            $table->json('rata_eigen');
            $table->enum('tipe', ['kepala_sekolah', 'kepala_yayasan']);
            $table->double('lambda_max');
            $table->double('ci');
            $table->double('cr');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nilai_perbandingan');
    }
};
