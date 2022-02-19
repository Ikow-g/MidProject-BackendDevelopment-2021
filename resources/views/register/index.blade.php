@extends('template.main')

@section('isi')
<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 bg-secondary text-light shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Registration</h5>
            <form>
              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
              </div>

              <div class="d-grid">
                <button class="btn btn-light btn-login text-uppercase fw-bold" style="width: 100%" type="submit">Login</button>
              </div>
              <hr class="my-4 bg-light">
            </form>
            <small class="d-block text-center"> Not registered? <a class="text-warning" href="/register">Register Now!</a></small>
          </div>
          
        </div>
      </div>
    </div>
  </div>
@endsection