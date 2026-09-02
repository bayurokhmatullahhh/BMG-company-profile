@extends('layouts.app')

@section('title', 'Layanan | Berkah Media Gemilang')
@section('meta_description', 'Tiga pilar layanan utama Berkah Media Gemilang: Media Buying, Event Production, dan Digital Reach.')

@section('content')
<div class="w-full bg-[#FCF9F8] min-h-screen py-12 md:py-16 px-5 md:px-16">
    <div class="max-w-[1280px] mx-auto">

        {{-- Hero Header --}}
        <div class="flex items-stretch gap-4 mb-12">
            <div class="w-2 rounded-none shrink-0" style="background-color: #BD001A;"></div>
            <div>
                <h1 class="text-4xl md:text-6xl font-black font-display tracking-tight leading-none uppercase" style="color: #1C1B1B;">
                    KEKUATAN <br>
                    <span style="color: #3759B3;">EKSEKUSI.</span>
                </h1>
                <p class="mt-4 text-gray-700 text-sm md:text-base max-w-2xl leading-relaxed">
                    Kami tidak hanya merencanakan. Kami mendominasi ruang gema. Tiga pilar layanan utama kami dirancang untuk impact maksimal, asimetris, dan tak terlupakan.
                </p>
            </div>
        </div>

        {{-- Services Grid --}}
        <div class="w-full">
            {{-- Top Row: Media Buying & Digital Reach --}}
            <div class="grid grid-cols-1 md:grid-cols-12 gap-8 items-stretch">
                {{-- Media Buying Card (7 cols) --}}
                <div class="md:col-span-7 bg-white border border-gray-200 overflow-hidden flex flex-col shadow-sm">
                    <div class="w-full h-56 md:h-64 bg-gray-100 overflow-hidden">
                        <img src="{{ asset('images/media-buying-abstract.png') }}" alt="Media Buying" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6 md:p-8 flex flex-col flex-grow">
                        <div class="flex items-center gap-2 mb-4">
                            <span class="bg-[#F3F4F6] text-[11px] font-mono font-bold px-3 py-1 uppercase tracking-wider" style="color: #3759B3;">STRATEGIC</span>
                            <span class="bg-[#F3F4F6] text-[11px] font-mono font-bold px-3 py-1 uppercase tracking-wider" style="color: #3759B3;">ROI FOCUSED</span>
                        </div>
                        <h2 class="text-3xl md:text-4xl font-black font-display mb-3" style="color: #1C1B1B;">Media Buying</h2>
                        <p class="text-gray-600 text-sm md:text-base leading-relaxed mb-6 flex-grow">
                            Penempatan presisi tinggi. Kami menguasai negosiasi ruang media untuk memastikan brand Anda mendominasi lanskap visual dengan efisiensi anggaran maksimal.
                        </p>
                        <a href="{{ route('home') }}#contact" class="font-bold text-xs md:text-sm font-mono uppercase tracking-wider flex items-center gap-2 hover:underline self-start" style="color: #BD001A;">
                            PELAJARI LEBIH LANJUT <span class="text-lg">→</span>
                        </a>
                    </div>
                </div>

                {{-- Digital Reach Card (5 cols) --}}
                <div class="md:col-span-5 text-white p-6 md:p-8 flex flex-col justify-between relative overflow-hidden shadow-sm min-h-[380px]" style="background-color: #A80015;">
                    <div class="relative z-10">
                        <span class="text-[11px] font-mono font-bold uppercase tracking-widest text-white/80">AMPLIFICATION</span>
                        <h2 class="text-3xl md:text-4xl font-black font-display mt-4 mb-4">Digital Reach</h2>
                        <p class="text-white/90 text-sm md:text-base leading-relaxed">
                            Membangun gema di ruang digital. Amplifikasi kampanye media sosial yang menembus noise algoritma dan menciptakan interaksi organik bernilai tinggi.
                        </p>
                    </div>

                    {{-- Dark Red Circle Graphic --}}
                    <div class="absolute -bottom-10 -right-10 w-44 h-44 rounded-full pointer-events-none z-0" style="background-color: #6B000E;"></div>

                    <div class="relative z-10 mt-8">
                        <a href="{{ route('home') }}#contact" class="bg-white hover:bg-gray-100 text-[#1C1B1B] font-bold text-xs font-mono uppercase tracking-wider px-6 py-3.5 inline-block text-center shadow-sm">
                            EXPLORE DIGITAL
                        </a>
                    </div>
                </div>
            </div>

            {{-- Bottom Row: Event Production Card --}}
            <div class="mt-8 text-white grid grid-cols-1 md:grid-cols-2 overflow-hidden shadow-sm" style="background-color: #3759B3;">
                {{-- Left Text Column --}}
                <div class="p-6 md:p-10 flex flex-col justify-center">
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="bg-white/20 text-white text-[11px] font-mono font-bold px-3 py-1 uppercase tracking-wider">LOGISTICS</span>
                        <span class="bg-white/20 text-white text-[11px] font-mono font-bold px-3 py-1 uppercase tracking-wider">STAGING</span>
                        <span class="bg-white/20 text-white text-[11px] font-mono font-bold px-3 py-1 uppercase tracking-wider">VENDOR MGMT</span>
                    </div>
                    <h2 class="text-3xl md:text-5xl font-black font-display mb-4">Event Production</h2>
                    <p class="text-white/90 text-sm md:text-base leading-relaxed mb-8">
                        Dari konsep hingga standing ovation. Kami menangani seluruh siklus produksi acara - logistik, panggung, dan manajemen vendor - memastikan eksekusi lapangan yang tak tertandingi dan penuh energi.
                    </p>
                    <div>
                        <a href="{{ route('home') }}#portofolio" class="text-white font-bold text-xs font-mono uppercase tracking-wider px-6 py-3.5 inline-block text-center transition-colors shadow-md self-start" style="background-color: #BD001A;">
                            LIHAT PORTOFOLIO EVENT
                        </a>
                    </div>
                </div>

                {{-- Right Image Column --}}
                <div class="w-full h-full min-h-[260px] md:min-h-[360px]">
                    <img src="{{ asset('images/event-production-live.png') }}" alt="Event Production" class="w-full h-full object-cover">
                </div>
            </div>
        </div>

        {{-- CTA Section --}}
        <div class="mt-16 mb-8 py-12 md:py-16 px-6 md:px-12 text-center max-w-4xl mx-auto shadow-sm" style="background-color: #FDE8E8;">
            <h2 class="text-3xl md:text-4xl font-black font-display uppercase mb-3" style="color: #1C1B1B;">
                SIAP MENDOMINASI?
            </h2>
            <p class="text-gray-600 text-sm md:text-base max-w-xl mx-auto mb-6">
                Jangan biarkan brand Anda tenggelam dalam kebisingan. Mari diskusikan strategi agresif untuk kampanye Anda berikutnya.
            </p>
            <a href="{{ route('home') }}#contact" class="text-white font-bold text-xs font-mono uppercase tracking-wider px-8 py-3.5 inline-block transition-colors shadow-md" style="background-color: #BD001A;">
                MULAI PROYEK ANDA
            </a>
        </div>

    </div>
</div>
@endsection
