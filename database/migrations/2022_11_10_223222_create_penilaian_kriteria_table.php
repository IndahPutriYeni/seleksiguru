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
        //
        Schema::create('kriteria_penilaian', function (Blueprint $table) {
            $table->foreignId('kriteria_id_a')->constrained('kriteria');
            $table->foreignId('kriteria_id_b')->constrained('kriteria');
            $table->string('nilai');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('kriteria_penilaian');

    }
};
