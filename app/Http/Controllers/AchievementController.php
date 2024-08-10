<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Achievement;

class AchievementController extends Controller
{
    public function admin()
    {
        $data = Achievement::select('achievements.*')->get();

        return view("admin/achievement", compact('data'));
    }

    public function create(Request $request)
    {
        Achievement::create($request->all());

        return redirect("/achievement-admin");
    }

    public function update(Request $request, $id)
    {
        $achievement = Achievement::findOrFail($id);
        $achievement->update($request->all());

        return redirect("/achievement-admin");
    }

    public function delete($id)
    {
        $achievement = Achievement::findOrFail($id);
        $achievement->delete();

        return redirect("/achievement-admin");
    }
}
