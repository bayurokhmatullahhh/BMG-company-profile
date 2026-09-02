@extends('layouts.app')

@section('title', 'Tentang Kami | Berkah Media Gemilang')
@section('meta_description', 'PT Berkah Media Gemilang adalah powerhouse media buying dan event production yang menolak kompromi.')

@section('content')
<div class="w-full bg-[#FAF8F7]">
    {{-- Hero Header --}}
    <div class="py-12 md:py-20 px-5 md:px-16">
        <div class="max-w-[1280px] mx-auto grid grid-cols-1 md:grid-cols-12 gap-8 items-center">
            
            {{-- Left Content (7 cols) --}}
            <div class="md:col-span-7">
                <div class="flex items-stretch gap-4 mb-4">
                    <div class="w-2 rounded-none shrink-0" style="background-color: #BD001A;"></div>
                    <div>
                        <h1 class="text-4xl md:text-6xl font-black font-display tracking-tight leading-tight uppercase" style="color: #BD001A;">
                            MENGGERAKKAN <br>
                            <span style="color: #1C1B1B;">INDUSTRI</span>
                        </h1>
                    </div>
                </div>

                {{-- Light Oval Element --}}
                <div class="w-44 h-14 md:w-60 md:h-18 rounded-full my-4 ml-6" style="background-color: rgba(229, 226, 225, 0.7);"></div>

                <p class="mt-4 text-gray-700 text-sm md:text-base max-w-xl leading-relaxed ml-6 pl-4" style="border-left: 3px solid #BD001A;">
                    Kami adalah arsitek di balik layar. Sebuah powerhouse media buying dan event production yang menolak kompromi. Mengubah ide liar menjadi eksekusi presisi tinggi.
                </p>
            </div>

            {{-- Right Image Box (5 cols) --}}
            <div class="md:col-span-5 relative py-6">
                <div class="relative w-full max-w-md mx-auto z-10">
                    <div class="bg-white overflow-hidden shadow-lg" style="border: 4px solid #1C1B1B;">
                        <img src="{{ asset('images/about-stage-rigging.png') }}" alt="Menggerakkan Industri" class="w-full h-auto aspect-square object-cover">
                    </div>
                </div>
                {{-- Decorative Red Circle Line under image --}}
                <div class="w-36 h-36 md:w-48 md:h-48 rounded-full absolute -bottom-2 left-4 md:left-8 z-0 pointer-events-none" style="border: 2px solid #BD001A;"></div>
            </div>

        </div>
    </div>

    {{-- Dark Section: VISI & MISI --}}
    <div class="text-white py-16 md:py-24 px-5 md:px-16" style="background-color: #1E1E1E;">
        <div class="max-w-[1280px] mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">

            {{-- Card 1: VISI --}}
            <div class="bg-white p-8 md:p-10 relative shadow-xl flex flex-col justify-between" style="color: #1C1B1B; border-bottom: 4px solid #BD001A; border-left: 4px solid #BD001A;">
                <div>
                    <span class="text-xs font-mono font-bold tracking-widest uppercase" style="color: #3759B3;">TUJUAN UTAMA</span>
                    <h2 class="text-4xl md:text-5xl font-black font-display mt-2 mb-6">VISI</h2>
                    <p class="text-gray-700 text-sm md:text-base leading-relaxed">
                        Menjadi episentrum inovasi media dan event di Asia Tenggara, di mana kreativitas radikal bertemu dengan analitik tajam. Kami tidak sekadar mengikuti tren, kami menciptakannya.
                    </p>
                </div>
            </div>

            {{-- Card 2: MISI --}}
            <div class="bg-white p-8 md:p-10 relative shadow-xl flex flex-col justify-between" style="color: #1C1B1B; border-bottom: 4px solid #3759B3; border-right: 4px solid #3759B3;">
                <div>
                    <span class="text-xs font-mono font-bold tracking-widest uppercase" style="color: #BD001A;">CARA KERJA</span>
                    <h2 class="text-4xl md:text-5xl font-black font-display mt-2 mb-6">MISI</h2>
                    
                    <div class="space-y-4">
                        <div class="flex items-start gap-4">
                            <span class="text-xl shrink-0 mt-0.5" style="color: #BD001A;">⚡</span>
                            <p class="text-gray-700 text-sm md:text-base leading-snug">
                                Menghadirkan eksekusi event berskala masif dengan presisi militer.
                            </p>
                        </div>

                        <div class="flex items-start gap-4">
                            <span class="text-xl shrink-0 mt-0.5" style="color: #BD001A;">🎯</span>
                            <p class="text-gray-700 text-sm md:text-base leading-snug">
                                Mengoptimalkan ROI media buying melalui strategi data-driven yang agresif.
                            </p>
                        </div>

                        <div class="flex items-start gap-4">
                            <span class="text-xl shrink-0 mt-0.5" style="color: #BD001A;">🤝</span>
                            <p class="text-gray-700 text-sm md:text-base leading-snug">
                                Membangun ekosistem kemitraan yang transparan, kuat, dan saling menguntungkan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
