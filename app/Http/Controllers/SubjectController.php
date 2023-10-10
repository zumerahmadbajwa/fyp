<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubjectController extends Controller
{
  public function index()
  {
    $departments = DB::table('departments')->select('*')->get();
    $semesters = DB::table('semesters')->select('*')->get();
    $sections = DB::table('sections')->select('*')->get();
    $courses = DB::table('courses')->select('*')->get();
    return view('subject',compact('departments','semesters','sections','courses'));
  }
  public function save(Request $request)
  {
    $semesterName = $request->input('semester_name');
    $departmentName = $request->input('department_name');
    $sectionName = $request->input('section_name');
    $courseName = $request->input('course_name');
    $Name = $request->input('name');

    DB::table('subjects')->insert([
      'name' => $Name,
      'semester_name' => $semesterName,
      'department_name' => $departmentName,
      'section_name' => $sectionName,
      'course_name' => $courseName,
    ]);

    return redirect()->back()->with('success', 'Subject saved successfully!');
  }
}
