<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\Ekskul;
use App\Models\Status;
use App\Models\News;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = Ekskul::select('ekskuls.*')->get();
        $datastatus = Status::select('statuses.*')->get();
        $data_news = News::select('news.slug', 'news.banner', 'news.tags', 'news.title', 'news.subtitle', News::raw('DATE_FORMAT(news.date_publish, "%b") as month'), News::raw('DATE_FORMAT(news.date_publish, "%e") as day'))->orderBy('date_publish', 'desc')->limit(4)->get();
        $data_achievement = Achievement::orderBy('year', 'desc')->take(4)->get()->reverse();

        return view("home", compact('data', 'datastatus', 'data_news', 'data_achievement'));
    }
    public function profile()
    {
        return view("profile");
    }
}
