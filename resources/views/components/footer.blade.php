{{-- Footer --}}
<footer class="w-full py-16 md:py-20 px-5 md:px-16 bg-bmg-on-surface border-t-8 border-bmg-secondary">
    <div class="max-w-[1280px] mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
        {{-- Brand --}}
        <div class="flex flex-col gap-4">
            <span class="font-display text-3xl text-bmg-on-primary uppercase tracking-tighter font-black">
                Berkah Media<br>Gemilang
            </span>
            <p class="text-body-md text-bmg-surface-variant opacity-80">
                Precision Media. Raw Energy.<br>
                We build experiences that refuse to be ignored.
            </p>
        </div>

        {{-- Quick Links --}}
        <div class="flex flex-col gap-4">
            <span class="text-label-bold text-bmg-primary-container uppercase">Navigate</span>
            <div class="flex flex-col gap-2">
                <a class="text-body-md text-bmg-surface-variant opacity-80 hover:text-bmg-primary-container hover:-translate-y-0.5 transition-all w-max inline-block" href="#home">Home</a>
                <a class="text-body-md text-bmg-surface-variant opacity-80 hover:text-bmg-primary-container hover:-translate-y-0.5 transition-all w-max inline-block" href="#layanan">Layanan</a>
                <a class="text-body-md text-bmg-surface-variant opacity-80 hover:text-bmg-primary-container hover:-translate-y-0.5 transition-all w-max inline-block" href="#tentang">Tentang</a>
                <a class="text-body-md text-bmg-surface-variant opacity-80 hover:text-bmg-primary-container hover:-translate-y-0.5 transition-all w-max inline-block" href="#portofolio">Portofolio</a>
                <a class="text-body-md text-bmg-surface-variant opacity-80 hover:text-bmg-primary-container hover:-translate-y-0.5 transition-all w-max inline-block" href="#contact">Contact Us</a>
            </div>
        </div>

        {{-- Connect + Copyright --}}
        <div class="flex flex-col gap-4">
            <span class="text-label-bold text-bmg-primary-container uppercase">Connect</span>
            <div class="flex flex-col gap-2">
                <a class="text-body-md text-bmg-surface-variant opacity-80 hover:text-bmg-primary-container transition-all w-max inline-block hover:-translate-y-1 hover:drop-shadow-[2px_2px_0_rgba(230,30,42,1)]" href="#" aria-label="Instagram">Instagram</a>
                <a class="text-body-md text-bmg-surface-variant opacity-80 hover:text-bmg-primary-container transition-all w-max inline-block hover:-translate-y-1 hover:drop-shadow-[2px_2px_0_rgba(230,30,42,1)]" href="#" aria-label="LinkedIn">LinkedIn</a>
                <a class="text-body-md text-bmg-surface-variant opacity-80 hover:text-bmg-primary-container transition-all w-max inline-block hover:-translate-y-1 hover:drop-shadow-[2px_2px_0_rgba(230,30,42,1)]" href="#" aria-label="WhatsApp">WhatsApp</a>
            </div>

            <div class="text-body-md text-bmg-surface-variant opacity-80 mt-auto pt-8 md:pt-0">
                © {{ date('Y') }} Berkah Media Gemilang.<br>
                <a class="hover:text-bmg-primary-container transition-all underline decoration-2 underline-offset-4" href="#">Privacy Policy</a>
            </div>
        </div>
    </div>
</footer>
