@extends('layouts.app')

@section('content')
    <!-- Hero -->
    <section id="home" class="relative h-screen flex flex-col justify-center items-center text-center overflow-hidden">

        <!-- Glow Background -->
        <div class="absolute w-[500px] h-[500px] bg-purple-500/20 blur-[120px] rounded-full"></div>

        <h1 class="text-6xl md:text-7xl font-bold relative z-10">
            Hey, I'm
            <span class="bg-gradient-to-r from-purple-400 to-pink-600 bg-clip-text text-transparent">
                Varun
            </span>
            <span class="inline-block w-[3px] h-[0.85em] bg-pink-400 ml-1 align-middle animate-pulse rounded-sm"></span>
        </h1>

        <p class="mt-6 text-gray-400 max-w-xl relative z-10">
            Laravel Developer passionate about building scalable web applications.
        </p>

        <div class="flex justify-center mt-12">
            <a href="#about" class="text-white/40 hover:text-white/80 transition duration-300 animate-bounce">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 9l-7 7-7-7" />
                </svg>
            </a>
        </div>

    </section>

    <div class="h-px bg-gradient-to-r from-transparent via-purple-500 to-transparent my-10"></div>

    <section id="about" class="py-32 text-center">

        <div class="max-w-3xl mx-auto">

            <h2 class="text-4xl font-bold mb-6">
                <span class="bg-gradient-to-r from-purple-400 to-pink-600 bg-clip-text text-transparent">
                    About Me
                </span>
            </h2>

            <p class="text-gray-300 leading-relaxed">
                I'm a Backend Developer with experience in building real-world web applications
                using Laravel and Core PHP. I focus on creating scalable systems, clean database
                structures, and efficient backend logic.
            </p>

            <p class="text-gray-400 mt-6 leading-relaxed">
                I have worked on projects like logistics management systems and commission-based
                sales platforms, where I handled backend development, database design, and API integration.
            </p>

        </div>

    </section>

    <div class="h-px bg-gradient-to-r from-transparent via-purple-500 to-transparent my-10"></div>

    <!-- Projects -->
    <section id="projects" class="p-20 bg-black text-white">

        <h2
            class="text-4xl font-bold text-center 
    bg-gradient-to-r from-purple-400 to-pink-600 bg-clip-text text-transparent pb-1">
            Projects</h2>

        <div class="grid md:grid-cols-2 gap-10 mt-12">

            <!-- Project 1 -->
            <div data-aos="fade-up" data-aos-delay="100"
                class="card-hover p-6 rounded-xl backdrop-blur-lg 
     bg-white/5 border border-white/10">

                <h3 class="text-xl font-semibold">Granthaa Land Developers</h3>

                <p class="text-gray-400 mt-3">
                    Commission and plot sales management system with booking tracking,
                    advisor hierarchy, commission calculation, and reporting dashboard.
                </p>

                <!-- Tech Stack -->
                <div class="flex flex-wrap gap-2 mt-4">
                    <span
                        class="bg-white/5 border border-white/10 px-3 py-1 text-xs rounded-md 
hover:bg-purple-500/20 transition">Laravel</span>
                    <span
                        class="bg-white/5 border border-white/10 px-3 py-1 text-xs rounded-md 
hover:bg-purple-500/20 transition">MySQL</span>
                    <span
                        class="bg-white/5 border border-white/10 px-3 py-1 text-xs rounded-md 
hover:bg-purple-500/20 transition">REST
                        API</span>
                    <span
                        class="bg-white/5 border border-white/10 px-3 py-1 text-xs rounded-md 
