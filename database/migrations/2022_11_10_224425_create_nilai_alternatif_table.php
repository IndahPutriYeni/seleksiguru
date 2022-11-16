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
        Schema::create('nilai_alternatif', function (Blueprint $table) {
            $table->id();
            $table->foreignId('calon_guru_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('penilai_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('kriteria_id')->constrained('kriteria')->onDelete('cascade');
            $table->string('jabatan');
            $table->integer('nilai');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nilai_alternatif');
    }
};
