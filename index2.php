<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reza Ahmad Al Ghifari | Portfolio</title>

    <link href="public/assets/style.css" rel="stylesheet">
    <link href="public/assets/script.js" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://api.iconify.design">

<!-- Preload gambar utama agar loading mobile lebih cepat -->
<link rel="preload" as="image" href="foto_profil.webp">

<!-- Google Fonts (Online) -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

<!-- Tailwind CSS Lokal (Hasil Build) -->
<link href="dist/output.css" rel="stylesheet">

<!-- Iconify CDN (Menggunakan 'defer' agar tidak menghambat loading halaman) -->
<script src="https://code.iconify.design/3/3.1.1/iconify.min.js" defer></script>
    
    <script>

   
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: { primary: '#6366F1' }
                }
            }
        }
        
    </script>


</head>

<body class="bg-gray-50 dark:bg-gray-900 text-gray-800 dark:text-gray-200">

    <!-- HEADER -->
    <header class="sticky top-0 z-50 bg-white/80 backdrop-blur dark:bg-gray-800/80 shadow">
        <div class="max-w-6xl mx-auto flex justify-between items-center p-4">

            <h1 class="font-bold text-lg text-primary">ahmadreza.cv</h1>

            <nav class="hidden md:flex gap-6 text-sm font-medium">
                <a href="#about" class="hover:text-primary transition">Tentang</a>
                <a href="#education" class="hover:text-primary transition">Pendidikan</a>
                <a href="#experience" class="hover:text-primary transition">Pengalaman</a>
                <a href="#skills" class="hover:text-primary transition">Skill</a>
                <a href="#projects" class="hover:text-primary transition">Project</a>
                <a href="#contact" class="hover:text-primary transition">Kontak</a>
            </nav>

            <div class="flex items-center gap-3">
                <!-- Dark Mode Icon (Material style) -->
            <button id="darkToggle" 
        class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-gray-200 dark:hover:bg-gray-700 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 active:scale-95"
        title="Ganti Mode Cahaya/Gelap"
        aria-label="Ganti Mode Cahaya/Gelap">
    <span id="themeIcon" class="flex items-center justify-center w-6 h-6"></span>
</button>

<button id="menuBtn" 
        class="md:hidden w-10 h-10 flex items-center justify-center rounded-lg hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors focus:outline-none focus:ring-2 focus:ring-primary"
        aria-label="Buka Menu Navigasi"
        aria-expanded="false"
        aria-controls="mobileMenu">
    <span class="text-2xl line-height-0">☰</span>
</button>
            </div>

        </div>

        <div id="mobileMenu" class="hidden md:hidden px-4 pb-4 space-y-2 text-sm">
            <a href="#about" class="block py-2">Tentang</a>
            <a href="#education" class="block py-2">Pendidikan</a>
            <a href="#experience" class="block py-2">Pengalaman</a>
            <a href="#skills" class="block py-2">Skill</a>
            <a href="#projects" class="block py-2">Project</a>
            <a href="#contact" class="block py-2">Kontak</a>
        </div>
    </header>

<main id="main-content"></main>

   <!-- HERO -->
<section class="max-w-6xl mx-auto px-6 py-16 grid md:grid-cols-2 gap-10 items-center">

    <div class="relative flex justify-center">
        <!-- Blur background yang ngikutin lebar foto -->
        <div class="absolute w-44 md:w-60 h-64 md:h-80 bg-indigo-200 dark:bg-indigo-900 rounded-2xl blur-3xl opacity-40"></div>

       
<div class="relative flex justify-center w-44 md:w-60 aspect-[3/4] bg-gray-200 dark:bg-gray-700 rounded-2xl overflow-hidden">
    <img src="foto_profil.webp" 
         alt="Foto Profil Reza Ahmad Al Ghifari" 
         width="600" 
         height="800" 
         loading="eager" 
         fetchpriority="high"
         class="relative w-full h-full object-cover rounded-2xl shadow-2xl border-4 border-white dark:border-gray-800 transition-opacity duration-300">
</div>
    </div>

    <div class="text-center md:text-left">
        <h1 class="text-3xl md:text-4xl font-bold mb-2">
            Reza Ahmad Al Ghifari
        </h1>

        <p class="text-gray-500 mb-4">
            Digital Marketing • Desain Grafis • Web Developer
        </p>

        <div class="w-20 h-1 bg-indigo-500 rounded mb-4 mx-auto md:mx-0"></div>

        <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">
            Lulusan Desain Komunikasi Visual yang kreatif, disiplin, dan cepat beradaptasi. Memiliki pengalaman
            dalam desain visual, pemasaran digital, serta analisis data. Terbiasa mengelola konten digital dan
            mengoptimalkan performa melalui pendekatan berbasis data. Saat ini melanjutkan pendidikan di bidang
            Sistem Informasi untuk memperkuat kemampuan teknologi dan analisis.
        </p>
    </div>

