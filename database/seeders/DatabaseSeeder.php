<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Kriteria;
use App\Models\NilaiKriteria;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Kriteria::create([
            'name' => 'Pengalaman',
            'kode' => 'C4',
            'bobot_topsis' => '0.09'
        ]);
        Kriteria::create([
            'name' => 'Tahfiz',
            'kode' => 'C1',
            'bobot_topsis' => '0.11'
        ]);
        Kriteria::create([
            'name' => 'Pendidikan',
            'kode' => 'C3',
            'bobot_topsis' => '0.15'
        ]);
        Kriteria::create([
            'name' => 'Kepribadian',
            'kode' => 'C5',
            'bobot_topsis' => '0.21'
        ]);
        Kriteria::create([
            'name' => 'Mengajar',
            'kode' => 'C2',
            'bobot_topsis' => '0.42'
        ]);

        NilaiKriteria::create([
            'kriteria_id_a' => '1',
            'kriteria_id_b' => '1',
            'nilai' => '1'
        ]);
        NilaiKriteria::create([
            'kriteria_id_a' => '1',
            'kriteria_id_b' => '2',
            'nilai' => '0.5'
        ]);
        NilaiKriteria::create([
            'kriteria_id_a' => '1',
            'kriteria_id_b' => '3',
            'nilai' => '0.5'
        ]);
        NilaiKriteria::create([
            'kriteria_id_a' => '1',
            'kriteria_id_b' => '4',
            'nilai' => '0.5'
        ]);
        NilaiKriteria::create([
            'kriteria_id_a' => '1',
            'kriteria_id_b' => '5',
            'nilai' => '0.33'
        ]);
        NilaiKriteria::create([
            'kriteria_id_a' => '2',
            'kriteria_id_b' => '1',
            'nilai' => '2'
        ]);
        NilaiKriteria::create([
            'kriteria_id_a' => '2',
            'kriteria_id_b' => '2',
            'nilai' => '1'
        ]);
        NilaiKriteria::create([
            'kriteria_id_a' => '2',
            'kriteria_id_b' => '3',
            'nilai' => '0.5'
        ]);
        NilaiKriteria::create([
            'kriteria_id_a' => '2',
            'kriteria_id_b' => '4',
            'nilai' => '0.33'
        ]);
        NilaiKriteria::create([
            'kriteria_id_a' => '2',
            'kriteria_id_b' => '5',
            'nilai' => '0.33'
        ]);
        NilaiKriteria::create([
            'kriteria_id_a' => '3',
            'kriteria_id_b' => '1',
            'nilai' => '2'
        ]);
        NilaiKriteria::create([
            'kriteria_id_a' => '3',
            'kriteria_id_b' => '2',
            'nilai' => '2'
        ]);
        NilaiKriteria::create([
            'kriteria_id_a' => '3',
            'kriteria_id_b' => '3',
            'nilai' => '1'
        ]);
        NilaiKriteria::create([
            'kriteria_id_a' => '3',
            'kriteria_id_b' => '4',
            'nilai' => '0.5'
        ]);
        NilaiKriteria::create([
            'kriteria_id_a' => '3',
            'kriteria_id_b' => '5',
            'nilai' => '0.33'
        ]);
        NilaiKriteria::create([
            'kriteria_id_a' => '4',
            'kriteria_id_b' => '1',
            'nilai' => '2'
        ]);
        NilaiKriteria::create([
            'kriteria_id_a' => '4',
            'kriteria_id_b' => '2',
            'nilai' => '3'
        ]);
        NilaiKriteria::create([
            'kriteria_id_a' => '4',
            'kriteria_id_b' => '3',
            'nilai' => '2'
        ]);
        NilaiKriteria::create([
            'kriteria_id_a' => '4',
            'kriteria_id_b' => '4',
            'nilai' => '1'
        ]);
        NilaiKriteria::create([
            'kriteria_id_a' => '4',
            'kriteria_id_b' => '5',
            'nilai' => '0.25'
        ]);
        NilaiKriteria::create([
            'kriteria_id_a' => '5',
            'kriteria_id_b' => '1',
            'nilai' => '3'
        ]);
        NilaiKriteria::create([
            'kriteria_id_a' => '5',
            'kriteria_id_b' => '2',
            'nilai' => '3'
        ]);
        NilaiKriteria::create([
            'kriteria_id_a' => '5',
            'kriteria_id_b' => '3',
            'nilai' => '3'
        ]);
        NilaiKriteria::create([
            'kriteria_id_a' => '5',
            'kriteria_id_b' => '4',
            'nilai' => '4'
        ]);
        NilaiKriteria::create([
            'kriteria_id_a' => '5',
            'kriteria_id_b' => '5',
            'nilai' => '1'
        ]);
        $this->call([
            UserSeeder::class
        ]);
    }
}
