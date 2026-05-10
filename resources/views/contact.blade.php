@extends('layout.guest')

@section('content')

{{-- HERO --}}
<section class="py-20 px-6 max-w-7xl mx-auto text-center">

    <span class="inline-block bg-burgundy/10 text-burgundy px-6 py-2 rounded-full text-sm font-medium">
        Contact Me
    </span>

    <h1 class="text-4xl md:text-6xl font-bold mt-6 text-gray-900 leading-tight">
        Let’s Talk About Your<br>
        <span class="text-burgundy">Next Property Move</span>
    </h1>

    <p class="max-w-2xl mx-auto mt-6 text-gray-600 text-lg leading-relaxed">
        Whether you're buying, investing, or building a property portfolio — I’ll help you make the right decision with clarity and strategy.
    </p>

</section>


{{-- CONTACT SECTION --}}
<section class="py-16 px-6 max-w-7xl mx-auto">

    <div class="grid lg:grid-cols-2 gap-14 items-start">

        {{-- LEFT: FORM --}}
        <div class="bg-white rounded-[2.5rem] border border-gray-200 p-10 shadow-lg">

            <h2 class="text-2xl font-bold text-gray-900 mb-6">
                Send Me a Message
            </h2>

            <form class="space-y-5">

                <div>
                    <label class="text-sm text-gray-600">Full Name</label>
                    <input type="text"
                        class="w-full mt-2 px-5 py-4 rounded-2xl border border-gray-200 focus:border-burgundy focus:ring-0 outline-none"
                        placeholder="Your name">
                </div>

                <div>
                    <label class="text-sm text-gray-600">Email Address</label>
                    <input type="email"
                        class="w-full mt-2 px-5 py-4 rounded-2xl border border-gray-200 focus:border-burgundy focus:ring-0 outline-none"
                        placeholder="you@example.com">
                </div>

                <div>
                    <label class="text-sm text-gray-600">Phone Number</label>
                    <input type="text"
                        class="w-full mt-2 px-5 py-4 rounded-2xl border border-gray-200 focus:border-burgundy focus:ring-0 outline-none"
                        placeholder="+254...">
                </div>

                <div>
                    <label class="text-sm text-gray-600">What are you looking for?</label>
                    <select
                        class="w-full mt-2 px-5 py-4 rounded-2xl border border-gray-200 focus:border-burgundy focus:ring-0 outline-none">
                        <option>Property Buying Advice</option>
                        <option>Investment Consultation</option>
                        <option>Property Valuation</option>
                        <option>General Inquiry</option>
                    </select>
                </div>

                <div>
                    <label class="text-sm text-gray-600">Message</label>
                    <textarea rows="5"
                        class="w-full mt-2 px-5 py-4 rounded-2xl border border-gray-200 focus:border-burgundy focus:ring-0 outline-none"
                        placeholder="Tell me about your property goals..."></textarea>
                </div>

                <button type="submit"
                    class="w-full bg-burgundy text-white py-4 rounded-2xl font-semibold hover:bg-[#600018] transition shadow-lg">
                    Send Message
                </button>

                <p class="text-xs text-gray-500 text-center mt-4">
                    I typically respond within 24 hours.
                </p>

            </form>

        </div>


        {{-- RIGHT: CONTACT INFO / CTA --}}
        <div class="space-y-8">

            <div class="bg-[#0a0a0a] text-white p-10 rounded-[2.5rem]">

                <h3 class="text-2xl font-bold mb-4">
                    Prefer Direct Contact?
                </h3>

                <p class="text-gray-400 text-sm leading-relaxed mb-6">
                    Reach out instantly through any of the channels below for faster consultation.
                </p>

                <div class="space-y-4 text-sm">

                    <div>
                        <p class="text-gray-400">Phone</p>
                        <p class="font-semibold text-white">+254 XXX XXX XXX</p>
                    </div>

                    <div>
                        <p class="text-gray-400">Email</p>
                        <p class="font-semibold text-white">triza@realestate.co.ke</p>
                    </div>

                    <div>
                        <p class="text-gray-400">Location</p>
                        <p class="font-semibold text-white">Nairobi, Kenya</p>
                    </div>

                </div>

                <a href="#"
                    class="inline-block mt-8 bg-burgundy px-8 py-3 rounded-full font-semibold hover:bg-[#600018] transition">
                    WhatsApp Me
                </a>

            </div>


            {{-- TRUST BLOCK --}}
            <div class="bg-white rounded-[2.5rem] border border-gray-200 p-8">

                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    Why Clients Reach Out
                </h3>

                <ul class="space-y-3 text-sm text-gray-600">
                    <li>✔ Strategic property investment guidance</li>
                    <li>✔ Market pricing clarity before buying</li>
                    <li>✔ High-return property opportunities</li>
                    <li>✔ Portfolio growth planning</li>
                </ul>

            </div>


            {{-- MINI CTA --}}
            <div class="text-center bg-burgundy text-white p-10 rounded-[2.5rem] shadow-xl">

                <h3 class="text-2xl font-bold mb-3">
                    Not Sure Where to Start?
                </h3>

                <p class="text-sm text-white/80 mb-6">
                    Let’s have a quick consultation and map out your options.
                </p>

                <a href="#"
                    class="inline-block bg-white text-burgundy px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition">
                    Book Free Consultation
                </a>

            </div>

        </div>

    </div>

</section>


{{-- FINAL CTA --}}
<section class="py-20 px-6 max-w-7xl mx-auto text-center">

    <h2 class="text-3xl md:text-5xl font-bold text-gray-900">
        Your Next Property Decision<br>
        Starts With a <span class="text-burgundy">Conversation</span>
    </h2>

    <p class="text-gray-600 max-w-2xl mx-auto mt-6 mb-10">
        Don’t leave your investment decisions to guesswork. Get expert insight before you commit.
    </p>

    <a href="#"
        class="inline-block bg-burgundy text-white px-10 py-4 rounded-full font-semibold hover:bg-[#600018] transition">
        Contact Triza Now
    </a>

</section>

@endsection