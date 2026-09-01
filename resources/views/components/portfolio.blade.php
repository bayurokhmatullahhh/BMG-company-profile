{{-- Portfolio Section (Portofolio) --}}
<section id="portofolio" class="w-full py-28 md:py-32 px-5 md:px-16 bg-bmg-inverse-surface text-bmg-on-primary relative overflow-hidden">
    {{-- Background Glow --}}
    <div class="absolute top-0 right-0 w-64 h-64 bg-bmg-primary opacity-20 blur-[100px] rounded-full"></div>
    <div class="absolute bottom-0 left-0 w-48 h-48 bg-bmg-secondary opacity-15 blur-[80px] rounded-full"></div>

    <div class="max-w-[1280px] mx-auto relative z-10">
        {{-- Section Header --}}
        <div class="flex items-center gap-4 mb-12 reveal">
            <div class="w-2 h-12 bg-bmg-secondary"></div>
            <h2 class="text-headline-lg-mobile md:text-headline-lg text-bmg-on-primary uppercase tracking-tight">Portofolio</h2>
        </div>

        {{-- Featured Project: Bandung Festival --}}
        <div class="reveal-scale flex flex-col md:flex-row gap-8 items-center bg-bmg-surface-container-lowest text-bmg-on-surface p-4 border-4 border-bmg-on-surface neo-shadow-red">
            <div class="w-full md:w-1/2 border-2 border-bmg-on-surface overflow-hidden relative group">
                <img class="w-full h-auto object-cover group-hover:scale-105 transition-transform duration-500"
                     alt="Bandung Festival Event Poster - 19-24 Agustus 2026"
                     src="{{ asset('images/portfolio-bandung-festival.jpg') }}"
                     onerror="this.parentElement.innerHTML='<div class=\'w-full h-64 md:h-96 bg-gradient-to-br from-bmg-primary to-bmg-secondary flex items-center justify-center\'><span class=\'font-display text-4xl text-bmg-on-primary font-black uppercase\'>Bandung<br>Festival</span></div>'">
            </div>

            <div class="w-full md:w-1/2 p-4 md:p-8 flex flex-col justify-center">
                <div class="text-label-bold text-bmg-secondary uppercase mb-2">Featured Project</div>
                <h3 class="text-headline-lg-mobile md:text-display-lg uppercase leading-none mb-6">
                    Bandung <br><span class="text-bmg-primary">Festival</span>
                </h3>
                <p class="text-body-lg text-bmg-on-surface-variant mb-8 border-l-4 border-bmg-primary pl-4">
                    Sukses mengeksekusi festival skala kota yang meriah. Mengelola produksi end-to-end, koordinasi talent, dan integrasi brand lokal berskala masif.
                </p>
                <div class="flex flex-wrap gap-2">
                    <span class="text-label-sm bg-bmg-surface text-bmg-on-surface border border-bmg-on-surface px-3 py-1">Event Production</span>
                    <span class="text-label-sm bg-bmg-surface text-bmg-on-surface border border-bmg-on-surface px-3 py-1">Vendor Management</span>
                    <span class="text-label-sm bg-bmg-surface text-bmg-on-surface border border-bmg-on-surface px-3 py-1">Media Buying</span>
                </div>
            </div>
        </div>

        {{-- Stats Bar --}}
        <div class="mt-12 grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="reveal delay-100 bg-bmg-on-surface border-2 border-bmg-surface-dim p-6 text-center">
                <div class="font-display text-3xl md:text-4xl font-black text-bmg-primary" data-counter="50" data-suffix="+">0+</div>
                <div class="text-label-sm text-bmg-surface-dim mt-2 uppercase">Events Executed</div>
            </div>
            <div class="reveal delay-200 bg-bmg-on-surface border-2 border-bmg-surface-dim p-6 text-center">
                <div class="font-display text-3xl md:text-4xl font-black text-bmg-secondary-container" data-counter="100" data-suffix="+">0+</div>
                <div class="text-label-sm text-bmg-surface-dim mt-2 uppercase">Brand Partners</div>
            </div>
            <div class="reveal delay-300 bg-bmg-on-surface border-2 border-bmg-surface-dim p-6 text-center">
                <div class="font-display text-3xl md:text-4xl font-black text-bmg-primary-fixed-dim" data-counter="500" data-suffix="K+">0K+</div>
                <div class="text-label-sm text-bmg-surface-dim mt-2 uppercase">Audience Reached</div>
            </div>
            <div class="reveal delay-400 bg-bmg-on-surface border-2 border-bmg-surface-dim p-6 text-center">
                <div class="font-display text-3xl md:text-4xl font-black text-bmg-on-primary" data-counter="5" data-suffix=" Years">0 Years</div>
                <div class="text-label-sm text-bmg-surface-dim mt-2 uppercase">Experience</div>
            </div>
        </div>
    </div>
</section>