</section>


    <section id="about" class="max-w-5xl mx-auto px-6 py-12">

        <div class="text-center mb-8">
            <h2 class="text-2xl font-semibold">
                Tentang Saya
            </h2>
            <div class="h-1 w-16 bg-indigo-500 mx-auto mt-2 rounded"></div>
        </div>

        <div class="bg-white dark:bg-gray-800 rounded-xl shadow p-6 md:p-8">

            <p class="text-gray-600 dark:text-gray-400 leading-relaxed mb-6">
                Saya adalah individu yang memiliki ketertarikan pada pengembangan digital, khususnya dalam bidang desain
                visual, pemasaran digital, dan pemanfaatan data untuk meningkatkan performa konten. Terbiasa bekerja
                secara terstruktur, adaptif terhadap perubahan, serta memiliki komitmen dalam menghasilkan pekerjaan
                yang efektif dan berdampak.
            </p>

            <div class="grid md:grid-cols-3 gap-4">

                <div
                    class="flex items-center gap-3 p-4 rounded-lg border border-gray-200 dark:border-gray-700 hover:shadow transition">
                    <span class="iconify text-indigo-500 text-xl" data-icon="mdi:palette-outline"></span>
                    <span class="text-sm">UI/UX Design</span>
                </div>

                <div
                    class="flex items-center gap-3 p-4 rounded-lg border border-gray-200 dark:border-gray-700 hover:shadow transition">
                    <span class="iconify text-indigo-500 text-xl" data-icon="mdi:code-tags"></span>
                    <span class="text-sm">Web Development</span>
                </div>

                <div
                    class="flex items-center gap-3 p-4 rounded-lg border border-gray-200 dark:border-gray-700 hover:shadow transition">
                    <span class="iconify text-indigo-500 text-xl" data-icon="mdi:database"></span>
                    <span class="text-sm">Database Management</span>
                </div>

                <div
                    class="flex items-center gap-3 p-4 rounded-lg border border-gray-200 dark:border-gray-700 hover:shadow transition">
                    <span class="iconify text-indigo-500 text-xl" data-icon="mdi:brush"></span>
                    <span class="text-sm">Graphic Design</span>
                </div>

                <div
                    class="flex items-center gap-3 p-4 rounded-lg border border-gray-200 dark:border-gray-700 hover:shadow transition">
                    <span class="iconify text-indigo-500 text-xl" data-icon="mdi:bullhorn"></span>
                    <span class="text-sm">Digital Marketing</span>
                </div>

                <div
                    class="flex items-center gap-3 p-4 rounded-lg border border-gray-200 dark:border-gray-700 hover:shadow transition">
                    <span class="iconify text-indigo-500 text-xl" data-icon="mdi:magnify"></span>
                    <span class="text-sm">SEO Optimization</span>
                </div>

                <div
                    class="flex items-center gap-3 p-4 rounded-lg border border-gray-200 dark:border-gray-700 hover:shadow transition">
                    <span class="iconify text-indigo-500 text-xl" data-icon="mdi:lightbulb-outline"></span>
                    <span class="text-sm">Content Strategy</span>
                </div>

                <div
                    class="flex items-center gap-3 p-4 rounded-lg border border-gray-200 dark:border-gray-700 hover:shadow transition">
                    <span class="iconify text-indigo-500 text-xl" data-icon="mdi:chart-line"></span>
                    <span class="text-sm">Data Analysis</span>
                </div>

                <div
                    class="flex items-center gap-3 p-4 rounded-lg border border-gray-200 dark:border-gray-700 hover:shadow transition">
                    <span class="iconify text-indigo-500 text-xl" data-icon="mdi:video-outline"></span>
                    <span class="text-sm">Content Creation</span>
                </div>

            </div>

        </div>

        </div>

    </section>


    <!-- EDUCATION -->
    <section id="education" class="max-w-5xl mx-auto px-6 py-12">
        <h2 class="text-2xl font-semibold mb-8 relative inline-block">
            Pendidikan
            <span class="block h-1 w-16 bg-indigo-500 mt-2 rounded"></span>
        </h2>

        <div class="space-y-6">

            <div
                class="flex justify-between items-center p-5 bg-indigo-50 dark:bg-gray-800 rounded-xl shadow hover:shadow-lg transition border-l-4 border-indigo-500 overflow-visible">
                <div>
                    <h3 class="font-semibold text-gray-800 dark:text-white">S1 Sistem Informasi</h3>
                    <p class="text-sm text-gray-500 dark:text-gray-400">Universitas Pamulang (2025 - Sekarang)</p>
                </div>

                <div
                    class="relative flex items-center justify-center w-14 h-14 bg-white/50 dark:bg-gray-700/50 rounded-full">
                    <!-- Topi Utama (Z-10 agar di bawah badge) -->
                    <span class="iconify text-indigo-500 text-4xl z-10" data-icon="mdi:school"></span>

                    <!-- Badge IT (Dipaksa ke depan dengan z-20) -->
                    <div
                        class="absolute -bottom-1 -right-1 w-7 h-7 bg-white dark:bg-gray-900 rounded-full shadow-lg border border-indigo-200 dark:border-gray-600 flex items-center justify-center z-20">
                        <span class="iconify text-indigo-600 text-[14px]" data-icon="mdi:code-tags"></span>
                    </div>
                </div>
            </div>

            <div
                class="flex justify-between items-center p-5 mt-4 bg-green-50 dark:bg-gray-800 rounded-xl shadow hover:shadow-lg transition border-l-4 border-green-500 overflow-visible">
                <div>
                    <h3 class="font-semibold text-gray-800 dark:text-white">Desain Komunikasi Visual</h3>
                    <p class="text-sm text-gray-500 dark:text-gray-400">SMK Negeri 1 Tangerang (2022 - 2025)</p>
                </div>

                <div
                    class="relative flex items-center justify-center w-14 h-14 bg-white/50 dark:bg-gray-700/50 rounded-full">
                    <!-- Topi Utama -->
                    <span class="iconify text-green-500 text-4xl z-10" data-icon="mdi:school"></span>

                    <div
                        class="absolute -bottom-1 -right-1 w-7 h-7 bg-white dark:bg-gray-900 rounded-full shadow-lg border border-green-200 dark:border-gray-600 flex items-center justify-center z-20">
                        <span class="iconify text-green-600 text-[14px]" data-icon="mdi:palette"></span>
                    </div>
                </div>
            </div>
    </section>

    

    <section id="skills" class="max-w-5xl mx-auto px-6 py-12">

        <h2 class="text-2xl font-semibold mb-10 text-center relative inline-block">
            Skill
            <span class="block h-1 w-16 bg-indigo-500 mt-2 mx-auto rounded"></span>
        </h2>

        <div class="grid md:grid-cols-2 gap-8">

            <!-- HARD SKILLS -->
            <div class="p-6 bg-white dark:bg-gray-800 rounded-xl shadow border-t-4 border-indigo-500">

                <div class="flex items-center gap-2 mb-4">
                    <h3 class="font-semibold text-lg">Hard Skills</h3>
                </div>

                <div class="flex flex-wrap gap-2 text-sm">
                    <span class="px-3 py-1 bg-indigo-100 text-indigo-600 rounded-full">Photoshop</span>
                    <span class="px-3 py-1 bg-indigo-100 text-indigo-600 rounded-full">Illustrator</span>
                    <span class="px-3 py-1 bg-indigo-100 text-indigo-600 rounded-full">CorelDRAW</span>
                    <span class="px-3 py-1 bg-indigo-100 text-indigo-600 rounded-full">Canva</span>
                    <span class="px-3 py-1 bg-indigo-100 text-indigo-600 rounded-full">CapCut</span>
                    <span class="px-3 py-1 bg-indigo-100 text-indigo-600 rounded-full">Blender</span>
                    <span class="px-3 py-1 bg-indigo-100 text-indigo-600 rounded-full">Microsoft Office</span>
                    <span class="px-3 py-1 bg-indigo-100 text-indigo-600 rounded-full">Google Workspace</span>
                    <span class="px-3 py-1 bg-indigo-100 text-indigo-600 rounded-full">Visual Studio Code</span>
                    <span class="px-3 py-1 bg-indigo-100 text-indigo-600 rounded-full">My SQL</span>
                    <span class="px-3 py-1 bg-indigo-100 text-indigo-600 rounded-full">UI / UX</span>
                </div>

            </div>

            <!-- SOFT SKILLS -->
            <div class="p-6 bg-white dark:bg-gray-800 rounded-xl shadow border-t-4 border-green-500">

                <div class="flex items-center gap-2 mb-4">
                    <h3 class="font-semibold text-lg">Soft Skills</h3>
                </div>

                <div class="flex flex-wrap gap-2 text-sm">
                    <span class="px-3 py-1 bg-green-100 text-green-600 rounded-full">Disiplin</span>
                    <span class="px-3 py-1 bg-green-100 text-green-600 rounded-full">Kerja Tim</span>
                    <span class="px-3 py-1 bg-green-100 text-green-600 rounded-full">Manajemen Waktu</span>
                    <span class="px-3 py-1 bg-green-100 text-green-600 rounded-full">Inisiatif</span>
                    <span class="px-3 py-1 bg-green-100 text-green-600 rounded-full">Tanggung Jawab</span>
                    <span class="px-3 py-1 bg-green-100 text-green-600 rounded-full">Adaptif</span>
                </div>

            </div>

        </div>

    </section>

