@extends('layout.guest')

@section('content')

{{-- HERO --}}
<section class="py-20 px-6 max-w-7xl mx-auto text-center">

    <span class="inline-block bg-burgundy/10 text-burgundy px-6 py-2 rounded-full text-sm font-medium">
        Development Projects
    </span>

    <h1 class="text-4xl md:text-6xl font-bold mt-6 text-gray-900 leading-tight">
        Real Estate Meets<br>
        <span class="text-burgundy">Technology & Innovation</span>
    </h1>

    <p class="max-w-2xl mx-auto mt-6 text-gray-600 text-lg leading-relaxed">
        A collection of platforms, systems, and digital solutions I’m building to transform how real estate is managed, marketed, and experienced.
    </p>

</section>


{{-- PROJECT GRID --}}
<section class="py-16 px-6 max-w-7xl mx-auto">

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

        {{-- PROJECT 1 --}}
        <div class="group bg-white rounded-[2.5rem] overflow-hidden border border-gray-200 hover:shadow-2xl transition">

            <div class="relative h-56 overflow-hidden">
                <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?q=80&w=1200&auto=format&fit=crop"
                    class="w-full h-full object-cover group-hover:scale-110 transition duration-700">

                <div class="absolute inset-0 bg-black/20"></div>

                <span class="absolute top-4 left-4 bg-burgundy text-white text-xs px-4 py-1 rounded-full">
                    Ongoing
                </span>
            </div>

            <div class="p-7">

                <h3 class="text-xl font-bold text-gray-900 mb-2">
                    GetMech Real Estate Extension
                </h3>

                <p class="text-sm text-gray-600 leading-relaxed mb-4">
                    A geo-based platform connecting service providers and property owners through real-time location intelligence.
                </p>

                <div class="flex flex-wrap gap-2 text-xs mb-5">
                    <span class="bg-gray-100 px-3 py-1 rounded-full">Laravel</span>
                    <span class="bg-gray-100 px-3 py-1 rounded-full">Firebase</span>
                    <span class="bg-gray-100 px-3 py-1 rounded-full">Maps API</span>
                </div>

                <a href="#" class="text-burgundy font-semibold hover:underline">
                    View Project →
                </a>

            </div>
        </div>


        {{-- PROJECT 2 --}}
        <div class="group bg-white rounded-[2.5rem] overflow-hidden border border-gray-200 hover:shadow-2xl transition">

            <div class="relative h-56 overflow-hidden">
                <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?q=80&w=1200&auto=format&fit=crop"
                    class="w-full h-full object-cover group-hover:scale-110 transition duration-700">

                <div class="absolute inset-0 bg-black/20"></div>

                <span class="absolute top-4 left-4 bg-yellow-500 text-white text-xs px-4 py-1 rounded-full">
                    In Design
                </span>
            </div>

            <div class="p-7">

                <h3 class="text-xl font-bold text-gray-900 mb-2">
                    Triza Property Intelligence System
                </h3>

                <p class="text-sm text-gray-600 leading-relaxed mb-4">
                    A data-driven platform for analyzing property value trends, demand cycles, and investment opportunities.
                </p>

                <div class="flex flex-wrap gap-2 text-xs mb-5">
                    <span class="bg-gray-100 px-3 py-1 rounded-full">Data Analytics</span>
                    <span class="bg-gray-100 px-3 py-1 rounded-full">Dashboard UI</span>
                    <span class="bg-gray-100 px-3 py-1 rounded-full">AI Insights</span>
                </div>

                <a href="#" class="text-burgundy font-semibold hover:underline">
                    Explore Concept →
                </a>

            </div>
        </div>


        {{-- PROJECT 3 --}}
        <div class="group bg-white rounded-[2.5rem] overflow-hidden border border-gray-200 hover:shadow-2xl transition">

            <div class="relative h-56 overflow-hidden">
                <img src="https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?q=80&w=1200&auto=format&fit=crop"
                    class="w-full h-full object-cover group-hover:scale-110 transition duration-700">

                <div class="absolute inset-0 bg-black/20"></div>

                <span class="absolute top-4 left-4 bg-green-600 text-white text-xs px-4 py-1 rounded-full">
                    Live
                </span>
            </div>

            <div class="p-7">

                <h3 class="text-xl font-bold text-gray-900 mb-2">
                    Real Estate Portfolio Website
                </h3>

                <p class="text-sm text-gray-600 leading-relaxed mb-4">
                    A personal branding platform showcasing properties, consulting services, and client success stories.
                </p>

                <div class="flex flex-wrap gap-2 text-xs mb-5">
                    <span class="bg-gray-100 px-3 py-1 rounded-full">Laravel</span>
                    <span class="bg-gray-100 px-3 py-1 rounded-full">Tailwind</span>
                    <span class="bg-gray-100 px-3 py-1 rounded-full">UI/UX</span>
                </div>

                <a href="#" class="text-burgundy font-semibold hover:underline">
                    Visit Site →
                </a>

            </div>
        </div>


        {{-- PROJECT 4 --}}
        <div class="group bg-white rounded-[2.5rem] overflow-hidden border border-gray-200 hover:shadow-2xl transition">

            <div class="relative h-56 overflow-hidden">
                <img src="https://images.unsplash.com/photo-1551135049-8a33b5883817?q=80&w=1200&auto=format&fit=crop"
                    class="w-full h-full object-cover group-hover:scale-110 transition duration-700">

                <div class="absolute inset-0 bg-black/20"></div>

                <span class="absolute top-4 left-4 bg-burgundy text-white text-xs px-4 py-1 rounded-full">
                    Ongoing
                </span>
            </div>

            <div class="p-7">

                <h3 class="text-xl font-bold text-gray-900 mb-2">
                    Smart Listing Optimization Tool
                </h3>

                <p class="text-sm text-gray-600 leading-relaxed mb-4">
                    A system designed to improve property listing visibility through SEO and engagement optimization.
                </p>

                <div class="flex flex-wrap gap-2 text-xs mb-5">
                    <span class="bg-gray-100 px-3 py-1 rounded-full">SEO</span>
                    <span class="bg-gray-100 px-3 py-1 rounded-full">Automation</span>
                    <span class="bg-gray-100 px-3 py-1 rounded-full">APIs</span>
                </div>

                <a href="#" class="text-burgundy font-semibold hover:underline">
                    Learn More →
                </a>

            </div>
        </div>


        {{-- PROJECT 5 --}}
        <div class="group bg-white rounded-[2.5rem] overflow-hidden border border-gray-200 hover:shadow-2xl transition">

            <div class="relative h-56 overflow-hidden">
                <img src="https://images.unsplash.com/photo-1581091870620-4c1a5a1c9a1a?q=80&w=1200&auto=format&fit=crop"
                    class="w-full h-full object-cover group-hover:scale-110 transition duration-700">

                <div class="absolute inset-0 bg-black/20"></div>

                <span class="absolute top-4 left-4 bg-gray-800 text-white text-xs px-4 py-1 rounded-full">
                    Planning
                </span>
            </div>

            <div class="p-7">

                <h3 class="text-xl font-bold text-gray-900 mb-2">
                    Investor Dashboard System
                </h3>

                <p class="text-sm text-gray-600 leading-relaxed mb-4">
                    A centralized dashboard for tracking ROI, rental performance, and property portfolio growth.
                </p>

                <div class="flex flex-wrap gap-2 text-xs mb-5">
                    <span class="bg-gray-100 px-3 py-1 rounded-full">FinTech</span>
                    <span class="bg-gray-100 px-3 py-1 rounded-full">Dashboards</span>
                    <span class="bg-gray-100 px-3 py-1 rounded-full">Analytics</span>
                </div>

                <a href="#" class="text-burgundy font-semibold hover:underline">
                    Preview Idea →
                </a>

            </div>
        </div>

    </div>

</section>


{{-- CTA --}}
<section class="py-20 px-6 max-w-7xl mx-auto text-center">

    <div class="bg-[#0a0a0a] text-white rounded-[3rem] p-12 md:p-20">

        <h2 class="text-3xl md:text-5xl font-bold mb-6">
            Let’s Build the Future of <span class="text-burgundy">Real Estate</span>
        </h2>

        <p class="text-gray-400 max-w-2xl mx-auto mb-10">
            I collaborate on real estate tech systems, digital transformation projects, and innovative property platforms.
        </p>

        <a href="#"
            class="inline-block bg-burgundy text-white px-10 py-4 rounded-full font-semibold hover:bg-[#600018] transition">
            Collaborate With Me
        </a>

    </div>

</section>

@endsection