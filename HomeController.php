<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $student;
    public function index()
    {
        return view('crud.create');
    }

    public function create(Request $request)
    {
        $this->student = new Student();
        $this->student->saveStudent($request);
        return back();
    }

    public function allStudent()
    {
        return view('crud.read',
        [
            'students'=>Student::all()
        ]);
    }

    public function edit($id)
    {
        return view('crud.edit',
        [
            'student'=>Student::find($id)
        ]);
    }

    public function update(Request $request)
    {
        $this->student = new Student();
        $this->student->updateStudent($request);
        return back();
    }

    public function delete($id)
    {
        $this->student =Student::find($id);
        $this->student->delete();
        return back();
    }
}
