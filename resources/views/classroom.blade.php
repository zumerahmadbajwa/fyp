@extends('layouts.admin')

@section('content')
  <div class="container-fluid w-50 shadow mt-5 rounded border p-4 bg-gradient-light">
    <h3 class="text-center bgcolor text-light"><b>Assign the Classroom</b></h3>
    <form action="{{ route('classroom.save') }}" method="POST">
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
        <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example" name="course_name">
          @foreach ($courses as $course)
            <option value="{{ $course->name }}" selected>{{ $course->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="mt-4 form-group">
        <label for="inputAddress"><b>Subject</b></label>
        <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example" name="subject_name">
          @foreach ($subjects as $subject)
            <option value="{{ $subject->name }}" selected>{{ $subject->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="mt-4 form-group">
        <label for="inputAddress"><b>Teacher</b></label>
        <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example" name="teacher_name">
          @foreach ($teachers as $teacher)
            <option value="{{ $teacher->name }}" selected>{{ $teacher->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="mt-4 form-group">
        <label for="inputAddress"><b>Time Slot</b></label>
        <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example" name="time_slot"
        id="timeSlotSelect">
          <option value="" selected> Select Time </option>
          <option value="8:00-9:20"> 8:00-9:20 </option>
          <option value="9:20-10:40"> 9:20-10:40 </option>
          <option value="10:40-12:05"> 10:40-12:05 </option>
          <option value="12:05-1:25"> 12:05-1:25 </option>
          <option value="1:30-2:50"> 1:30-2:50 </option>
          <option value="2:50-4:10"> 2:50-4:10 </option>
        </select>
      </div>
      <div class="mt-4 form-group">
        <label for="inputAddress"><b>Assign Classroom</b></label>
        <input type="text" name="name" class="mt-2 form-control" id="inputAddress" placeholder="Assign room">
      </div>
      <hr>
      @if (session('error'))
        <div class="alert alert-danger">
          {{ session('error') }}
        </div>
      @endif

      @if (session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
      @endif
      {{-- <div id="errorMessage" class="mt-2 text-danger"></div> --}}
      <hr>
      <div class="align-self-end ml-auto">
        <button type="submit" class="btn button1 bgcolor mb-2">Assign Room</button>
      </div>
    </form>
  </div>

@endsection
