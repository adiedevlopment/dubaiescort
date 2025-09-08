<nav class="shadow bg-grey main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <!-- Sidebar toggle button -->
        <li class="nav-item">
            <a class="text-white nav-link hover:text-pink-400" data-widget="pushmenu" href="#" role="button">
                <i class="fas fa-bars"></i>
            </a>
        </li>
        <!-- Page Title -->
        <li class="nav-item d-none d-sm-inline-block">
            <span class="text-pink-400 nav-link font-weight-bold">
                @yield('page-title', 'Dashboard')
            </span>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="ml-auto navbar-nav">
        <!-- User Info Dropdown -->
        <li class="nav-item dropdown">
            <a class="text-white nav-link hover:text-pink-400" data-toggle="dropdown" href="#">
                <i class="mr-1 text-pink-500 fas fa-user-circle"></i>
                <span>{{ auth()->user()->name }}</span>
            </a>
            <div class="bg-black border border-pink-600 shadow-lg dropdown-menu dropdown-menu-right">
                <span class="text-pink-400 dropdown-header">Welcome, {{ auth()->user()->name }}</span>
                <div class="border-pink-400 dropdown-divider"></div>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                    class="text-red-500 dropdown-item hover:bg-pink-700 hover:text-white">
                    <i class="mr-2 fas fa-sign-out-alt"></i> Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
    </ul>
</nav>
