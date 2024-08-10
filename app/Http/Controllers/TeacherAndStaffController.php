<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeacherAndStaff;
use App\Models\Subject;
use Illuminate\Support\Facades\Storage;

class TeacherAndStaffController extends Controller
{
    public function index()
    {
        $data1 = Subject::orderBy('name', 'asc')->get();
        $data2 = $this->getData();

        return view("teacher", compact('data1', 'data2'));
    }

    public function admin()
    {
        $data = $this->getData();
        $data1 = Subject::orderBy('name', 'asc')->get();

        return view("admin/teacher", compact('data', 'data1'));
    }

    public function getData()
    {
        return
            TeacherAndStaff::select('teacher_and_staffs.*', 'subjects.name as subject_name')
            ->join('subjects', 'teacher_and_staffs.subject_id', '=', 'subjects.id')->orderBy('teacher_and_staffs.name', 'asc')
            ->get();
    }

    public function kepsek()
    {
        // $data1 = Subject::orderBy('name', 'asc')->get();
        // $data2 = TeacherAndStaff::select('teacher_and_staffs.*', 'subjects.name as subject_name')
        //     ->join('subjects', 'teacher_and_staffs.subject_id', '=', 'subjects.id')->orderBy('teacher_and_staffs.name', 'asc')
        //     ->get();
        return view("kepsek");
    }

    public function staff()
    {
        // $data1 = Subject::orderBy('name', 'asc')->get();
        // $data2 = TeacherAndStaff::select('teacher_and_staffs.*', 'subjects.name as subject_name')
        //     ->join('subjects', 'teacher_and_staffs.subject_id', '=', 'subjects.id')->orderBy('teacher_and_staffs.name', 'asc')
        //     ->get();
        return view("staff");
    }
    public function ekskul()
    {
        // $data1 = Subject::orderBy('name', 'asc')->get();
        // $data2 = TeacherAndekskul::select('teacher_and_ekskuls.*', 'subjects.name as subject_name')
        //     ->join('subjects', 'teacher_and_ekskuls.subject_id', '=', 'subjects.id')->orderBy('teacher_and_ekskuls.name', 'asc')
        //     ->get();
        return view("ekskul");
    }

    public function create(Request $request)
    {
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();

            $strName = preg_replace('/\s+/', '', $request->name);
            $newName = strtolower($strName) . '-' . now()->timestamp . '.' . $extension;

            $file->storeAs('images/teacher_and_staff', $newName);

            $data = $request->all();
            $data['photo'] = $newName;

            TeacherAndStaff::create($data);

            return redirect('/teacher-admin');
        }

        return back()->withInput()->withErrors('No photo was provided.');
    }

    public function update(Request $request, $id)
    {
        $teacherandstaff = TeacherAndStaff::findOrFail($id);
        $oldPhoto = $teacherandstaff->photo;
        $file_path = 'images/teacher_and_staff/' . $oldPhoto;

        $newName = '';

        if ($request->hasFile('photo')) {
            $new_file = $request->file('photo');
            $extension = $new_file->getClientOriginalExtension();

            $strName = preg_replace('/\s+/', '', $request->title);
            $newName = strtolower($strName) . '-' . now()->timestamp . '.' . $extension;

            $new_file->storeAs('images/teacher_and_staff/', $newName);

            $data = $request->all();
            $data['photo'] = $newName;

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
            $data['photo'] = $oldPhoto;
        }

        $teacherandstaff->update($data);

        return redirect("/teacher-admin");
    }

    public function delete($id)
    {
        $teacherandstaff = TeacherAndStaff::findOrFail($id);
        $oldPhoto = $teacherandstaff->photo;
        $file_path = 'images/teacher_and_staff/' . $oldPhoto;

        if (isset($oldPhoto) || $oldPhoto != '') {
            if (Storage::exists($file_path)) {
                Storage::delete($file_path);
            }
        }

        $teacherandstaff->delete();

        return redirect("/teacher-admin");
    }
}
