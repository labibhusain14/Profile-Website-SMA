<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Status;

class AdminController extends Controller
{
    public function index()
    {
        $data1 = Achievement::orderBy('year', 'desc')->take(4)->get()->reverse();
        $data2 = Status::select('statuses.*')->get();

        return view("admin/dashboard", compact('data1', 'data2'));
    }

    public function login()
    {
        return view("login");
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function authenticating(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/admin');
        }

        Session::flash('status', 'failed');
        Session::flash('message', 'Username atau Password salah');

        return redirect('/login');
    }

    public function update_status(Request $request, $id)
    {
        $status = Status::findOrFail($id);
        $status->update($request->all());

        return redirect("/admin");
    }
}
