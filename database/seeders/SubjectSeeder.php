<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use App\Models\Subject;
use Carbon\Carbon;


class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Subject::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            ['name' => 'Informatika'],
            ['name' => 'Fisika'],
            ['name' => 'Matematika'],
            ['name' => 'Biologi'],
            ['name' => 'Kimia'],
            ['name' => 'Sosiologi'],
            ['name' => 'Sejarah'],
            ['name' => 'Geografi'],
            ['name' => 'Ekonomi'],
            ['name' => 'Bahasa Indonesia'],
            ['name' => 'Bahasa Sunda'],
            ['name' => 'Bahasa Inggris'],
            ['name' => 'Bahasa Jepang'],
            ['name' => 'Bimbingan Konseling'],
            ['name' => 'Seni Rupa'],
            ['name' => 'Seni Musik'],
            ['name' => 'Pendidikan Agama Islam'],
            ['name' => 'Pendidikan Jasmani dan Olahraga'],
            ['name' => 'Pendidikan Kewarganegaraan'],
            ['name' => 'Prakarya dan Kewirausahaan'],
        ];

        foreach ($data as $value) {
            Subject::insert([
                'name' => $value['name'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
