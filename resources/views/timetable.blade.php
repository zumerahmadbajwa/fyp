@extends('layouts.admin')

@section('content')
  <style>
    .table-container {
      margin: 20px;
      padding: 20px;
      border: 1px solid #ccc;
    }

    table {
      border-collapse: collapse;
      width: 100%;
    }

    th,
    td {
      border: 1px solid #ccc;
      padding: 8px;
      text-align: left;
    }

    @media print {
      body * {
        visibility: hidden;
      }

      #myTable,
      #myTable * {
        visibility: visible;
      }

      #myTable {
        position: absolute;
        left: 0;
        top: 0;
      }
    }
  </style>
  <div class="container-fluid w-75 shadow mt-5 rounded border p-4 bg-gradient-light">
    <h3 class="text-center bgcolor text-light"><b>TimeTable</b></h3>
    <table class="table" id="myTable">
      <thead>
        <tr>
          <th scope="col">Rooms</th>
          @foreach ($time_tables as $slot)
            <th scope="col">{{ $slot }}</th>
          @endforeach
        </tr>
      </thead>
      <tbody>
        @foreach ($slots as $room => $slots)
          <tr>
            <td scope="row">Lecture Room-{{$room}}</td>
            @foreach ($time_tables as $slot)
              <td scope="row">
                @if(isset($slots[$slot]))
                  <p>{{ $slots[$slot]->department_name }}</p>
                  <p>{{ $slots[$slot]->teacher_name }}</p>
                  <p>{{ $slots[$slot]->course_name }}</p>
                  <p>{{ $slots[$slot]->semester_name }}
                  {{ $slots[$slot]->section_name }}</p>
                @else           
                @endif
              </td>
            @endforeach
          </tr>
        @endforeach
      </tbody>
    </table>
    <hr>
    <div class="row mb-4">
      <div class="col">
        <div class="align-self-end ml-auto float-center text-right">
          <button type="submit" class="btn button1 bgcolor mb-2" onclick="printTable()">Download</button>
        </div>
      </div>
    </div>
  </div>
  <script>
    function printTable() {
      //   var tableToPrint = document.getElementById("myTable").outerHTML;
      //   var newWindow = window.open("");
      //   newWindow.document.write(tableToPrint);
      //   newWindow.print();
      window.print();

    }
  </script>
@endsection
