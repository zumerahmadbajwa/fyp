@extends('layouts.auth')

@section('content')
  <!--Form Section-->
  <div class="container-fluid w-75 text-center shadow mt-5 rounded border p-4 bgcolor">
    <img class="rounded-pill mx-auto" src="assets/images/images.png" width="100" height="100" alt="img">
    <h2 class="fw-bold mb-2 text-center text-uppercase">Superior University</h2>
    <hr>
    <div class="row mb-4">
      <div class="col">
        <div class="form-outline mb-4 text-light">
          <input type="text" id="form3Example1c" class="form-control" />
          <label class="form-label" for="form3Example1c">First Name</label>
        </div>
      </div>
      <div class="col">
        <div class="form-outline mb-4 text-light float-center">
          <input type="text" id="form3Example1c" class="form-control" />
          <label class="form-label" for="form3Example1c">Last Name</label>
        </div>
      </div>
      <div class="col">
        <div class="form-outline mb-4 text-light float-center">
          <input type="text" id="form3Example1c" class="form-control" />
          <label class="form-label" for="form3Example1c">Username</label>
        </div>
      </div>
    </div>

    <div class="row mb-4">
      <div class="col">
        <div class="form-outline mb-4 text-light">
          <input type="email" id="form3Example1c" class="form-control" />
          <label class="form-label" for="form3Example1c">Email</label>
        </div>
      </div>
      <div class="col">
        <div class="form-outline mb-4 text-light float-center">
          <input type="password" id="form3Example1c" class="form-control" />
          <label class="form-label" for="form3Example1c">Password</label>
        </div>
      </div>
      <div class="col">
        <div class="form-outline mb-4 text-light float-center">
          <input type="password" id="form3Example1c" class="form-control" />
          <label class="form-label" for="form3Example1c">Confirm Password</label>
        </div>
      </div>
    </div>
    <div class="row mb-4">
      <div class="col">
        <div class="form-check d-flex justify-content-center mb-5">
          <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
          <label class="form-check-label" for="form2Example3">
              I agree all statements in <a href="#!" class="btnstyle">Terms of service</a>
          </label>
        </div>
      </div>
      <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
        <a href="{{ route('login') }}"><button type="button" class="btn btn-light btn-lg">Sign Up</button></a>
      </div>
    </div>
  </div>
@endsection
