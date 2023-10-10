<?php

namespace App\Http\Controllers;
use Illuminate\Pagination\Paginator;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DepartmentController extends Controller
{
  public function index()
  {
    $departments = DB::table('departments')->paginate(5); // Change '5' to the number of departments you want to display per page
    return view('department', ['departments' => $departments]);
  }
  
  public function save(Request $request)
  {
    DB::table('departments')->insert([
        'name' => $request->input('name')
    ]);
    return redirect()->back()->with('success', 'Department saved successfully.');
  }
}
