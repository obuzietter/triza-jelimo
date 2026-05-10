@extends('layout.guest')

@section('content')

{{-- HERO --}}
<section class="py-20 px-6 max-w-7xl mx-auto text-center">

    <span class="inline-block bg-burgundy/10 text-burgundy px-6 py-2 rounded-full text-sm font-medium">
        My Services
    </span>

    <h1 class="text-4xl md:text-6xl font-bold mt-6 text-gray-900 leading-tight">
        Real Estate Services<br>
        Designed for <span class="text-burgundy">Smart Decisions</span>
    </h1>

    <p class="max-w-2xl mx-auto mt-6 text-gray-600 text-lg leading-relaxed">
        I help clients buy, invest, and manage property with clarity, strategy, and data-driven insight — not guesswork.
    </p>

</section>


{{-- CORE SERVICES --}}
<section class="py-16 px-6 max-w-7xl mx-auto">

    <div class="grid md:grid-cols-3 gap-8">

        {{-- SERVICE 1 --}}
        <div class="group bg-white rounded-[2.5rem] overflow-hidden border border-gray-200 hover:shadow-2xl transition">

            <div class="relative h-60 overflow-hidden">
                <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=1000&auto=format&fit=crop"
                    class="w-full h-full object-cover group-hover:scale-110 transition duration-700">

                <div class="absolute inset-0 bg-black/20"></div>
            </div>

            <div class="p-8">
                <h3 class="text-2xl font-bold text-gray-900 mb-3">
                    Property Consultation
                </h3>

                <p class="text-gray-600 text-sm leading-relaxed mb-6">
                    Get expert guidance before you buy or sell. I analyze location, pricing trends, and investment value
                    to ensure you make informed decisions.
                </p>

                <ul class="text-sm text-gray-600 space-y-2 mb-6">
                    <li>• Property evaluation</li>
                    <li>• Buying & selling advisory</li>
                    <li>• Location analysis</li>
                </ul>

                <a href="#" class="text-burgundy font-semibold hover:underline">
                    Learn More →
                </a>
            </div>
        </div>


        {{-- SERVICE 2 (Featured) --}}
        <div class="group bg-[#0a0a0a] text-white rounded-[2.5rem] overflow-hidden shadow-2xl transform md:-translate-y-4">

            <div class="relative h-60 overflow-hidden">
                <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=1000&auto=format&fit=crop"
                    class="w-full h-full object-cover group-hover:scale-110 transition duration-700 opacity-80">

                <div class="absolute inset-0 bg-burgundy/20"></div>
            </div>

            <div class="p-8">
                <h3 class="text-2xl font-bold mb-3">
                    Investment Advisory
                </h3>

                <p class="text-gray-300 text-sm leading-relaxed mb-6">
                    Build wealth through strategic real estate investments backed by market intelligence and long-term
                    growth projections.
                </p>

                <ul class="text-sm text-gray-300 space-y-2 mb-6">
                    <li>• ROI analysis</li>
                    <li>• Portfolio strategy</li>
                    <li>• Risk assessment</li>
                </ul>

                <a href="#" class="text-burgundy font-semibold hover:underline">
                    Explore Strategy →
                </a>
            </div>
        </div>


        {{-- SERVICE 3 --}}
        <div class="group bg-white rounded-[2.5rem] overflow-hidden border border-gray-200 hover:shadow-2xl transition">

            <div class="relative h-60 overflow-hidden">
                <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?q=80&w=1000&auto=format&fit=crop"
                    class="w-full h-full object-cover group-hover:scale-110 transition duration-700">

                <div class="absolute inset-0 bg-black/20"></div>
            </div>

            <div class="p-8">
                <h3 class="text-2xl font-bold text-gray-900 mb-3">
                    Market Analysis
                </h3>

                <p class="text-gray-600 text-sm leading-relaxed mb-6">
                    Understand real estate trends, pricing shifts, and emerging opportunities in Nairobi and beyond.
                </p>

                <ul class="text-sm text-gray-600 space-y-2 mb-6">
                    <li>• Market reports</li>
                    <li>• Pricing trends</li>
                    <li>• Demand forecasting</li>
                </ul>

                <a href="#" class="text-burgundy font-semibold hover:underline">
                    View Insights →
                </a>
            </div>
        </div>

    </div>
