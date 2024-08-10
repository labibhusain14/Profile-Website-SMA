<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Schema;
use App\Models\News;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        News::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            ['banner' => 'meeting-01.jpg', 'tags' => 'soon', 'date' => '2022-11-12', 'title' => 'Penerimaan Siswa Baru', 'subtitle' => 'Morbi in libero blandit lectus cursus ullamcorper.', 'news_subject' => '-'],
            ['banner' => 'meeting-02.jpg', 'tags' => 'soon', 'date' => '2022-11-14', 'title' => 'Online Teaching Techniques', 'subtitle' => 'Morbi in libero blandit lectus cursus ullamcorper.', 'news_subject' => '-'],
            ['banner' => 'meeting-03.jpg', 'tags' => 'soon', 'date' => '2022-11-16', 'title' => 'Network Teaching Concept', 'subtitle' => 'Morbi in libero blandit lectus cursus ullamcorper.', 'news_subject' => '-'],
            ['banner' => 'meeting-04.jpg', 'tags' => 'att', 'date' => '2022-11-18', 'title' => 'Online Teaching Tools', 'subtitle' => 'Morbi in libero blandit lectus cursus ullamcorper.', 'news_subject' => '-'],
            ['banner' => 'meeting-02.jpg', 'tags' => 'att', 'date' => '2022-11-22', 'title' => 'New Teaching Techniques', 'subtitle' => 'Morbi in libero blandit lectus cursus ullamcorper.', 'news_subject' => '-'],
            ['banner' => 'meeting-03.jpg', 'tags' => 'imp', 'date' => '2022-11-24', 'title' => 'Technology Conference', 'subtitle' => 'Morbi in libero blandit lectus cursus ullamcorper.', 'news_subject' => '-'],
            ['banner' => 'meeting-01.jpg', 'tags' => 'imp att', 'date' => '2022-11-27', 'title' => 'Online Teaching Techniques', 'subtitle' => 'Morbi in libero blandit lectus cursus ullamcorper.', 'news_subject' => '-'],
            ['banner' => 'meeting-02.jpg', 'tags' => 'soon imp', 'date' => '2022-11-28', 'title' => 'Instant Lecture Design', 'subtitle' => 'Morbi in libero blandit lectus cursus ullamcorper.', 'news_subject' => '-'],
            ['banner' => 'meeting-03.jpg', 'tags' => 'att soon', 'date' => '2022-11-30', 'title' => 'Online Social Networking', 'subtitle' => 'Morbi in libero blandit lectus cursus ullamcorper.', 'news_subject' => '-'],
        ];

        foreach ($data as $value) {
            News::insert([
                'banner' => $value['banner'],
                'tags' => $value['tags'],
                'date_publish' => $value['date'],
                'title' => $value['title'],
                'subtitle' => $value['subtitle'],
                'news_subject' => $value['news_subject'],
            ]);
        }
    }
}
