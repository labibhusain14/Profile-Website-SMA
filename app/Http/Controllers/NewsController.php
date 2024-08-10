<?php

namespace App\Http\Controllers;

use App\Models\News;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->getData("index");

        return view("news", compact('data'));
    }

    public function admin()
    {
        $data = $this->getData("admin");
        $timenow = Carbon::now()->isoFormat('YYYY-MM-DD');

        return view("admin/news", compact('data', 'timenow'));
    }

    public function getData($flag)
    {
        if ($flag == "index")
            return
                News::select('news.slug', 'news.id', 'news.banner', 'news.tags', 'news.title', 'news.subtitle', News::raw('DATE_FORMAT(news.date_publish, "%b") as month'), News::raw('DATE_FORMAT(news.date_publish, "%e") as day'))->orderBy('date_publish', 'desc')->get();
        else if ($flag == 'admin')
            return
                News::select('news.slug', 'news.id', 'news.banner', 'news.tags', 'news.date_publish', 'news.title', 'news.subtitle', 'news.news_subject', News::raw('DATE_FORMAT(news.date_publish, "%b") as month'), News::raw('DATE_FORMAT(news.date_publish, "%e") as day'))->orderBy('date_publish', 'desc')->get();
        else
            return News::select('news.slug', 'news.id', 'news.banner', 'news.tags', 'news.date_publish', 'news.title', 'news.subtitle', 'news.news_subject', News::raw('DATE_FORMAT(news.date_publish, "%b") as month'), News::raw('DATE_FORMAT(news.date_publish, "%e") as day'))->orderBy('date_publish', 'desc')->first()->get();
    }

    public function show(News $news)
    {
        $date = Carbon::parse($news->date_publish, 'UTC');
        $day = $date->isoFormat("D");
        $month = $date->isoFormat("MMM");
        $datefull = $date->isoFormat("DD MMMM YYYY");
        return view('news_detail', ['news' => $news, 'date' => $date, 'day' => $day, 'month' => $month, 'datefull' => $datefull]);
    }

    public function create(Request $request)
    {
        if ($request->hasFile('banner')) {
            $file = $request->file('banner');
            $extension = $file->getClientOriginalExtension();

            $strName = preg_replace('/\s+/', '', $request->title);
            $newName = strtolower($strName) . '-' . now()->timestamp . '.' . $extension;

            $file->storeAs('images/news_and_articles', $newName);

            $data = $request->all();
            $data['banner'] = $newName;
            $data['subtitle'] = Str::limit($request->news_subject, 100, '...');

            News::create($data);

            return redirect('/news-admin');
        }

        return back()->withInput()->withErrors('No photo was provided.');
    }

    public function update(Request $request, $id)
    {
        $news = News::findOrFail($id);
        $oldPhoto = $news->banner;
        $file_path = 'images/news_and_articles/' . $oldPhoto;

        $newName = '';

        if ($request->hasFile('banner')) {
            $new_file = $request->file('banner');
            $extension = $new_file->getClientOriginalExtension();

            $strName = preg_replace('/\s+/', '', $request->title);
            $newName = strtolower($strName) . '-' . now()->timestamp . '.' . $extension;

            $new_file->storeAs('images/news_and_articles', $newName);

            $data = $request->all();
            $data['banner'] = $newName;

            if (isset($oldPhoto) || $oldPhoto != '') {
                if (Storage::exists($file_path)) {
                    Storage::delete($file_path);
                } else {
                    dd('File does not exist!');
                }
            }
        } else {
            // timpa dgn nama yg sama, artinya biar gk berubah
            $data = $request->all();
            $data['banner'] = $oldPhoto;
        }
        $data['subtitle'] = Str::limit($request->news_subject, 100, '...');
        $news->update($data);

        return redirect("/news-admin");
    }

    public function delete($id)
    {
        $news = News::findOrFail($id);
        $oldPhoto = $news->banner;
        $file_path = 'images/news_and_articles/' . $oldPhoto;

        if (isset($oldPhoto) || $oldPhoto != '') {
            if (Storage::exists($file_path)) {
                Storage::delete($file_path);
            }
        }

        $news->delete();

        return redirect("/news-admin");
    }

    public function checkSlug(Request $request)
    {

        $slug = SlugService::createSlug(News::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
