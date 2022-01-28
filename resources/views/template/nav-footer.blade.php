<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>CatGeto Code | {{ $title }}</title>
</head>
<body>

{{-- navbar --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container-sm">
        <a class="navbar-brand mr-5" href="/">CatGeto Code</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarside" aria-controls="navbarside" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarside">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Course") ? 'active' : '' }}" href="/course">Course</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "About") ? 'active' : '' }}" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "User") ? 'active' : '' }}" href="/user">User</a>
                </li>
            </ul>
            <div class="container d-flex justify-content-end">
                <a class="text-light" href="/login">Login</a>
            </div>
        </div>
    </div>
</nav>

{{-- content --}}
<div class="container">
    @yield('isi')
</div>

{{-- footer --}}
<footer class="bg-dark pb-5">
    <div class="container text-center text-white ">
        <p>CatGeto Copyrights.</p>
    </div>
</footer>

</body>
</html>