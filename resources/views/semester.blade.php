@extends('layouts.admin')

@section('content')
  <div class="container-fluid w-50 shadow mt-5 rounded border p-4 bg-gradient-light">
    @if(session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
    @endif
    <h3 class="text-center bgcolor text-light"><b>Add Semester Details</b></h3>
    <form action="{{ route('semester.save') }}" method="POST">
      @csrf
      <div class="mt-4 form-group">
        <label for="inputAddress"><b>Department Name</b></label>
        <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example"
        name="department_name">
          @foreach($departments as $department)
            <option value="{{ $department->name }}">{{ $department->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="mt-4 form-group">
        <label for="inputAddress"><b>Semester Name</b></label>
        <input type="text" name="name" class="mt-2 form-control" id="inputAddress"
        placeholder="Add Semester Name">
      </div>
      <hr>
      <div class="align-self-end ml-auto">
        <button type="submit" class="btn button1 bgcolor mb-2">Add</button>
      </div>
    </form>

    <h3 class="text-center mt-5"><b>Semester List</b></h3>
    <table class="table mt-4">
      <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Department Name</th>
        <th scope="col">Semester Name</th>
      </tr>
      </thead>
      <tbody>
        @foreach($semesters as $semester)
          <tr>
            <td>{{ $semester->id }}</td>
            <td>{{ $semester->department_name }}</td>
            <td>{{ $semester->name }}</td>
            <td>{{ $semester->created_at }}</td>
            <td>{{ $semester->updated_at }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
    <div class="d-flex justify-content-center mt-4">
      <ul class="pagination">
        @if ($semesters->currentPage() > 1)
            <li class="page-item">
                <a class="page-link" href="{{ $semesters->previousPageUrl() }}" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
        @endif

        @for ($i = 1; $i <= $semesters->lastPage(); $i++)
            <li class="page-item{{ $semesters->currentPage() == $i ? ' active' : '' }}">
                <a class="page-link" href="{{ $semesters->url($i) }}">{{ $i }}</a>
            </li>
        @endfor

        @if ($semesters->currentPage() < $semesters->lastPage())
            <li class="page-item">
                <a class="page-link" href="{{ $semesters->nextPageUrl() }}" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        @endif
      </ul>
    </div>
  </div>
@endsection
