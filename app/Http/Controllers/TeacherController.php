<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
  public function index()
  {
    $departments = DB::table('departments')->select('*')->get();
    $semesters = DB::table('semesters')->select('*')->get();
    $sections = DB::table('sections')->select('*')->get();
    $courses = DB::table('courses')->select('*')->get();
    $subjects = DB::table('subjects')->select('*')->get();
    return view('teacher',compact('departments','semesters','sections','courses','subjects'));
  }
  public function save(Request $request)
  {
    $semesterName = $request->input('semester_name');
    $departmentName = $request->input('department_name');
    $sectionName = $request->input('section_name');
    $courseName = $request->input('course_name');
    $subjectName = $request->input('subject_name');
    $subjectTime = $request->input('time_slot');
    $Name = $request->input('name');

    DB::table('teachers')->insert([
      'name' => $Name,
      'semester_name' => $semesterName,
      'department_name' => $departmentName,
      'section_name' => $sectionName,
      'course_name' => $courseName,
      'subject_name' => $subjectName,
      'time_slot' => $subjectTime,
    ]);

    return redirect()->back()->with('success', 'Teachers saved successfully!');
  }
}
