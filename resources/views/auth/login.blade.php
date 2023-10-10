@extends('layouts.auth')

@section('content')
  <!--Form Section-->
  <div class="container-fluid w-25 text-center shadow mt-5 rounded border p-4 bgcolor">
    <img class="rounded-pill mx-auto" src="assets/images/images.png" width="100" height="100" alt="img">
    <h2 class="fw-bold mb-2 text-center text-uppercase">Superior University</h2>
    <hr>
    <div class="login-form mb-4">
      <h2 class="mb-4"><b>Login</b></h2>

      <form action="{{ route('login.submit') }}" method="POST">
        @csrf

        <div class="form-group mb-4">
          <input type="email" id="email" name="email" placeholder="Enter username or email" class="form-control"
              required>
          <label for="email" class="form-label">Username or email:</label>
        </div>

        <div class="form-group mb-4">
          <input type="password" id="password" name="password" placeholder="Enter Password" class="form-control"
                required>
          <label for="password" class="form-label">Password:</label>
        </div>

        <div class="form-group mb-4">
          <select name="login_type" id="login_type" class="form-control">
            <option value="admin" selected>Admin</option>
            <option value="student">Student</option>
          </select>
          <label for="login_type">Login As:</label>
        </div>
        <p>
        </p>
        <button type="submit" class="btn buttonx button2 backlogincolor mb-2">Login</button>
      </form>
    </div>
  </div>
@endsection
