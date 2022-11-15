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
        Schema::create('topsis', function (Blueprint $table) {
            $table->id();
            $table->json('ternomalisasi');
            $table->json('ternomalisasi_bobot');
            $table->json('min');
            $table->json('max');
            $table->json('solusi_ideal_plus');
            $table->json('solusi_ideal_min');
            $table->json('preferensi');
            $table->json('ranking');
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
        Schema::dropIfExists('topsis');
    }
};
