{{-- Portfolio Section (Portofolio) --}}
<section id="portofolio" class="w-full py-20 md:py-28 px-5 md:px-16 bg-[#fcf9f8] text-bmg-on-surface relative overflow-hidden border-t-4 border-bmg-on-surface">
    {{-- Subtle decorative background elements --}}
    <div class="absolute top-20 right-1/3 w-72 h-32 bg-gray-200/40 rounded-full blur-2xl pointer-events-none"></div>

    <div class="max-w-[1280px] mx-auto relative z-10">

        {{-- Section Header --}}
        <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6 mb-12">
            <div class="flex items-start gap-4">
                <div class="w-2 h-20 md:h-24 bg-bmg-primary mt-1 flex-shrink-0"></div>
                <div>
                    <h2 class="font-display text-5xl md:text-7xl font-black uppercase leading-none tracking-tight text-bmg-on-surface">
                        OUR<br>
                        <span class="text-bmg-primary">PORTOFOLIO</span>
                    </h2>
                </div>
            </div>
            <div class="max-w-md pb-2">
                <p class="text-sm md:text-base text-[#5d3f3c] font-medium leading-relaxed">
                    Karya-karya berani, eksekusi nyentrik, dan hasil yang tak terbantahkan. Lihat bagaimana kami menghidupkan visi menjadi realita.
                </p>
            </div>
        </div>

        {{-- Filter Tabs --}}
        <div class="mb-10">
            <div class="flex flex-wrap items-center gap-3" id="portfolio-filters">
                <button type="button" data-filter="all"
                    class="portfolio-filter-btn active px-6 py-2.5 text-xs md:text-sm font-black uppercase tracking-wider border-2 border-bmg-on-surface bg-[#bd001a] text-white shadow-[3px_3px_0px_#1c1b1b] transition-all cursor-pointer">
                    ALL PROJECTS
                </button>
                <button type="button" data-filter="event"
                    class="portfolio-filter-btn px-6 py-2.5 text-xs md:text-sm font-black uppercase tracking-wider border-2 border-bmg-on-surface bg-white text-bmg-on-surface shadow-[3px_3px_0px_#1c1b1b] hover:bg-[#bd001a] hover:text-white transition-all cursor-pointer">
                    EVENT
                </button>
                <button type="button" data-filter="media"
                    class="portfolio-filter-btn px-6 py-2.5 text-xs md:text-sm font-black uppercase tracking-wider border-2 border-bmg-on-surface bg-white text-bmg-on-surface shadow-[3px_3px_0px_#1c1b1b] hover:bg-[#bd001a] hover:text-white transition-all cursor-pointer">
                    MEDIA
                </button>
                <button type="button" data-filter="digital"
                    class="portfolio-filter-btn px-6 py-2.5 text-xs md:text-sm font-black uppercase tracking-wider border-2 border-bmg-on-surface bg-white text-bmg-on-surface shadow-[3px_3px_0px_#1c1b1b] hover:bg-[#bd001a] hover:text-white transition-all cursor-pointer">
                    DIGITAL
                </button>
            </div>
        </div>

        {{-- Portfolio Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-12 gap-6" id="portfolio-grid">

            {{-- Card 1: Bandung Festival Liem (Left, larger card) --}}
            <div class="portfolio-item md:col-span-8 border-2 border-bmg-on-surface bg-white shadow-[5px_5px_0px_#bd001a] flex flex-col group transition-all" data-category="event">
                <div class="relative overflow-hidden bg-black aspect-[16/9] border-b-2 border-bmg-on-surface">
                    {{-- Badges --}}
                    <div class="absolute top-4 left-4 z-10 flex items-center gap-2">
                        <span class="bg-white text-bmg-on-surface border border-bmg-on-surface text-[11px] font-black px-2.5 py-0.5 uppercase tracking-wider shadow-[2px_2px_0px_#000]">
                            EVENT
                        </span>
                        <span class="bg-[#3759b3] text-white text-[11px] font-black px-2.5 py-0.5 uppercase tracking-wider shadow-[2px_2px_0px_#000]">
                            2026
                        </span>
                    </div>
                    <img
                        src="{{ asset('images/portfolio-bandung-festival.jpg') }}"
                        alt="Bandung Festival Liem - Atrium Ciwalk Summarecon Mall Bandung"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                        onerror="this.src='https://images.unsplash.com/photo-1511578314322-379afb476865?auto=format&fit=crop&w=1200&q=80'"
                    >
                </div>
                <div class="p-6 md:p-8 flex-1 flex flex-col justify-between">
                    <div>
                        <h3 class="font-display text-2xl md:text-3xl font-black uppercase text-bmg-on-surface mb-3 tracking-tight">
                            Bandung Festival Liem
                        </h3>
                        <p class="text-sm md:text-base text-[#5d3f3c] leading-relaxed mb-6 font-medium">
                            A massive, high-energy cultural and creative festival drawing thousands. Complete event production, branding, and media placement.
                        </p>
                    </div>
                    <div>
                        <a href="javascript:void(0)" class="inline-flex items-center gap-1.5 text-xs font-black uppercase tracking-widest text-[#3759b3] hover:text-[#bd001a] hover:gap-3 transition-all">
                            VIEW DETAILS <span>→</span>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Card 2: Urban Soundscapes (Right, top card) --}}
            <div class="portfolio-item md:col-span-4 border-2 border-bmg-on-surface bg-white shadow-[5px_5px_0px_#1c1b1b] flex flex-col group transition-all" data-category="media">
                <div class="relative overflow-hidden bg-black aspect-[4/3] border-b-2 border-bmg-on-surface">
                    <div class="absolute top-4 left-4 z-10 flex items-center gap-2">
                        <span class="bg-white text-bmg-on-surface border border-bmg-on-surface text-[11px] font-black px-2.5 py-0.5 uppercase tracking-wider shadow-[2px_2px_0px_#000]">
                            MEDIA
                        </span>
                    </div>
                    <img
                        src="{{ asset('images/portfolio-urban-soundscapes.jpg') }}"
                        alt="Urban Soundscapes concert"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                        onerror="this.src='https://images.unsplash.com/photo-1470225620780-dba8ba36b745?auto=format&fit=crop&w=800&q=80'"
                    >
                </div>
                <div class="p-6 flex-1 flex flex-col justify-between">
                    <div>
                        <h3 class="font-display text-xl font-black uppercase text-bmg-on-surface mb-2 tracking-tight">
                            Urban Soundscapes
                        </h3>
                        <p class="text-xs md:text-sm text-[#5d3f3c] leading-relaxed font-medium">
                            Strategic media placement and aggressive digital OOH campaign for the city's largest indie music series.
                        </p>
                    </div>
                </div>
            </div>

            {{-- Card 3: TechXpo Hub (Left, bottom card) --}}
            <div class="portfolio-item md:col-span-4 border-2 border-bmg-on-surface bg-white shadow-[5px_5px_0px_#3759b3] flex flex-col group transition-all" data-category="digital">
                <div class="relative overflow-hidden bg-black aspect-[4/3] border-b-2 border-bmg-on-surface">
                    <div class="absolute top-4 left-4 z-10 flex items-center gap-2">
                        <span class="bg-white text-bmg-on-surface border border-bmg-on-surface text-[11px] font-black px-2.5 py-0.5 uppercase tracking-wider shadow-[2px_2px_0px_#000]">
                            DIGITAL
                        </span>
                    </div>
                    <img
                        src="{{ asset('images/portfolio-techxpo-hub.jpg') }}"
                        alt="TechXpo Hub digital wayfinding platform"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                        onerror="this.src='https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=800&q=80'"
                    >
                </div>
                <div class="p-6 flex-1 flex flex-col justify-between">
                    <div>
                        <h3 class="font-display text-xl font-black uppercase text-bmg-on-surface mb-2 tracking-tight">
                            TechXpo Hub
                        </h3>
                        <p class="text-xs md:text-sm text-[#5d3f3c] leading-relaxed font-medium">
                            Development of an interactive digital wayfinding and engagement platform for a major technology exhibition.
                        </p>
                    </div>
                </div>
            </div>

            {{-- Card 4: NextGen Product Launch (Right, bottom card) --}}
            <div class="portfolio-item md:col-span-8 border-2 border-bmg-on-surface bg-white shadow-[5px_5px_0px_#1c1b1b] flex flex-col relative group transition-all" data-category="event">
                <div class="relative overflow-hidden bg-black aspect-[16/9] border-b-2 border-bmg-on-surface">
                    <div class="absolute top-4 left-4 z-10 flex items-center gap-2">
                        <span class="bg-white text-bmg-on-surface border border-bmg-on-surface text-[11px] font-black px-2.5 py-0.5 uppercase tracking-wider shadow-[2px_2px_0px_#000]">
                            EVENT
                        </span>
                        <span class="bg-[#bd001a] text-white text-[11px] font-black px-2.5 py-0.5 uppercase tracking-wider shadow-[2px_2px_0px_#000]">
                            LAUNCH
                        </span>
                    </div>
                    <img
                        src="{{ asset('images/portfolio-nextgen-launch.jpg') }}"
                        alt="NextGen Product Launch"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                        onerror="this.src='https://images.unsplash.com/photo-1505373877841-8d25f7d46678?auto=format&fit=crop&w=1200&q=80'"
                    >
                </div>
                <div class="p-6 md:p-8 flex-1 flex flex-col justify-between relative pr-20">
                    <div>
                        <h3 class="font-display text-2xl md:text-3xl font-black uppercase text-bmg-on-surface mb-3 tracking-tight">
                            NextGen Product Launch
                        </h3>
                        <p class="text-sm md:text-base text-[#5d3f3c] leading-relaxed font-medium">
                            An unapologetically bold product reveal for a leading tech brand, featuring custom spatial design and immersive media.
                        </p>
                    </div>

                    {{-- Circle Arrow Action Button --}}
                    <div class="absolute bottom-6 right-6 w-11 h-11 rounded-full bg-[#3759b3] border-2 border-bmg-on-surface flex items-center justify-center text-white shadow-[2px_2px_0px_#000] group-hover:bg-[#bd001a] transition-all group-hover:translate-x-1">
                        <span class="material-symbols-outlined text-lg">arrow_forward</span>
                    </div>
                </div>
            </div>

        </div>

        {{-- Load More Projects Button --}}
        <div class="flex justify-center mt-12">
            <button type="button" id="load-more-portfolio"
                class="px-10 py-3.5 border-2 border-bmg-on-surface bg-white text-bmg-on-surface font-black uppercase text-xs md:text-sm tracking-widest shadow-[4px_4px_0px_#3759b3] hover:shadow-[2px_2px_0px_#3759b3] hover:translate-x-[2px] hover:translate-y-[2px] transition-all cursor-pointer">
                LOAD MORE PROJECTS
            </button>
        </div>

    </div>
</section>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const filterBtns = document.querySelectorAll('.portfolio-filter-btn');
    const items = document.querySelectorAll('.portfolio-item');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', function () {
            const filter = this.getAttribute('data-filter');

            filterBtns.forEach(b => {
                b.classList.remove('active', 'bg-[#bd001a]', 'text-white');
                b.classList.add('bg-white', 'text-bmg-on-surface');
            });
            this.classList.add('active', 'bg-[#bd001a]', 'text-white');
            this.classList.remove('bg-white', 'text-bmg-on-surface');

            items.forEach(item => {
                const category = item.getAttribute('data-category');
                if (filter === 'all' || category === filter) {
                    item.style.display = 'flex';
                    item.style.opacity = '1';
                } else {
                    item.style.display = 'none';
                    item.style.opacity = '0';
                }
            });
        });
    });
});
</script>
@endpush
