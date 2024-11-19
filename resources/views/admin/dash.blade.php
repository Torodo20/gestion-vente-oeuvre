@extends('admin.layouts')

@section('content')
    <!-- Navbar -->
    <nav class="navbar">
        <div class="navbar-brand">Admin Dashboard</div>
        <div class="navbar-links">
            <a href="{{ route('admin.dash') }}">Dashboard</a>
            <a href="{{ route('logout') }}">Logout</a>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="main-content">
        <h1>Welcome to the Admin Dashboard</h1>
        <!-- Here you can display other content dynamically -->
        @yield('content')
    </div>
    @endsection