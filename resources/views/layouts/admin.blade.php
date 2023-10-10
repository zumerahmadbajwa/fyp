<!DOCTYPE html>
<html>
  <head>
    <title>Superior</title>
    <link rel="shortcut icon" type="image/png" href="assets/images/logo.jpeg" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Bootstrap-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--Icon-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--CSS-->
    <link rel="stylesheet" href="assets/css/style.css">
    <!--Script-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>

  <body>
    <div class="sidenav">
      <img class="mx-auto d-block rounded-circle" src="assets/images/images.png" width="70" height="70"
        alt="img">
      <div class="mt-5">
        <!-- <a href="{{ route('home') }}"><i class="fa fa-fw fa-home"></i> Home</a> -->
        <?php
          if(Auth::user()->type == 'admin') {
        ?>
        <a href="{{ route('department') }}"><i class="fa fa-fw fa-university"></i> Department</a>
        <a href="{{ route('semester') }}"><i class="fa fa-fw fa-barcode"></i> Semester</a>
        <a href="{{ route('section') }}"><i class="fa fa-fw fa-clipboard"></i> Section</a>
        <a href="{{ route('course') }}"><i class="fa fa-fw fa-book"></i> Course</a>
        <a href="{{ route('subject') }}"><i class="fa fa-fw fa-book"></i> Subject</a>
        <a href="{{ route('teacher') }}"><i class="fa fa-fw fa-user"></i> Teacher</a>
        <a href="{{ route('classroom') }}"><i class="fa fa-fw fa-university"></i> Classroom</a>
        <?php 
          }
        ?>
        <a href="{{ route('timetable') }}"><i class="fa fa-fw fa-table"></i> Timetable</a>
                        <a href="{{ route('home') }}"><i class="fa fa-fw fa-sign-out"></i> Logout</a>

      </div>
    </div>
    <nav class="navbar navbar-expand-sm navbar-dark bgcolor">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <a class="navbar-brand mt-2 mt-lg-0" href="#">
            <img class="rounded-pill mx-auto d-block" src="assets/images/images.png" width="40" 
            height="40" alt="img">
          </a>
          <h5 class="text-light ps-5 ms-5 mt-2">-AutomatedTimeTable</h5>
        </div>
      </div>

      <div class="dropdown px-4">
        <a class="nav-link dropdown-toggle" href="{{ route('home') }}" id="navbarDropdownMenuLink" role="button"
          data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="assets/images/logo.jpeg" width="40" height="40" class="rounded-circle">
        </a>
        <ul class="dropdown-menu">
          <a class="dropdown-item" href="{{ route('auth.logout') }}"><i class="fa fa-fw fa-user"></i>Log out</a>
        </ul>
      </div>
    </nav>
    @yield('content')
  </body>
</html>
