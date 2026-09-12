<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Khalfani Project Computer - Minimalist IT Solutions & Portfolio</title>

    <!-- SEO Meta Tags -->
    <meta name="description" content="Khalfani Project Computer - Layanan IT Minimalist & Profesional: Mikrokontroller IoT, Aplikasi Website Laravel, Jaringan Server MikroTik, dan Service PC Workstation.">
    <meta name="author" content="Khalfani Project Computer">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Inter"', 'sans-serif'],
                        display: ['"Space Grotesk"', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            50: '#f4f4f5',
                            100: '#e4e4e7',
                            400: '#a1a1aa',
                            500: '#71717a',
                            900: '#18181b',
                            950: '#09090b',
                            accent: '#3b82f6',
                            emerald: '#10b981'
                        }
                    }
                }
            }
        }
    </script>

    <style>
        body {
            background-color: #09090b;
            color: #f4f4f5;
        }

        .minimal-card {
            background: #121215;
            border: 1px solid #27272a;
            transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .minimal-card:hover {
            border-color: #52525b;
            transform: translateY(-2px);
        }

        .minimal-input {
            background-color: #18181b;
            border: 1px solid #27272a;
            color: #ffffff;
            transition: border-color 0.2s ease;
        }

        .minimal-input:focus {
            border-color: #3b82f6;
            outline: none;
        }

        .subtle-grid {
            background-size: 32px 32px;
            background-image: 
                radial-gradient(circle, rgba(255, 255, 255, 0.05) 1px, transparent 1px);
        }
    </style>
</head>
<body class="font-sans antialiased bg-brand-950 text-brand-50 subtle-grid min-h-screen selection:bg-blue-600 selection:text-white">

    <!-- NAVBAR -->
    <header class="sticky top-0 z-50 bg-brand-950/80 backdrop-blur-md border-b border-zinc-800/80 px-4 lg:px-12 py-4">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <a href="#" class="flex items-center gap-3">
                <div class="w-8 h-8 rounded-lg bg-white text-black font-display font-extrabold flex items-center justify-center text-sm tracking-tighter">
                    KPC
                </div>
                <div class="flex flex-col">
                    <span class="font-display font-bold text-base tracking-tight text-white uppercase">
                        KHALFANI <span class="text-zinc-400 font-normal">PROJECT COMPUTER</span>
                    </span>
                </div>
            </a>

            <!-- Nav Links -->
            <nav class="hidden md:flex items-center gap-8 text-xs font-medium tracking-wide text-zinc-400">
                <a href="#services" class="hover:text-white transition-colors">Layanan</a>
                <a href="#portfolio" class="hover:text-white transition-colors">Portofolio</a>
                <a href="#estimator" class="hover:text-white transition-colors">Kalkulator Estimasi</a>
                <a href="#contact" class="hover:text-white transition-colors">Kontak</a>
            </nav>

            <div class="flex items-center gap-3">
                <a href="#contact" class="px-4 py-2 rounded-lg bg-white hover:bg-zinc-200 text-black font-semibold text-xs transition-all">
                    Hubungi Kami
                </a>
            </div>
        </div>
    </header>

    <!-- HERO SECTION -->
    <section class="max-w-5xl mx-auto px-4 lg:px-8 pt-20 pb-24 text-center">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-zinc-900 border border-zinc-800 text-zinc-400 text-xs font-mono mb-8">
            <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
            <span>Minimalist IT Engineering &amp; Solutions</span>
        </div>

        <h1 class="font-display text-4xl sm:text-6xl font-extrabold text-white tracking-tight leading-tight mb-6">
            Khalfani Project Computer
        </h1>

        <p class="text-zinc-400 text-base sm:text-lg max-w-2xl mx-auto leading-relaxed mb-10 font-normal">
            Solusi teknologi tepat guna dalam 4 bidang utama: <br class="hidden sm:inline" />
            <span class="text-white font-medium">Mikrokontroller &amp; IoT</span>, 
            <span class="text-white font-medium">Aplikasi Website</span>, 
            <span class="text-white font-medium">Jaringan Server</span>, dan 
            <span class="text-white font-medium">Service PC Workstation</span>.
        </p>

        <div class="flex flex-wrap items-center justify-center gap-4">
            <a href="#portfolio" class="px-6 py-3 rounded-lg bg-white text-black hover:bg-zinc-200 font-semibold text-xs transition-all">
                Lihat Semua Projek
            </a>
            <a href="#estimator" class="px-6 py-3 rounded-lg bg-zinc-900 hover:bg-zinc-800 text-zinc-200 border border-zinc-800 font-semibold text-xs transition-all">
                Simulasi Biaya
            </a>
        </div>
    </section>

    <!-- 4 MAIN SERVICES SECTION -->
    <section id="services" class="max-w-6xl mx-auto px-4 lg:px-8 py-16 border-t border-zinc-900">
        <div class="mb-12">
            <h2 class="text-xs font-mono font-semibold text-zinc-400 uppercase tracking-widest mb-2">Bidang Keahlian</h2>
            <p class="font-display text-2xl sm:text-3xl font-bold text-white">Layanan &amp; Spesialisasi KPC</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

            <!-- Card 1: Mikrokontroller -->
            <div class="minimal-card rounded-xl p-6 flex flex-col justify-between">
                <div>
                    <div class="text-2xl mb-4">🤖</div>
                    <h3 class="font-display text-lg font-bold text-white mb-2">Mikrokontroller &amp; IoT</h3>
                    <p class="text-zinc-400 text-xs leading-relaxed mb-6">
                        Desain dan perakitan hardware berbasis ESP32, Arduino, dan Raspberry Pi terintegrasi sensor &amp; IoT Dashboard.
                    </p>
                </div>
                <div class="pt-4 border-t border-zinc-800 text-[11px] font-mono text-zinc-500 space-y-1">
                    <div>• Smart Home &amp; Automation</div>
                    <div>• Telemetri Sensor Real-time</div>
                    <div>• RFID &amp; Solenoid Control</div>
                </div>
            </div>

            <!-- Card 2: Website -->
            <div class="minimal-card rounded-xl p-6 flex flex-col justify-between">
                <div>
                    <div class="text-2xl mb-4">🌐</div>
                    <h3 class="font-display text-lg font-bold text-white mb-2">Aplikasi Website</h3>
                    <p class="text-zinc-400 text-xs leading-relaxed mb-6">
                        Pengembangan aplikasi web modern responsif menggunakan Laravel 13, Tailwind CSS, REST API, &amp; Database MySQL/SQLite.
                    </p>
                </div>
                <div class="pt-4 border-t border-zinc-800 text-[11px] font-mono text-zinc-500 space-y-1">
                    <div>• Company Profile &amp; Landing Page</div>
                    <div>• E-Commerce &amp; Payment Gateway</div>
                    <div>• Sistem Informasi Manajemen</div>
                </div>
            </div>

            <!-- Card 3: Jaringan -->
            <div class="minimal-card rounded-xl p-6 flex flex-col justify-between">
                <div>
                    <div class="text-2xl mb-4">📡</div>
                    <h3 class="font-display text-lg font-bold text-white mb-2">Jaringan Komputer</h3>
                    <p class="text-zinc-400 text-xs leading-relaxed mb-6">
                        Instalasi dan konfigurasi Router Board MikroTik, Hotspot Voucher, WireGuard VPN Mesh, &amp; Firewall Server.
                    </p>
                </div>
                <div class="pt-4 border-t border-zinc-800 text-[11px] font-mono text-zinc-500 space-y-1">
                    <div>• Management Bandwidth Routing</div>
                    <div>• VPN Inter-Branch Secure</div>
                    <div>• Server Linux Ubuntu Setup</div>
                </div>
            </div>

            <!-- Card 4: Service PC -->
            <div class="minimal-card rounded-xl p-6 flex flex-col justify-between">
                <div>
                    <div class="text-2xl mb-4">💻</div>
                    <h3 class="font-display text-lg font-bold text-white mb-2">Service PC &amp; Laptop</h3>
                    <p class="text-zinc-400 text-xs leading-relaxed mb-6">
                        Perakitan PC Workstation Gaming/Editing, perbaikan hardware motherboard, tune-up OS, &amp; penyelamatan data.
                    </p>
                </div>
                <div class="pt-4 border-t border-zinc-800 text-[11px] font-mono text-zinc-500 space-y-1">
                    <div>• Custom Assembly Rig</div>
                    <div>• Hardware Repair &amp; Cleaning</div>
                    <div>• Data Recovery &amp; Upgrade SSD</div>
                </div>
            </div>

        </div>
    </section>

    <!-- PORTFOLIO SHOWCASE -->
    <section id="portfolio" class="max-w-6xl mx-auto px-4 lg:px-8 py-16 border-t border-zinc-900">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6">
            <div>
                <h2 class="text-xs font-mono font-semibold text-zinc-400 uppercase tracking-widest mb-2">Kumpulan Karya</h2>
                <p class="font-display text-2xl sm:text-3xl font-bold text-white">Portofolio Projek Khalfani</p>
            </div>

            <!-- Minimal Tab Filters -->
            <div class="flex flex-wrap gap-2">
                <button onclick="filterCategory('all')" id="btn-all" class="filter-btn px-3 py-1.5 rounded-lg text-xs font-medium bg-white text-black">
                    Semua
                </button>
                <button onclick="filterCategory('mikro')" id="btn-mikro" class="filter-btn px-3 py-1.5 rounded-lg text-xs font-medium text-zinc-400 hover:text-white bg-zinc-900 border border-zinc-800">
                    Mikrokontroller
                </button>
                <button onclick="filterCategory('web')" id="btn-web" class="filter-btn px-3 py-1.5 rounded-lg text-xs font-medium text-zinc-400 hover:text-white bg-zinc-900 border border-zinc-800">
                    Website
                </button>
                <button onclick="filterCategory('jaringan')" id="btn-jaringan" class="filter-btn px-3 py-1.5 rounded-lg text-xs font-medium text-zinc-400 hover:text-white bg-zinc-900 border border-zinc-800">
                    Jaringan
                </button>
                <button onclick="filterCategory('pc')" id="btn-pc" class="filter-btn px-3 py-1.5 rounded-lg text-xs font-medium text-zinc-400 hover:text-white bg-zinc-900 border border-zinc-800">
                    Service PC
                </button>
            </div>
        </div>

        <!-- Grid Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="portfolio-grid">

            <!-- Item 1: Mikrokontroller Smart GreenHouse -->
            <div class="portfolio-item mikro minimal-card rounded-xl p-6">
                <div class="flex items-center justify-between text-xs font-mono text-zinc-400 mb-4">
                    <span class="px-2.5 py-0.5 rounded bg-zinc-800 text-zinc-300">Mikrokontroller IoT</span>
                    <span>ESP32</span>
                </div>
                <h3 class="font-display text-lg font-bold text-white mb-2">Smart Greenhouse Monitoring</h3>
                <p class="text-zinc-400 text-xs leading-relaxed mb-6">
                    Sistem pemantauan suhu, kelembaban tanah, dan penyiraman otomatis terintegrasi dashboard Telegram Bot.
                </p>
                <div class="flex items-center justify-between pt-4 border-t border-zinc-800">
                    <span class="text-[11px] font-mono text-zinc-500">ESP32 + DHT22</span>
                    <button onclick="openModal('Smart Greenhouse Monitoring', 'ESP32 DevKit, Sensor DHT22, Soil Moisture, Relay 12V, Telegram Bot API', 'Menghemat konsumsi air penyiraman hingga 40% dan mengontrol lingkungan tanaman secara real-time.')" class="text-xs font-semibold text-white hover:text-blue-400 transition-colors">
                        Spesifikasi &rarr;
                    </button>
                </div>
            </div>

            <!-- Item 2: E-Commerce Website -->
            <div class="portfolio-item web minimal-card rounded-xl p-6">
                <div class="flex items-center justify-between text-xs font-mono text-zinc-400 mb-4">
                    <span class="px-2.5 py-0.5 rounded bg-zinc-800 text-zinc-300">Aplikasi Website</span>
                    <span>Laravel 13</span>
                </div>
                <h3 class="font-display text-lg font-bold text-white mb-2">Custom E-Commerce Storefront</h3>
                <p class="text-zinc-400 text-xs leading-relaxed mb-4">
                    Web penjualan produk custom dengan sistem keranjang belanja, checkout otomatis Midtrans, &amp; stok real-time.
                </p>
                <div class="flex items-center justify-between pt-4 border-t border-zinc-800">
                    <span class="text-[11px] font-mono text-zinc-500">Laravel + Tailwind</span>
                    <button onclick="openModal('Custom E-Commerce Storefront', 'Laravel 13, Tailwind CSS, MySQL, Midtrans Payment API', 'Mampu memproses transaksi otomatis dalam waktu kurang dari 3 detik dengan keamanan tinggi.')" class="text-xs font-semibold text-white hover:text-blue-400 transition-colors">
                        Spesifikasi &rarr;
                    </button>
                </div>
            </div>

            <!-- Item 3: MikroTik Networking -->
            <div class="portfolio-item jaringan minimal-card rounded-xl p-6">
                <div class="flex items-center justify-between text-xs font-mono text-zinc-400 mb-4">
                    <span class="px-2.5 py-0.5 rounded bg-zinc-800 text-zinc-300">Jaringan Server</span>
                    <span>MikroTik</span>
                </div>
                <h3 class="font-display text-lg font-bold text-white mb-2">Voucher Hotspot &amp; WireGuard VPN</h3>
                <p class="text-zinc-400 text-xs leading-relaxed mb-4">
                    Manajemen bandwidth kantor, sistem login voucher internet, dan inter-koneksi VPN aman antar cabang.
                </p>
                <div class="flex items-center justify-between pt-4 border-t border-zinc-800">
                    <span class="text-[11px] font-mono text-zinc-500">RB750Gr3 + Mikhmon</span>
                    <button onclick="openModal('Voucher Hotspot & WireGuard VPN', 'MikroTik RouterBoard RB750Gr3, Mikhmon Server, WireGuard Protocol', 'Memastikan koneksi jaringan kantor berjalan tanpa lag dengan prioritas trafik bisnis.')" class="text-xs font-semibold text-white hover:text-blue-400 transition-colors">
                        Spesifikasi &rarr;
                    </button>
                </div>
            </div>

            <!-- Item 4: Custom Assembly PC -->
            <div class="portfolio-item pc minimal-card rounded-xl p-6">
                <div class="flex items-center justify-between text-xs font-mono text-zinc-400 mb-4">
                    <span class="px-2.5 py-0.5 rounded bg-zinc-800 text-zinc-300">Service PC</span>
                    <span>Workstation</span>
                </div>
                <h3 class="font-display text-lg font-bold text-white mb-2">Rig Editing &amp; Render PC</h3>
                <p class="text-zinc-400 text-xs leading-relaxed mb-4">
                    Perakitan komputer spesifikasi tinggi khusus 3D Rendering, manajemen suhu liquid cooling, &amp; cable management.
                </p>
                <div class="flex items-center justify-between pt-4 border-t border-zinc-800">
                    <span class="text-[11px] font-mono text-zinc-500">Core i9 + RTX 4090</span>
                    <button onclick="openModal('Rig Editing & Render PC', 'Intel Core i9, 64GB DDR5 RAM, RTX 4090 24GB, AIO 360mm Liquid Cooler', 'Lulus pengujian beban kerja 100% CPU/GPU selama 24 jam nonstop tanpa overheating.')" class="text-xs font-semibold text-white hover:text-blue-400 transition-colors">
                        Spesifikasi &rarr;
                    </button>
                </div>
            </div>

            <!-- Item 5: Smart Door Lock RFID -->
            <div class="portfolio-item mikro minimal-card rounded-xl p-6">
                <div class="flex items-center justify-between text-xs font-mono text-zinc-400 mb-4">
                    <span class="px-2.5 py-0.5 rounded bg-zinc-800 text-zinc-300">Mikrokontroller IoT</span>
                    <span>NodeMCU</span>
                </div>
                <h3 class="font-display text-lg font-bold text-white mb-2">Smart RFID Access Door</h3>
                <p class="text-zinc-400 text-xs leading-relaxed mb-4">
                    Kunci pintu ruangan berbasis kartu RFID / e-KTP dengan pencatatan waktu log pembukaan di database.
                </p>
                <div class="flex items-center justify-between pt-4 border-t border-zinc-800">
                    <span class="text-[11px] font-mono text-zinc-500">RFID RC522 + Solenoid</span>
                    <button onclick="openModal('Smart RFID Access Door', 'NodeMCU ESP8266, RFID RC522, Relay 12V, Solenoid Door Lock', 'Menjamin hanya personel berizin yang dapat membuka ruangan dengan log tercatat otomatis.')" class="text-xs font-semibold text-white hover:text-blue-400 transition-colors">
                        Spesifikasi &rarr;
                    </button>
                </div>
            </div>

            <!-- Item 6: PC Repair & Upgrade SSD -->
            <div class="portfolio-item pc minimal-card rounded-xl p-6">
                <div class="flex items-center justify-between text-xs font-mono text-zinc-400 mb-4">
                    <span class="px-2.5 py-0.5 rounded bg-zinc-800 text-zinc-300">Service PC</span>
                    <span>Hardware Tune</span>
                </div>
                <h3 class="font-display text-lg font-bold text-white mb-2">Motherboard Repair &amp; Data Rescue</h3>
                <p class="text-zinc-400 text-xs leading-relaxed mb-4">
                    Perbaikan komponen IC motherboard short, pembersihan thermal paste premium, &amp; pemulihan file terhapus.
                </p>
                <div class="flex items-center justify-between pt-4 border-t border-zinc-800">
                    <span class="text-[11px] font-mono text-zinc-500">Micro Soldering</span>
                    <button onclick="openModal('Motherboard Repair & Data Rescue', 'Micro Soldering Iron, Diagnostic Card, Data Recovery Tools', 'Berhasil mengaktifkan kembali motherboard laptop mati total dan menyelamatkan data 500GB.')" class="text-xs font-semibold text-white hover:text-blue-400 transition-colors">
                        Spesifikasi &rarr;
                    </button>
                </div>
            </div>

        </div>
    </section>

    <!-- ESTIMATOR CALCULATOR -->
    <section id="estimator" class="max-w-4xl mx-auto px-4 lg:px-8 py-16 border-t border-zinc-900">
        <div class="minimal-card rounded-2xl p-8 border-zinc-800">
            <div class="mb-6">
                <h2 class="text-xs font-mono font-semibold text-zinc-400 uppercase tracking-widest mb-1">Kalkulator Ringkas</h2>
                <h3 class="font-display text-2xl font-bold text-white">Simulasi Biaya Projek KPC</h3>
            </div>

            <div class="space-y-3 mb-6">
                <label class="flex items-center justify-between p-3.5 rounded-lg bg-zinc-900 border border-zinc-800 hover:border-zinc-700 cursor-pointer text-xs">
                    <div class="flex items-center gap-3">
                        <input type="checkbox" value="1500000" data-name="Projek Mikrokontroller & IoT" onchange="calculateEstimate()" class="estimate-cb rounded text-blue-500 focus:ring-0">
                        <span class="text-white font-medium">Projek Mikrokontroller &amp; IoT (ESP32/Arduino)</span>
                    </div>
                    <span class="font-mono text-zinc-400">Rp 1.500.000~</span>
                </label>

                <label class="flex items-center justify-between p-3.5 rounded-lg bg-zinc-900 border border-zinc-800 hover:border-zinc-700 cursor-pointer text-xs">
                    <div class="flex items-center gap-3">
                        <input type="checkbox" value="2500000" data-name="Pembuatan Aplikasi Website Custom" onchange="calculateEstimate()" class="estimate-cb rounded text-blue-500 focus:ring-0">
                        <span class="text-white font-medium">Pembuatan Website Custom (Laravel 13)</span>
                    </div>
                    <span class="font-mono text-zinc-400">Rp 2.500.000~</span>
                </label>

                <label class="flex items-center justify-between p-3.5 rounded-lg bg-zinc-900 border border-zinc-800 hover:border-zinc-700 cursor-pointer text-xs">
                    <div class="flex items-center gap-3">
                        <input type="checkbox" value="800000" data-name="Setup Jaringan Router MikroTik" onchange="calculateEstimate()" class="estimate-cb rounded text-blue-500 focus:ring-0">
                        <span class="text-white font-medium">Setup Jaringan &amp; Router MikroTik / Server</span>
                    </div>
                    <span class="font-mono text-zinc-400">Rp 800.000~</span>
                </label>

                <label class="flex items-center justify-between p-3.5 rounded-lg bg-zinc-900 border border-zinc-800 hover:border-zinc-700 cursor-pointer text-xs">
                    <div class="flex items-center gap-3">
                        <input type="checkbox" value="350000" data-name="Service & Maintenance PC Workstation" onchange="calculateEstimate()" class="estimate-cb rounded text-blue-500 focus:ring-0">
                        <span class="text-white font-medium">Service &amp; Maintenance PC Workstation / Laptop</span>
                    </div>
                    <span class="font-mono text-zinc-400">Rp 350.000~</span>
                </label>
            </div>

            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 p-4 rounded-xl bg-zinc-900/60 border border-zinc-800">
                <div>
                    <div class="text-[11px] font-mono text-zinc-400">Total Estimasi Pengerjaan:</div>
                    <div class="text-2xl font-bold font-mono text-emerald-400" id="total-price">Rp 0</div>
                </div>

                <button onclick="sendWhatsAppEstimate()" class="px-6 py-2.5 rounded-lg bg-emerald-600 hover:bg-emerald-500 text-white font-semibold text-xs transition-all flex items-center justify-center gap-2">
                    <span>Kirim rincian via WhatsApp</span>
                </button>
            </div>
        </div>
    </section>

    <!-- CONTACT FORM SECTION -->
    <section id="contact" class="max-w-4xl mx-auto px-4 lg:px-8 py-16 border-t border-zinc-900">
        <div class="text-center max-w-xl mx-auto mb-10">
            <h2 class="text-xs font-mono font-semibold text-zinc-400 uppercase tracking-widest mb-1">Hubungi KPC</h2>
            <h3 class="font-display text-2xl font-bold text-white">Konsultasikan Kebutuhan IT Anda</h3>
        </div>

        <form onsubmit="handleFormSubmit(event)" class="minimal-card rounded-2xl p-8 space-y-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-medium text-zinc-400 mb-1">Nama Lengkap</label>
                    <input type="text" required placeholder="Nama Anda" class="w-full px-4 py-2.5 rounded-lg minimal-input text-xs">
                </div>
                <div>
                    <label class="block text-xs font-medium text-zinc-400 mb-1">No. WhatsApp / Email</label>
                    <input type="text" required placeholder="08xxx / email@domain.com" class="w-full px-4 py-2.5 rounded-lg minimal-input text-xs">
                </div>
            </div>

            <div>
                <label class="block text-xs font-medium text-zinc-400 mb-1">Kategori Layanan</label>
                <select class="w-full px-4 py-2.5 rounded-lg minimal-input text-xs">
                    <option value="mikro">🤖 Mikrokontroller &amp; IoT System</option>
                    <option value="web">🌐 Aplikasi Website (Laravel)</option>
                    <option value="jaringan">📡 Jaringan MikroTik &amp; Server</option>
                    <option value="pc">💻 Service PC &amp; Workstation</option>
                </select>
            </div>

            <div>
                <label class="block text-xs font-medium text-zinc-400 mb-1">Pesan / Detail Projek</label>
                <textarea rows="3" required placeholder="Tuliskan gambaran singkat kebutuhan projek Anda..." class="w-full px-4 py-2.5 rounded-lg minimal-input text-xs"></textarea>
            </div>

            <button type="submit" class="w-full py-3 rounded-lg bg-white hover:bg-zinc-200 text-black font-bold text-xs transition-all">
                Kirim Pengajuan Konsultasi
            </button>
        </form>
    </section>

    <!-- FOOTER -->
    <footer class="border-t border-zinc-900 py-10 bg-brand-950">
        <div class="max-w-6xl mx-auto px-4 lg:px-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-zinc-500 font-mono">
            <div>
                &copy; {{ date('Y') }} Khalfani Project Computer. All rights reserved.
            </div>
            <div>
                Laravel {{ app()->version() }} • Minimalist Engineering
            </div>
        </div>
    </footer>

    <!-- MODAL SPECIFICATION DETAIL -->
    <div id="project-modal" class="fixed inset-0 z-50 bg-black/80 backdrop-blur-sm hidden items-center justify-center p-4">
        <div class="minimal-card rounded-xl max-w-md w-full p-6 relative">
            <button onclick="closeModal()" class="absolute top-4 right-4 text-zinc-400 hover:text-white text-sm">
                ✕
            </button>
            <div class="text-[11px] font-mono text-zinc-400 mb-1">SPESIFIKASI DETAIL</div>
            <h3 class="font-display text-lg font-bold text-white mb-4" id="modal-title">Judul Projek</h3>

            <div class="space-y-3 text-xs mb-6">
                <div class="p-3 rounded-lg bg-zinc-900 border border-zinc-800">
                    <div class="text-zinc-400 font-medium mb-1">Komponen &amp; Toolstack:</div>
                    <div class="text-zinc-200 font-mono" id="modal-specs">...</div>
                </div>

                <div class="p-3 rounded-lg bg-zinc-900 border border-zinc-800">
                    <div class="text-zinc-400 font-medium mb-1">Hasil Implementasi:</div>
                    <div class="text-zinc-300" id="modal-impact">...</div>
                </div>
            </div>

            <div class="flex justify-end">
                <button onclick="closeModal()" class="px-4 py-2 rounded-lg bg-zinc-800 text-white hover:bg-zinc-700 font-semibold text-xs">
                    Tutup
                </button>
            </div>
        </div>
    </div>

    <!-- TOAST -->
    <div id="toast" class="fixed bottom-6 right-6 z-50 bg-white text-black px-4 py-2.5 rounded-lg shadow-xl font-semibold text-xs hidden items-center gap-2">
        <span>✓</span>
        <span id="toast-message">Pesan Anda berhasil terkirim.</span>
    </div>

    <!-- JAVASCRIPT -->
    <script>
        function filterCategory(cat) {
            const items = document.querySelectorAll('.portfolio-item');
            const btns = document.querySelectorAll('.filter-btn');

            btns.forEach(b => {
                b.classList.remove('bg-white', 'text-black');
                b.classList.add('text-zinc-400', 'bg-zinc-900', 'border', 'border-zinc-800');
            });

            const active = document.getElementById(`btn-${cat}`);
            if (active) {
                active.classList.add('bg-white', 'text-black');
                active.classList.remove('text-zinc-400', 'bg-zinc-900', 'border');
            }

            items.forEach(i => {
                if (cat === 'all' || i.classList.contains(cat)) {
                    i.style.display = 'block';
                } else {
                    i.style.display = 'none';
                }
            });
        }

        function openModal(title, specs, impact) {
            document.getElementById('modal-title').innerText = title;
            document.getElementById('modal-specs').innerText = specs;
            document.getElementById('modal-impact').innerText = impact;
            
            const modal = document.getElementById('project-modal');
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }

        function closeModal() {
            const modal = document.getElementById('project-modal');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }

        function calculateEstimate() {
            const cbs = document.querySelectorAll('.estimate-cb:checked');
            let total = 0;
            cbs.forEach(c => total += parseInt(c.value));
            document.getElementById('total-price').innerText = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR', maximumFractionDigits: 0 }).format(total);
        }

        function sendWhatsAppEstimate() {
            const cbs = document.querySelectorAll('.estimate-cb:checked');
            if (cbs.length === 0) {
                showToast('Pilih minimal 1 item untuk estimasi.');
                return;
            }
            let list = [];
            cbs.forEach(c => list.push(c.getAttribute('data-name')));
            const price = document.getElementById('total-price').innerText;
            const msg = `Halo Khalfani Project Computer, saya berminat dengan:\n- ${list.join('\n- ')}\n\nEstimasi Total: ${price}`;
            window.open(`https://wa.me/6281234567890?text=${encodeURIComponent(msg)}`, '_blank');
        }

        function handleFormSubmit(e) {
            e.preventDefault();
            showToast('Pesan konsultasi berhasil dikirim!');
            e.target.reset();
        }

        function showToast(msg) {
            const toast = document.getElementById('toast');
            document.getElementById('toast-message').innerText = msg;
            toast.classList.remove('hidden');
            toast.classList.add('flex');
            setTimeout(() => {
                toast.classList.add('hidden');
                toast.classList.remove('flex');
            }, 3000);
        }
    </script>
</body>
</html>