<!-- CERTIFICATES -->
<section class="max-w-5xl mx-auto px-6 py-12">

    <div class="flex items-center gap-4 mb-10">
        <h2 class="text-3xl font-bold text-gray-800 dark:text-white tracking-tight">
            Sertifikasi & Pelatihan
        </h2>

        <div class="h-[2px] flex-grow bg-gradient-to-r from-indigo-500 to-transparent rounded-full mt-1"></div>
    </div>

    <div class="grid md:grid-cols-2 gap-6 items-stretch">

        <!-- CARD 1 -->
        <a href="https://drive.google.com/file/d/1mfYW_RxEHkng1XZn1d3rsP5v09gIyf7t/view?usp=drive_link"
           target="_blank"
           rel="noopener noreferrer"
           class="relative group flex flex-col justify-between min-h-[260px] p-5 bg-white dark:bg-gray-800 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-700 hover:shadow-xl hover:-translate-y-1 transition-transform transition-shadow duration-300 will-change-transform">

            <div>

                <div class="flex justify-between items-start mb-4">

                    <div class="p-2.5 bg-indigo-50 dark:bg-indigo-900/30 rounded-lg text-indigo-600 dark:text-indigo-400 group-hover:scale-110 transition-transform duration-300">

                        <span class="iconify text-2xl"
                              data-icon="mdi:certificate-outline"></span>

                    </div>

                    <span class="text-xs font-bold px-3 py-1 bg-indigo-100 dark:bg-indigo-900 text-indigo-700 dark:text-indigo-300 rounded-full">
                        2025
                    </span>

                </div>

                <div>

                    <h3 class="text-base font-bold text-gray-800 dark:text-gray-100 leading-snug mb-1 group-hover:text-indigo-600 transition-colors">
                        Pemasaran Digital dengan Kecerdasan Buatan (AI) untuk Wirausaha
                    </h3>

                    <p class="text-sm text-gray-500 dark:text-gray-400 flex items-center gap-1">

                        <span class="iconify"
                              data-icon="mdi:domain"></span>

                        Digital Entrepreneurship Academy

                    </p>

                </div>

            </div>

            <!-- RUANG TETAP -->
            <div class="mt-4 h-5 flex items-center text-xs font-semibold text-indigo-600 dark:text-indigo-400 opacity-100 md:opacity-0 md:group-hover:opacity-100 transition-opacity duration-300">

                Lihat Sertifikat

                <span class="iconify ml-1"
                      data-icon="mdi:arrow-right"></span>

            </div>

        </a>

        <!-- CARD 2 -->
        <a href="https://drive.google.com/file/d/1x3ncYnyUrZg99QhhBm9KNuKUSUzdA1iS/view?usp=drive_link"
           target="_blank"
           rel="noopener noreferrer"
           class="relative group flex flex-col justify-between min-h-[260px] p-5 bg-white dark:bg-gray-800 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-700 hover:shadow-xl hover:-translate-y-1 transition-transform transition-shadow duration-300 will-change-transform">

            <div>

                <div class="flex justify-between items-start mb-4">

                    <div class="p-2.5 bg-emerald-50 dark:bg-emerald-900/30 rounded-lg text-emerald-600 dark:text-emerald-400 group-hover:scale-110 transition-transform duration-300">

                        <span class="iconify text-2xl"
                              data-icon="mdi:certificate-outline"></span>

                    </div>

                    <span class="text-xs font-bold px-3 py-1 bg-emerald-100 dark:bg-emerald-900 text-emerald-700 dark:text-emerald-300 rounded-full">
                        2025
                    </span>

                </div>

                <div>

                    <h3 class="text-base font-bold text-gray-800 dark:text-gray-100 leading-snug mb-1 group-hover:text-emerald-600 transition-colors">
                        Tech for Efficiency: Meningkatkan Daya Saing Bisnis melalui Sistem Informasi
                    </h3>

                    <p class="text-sm text-gray-500 dark:text-gray-400 flex items-center gap-1">

                        <span class="iconify"
                              data-icon="mdi:domain"></span>

                        Universitas Pamulang (National Seminar)

                    </p>

                </div>

            </div>

            <!-- RUANG TETAP -->
            <div class="mt-4 h-5 flex items-center text-xs font-semibold text-emerald-600 dark:text-emerald-400 opacity-100 md:opacity-0 md:group-hover:opacity-100 transition-opacity duration-300">

                Lihat Sertifikat

                <span class="iconify ml-1"
                      data-icon="mdi:arrow-right"></span>

            </div>

        </a>

    </div>

