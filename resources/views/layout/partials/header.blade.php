<header>
    
    <nav
        class="fixed top-4 md:top-8 left-1/2 -translate-x-1/2 w-[95%] max-w-6xl bg-burgundy rounded-full px-2 py-2 flex items-center justify-between z-50 shadow-2xl shadow-burgundy/20">
        <div class="hidden md:flex items-center space-x-2 pl-2">
            <a href="{{ route('home') }}"
                class="{{Request::is('/') ? 'bg-white text-burgundy' : 'text-white/90'}} hover:text-white hover:bg-white/10 px-6 py-2.5 rounded-full font-medium text-sm transition-all">Home</a>
            <a href="{{ route('about') }}"
                class="{{Request::is('about') ? 'bg-white text-burgundy' : 'text-white/90'}} hover:text-white hover:bg-white/10 px-6 py-2.5 rounded-full font-medium text-sm transition-all">About</a>
            <a href="{{ route('services') }}"
                class="{{Request::is('services') ? 'bg-white text-burgundy' : 'text-white/90'}} hover:text-white hover:bg-white/10 px-6 py-2.5 rounded-full font-medium text-sm transition-all">Services</a>
        </div>

        <div class="md:hidden pl-4">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                </path>
            </svg>
        </div>

        <div
            class="flex items-center space-x-3 text-white font-bold text-xl tracking-wide absolute left-1/2 -translate-x-1/2 md:static md:translate-x-0">
            <div class="w-9 h-9 bg-white text-burgundy rounded-full flex items-center justify-center text-sm">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm0 2.5l6 5.5v9h-2v-6H8v6H6v-9l6-5.5z" />
                </svg>
            </div>
            <span>TRIZA JELIMO</span>
        </div>

        <div class="hidden md:flex items-center space-x-2 pr-2 text-white/90">
            <a href="{{ route('achievements') }}"
                class="{{Request::is('achievements') ? 'bg-white text-burgundy' : 'text-white/90'}} hover:text-white hover:bg-white/10 px-6 py-2.5 rounded-full font-medium text-sm transition-all">Achievements</a>
            <a href="{{ route('projects') }}"
                class="{{Request::is('projects') ? 'bg-white text-burgundy' : 'text-white/90'}} hover:text-white hover:bg-white/10 px-6 py-2.5 rounded-full font-medium text-sm transition-all">Projects</a>
            <a href="{{ route('contact') }}"
                class="{{Request::is('contact') ? 'bg-white text-burgundy' : 'text-white/90'}} hover:text-white hover:bg-white/10 px-6 py-2.5 rounded-full font-medium text-sm transition-all">Contact</a>
        </div>
    </nav>
</header>