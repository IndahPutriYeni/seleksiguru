<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::insert([
            'id' => 1,
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('12345678'),
            'jabatan' => 'admin',
            'isAdmin' => 1
        ]);

        User::insert([
            'id' => 2,
            'name' => 'amanda',
            'email' => 'amanda@gmail.com',
            'password' => Hash::make('12345678'),
            'jabatan' => 'calon_guru',
            'isAdmin' => 0
        ]);
        CalonGuru::insert([
            'id' => 1,
            'nik' => '1324240505950001',
            'no_kk' => '1324240505950032',
            'alamat' => 'Pasar Baru. Kec Pauh, Kota Padang, Sumatera Barat',
            'tempat_lahir' => 'Padang',
            'tanggal_lahir' => '1995-05-05',
            'tamatan' => 'S1',
            'instansi' => 'PGSD UNP',
            'no_hp' => '081346558654'
        ]);
    }
}
