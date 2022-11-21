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
        Schema::table('kriteria', function(Blueprint $table) {
            $table->dropColumn('bobot');
        });

        Schema::table('kriteria', function(Blueprint $table) {
            $table->double('bobot')->default(0);

            $table->enum('tipe', ['kepala_sekolah', 'kepala_yayasan']);
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
    }
};
