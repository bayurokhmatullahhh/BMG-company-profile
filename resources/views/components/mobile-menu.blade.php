{{-- Mobile Menu Overlay --}}
<div id="mobile-menu" class="mobile-menu fixed inset-0 z-[60] bg-bmg-on-surface/95 md:hidden flex flex-col items-center justify-center">
    <button id="mobile-menu-close" class="absolute top-4 right-5 text-bmg-on-primary cursor-pointer" aria-label="Close menu">
        <span class="material-symbols-outlined" style="font-size: 36px;">close</span>
    </button>

    <div class="flex flex-col items-center gap-8">
        <a class="mobile-nav-link font-display text-2xl text-bmg-on-primary uppercase tracking-wider hover:text-bmg-primary-fixed-dim transition-colors" href="{{ route('home') }}">Home</a>
        <a class="mobile-nav-link font-display text-2xl text-bmg-on-primary uppercase tracking-wider hover:text-bmg-primary-fixed-dim transition-colors" href="{{ route('layanan') }}">Layanan</a>
        <a class="mobile-nav-link font-display text-2xl text-bmg-on-primary uppercase tracking-wider hover:text-bmg-primary-fixed-dim transition-colors" href="{{ route('tentang') }}">Tentang</a>
        <a class="mobile-nav-link font-display text-2xl text-bmg-on-primary uppercase tracking-wider hover:text-bmg-primary-fixed-dim transition-colors" href="{{ route('home') }}#portofolio">Portofolio</a>
        <a class="mobile-nav-link font-display text-2xl text-bmg-on-primary uppercase tracking-wider hover:text-bmg-primary-fixed-dim transition-colors" href="{{ route('home') }}#contact">Contact Us</a>

        <a class="mt-4 bg-bmg-primary text-bmg-on-primary text-label-bold px-8 py-4 border-2 border-bmg-on-primary uppercase tracking-wider" href="{{ route('home') }}#contact">
            Get Started
        </a>
    </div>
</div>
