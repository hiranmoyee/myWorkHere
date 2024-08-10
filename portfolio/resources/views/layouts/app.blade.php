<!DOCTYPE html>
<html>
<head>
    <title>@yield('title') - My Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

</head>
<body>
    <header>
        <div class="container">
            <h1>My Portfolio</h1>
            <nav>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/experience">Experience</a></li>
                    <li><a href="/portfolio">Portfolio</a></li>
                    <li><a href="/certificates">Certificates</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <main class="container">
        @yield('content')
    </main>
    
    <footer>
        <p>&copy; 2024 My Portfolio</p>
    </footer>
</body>
</html>
