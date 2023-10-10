<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SectionController extends Controller
{
  public function index()
  {
    $sections = DB::table('sections')->paginate(5);
    $departments = DB::table('departments')->select('*')->get();
    $semesters = DB::table('semesters')->select('*')->get();

    return view('section', compact('sections', 'departments', 'semesters'));
  }
  
  public function save(Request $request)
  {
    $semesterName = $request->input('semester_name');
    $departmentName = $request->input('department_name');
    $sectionName = $request->input('name');

    DB::table('sections')->insert([
      'name' => $sectionName,
      'semester_name' => $semesterName,
      'department_name' => $departmentName,
    ]);

    return redirect()->back()->with('success', 'Section saved successfully!');
  }

}
