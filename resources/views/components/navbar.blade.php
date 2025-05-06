<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">GePaKo</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#adminNavbar" aria-controls="adminNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="adminNavbar">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard', ['username' => request('username'), 'password' => request('password')]) }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pengelolaan', ['username' => request('username'), 'password' => request('password')]) }}">Menu makanan</a>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profile',  ['username' => request('username'), 'password' => request('password')]) }}">Profile</a>
                </li>
            </ul>

            <form method="" action="{{ route('login') }}" class="d-flex">
                @csrf
                <button type="submit" class="btn btn-outline-light">
                    Logout
                </button>
            </form>
        </div>
    </div>
</nav>
