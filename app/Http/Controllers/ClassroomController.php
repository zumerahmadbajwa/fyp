<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClassroomController extends Controller
{
  public function index()
  {
    $departments = DB::table('departments')->select('*')->get();
    $semesters = DB::table('semesters')->select('*')->get();
    $sections = DB::table('sections')->select('*')->get();
    $courses = DB::table('courses')->select('*')->get();
    $subjects = DB::table('subjects')->select('*')->get();
    $teachers = DB::table('teachers')->select('*')->get();
    return view('classroom',compact('departments','semesters','sections','courses','subjects','teachers'));
  }
  public function save(Request $request)
  {
    $semesterName = $request->input('semester_name');
    $departmentName = $request->input('department_name');
    $sectionName = $request->input('section_name');
    $courseName = $request->input('course_name');
    $subjectName = $request->input('subject_name');
    $teacherName = $request->input('teacher_name');
    $timeslot = $request->input('time_slot');
    $Name = $request->input('name');

    $timeSlots = [
      '8:00-9:20',
      '9:20-10:40',
      '10:40-12:05',
      '12:05-1:25',
      '1:30-2:50',
      '2:50-4:10'
    ];

    // Check if input is '1' and time slot matches
    if ($Name === '1' && in_array($timeslot, $timeSlots)) {
      // Check if a record with input "1" and the given time slot already exists
      $existingRecord = DB::table('classrooms')->where('name', '1')->where('time_slot', $timeslot)->exists();
      if ($existingRecord) {
        return redirect()->back()->with('error', 'Error: A record with input "1" and time slot "'.$timeslot.'" already exists.');
      }
    }
    if ($Name === '2' && in_array($timeslot, $timeSlots)) {
      // Check if a record with input "2" and the given time slot already exists
      $existingRecord = DB::table('classrooms')->where('name', '2')->where('time_slot', $timeslot)->exists();
      if ($existingRecord) {
        return redirect()->back()->with('error', 'Error: A record with input "2" and time slot "'.$timeslot.'" already exists.');
      }
    }

    if ($Name === '3' && in_array($timeslot, $timeSlots)) {
      // Check if a record with input "3" and the given time slot already exists
      $existingRecord = DB::table('classrooms')->where('name', '3')->where('time_slot', $timeslot)->exists();
      if ($existingRecord) {
        return redirect()->back()->with('error', 'Error: A record with input "3" and time slot "'.$timeslot.'" already exists.');
      }
    }


    if ($Name === '4' && in_array($timeslot, $timeSlots)) {
      // Check if a record with input "4" and the given time slot already exists
      $existingRecord = DB::table('classrooms')->where('name', '4')->where('time_slot', $timeslot)->exists();
      if ($existingRecord) {
        return redirect()->back()->with('error', 'Error: A record with input "4" and time slot "'.$timeslot.'" already exists.');
      }
    }


    if ($Name === '5' && in_array($timeslot, $timeSlots)) {
      // Check if a record with input "5" and the given time slot already exists
      $existingRecord = DB::table('classrooms')->where('name', '5')->where('time_slot', $timeslot)->exists();
      if ($existingRecord) {
        return redirect()->back()->with('error', 'Error: A record with input "5" and time slot "'.$timeslot.'" already exists.');
      }
    }

    if ($Name === '6' && in_array($timeslot, $timeSlots)) {
      // Check if a record with input "6" and the given time slot already exists
      $existingRecord = DB::table('classrooms')->where('name', '6')->where('time_slot', $timeslot)->exists();
      if ($existingRecord) {
        return redirect()->back()->with('error', 'Error: A record with input "6" and time slot "'.$timeslot.'" already exists.');
      }
    }

    if ($Name === '7' && in_array($timeslot, $timeSlots)) {
      // Check if a record with input "7" and the given time slot already exists
      $existingRecord = DB::table('classrooms')->where('name', '7')->where('time_slot', $timeslot)->exists();
      if ($existingRecord) {
        return redirect()->back()->with('error', 'Error: A record with input "7" and time slot "'.$timeslot.'" already exists.');
      }
    }

    if ($Name === '8' && in_array($timeslot, $timeSlots)) {
      // Check if a record with input "8" and the given time slot already exists
      $existingRecord = DB::table('classrooms')->where('name', '8')->where('time_slot', $timeslot)->exists();
      if ($existingRecord) {
        return redirect()->back()->with('error', 'Error: A record with input "8" and time slot "'.$timeslot.'" already exists.');
      }
    }

    if ($Name === '9' && in_array($timeslot, $timeSlots)) {
      // Check if a record with input "9" and the given time slot already exists
      $existingRecord = DB::table('classrooms')->where('name', '9')->where('time_slot', $timeslot)->exists();
      if ($existingRecord) {
        return redirect()->back()->with('error', 'Error: A record with input "9" and time slot "'.$timeslot.'" already exists.');
      }
    }
    if ($Name === '10' && in_array($timeslot, $timeSlots)) {
      // Check if a record with input "10" and the given time slot already exists
      $existingRecord = DB::table('classrooms')->where('name', '10')->where('time_slot', $timeslot)->exists();
      if ($existingRecord) {
        return redirect()->back()->with('error', 'Error: A record with input "10" and time slot "'.$timeslot.'" already exists.');
      }
    }
    DB::table('classrooms')->insert([
      'name' => $Name,
      'semester_name' => $semesterName,
      'department_name' => $departmentName,
      'section_name' => $sectionName,
      'course_name' => $courseName,
      'subject_name' => $subjectName,
      'teacher_name' => $teacherName,
      'time_slot' => $timeslot,
    ]);

    return redirect()->back()->with('success', 'Classroom saved successfully!');
  }
}
