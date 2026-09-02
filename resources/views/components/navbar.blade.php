{{-- TopNavBar --}}
<nav id="main-navbar" class="sticky top-0 z-50 flex justify-between items-center w-full px-5 md:px-16 py-4 bg-bmg-surface border-b-4 border-bmg-secondary transition-shadow duration-300">
    <div class="flex items-center gap-4">
        <a href="{{ route('home') }}" class="flex items-center gap-4">
            <img class="w-12 h-12 object-contain" alt="Berkah Media Gemilang Logo" src="{{ asset('images/bmg-logo.svg') }}" onerror="this.style.display='none'">
            <span class="font-display text-3xl tracking-tighter text-bmg-primary hidden md:block font-black">BMG</span>
        </a>
    </div>

    <div class="hidden md:flex items-center gap-8">
        <a class="nav-link text-label-bold uppercase {{ request()->routeIs('home') ? 'text-bmg-primary border-b-2 border-bmg-primary' : 'text-bmg-on-surface hover:text-bmg-primary' }} hover:underline decoration-4 pb-1 transition-colors" href="{{ route('home') }}">Home</a>
        <a class="nav-link text-label-bold uppercase text-bmg-on-surface hover:text-bmg-primary transition-colors hover:underline decoration-4 pb-1" href="{{ route('home') }}#layanan">Layanan</a>
        <a class="nav-link text-label-bold uppercase text-bmg-on-surface hover:text-bmg-primary transition-colors hover:underline decoration-4 pb-1" href="{{ route('home') }}#tentang">Tentang</a>
        <a class="nav-link text-label-bold uppercase {{ request()->routeIs('portfolio') ? 'text-bmg-primary border-b-2 border-bmg-primary' : 'text-bmg-on-surface hover:text-bmg-primary' }} hover:underline decoration-4 pb-1 transition-colors" href="{{ route('portfolio') }}">Portofolio</a>
        <a class="nav-link text-label-bold uppercase {{ request()->routeIs('contact') ? 'text-bmg-primary border-b-2 border-bmg-primary' : 'text-bmg-on-surface hover:text-bmg-primary' }} hover:underline decoration-4 pb-1 transition-colors" href="{{ route('contact') }}">Contact Us</a>
    </div>

    <a class="hidden md:inline-flex bg-bmg-primary text-bmg-on-primary text-label-bold px-6 py-3 border-2 border-bmg-on-surface neo-shadow-hover items-center justify-center uppercase tracking-wider" href="{{ route('contact') }}">
        Get Started
    </a>

    <button id="mobile-menu-toggle" class="md:hidden text-bmg-on-surface cursor-pointer" aria-label="Toggle menu">
        <span class="material-symbols-outlined" style="font-size: 32px;">menu</span>
    </button>
</nav>