hover:bg-purple-500/20 transition">JavaScript</span>
                </div>

                <!-- Buttons -->
                <div class="mt-6 flex gap-3">
                    <a href="https://granthaadeveloperpvtltd.com"
                        class="text-sm bg-gradient-to-r from-purple-500 to-pink-500 text-white px-4 py-2 rounded">
                        Live
                    </a>
                </div>

            </div>

            <!-- Project 2 -->
            <div data-aos="fade-up" data-aos-delay="100"
                class="card-hover p-6 rounded-xl backdrop-blur-lg 
     bg-white/5 border border-white/10">

                <h3 class="text-xl font-semibold">Anushka Freight Carrier</h3>

                <p class="text-gray-400 mt-3">
                    Logistics management system to handle bookings, consignment records,
                    customer records, and delivery operations efficiently.
                </p>

                <!-- Tech Stack -->
                <div class="flex flex-wrap gap-2 mt-4">
                    <span
                        class="bg-white/5 border border-white/10 px-3 py-1 text-xs rounded-md 
hover:bg-purple-500/20 transition">Core
                        PHP</span>
                    <span
                        class="bg-white/5 border border-white/10 px-3 py-1 text-xs rounded-md 
hover:bg-purple-500/20 transition">MySQL</span>
                    <span
                        class="bg-white/5 border border-white/10 px-3 py-1 text-xs rounded-md 
