<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Schema;
use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Status::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            ['image' => 'trophy.png', 'title' => 'Prestasi', 'total' => '50'],
            ['image' => 'siswa.png', 'title' => 'Total Siswa Aktif', 'total' => '797'],
            ['image' => 'kelas.png', 'title' => 'Jumlah Kelas', 'total' => '24'],
            ['image' => 'staff.png', 'title' => 'Staff Pengajar & TU', 'total' => '56'],
            ['image' => 'ekskul.png', 'title' => 'Ekstrakulikuler', 'total' => '25'],
        ];

        foreach ($data as $value) {
            Status::insert([
                'image' => $value['image'],
                'title' => $value['title'],
                'total' => $value['total'],
            ]);
        }
    }
}
