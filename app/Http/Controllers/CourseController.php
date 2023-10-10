<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
  public function index()
  {
    $departments = DB::table('departments')->select('*')->get();
    $semesters = DB::table('semesters')->select('*')->get();
    $sections = DB::table('sections')->select('*')->get();
    return view('course',compact('departments','semesters','sections'));
  }
  public function save(Request $request)
  {
    $semesterName = $request->input('semester_name');
    $departmentName = $request->input('department_name');
    $sectionName = $request->input('section_name');
    $Name = $request->input('name');

    DB::table('courses')->insert([
      'name' => $Name,
      'semester_name' => $semesterName,
      'department_name' => $departmentName,
      'section_name' => $sectionName,
    ]);

    return redirect()->back()->with('success', 'Course saved successfully!');
  }
}