</section>

 <!-- PROJECTS WEB -->
<section id="projects" class="max-w-6xl mx-auto px-6 py-12">

       <div class="flex items-center justify-between mb-10 flex-wrap gap-4">

    <div class="relative">

        <!-- Accent Blur -->
        <div
            class="absolute -top-3 -left-3 w-20 h-20 bg-indigo-200/40 dark:bg-indigo-900/30 blur-2xl rounded-full">
        </div>

        <div class="relative">
            <div class="flex items-center gap-3 mb-2">

                <!-- Icon -->
                <div
                    class="w-11 h-11 rounded-xl bg-gradient-to-br from-indigo-500 to-indigo-600 text-white flex items-center justify-center shadow-lg shadow-indigo-500/20">
                    <span class="iconify text-xl" data-icon="mdi:web"></span>
                </div>

                <!-- Title -->
                <div>
                    <h2
                        class="text-3xl font-bold bg-gradient-to-r from-indigo-600 to-indigo-400 bg-clip-text text-transparent">
                        Project Website
                    </h2>
                    <div class="h-1 w-20 bg-indigo-500 rounded-full mt-1"></div>
                </div>
            </div>
            <!-- Description -->
            <p class="text-sm text-gray-500 dark:text-gray-400 max-w-xl leading-relaxed pl-14">
                Kumpulan project website statis dan dinamis yang saya kerjakan
                dengan fokus pada tampilan modern, performa, dan pengalaman pengguna.
            </p>
        </div>

    </div>

</div>

    <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-6">

        <!-- Azayaka Archive -->
        <div
            class="group overflow-hidden bg-white dark:bg-gray-800 rounded-2xl shadow hover:shadow-2xl transition-all duration-300 border border-indigo-100 dark:border-gray-700 hover:-translate-y-1">

            <div class="relative overflow-hidden">
                <img src="thumbnail/azayakaachive.webp"
                    alt="Thumbnail Azayaka Archive"
                    class="w-full h-48 object-cover group-hover:scale-105 transition duration-500">

                <div
                    class="absolute top-3 right-3 text-[10px] px-3 py-1 rounded-full bg-indigo-500 text-white font-semibold shadow">
                    Dynamic
                </div>
            </div>

            <div class="p-5 flex flex-col justify-between min-h-[220px]">

                <div>
                    <h3 class="font-semibold text-lg mb-2 text-indigo-600 dark:text-indigo-400">
                        Azayaka Archive
                    </h3>

                    <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed">
                        Web untuk mencatat media seperti film dan novel yang telah ditonton dengan mudah dan cepat.
                    </p>
                </div>

                <div class="mt-5 flex flex-col gap-2">
                    <span class="text-xs text-gray-500 font-medium">
                        Stack: Laravel • Supabase • Daisy UI
                    </span>

                    <a href="https://archive.azayaka.my.id" 
   target="_blank" 
   rel="noopener noreferrer"
   class="text-xs text-indigo-500 font-semibold hover:underline decoration-indigo-500 transition-all">
    Lihat Proyek →
