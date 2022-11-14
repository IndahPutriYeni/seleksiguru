<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\CalonGuru;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
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
            'name' => 'kepsek',
            'email' => 'kepsek@admin.com',
            'password' => Hash::make('12345678'),
            'jabatan' => 'kepala_sekolah',
            'isAdmin' => 1
        ]);
        User::insert([
            'id' => 3,
            'name' => 'kepala yayasan',
            'email' => 'yayasan@admin.com',
            'password' => Hash::make('12345678'),
            'jabatan' => 'kepala_yayasan',
            'isAdmin' => 1
        ]);

        User::insert([
            'id' => 4,
            'name' => 'Sri Nova',
            'email' => 'srinova@gmail.com',
            'password' => Hash::make('12345678'),
            'jabatan' => 'calon_guru',
            'isAdmin' => 0
        ]);
        CalonGuru::insert([
            'id' => 4,
            'nik' => '1324240505950001',
            'no_kk' => '1324240505950032',
            'alamat' => 'Pasar Baru. Kec Pauh, Kota Padang, Sumatera Barat',
            'tempat_lahir' => 'Padang',
            'tanggal_lahir' => '1995-05-05',
            'tamatan' => 'S1',
            'instansi' => 'PGSD UNP',
            'no_hp' => '081346558654'
        ]);
        User::insert([
            'id' => 5,
            'name' => 'Jamaludin Makhruf',
            'email' => 'Jamaludin@gmail.com',
            'password' => Hash::make('12345678'),
            'jabatan' => 'calon_guru',
            'isAdmin' => 0
        ]);
        CalonGuru::insert([
            'id' => 5,
            'nik' => '1324240505950001',
            'no_kk' => '1324240505950032',
            'alamat' => 'Pasar Baru. Kec Pauh, Kota Padang, Sumatera Barat',
            'tempat_lahir' => 'Padang',
            'tanggal_lahir' => '1995-05-05',
            'tamatan' => 'SMA',
            'instansi' => 'SMAN 4 Padang',
            'no_hp' => '081346558654'
        ]);
        User::insert([
            'id' => 6,
            'name' => 'Rabiatul Wahyu',
            'email' => 'Rabiatul@gmail.com',
            'password' => Hash::make('12345678'),
            'jabatan' => 'calon_guru',
            'isAdmin' => 0
        ]);
        CalonGuru::insert([
            'id' => 6,
            'nik' => '1324240505950001',
            'no_kk' => '1324240505950032',
            'alamat' => 'Pasar Baru. Kec Pauh, Kota Padang, Sumatera Barat',
            'tempat_lahir' => 'Padang',
            'tanggal_lahir' => '1995-05-05',
            'tamatan' => 'S1',
            'instansi' => 'PLB UNP',
            'no_hp' => '081346558654'
        ]);
        User::insert([
            'id' => 7,
            'name' => 'Irsyadul Fitri',
            'email' => 'Irsyadul@gmail.com',
            'password' => Hash::make('12345678'),
            'jabatan' => 'calon_guru',
            'isAdmin' => 0
        ]);
        CalonGuru::insert([
            'id' => 7,
            'nik' => '1324240505950001',
            'no_kk' => '1324240505950032',
            'alamat' => 'Pasar Baru. Kec Pauh, Kota Padang, Sumatera Barat',
            'tempat_lahir' => 'Padang',
            'tanggal_lahir' => '1995-05-05',
            'tamatan' => 'SMK',
            'instansi' => 'Seni Rupa SMKN 3 Padang',
            'no_hp' => '081346558654'
        ]);
        User::insert([
            'id' => 8,
            'name' => 'Febriani Putri',
            'email' => 'Febriani@gmail.com',
            'password' => Hash::make('12345678'),
            'jabatan' => 'calon_guru',
            'isAdmin' => 0
        ]);
        CalonGuru::insert([
            'id' => 8,
            'nik' => '1324240505950001',
            'no_kk' => '1324240505950032',
            'alamat' => 'Pasar Baru. Kec Pauh, Kota Padang, Sumatera Barat',
            'tempat_lahir' => 'Padang',
            'tanggal_lahir' => '1995-05-05',
            'tamatan' => 'S1',
            'instansi' => 'PGSD UNP',
            'no_hp' => '081346558654'
        ]);
        User::insert([
            'id' => 9,
            'name' => 'Restu Rahayu',
            'email' => 'Restu@gmail.com',
            'password' => Hash::make('12345678'),
            'jabatan' => 'calon_guru',
            'isAdmin' => 0
        ]);
        CalonGuru::insert([
            'id' => 9,
            'nik' => '1324240505950001',
            'no_kk' => '1324240505950032',
            'alamat' => 'Pasar Baru. Kec Pauh, Kota Padang, Sumatera Barat',
            'tempat_lahir' => 'Padang',
            'tanggal_lahir' => '1995-05-05',
            'tamatan' => 'S1',
            'instansi' => 'PGSD UNP',
            'no_hp' => '081346558654'
        ]);
        User::insert([
            'id' => 10,
            'name' => 'Maulana Yahya',
            'email' => 'Maulana@gmail.com',
            'password' => Hash::make('12345678'),
            'jabatan' => 'calon_guru',
            'isAdmin' => 0
        ]);
        CalonGuru::insert([
            'id' => 10,
            'nik' => '1324240505950001',
            'no_kk' => '1324240505950032',
            'alamat' => 'Pasar Baru. Kec Pauh, Kota Padang, Sumatera Barat',
            'tempat_lahir' => 'Padang',
            'tanggal_lahir' => '1995-05-05',
            'tamatan' => 'S1',
            'instansi' => 'Bahasa Inggris UNP',
            'no_hp' => '081346558654'
        ]);
        User::insert([
            'id' => 11,
            'name' => 'Yelfi Yustiaandini',
            'email' => 'Yelfi@gmail.com',
            'password' => Hash::make('12345678'),
            'jabatan' => 'calon_guru',
            'isAdmin' => 0
        ]);
        CalonGuru::insert([
            'id' => 11,
            'nik' => '1324240505950001',
            'no_kk' => '1324240505950032',
            'alamat' => 'Pasar Baru. Kec Pauh, Kota Padang, Sumatera Barat',
            'tempat_lahir' => 'Padang',
            'tanggal_lahir' => '1995-05-05',
            'tamatan' => 'S1',
            'instansi' => 'PGSD UNP',
            'no_hp' => '081346558654'
        ]);
        User::insert([
            'id' => 12,
            'name' => 'Wulandari Bonavia',
            'email' => 'Wulandari@gmail.com',
            'password' => Hash::make('12345678'),
            'jabatan' => 'calon_guru',
            'isAdmin' => 0
        ]);
        CalonGuru::insert([
            'id' => 12,
            'nik' => '1324240505950001',
            'no_kk' => '1324240505950032',
            'alamat' => 'Pasar Baru. Kec Pauh, Kota Padang, Sumatera Barat',
            'tempat_lahir' => 'Padang',
            'tanggal_lahir' => '1995-05-05',
            'tamatan' => 'S1',
            'instansi' => 'PGSD UNP',
            'no_hp' => '081346558654'
        ]);
        User::insert([
            'id' => 13,
            'name' => 'Eva Novi Yanti',
            'email' => 'Eva@gmail.com',
            'password' => Hash::make('12345678'),
            'jabatan' => 'calon_guru',
            'isAdmin' => 0
        ]);
        CalonGuru::insert([
            'id' => 13,
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
