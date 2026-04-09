@extends('layouts.app')

@section('content')

<!-- Hero -->
<section class="h-screen flex flex-col justify-center items-center text-center">

   <h1 data-aos="fade-up" class="text-6xl md:text-7xl font-bold leading-tight">
    Hey, I'm
    <span class="bg-gradient-to-r from-purple-400 to-pink-600 bg-clip-text text-transparent">
        Varun
    </span>
    <span class="inline-block w-[3px] h-[0.85em] bg-purple-400 ml-1 align-middle animate-pulse rounded-sm"></span>
</h1>

    <p data-aos="fade-up" data-aos-delay="200" class="mt-6 text-lg text-gray-400 max-w-xl">
        Laravel Developer passionate about building scalable web applications 
        with clean and efficient code.
    </p>

    <!-- Buttons -->
    <div data-aos="fade-up" data-aos-delay="400" class="mt-8 flex gap-4">
        <a href="#" 
           class="bg-gradient-to-r from-purple-500 to-pink-500 text-white px-6 py-3 rounded-lg font-medium hover:scale-105 transition">
            Download CV
        </a>

        <a href="#contact" 
           class="border border-gray-500 px-6 py-3 rounded-lg hover:bg-white hover:text-black transition">
            Contact Me
        </a>
    </div>

</section>

<div class="h-px bg-gradient-to-r from-transparent via-purple-500 to-transparent my-10"></div>

    <!-- Projects -->
<section id="projects" class="p-20 bg-black text-white">

    <h2 class="text-4xl font-bold text-center 
    bg-gradient-to-r from-purple-400 to-pink-600 bg-clip-text text-transparent pb-1">Projects</h2>

    <div class="grid md:grid-cols-2 gap-10 mt-12">

        <!-- Project 1 -->
        <div data-aos="fade-up" data-aos-delay="100" class="bg-white/5 backdrop-blur-lg border border-white/10 shadow-lg hover:shadow-purple-500/20 p-6 rounded-xl hover:scale-105 transition">

            <h3 class="text-xl font-semibold">Anushka Freight Carrier</h3>

            <p class="text-gray-400 mt-3">
                Logistics management system to handle bookings, consignment records,
                customer records, and delivery operations efficiently.
            </p>

            <!-- Tech Stack -->
            <div class="flex flex-wrap gap-2 mt-4">
                <span class="bg-gray-800 px-3 py-1 text-sm rounded">Core PHP</span>
                <span class="bg-gray-800 px-3 py-1 text-sm rounded">MySQL</span>
                <span class="bg-gray-800 px-3 py-1 text-sm rounded">JavaScript</span>
            </div>

            <!-- Buttons -->
            <div class="mt-6 flex gap-3">
                <a href="#" class="text-sm border px-4 py-2 rounded hover:bg-white hover:text-black transition">
                    GitHub
                </a>
                <a href="#" class="text-sm bg-gradient-to-r from-purple-500 to-pink-500 text-white px-4 py-2 rounded">
                    Live
                </a>
            </div>

        </div>

        <!-- Project 2 -->
        <div data-aos="fade-up" data-aos-delay="200" class="bg-white/5 backdrop-blur-lg border border-white/10 shadow-lg hover:shadow-purple-500/20 p-6 rounded-xl hover:scale-105 transition">

            <h3 class="text-xl font-semibold">Granthaa Land Developers</h3>

            <p class="text-gray-400 mt-3">
                Commission and plot sales management system with booking tracking, 
                advisor hierarchy, commission calculation, and reporting dashboard.
            </p>

            <!-- Tech Stack -->
            <div class="flex flex-wrap gap-2 mt-4">
                <span class="bg-gray-800 px-3 py-1 text-sm rounded">Laravel</span>
                <span class="bg-gray-800 px-3 py-1 text-sm rounded">MySQL</span>
                <span class="bg-gray-800 px-3 py-1 text-sm rounded">REST API</span>
                <span class="bg-gray-800 px-3 py-1 text-sm rounded">JavaScript</span>
            </div>

            <!-- Buttons -->
            <div class="mt-6 flex gap-3">
                <a href="#" class="text-sm border px-4 py-2 rounded hover:bg-white hover:text-black transition">
                    GitHub
                </a>
                <a href="#" class="text-sm bg-gradient-to-r from-purple-500 to-pink-500 text-white px-4 py-2 rounded">
                    Live
                </a>
            </div>

        </div>

    </div>

