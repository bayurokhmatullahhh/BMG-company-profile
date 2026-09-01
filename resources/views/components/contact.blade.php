{{-- Contact Us Section --}}
<section id="contact" class="w-full py-28 md:py-32 px-5 md:px-16 bg-bmg-surface border-t-4 border-bmg-on-surface relative">
    <div class="absolute inset-0 bg-pattern"></div>

    <div class="max-w-4xl mx-auto bg-bmg-surface border-4 border-bmg-on-surface p-8 md:p-12 neo-shadow-red relative z-10 reveal-scale">
        <div class="text-center mb-10">
            <h2 class="text-headline-lg-mobile md:text-headline-lg text-bmg-on-surface uppercase tracking-tight mb-2">Mulai Kolaborasi</h2>
            <p class="text-body-lg text-bmg-on-surface-variant">Ready to disrupt the market? Drop us a line.</p>
        </div>

        <form id="contact-form" action="{{ route('contact.submit') }}" method="POST" class="flex flex-col gap-6">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="flex flex-col gap-2">
                    <label for="contact-name" class="text-label-bold uppercase text-bmg-on-surface">Nama Lengkap</label>
                    <input id="contact-name"
                           name="name"
                           type="text"
                           placeholder="John Doe"
                           required
                           class="bg-bmg-surface border-2 border-bmg-on-surface p-3 text-body-md text-bmg-on-surface transition-colors">
                </div>
                <div class="flex flex-col gap-2">
                    <label for="contact-email" class="text-label-bold uppercase text-bmg-on-surface">Email</label>
                    <input id="contact-email"
                           name="email"
                           type="email"
                           placeholder="john@example.com"
                           required
                           class="bg-bmg-surface border-2 border-bmg-on-surface p-3 text-body-md text-bmg-on-surface transition-colors">
                </div>
            </div>

            <div class="flex flex-col gap-2">
                <label for="contact-service" class="text-label-bold uppercase text-bmg-on-surface">Layanan yang Dibutuhkan</label>
                <select id="contact-service"
                        name="service"
                        required
                        class="bg-bmg-surface border-2 border-bmg-on-surface p-3 text-body-md text-bmg-on-surface transition-colors">
                    <option value="">Pilih Layanan</option>
                    <option value="media_buying">Media Buying</option>
                    <option value="event_production">Event Production</option>
                    <option value="digital_amplification">Digital Amplification</option>
                    <option value="full_scale_campaign">Full Scale Campaign</option>
                    <option value="event_organizer">Event Organizer</option>
                    <option value="social_media">Social Media Management</option>
                </select>
            </div>

            <div class="flex flex-col gap-2">
                <label for="contact-message" class="text-label-bold uppercase text-bmg-on-surface">Pesan</label>
                <textarea id="contact-message"
                          name="message"
                          placeholder="Ceritakan brief Anda..."
                          rows="4"
                          required
                          class="bg-bmg-surface border-2 border-bmg-on-surface p-3 text-body-md text-bmg-on-surface resize-none transition-colors"></textarea>
            </div>

            <button type="submit"
                    class="bg-bmg-primary text-bmg-on-primary text-label-bold uppercase py-4 px-8 border-2 border-bmg-on-surface neo-shadow-hover w-full md:w-auto self-end mt-4 cursor-pointer transition-all">
                Kirim Pesan
            </button>
        </form>
    </div>
</section>
