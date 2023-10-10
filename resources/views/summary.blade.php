<!DOCTYPE html>
<html>
  <head>
    <title>Superior</title>
    <link rel="shortcut icon" type="image/png" href="assets/images/images.png">
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
    <nav class="navbar navbar-expand-sm navbar-dark bgcolor">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <a class="navbar-brand mt-2 mt-lg-0" href="#">
            <img class="rounded-pill mx-auto d-block" src="assets/images/images.png" width="40" height="40" alt="img">
          </a>
          <h5 class="text-light mt-2">3U1M-AutomatedTimeTable</h5>
        </div>
      </div>
      
      <div class="dropdown px-4">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="assets/images/logo.jpeg" width="40" height="40" class="rounded-circle">
        </a>
       <ul class="dropdown-menu">
          <a class="dropdown-item" href="{{ route('login')}}"><i class="fa fa-fw fa-user"></i>Log In</a>
          <a class="dropdown-item" href="{{ route('signup')}}"><i class="fa fa-fw fa-user"></i>Sign In</a>
        </ul>
      </div>
    </nav>
  
    <div class="backgroundImage">
     <img src="/assets/images/back.jpeg">
    </div>
    <div class="content center">
      <h1><b>3U1M-AutomatedTimeTable</b></h1>
    </div>
    <h2 class="centerDown"><b>CS Department</b></h2>
    <div class="content center1">
      <button type="button" class="btn bgcolor btn-lg">Learn More</button>
      <button type="button" class="btn btn-light btn-lg textcolor"><b>Contact Us</b></button>
    </div>
  </body>
</html> 