</section>

<div class="h-px bg-gradient-to-r from-transparent via-purple-500 to-transparent my-10"></div>

<!-- Skills -->
<section id="skills" class="py-24 bg-black text-white">

    <h2 class="text-4xl font-bold text-center mb-16">
        <span class="bg-gradient-to-r from-purple-400 to-pink-600 bg-clip-text text-transparent">
            Skills
        </span>
    </h2>

    <div data-aos="fade-up" class="max-w-5xl mx-auto space-y-12">

        <!-- Backend -->
        <div class="card-hover bg-white/5 backdrop-blur-lg border border-white/10 shadow-lg hover:shadow-purple-500/20/50 p-6 rounded-xl border border-gray-800">
            <h3 class="text-lg font-semibold mb-4 text-gray-300">Backend</h3>

            <div class="flex flex-wrap gap-4">
                <span class="skill">Laravel</span>
                <span class="skill">Core PHP</span>
                <span class="skill">REST API</span>
                <span class="skill">MySQL</span>
            </div>
        </div>

        <!-- Frontend -->
        <div class="card-hover bg-white/5 backdrop-blur-lg border border-white/10 shadow-lg hover:shadow-purple-500/20/50 p-6 rounded-xl border border-gray-800">
            <h3 class="text-lg font-semibold mb-4 text-gray-300">Frontend</h3>

            <div class="flex flex-wrap gap-4">
                <span class="skill">HTML</span>
                <span class="skill">CSS</span>
                <span class="skill">JavaScript</span>
                <span class="skill">Bootstrap</span>
                <span class="skill">Tailwind CSS</span>
            </div>
        </div>

        <!-- Tools -->
        <div class="card-hover bg-white/5 backdrop-blur-lg border border-white/10 shadow-lg hover:shadow-purple-500/20/50 p-6 rounded-xl border border-gray-800">
            <h3 class="text-lg font-semibold mb-4 text-gray-300">Tools</h3>

            <div class="flex flex-wrap gap-4">
                <span class="skill">Git</span>
                <span class="skill">GitHub</span>
                <span class="skill">Postman</span>
                <span class="skill">VS Code</span>
            </div>
        </div>

    </div>

</section>

<div class="h-px bg-gradient-to-r from-transparent via-purple-500 to-transparent my-10"></div>

<!-- Contact -->
<section id="contact" class="py-24 bg-black text-white">

    <h2 class="text-4xl font-bold text-center mb-12">
        <span class="bg-gradient-to-r from-purple-400 to-pink-600 bg-clip-text text-transparent">
            Contact Me
        </span>
    </h2>

    <div data-aos="fade-up" class="max-w-3xl mx-auto text-center">

        <p class="text-gray-400 mb-8">
            Feel free to reach out for opportunities or collaborations.
        </p>

        @if(session('success'))
    <p class="text-green-400 mb-4">{{ session('success') }}</p>
@endif

        <!-- Form -->
        <form action="{{ route('contact.send') }}" method="POST" class="space-y-6">
    @csrf

    <input type="text" name="name" placeholder="Your Name"
        class="w-full p-3 rounded-lg bg-white/5 backdrop-blur-lg border border-white/10 shadow-lg hover:shadow-purple-500/20 border border-gray-700">

    <input type="email" name="email" placeholder="Your Email"
        class="w-full p-3 rounded-lg bg-white/5 backdrop-blur-lg border border-white/10 shadow-lg hover:shadow-purple-500/20 border border-gray-700">

    <textarea name="message" rows="5" placeholder="Your Message"
        class="w-full p-3 rounded-lg bg-white/5 backdrop-blur-lg border border-white/10 shadow-lg hover:shadow-purple-500/20 border border-gray-700"></textarea>

    <button class="bg-gradient-to-r from-purple-500 to-pink-500 text-white px-6 py-3 rounded-lg">
        Send Message
    </button>

</form>

        <!-- Social Links -->
        <div class="flex justify-center gap-6 mt-10 text-gray-400">
            <a href="#" class="hover:text-white">GitHub</a>
            <a href="#" class="hover:text-white">LinkedIn</a>
            <a href="#" class="hover:text-white">Email</a>
        </div>

    </div>

</section>

@endsection