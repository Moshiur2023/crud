<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $student;
    use HasFactory;

    public function saveStudent($request)
    {
        $this->student = new Student();
        $this->student->first_name = $request->first_name;
        $this->student->last_name = $request->last_name;
        $this->student->email = $request->email;
        $this->student->phone = $request->phone;
        $this->student->save();
    }

    public function updateStudent($request)
    {
        $this->student = Student::find($request->id);
        $this->student->first_name = $request->first_name;
        $this->student->last_name = $request->last_name;
        $this->student->email = $request->email;
        $this->student->phone = $request->phone;
        $this->student->save();
    }

}
