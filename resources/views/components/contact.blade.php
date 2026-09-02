{{-- Contact Section --}}
<section id="contact" class="w-full py-20 md:py-28 px-5 md:px-16 bg-[#fcf9f8] text-bmg-on-surface relative overflow-hidden border-t-4 border-bmg-on-surface">
    <div class="max-w-[1280px] mx-auto relative z-10">

        {{-- Section Header --}}
        <div class="mb-12">
            <h2 class="font-display text-5xl md:text-7xl font-black uppercase leading-none tracking-tight text-bmg-on-surface mb-6">
                READY TO DISRUPT<br>
                THE MARKET?
            </h2>
            <div class="inline-block bg-[#3759b3] border-2 border-bmg-on-surface px-6 py-3 shadow-[4px_4px_0px_#1c1b1b]">
                <p class="text-xs md:text-sm text-white font-bold tracking-wide">
                    Drop us a line. We turn bold ideas into high-impact reality. No fluff, just results.
                </p>
            </div>
        </div>

        {{-- Main Layout Grid --}}
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">

            {{-- Left Column: Send A Message Form --}}
            <div class="lg:col-span-7 border-2 border-bmg-on-surface bg-white p-6 md:p-10 shadow-[6px_6px_0px_#1c1b1b]">
                <h3 class="font-display text-2xl font-black uppercase text-bmg-on-surface mb-8 tracking-tight">
                    SEND A MESSAGE
                </h3>

                <form id="contact-form" onsubmit="event.preventDefault(); document.getElementById('form-success-alert').classList.remove('hidden');" class="flex flex-col gap-6">
                    {{-- Row 1: Name & Company --}}
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="flex flex-col gap-2">
                            <label for="contact-name" class="text-xs font-black uppercase text-bmg-on-surface tracking-wider">
                                NAME <span class="text-[#bd001a]">*</span>
                            </label>
                            <input
                                id="contact-name"
                                name="name"
                                type="text"
                                placeholder="John Doe"
                                class="w-full bg-white border-2 border-bmg-on-surface p-3.5 text-sm text-bmg-on-surface placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-[#bd001a] transition-all font-medium"
                            >
                        </div>
                        <div class="flex flex-col gap-2">
                            <label for="contact-company" class="text-xs font-black uppercase text-bmg-on-surface tracking-wider">
                                COMPANY
                            </label>
                            <input
                                id="contact-company"
                                name="company"
                                type="text"
                                placeholder="Disruptor Inc."
                                class="w-full bg-white border-2 border-bmg-on-surface p-3.5 text-sm text-bmg-on-surface placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-[#bd001a] transition-all font-medium"
                            >
                        </div>
                    </div>

                    {{-- Row 2: Email --}}
                    <div class="flex flex-col gap-2">
                        <label for="contact-email" class="text-xs font-black uppercase text-bmg-on-surface tracking-wider">
                            EMAIL <span class="text-[#bd001a]">*</span>
                        </label>
                        <input
                            id="contact-email"
                            name="email"
                            type="email"
                            placeholder="john@example.com"
                            class="w-full bg-white border-2 border-bmg-on-surface p-3.5 text-sm text-bmg-on-surface placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-[#bd001a] transition-all font-medium"
                        >
                    </div>

                    {{-- Row 3: Project Details --}}
                    <div class="flex flex-col gap-2">
                        <label for="contact-details" class="text-xs font-black uppercase text-bmg-on-surface tracking-wider">
                            PROJECT DETAILS
                        </label>
                        <textarea
                            id="contact-details"
                            name="details"
                            rows="4"
                            placeholder="Tell us about your bold idea..."
                            class="w-full bg-white border-2 border-bmg-on-surface p-3.5 text-sm text-bmg-on-surface placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-[#bd001a] transition-all font-medium resize-none"
                        ></textarea>
                    </div>

                    {{-- Row 4: Submit Button --}}
                    <div>
                        <button
                            type="submit"
                            class="inline-flex items-center gap-2 bg-[#bd001a] text-white font-black uppercase text-sm tracking-widest px-8 py-4 border-2 border-bmg-on-surface shadow-[4px_4px_0px_#1c1b1b] hover:shadow-[2px_2px_0px_#1c1b1b] hover:translate-x-[2px] hover:translate-y-[2px] active:translate-x-[4px] active:translate-y-[4px] active:shadow-none transition-all cursor-pointer">
                            SUBMIT <span>→</span>
                        </button>
                    </div>

                    {{-- Success alert notice (visual only) --}}
                    <div id="form-success-alert" class="hidden p-4 bg-[#e8f5e9] border-2 border-[#2e7d32] text-[#2e7d32] text-xs font-bold uppercase tracking-wider">
                        ✓ Terima kasih! Pesan Anda telah diterima.
                    </div>
                </form>
            </div>

            {{-- Right Column: Contact Info Cards --}}
            <div class="lg:col-span-5 flex flex-col gap-5">

                {{-- Email Card --}}
                <div class="border-2 border-bmg-on-surface bg-white p-6 shadow-[5px_5px_0px_#1c1b1b] flex items-start gap-4">
                    <div class="w-12 h-12 bg-[#3759b3] border-2 border-bmg-on-surface flex items-center justify-center text-white flex-shrink-0 shadow-[2px_2px_0px_#000]">
                        <span class="material-symbols-outlined text-2xl">mail</span>
                    </div>
                    <div>
                        <span class="text-[11px] font-black uppercase text-[#5d3f3c] tracking-widest block mb-1">
                            EMAIL US
                        </span>
                        <a href="mailto:hello@bmg.co.id" class="font-display text-xl md:text-2xl font-black text-bmg-on-surface hover:text-[#bd001a] transition-colors tracking-tight">
                            hello@bmg.co.id
                        </a>
                    </div>
                </div>

                {{-- WhatsApp Card --}}
                <div class="border-2 border-bmg-on-surface bg-white p-6 shadow-[5px_5px_0px_#1c1b1b] flex items-start gap-4">
                    <div class="w-12 h-12 bg-[#bd001a] border-2 border-bmg-on-surface flex items-center justify-center text-white flex-shrink-0 shadow-[2px_2px_0px_#000]">
                        <span class="material-symbols-outlined text-2xl">chat</span>
                    </div>
                    <div>
                        <span class="text-[11px] font-black uppercase text-[#5d3f3c] tracking-widest block mb-1">
                            WHATSAPP
                        </span>
                        <a href="https://wa.me/628110000000" target="_blank" rel="noopener noreferrer" class="font-display text-xl md:text-2xl font-black text-bmg-on-surface hover:text-[#bd001a] transition-colors tracking-tight">
                            +62 811-0000-000
                        </a>
                    </div>
                </div>

                {{-- HQ Location Card --}}
                <div class="border-2 border-bmg-on-surface bg-white shadow-[5px_5px_0px_#3759b3] overflow-hidden">
                    {{-- Header with badge --}}
                    <div class="flex items-center justify-between px-6 pt-5 pb-3">
                        <span class="text-[11px] font-black uppercase text-[#5d3f3c] tracking-widest">
                            HQ LOCATION
                        </span>
                        <span class="bg-bmg-on-surface text-white text-[10px] font-black uppercase px-2.5 py-1 tracking-widest">
                            Jakarta, ID
                        </span>
                    </div>

                    {{-- Map Preview --}}
                    <div class="relative w-full h-40 bg-[#e8e7eb] border-y-2 border-bmg-on-surface flex items-center justify-center overflow-hidden">
                        {{-- Grid lines --}}
                        <div class="absolute inset-0 opacity-25" style="background-image: linear-gradient(#999 1px, transparent 1px), linear-gradient(90deg, #999 1px, transparent 1px); background-size: 24px 24px;"></div>

                        {{-- Watermark --}}
                        <div class="relative z-10 font-display text-3xl font-black uppercase text-gray-400/60 tracking-widest rotate-[-8deg] select-none">
                            MAP DATA
                        </div>

                        {{-- Red Location Pin with ripple --}}
                        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-20 flex items-center justify-center">
                            <div class="w-8 h-8 rounded-full bg-[#bd001a]/30 animate-ping absolute"></div>
                            <div class="w-5 h-5 rounded-full bg-[#bd001a] border-2 border-white shadow-[0_0_8px_rgba(189,0,26,0.6)]"></div>
                        </div>
                    </div>

                    {{-- Address Text --}}
                    <div class="p-6">
                        <p class="text-sm text-bmg-on-surface font-bold leading-relaxed">
                            Gedung Gemilang Tower Lt. 14<br>
                            Jl. Jend. Sudirman Kav. 88<br>
                            Jakarta Pusat, 10220
                        </p>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>
