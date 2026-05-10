@extends('layout.guest')
@section('content')
    {{-- hero section --}}
    <section class="">

        <div class="relative mb-6 mx-auto" style="max-width:150px">
            <svg class="absolute -top-4 -right-5 w-6 h-6 text-burgundy/40" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round">
                <path d="M12 2v4M18.36 5.64l-2.83 2.83" />
            </svg>
            <svg class="absolute -bottom-4 -left-6 w-8 h-8 text-burgundy/40" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round">
                <path d="M5.64 18.36l2.83-2.83M2 12h4" />
            </svg>

            <div class="border border-gray-300 text-gray-800 rounded-full px-6 py-1.5 text-sm font-medium bg-white text-center">
                Hello!
            </div>
        </div>

        <h1 class="text-4xl sm:text-5xl md:text-7xl lg:text-[5rem] text-center leading-tight tracking-tight mb-8 md:mb-2 text-gray-900">
            I'm <span class="text-burgundy font-semibold">Triza</span>,<br>
            <span class="font-bold">Real Estate Consultant</span>
        </h1>
        <div class="w-full max-w-7xl mx-auto mt-8 lg:grid lg:grid-cols-[1fr_auto_1fr] lg:gap-16 items-center">

            <!-- LEFT TEXT -->
            <div class="hidden lg:block max-w-sm justify-self-end pr-6">
                <div class="text-burgundy text-6xl font-serif leading-none mb-2">“</div>
                <p class="text-base text-gray-700 font-medium leading-relaxed">
                    Triza's exceptional real estate guidance ensured our property's success.
                    <span class="font-bold text-gray-900 mt-2 block">
                        Highly Recommended
                    </span>
                </p>
            </div>

            <!-- CENTER IMAGE -->
            <div class="relative flex justify-center group cursor-pointer">

                <div
                    class="absolute bottom-0 w-[320px] h-[320px] md:w-[600px] md:h-[600px] bg-burgundy/10 md:bg-burgundy/5 rounded-t-full rounded-b-[3rem] -z-20 overflow-hidden transition-all duration-500 group-hover:bg-burgundy/10">
                </div>

                <div
                    class="absolute bottom-0 w-[300px] h-[300px] md:w-[500px] md:h-[500px] bg-burgundy rounded-t-full rounded-b-3xl -z-10 transition-all duration-500 ease-in-out">
                </div>

                <img src="{{asset('/images/consultant.png')}}"
                    alt="Real Estate Consultant"
                    class="w-72 md:w-[40rem] h-auto object-contain z-10 drop-shadow-2xl rounded-b-3xl" />

                <!-- BUTTONS -->
                <div
                    class="absolute bottom-8 z-20 bg-white/30 backdrop-blur-md border border-white/40 rounded-full p-1.5 flex items-center shadow-xl w-max transition-transform hover:scale-105">
                    <a href="#"
                        class="bg-burgundy text-white px-8 py-3.5 rounded-full font-medium flex items-center space-x-2 shadow-md hover:bg-[#600018]">
                        <span>Portfolio</span>
                    </a>
                    <a href="#" class="px-8 py-3.5 rounded-full font-medium text-white hover:bg-white/20">
                        Hire me
                    </a>
                </div>
            </div>

            <!-- RIGHT TEXT -->
            <div class="hidden lg:block max-w-sm pl-6">
                <div class="flex space-x-1 justify-end text-burgundy mb-3">
                    <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                        <path
                            d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                    </svg>
                    <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                        <path
                            d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                    </svg>
                    <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                        <path
                            d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                    </svg>
                    <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                        <path
                            d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                    </svg>
                    <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                        <path
                            d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                    </svg>
                </div>
                <h3
                    class="text-[2.5rem] leading-none font-bold text-gray-900 group-hover:text-burgundy transition-colors duration-300 flex items-center justify-end">
                    10 Years
                </h3>
                <p class="text-base text-gray-600 font-medium mt-1 flex items-center justify-end text-right">
                    Experience
                </p>
            </div>

        </div>

    </section>
    {{-- services section --}}
    <section
        class="relative py-24 px-6 overflow-hidden min-h-screen flex items-center bg-[#050505] font-sans antialiased selection:bg-burgundy selection:text-white mt-8">

        <div
            class="absolute top-0 left-1/4 w-[30rem] h-[30rem] bg-burgundy/20 rounded-full mix-blend-screen filter blur-[128px] opacity-60 pointer-events-none">
        </div>
        <div
            class="absolute bottom-0 right-1/4 w-[30rem] h-[30rem] bg-burgundy/15 rounded-full mix-blend-screen filter blur-[128px] opacity-60 pointer-events-none">
        </div>

        <div class="mx-auto w-full relative z-10">

            <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-16 space-y-6 md:space-y-0">
                <h2 class="text-5xl md:text-6xl font-bold text-white tracking-tight">
                    My <span class="text-burgundy">Services</span>
                </h2>
                <p class="max-w-md text-gray-400 text-sm md:text-base leading-relaxed md:text-right font-medium">
                    Providing expert guidance, comprehensive market analysis, and strategic solutions to maximize your real
                    estate portfolio.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <div
                    class="group relative bg-white/[0.03] border border-white/10 rounded-[2.5rem] p-6 hover:bg-white/[0.06] transition-all duration-500 cursor-pointer backdrop-blur-md">
                    <h3 class="text-2xl font-semibold text-white mb-6 px-2">Property Valuation</h3>

                    <div class="relative rounded-3xl overflow-hidden aspect-[4/3] bg-gray-800/50">
                        <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?q=80&w=800&auto=format&fit=crop"
                            alt="Property Valuation"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 opacity-80 group-hover:opacity-100">
                    </div>

                    <div
                        class="absolute bottom-8 right-8 bg-[#111] border border-white/10 w-14 h-14 rounded-full flex items-center justify-center group-hover:bg-burgundy group-hover:border-burgundy transition-all duration-300 shadow-2xl z-20">
                        <svg class="w-6 h-6 text-white transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                d="M5 19L19 5M19 5v10M19 5H9"></path>
                        </svg>
                    </div>
                </div>

                <div
                    class="group relative bg-white/[0.06] border border-white/20 rounded-[2.5rem] p-6 transition-all duration-500 cursor-pointer backdrop-blur-md transform md:-translate-y-2 shadow-[0_0_40px_rgba(128,0,32,0.15)]">
                    <h3 class="text-2xl font-semibold text-white mb-6 px-2">Investment Strategy</h3>

                    <div class="relative rounded-3xl overflow-hidden aspect-[4/3] bg-gray-800/50">
                        <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=800&auto=format&fit=crop"
                            alt="Investment Strategy"
                            class="w-full h-full object-cover transition-transform duration-700 scale-105 group-hover:scale-110 opacity-100">
                    </div>

                    <div
                        class="absolute bottom-8 right-8 bg-burgundy border border-burgundy w-14 h-14 rounded-full flex items-center justify-center shadow-2xl z-20">
                        <svg class="w-6 h-6 text-white transform translate-x-0.5 -translate-y-0.5" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                d="M5 19L19 5M19 5v10M19 5H9"></path>
                        </svg>
                    </div>
                </div>

                <div
                    class="group relative bg-white/[0.03] border border-white/10 rounded-[2.5rem] p-6 hover:bg-white/[0.06] transition-all duration-500 cursor-pointer backdrop-blur-md">
                    <h3 class="text-2xl font-semibold text-white mb-6 px-2">Market Analysis</h3>

                    <div class="relative rounded-3xl overflow-hidden aspect-[4/3] bg-gray-800/50">
                        <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?q=80&w=800&auto=format&fit=crop"
                            alt="Market Analysis"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 opacity-80 group-hover:opacity-100">
                    </div>

                    <div
                        class="absolute bottom-8 right-8 bg-[#111] border border-white/10 w-14 h-14 rounded-full flex items-center justify-center group-hover:bg-burgundy group-hover:border-burgundy transition-all duration-300 shadow-2xl z-20">
                        <svg class="w-6 h-6 text-white transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                d="M5 19L19 5M19 5v10M19 5H9"></path>
                        </svg>
                    </div>
                </div>

            </div>

            <div class="flex justify-center items-center space-x-2.5 mt-14">
                <button
                    class="w-2.5 h-2.5 rounded-full bg-white/20 hover:bg-white/40 transition-colors focus:outline-none"></button>
                <button class="w-10 h-2.5 rounded-full bg-burgundy transition-colors focus:outline-none"></button>
                <button
                    class="w-2.5 h-2.5 rounded-full bg-white/20 hover:bg-white/40 transition-colors focus:outline-none"></button>
                <button
                    class="w-2.5 h-2.5 rounded-full bg-white/20 hover:bg-white/40 transition-colors focus:outline-none"></button>
            </div>

        </div>
    </section>
    <section class="py-24 px-6 max-w-6xl mx-auto">
        <h2 class="text-4xl md:text-5xl font-bold text-center mb-20 text-gray-900">
            My <span class="text-burgundy">Work Experience</span>
        </h2>

        <div class="relative max-w-4xl mx-auto">
            <div
                class="absolute left-1/2 transform -translate-x-1/2 h-full border-l-2 border-dashed border-gray-300 hidden md:block z-0">
            </div>
            <div class="absolute left-[19px] top-2 h-full border-l-2 border-dashed border-gray-300 md:hidden z-0"></div>

            <div class="relative flex flex-col md:flex-row items-start md:items-center w-full mb-16 group">
                <div class="md:hidden pl-12 mb-2">
                    <h3 class="text-xl font-bold text-gray-900">Triza Kenya</h3>
                    <p class="text-sm text-gray-500 font-medium">Early 2026 - Present</p>
                </div>

                <div class="hidden md:block md:w-1/2 md:pr-16 text-right">
                    <h3 class="text-2xl font-bold text-gray-900 group-hover:text-burgundy transition-colors duration-300">
                        Triza Kenya</h3>
                    <p class="text-gray-500 font-medium mt-1">Jan 2026 - Present</p>
                </div>

                <div
                    class="absolute left-0 md:left-1/2 transform md:-translate-x-1/2 w-10 h-10 rounded-full bg-white border-dotted-custom flex items-center justify-center z-10 transition-all duration-300 group-hover:border-burgundy">
                    <div class="w-4 h-4 bg-gray-800 rounded-full group-hover:bg-burgundy transition-colors duration-300">
                    </div>
                </div>

                <div class="w-full pl-12 md:pl-0 md:w-1/2 md:pl-16">
                    <h4 class="text-2xl font-bold text-gray-900">Project Lead & Consultant</h4>
                    <p class="text-gray-600 mt-3 leading-relaxed text-sm md:text-base">
                        Spearheading the development and market positioning of a comprehensive real estate marketplace.
                        Directing branding strategy, UI/UX conceptualization, and strategic market entry.
                    </p>
                </div>
            </div>

            <div class="relative flex flex-col md:flex-row items-start md:items-center w-full mb-16 group">
                <div class="md:hidden pl-12 mb-2">
                    <h3 class="text-xl font-bold text-gray-900">kenyaproperty.co.ke</h3>
                    <p class="text-sm text-gray-500 font-medium">Late 2025</p>
                </div>

                <div class="hidden md:block w-full md:w-1/2 md:pr-16 text-right">
                    <h4 class="text-2xl font-bold text-gray-900">Property Listings Manager</h4>
                    <p class="text-gray-600 mt-3 leading-relaxed text-sm md:text-base">
                        Managed high-value property portfolios across multiple platforms including BuyRent Kenya. Optimized
                        listing visibility and integrated digital solutions to streamline client acquisitions.
                    </p>
                </div>

                <div
                    class="absolute left-0 md:left-1/2 transform md:-translate-x-1/2 w-10 h-10 rounded-full bg-white border-dotted-custom flex items-center justify-center z-10 transition-all duration-300 group-hover:border-burgundy">
                    <div class="w-4 h-4 bg-gray-800 rounded-full group-hover:bg-burgundy transition-colors duration-300">
                    </div>
                </div>

                <div class="w-full pl-12 md:pl-0 md:w-1/2 md:pl-16 md:text-left text-left">
                    <h3
                        class="hidden md:block text-2xl font-bold text-gray-900 group-hover:text-burgundy transition-colors duration-300">
                        kenyaproperty.co.ke</h3>
                    <p class="hidden md:block text-gray-500 font-medium mt-1">Late 2025</p>

                    <h4 class="md:hidden text-2xl font-bold text-gray-900">Property Listings Manager</h4>
                    <p class="md:hidden text-gray-600 mt-3 leading-relaxed text-sm">
                        Managed high-value property portfolios across multiple platforms including BuyRent Kenya. Optimized
                        listing visibility and integrated digital solutions to streamline client acquisitions.
                    </p>
                </div>
            </div>

            <div class="relative flex flex-col md:flex-row items-start md:items-center w-full group">
                <div class="md:hidden pl-12 mb-2">
                    <h3 class="text-xl font-bold text-gray-900">Ravi Homes</h3>
                    <p class="text-sm text-gray-500 font-medium">Aug 2025 - Present</p>
                </div>

                <div class="hidden md:block md:w-1/2 md:pr-16 text-right">
                    <h3 class="text-2xl font-bold text-gray-900 group-hover:text-burgundy transition-colors duration-300">
                        Ravi Homes</h3>
                    <p class="text-gray-500 font-medium mt-1">Aug 2025 - Present</p>
                </div>

                <div
                    class="absolute left-0 md:left-1/2 transform md:-translate-x-1/2 w-10 h-10 rounded-full bg-white border-dotted-custom flex items-center justify-center z-10 transition-all duration-300 group-hover:border-burgundy">
                    <div class="w-4 h-4 bg-burgundy rounded-full group-hover:scale-125 transition-transform duration-300">
                    </div>
                </div>

                <div class="w-full pl-12 md:pl-0 md:w-1/2 md:pl-16">
                    <h4 class="text-2xl font-bold text-gray-900">IT & Real Estate Intern</h4>
                    <p class="text-gray-600 mt-3 leading-relaxed text-sm md:text-base">
                        Bridged the gap between technology and real estate by implementing IT solutions within the agency.
                        Developed motion graphics and digital assets to enhance property marketing campaigns.
                    </p>
                </div>
            </div>
        </div>
    </section>
{{-- why hire me --}}
    <section class="py-16 px-4 md:px-8">
        <div
            class="max-w-7xl mx-auto bg-[#f8f9fa] rounded-[2.5rem] md:rounded-[4rem] p-8 md:p-16 flex flex-col lg:flex-row items-center gap-12 lg:gap-24 transition-all duration-500 hover:shadow-xl">

            <div class="w-full lg:w-5/12 flex justify-center relative">
                <div
                    class="absolute bottom-0 w-64 md:w-80 h-72 md:h-96 bg-burgundy/80 rounded-[3rem] md:rounded-[4rem]  transform -rotate-6 transition-transform duration-500 hover:rotate-0">
                </div>

                <img src="{{asset('/images/consultant.jpeg')}}"
                    alt="Professional Consultant"
                    class="w-64 md:w-80 h-auto object-cover rounded-[2.5rem] md:rounded-[3.5rem] shadow-2xl z-10 animate-float">
            </div>

            <div class="w-full lg:w-7/12 text-center lg:text-left">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    Why <span class="text-burgundy">Hire me</span>?
                </h2>
                <p class="text-gray-600 text-lg leading-relaxed mb-10 max-w-2xl mx-auto lg:mx-0">
                    Combining robust technical expertise with an in-depth understanding of the real estate market, I deliver
                    data-driven strategies and impactful digital solutions that elevate property portfolios and close deals
                    efficiently.
                </p>

                <div class="grid grid-cols-2 gap-8 mb-10 max-w-md mx-auto lg:mx-0">
                    <div class="group">
                        <h3
                            class="text-4xl font-extrabold text-gray-900 group-hover:text-burgundy transition-colors duration-300 mb-2">
                            120+</h3>
                        <p class="text-sm font-medium text-gray-500 uppercase tracking-wider">Properties Managed</p>
                    </div>
                    <div class="group">
                        <h3
                            class="text-4xl font-extrabold text-gray-900 group-hover:text-burgundy transition-colors duration-300 mb-2">
                            98%</h3>
                        <p class="text-sm font-medium text-gray-500 uppercase tracking-wider">Client Satisfaction</p>
                    </div>
                </div>

                <a href="#"
                    class="inline-block border-2 border-gray-900 text-gray-900 font-semibold px-10 py-4 rounded-full text-lg transition-all duration-300 hover:bg-burgundy hover:text-white hover:border-burgundy hover:shadow-[0_8px_30px_rgba(128,0,32,0.3)] hover:-translate-y-1">
                    Hire me
                </a>
            </div>
        </div>
    </section>

    {{-- testimonials section --}}

    <section class="w-full relative py-20 bg-[#0a0a0a] md:py-24 overflow-x-clip shadow-2xl" style="max-width: 100vw">

        {{-- background effects --}}
        <div class="absolute inset-0 overflow-hidden pointer-events-none z-0">
            <div class="absolute -top-[20%] -left-[10%] w-[50%] h-[50%] rounded-full bg-burgundy/10 blur-[100px]"></div>
            <div class="absolute top-[60%] -right-[10%] w-[60%] h-[60%] rounded-full bg-white/5 blur-[120px]"></div>

            <svg class="absolute top-20 right-[20%] w-6 h-6 text-white/30" fill="currentColor"
                viewBox="0 0 24 24">
                <path d="M12 2l2.4 7.4h7.6l-6 4.6 2.3 7.4-6.3-4.8-6.3 4.8 2.3-7.4-6-4.6h7.6z" />
            </svg>

            <svg class="absolute bottom-40 left-[15%] w-8 h-8 text-white/20 -rotate-12"
                fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2l2.4 7.4h7.6l-6 4.6 2.3 7.4-6.3-4.8-6.3 4.8 2.3-7.4-6-4.6h7.6z" />
            </svg>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 md:px-6">

            {{-- heading --}}
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-white leading-tight mb-6">
                    Testimonials That <br>
                    Speak to
                    <span class="text-burgundy relative inline-block">
                        My Results
                        <svg class="absolute -top-6 -right-6 w-8 h-8 text-white"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round">
                            <path d="M5 12c4-4 8-4 14 0 M15 5l4 7-7 4" />
                        </svg>
                    </span>
                </h2>

                <p class="text-gray-400 max-w-2xl mx-auto text-sm md:text-base leading-relaxed">
                    Don't just take my word for it. Here is what industry leaders and clients
                    have to say about my approach to real estate consulting and digital strategy.
                </p>
            </div>

            {{-- cards --}}
            <div class="overflow-hidden">
                <div class="flex md:grid md:grid-cols-3 gap-4 md:gap-8 overflow-x-auto overscroll-x-contain snap-x snap-mandatory px-0 md:px-0 pb-4">

                    {{-- Card 1 --}}
                    <div
                        class="min-w-[82vw] sm:min-w-[70%] md:min-w-0 snap-center bg-white/[0.04] border border-white/10 rounded-3xl p-8 backdrop-blur-md relative group hover:bg-white/[0.08] hover:-translate-y-2 transition-all duration-500">

                        <div
                            class="absolute top-4 right-6 text-8xl font-serif text-white/[0.03] group-hover:text-burgundy/10 transition-colors">
                            ”
                        </div>

                        <div class="flex items-center gap-4 mb-6">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=200&auto=format&fit=crop"
                                alt="Client"
                                class="w-14 h-14 rounded-full object-cover border-2 border-white/20">

                            <div>
                                <h4 class="text-white font-bold text-lg">Marcus N.</h4>
                                <p class="text-gray-400 text-sm">Director, Ravi Homes</p>
                            </div>
                        </div>

                        <div class="flex text-burgundy mb-4 space-x-1">
                            @for ($i = 0; $i < 5; $i++)
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                                </svg>
                            @endfor
                            <span class="text-white font-bold ml-2">5.0</span>
                        </div>

                        <p class="text-gray-300 text-sm md:text-base leading-relaxed">
                            "The technical insight and market knowledge brought to our digital
                            campaigns were unparalleled."
                        </p>
                    </div>


                    {{-- Card 2 --}}
                    <div
                        class="min-w-[82vw] sm:min-w-[70%] md:min-w-0 snap-center bg-white/[0.04] border border-white/10 rounded-3xl p-8 backdrop-blur-md relative group hover:bg-white/[0.08] hover:-translate-y-2 transition-all duration-500">

                        <div
                            class="absolute top-4 right-6 text-8xl font-serif text-white/[0.03] group-hover:text-burgundy/10 transition-colors">
                            ”
                        </div>

                        <div class="flex items-center gap-4 mb-6">
                            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=200&auto=format&fit=crop"
                                alt="Client"
                                class="w-14 h-14 rounded-full object-cover border-2 border-white/20">

                            <div>
                                <h4 class="text-white font-bold text-lg">Sarah K.</h4>
                                <p class="text-gray-400 text-sm">Founder, Palmate Academy</p>
                            </div>
                        </div>

                        <div class="flex text-burgundy mb-4 space-x-1">
                            @for ($i = 0; $i < 5; $i++)
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                                </svg>
                            @endfor
                            <span class="text-white font-bold ml-2">5.0</span>
                        </div>

                        <p class="text-gray-300 text-sm md:text-base leading-relaxed">
                            "A rare blend of high-end design skills and strategic execution."
                        </p>
                    </div>


                    {{-- Card 3 --}}
                    <div
                        class="min-w-[82vw] sm:min-w-[70%] md:min-w-0 snap-center bg-white/[0.04] border border-white/10 rounded-3xl p-8 backdrop-blur-md relative group hover:bg-white/[0.08] hover:-translate-y-2 transition-all duration-500">

                        <div
                            class="absolute top-4 right-6 text-8xl font-serif text-white/[0.03] group-hover:text-burgundy/10 transition-colors">
                            ”
                        </div>

                        <div class="flex items-center gap-4 mb-6">
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?q=80&w=200&auto=format&fit=crop"
                                alt="Client"
                                class="w-14 h-14 rounded-full object-cover border-2 border-white/20">

                            <div>
                                <h4 class="text-white font-bold text-lg">David O.</h4>
                                <p class="text-gray-400 text-sm">Investor</p>
                            </div>
                        </div>

                        <div class="flex text-burgundy mb-4 space-x-1">
                            @for ($i = 0; $i < 5; $i++)
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                                </svg>
                            @endfor
                            <span class="text-white font-bold ml-2">5.0</span>
                        </div>

                        <p class="text-gray-300 text-sm md:text-base leading-relaxed">
                            "Excellent work structuring listings and improving our conversion rates."
                        </p>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <section class="py-20 px-6 max-w-7xl mx-auto">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-12 gap-6">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-800 leading-tight">
                From my<br>market insights
            </h2>
            <a href="#"
                class="bg-burgundy hover:bg-[#600018] text-white px-8 py-3 rounded-full font-semibold transition-colors duration-300 shadow-md">
                See All
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

            <a href="#" class="group block">
                <div class="relative mb-6">
                    <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?q=80&w=800&auto=format&fit=crop"
                        alt="Real Estate Interior"
                        class="w-full h-80 object-cover rounded-[2.5rem] transition-transform duration-700 group-hover:scale-[1.02]">
                    <div
                        class="absolute -bottom-4 -right-4 w-20 h-20 bg-burgundy rounded-full border-[6px] border-white flex items-center justify-center transform group-hover:-translate-y-2 group-hover:-translate-x-2 transition-all duration-300 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 19L19 5M19 5v10M19 5H9"></path>
                        </svg>
                    </div>
                </div>
                <div class="flex items-center gap-3 mb-4">
                    <span class="bg-gray-100 text-gray-700 px-4 py-1.5 rounded-full text-sm font-semibold">Market
                        Trends</span>
                </div>
                <div class="flex items-center gap-4 text-sm text-gray-500 font-medium mb-3">
                    <div class="flex items-center gap-1.5">
                        <span class="w-1.5 h-1.5 rounded-full bg-burgundy"></span> Triza
                    </div>
                    <div class="flex items-center gap-1.5">
                        <span class="w-1.5 h-1.5 rounded-full bg-burgundy"></span> 10 Nov, 2025
                    </div>
                </div>
                <h3
                    class="text-2xl font-bold text-gray-800 leading-snug group-hover:text-burgundy transition-colors duration-300">
                    Nairobi Real Estate: Behind the Scenes of Market Surges
                </h3>
            </a>

            <a href="#" class="group block">
                <div class="relative mb-6">
                    <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?q=80&w=800&auto=format&fit=crop"
                        alt="Property Investment"
                        class="w-full h-80 object-cover rounded-[2.5rem] transition-transform duration-700 group-hover:scale-[1.02]">
                    <div
                        class="absolute -bottom-4 -right-4 w-20 h-20 bg-[#111] group-hover:bg-burgundy rounded-full border-[6px] border-white flex items-center justify-center transform group-hover:-translate-y-2 group-hover:-translate-x-2 transition-all duration-300 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 19L19 5M19 5v10M19 5H9"></path>
                        </svg>
                    </div>
                </div>
                <div class="flex items-center gap-3 mb-4">
                    <span
                        class="bg-gray-100 text-gray-700 px-4 py-1.5 rounded-full text-sm font-semibold">Investment</span>
                </div>
                <div class="flex items-center gap-4 text-sm text-gray-500 font-medium mb-3">
                    <div class="flex items-center gap-1.5">
                        <span class="w-1.5 h-1.5 rounded-full bg-burgundy"></span> Triza
                    </div>
                    <div class="flex items-center gap-1.5">
                        <span class="w-1.5 h-1.5 rounded-full bg-burgundy"></span> 09 Oct, 2025
                    </div>
                </div>
                <h3
                    class="text-2xl font-bold text-gray-800 leading-snug group-hover:text-burgundy transition-colors duration-300">
                    Triza: Property Management System for Urban Areas.
                </h3>
            </a>

            <a href="#" class="group block hidden lg:block">
                <div class="relative mb-6">
                    <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?q=80&w=800&auto=format&fit=crop"
                        alt="Luxury Home"
                        class="w-full h-80 object-cover rounded-[2.5rem] transition-transform duration-700 group-hover:scale-[1.02]">
                    <div
                        class="absolute -bottom-4 -right-4 w-20 h-20 bg-[#111] group-hover:bg-burgundy rounded-full border-[6px] border-white flex items-center justify-center transform group-hover:-translate-y-2 group-hover:-translate-x-2 transition-all duration-300 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 19L19 5M19 5v10M19 5H9"></path>
                        </svg>
                    </div>
                </div>
                <div class="flex items-center gap-3 mb-4">
                    <span class="bg-gray-100 text-gray-700 px-4 py-1.5 rounded-full text-sm font-semibold">Buying
                        Guide</span>
                </div>
                <div class="flex items-center gap-4 text-sm text-gray-500 font-medium mb-3">
                    <div class="flex items-center gap-1.5">
                        <span class="w-1.5 h-1.5 rounded-full bg-burgundy"></span> Triza
                    </div>
                    <div class="flex items-center gap-1.5">
                        <span class="w-1.5 h-1.5 rounded-full bg-burgundy"></span> 13 Aug, 2025
                    </div>
                </div>
                <h3
                    class="text-2xl font-bold text-gray-800 leading-snug group-hover:text-burgundy transition-colors duration-300">
                    BuyRent Kenya: Innovative ways to list your Digital Portfolio
                </h3>
            </a>

        </div>
    </section>
@endsection
