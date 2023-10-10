@extends('layouts.admin')

@section('content')

    <div class="container-fluid w-50 shadow mt-5 rounded border p-4 bg-gradient-light">
      <h3 class= "text-center bgcolor text-light"><b>Assign Teacher</b></h3>
      <form action="{{ route('teacher.save') }}" method="POST">
        @csrf
        <div class="mt-4 form-group">
          <label for="inputAddress"><b>Department Name</b></label>
          <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example" name="department_name">
            @foreach ($departments as $department)
              <option value="{{ $department->name }}" selected>{{ $department->name }}</option>
            @endforeach
          </select>
        </div>
        <div class="mt-4 form-group">
          <label for="inputAddress"><b>Semester Name</b></label>
          <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example" name="semester_name">
            @foreach ($semesters as $semester)
              <option value="{{ $semester->name }}" selected>{{ $semester->name }}</option>
            @endforeach
          </select>
        </div>
        <div class="mt-4 form-group">
          <label for="inputAddress"><b>Section</b></label>
          <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example" name="section_name">
            @foreach ($sections as $section)
              <option value="{{ $section->name }}" selected>{{ $section->name }}</option>
            @endforeach
          </select>
        </div>
        <div class="mt-4 form-group">
          <label for="inputAddress"><b>Course</b></label>
          <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example" name="course_name" >
            @foreach ($courses as $course)
              <option value="{{ $course->name }}" selected>{{ $course->name }}</option>
            @endforeach
          </select>
        </div>
        <div class="mt-4 form-group">
          <label for="inputAddress"><b>Subject</b></label>
          <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example" name="subject_name" >
            @foreach ($subjects as $subject)
              <option value="{{ $subject->name }}" selected>{{ $subject->name }}</option>
            @endforeach
          </select>
        </div>
        <div class="mt-4 form-group">
          <label for="inputAddress"><b>Assign Teacher</b></label>
          <input type="text" name="name" class="mt-2 form-control" id="inputAddress" placeholder="Assign Teacher">
        </div>
        <hr>
        <div class="align-self-end ml-auto">
          <button type="submit" class="btn button1 bgcolor mb-2">Assign</button>
        </div>
      </form>

    </div>

  </body>
@endsection
