<!DOCTYPE html>
<html>
<head>
    <title>Portfolio</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-black text-white">

    <!-- Navbar -->
    <nav class="fixed top-0 left-0 w-full bg-black/80 backdrop-blur-md z-50">
        <div class="max-w-6xl mx-auto flex justify-between items-center p-4">

            <!-- Logo -->
            <h1 class="text-xl font-bold">Varun</h1>

            <!-- Links -->
            <div class="space-x-6 hidden md:block">
                <a href="#about" class="hover:text-gray-400">About</a>
                <a href="#projects" class="hover:text-gray-400">Projects</a>
                <a href="#contact" class="hover:text-gray-400">Contact</a>
            </div>

        </div>
    </nav>

    <!-- Page Content -->
    <div class="pt-20">
        @yield('content')
    </div>

</body>
</html>