</section>


{{-- SECONDARY SERVICES --}}
<section class="py-20 px-6 bg-[#0a0a0a] text-white">

    <div class="max-w-7xl mx-auto text-center mb-14">
        <h2 class="text-4xl md:text-5xl font-bold">
            Specialized <span class="text-burgundy">Solutions</span>
        </h2>
        <p class="text-gray-400 mt-4 max-w-2xl mx-auto">
            Additional services designed for investors, developers, and property owners.
        </p>
    </div>

    <div class="grid md:grid-cols-4 gap-6 max-w-7xl mx-auto">

        <div class="bg-white/5 p-6 rounded-3xl border border-white/10 hover:border-burgundy transition">
            <h3 class="font-semibold mb-2">Property Listing Optimization</h3>
            <p class="text-sm text-gray-400">Improve visibility and conversion of listings.</p>
        </div>

        <div class="bg-white/5 p-6 rounded-3xl border border-white/10 hover:border-burgundy transition">
            <h3 class="font-semibold mb-2">Digital Real Estate Setup</h3>
            <p class="text-sm text-gray-400">Web systems for agents & developers.</p>
        </div>

        <div class="bg-white/5 p-6 rounded-3xl border border-white/10 hover:border-burgundy transition">
            <h3 class="font-semibold mb-2">Investment Portfolio Review</h3>
            <p class="text-sm text-gray-400">Analyze and restructure property assets.</p>
        </div>

        <div class="bg-white/5 p-6 rounded-3xl border border-white/10 hover:border-burgundy transition">
            <h3 class="font-semibold mb-2">Buyer Representation</h3>
            <p class="text-sm text-gray-400">End-to-end support in property acquisition.</p>
        </div>

    </div>
</section>


{{-- PROCESS SECTION --}}
<section class="py-20 px-6 max-w-7xl mx-auto">

    <div class="text-center mb-14">
        <h2 class="text-4xl md:text-5xl font-bold text-gray-900">
            How I <span class="text-burgundy">Work</span>
        </h2>
    </div>

    <div class="grid md:grid-cols-3 gap-10">

        <div class="text-center">
            <div class="w-16 h-16 mx-auto bg-burgundy text-white rounded-full flex items-center justify-center text-xl font-bold mb-4">
                1
            </div>
            <h3 class="text-xl font-semibold mb-2">Discovery</h3>
            <p class="text-gray-600 text-sm">
                Understand your goals, budget, and investment expectations.
            </p>
        </div>

        <div class="text-center">
            <div class="w-16 h-16 mx-auto bg-burgundy text-white rounded-full flex items-center justify-center text-xl font-bold mb-4">
                2
            </div>
            <h3 class="text-xl font-semibold mb-2">Strategy</h3>
            <p class="text-gray-600 text-sm">
                Build a tailored real estate plan backed by data and market insights.
            </p>
        </div>

        <div class="text-center">
            <div class="w-16 h-16 mx-auto bg-burgundy text-white rounded-full flex items-center justify-center text-xl font-bold mb-4">
                3
            </div>
            <h3 class="text-xl font-semibold mb-2">Execution</h3>
            <p class="text-gray-600 text-sm">
                Guide you through buying, investing, or selling with full support.
            </p>
        </div>

    </div>
</section>


{{-- CTA --}}
<section class="py-20 px-6 max-w-7xl mx-auto text-center">

    <div class="bg-[#f8f9fa] rounded-[3rem] p-12 md:p-20">

        <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-6">
            Ready to Make a <span class="text-burgundy">Smart Move?</span>
        </h2>

        <p class="text-gray-600 max-w-2xl mx-auto mb-10">
            Let’s discuss your real estate goals and create a strategy that works for you.
        </p>

        <a href="#"
            class="inline-block bg-burgundy text-white px-10 py-4 rounded-full font-semibold hover:bg-[#600018] transition">
            Book Consultation
        </a>

    </div>

</section>

@endsection