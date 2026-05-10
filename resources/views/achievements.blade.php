@extends('layout.guest')

@section('content')

{{-- HERO --}}
<section class="py-20 px-6 max-w-7xl mx-auto text-center">

    <span class="inline-block bg-burgundy/10 text-burgundy px-6 py-2 rounded-full text-sm font-medium">
        Achievements
    </span>

    <h1 class="text-4xl md:text-6xl font-bold mt-6 text-gray-900 leading-tight">
        Milestones That Define<br>
        <span class="text-burgundy">My Impact</span>
    </h1>

    <p class="max-w-2xl mx-auto mt-6 text-gray-600 text-lg leading-relaxed">
        A track record built on performance, client success, and real estate transformation across Kenya’s evolving property market.
    </p>

</section>


{{-- STATS --}}
<section class="py-10 px-6 max-w-7xl mx-auto">

    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">

        <div class="p-6 bg-white rounded-3xl border border-gray-200 hover:shadow-xl transition">
            <h3 class="text-4xl font-bold text-burgundy">120+</h3>
            <p class="text-gray-600 text-sm mt-2">Properties Managed</p>
        </div>

        <div class="p-6 bg-white rounded-3xl border border-gray-200 hover:shadow-xl transition">
            <h3 class="text-4xl font-bold text-burgundy">98%</h3>
            <p class="text-gray-600 text-sm mt-2">Client Satisfaction</p>
        </div>

        <div class="p-6 bg-white rounded-3xl border border-gray-200 hover:shadow-xl transition">
            <h3 class="text-4xl font-bold text-burgundy">10+</h3>
            <p class="text-gray-600 text-sm mt-2">Years Experience</p>
        </div>

        <div class="p-6 bg-white rounded-3xl border border-gray-200 hover:shadow-xl transition">
            <h3 class="text-4xl font-bold text-burgundy">50+</h3>
            <p class="text-gray-600 text-sm mt-2">Investment Deals Closed</p>
        </div>

    </div>

</section>


{{-- MAIN ACHIEVEMENTS TIMELINE --}}
<section class="py-20 px-6 max-w-6xl mx-auto">

    <div class="relative">

        {{-- center line --}}
        <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 h-full border-l-2 border-dashed border-gray-300"></div>

        {{-- ITEM 1 --}}
        <div class="mb-16 flex flex-col md:flex-row items-start md:items-center group">

            <div class="md:w-1/2 md:pr-12 text-right hidden md:block">
                <h3 class="text-2xl font-bold text-gray-900 group-hover:text-burgundy transition">Top Property Consultant Recognition</h3>
                <p class="text-gray-600 mt-2 text-sm">2025</p>
                <p class="text-gray-600 mt-4 text-sm leading-relaxed">
                    Recognized for excellence in property advisory and investment consulting across Nairobi’s real estate market.
                </p>
            </div>

            <div class="absolute left-0 md:left-1/2 transform md:-translate-x-1/2 w-10 h-10 bg-white border border-gray-300 rounded-full flex items-center justify-center">
                <div class="w-4 h-4 bg-burgundy rounded-full"></div>
            </div>

            <div class="md:hidden pl-12">
                <h3 class="text-xl font-bold text-gray-900">Top Property Consultant</h3>
                <p class="text-gray-500 text-sm">2025</p>
                <p class="text-gray-600 mt-2 text-sm">
                    Recognized for excellence in advisory and investment consulting.
                </p>
            </div>

        </div>


        {{-- ITEM 2 --}}
        <div class="mb-16 flex flex-col md:flex-row items-start md:items-center group">

            <div class="md:w-1/2 md:pr-12 text-right hidden md:block">
                <h3 class="text-2xl font-bold text-gray-900 group-hover:text-burgundy transition">
                    Digital Real Estate Transformation Lead
                </h3>
                <p class="text-gray-600 mt-2 text-sm">2024</p>
                <p class="text-gray-600 mt-4 text-sm leading-relaxed">
                    Led integration of digital property listing systems, improving visibility and conversion rates for agencies.
                </p>
            </div>

            <div class="absolute left-0 md:left-1/2 transform md:-translate-x-1/2 w-10 h-10 bg-white border border-gray-300 rounded-full flex items-center justify-center">
                <div class="w-4 h-4 bg-burgundy rounded-full"></div>
            </div>

            <div class="md:hidden pl-12">
                <h3 class="text-xl font-bold text-gray-900">Digital Transformation Lead</h3>
                <p class="text-gray-500 text-sm">2024</p>
                <p class="text-gray-600 mt-2 text-sm">
                    Led integration of digital property systems and automation.
                </p>
            </div>

        </div>


        {{-- ITEM 3 --}}
        <div class="mb-16 flex flex-col md:flex-row items-start md:items-center group">

            <div class="md:w-1/2 md:pr-12 text-right hidden md:block">
                <h3 class="text-2xl font-bold text-gray-900 group-hover:text-burgundy transition">
                    100+ Property Listings Optimized
                </h3>
                <p class="text-gray-600 mt-2 text-sm">2023 - 2025</p>
                <p class="text-gray-600 mt-4 text-sm leading-relaxed">
                    Successfully optimized listings across multiple platforms, improving buyer engagement and lead conversion.
                </p>
            </div>

            <div class="absolute left-0 md:left-1/2 transform md:-translate-x-1/2 w-10 h-10 bg-white border border-gray-300 rounded-full flex items-center justify-center">
                <div class="w-4 h-4 bg-burgundy rounded-full"></div>
            </div>

            <div class="md:hidden pl-12">
                <h3 class="text-xl font-bold text-gray-900">Listings Optimized</h3>
                <p class="text-gray-500 text-sm">2023 - 2025</p>
                <p class="text-gray-600 mt-2 text-sm">
                    Improved visibility and conversion across property platforms.
                </p>
            </div>

        </div>


        {{-- ITEM 4 --}}
        <div class="flex flex-col md:flex-row items-start md:items-center group">

            <div class="md:w-1/2 md:pr-12 text-right hidden md:block">
                <h3 class="text-2xl font-bold text-gray-900 group-hover:text-burgundy transition">
                    Real Estate Tech & Strategy Consultant
                </h3>
                <p class="text-gray-600 mt-2 text-sm">2022 - Present</p>
                <p class="text-gray-600 mt-4 text-sm leading-relaxed">
                    Bridging real estate and technology by building systems, tools, and digital strategies for property businesses.
                </p>
            </div>

            <div class="absolute left-0 md:left-1/2 transform md:-translate-x-1/2 w-10 h-10 bg-white border border-gray-300 rounded-full flex items-center justify-center">
                <div class="w-4 h-4 bg-burgundy rounded-full"></div>
            </div>

            <div class="md:hidden pl-12">
                <h3 class="text-xl font-bold text-gray-900">Tech & Strategy Consultant</h3>
                <p class="text-gray-500 text-sm">2022 - Present</p>
                <p class="text-gray-600 mt-2 text-sm">
                    Built digital systems and strategies for real estate businesses.
                </p>
            </div>

        </div>

    </div>

