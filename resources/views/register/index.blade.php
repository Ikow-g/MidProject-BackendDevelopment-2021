@extends('template.main')

@section('isi')
<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 bg-secondary text-light shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Registration</h5>
            <form action="/register" method="post">
              @csrf
              <div class="form-floating mb-3">
                <input type="name" name="name" class="form-control" id="name" placeholder="Fullname" required minlength="10" maxlength="45">
              </div>
              <div class="form-floating mb-3">
                <input type="text" name="username" class="form-control" id="username" placeholder="Username" required minlength="3" maxlength="15">
              </div>
              <div class="form-floating mb-3">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" onkeyup='check();' required minlength="8" maxlength="20">
              </div>
              <div class="form-floating mb-3">
                <input type="password" name="password_confirm" class="form-control" id="password_confirm" placeholder="Confirm Password" onkeyup="check();" required minlength="8" maxlength="20">
                <small><span id='message'></span></small>
              </div>
              <div class="form-floating mb-3">
                <input type="text" name="address" class="form-control" id="address" placeholder="Address">
              </div>
              <div class="form-floating mb-3">
                <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone Number">
              </div>
              <div class="form-floating mb-3">
                <input type="text" name="age" class="form-control" id="age" placeholder="Age">
              </div>
              <div class="form-floating mb-3">
                <input type="date" name="dob" class="form-control" id="dob" placeholder="Birth Date">
              </div>

              <div class="d-grid">
                <button class="btn btn-light btn-login text-uppercase fw-bold" style="width: 100%" type="submit">Register</button>
              </div>
              <hr class="my-4 bg-light">
            </form>
            <small class="d-block text-center"> Already registered? <a class="text-warning" href="/login">Login here!</a></small>
          </div>
          
        </div>
      </div>
    </div>
  </div>
  <script>
    var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('password_confirm').value) {
    document.getElementById('message').style.color = 'lime';
    document.getElementById('message').innerHTML = 'Matching!';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'Not matching!';
  }
}
  </script>
@endsection