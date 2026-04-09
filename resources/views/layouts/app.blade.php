<!DOCTYPE html>
<html>
<head>
    <title>Portfolio</title>
    <link rel="stylesheet" href="/build/assets/app-7qGBH21J.css">
</head>
<body class="bg-black text-white">

    <!-- Navbar -->
    <nav class="fixed top-4 left-1/2 transform -translate-x-1/2 
            w-[90%] max-w-5xl z-50 
            bg-white/5 backdrop-blur-lg 
            border border-white/10 
            rounded-xl px-6 py-3 shadow-lg shadow-purple-500/10
            flex justify-between items-center">

    <!-- Logo -->
    <a href="#home">
         <h1 class="text-lg font-semibold tracking-wide">
            Varun
        </h1>
    </a>

    <!-- Links -->
    <div class="flex gap-6 text-sm">
        <a href="#about" class="nav-link">About</a>
        <a href="#projects" class="nav-link">Projects</a>
        <a href="#contact" class="nav-link">Contact</a>
    </div>

</nav>

    <!-- Page Content -->
    <div class="pt-20">
        @yield('content')
    </div>

</body>
</html>