hover:bg-purple-500/20 transition">JavaScript</span>
                </div>

                <!-- Buttons -->
                <div class="mt-6 flex gap-3">
                    <a href="https://anushkafreightcarriers.in"
                        class="text-sm bg-gradient-to-r from-purple-500 to-pink-500 text-white px-4 py-2 rounded">
                        Live
                    </a>
                </div>

            </div>

            {{-- Project 3 --}}
            <div data-aos="fade-up" data-aos-delay="100"
                class="card-hover p-6 rounded-xl backdrop-blur-lg 
    bg-white/5 border border-white/10">

                <h3 class="text-xl font-semibold">Balivansh College Website</h3>

                <p class="text-gray-400 mt-3">
                    Developed and redesigned the official college website with focus on responsive UI,
                    improved layout, and better user experience for students and staff.
                </p>

                <!-- Tech Stack -->
                <div class="flex flex-wrap gap-2 mt-4">
                    <span
                        class="bg-white/5 border border-white/10 px-3 py-1 text-xs rounded-md hover:bg-purple-500/20 transition">HTML</span>
                    <span
                        class="bg-white/5 border border-white/10 px-3 py-1 text-xs rounded-md hover:bg-purple-500/20 transition">CSS</span>
                    <span
                        class="bg-white/5 border border-white/10 px-3 py-1 text-xs rounded-md hover:bg-purple-500/20 transition">JavaScript</span>
                    <span
                        class="bg-white/5 border border-white/10 px-3 py-1 text-xs rounded-md hover:bg-purple-500/20 transition">Bootstrap</span>
                </div>

                <!-- Buttons -->
                <div class="mt-6 flex gap-3">
                    <a href="https://bcynhm.org/" target="_blank"
                        class="text-sm bg-gradient-to-r from-purple-500 to-pink-500 text-white px-4 py-2 rounded">
                        Live
                    </a>
                </div>

            </div>

            {{-- Project 4 --}}
            <div data-aos="fade-up" data-aos-delay="100"
                class="card-hover p-6 rounded-xl backdrop-blur-lg 
    bg-white/5 border border-white/10">

                <h3 class="text-xl font-semibold">Chandrapur Police Website</h3>

                <p class="text-gray-400 mt-3">
                    Contributed to the development of a live government website by implementing UI components
                    and improving responsiveness for better accessibility across devices.
                </p>

                <!-- Tech Stack -->
                <div class="flex flex-wrap gap-2 mt-4">
                    <span
                        class="bg-white/5 border border-white/10 px-3 py-1 text-xs rounded-md hover:bg-purple-500/20 transition">HTML</span>
                    <span
                        class="bg-white/5 border border-white/10 px-3 py-1 text-xs rounded-md hover:bg-purple-500/20 transition">CSS</span>
                    <span
                        class="bg-white/5 border border-white/10 px-3 py-1 text-xs rounded-md hover:bg-purple-500/20 transition">JavaScript</span>
                </div>

                <!-- Buttons -->
                <div class="mt-6 flex gap-3">
                    <a href="https://chandrapurpolice.gov.in/" target="_blank"
                        class="text-sm bg-gradient-to-r from-purple-500 to-pink-500 text-white px-4 py-2 rounded">
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
            <div class="card-hover p-6 rounded-xl bg-white/5 backdrop-blur-lg border border-white/10">
                <h3 class="text-lg font-semibold mb-4 text-gray-300 flex justify-center">Backend</h3>

                <div class="flex flex-wrap justify-center gap-4">
                    <span class="skill">Laravel</span>
                    <span class="skill">PHP</span>
                    <span class="skill">MySQL</span>
                </div>
            </div>

            <!-- Frontend -->
            <div class="card-hover p-6 rounded-xl bg-white/5 backdrop-blur-lg border border-white/10">
                <h3 class="text-lg font-semibold mb-4 text-gray-300 flex justify-center">Frontend</h3>

                <div class="flex flex-wrap justify-center gap-4">
                    <span class="skill">HTML</span>
                    <span class="skill">CSS</span>
                    <span class="skill">JavaScript</span>
                    <span class="skill">Bootstrap</span>
                    <span class="skill">Tailwind CSS</span>
                </div>
            </div>

            <!-- Tools -->
            <div class="card-hover p-6 rounded-xl bg-white/5 backdrop-blur-lg border border-white/10">
                <h3 class="text-lg font-semibold mb-4 text-gray-300 flex justify-center">Tools</h3>

                <div class="flex flex-wrap justify-center gap-4">
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

            @if (session('success'))
                <p class="text-green-400 mb-4">{{ session('success') }}</p>
            @endif

            <div class="bg-white/5 backdrop-blur-lg border border-white/10 p-8 rounded-xl">

                <p class="text-gray-300 mb-6">
                    The best way to reach me is via WhatsApp or Email.
                </p>

                <div class="flex flex-col items-center gap-6">

                    <!-- WhatsApp Button -->
                    <a href="https://wa.me/919970575246" target="_blank"
                        class="flex items-center justify-center gap-2 bg-green-500 hover:bg-green-600 text-white px-6 py-3 rounded-lg transition">

                        <!-- WhatsApp SVG -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M20.52 3.48A11.8 11.8 0 0012.05 0C5.5 0 .2 5.3.2 11.85c0 2.1.55 4.15 1.6 5.95L0 24l6.35-1.75a11.82 11.82 0 005.7 1.45h.01c6.55 0 11.85-5.3 11.85-11.85 0-3.17-1.23-6.15-3.4-8.37z" />
                        </svg>

                        Chat on WhatsApp
                    </a>

                    <!-- Email Section -->
                    <div class="text-center">

                        <p class="text-gray-400 text-sm mb-2">
                            Or email me directly at
                        </p>

                        <div class="flex items-center justify-center gap-3">

                            <!-- Email Text -->
                            <span class="text-white font-medium">
                                dangrevarun23@gmail.com
                            </span>

                            <!-- Copy Button -->
                            <button onclick="navigator.clipboard.writeText('dangrevarun23@gmail.com')"
                                class="text-purple-400 hover:text-purple-300 transition text-sm">
                                Copy
                            </button>

                        </div>

                    </div>

                    <!-- Response Time -->
                    <p class="text-gray-500 text-sm">
                        Fast responses — usually within a few hours.
                    </p>

                </div>

            </div>

            <!-- Social Links -->
            <div class="flex justify-center gap-6 mt-10 text-gray-400">
                <a href="https://github.com/Varun-9997" class="hover:text-white">GitHub</a>
                <a href="https://www.linkedin.com/in/varun-dangre-43684837b" target="_blank"
                    class="hover:text-white">LinkedIn</a>
            </div>

        </div>

    </section>
@endsection
