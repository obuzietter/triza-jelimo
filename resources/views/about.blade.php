@extends('layout.guest')

@section('content')

{{-- HERO --}}
<section class="py-20 px-6 max-w-7xl mx-auto">

    <div class="text-center mb-10">
        <span class="inline-block bg-burgundy/10 text-burgundy px-6 py-2 rounded-full text-sm font-medium">
            About Me
        </span>

        <h1 class="text-4xl md:text-6xl font-bold mt-6 text-gray-900 leading-tight">
            The Story Behind<br>
            <span class="text-burgundy">Triza</span> the Real Estate Consultant
        </h1>

        <p class="max-w-2xl mx-auto mt-6 text-gray-600 text-lg leading-relaxed">
            I don’t just sell properties — I help people make confident, informed, and strategic real estate decisions
            backed by data, design thinking, and deep market understanding.
        </p>
    </div>

</section>


{{-- STORY SECTION --}}
<section class="py-16 px-6 max-w-7xl mx-auto">

    <div class="grid md:grid-cols-2 gap-14 items-center">

        {{-- IMAGE --}}
        <div class="relative">
            <div class="absolute -inset-4 bg-burgundy/10 rounded-[3rem] blur-2xl"></div>

            <img src="{{ asset('/images/consultant.jpeg') }}"
                class="relative rounded-[3rem] shadow-2xl w-full object-cover"
                alt="Triza Real Estate Consultant">

            <div class="absolute bottom-6 left-6 bg-white/80 backdrop-blur-md px-6 py-3 rounded-2xl shadow-lg">
                <p class="text-sm font-semibold text-gray-900">10+ Years Experience</p>
                <p class="text-xs text-gray-600">Real Estate & Digital Strategy</p>
            </div>
        </div>

        {{-- TEXT --}}
        <div>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                A Consultant Who Understands Both <span class="text-burgundy">Property & People</span>
            </h2>

            <p class="text-gray-600 leading-relaxed mb-6">
                My journey in real estate started with a simple observation — most people lose money not because of lack of
                opportunity, but because of lack of guidance. I built my career around changing that narrative.
            </p>

            <p class="text-gray-600 leading-relaxed mb-6">
                Over the years, I’ve worked across property valuation, investment advisory, digital listings, and real estate
                technology integration. This combination allows me to see the market not just as buildings, but as systems
                driven by data, timing, and strategy.
            </p>

            <p class="text-gray-600 leading-relaxed">
                Today, I help clients — from first-time buyers to investors — navigate the market with clarity and confidence.
            </p>

        </div>

    </div>
</section>


{{-- MISSION SECTION --}}
<section class="py-20 px-6 bg-[#0a0a0a] text-white">

    <div class="max-w-6xl mx-auto text-center">

        <h2 class="text-4xl md:text-5xl font-bold mb-6">
            My <span class="text-burgundy">Mission</span>
        </h2>

        <p class="text-gray-300 max-w-3xl mx-auto text-lg leading-relaxed">
            To simplify real estate decisions by combining market intelligence, technology, and transparency —
            ensuring every client makes profitable and informed property choices.
        </p>

        <div class="grid md:grid-cols-3 gap-8 mt-14 text-left">

            <div class="bg-white/5 p-8 rounded-3xl border border-white/10">
                <h3 class="text-xl font-semibold mb-3 text-white">Transparency First</h3>
                <p class="text-gray-400 text-sm leading-relaxed">
                    No hidden details, no confusion — only clear, honest property insights.
                </p>
            </div>

            <div class="bg-white/5 p-8 rounded-3xl border border-white/10">
                <h3 class="text-xl font-semibold mb-3 text-white">Data-Driven Strategy</h3>
                <p class="text-gray-400 text-sm leading-relaxed">
                    Every recommendation is backed by real market trends and analysis.
                </p>
            </div>

            <div class="bg-white/5 p-8 rounded-3xl border border-white/10">
                <h3 class="text-xl font-semibold mb-3 text-white">Client Success</h3>
                <p class="text-gray-400 text-sm leading-relaxed">
                    Your investment success is the true measure of my work.
                </p>
            </div>

        </div>
    </div>

</section>


{{-- PERSONALITY / VALUES --}}
<section class="py-20 px-6 max-w-7xl mx-auto">

    <div class="text-center mb-14">
        <h2 class="text-4xl md:text-5xl font-bold text-gray-900">
            What Defines <span class="text-burgundy">My Work</span>
        </h2>
    </div>

    <div class="grid md:grid-cols-3 gap-8">

        <div class="p-8 rounded-3xl border border-gray-200 hover:shadow-xl transition">
            <h3 class="text-xl font-semibold mb-3">Market Intelligence</h3>
            <p class="text-gray-600 text-sm leading-relaxed">
                Deep understanding of Nairobi’s evolving property landscape and investment patterns.
            </p>
        </div>

        <div class="p-8 rounded-3xl border border-gray-200 hover:shadow-xl transition">
            <h3 class="text-xl font-semibold mb-3">Tech Integration</h3>
            <p class="text-gray-600 text-sm leading-relaxed">
                Leveraging digital tools, listings systems, and automation to improve real estate efficiency.
            </p>
        </div>

        <div class="p-8 rounded-3xl border border-gray-200 hover:shadow-xl transition">
            <h3 class="text-xl font-semibold mb-3">Client Focus</h3>
            <p class="text-gray-600 text-sm leading-relaxed">
                Every decision is guided by what benefits the client’s long-term financial growth.
            </p>
        </div>

    </div>

</section>


{{-- CTA --}}
<section class="py-20 px-6 max-w-7xl mx-auto text-center">

    <div class="bg-[#f8f9fa] rounded-[3rem] p-12 md:p-20">

        <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-6">
            Let’s Build Your <span class="text-burgundy">Real Estate Journey</span>
        </h2>

        <p class="text-gray-600 max-w-2xl mx-auto mb-10">
            Whether you're buying, investing, or planning a property portfolio — I’m here to guide you with clarity and
            strategy.
        </p>

        <a href="#"
            class="inline-block bg-burgundy text-white px-10 py-4 rounded-full font-semibold hover:bg-[#600018] transition">
            Work With Me
        </a>

    </div>

</section>

@endsection