<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Akun Pengguna LMS (1 Dosen & 1 Mahasiswa)
        // TODO 1 : Buat akun awal untuk Dosen.
        // Hint:
        // - Gunakan email sebagai identitas akun.
        // - Lengkapi nama, password yang di-hash, role Dosen,dan nomor induk.
        User::updateOrCreate(
             ['email' => 'dosen@telkomuniversity.ac.id'],
            [
                'name' => 'Dewi Marini Umi Atmaja, S.Kom., M.Kom.',
                'password' => Hash::make('admin123'),
                'role' => 'dosen',
                'nomor_induk' => '18087690188',
            ]
        );
         User::updateOrCreate(
            ['email' => 'mahasiswa@telkomuniversity.ac.id'],
            [
                'name' => 'Aidan elsarizi',
                'password' => Hash::make('admin123'),
                'role' => 'mahasiswa',
                'nomor_induk' => '102042500104',
            ]
        );
    }
}
