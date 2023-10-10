@extends('layouts.admin')

@section('content')
  <div class="container-fluid w-50 shadow mt-5 rounded border p-4 bg-gradient-light">
    @if (session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
    @endif

    <h3 class="text-center bgcolor text-light"><b>Add Section Details</b></h3>
    <form action="{{ route('section.save') }}" method="POST">
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
        <input type="text" name="name" class="mt-2 form-control" id="inputAddress" placeholder="">
      </div>
      <hr>
      <div class="align-self-end ml-auto">
        <button type="submit" class="btn button1 bgcolor mb-2">Add</button>
      </div>
    </form>
    <h3 class="text-center mt-5"><b>Section List</b></h3>
    <table class="table mt-4">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Department Name</th>
          <th scope="col">Semester Name</th>
          <th scope="col">Section</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($sections as $section)
          <tr>
            <td>{{ $section->id }}</td>
            <td>{{ $section->department_name }}</td>
            <td>{{ $section->semester_name }}</td>
            <td>{{ $section->name }}</td>  
          </tr>
        @endforeach
      </tbody>
    </table> 
    <div class="d-flex justify-content-center mt-4">
      <ul class="pagination">
        @if ($sections->currentPage() > 1)
          <li class="page-item">
            <a class="page-link" href="{{ $sections->previousPageUrl() }}" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
              <span class="sr-only">Previous</span>
            </a>
          </li>
        @endif

        @for ($i = 1; $i <= $sections->lastPage(); $i++)
          <li class="page-item{{ $sections->currentPage() == $i ? ' active' : '' }}">
            <a class="page-link" href="{{ $sections->url($i) }}">{{ $i }}</a>
          </li>
        @endfor

        @if ($sections->currentPage() < $sections->lastPage())
          <li class="page-item">
            <a class="page-link" href="{{ $sections->nextPageUrl() }}" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
              <span class="sr-only">Next</span>
            </a>
          </li>
        @endif
      </ul>
    </div>
  </div>
@endsection
