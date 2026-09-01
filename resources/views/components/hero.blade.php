{{-- Hero Section --}}
<section id="home" class="relative w-full min-h-[80vh] flex items-center justify-center px-5 md:px-16 py-28 md:py-32 overflow-hidden bg-bmg-primary-container">
    {{-- Background Pattern --}}
    <div class="absolute inset-0 bg-pattern"></div>
    <div class="absolute inset-0 bg-gradient-to-br from-bmg-primary-container to-bmg-on-primary-fixed-variant opacity-80"></div>

    {{-- Content --}}
    <div class="relative z-10 w-full max-w-[1280px] mx-auto flex flex-col md:flex-row items-center gap-6">
        {{-- Left: Headline --}}
        <div class="w-full md:w-2/3 flex flex-col items-start gap-6 reveal-left">
            <div class="flex items-center gap-4">
                <div class="w-2 h-16 bg-bmg-on-primary"></div>
                <h1 class="text-headline-lg-mobile md:text-display-lg text-bmg-on-primary tracking-tighter uppercase leading-none">
                    Amplifying <br>
                    <span class="text-bmg-surface-dim">Brands.</span> <br>
                    Igniting <span class="text-bmg-secondary-fixed">Events.</span>
                </h1>
            </div>

            <p class="text-body-lg text-bmg-on-primary max-w-xl border-l-4 border-bmg-secondary-fixed pl-4">
                Berkah Media Gemilang is a high-octane media buying and event production powerhouse. We blend strategic precision with raw energy to dominate your market.
            </p>

            <a class="mt-4 bg-bmg-on-primary text-bmg-primary text-label-bold px-8 py-4 border-2 border-bmg-on-surface neo-shadow-blue neo-shadow-blue-hover text-lg uppercase tracking-wider inline-flex items-center gap-2" href="#contact">
                Mulai Rencanakan Event Anda
                <span class="material-symbols-outlined">arrow_forward</span>
            </a>
        </div>

        {{-- Right: Logo Card --}}
        <div class="w-full md:w-1/3 relative mt-12 md:mt-0 reveal-right">
            <div class="absolute inset-0 bg-bmg-secondary border-2 border-bmg-on-surface neo-shadow translate-x-4 translate-y-4"></div>
            <div class="relative bg-bmg-surface border-2 border-bmg-on-surface p-6 z-10 flex flex-col items-center justify-center aspect-square">
                <img class="w-3/4 object-contain animate-pulse-glow" alt="BMG Logo Large" src="{{ asset('images/bmg-logo-large.svg') }}" onerror="this.parentElement.innerHTML='<span class=\'font-display text-6xl text-bmg-primary font-black\'>BMG</span>'">
                <div class="mt-4 text-label-bold bg-bmg-primary text-bmg-on-primary px-4 py-1 border border-bmg-on-surface uppercase">Est. 2019</div>
            </div>
        </div>
    </div>
</section>
