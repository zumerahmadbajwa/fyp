@extends('layouts.admin')

@section('content')
  <div class="container-fluid w-50 shadow mt-5 rounded border p-4 bg-gradient-light">
    @if (session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
    @endif
    <h3 class="text-center bgcolor text-light"><b>Add Department Name</b></h3>
    <form action="{{ route('department.save') }}" method="POST">
      @csrf
      <div class="mt-4 form-group">
        <label for="inputAddress"><b>Department Name</b></label>
        <input type="text" name="name" class="mt-2 form-control" id="inputAddress"
        placeholder="Add Department Name">
      </div>
      <hr>
      <div class="align-self-end ml-auto">
        <button type="submit" class="btn button1 bgcolor mb-2">Add</button>
      </div>
    </form>
    <hr>

    <!-- Your existing code -->
    <h3 class="text-center mt-5"><b>Department List</b></h3>
    <table class="table mt-4">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Department Name</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($departments as $department)
          <tr>
            <th scope="row">{{ $department->id }}</th>
            <td>{{ $department->name }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>

    <div class="d-flex justify-content-center mt-4">
      <ul class="pagination paginationcolor">
        @if ($departments->currentPage() > 1)
          <li class="page-item disabled">
            <a class="page-link" href="{{ $departments->previousPageUrl() }}" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
              <span class="sr-only">Previous</span>
            </a>
          </li>
        @endif

        @for ($i = 1; $i <= $departments->lastPage(); $i++)
          <li class="page-item{{ $departments->currentPage() == $i ? ' active' : '' }}">
            <a class="page-link" href="{{ $departments->url($i) }}">{{ $i }}</a>
          </li>
        @endfor

        @if ($departments->currentPage() < $departments->lastPage())
          <li class="page-item">
            <a class="page-link" href="{{ $departments->nextPageUrl() }}" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
              <span class="sr-only">Next</span>
            </a>
          </li>
        @endif
      </ul>
    </div>
  </div>
  <!-- Your existing code -->
  <script>
    $(document).ready(function() {
      setTimeout(function() {
        $('#flash-message').fadeOut('slow');
      }, 3000); // hide after 3 seconds
    });
  </script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endsection
