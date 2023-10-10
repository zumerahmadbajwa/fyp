<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TimetableController extends Controller
{
  public function index()
  {
    $time_tables = [
      "8:00-9:20","9:20-10:40","10:40-12:05","12:05-1:25","1:30-2:50","2:50-4:10"
    ];
    $slots = [];

    $data = Classroom::get();
    foreach($data as $model){
      $slots[$model->name][$model->time_slot] = $model; 
    }
    return view('timetable',compact('time_tables','slots'));
  }
}