</section>


{{-- HIGHLIGHT SECTION --}}
<section class="py-20 px-6 bg-[#0a0a0a] text-white">

    <div class="max-w-5xl mx-auto text-center">

        <h2 class="text-4xl md:text-5xl font-bold mb-6">
            Built on <span class="text-burgundy">Results</span>
        </h2>

        <p class="text-gray-400 max-w-2xl mx-auto text-lg leading-relaxed">
            Every milestone reflects a commitment to excellence, innovation, and client success in the real estate industry.
        </p>

        <div class="mt-12 grid md:grid-cols-3 gap-6 text-left">

            <div class="bg-white/5 p-6 rounded-3xl border border-white/10">
                <h3 class="font-semibold mb-2">Market Leadership</h3>
                <p class="text-sm text-gray-400">Consistent recognition in property advisory and consulting.</p>
            </div>

            <div class="bg-white/5 p-6 rounded-3xl border border-white/10">
                <h3 class="font-semibold mb-2">Digital Innovation</h3>
                <p class="text-sm text-gray-400">Transforming traditional real estate through technology.</p>
            </div>

            <div class="bg-white/5 p-6 rounded-3xl border border-white/10">
                <h3 class="font-semibold mb-2">Client Impact</h3>
                <p class="text-sm text-gray-400">Helping clients make profitable property decisions.</p>
            </div>

        </div>

    </div>

</section>


{{-- CTA --}}
<section class="py-20 px-6 max-w-7xl mx-auto text-center">

    <div class="bg-[#f8f9fa] rounded-[3rem] p-12 md:p-20">

        <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-6">
            Let’s Create Your Next <span class="text-burgundy">Success Story</span>
        </h2>

        <p class="text-gray-600 max-w-2xl mx-auto mb-10">
            Whether you're investing, buying, or scaling a property portfolio — I can help you make the right move.
        </p>

        <a href="#"
            class="inline-block bg-burgundy text-white px-10 py-4 rounded-full font-semibold hover:bg-[#600018] transition">
            Work With Me
        </a>

    </div>

</section>

@endsection