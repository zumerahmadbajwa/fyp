<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SemesterController extends Controller
{
  // public function index()
  // {
  //     $departments = DB::table('departments')->select('*')->get();

  //     return view('semester', ['departments' => $departments]);
  // }
  public function index()
  {
    $semesters = DB::table('semesters')->paginate(5);
    $departments = DB::table('departments')->select('*')->get();

    return view('semester', ['semesters' => $semesters, 'departments' => $departments]);
  }


  public function save(Request $request)
  {
    $semesterName = $request->input('name');
    $departmentId = $request->input('department_name');

    DB::table('semesters')->insert([
        'name' => $semesterName,
        'department_name' => $departmentId,
    ]);

    return redirect()->back()->with('success', 'Semester saved successfully!');
  }
}
