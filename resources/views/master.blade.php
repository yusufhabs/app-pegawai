<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'App Pegawai')</title>
</head>
<body>
    <header>
        <h1>@yield('page-title', 'App Pegawai')</h1>
        <nav>
            <ul>
                <li><a href="{{ url('/employees') }}">Employee</a></li> 
                <li><a href="{{ url('/department') }}">Department</a></li>
                <li><a href="{{ url('/attendance') }}">Attendance</a></li>
                <li><a href="{{ url('/report') }}">Report</a></li>
                <li><a href="{{ url('/settings') }}">Settings</a></li>
            </ul>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>&copy; {{ date('Y') }} App Pegawai</p>
    </footer>
</body>
</html>



