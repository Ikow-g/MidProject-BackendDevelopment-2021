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