@extends('template.main')

@section('isi')
<div class="container w-100">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">

        @if(session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

        @if(session()->has('failed'))
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ session('failed') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

        <div class="card border-0 bg-secondary text-light shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Login</h5>
            <form action="/login" method="post">
              @csrf
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="username" placeholder="Username" required autofocus>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
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