</a>
                </div>

            </div>
        </div>

        <!-- BERITA AI -->
        <div
            class="group overflow-hidden bg-white dark:bg-gray-800 rounded-2xl shadow hover:shadow-2xl transition-all duration-300 border border-emerald-100 dark:border-gray-700 hover:-translate-y-1">

            <div class="relative overflow-hidden">
                <img src="thumbnail/project.webp"
                    alt="Thumbnail Berita AI"
                    class="w-full h-48 object-cover group-hover:scale-105 transition duration-500">

                <div
                    class="absolute top-3 right-3 text-[10px] px-3 py-1 rounded-full bg-emerald-500 text-white font-semibold shadow">
                    Dynamic
                </div>
            </div>

            <div class="p-5 flex flex-col justify-between min-h-[220px]">

                <div>
                    <h3 class="font-semibold text-lg mb-2 text-emerald-600 dark:text-emerald-400">
                        Berita AI
                    </h3>

                    <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed">
                        Website berita otomatis berbasis AI untuk menghasilkan headline, artikel, dan kategori berita.
                    </p>
                </div>

                <div class="mt-5 flex flex-col gap-2">
                    <span class="text-xs text-gray-500 font-medium">
                        Stack: Django • AI API • Supabase
                    </span>

                    <span class="text-xs text-gray-400 italic">
                        Coming Soon
                    </span>
                </div>

            </div>
        </div>

        <!-- CATATAN RAHASIA -->
        <div
            class="group overflow-hidden bg-white dark:bg-gray-800 rounded-2xl shadow hover:shadow-2xl transition-all duration-300 border border-rose-100 dark:border-gray-700 hover:-translate-y-1">

            <div class="relative overflow-hidden">
                <img src="thumbnail/project.webp"
                    alt="Thumbnail Catatan Rahasia"
                    class="w-full h-48 object-cover group-hover:scale-105 transition duration-500">

                <div
                    class="absolute top-3 right-3 text-[10px] px-3 py-1 rounded-full bg-rose-500 text-white font-semibold shadow">
                    Dynamic
                </div>
            </div>

            <div class="p-5 flex flex-col justify-between min-h-[220px]">

                <div>
                    <h3 class="font-semibold text-lg mb-2 text-rose-600 dark:text-rose-400">
                        Catatan Rahasia
                    </h3>

                    <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed">
                        Web penyimpanan catatan pribadi dengan fitur keamanan dan tampilan minimalis modern.
                    </p>
                </div>

                <div class="mt-5 flex flex-col gap-2">
                    <span class="text-xs text-gray-500 font-medium">
                        Stack: Supabase • Next.js • Material Design 3
                    </span>

                    <span class="text-xs text-gray-400 italic">
                        Coming Soon
                    </span>
                </div>

            </div>
        </div>

        <!-- LAPAQPAY -->
        <div
            class="group overflow-hidden bg-white dark:bg-gray-800 rounded-2xl shadow hover:shadow-2xl transition-all duration-300 border border-sky-100 dark:border-gray-700 hover:-translate-y-1">

            <div class="relative overflow-hidden">
                <img src="thumbnail/project.webp"
                    alt="Thumbnail LapaqPay"
                    class="w-full h-48 object-cover group-hover:scale-105 transition duration-500">

                <div
                    class="absolute top-3 right-3 text-[10px] px-3 py-1 rounded-full bg-sky-500 text-white font-semibold shadow">
                    Static
                </div>
            </div>

            <div class="p-5 flex flex-col justify-between min-h-[220px]">

                <div>
                    <h3 class="font-semibold text-lg mb-2 text-sky-600 dark:text-sky-400">
                        LapaqPay
                    </h3>

                    <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed">
                        Website pencatatan transaksi sederhana dengan UI modern dan pengalaman pengguna yang ringan.
                    </p>
                </div>

                <div class="mt-5 flex flex-col gap-2">
                    <a href="https://lapaqpay.netlify.app"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="text-sm text-sky-600 hover:underline font-medium">
                        Lihat Project →
                    </a>

                    <span class="text-xs text-gray-400 italic">
                        Repository: Coming Soon
                    </span>
                </div>

            </div>
        </div>

        <!-- PIZZA NUSANTARA -->
        <div
            class="group overflow-hidden bg-white dark:bg-gray-800 rounded-2xl shadow hover:shadow-2xl transition-all duration-300 border border-orange-100 dark:border-gray-700 hover:-translate-y-1">

            <div class="relative overflow-hidden">
                <img src="thumbnail/project.webp"
                    alt="Thumbnail Pizza Nusantara"
                    class="w-full h-48 object-cover group-hover:scale-105 transition duration-500">

                <div
                    class="absolute top-3 right-3 text-[10px] px-3 py-1 rounded-full bg-orange-500 text-white font-semibold shadow">
                    Static
                </div>
            </div>

            <div class="p-5 flex flex-col justify-between min-h-[220px]">

                <div>
                    <h3 class="font-semibold text-lg mb-2 text-orange-600 dark:text-orange-400">
                        Pizza Nusantara
                    </h3>

                    <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed">
                        Website kuliner dengan branding lokal dan tampilan visual modern untuk promosi makanan.
                    </p>
                </div>

                <div class="mt-5 flex flex-col gap-2">
                    <a href="https://cv-mfze.vercel.app/"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="text-sm text-orange-600 hover:underline font-medium">
                        Lihat Project →
                    </a>

                    <a href="https://github.com/ahmadreza0101/pizzanusantara"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="text-sm text-gray-500 hover:text-orange-600 transition">
                        GitHub Repo ↗
                    </a>
                </div>

            </div>
        </div>

        <!-- WEBSITE DKV -->
        <div
            class="group overflow-hidden bg-white dark:bg-gray-800 rounded-2xl shadow hover:shadow-2xl transition-all duration-300 border border-violet-100 dark:border-gray-700 hover:-translate-y-1">

            <div class="relative overflow-hidden">
                <img src="thumbnail/project.webp"
                    alt="Thumbnail Website DKV"
                    class="w-full h-48 object-cover group-hover:scale-105 transition duration-500">

                <div
                    class="absolute top-3 right-3 text-[10px] px-3 py-1 rounded-full bg-violet-500 text-white font-semibold shadow">
                    Static
                </div>
            </div>

            <div class="p-5 flex flex-col justify-between min-h-[220px]">

                <div>
                    <h3 class="font-semibold text-lg mb-2 text-violet-600 dark:text-violet-400">
                        Website DKV SMKN 1 Tangerang
                    </h3>

                    <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed">
                        Website tugas desain komunikasi visual dengan fokus layout, tipografi, dan estetika modern.
                    </p>
                </div>

                <div class="mt-5 flex flex-col gap-2">
                    <a href="https://tugaswebdkv.vercel.app/"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="text-sm text-violet-600 hover:underline font-medium">
                        Lihat Project →
                    </a>

                    <a href="https://github.com/ahmadreza0101/tugaswebdkv"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="text-sm text-gray-500 hover:text-violet-600 transition">
                        GitHub Repo ↗
                    </a>
                </div>

            </div>
        </div>

    </div>
