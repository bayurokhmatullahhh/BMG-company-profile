@extends('layouts.app')

@section('title', 'Kebijakan Privasi (Privacy Policy) | PT Berkah Media Gemilang')
@section('meta_description', 'Kebijakan Privasi PT Berkah Media Gemilang - Penjelasan lengkap mengenai pengumpulan, penggunaan, dan perlindungan data pribadi Anda.')

@section('content')
<div class="w-full bg-[#fcf9f8] text-bmg-on-surface py-12 md:py-20 px-5 md:px-16 border-b-4 border-bmg-on-surface">
    <div class="max-w-[1280px] mx-auto">

        {{-- Breadcrumb Navigation --}}
        <div class="flex items-center gap-2 text-xs font-mono font-bold uppercase tracking-wider mb-8 text-[#5d3f3c]">
            <a href="{{ route('home') }}" class="hover:text-bmg-primary transition-colors">Home</a>
            <span>/</span>
            <span class="text-bmg-primary">Kebijakan Privasi</span>
        </div>

        {{-- Hero Header --}}
        <div class="bg-white border-2 border-bmg-on-surface p-8 md:p-12 shadow-[6px_6px_0px_#1c1b1b] mb-12">
            <div class="flex flex-wrap items-center gap-3 mb-6">
                <span class="bg-[#bd001a] text-white text-xs font-black px-3 py-1 uppercase tracking-widest border border-bmg-on-surface shadow-[2px_2px_0px_#000]">
                    Legal & Compliance
                </span>
                <span class="bg-white text-bmg-on-surface text-xs font-black px-3 py-1 uppercase tracking-widest border border-bmg-on-surface shadow-[2px_2px_0px_#000]">
                    UU PDP No. 27/2022 Compliant
                </span>
                <span class="bg-[#3759b3] text-white text-xs font-black px-3 py-1 uppercase tracking-widest border border-bmg-on-surface shadow-[2px_2px_0px_#000]">
                    Versi 2.1
                </span>
            </div>

            <div class="flex items-start gap-4 mb-6">
                <div class="w-2 h-16 md:h-20 bg-bmg-primary flex-shrink-0"></div>
                <div>
                    <h1 class="font-display text-4xl md:text-6xl font-black uppercase tracking-tight text-bmg-on-surface leading-none">
                        KEBIJAKAN PRIVASI
                    </h1>
                    <p class="font-mono text-xs md:text-sm font-bold text-[#5d3f3c] mt-2 uppercase tracking-wide">
                        PT Berkah Media Gemilang • Terakhir Diperbarui: 2 September 2026
                    </p>
                </div>
            </div>

            <p class="text-body-lg text-bmg-on-surface max-w-3xl leading-relaxed font-medium">
                Kami di <strong class="font-black text-bmg-on-surface">PT Berkah Media Gemilang (BMG)</strong> berkomitmen penuh untuk menjaga transparansi, keamanan, dan kerahasiaan data pribadi Anda dalam setiap layanan Event Organizer, Media Buying, Event Production, dan Media Digital kami.
            </p>
        </div>

        {{-- Main Content Grid with Sticky Sidebar --}}
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">

            {{-- Left Column: Sticky Table of Contents --}}
            <aside class="lg:col-span-4 lg:sticky lg:top-28 space-y-6">
                {{-- TOC Card --}}
                <div class="bg-white border-2 border-bmg-on-surface p-6 shadow-[5px_5px_0px_#3759b3]">
                    <div class="flex items-center gap-2 mb-4 pb-3 border-b-2 border-bmg-on-surface">
                        <span class="material-symbols-outlined text-bmg-primary text-xl">menu_book</span>
                        <h3 class="font-display text-lg font-black uppercase text-bmg-on-surface tracking-tight">
                            Daftar Isi Kebijakan
                        </h3>
                    </div>
                    <nav class="flex flex-col gap-2 font-mono text-xs font-bold text-bmg-on-surface">
                        <a href="#pendahuluan" class="py-1.5 px-2 hover:bg-[#ffdad6] hover:text-bmg-primary border border-transparent hover:border-bmg-on-surface transition-all flex items-center gap-2">
                            <span>01.</span> Pendahuluan & Ruang Lingkup
                        </a>
                        <a href="#pengumpulan-data" class="py-1.5 px-2 hover:bg-[#ffdad6] hover:text-bmg-primary border border-transparent hover:border-bmg-on-surface transition-all flex items-center gap-2">
                            <span>02.</span> Informasi yang Kami Kumpulkan
                        </a>
                        <a href="#tujuan-penggunaan" class="py-1.5 px-2 hover:bg-[#ffdad6] hover:text-bmg-primary border border-transparent hover:border-bmg-on-surface transition-all flex items-center gap-2">
                            <span>03.</span> Penggunaan & Pemrosesan Data
                        </a>
                        <a href="#keamanan-data" class="py-1.5 px-2 hover:bg-[#ffdad6] hover:text-bmg-primary border border-transparent hover:border-bmg-on-surface transition-all flex items-center gap-2">
                            <span>04.</span> Perlindungan & Keamanan
                        </a>
                        <a href="#pihak-ketiga" class="py-1.5 px-2 hover:bg-[#ffdad6] hover:text-bmg-primary border border-transparent hover:border-bmg-on-surface transition-all flex items-center gap-2">
                            <span>05.</span> Pembagian ke Pihak Ketiga
                        </a>
                        <a href="#hak-pengguna" class="py-1.5 px-2 hover:bg-[#ffdad6] hover:text-bmg-primary border border-transparent hover:border-bmg-on-surface transition-all flex items-center gap-2">
                            <span>06.</span> Hak-Hak Anda
                        </a>
                        <a href="#cookie" class="py-1.5 px-2 hover:bg-[#ffdad6] hover:text-bmg-primary border border-transparent hover:border-bmg-on-surface transition-all flex items-center gap-2">
                            <span>07.</span> Cookie & Pelacakan
                        </a>
                        <a href="#kontak-dpo" class="py-1.5 px-2 hover:bg-[#ffdad6] hover:text-bmg-primary border border-transparent hover:border-bmg-on-surface transition-all flex items-center gap-2">
                            <span>08.</span> Kontak & Pengaduan
                        </a>
                    </nav>
                </div>

                {{-- Quick Contact Card --}}
                <div class="bg-[#f0eded] border-2 border-bmg-on-surface p-6 shadow-[5px_5px_0px_#1c1b1b]">
                    <span class="text-xs font-black uppercase text-[#bd001a] tracking-wider block mb-1">
                        Ada Pertanyaan Privasi?
                    </span>
                    <h4 class="font-display text-base font-black uppercase text-bmg-on-surface mb-2">
                        Tim Perlindungan Data (DPO)
                    </h4>
                    <p class="text-xs text-[#5d3f3c] leading-relaxed mb-4 font-medium">
                        Jika Anda memiliki permintaan penghapusan data atau pertanyaan hukum terkait privasi, hubungi kami:
                    </p>
                    <a href="mailto:privacy@bmg.co.id" class="inline-flex items-center gap-2 bg-[#bd001a] text-white text-xs font-black uppercase px-4 py-2.5 border border-bmg-on-surface shadow-[2px_2px_0px_#000] hover:translate-x-0.5 hover:translate-y-0.5 hover:shadow-none transition-all">
                        <span class="material-symbols-outlined text-sm">mail</span>
                        privacy@bmg.co.id
                    </a>
                </div>
            </aside>

            {{-- Right Column: Detailed Policy Sections --}}
            <main class="lg:col-span-8 space-y-8">

                {{-- Section 1: Pendahuluan --}}
                <section id="pendahuluan" class="bg-white border-2 border-bmg-on-surface p-6 md:p-8 shadow-[5px_5px_0px_#1c1b1b]">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="w-8 h-8 rounded-none bg-[#bd001a] text-white flex items-center justify-center font-mono font-bold text-sm border border-bmg-on-surface">
                            01
                        </span>
                        <h2 class="font-display text-2xl font-black uppercase text-bmg-on-surface tracking-tight">
                            Pendahuluan & Ruang Lingkup
                        </h2>
                    </div>
                    <div class="space-y-3 text-sm leading-relaxed text-[#1c1b1b] font-medium">
                        <p>
                            Kebijakan Privasi ini menjelaskan bagaimana <strong>PT Berkah Media Gemilang</strong> ("BMG", "kami", atau "perusahaan") mengumpulkan, menyimpan, memproses, membagikan, dan melindungi Data Pribadi dari klien, mitra kerja, pengunjung situs web (<code class="bg-[#f0eded] px-1 py-0.5 border border-bmg-on-surface text-xs font-mono">bmg.co.id</code>), serta partisipan event yang kami selenggarakan.
                        </p>
                        <p>
                            Dengan menggunakan situs web atau memesan layanan kami, Anda menyatakan telah membaca, memahami, dan menyetujui seluruh ketentuan yang tercantum dalam dokumen ini.
                        </p>
                    </div>
                </section>

                {{-- Section 2: Informasi yang Kami Kumpulkan --}}
                <section id="pengumpulan-data" class="bg-white border-2 border-bmg-on-surface p-6 md:p-8 shadow-[5px_5px_0px_#1c1b1b]">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="w-8 h-8 rounded-none bg-[#bd001a] text-white flex items-center justify-center font-mono font-bold text-sm border border-bmg-on-surface">
                            02
                        </span>
                        <h2 class="font-display text-2xl font-black uppercase text-bmg-on-surface tracking-tight">
                            Informasi yang Kami Kumpulkan
                        </h2>
                    </div>
                    <p class="text-sm text-[#5d3f3c] mb-4 font-medium">
                        Kami hanya mengumpulkan data pribadi yang relevan dan dibutuhkan untuk kelancaran pelaksanaan layanan:
                    </p>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                        <div class="border-2 border-bmg-on-surface bg-[#fcf9f8] p-4">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="material-symbols-outlined text-[#bd001a] text-lg">badge</span>
                                <h4 class="font-display text-sm font-black uppercase">Data Identitas Klien</h4>
                            </div>
                            <ul class="list-disc list-inside text-xs space-y-1 text-[#5d3f3c]">
                                <li>Nama lengkap dan jabatan</li>
                                <li>Nama institusi / perusahaan</li>
                                <li>Alamat email bisnis & nomor telepon/WhatsApp</li>
                                <li>NPWP / Identitas perpajakan badan usaha</li>
                            </ul>
                        </div>

                        <div class="border-2 border-bmg-on-surface bg-[#fcf9f8] p-4">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="material-symbols-outlined text-[#3759b3] text-lg">analytics</span>
                                <h4 class="font-display text-sm font-black uppercase">Data Teknis & Pelacak</h4>
                            </div>
                            <ul class="list-disc list-inside text-xs space-y-1 text-[#5d3f3c]">
                                <li>Alamat IP & informasi perangkat (browser/OS)</li>
                                <li>Log aktivitas interaksi di halaman web</li>
                                <li>Data analitik anonim kampanye media buying</li>
                                <li>Cookie sesi untuk fungsionalitas situs</li>
                            </ul>
                        </div>
                    </div>
                </section>

                {{-- Section 3: Tujuan Penggunaan Data --}}
                <section id="tujuan-penggunaan" class="bg-white border-2 border-bmg-on-surface p-6 md:p-8 shadow-[5px_5px_0px_#1c1b1b]">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="w-8 h-8 rounded-none bg-[#bd001a] text-white flex items-center justify-center font-mono font-bold text-sm border border-bmg-on-surface">
                            03
                        </span>
                        <h2 class="font-display text-2xl font-black uppercase text-bmg-on-surface tracking-tight">
                            Penggunaan & Pemrosesan Data
                        </h2>
                    </div>
                    <div class="space-y-3 text-sm text-[#1c1b1b] font-medium leading-relaxed">
                        <p>Data yang dikumpulkan dipergunakan untuk keperluan berikut:</p>
                        <div class="space-y-2 text-xs">
                            <div class="flex items-start gap-3 p-3 bg-[#f6f3f2] border border-bmg-on-surface">
                                <span class="material-symbols-outlined text-[#bd001a] text-base mt-0.5">check_circle</span>
                                <div>
                                    <strong class="font-black uppercase block">1. Eksekusi Kontrak & Pelaksanaan Event</strong>
                                    Menyusun proposal, memproses penawaran harga, koordinasi logistik lapangan, perizinan acara, dan manajemen vendor.
                                </div>
                            </div>
                            <div class="flex items-start gap-3 p-3 bg-[#f6f3f2] border border-bmg-on-surface">
                                <span class="material-symbols-outlined text-[#bd001a] text-base mt-0.5">check_circle</span>
                                <div>
                                    <strong class="font-black uppercase block">2. Komunikasi & Layanan Pelanggan</strong>
                                    Merespon formulir konsultasi, memberikan update status proyek, serta konfirmasi jadwal meeting.
                                </div>
                            </div>
                            <div class="flex items-start gap-3 p-3 bg-[#f6f3f2] border border-bmg-on-surface">
                                <span class="material-symbols-outlined text-[#bd001a] text-base mt-0.5">check_circle</span>
                                <div>
                                    <strong class="font-black uppercase block">3. Kepatuhan Hukum & Finansial</strong>
                                    Penerbitan invoice resmi, bukti potong pajak, dan kepatuhan terhadap regulasi perbankan Indonesia.
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                {{-- Section 4: Keamanan Data --}}
                <section id="keamanan-data" class="bg-white border-2 border-bmg-on-surface p-6 md:p-8 shadow-[5px_5px_0px_#1c1b1b]">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="w-8 h-8 rounded-none bg-[#bd001a] text-white flex items-center justify-center font-mono font-bold text-sm border border-bmg-on-surface">
                            04
                        </span>
                        <h2 class="font-display text-2xl font-black uppercase text-bmg-on-surface tracking-tight">
                            Perlindungan & Keamanan Data
                        </h2>
                    </div>
                    <div class="space-y-4 text-sm text-[#1c1b1b] font-medium leading-relaxed">
                        <p>
                            Kami menerapkan standar keamanan teknis dan organisasional tingkat industri untuk melindungi data Anda dari akses tanpa izin, kebocoran, pengubahan, atau perusakan:
                        </p>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-xs">
                            <div class="p-4 border-2 border-bmg-on-surface bg-[#e8f5e9]">
                                <h5 class="font-black uppercase text-[#2e7d32] mb-1">Enkripsi SSL/TLS 256-bit</h5>
                                <p class="text-[#2e7d32]">Semua transmisi data antara browser Anda dan server kami dienkripsi secara penuh menggunakan HTTPS.</p>
                            </div>
                            <div class="p-4 border-2 border-bmg-on-surface bg-[#e8eaf6]">
                                <h5 class="font-black uppercase text-[#283593] mb-1">Akses Berbasis Peran (RBAC)</h5>
                                <p class="text-[#283593]">Hanya staf yang memiliki otoritas resmi terkait proyek Anda yang dapat mengakses data komunikasi dan kontrak.</p>
                            </div>
                        </div>
                    </div>
                </section>

                {{-- Section 5: Pihak Ketiga --}}
                <section id="pihak-ketiga" class="bg-white border-2 border-bmg-on-surface p-6 md:p-8 shadow-[5px_5px_0px_#1c1b1b]">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="w-8 h-8 rounded-none bg-[#bd001a] text-white flex items-center justify-center font-mono font-bold text-sm border border-bmg-on-surface">
                            05
                        </span>
                        <h2 class="font-display text-2xl font-black uppercase text-bmg-on-surface tracking-tight">
                            Pembagian Data ke Pihak Ketiga
                        </h2>
                    </div>
                    <div class="space-y-3 text-sm text-[#1c1b1b] font-medium leading-relaxed">
                        <p class="font-bold text-[#bd001a]">
                            Kami TIDAK PERNAH menjual, menyewakan, atau memperdagangkan data pribadi Anda kepada pihak manapun untuk keperluan komersial mereka.
                        </p>
                        <p>
                            Data hanya dapat diteruskan kepada pihak ketiga dalam situasi yang sangat terbatas:
                        </p>
                        <ul class="list-disc list-inside text-xs space-y-2 text-[#5d3f3c]">
                            <li><strong>Mitra & Subkontraktor Resmi:</strong> Vendor panggung, audio visual, atau perizinan venue yang terikat perjanjian kerahasiaan (NDA).</li>
                            <li><strong>Kewajiban Hukum:</strong> Apabila diwajibkan oleh putusan pengadilan atau aparat penegak hukum Republik Indonesia yang sah.</li>
                        </ul>
                    </div>
                </section>

                {{-- Section 6: Hak-Hak Anda --}}
                <section id="hak-pengguna" class="bg-white border-2 border-bmg-on-surface p-6 md:p-8 shadow-[5px_5px_0px_#1c1b1b]">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="w-8 h-8 rounded-none bg-[#bd001a] text-white flex items-center justify-center font-mono font-bold text-sm border border-bmg-on-surface">
                            06
                        </span>
                        <h2 class="font-display text-2xl font-black uppercase text-bmg-on-surface tracking-tight">
                            Hak-Hak Anda sebagai Subjek Data
                        </h2>
                    </div>
                    <p class="text-sm text-[#5d3f3c] mb-4 font-medium">
                        Berdasarkan Undang-Undang Perlindungan Data Pribadi (UU PDP), Anda berhak untuk:
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-xs">
                        <div class="p-3 border border-bmg-on-surface bg-[#fcf9f8]">
                            <strong class="font-black uppercase block mb-1">✓ Hak Memperoleh Informasi & Akses</strong>
                            Mengetahui kejelasan identitas, dasar kepentingan hukum, dan salinan data Anda yang kami simpan.
                        </div>
                        <div class="p-3 border border-bmg-on-surface bg-[#fcf9f8]">
                            <strong class="font-black uppercase block mb-1">✓ Hak Pembaruan & Koreksi</strong>
                            Memperbaiki atau memperbarui data pribadi Anda yang tidak akurat atau tidak lengkap.
                        </div>
                        <div class="p-3 border border-bmg-on-surface bg-[#fcf9f8]">
                            <strong class="font-black uppercase block mb-1">✓ Hak Penghentian & Penghapusan</strong>
                            Meminta kami untuk menghapus atau memusnahkan data pribadi Anda sesuai dengan ketentuan perundangan.
                        </div>
                        <div class="p-3 border border-bmg-on-surface bg-[#fcf9f8]">
                            <strong class="font-black uppercase block mb-1">✓ Hak Penarikan Persetujuan</strong>
                            Menarik kembali persetujuan pemrosesan data untuk keperluan materi promosi/marketing kami.
                        </div>
                    </div>
                </section>

                {{-- Section 7: Cookie --}}
                <section id="cookie" class="bg-white border-2 border-bmg-on-surface p-6 md:p-8 shadow-[5px_5px_0px_#1c1b1b]">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="w-8 h-8 rounded-none bg-[#bd001a] text-white flex items-center justify-center font-mono font-bold text-sm border border-bmg-on-surface">
                            07
                        </span>
                        <h2 class="font-display text-2xl font-black uppercase text-bmg-on-surface tracking-tight">
                            Kebijakan Cookie & Teknologi Pelacak
                        </h2>
                    </div>
                    <div class="space-y-3 text-sm text-[#1c1b1b] font-medium leading-relaxed">
                        <p>
                            Situs web kami menggunakan cookie untuk meningkatkan navigasi, menganalisis lalu lintas pengguna, dan mengingat preferensi Anda. Anda dapat mengatur browser Anda untuk menolak seluruh atau sebagian cookie, namun beberapa fitur situs web mungkin tidak dapat berjalan optimal.
                        </p>
                    </div>
                </section>

                {{-- Section 8: Kontak & Pengaduan --}}
                <section id="kontak-dpo" class="bg-[#bd001a] text-white border-2 border-bmg-on-surface p-6 md:p-8 shadow-[6px_6px_0px_#1c1b1b]">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="w-8 h-8 rounded-none bg-white text-[#bd001a] flex items-center justify-center font-mono font-bold text-sm border border-bmg-on-surface">
                            08
                        </span>
                        <h2 class="font-display text-2xl font-black uppercase tracking-tight">
                            Kontak Resmi Perlindungan Data
                        </h2>
                    </div>
                    <p class="text-sm opacity-90 mb-6 font-medium leading-relaxed">
                        Untuk menggunakan hak-hak Anda, menyampaikan pengaduan, atau meminta klarifikasi lebih lanjut mengenai Kebijakan Privasi ini, silakan hubungi kami melalui saluran resmi berikut:
                    </p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-xs font-mono">
                        <div class="bg-white text-bmg-on-surface p-4 border-2 border-bmg-on-surface shadow-[3px_3px_0px_#000]">
                            <span class="font-black text-[#bd001a] uppercase block mb-1">Email Resmi Privasi</span>
                            <a href="mailto:privacy@bmg.co.id" class="font-bold text-sm hover:underline block">privacy@bmg.co.id</a>
                            <span class="text-gray-500 mt-1 block">Tanggapan dalam 2x24 jam kerja</span>
                        </div>

                        <div class="bg-white text-bmg-on-surface p-4 border-2 border-bmg-on-surface shadow-[3px_3px_0px_#000]">
                            <span class="font-black text-[#3759b3] uppercase block mb-1">Kantor Operasional</span>
                            <p class="font-bold text-sm">Gedung Gemilang Tower Lt. 14</p>
                            <span class="text-gray-500 mt-1 block">Jl. Jend. Sudirman Kav. 88, Jakarta Pusat</span>
                        </div>
                    </div>

                    <div class="mt-8 pt-6 border-t border-white/20 flex flex-wrap items-center justify-between gap-4">
                        <a href="{{ route('home') }}" class="inline-flex items-center gap-2 bg-white text-bmg-on-surface font-black uppercase text-xs px-6 py-3 border border-bmg-on-surface shadow-[3px_3px_0px_#000] hover:bg-[#f0eded] transition-all">
                            <span>←</span> Kembali ke Halaman Utama
                        </a>
                        <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 bg-[#3759b3] text-white font-black uppercase text-xs px-6 py-3 border border-bmg-on-surface shadow-[3px_3px_0px_#000] hover:bg-[#2e4c9e] transition-all">
                            Hubungi Tim Kami <span>→</span>
                        </a>
                    </div>
                </section>

            </main>
        </div>

    </div>
</div>
@endsection
