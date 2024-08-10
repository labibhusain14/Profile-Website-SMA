<?php

namespace App\Http\Controllers;

use App\Models\Ekskul;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ExtracurricularController extends Controller
{
    public function index()
    {
        $data = $this->getData();

        return view("ekskul", compact('data'));
    }

    public function admin()
    {
        $data = $this->getData();

        return view("admin/ekskul", compact('data'));
    }

    public function getData()
    {
        return Ekskul::select('ekskuls.*')->get();
    }

    public function create(Request $request)
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();

            $strName = preg_replace('/\s+/', '', $request->name);
            $newName = strtolower($strName) . '-' . now()->timestamp . '.' . $extension;

            $file->storeAs('images/extracurricular', $newName);

            $data = $request->all();
            $data['image'] = $newName;

            Ekskul::create($data);

            return redirect('/extracurricular-admin');
        }

        return back()->withInput()->withErrors('No photo was provided.');
    }

    public function update(Request $request, $id)
    {
        $extra = Ekskul::findOrFail($id);
        $oldPhoto = $extra->image;
        $file_path = 'images/extracurricular/' . $oldPhoto;

        $newName = '';

        if ($request->hasFile('image')) {
            $new_file = $request->file('image');
            $extension = $new_file->getClientOriginalExtension();

            $strName = preg_replace('/\s+/', '', $request->name);
            $newName = strtolower($strName) . '-' . now()->timestamp . '.' . $extension;

            $new_file->storeAs('images/extracurricular', $newName);

            $data = $request->all();
            $data['image'] = $newName;

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
            $data['image'] = $oldPhoto;
        }

        $extra->update($data);

        return redirect("/extracurricular-admin");
    }

    public function delete($id)
    {
        $extra = Ekskul::findOrFail($id);
        $oldPhoto = $extra->image;
        $file_path = 'images/extracurricular/' . $oldPhoto;

        if (isset($oldPhoto) || $oldPhoto != '') {
            if (Storage::exists($file_path)) {
                Storage::delete($file_path);
            } else {
                dd('File does not exist!');
            }
        }

        $extra->delete();

        return redirect("/extracurricular-admin");
    }
}