</section>

<!-- MULTIMEDIA PROJECTS -->
<section id="multimedia-projects" class="max-w-6xl mx-auto px-6 py-12">
    <div class="flex items-center justify-between mb-10 flex-wrap gap-4">
    <div class="relative">
        <!-- Accent Blur -->
        <div
            class="absolute -top-3 -left-3 w-20 h-20 bg-pink-200/40 dark:bg-pink-900/30 blur-2xl rounded-full">
        </div>

        <div class="relative">
            <div class="flex items-center gap-3 mb-2">

                <!-- Icon -->
                <div
                    class="w-11 h-11 rounded-xl bg-gradient-to-br from-pink-500 via-purple-500 to-indigo-500 text-white flex items-center justify-center shadow-lg shadow-pink-500/20">
                    <span class="iconify text-xl" data-icon="mdi:palette-outline"></span>
                </div>

                <!-- Title -->
                <div>
                    <h2
                        class="text-3xl font-bold bg-gradient-to-r from-pink-500 via-purple-500 to-indigo-500 bg-clip-text text-transparent">
                        Project Multimedia
                    </h2>

                    <div
                        class="h-1 w-24 bg-gradient-to-r from-pink-500 to-indigo-500 rounded-full mt-1">
                    </div>
                </div>
            </div>

            <!-- Description -->
            <p class="text-sm text-gray-500 dark:text-gray-400 max-w-xl leading-relaxed pl-14">
                Kumpulan karya desain grafis, visual 3D, motion graphic,
                dan animasi yang dibuat untuk eksplorasi kreativitas digital.
            </p>
        </div>

    </div>

</div>

    <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-6">

        <!-- ================= GRAPHIC DESIGN ================= -->
        <div
            class="group overflow-hidden bg-white dark:bg-gray-800 rounded-2xl shadow hover:shadow-2xl transition-all duration-300 border border-pink-100 dark:border-gray-700 hover:-translate-y-1">

            <!-- Thumbnail -->
            <div class="relative overflow-hidden">
                <img src="thumbnail/project.webp"
                    alt="Thumbnail Design Grafis"
                    class="w-full h-52 object-cover group-hover:scale-105 transition duration-500">

                <div
                    class="absolute top-3 right-3 text-[10px] px-3 py-1 rounded-full bg-pink-500 text-white font-semibold shadow">
                    Graphic Design
                </div>
            </div>

            <div class="p-5">

                <h3 class="font-semibold text-lg mb-2 text-pink-600 dark:text-pink-400">
                    Branding & Poster Design
                </h3>

                <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                    Kumpulan desain branding, poster promosi, sosial media, dan visual marketing modern.
                </p>

                <!-- LIST PROJECT -->
                <div class="space-y-2 text-sm">

                    <div
                        class="flex items-center justify-between p-2 rounded-lg bg-pink-50 dark:bg-gray-700">
                        <span>Poster Event Sekolah</span>

                        <a href="#"
                            class="text-pink-600 hover:underline text-xs">
                            Preview →
                        </a>
                    </div>

                    <div
                        class="flex items-center justify-between p-2 rounded-lg bg-pink-50 dark:bg-gray-700">
                        <span>Branding Pizza Nusantara</span>

                        <a href="#"
                            class="text-pink-600 hover:underline text-xs">
                            Preview →
                        </a>
                    </div>

                    <div
                        class="flex items-center justify-between p-2 rounded-lg bg-pink-50 dark:bg-gray-700">
                        <span>Instagram Feed Design</span>

                        <a href="#"
                            class="text-pink-600 hover:underline text-xs">
                            Preview →
                        </a>
                    </div>

                </div>

                <div class="mt-5 text-xs text-gray-500 font-medium">
                    Tools: Photoshop • Illustrator • Canva
                </div>

            </div>
        </div>

        <!-- ================= 3D DESIGN ================= -->
        <div
            class="group overflow-hidden bg-white dark:bg-gray-800 rounded-2xl shadow hover:shadow-2xl transition-all duration-300 border border-cyan-100 dark:border-gray-700 hover:-translate-y-1">

            <!-- Thumbnail -->
            <div class="relative overflow-hidden">
                <img src="thumbnail/project.webp"
                    alt="Thumbnail 3D Design"
                    class="w-full h-52 object-cover group-hover:scale-105 transition duration-500">

                <div
                    class="absolute top-3 right-3 text-[10px] px-3 py-1 rounded-full bg-cyan-500 text-white font-semibold shadow">
                    3D Design
                </div>
            </div>

            <div class="p-5">

                <h3 class="font-semibold text-lg mb-2 text-cyan-600 dark:text-cyan-400">
                    3D Environment & Asset
                </h3>

                <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                    Eksplorasi visual 3D berupa environment, object modeling, dan asset sederhana menggunakan Blender.
                </p>

                <!-- LIST PROJECT -->
                <div class="space-y-2 text-sm">

                    <div
                        class="flex items-center justify-between p-2 rounded-lg bg-cyan-50 dark:bg-gray-700">
                        <span>Low Poly Room</span>

                        <a href="#"
                            class="text-cyan-600 hover:underline text-xs">
                            Preview →
                        </a>
                    </div>

                    <div
                        class="flex items-center justify-between p-2 rounded-lg bg-cyan-50 dark:bg-gray-700">
                        <span>3D Cafe Environment</span>

                        <a href="#"
                            class="text-cyan-600 hover:underline text-xs">
                            Preview →
                        </a>
                    </div>

                    <div
                        class="flex items-center justify-between p-2 rounded-lg bg-cyan-50 dark:bg-gray-700">
                        <span>Stylized Asset Pack</span>

                        <a href="#"
                            class="text-cyan-600 hover:underline text-xs">
                            Preview →
                        </a>
                    </div>

                </div>

                <div class="mt-5 text-xs text-gray-500 font-medium">
                    Tools: Blender
                </div>

            </div>
        </div>

        <!-- ================= ANIMATION ================= -->
        <div
            class="group overflow-hidden bg-white dark:bg-gray-800 rounded-2xl shadow hover:shadow-2xl transition-all duration-300 border border-purple-100 dark:border-gray-700 hover:-translate-y-1">

            <!-- Thumbnail -->
            <div class="relative overflow-hidden">
                <img src="thumbnail/project.webp"
                    alt="Thumbnail Animation"
                    class="w-full h-52 object-cover group-hover:scale-105 transition duration-500">

                <div
                    class="absolute top-3 right-3 text-[10px] px-3 py-1 rounded-full bg-purple-500 text-white font-semibold shadow">
                    Animation
                </div>
            </div>

            <div class="p-5">

                <h3 class="font-semibold text-lg mb-2 text-purple-600 dark:text-purple-400">
                    Motion Graphic & Animation
                </h3>

                <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                    Animasi pendek, motion graphic, dan editing video untuk kebutuhan konten digital dan branding.
                </p>

                <!-- LIST PROJECT -->
                <div class="space-y-2 text-sm">

                    <div
                        class="flex items-center justify-between p-2 rounded-lg bg-purple-50 dark:bg-gray-700">
                        <span>Animated Promo Video</span>

                        <a href="#"
                            class="text-purple-600 hover:underline text-xs">
                            Preview →
                        </a>
                    </div>

                    <div
                        class="flex items-center justify-between p-2 rounded-lg bg-purple-50 dark:bg-gray-700">
                        <span>Motion Typography</span>

                        <a href="#"
                            class="text-purple-600 hover:underline text-xs">
                            Preview →
                        </a>
                    </div>

                    <div
                        class="flex items-center justify-between p-2 rounded-lg bg-purple-50 dark:bg-gray-700">
                        <span>Short Intro Animation</span>

                        <a href="#"
                            class="text-purple-600 hover:underline text-xs">
                            Preview →
                        </a>
                    </div>

                </div>

                <div class="mt-5 text-xs text-gray-500 font-medium">
                    Tools: CapCut • Blender
                </div>

            </div>
        </div>

    </div>

