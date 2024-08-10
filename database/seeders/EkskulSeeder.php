<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use App\Models\Ekskul;

class EkskulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Ekskul::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            ['nama' => 'Basketball', 'image' => 'basket.jpg'],
            ['nama' => 'Futsal', 'image' => 'futsal.jpg'],
            ['nama' => 'Bulutangkis', 'image' => 'badminton.jpg'],
            ['nama' => 'Volleyball', 'image' => 'volley.jpg'],
            ['nama' => 'PMR', 'image' => 'PMR.jpg'],
            ['nama' => 'OSIS', 'image' => 'course-03.jpg'],
            ['nama' => 'Pramuka', 'image' => 'course-04.jpg'],
            ['nama' => 'TAEKWONDO', 'image' => 'taekwondo.jpg'],
            ['nama' => 'Bahasa Inggris', 'image' => 'course-01.jpg'],
            ['nama' => 'Modern Dance', 'image' => 'course-02.jpg'],
            ['nama' => 'Teater', 'image' => 'course-03.jpg'],
            ['nama' => 'T-Core', 'image' => 'course-04.jpg'],
        ];

        foreach ($data as $value) {
            Ekskul::insert([
                'nama' => $value['nama'],
                'image' => $value['image'],
            ]);
        }
    }
}