</section>

<!-- Contact -->
   
<section id="contact" class="py-16 px-6">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-2xl font-semibold mb-2">Kontak</h2>
        <div class="h-1 w-16 bg-indigo-500 mx-auto mb-8 rounded"></div>

        <div class="bg-white dark:bg-gray-800 rounded-xl shadow p-6 md:p-8">
            <p class="text-gray-500 mb-6">Hubungi saya melalui platform berikut</p>

            <div class="grid md:grid-cols-3 gap-4 mb-8 text-left">
              
                <a href="mailto:rezaahmadsch@gmail.com"
                   aria-label="Kirim email ke rezaahmadsch@gmail.com"
                   class="flex items-center gap-3 p-4 rounded-lg bg-indigo-50 dark:bg-gray-700 border border-indigo-100 dark:border-gray-600 hover:shadow transition">
                    <span class="iconify text-indigo-500 text-lg" data-icon="mdi:email-outline"></span>
                    <span class="text-sm font-medium">rezaahmadsch@gmail.com</span>
                </a>

       
                <a href="https://github.com/ahmadreza0101" target="_blank" rel="noopener noreferrer"
                   aria-label="Kunjungi profil GitHub Ahmad Reza"
                   class="flex items-center gap-3 p-4 rounded-lg bg-gray-100 dark:bg-gray-700 hover:shadow transition">
                    <span class="iconify text-lg" data-icon="mdi:github"></span>
                    <span class="text-sm font-medium">Github</span>
                </a>

           
                <a href="https://www.linkedin.com/in/reza-ahmad-al-ghifari/" target="_blank" rel="noopener noreferrer"
                   aria-label="Kunjungi profil LinkedIn Reza Ahmad Al Ghifari"
                   class="flex items-center gap-3 p-4 rounded-lg bg-blue-50 dark:bg-gray-700 border border-blue-100 dark:border-gray-600 hover:shadow transition">
                    <span class="iconify text-blue-500 text-lg" data-icon="mdi:linkedin"></span>
                    <span class="text-sm font-medium">linkedin.com</span>
                </a>
            </div>

        
            <div class="flex flex-wrap justify-center gap-3">
                <a href="https://youtube.com/@azayakarialta" target="_blank" rel="noopener noreferrer"
                   aria-label="Kunjungi YouTube @azayakarialta"
                   class="w-10 h-10 flex items-center justify-center bg-gray-100 dark:bg-gray-700 rounded-full hover:bg-red-500 hover:text-white transition">
                    <span class="iconify text-lg" data-icon="mdi:youtube"></span>
                </a>
                <a href="https://instagram.com/ahmad_reza_0101" target="_blank" rel="noopener noreferrer"
                   aria-label="Ikuti Instagram @ahmad_reza_0101"
                   class="w-10 h-10 flex items-center justify-center bg-gray-100 dark:bg-gray-700 rounded-full hover:bg-pink-500 hover:text-white transition">
                    <span class="iconify text-lg" data-icon="mdi:instagram"></span>
                </a>
                <a href="https://twitter.com/ahmad_reza_0101" target="_blank" rel="noopener noreferrer"
                   aria-label="Ikuti Twitter @ahmad_reza_0101"
                   class="w-10 h-10 flex items-center justify-center bg-gray-100 dark:bg-gray-700 rounded-full hover:bg-black hover:text-white transition">
                    <span class="iconify text-lg" data-icon="mdi:twitter"></span>
                </a>
                <a href="https://tiktok.com/@ahmad_reza_0101" target="_blank" rel="noopener noreferrer"
                   aria-label="Ikuti TikTok @ahmad_reza_0101"
                   class="w-10 h-10 flex items-center justify-center bg-gray-100 dark:bg-gray-700 rounded-full hover:bg-black hover:text-white transition">
                    <span class="iconify text-lg" data-icon="simple-icons:tiktok"></span>
                </a>
                <a href="https://www.threads.net/@ahmad_reza_0101" target="_blank" rel="noopener noreferrer"
                   aria-label="Ikuti Threads @ahmad_reza_0101"
                   class="w-10 h-10 flex items-center justify-center bg-gray-100 dark:bg-gray-700 rounded-full hover:bg-black hover:text-white transition">
                    <span class="iconify text-lg" data-icon="mdi:at"></span>
                </a>
            </div>
        </div>
    </div>
</section>

    </main>

    <footer class="bg-gray-100 dark:bg-gray-800 px-6 py-10 mt-10">
        <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-8 text-sm">

            <!-- footer -->
            <div>
                <h3 class="font-semibold text-lg mb-3">ahmadreza.cv</h3>
                <p class="text-gray-500 mb-3">
                    UI/UX Design - Web Development - Database Management - Graphic Design - Digital Marketing - SEO
                    Optimization - Content Strategy - Data Analysis - Content Creation
                </p>

                <p class="text-xs text-gray-400">
                    Benda, Tangerang, Banten, 15124
                </p>
            </div>

            <div>
                <h3 class="font-semibold mb-3">Navigasi</h3>
                <ul class="space-y-2">
                    <!-- Gunakan smooth scroll melalui CSS agar perpindahan antar section di bawah ini lebih nyaman -->
                    <li><a href="#about" class="hover:text-primary transition">Tentang</a></li>
                    <li><a href="#education" class="hover:text-primary transition">Pendidikan</a></li>
                    <li><a href="#experience" class="hover:text-primary transition">Pengalaman</a></li>
                    <li><a href="#skills" class="hover:text-primary transition">Skill</a></li>
                    <li><a href="#projects" class="hover:text-primary transition">Project</a></li>
                    <li><a href="#contact" class="hover:text-primary transition">Kontak</a></li>
                </ul>
            </div>

            
            <div>
                <h3 class="font-semibold mb-3">Kontak Utama</h3>

                <ul class="space-y-2 text-gray-500 mb-4">
                    <li>
                        <a href="mailto:rezaahmadsch@gmail.com" class="hover:text-primary transition">
                            rezaahmadsch@gmail.com
                        </a>
                    </li>

                    <li>
                        
                        <a href="https://github.com/ahmadreza0101" target="_blank" rel="noopener noreferrer"
                            class="hover:text-primary transition">
                            github.com/ahmadreza0101
                        </a>
                    </li>

                    <li>
                        
                        <a href="https://www.linkedin.com/in/reza-ahmad-al-ghifari/" target="_blank"
                            rel="noopener noreferrer" class="hover:text-primary transition">
                            linkedin.com/in/reza-ahmad-al-ghifari
                        </a>
                    </li>
                </ul>

             
               <div class="flex gap-3">
    <a href="https://youtube.com/@azayakarialta" 
       target="_blank" 
       rel="noopener noreferrer"
       aria-label="Kunjungi saluran YouTube Azayaka Rialta"
       class="hover:text-red-500 transition">
        <span class="iconify" data-icon="mdi:youtube"></span>
    </a>
    
    <a href="https://instagram.com/ahmad_reza_0101" 
       target="_blank" 
       rel="noopener noreferrer"
       aria-label="Kunjungi profil Instagram Ahmad Reza"
       class="hover:text-pink-500 transition">
        <span class="iconify" data-icon="mdi:instagram"></span>
    </a>
    
    <a href="https://twitter.com/@ahmad_reza_0101" 
       target="_blank" 
       rel="noopener noreferrer"
       aria-label="Kunjungi profil Twitter Ahmad Reza"
       class="hover:text-blue-400 transition">
        <span class="iconify" data-icon="mdi:twitter"></span>
    </a>
    
    <a href="https://github.com/ahmadreza0101" 
       target="_blank" 
       rel="noopener noreferrer"
       aria-label="Kunjungi profil GitHub Ahmad Reza"
       class="hover:text-gray-400 transition">
        <span class="iconify" data-icon="mdi:github"></span>
    </a>
    
    <a href="https://tiktok.com/@ahmad_reza_0101" 
       target="_blank" 
       rel="noopener noreferrer"
       aria-label="Kunjungi profil TikTok Ahmad Reza"
       class="hover:text-black dark:hover:text-white transition">
        <span class="iconify" data-icon="simple-icons:tiktok"></span>
    </a>
</div>

            <div class="border-t border-gray-200 dark:border-gray-700 mt-8 pt-4 text-center text-gray-400 text-xs">
                © 2026 Reza Ahmad Al Ghifari
            </div>
    </footer>

    

</body>

</html>