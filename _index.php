<?php
/**
 * OkeIniAja.com - Layanan Pengelolaan Website & Media Sosial Profesional untuk Bisnis & UMKM Indonesia
 * Managed Retainer Service Siap Jual
 */
$site_name = "OkeIniAja.com";
$contact_wa = "6281291311218";
$current_year = date('Y');
?>
<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?= $site_name ?> - Layanan Pengelolaan Website & Media Sosial #1 untuk Bisnis & UMKM</title>
   <meta name="description"
      content="Layanan pengelolaan website & media sosial profesional untuk Bisnis & UMKM. Terima beres: artikel SEO bulanan, desain konten Instagram & Facebook, update katalog produk, optimasi kecepatan web, dan integrasi WhatsApp. Mulai Rp 75.000/bulan!">
   <meta name="keywords"
      content="jasa pengelolaan website, jasa kelola medsos, manajemen media sosial umkm, jasa seo website, perawatan website murah, artikel seo bulanan, okeiniaja">
   <meta name="author" content="OkeIniAja.com">

   <!-- Open Graph / Meta Sosial -->
   <meta property="og:type" content="website">
   <meta property="og:url" content="https://okeiniaja.com/">
   <meta property="og:title" content="OkeIniAja.com - Layanan Pengelolaan Website & Media Sosial Terima Beres">
   <meta property="og:description"
      content="Website terawat, media sosial aktif setiap hari, terima beres tanpa pusing mikirin konten atau bayar agensi mahal. Mulai dari Rp 75.000/bulan!">
   <meta property="og:image"
      content="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=1200&auto=format&fit=crop&q=80">

   <!-- Google Font Plus Jakarta Sans & Inter -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link
      href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&display=swap"
      rel="stylesheet">

   <!-- Tailwind CSS CDN -->
   <script src="https://cdn.tailwindcss.com"></script>
   <script>
      tailwind.config = {
         theme: {
            extend: {
               fontFamily: {
                  sans: ['"Plus Jakarta Sans"', 'Inter', 'sans-serif'],
               },
               colors: {
                  brand: {
                     50: '#fff5f2',
                     100: '#ffe8e2',
                     200: '#ffd4c8',
                     300: '#ffb3a1',
                     400: '#f88266',
                     500: '#ea6043',
                     600: '#d54e32', /* Core Brand Color: Oranye/Merah Menyala #D54E32 */
                     700: '#b53d25',
                     800: '#953420',
                     900: '#7c2f1e',
                     950: '#44140b',
                  },
                  accent: {
                     emerald: '#10b981',
                     amber: '#f59e0b',
                     rose: '#f43f5e',
                  }
               },
               animation: {
                  'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                  'float': 'float 3s ease-in-out infinite',
                  'shimmer': 'shimmer 2.5s infinite linear',
               },
               keyframes: {
                  float: {
                     '0%, 100%': { transform: 'translateY(0px)' },
                     '50%': { transform: 'translateY(-8px)' },
                  },
                  shimmer: {
                     '0%': { backgroundPosition: '-200% 0' },
                     '100%': { backgroundPosition: '200% 0' },
                  }
               }
            }
         }
      }
   </script>

   <style>
      body {
         font-family: 'Plus Jakarta Sans', sans-serif;
         background-color: #f8fafc;
         color: #0f172a;
         overflow-x: hidden;
      }

      .glow-mesh {
         background: radial-gradient(circle at 50% 0%, rgba(213, 78, 50, 0.14) 0%, rgba(248, 250, 252, 0) 65%);
      }

      .card-glass {
         background: rgba(255, 255, 255, 0.92);
         backdrop-filter: blur(16px);
         -webkit-backdrop-filter: blur(16px);
      }

      .card-shadow-subtle {
         box-shadow: 0 4px 20px -2px rgba(15, 23, 42, 0.05), 0 2px 6px -1px rgba(15, 23, 42, 0.02);
      }

      .card-shadow-highlight {
         box-shadow: 0 20px 40px -12px rgba(213, 78, 50, 0.22), 0 8px 16px -4px rgba(15, 23, 42, 0.04);
      }

      .shimmer-badge {
         background: linear-gradient(90deg, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.4) 50%, rgba(255, 255, 255, 0) 100%);
         background-size: 200% 100%;
      }

      /* Custom scrollbar */
      ::-webkit-scrollbar {
         width: 8px;
         height: 8px;
      }

      ::-webkit-scrollbar-track {
         background: #f1f5f9;
      }

      ::-webkit-scrollbar-thumb {
         background: #cbd5e1;
         border-radius: 4px;
      }

      ::-webkit-scrollbar-thumb:hover {
         background: #94a3b8;
      }
   </style>
</head>

<body
   class="antialiased selection:bg-brand-500 selection:text-white relative min-h-screen flex flex-col justify-between">

   <!-- Navigation Header -->
   <header
      class="sticky top-0 z-40 bg-white/80 backdrop-blur-xl border-b border-slate-200/80 transition-all duration-300">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
         <div class="flex items-center justify-between h-20">
            <!-- Brand Logo -->
            <a href="#" class="flex items-center gap-3 group">
               <div
                  class="w-11 h-11 rounded-2xl bg-gradient-to-tr from-brand-600 to-orange-500 flex items-center justify-center text-white shadow-md shadow-brand-500/25 group-hover:scale-105 transition-transform">
                  <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2"
                        d="M13 10V3L4 14h7v7l9-11h-7z" />
                  </svg>
               </div>
               <div class="flex flex-col">
                  <div class="flex items-center gap-2">
                     <span class="text-2xl font-extrabold tracking-tight text-slate-900">
                        OkeIni<span
                           class="text-transparent bg-clip-text bg-gradient-to-r from-brand-600 to-orange-500">Aja</span>
                     </span>
                  </div>
                  <span class="text-[11px] font-medium text-slate-400 -mt-1 hidden sm:block">Layanan Pengelolaan Website
                     & Media Sosial</span>
               </div>
            </a>

            <!-- Desktop Nav Links -->
            <nav class="hidden md:flex items-center gap-8 text-sm font-semibold text-slate-600">
               <a href="#layanan" class="hover:text-brand-600 transition-colors">Layanan</a>
               <!-- <a href="#cara-kerja" class="hover:text-brand-600 transition-colors">Cara Kerja</a> -->
               <!-- <a href="#kalkulator-roi" class="hover:text-brand-600 transition-colors flex items-center gap-1.5">
                  <span>Kalkulator Biaya</span>
                  <span
                     class="text-[10px] font-bold text-emerald-700 bg-emerald-50 px-1.5 py-0.2 rounded border border-emerald-200">Hemat
                     90%</span>
               </a> -->
               <a href="#harga" class="hover:text-brand-600 transition-colors">Paket Langganan</a>
               <a href="#testimoni" class="hover:text-brand-600 transition-colors">Testimoni Klien</a>
               <a href="#faq" class="hover:text-brand-600 transition-colors">FAQ</a>
            </nav>

            <!-- Header Action CTA -->
            <div class="hidden sm:flex items-center gap-3">
               <button onclick="openDemoModal()"
                  class="px-4 py-2.5 text-sm font-semibold text-slate-700 hover:text-slate-900 rounded-xl hover:bg-slate-100 transition-all">
                  Lihat Contoh Kerja
               </button>
               <button onclick="openLoginModal()"
                  class="relative group inline-flex items-center justify-center px-5 py-2.5 text-sm font-bold text-white bg-slate-900 hover:bg-brand-600 rounded-xl shadow-sm hover:shadow-brand-500/25 transition-all active:scale-95">
                  <span>Login</span>
                  <svg class="w-4 h-4 ml-1.5 -mr-1 group-hover:translate-x-1 transition-transform" fill="none"
                     stroke="currentColor" viewBox="0 0 24 24">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                  </svg>
               </button>
            </div>

            <!-- Mobile Hamburger Button -->
            <div class="flex sm:hidden">
               <button type="button" onclick="toggleMobileMenu()"
                  class="p-2.5 rounded-xl text-slate-600 hover:text-slate-900 hover:bg-slate-100 focus:outline-none">
                  <svg id="hamburgerIcon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                  </svg>
                  <svg id="closeIcon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                  </svg>
               </button>
            </div>
         </div>
      </div>

      <!-- Mobile Dropdown Menu -->
      <div id="mobileMenu" class="hidden sm:hidden bg-white border-b border-slate-200 px-4 pt-3 pb-6 space-y-3">
         <a href="#layanan" onclick="toggleMobileMenu()"
            class="block px-3 py-2 text-base font-semibold text-slate-700 hover:bg-slate-50 rounded-lg">Layanan Kami</a>
         <a href="#cara-kerja" onclick="toggleMobileMenu()"
            class="block px-3 py-2 text-base font-semibold text-slate-700 hover:bg-slate-50 rounded-lg">Cara Kerja</a>
         <a href="#kalkulator-roi" onclick="toggleMobileMenu()"
            class="block px-3 py-2 text-base font-semibold text-slate-700 hover:bg-slate-50 rounded-lg">Kalkulator
            Biaya</a>
         <a href="#harga" onclick="toggleMobileMenu()"
            class="block px-3 py-2 text-base font-semibold text-slate-700 hover:bg-slate-50 rounded-lg">Paket
            Langganan</a>
         <a href="#testimoni" onclick="toggleMobileMenu()"
            class="block px-3 py-2 text-base font-semibold text-slate-700 hover:bg-slate-50 rounded-lg">Testimoni
            Klien</a>
         <a href="#faq" onclick="toggleMobileMenu()"
            class="block px-3 py-2 text-base font-semibold text-slate-700 hover:bg-slate-50 rounded-lg">Pertanyaan Umum
            (FAQ)</a>
         <div class="pt-4 flex flex-col gap-2">
            <button onclick="openDemoModal(); toggleMobileMenu();"
               class="w-full py-3 text-center font-semibold text-slate-700 bg-slate-100 rounded-xl">
               Lihat Contoh Kerja
            </button>
            <button onclick="openLoginModal(); toggleMobileMenu();"
               class="w-full py-3 text-center font-bold text-white bg-slate-900 rounded-xl shadow-md">
               Login ke Akun
            </button>
         </div>
      </div>
   </header>

   <main class="flex-grow">

      <!-- HERO SECTION -->
      <section class="relative pt-12 pb-20 md:pt-20 md:pb-32 overflow-hidden glow-mesh">
         <!-- Background decorative blur blobs -->
         <div
            class="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[700px] h-[380px] bg-gradient-to-tr from-brand-300/30 to-amber-300/30 rounded-full blur-3xl pointer-events-none -z-10">
         </div>

         <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">

            <!-- Hero Pill Badge -->
            <div
               class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white border border-slate-200 shadow-sm text-xs sm:text-sm font-semibold text-slate-700 mb-6 hover:border-brand-300 transition-colors animate-float">
               <span class="flex h-2 w-2 relative">
                  <span
                     class="animate-ping absolute inline-flex h-full w-full rounded-full bg-brand-400 opacity-75"></span>
                  <span class="relative inline-flex rounded-full h-2 w-2 bg-brand-600"></span>
               </span>
               <span>Layanan Pengelolaan Website & Media Sosial Terpercaya di Indonesia</span>
               <span class="text-slate-300">|</span>
               <span class="text-brand-600 font-bold hover:underline cursor-pointer" onclick="scrollToPricing()">Lihat
                  Paket &rarr;</span>
            </div>

            <!-- Main Punchy Headline -->
            <h1
               class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-950 tracking-tight leading-[1.15] max-w-5xl mx-auto mb-6">
               Website Selalu Terawat, Medsos Aktif Setiap Hari — <span
                  class="text-transparent bg-clip-text bg-gradient-to-r from-brand-600 via-orange-500 to-amber-500">Terima
                  Beres, Omset Melejit.</span>
            </h1>

            <!-- Subtitle -->
            <p class="text-lg sm:text-xl text-slate-600 max-w-3xl mx-auto mb-10 leading-relaxed font-normal">
               Solusi praktis dan terukur untuk Bisnis & UMKM: Tim profesional kami yang mengurus semuanya—mulai dari
               penulisan artikel SEO Google, pembuatan desain konten medsos siap tayang, update katalog produk, optimasi
               kecepatan web, hingga integrasi WhatsApp lead generator.
               <strong class="text-slate-800 font-semibold">Tanpa perlu pusing mikirin konten atau bayar agensi mahal
                  belasan juta.</strong>
            </p>

            <!-- Dual Primary CTA -->
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 max-w-md mx-auto mb-12">
               <a href="#harga"
                  class="w-full sm:w-auto px-8 py-4 rounded-2xl bg-gradient-to-r from-brand-600 to-orange-500 hover:from-brand-700 hover:to-orange-600 text-white font-bold text-base shadow-lg shadow-brand-500/30 hover:shadow-brand-500/40 transform hover:-translate-y-0.5 active:translate-y-0 transition-all flex items-center justify-center gap-2">
                  <span>Pilih Paket Pengelolaan</span>
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2"
                        d="M13 7l5 5m0 0l-5 5m5-5H6" />
                  </svg>
               </a>
               <button onclick="openDemoModal()"
                  class="w-full sm:w-auto px-7 py-4 rounded-2xl bg-white hover:bg-slate-50 border border-slate-200/90 text-slate-800 font-bold text-base shadow-sm hover:border-slate-300 transition-all flex items-center justify-center gap-2">
                  <svg class="w-5 h-5 text-brand-600" fill="currentColor" viewBox="0 0 24 24">
                     <path d="M8 5v14l11-7z" />
                  </svg>
                  <span>Lihat Contoh Hasil Kerja</span>
               </button>
            </div>

            <!-- Social Proof Metrics Stack -->
            <div
               class="flex flex-wrap items-center justify-center gap-6 sm:gap-10 text-xs sm:text-sm text-slate-500 pt-4 max-w-4xl mx-auto">
               <div class="flex items-center gap-2">
                  <div class="flex -space-x-2 overflow-hidden">
                     <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white"
                        src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=100&auto=format&fit=crop&q=80"
                        alt="Avatar User">
                     <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white"
                        src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&auto=format&fit=crop&q=80"
                        alt="Avatar User">
                     <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white"
                        src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100&auto=format&fit=crop&q=80"
                        alt="Avatar User">
                     <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white"
                        src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=100&auto=format&fit=crop&q=80"
                        alt="Avatar User">
                  </div>
                  <div class="text-left">
                     <div class="flex text-amber-400 text-xs">★★★★★</div>
                     <span class="font-bold text-slate-800">4.9/5</span> dari 1.850+ Klien Bisnis
                  </div>
               </div>
               <div class="flex items-center gap-2">
                  <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                  </svg>
                  <span class="font-medium text-slate-700">Dikerjakan Terima Beres</span>
               </div>
               <div class="flex items-center gap-2">
                  <svg class="w-5 h-5 text-brand-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13 10V3L4 14h7v7l9-11h-7z" />
                  </svg>
                  <span class="font-medium text-slate-700">Materi Siap Tayang Rutin</span>
               </div>
            </div>

         </div>
      </section>

      <!-- LOGO MARQUEE / TRUSTED BRANDS -->
      <section class="py-12 bg-white border-y border-slate-200/80">
         <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p class="text-xs font-bold uppercase tracking-wider text-slate-400 mb-8">
               Telah Membantu Pengelolaan Website & Media Sosial Lebih Dari 1.850+ Bisnis & UMKM di Seluruh Indonesia
            </p>
            <div
               class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-6 sm:gap-8 items-center justify-center opacity-70 grayscale hover:grayscale-0 transition-all duration-300">
               <div class="flex items-center justify-center font-black text-slate-700 text-lg tracking-tighter">
                  <span class="text-brand-600 mr-1.5">●</span> NUSANTARA MART
               </div>
               <div class="flex items-center justify-center font-black text-slate-700 text-lg tracking-tighter">
                  KOPI SERUMPUN
               </div>
               <div class="flex items-center justify-center font-black text-slate-700 text-lg tracking-tighter">
                  BERKAH LOGISTIK
               </div>
               <div class="flex items-center justify-center font-black text-slate-700 text-lg tracking-tighter">
                  TENDA UTAMA
               </div>
               <div class="flex items-center justify-center font-black text-slate-700 text-lg tracking-tighter">
                  HIJAB HARMONI
               </div>
               <div class="flex items-center justify-center font-black text-slate-700 text-lg tracking-tighter">
                  AUTO CARE 24
               </div>
            </div>
         </div>
      </section>

      <!-- PAIN POINT vs SOLUTION (WHY OKEINIAJA?) -->
      <section class="py-20 bg-slate-50">
         <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
               <span
                  class="text-xs font-extrabold uppercase tracking-wider text-brand-600 bg-brand-50 px-3 py-1 rounded-full border border-brand-200">
                  Perbandingan Cerdas
               </span>
               <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-4 mb-4">
                  Mengapa Harus Pusing Urus Sendiri atau Bayar Agensi Konvensional yang Mahal?
               </h2>
               <p class="text-base text-slate-600">
                  Lihat bagaimana layanan pengelolaan dari OkeIniAja.com menghemat waktu, tenaga, dan jutaan rupiah
                  pengeluaran operasional bisnis Anda setiap bulan.
               </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
               <!-- Old Way Card -->
               <div class="bg-white rounded-3xl p-8 border border-rose-100 shadow-sm relative overflow-hidden">
                  <div
                     class="absolute top-0 right-0 bg-rose-50 text-rose-600 font-bold text-xs px-4 py-1.5 rounded-bl-xl border-l border-b border-rose-100">
                     CARA LAMA (RIBET, CAPEK, & MAHAL)
                  </div>
                  <div class="w-12 h-12 rounded-2xl bg-rose-50 text-rose-500 flex items-center justify-center mb-6">
                     <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                           d="M6 18L18 6M6 6l12 12" />
                     </svg>
                  </div>
                  <h3 class="text-xl font-bold text-slate-900 mb-3">Dikerjakan Sendiri / Hire Karyawan Sendiri</h3>
                  <ul class="space-y-4 text-sm text-slate-600">
                     <li class="flex items-start gap-3">
                        <span class="text-rose-500 font-bold">✕</span>
                        <span><strong>Gaji staf mahal</strong>: Gaji in-house content creator Rp 4-6 Juta + web admin Rp
                           5-8 Juta per bulan. Biaya membengkak!</span>
                     </li>
                     <li class="flex items-start gap-3">
                        <span class="text-rose-500 font-bold">✕</span>
                        <span><strong>Sering kehabisan ide & terbengkalai</strong>: Website jarang diupdate, Instagram
                           dan Facebook sepi postingan selama berminggu-minggu.</span>
                     </li>
                     <li class="flex items-start gap-3">
                        <span class="text-rose-500 font-bold">✕</span>
                        <span><strong>Website lambat & ranking Google anjlok</strong>: Foto katalog tidak dikompres,
                           plugin rusak, dan tidak ada artikel SEO terarah.</span>
                     </li>
                     <li class="flex items-start gap-3">
                        <span class="text-rose-500 font-bold">✕</span>
                        <span><strong>Waktu pemilik bisnis terkuras</strong>: Habis waktu mengurus teknis dan desain
                           alih-alih fokus melayani pelanggan & memperbesar omset.</span>
                     </li>
                  </ul>
               </div>

               <!-- OkeIniAja Service Way Card -->
               <div
                  class="bg-gradient-to-b from-white to-brand-50/40 rounded-3xl p-8 border-2 border-brand-500 card-shadow-highlight relative overflow-hidden">
                  <div
                     class="absolute top-0 right-0 bg-brand-600 text-white font-bold text-xs px-4 py-1.5 rounded-bl-xl shadow-sm">
                     CARA OKEINIAJA (TERIMA BERES & HEMAT)
                  </div>
                  <div
                     class="w-12 h-12 rounded-2xl bg-brand-600 text-white flex items-center justify-center mb-6 shadow-md shadow-brand-500/30">
                     <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                     </svg>
                  </div>
                  <h3 class="text-xl font-bold text-slate-900 mb-3">Layanan Pengelolaan Terpadu OkeIniAja.com</h3>
                  <ul class="space-y-4 text-sm text-slate-700">
                     <li class="flex items-start gap-3">
                        <span class="text-emerald-500 font-bold">✓</span>
                        <span><strong>Super hemat mulai Rp 75.000/bln</strong>: Menghemat hingga 95% biaya dibandingkan
                           hire karyawan in-house atau agensi mahal!</span>
                     </li>
                     <li class="flex items-start gap-3">
                        <span class="text-emerald-500 font-bold">✓</span>
                        <span><strong>Semua materi disiapkan tim profesional</strong>: Artikel SEO dituliskan, materi
                           visual didesainkan, dan jadwal posting teratur.</span>
                     </li>
                     <li class="flex items-start gap-3">
                        <span class="text-emerald-500 font-bold">✓</span>
                        <span><strong>Website cepat & terawat optimal</strong>: Kompresi foto produk otomatis, audit
                           performa Google, serta backup database rutin.</span>
                     </li>
                     <li class="flex items-start gap-3">
                        <span class="text-emerald-500 font-bold">✓</span>
                        <span><strong>Calon pembeli langsung masuk WhatsApp</strong>: Setiap artikel dan postingan
                           dilengkapi panggilan aksi menuju nomor WhatsApp bisnis Anda.</span>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </section>

      <!-- FEATURE SHOWCASE BENTO GRID (LAYANAN KAMI) -->
      <section id="layanan" class="py-24 bg-white">
         <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
               <span
                  class="text-xs font-extrabold uppercase tracking-wider text-brand-600 bg-brand-50 px-3 py-1 rounded-full border border-brand-200">
                  Ruang Lingkup Layanan
               </span>
               <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-4 mb-4">
                  Apa Saja yang Dikerjakan Tim OkeIniAja untuk Bisnis Anda?
               </h2>
               <p class="text-base text-slate-600">
                  Layanan komprehensif mengurus aset digital Anda secara tuntas. Anda cukup fokus melayani pesanan
                  pembeli.
               </p>
            </div>

            <!-- Bento Grid 6 Features -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

               <!-- Feature 1 -->
               <div
                  class="bg-slate-50 hover:bg-white rounded-3xl p-8 border border-slate-200 hover:border-brand-300 card-shadow-subtle hover:card-shadow-highlight transition-all duration-300 group">
                  <div
                     class="w-12 h-12 rounded-2xl bg-brand-100 text-brand-600 flex items-center justify-center mb-6 group-hover:scale-110 group-hover:bg-brand-600 group-hover:text-white transition-all">
                     <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                           d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                     </svg>
                  </div>
                  <h3 class="text-xl font-bold text-slate-900 mb-2">Penulisan Artikel SEO Berkala</h3>
                  <p class="text-sm text-slate-600 leading-relaxed mb-4">
                     Tim penulis kami meriset kata kunci pencarian calon pelanggan Anda, lalu menulis artikel 500-1.000
                     kata ramah algoritma Google yang siap dipublikasikan ke blog website Anda.
                  </p>
                  <span
                     class="text-xs font-semibold text-brand-600 flex items-center gap-1 group-hover:gap-2 transition-all">
                     Mendongkrak Ranking Google &rarr;
                  </span>
               </div>

               <!-- Feature 2 -->
               <div
                  class="bg-slate-50 hover:bg-white rounded-3xl p-8 border border-slate-200 hover:border-brand-300 card-shadow-subtle hover:card-shadow-highlight transition-all duration-300 group">
                  <div
                     class="w-12 h-12 rounded-2xl bg-orange-100 text-brand-600 flex items-center justify-center mb-6 group-hover:scale-110 group-hover:bg-brand-600 group-hover:text-white transition-all">
                     <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                           d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                     </svg>
                  </div>
                  <h3 class="text-xl font-bold text-slate-900 mb-2">Desain & Jadwal Konten Medsos</h3>
                  <p class="text-sm text-slate-600 leading-relaxed mb-4">
                     Akun Instagram dan Facebook bisnis Anda tidak akan pernah mati suri lagi. Tim kami membuatkan
                     materi visual (Feed, Carousel, Reels) beserta copywriting persuasif & hashtag tertarget 2-5x
                     seminggu.
                  </p>
                  <span
                     class="text-xs font-semibold text-brand-600 flex items-center gap-1 group-hover:gap-2 transition-all">
                     Medsos Aktif & Menarik &rarr;
                  </span>
               </div>

               <!-- Feature 3 -->
               <div
                  class="bg-slate-50 hover:bg-white rounded-3xl p-8 border border-slate-200 hover:border-brand-300 card-shadow-subtle hover:card-shadow-highlight transition-all duration-300 group">
                  <div
                     class="w-12 h-12 rounded-2xl bg-emerald-100 text-emerald-600 flex items-center justify-center mb-6 group-hover:scale-110 group-hover:bg-emerald-600 group-hover:text-white transition-all">
                     <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                           d="M13 10V3L4 14h7v7l9-11h-7z" />
                     </svg>
                  </div>
                  <h3 class="text-xl font-bold text-slate-900 mb-2">Upload Katalog & Optimasi Gambar</h3>
                  <p class="text-sm text-slate-600 leading-relaxed mb-4">
                     Kirimkan foto produk atau portofolio baru Anda. Kami bantu upload ke website, kompresi otomatis ke
                     format WebP tanpa pecah, serta pasang SEO Alt Text agar muncul di pencarian Google Gambar.
                  </p>
                  <span
                     class="text-xs font-semibold text-brand-600 flex items-center gap-1 group-hover:gap-2 transition-all">
                     Katalog Rapi & Ringan &rarr;
                  </span>
               </div>

               <!-- Feature 4 -->
               <!-- <div
                  class="bg-slate-50 hover:bg-white rounded-3xl p-8 border border-slate-200 hover:border-brand-300 card-shadow-subtle hover:card-shadow-highlight transition-all duration-300 group">
                  <div
                     class="w-12 h-12 rounded-2xl bg-emerald-100 text-emerald-600 flex items-center justify-center mb-6 group-hover:scale-110 group-hover:bg-emerald-600 group-hover:text-white transition-all">
                     <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                           d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                     </svg>
                  </div>
                  <h3 class="text-xl font-bold text-slate-900 mb-2">Integrasi WhatsApp Lead Magnet</h3>
                  <p class="text-sm text-slate-600 leading-relaxed mb-4">
                     Kami pasang tombol chat dan formulir interaktif di website Anda. Setiap pengunjung yang berminat dapat langsung mengirim pesan terformat rapi ke WhatsApp CS Anda.
                  </p>
                  <span
                     class="text-xs font-semibold text-brand-600 flex items-center gap-1 group-hover:gap-2 transition-all">
                     Konversi Pesanan Cepat &rarr;
                  </span>
               </div> -->

               <!-- Feature 5 -->
               <!-- <div
                  class="bg-slate-50 hover:bg-white rounded-3xl p-8 border border-slate-200 hover:border-brand-300 card-shadow-subtle hover:card-shadow-highlight transition-all duration-300 group">
                  <div
                     class="w-12 h-12 rounded-2xl bg-amber-100 text-amber-600 flex items-center justify-center mb-6 group-hover:scale-110 group-hover:bg-amber-600 group-hover:text-white transition-all">
                     <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                           d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                     </svg>
                  </div>
                  <h3 class="text-xl font-bold text-slate-900 mb-2">Optimasi Kecepatan & Mobile Friendly</h3>
                  <p class="text-sm text-slate-600 leading-relaxed mb-4">
                     Kami pastikan website bisnis Anda loading super cepat di bawah 2 detik, ringan saat diakses via
                     ponsel, serta responsif di semua perangkat agar pengunjung nyaman berbelanja.
                  </p>
                  <span
                     class="text-xs font-semibold text-brand-600 flex items-center gap-1 group-hover:gap-2 transition-all">
                     Akses Cepat & Ringan &rarr;
                  </span>
               </div> -->

               <!-- Feature 6 -->
               <!-- <div
                  class="bg-slate-50 hover:bg-white rounded-3xl p-8 border border-slate-200 hover:border-brand-300 card-shadow-subtle hover:card-shadow-highlight transition-all duration-300 group">
                  <div
                     class="w-12 h-12 rounded-2xl bg-rose-100 text-rose-600 flex items-center justify-center mb-6 group-hover:scale-110 group-hover:bg-rose-600 group-hover:text-white transition-all">
                     <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                           d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                     </svg>
                  </div>
                  <h3 class="text-xl font-bold text-slate-900 mb-2">Perawatan Teknis, Backup & Keamanan</h3>
                  <p class="text-sm text-slate-600 leading-relaxed mb-4">
                     Website bisnis Anda selalu diawasi. Kami lakukan backup database berkala, pembaruan sistem dan
                     plugin, serta monitoring agar website selalu online 24/7 tanpa risiko disusupi malware.
                  </p>
                  <span
                     class="text-xs font-semibold text-brand-600 flex items-center gap-1 group-hover:gap-2 transition-all">
                     Website Selalu Aman &rarr;
                  </span>
               </div> -->

            </div>
         </div>
      </section>

      <!-- HOW IT WORKS (3 EASY STEPS) -->
      <section id="cara-kerja" class="py-20 bg-slate-900 text-white relative overflow-hidden">
         <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
               <span
                  class="text-xs font-extrabold uppercase tracking-wider text-brand-400 bg-brand-950 px-3.5 py-1 rounded-full border border-brand-800">
                  Langkah Sederhana Bermitra
               </span>
               <h2 class="text-3xl sm:text-4xl font-extrabold text-white mt-4 mb-4">
                  Bagaimana Cara Tim OkeIniAja Mengelola Website & Medsos Anda?
               </h2>
               <p class="text-base text-slate-400">
                  Anda tidak perlu mengerti teknis, koding, ataupun desain grafis. Cukup ikuti 3 langkah praktis
                  berikut:
               </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 relative">
               <!-- Step 1 -->
               <div class="bg-slate-800/80 rounded-3xl p-8 border border-slate-700/80 relative">
                  <div class="text-5xl font-black text-brand-500/20 absolute top-6 right-6">01</div>
                  <div
                     class="w-12 h-12 rounded-xl bg-brand-600 text-white flex items-center justify-center font-bold text-lg mb-6">
                     1
                  </div>
                  <h3 class="text-xl font-bold text-white mb-3">Pilih Paket & Kirim Materi Awal</h3>
                  <p class="text-sm text-slate-300 leading-relaxed">
                     Pilih paket langganan yang cocok dengan skala usaha Anda. Cukup kirimkan link website, akun medsos,
                     dan beberapa foto produk atau informasi singkat mengenai bisnis Anda.
                  </p>
               </div>

               <!-- Step 2 -->
               <div class="bg-slate-800/80 rounded-3xl p-8 border border-slate-700/80 relative">
                  <div class="text-5xl font-black text-brand-500/20 absolute top-6 right-6">02</div>
                  <div
                     class="w-12 h-12 rounded-xl bg-orange-600 text-white flex items-center justify-center font-bold text-lg mb-6">
                     2
                  </div>
                  <h3 class="text-xl font-bold text-white mb-3">Tim Kami Mengeksekusi Semuanya</h3>
                  <p class="text-sm text-slate-300 leading-relaxed">
                     Copywriter kami menulis artikel SEO, desainer membuatkan konten postingan medsos, dan webmaster
                     kami mengoptimasi kecepatan serta upload katalog produk Anda secara terjadwal.
                  </p>
               </div>

               <!-- Step 3 -->
               <div class="bg-slate-800/80 rounded-3xl p-8 border border-slate-700/80 relative">
                  <div class="text-5xl font-black text-brand-500/20 absolute top-6 right-6">03</div>
                  <div
                     class="w-12 h-12 rounded-xl bg-emerald-600 text-white flex items-center justify-center font-bold text-lg mb-6">
                     3
                  </div>
                  <h3 class="text-xl font-bold text-white mb-3">Terima Hasil & Tangani Pesanan</h3>
                  <p class="text-sm text-slate-300 leading-relaxed">
                     Website dan media sosial Anda aktif konsisten, visibilitas di Google meningkat, dan calon pelanggan
                     langsung menghubungi WhatsApp bisnis Anda. Anda cukup fokus melayani pembeli!
                  </p>
               </div>
            </div>
         </div>
      </section>

      <!-- INTERACTIVE ROI / COST CALCULATOR -->
      <section id="kalkulator-roi" class="py-20 bg-gradient-to-b from-slate-50 to-white">
         <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-3xl p-8 sm:p-12 border border-slate-200 card-shadow-popular">
               <div class="text-center max-w-2xl mx-auto mb-10">
                  <span
                     class="text-xs font-bold text-emerald-700 bg-emerald-100 px-3 py-1 rounded-full uppercase tracking-wider">
                     Simulasi Penghematan Biaya
                  </span>
                  <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 mt-3 mb-2">
                     Berapa Puluh Juta yang Bisa Dihemat dengan Menyerahkan Pengelolaan ke OkeIniAja?
                  </h2>
                  <p class="text-sm text-slate-500">
                     Pilih skala kebutuhan bisnis Anda di bawah untuk membandingkan biaya gaji karyawan / agensi
                     konvensional vs layanan terpadu OkeIniAja.
                  </p>
               </div>

               <!-- Interactive controls -->
               <div class="space-y-8">
                  <div>
                     <label class="block text-sm font-bold text-slate-800 mb-2">
                        Pilih Kategori Kebutuhan Skala Usaha Anda:
                     </label>
                     <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                        <button type="button" onclick="setRoiLevel('basic')" id="roiBtn-basic"
                           class="p-4 rounded-2xl border-2 border-slate-200 text-left hover:border-brand-500 transition-all">
                           <span class="block text-xs font-bold text-slate-500">SKALA PEMULA</span>
                           <span class="block text-base font-extrabold text-slate-900 mt-0.5">UMKM Basic</span>
                           <span class="block text-xs text-slate-500 mt-1">2 Artikel SEO + 8 Post Medsos</span>
                        </button>
                        <button type="button" onclick="setRoiLevel('growth')" id="roiBtn-growth"
                           class="p-4 rounded-2xl border-2 border-brand-600 bg-brand-50/50 text-left transition-all">
                           <span class="block text-xs font-bold text-brand-600">BEST VALUE</span>
                           <span class="block text-base font-extrabold text-slate-900 mt-0.5">Standard Growth</span>
                           <span class="block text-xs text-slate-500 mt-1">4 Artikel SEO + 15 Post Medsos</span>
                        </button>
                        <button type="button" onclick="setRoiLevel('pro')" id="roiBtn-pro"
                           class="p-4 rounded-2xl border-2 border-slate-200 text-left hover:border-brand-500 transition-all">
                           <span class="block text-xs font-bold text-slate-500">SKALA BESAR</span>
                           <span class="block text-base font-extrabold text-slate-900 mt-0.5">Premium Pro</span>
                           <span class="block text-xs text-slate-500 mt-1">8 Artikel SEO + 20 Post + Backup</span>
                        </button>
                     </div>
                  </div>

                  <!-- ROI Comparison Result Box -->
                  <div
                     class="bg-slate-900 rounded-2xl p-6 sm:p-8 text-white grid grid-cols-1 md:grid-cols-3 gap-6 items-center">
                     <div>
                        <span class="text-xs text-slate-400 block mb-1">Gaji Karyawan Sendiri / Agensi Lain:</span>
                        <div class="text-2xl font-extrabold text-rose-400 line-through" id="calcOldCost">Rp 6.500.000 /
                           bln</div>
                        <span class="text-[11px] text-slate-400">Gaji content creator + web developer</span>
                     </div>
                     <div>
                        <span class="text-xs text-slate-400 block mb-1">Layanan di OkeIniAja.com:</span>
                        <div class="text-3xl font-extrabold text-emerald-400" id="calcNewCost">Rp 150.000 / bln</div>
                        <span class="text-[11px] text-emerald-300">Dikerjakan tim profesional terima beres</span>
                     </div>
                     <div class="bg-slate-800/90 p-4 rounded-xl border border-slate-700 text-center">
                        <span class="text-xs text-slate-400 block">Total Penghematan Anda:</span>
                        <div class="text-2xl font-black text-amber-300 mt-1" id="calcSavings">Hemat Rp 76.200.000</div>
                        <span class="text-[11px] text-slate-300">per tahun yang bisa dialihkan ke modal usaha!</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <!-- PRICING SECTION -->
      <section id="harga" class="py-24 bg-white relative">
         <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center max-w-3xl mx-auto mb-10">
               <span
                  class="inline-block px-3.5 py-1 text-xs font-bold tracking-wider text-brand-700 bg-brand-50 border border-brand-200 rounded-full uppercase mb-3">
                  Paket Pengelolaan Terjangkau & Transparan
               </span>
               <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight mb-4">
                  Pilih Paket Pengelolaan yang Tepat untuk Usaha Anda
               </h2>
               <p class="text-base text-slate-600">
                  Semua paket dikerjakan langsung oleh tim spesialis kami. Fleksibel, tanpa ikatan kontrak jangka
                  panjang, dan bebas upgrade/downgrade kapan saja.
               </p>

               <!-- Top Category Switch (Paket UMKM Retainer vs Custom Project) -->
               <div class="mt-8 inline-flex p-1 bg-slate-100 rounded-2xl border border-slate-200">
                  <button id="tabUmkm" onclick="switchTab('umkm')"
                     class="px-6 py-2.5 text-sm font-bold rounded-xl bg-white shadow-sm text-slate-900 transition-all">
                     Paket Pengelolaan Bulanan / Tahunan
                  </button>
                  <button id="tabCustom" onclick="switchTab('custom')"
                     class="px-6 py-2.5 text-sm font-medium rounded-xl text-slate-600 hover:text-slate-900 transition-all">
                     Custom Project & Sesi Photoshoot
                  </button>
               </div>
            </div>

            <!-- RETAINER VIEW -->
            <div id="retainerSection">

               <!-- Billing Period Switcher (Monthly vs Yearly) -->
               <div class="flex justify-center mb-12">
                  <div
                     class="inline-flex items-center gap-2 bg-slate-100 p-1.5 rounded-full border border-slate-200 text-xs sm:text-sm">
                     <button id="btnMonthly" onclick="setBilling('monthly')"
                        class="px-5 py-2 font-bold rounded-full bg-white shadow-sm text-slate-900 transition-all">
                        Bulanan
                     </button>
                     <button id="btnYearly" onclick="setBilling('yearly')"
                        class="px-5 py-2 font-medium rounded-full text-slate-600 hover:text-slate-900 transition-all flex items-center gap-1.5">
                        <span>Tahunan</span>
                        <span
                           class="text-[11px] font-extrabold text-emerald-800 bg-emerald-100 px-2.5 py-0.5 rounded-full border border-emerald-300">
                           Hemat 15% + 2 Bln Gratis
                        </span>
                     </button>
                  </div>
               </div>

               <!-- Pricing Cards Grid -->
               <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-stretch max-w-7xl mx-auto">

                  <!-- CARD 1: BASIC MAINTENANCE -->
                  <div
                     class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200 card-shadow-subtle flex flex-col justify-between hover:border-slate-400 transition-all duration-200">
                     <div>
                        <div
                           class="w-12 h-12 rounded-2xl bg-slate-100 border border-slate-200 flex items-center justify-center mb-6 text-slate-800">
                           <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                 d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                           </svg>
                        </div>

                        <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">UNTUK SOLOPRENEUR & UMKM
                           BARU</span>
                        <h3 class="text-2xl font-extrabold text-slate-900 mt-1 mb-2">Basic Maintenance</h3>
                        <p class="text-sm text-slate-500 mb-6 min-h-[44px]">
                           Pilihan hemat agar website dan medsos bisnis Anda tetap aktif, rapi, dan terawat tanpa
                           membebani keuangan.
                        </p>

                        <!-- Price display -->
                        <div class="mb-6 p-4 bg-slate-50 rounded-2xl border border-slate-100">
                           <div class="flex items-baseline gap-1">
                              <span class="text-3xl sm:text-4xl font-extrabold text-slate-900 price-basic">Rp
                                 75.000</span>
                              <span class="text-slate-500 text-sm font-medium billing-label">/ bulan</span>
                           </div>
                           <p class="text-xs text-slate-400 mt-1 sub-price">Ditagih bulanan • Batal kapan saja</p>
                        </div>

                        <!-- CTA Button -->
                        <button onclick="selectPlan('Basic Maintenance')"
                           class="w-full py-3.5 px-4 rounded-xl border-2 border-slate-800 text-slate-900 font-bold text-sm hover:bg-slate-900 hover:text-white active:scale-95 transition-all mb-4 text-center">
                           Tanya Paket Basic
                        </button>
                        <p class="text-center text-xs text-slate-400 mb-6">Aktivasi instan • Tanpa biaya tersembunyi</p>

                        <div class="border-t border-slate-100 pt-6">
                           <p class="text-xs font-bold text-slate-900 uppercase tracking-wider mb-4">Fitur Layanan
                              Termasuk:</p>
                           <ul class="space-y-3.5 text-xs sm:text-sm text-slate-600">
                              <li class="flex items-start gap-3">
                                 <svg class="w-5 h-5 text-emerald-600 shrink-0 mt-0.5" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                       d="M5 13l4 4L19 7" />
                                 </svg>
                                 <span><strong>2 Artikel SEO Website</strong> / bulan (500-700 kata)</span>
                              </li>
                              <li class="flex items-start gap-3">
                                 <svg class="w-5 h-5 text-emerald-600 shrink-0 mt-0.5" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                       d="M5 13l4 4L19 7" />
                                 </svg>
                                 <span><strong>Upload & Optimasi Gambar</strong> (Maks. 10 foto katalog produk)</span>
                              </li>
                              <li class="flex items-start gap-3">
                                 <svg class="w-5 h-5 text-emerald-600 shrink-0 mt-0.5" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                       d="M5 13l4 4L19 7" />
                                 </svg>
                                 <span><strong>8 Post Medsos</strong> (2x seminggu di Instagram & FB)</span>
                              </li>
                              <li class="flex items-start gap-3">
                                 <svg class="w-5 h-5 text-emerald-600 shrink-0 mt-0.5" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                       d="M5 13l4 4L19 7" />
                                 </svg>
                                 <span>Kompresi WebP agar Website Loading Cepat</span>
                              </li>
                              <li class="flex items-start gap-3">
                                 <svg class="w-5 h-5 text-emerald-600 shrink-0 mt-0.5" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                       d="M5 13l4 4L19 7" />
                                 </svg>
                                 <span>Tombol Chat WhatsApp Terintegrasi</span>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>

                  <!-- CARD 2: STANDARD GROWTH (RECOMMENDED / BEST VALUE) -->
                  <div
                     class="bg-white rounded-3xl p-6 sm:p-8 border-2 border-brand-600 card-shadow-highlight flex flex-col justify-between relative transform lg:-translate-y-2">

                     <!-- Popular Badge -->
                     <div
                        class="absolute -top-4 left-1/2 -translate-x-1/2 bg-gradient-to-r from-brand-600 to-orange-500 text-white text-[11px] font-extrabold uppercase tracking-wider px-4 py-1.5 rounded-full shadow-md">
                        🔥 PALING DIREKOMENDASIKAN (BEST VALUE)
                     </div>

                     <div>
                        <div
                           class="w-12 h-12 rounded-2xl bg-brand-600 text-white flex items-center justify-center mb-6 shadow-md shadow-brand-500/30">
                           <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                 d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                           </svg>
                        </div>

                        <span class="text-xs font-bold text-brand-600 uppercase tracking-wider">UNTUK BISNIS YANG INGIN
                           TUMBUH CEPAT</span>
                        <h3 class="text-2xl font-extrabold text-slate-900 mt-1 mb-2">Standard Growth</h3>
                        <p class="text-sm text-slate-500 mb-6 min-h-[44px]">
                           Solusi komplit untuk mendongkrak trafik Google, merapikan katalog produk, dan menjaring lead
                           pembeli tiap minggu.
                        </p>

                        <!-- Price display -->
                        <div class="mb-6 p-4 bg-brand-50/60 rounded-2xl border border-brand-100">
                           <div class="flex items-baseline gap-1">
                              <span class="text-3xl sm:text-4xl font-extrabold text-brand-700 price-growth">Rp
                                 150.000</span>
                              <span class="text-slate-500 text-sm font-medium billing-label">/ bulan</span>
                           </div>
                           <p class="text-xs text-brand-700/80 font-medium mt-1 sub-price">Ditagih bulanan • Batal kapan
                              saja</p>
                        </div>

                        <!-- CTA Button -->
                        <button onclick="selectPlan('Standard Growth')"
                           class="w-full py-3.5 px-4 rounded-xl bg-gradient-to-r from-brand-600 to-orange-500 hover:from-brand-700 hover:to-orange-600 text-white font-extrabold text-sm shadow-md shadow-brand-500/30 active:scale-95 transition-all mb-4 text-center">
                           Tanya Paket Growth
                        </button>
                        <p class="text-center text-xs text-slate-400 mb-6">Garansi 30 Hari Puas • Tanpa Komitmen</p>

                        <div class="border-t border-slate-100 pt-6">
                           <p class="text-xs font-bold text-slate-900 uppercase tracking-wider mb-4">Semua Fitur Basic,
                              Ditambah:</p>
                           <ul class="space-y-3.5 text-xs sm:text-sm text-slate-700">
                              <li class="flex items-start gap-3">
                                 <svg class="w-5 h-5 text-emerald-600 shrink-0 mt-0.5" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                       d="M5 13l4 4L19 7" />
                                 </svg>
                                 <span><strong>4 Artikel SEO Berbobot</strong> / bulan (800-1.000 kata)</span>
                              </li>
                              <li class="flex items-start gap-3">
                                 <svg class="w-5 h-5 text-emerald-600 shrink-0 mt-0.5" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                       d="M5 13l4 4L19 7" />
                                 </svg>
                                 <span><strong>Upload Hingga 20 Foto Produk</strong> + Optimasi Alt Text Google</span>
                              </li>
                              <li class="flex items-start gap-3">
                                 <svg class="w-5 h-5 text-emerald-600 shrink-0 mt-0.5" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                       d="M5 13l4 4L19 7" />
                                 </svg>
                                 <span><strong>12–15 Post Medsos</strong> (3x seminggu di IG Feed & FB Story)</span>
                              </li>
                              <li class="flex items-start gap-3">
                                 <svg class="w-5 h-5 text-emerald-600 shrink-0 mt-0.5" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                       d="M5 13l4 4L19 7" />
                                 </svg>
                                 <span><strong>Backup Rutin Database & File</strong> Bulanan</span>
                              </li>
                              <li class="flex items-start gap-3">
                                 <svg class="w-5 h-5 text-emerald-600 shrink-0 mt-0.5" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                       d="M5 13l4 4L19 7" />
                                 </svg>
                                 <span>Konsultasi & Evaluasi Rutin Konten</span>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>

                  <!-- CARD 3: PREMIUM PRO -->
                  <div
                     class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200 card-shadow-subtle flex flex-col justify-between hover:border-slate-400 transition-all duration-200">
                     <div>
                        <div
                           class="w-12 h-12 rounded-2xl bg-slate-900 text-white flex items-center justify-center mb-6">
                           <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                 d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                           </svg>
                        </div>

                        <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">UNTUK SKALA PENUH &
                           PRIORITAS</span>
                        <h3 class="text-2xl font-extrabold text-slate-900 mt-1 mb-2">Premium Pro</h3>
                        <p class="text-sm text-slate-500 mb-6 min-h-[44px]">
                           Skala penuh untuk penetrasi pasar agresif, SEO mendalam, konten melimpah, dan support
                           prioritas WhatsApp VIP.
                        </p>

                        <!-- Price display -->
                        <div class="mb-6 p-4 bg-slate-50 rounded-2xl border border-slate-100">
                           <div class="flex items-baseline gap-1">
                              <span class="text-3xl sm:text-4xl font-extrabold text-slate-900 price-pro">Rp
                                 275.000</span>
                              <span class="text-slate-500 text-sm font-medium billing-label">/ bulan</span>
                           </div>
                           <p class="text-xs text-slate-400 mt-1 sub-price">Ditagih bulanan • Batal kapan saja</p>
                        </div>

                        <!-- CTA Button -->
                        <button onclick="selectPlan('Premium Pro')"
                           class="w-full py-3.5 px-4 rounded-xl border-2 border-slate-800 text-slate-900 font-bold text-sm hover:bg-slate-900 hover:text-white active:scale-95 transition-all mb-4 text-center">
                           Tanya Paket Premium Pro
                        </button>
                        <p class="text-center text-xs text-slate-400 mb-6">Support VIP 24/7 • Konsultasi Strategi</p>

                        <div class="border-t border-slate-100 pt-6">
                           <p class="text-xs font-bold text-slate-900 uppercase tracking-wider mb-4">Semua Fitur Growth,
                              Ditambah:</p>
                           <ul class="space-y-3.5 text-xs sm:text-sm text-slate-600">
                              <li class="flex items-start gap-3">
                                 <svg class="w-5 h-5 text-emerald-600 shrink-0 mt-0.5" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                       d="M5 13l4 4L19 7" />
                                 </svg>
                                 <span><strong>8 Artikel SEO Mendalam</strong> + Riset Kata Kunci Kompetitor</span>
                              </li>
                              <li class="flex items-start gap-3">
                                 <svg class="w-5 h-5 text-emerald-600 shrink-0 mt-0.5" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                       d="M5 13l4 4L19 7" />
                                 </svg>
                                 <span><strong>Upload Hingga 50 Foto Produk/Katalog</strong></span>
                              </li>
                              <li class="flex items-start gap-3">
                                 <svg class="w-5 h-5 text-emerald-600 shrink-0 mt-0.5" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                       d="M5 13l4 4L19 7" />
                                 </svg>
                                 <span><strong>20 Konten Medsos</strong> (Reels, Carousel, Feed & Story)</span>
                              </li>
                              <li class="flex items-start gap-3">
                                 <svg class="w-5 h-5 text-emerald-600 shrink-0 mt-0.5" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                       d="M5 13l4 4L19 7" />
                                 </svg>
                                 <span>Audit SEO Berkala & Speed Performance Boost</span>
                              </li>
                              <li class="flex items-start gap-3">
                                 <svg class="w-5 h-5 text-emerald-600 shrink-0 mt-0.5" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                       d="M5 13l4 4L19 7" />
                                 </svg>
                                 <span>Dedicated Account Manager & Diskusi Mingguan</span>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>

               </div>
            </div>

            <!-- CUSTOM SECTION -->
            <div id="customSection"
               class="hidden bg-slate-900 text-white rounded-3xl p-8 sm:p-12 text-center max-w-4xl mx-auto shadow-2xl">
               <div
                  class="w-16 h-16 bg-slate-800 text-brand-400 rounded-2xl flex items-center justify-center mx-auto mb-6">
                  <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                  </svg>
               </div>
               <h3 class="text-2xl sm:text-3xl font-extrabold mb-3">Butuh Sesi Photoshoot di Lokasi atau Redesign
                  Website Total?</h3>
               <p class="text-slate-300 text-sm sm:text-base mb-8 max-w-2xl mx-auto leading-relaxed">
                  Kami juga menyediakan add-on khusus seperti sesi foto produk profesional langsung di workshop/toko
                  Anda, pembuatan katalog PDF cetak, hingga perombakan total struktur website bisnis Anda.
               </p>
               <button onclick="openCustomModal()"
                  class="py-4 px-8 bg-brand-600 hover:bg-brand-500 text-white rounded-2xl font-bold text-sm shadow-lg shadow-brand-500/30 transition-all">
                  Diskusi Kebutuhan Khusus via WhatsApp
               </button>
            </div>

            <!-- DETAILED FEATURE COMPARISON TABLE (ACCORDION TOGGLE) -->
            <div class="mt-16 max-w-5xl mx-auto">
               <div class="text-center mb-6">
                  <button type="button" onclick="toggleComparisonTable()"
                     class="inline-flex items-center gap-2 text-sm font-bold text-slate-700 hover:text-brand-600 transition-colors py-2 px-4 rounded-xl bg-slate-100 hover:bg-slate-200">
                     <span id="compareToggleText">Buka Tabel Perbandingan Detail Paket</span>
                     <svg id="compareChevron" class="w-4 h-4 transition-transform duration-200" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                     </svg>
                  </button>
               </div>

               <div id="comparisonTableContainer"
                  class="hidden overflow-x-auto bg-white rounded-2xl border border-slate-200 shadow-sm">
                  <table class="w-full text-left text-xs sm:text-sm">
                     <thead class="bg-slate-50 border-b border-slate-200 text-slate-900 font-bold">
                        <tr>
                           <th class="p-4 sm:p-5">Cakupan Pengelolaan</th>
                           <th class="p-4 sm:p-5 text-center">Basic Maintenance</th>
                           <th class="p-4 sm:p-5 text-center bg-brand-50/50 text-brand-900">Standard Growth</th>
                           <th class="p-4 sm:p-5 text-center">Premium Pro</th>
                        </tr>
                     </thead>
                     <tbody class="divide-y divide-slate-100 text-slate-700">
                        <tr>
                           <td class="p-4 sm:p-5 font-semibold">Artikel SEO Website (Dituliskan & Diposting)</td>
                           <td class="p-4 sm:p-5 text-center">2 Artikel / bln</td>
                           <td class="p-4 sm:p-5 text-center bg-brand-50/30 font-bold text-brand-700">4 Artikel / bln
                           </td>
                           <td class="p-4 sm:p-5 text-center font-bold">8 Artikel / bln</td>
                        </tr>
                        <tr>
                           <td class="p-4 sm:p-5 font-semibold">Panjang Kata per Artikel</td>
                           <td class="p-4 sm:p-5 text-center">500 - 700 Kata</td>
                           <td class="p-4 sm:p-5 text-center bg-brand-50/30 font-bold text-brand-700">800 - 1.000 Kata
                           </td>
                           <td class="p-4 sm:p-5 text-center font-bold">1.000 - 1.500 Kata</td>
                        </tr>
                        <tr>
                           <td class="p-4 sm:p-5 font-semibold">Desain & Postingan Medsos (IG & FB)</td>
                           <td class="p-4 sm:p-5 text-center">8 Post (2x/minggu)</td>
                           <td class="p-4 sm:p-5 text-center bg-brand-50/30 font-bold text-brand-700">12-15 Post
                              (3x/minggu)</td>
                           <td class="p-4 sm:p-5 text-center font-bold">20 Post (5x/minggu)</td>
                        </tr>
                        <tr>
                           <td class="p-4 sm:p-5 font-semibold">Upload & Optimasi Gambar Produk</td>
                           <td class="p-4 sm:p-5 text-center">10 Foto</td>
                           <td class="p-4 sm:p-5 text-center bg-brand-50/30 font-bold text-brand-700">20 Foto + Alt Text
                           </td>
                           <td class="p-4 sm:p-5 text-center font-bold">50 Foto + Alt Text</td>
                        </tr>
                        <tr>
                           <td class="p-4 sm:p-5 font-semibold">Kompresi Foto Otomatis (WebP Lossless)</td>
                           <td class="p-4 sm:p-5 text-center text-emerald-600 font-bold">✓ Ya</td>
                           <td class="p-4 sm:p-5 text-center bg-brand-50/30 text-emerald-600 font-bold">✓ Ya</td>
                           <td class="p-4 sm:p-5 text-center text-emerald-600 font-bold">✓ Ya</td>
                        </tr>
                        <tr>
                           <td class="p-4 sm:p-5 font-semibold">Backup Website Rutin</td>
                           <td class="p-4 sm:p-5 text-center text-slate-400">-</td>
                           <td class="p-4 sm:p-5 text-center bg-brand-50/30 text-emerald-600 font-bold">✓ Bulanan</td>
                           <td class="p-4 sm:p-5 text-center text-emerald-600 font-bold">✓ Mingguan</td>
                        </tr>
                        <tr>
                           <td class="p-4 sm:p-5 font-semibold">Evaluasi & Optimasi Rutin Konten</td>
                           <td class="p-4 sm:p-5 text-center text-slate-400">-</td>
                           <td class="p-4 sm:p-5 text-center bg-brand-50/30 text-emerald-600 font-bold">✓ Bulanan</td>
                           <td class="p-4 sm:p-5 text-center text-emerald-600 font-bold">✓ Lengkap + Diskusi</td>
                        </tr>
                        <tr>
                           <td class="p-4 sm:p-5 font-semibold">Integrasi WhatsApp Lead Magnet</td>
                           <td class="p-4 sm:p-5 text-center text-emerald-600 font-bold">✓ Ya</td>
                           <td class="p-4 sm:p-5 text-center bg-brand-50/30 text-emerald-600 font-bold">✓ Ya</td>
                           <td class="p-4 sm:p-5 text-center text-emerald-600 font-bold">✓ Ya</td>
                        </tr>
                        <tr>
                           <td class="p-4 sm:p-5 font-semibold">Dukungan / Support Level</td>
                           <td class="p-4 sm:p-5 text-center">Email & Chat Standar</td>
                           <td class="p-4 sm:p-5 text-center bg-brand-50/30 font-bold text-brand-700">WhatsApp Support
                           </td>
                           <td class="p-4 sm:p-5 text-center font-bold text-brand-700">Dedicated Account Manager VIP
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>

         </div>
      </section>

      <!-- TESTIMONIALS SECTION -->
      <section id="testimoni" class="py-24 bg-slate-50 border-t border-slate-200/80">
         <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
               <span
                  class="text-xs font-extrabold uppercase tracking-wider text-emerald-700 bg-emerald-100 px-3 py-1 rounded-full">
                  Kisah Nyata Klien Kami
               </span>
               <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-4 mb-4">
                  Pengalaman Pemilik Usaha yang Mempercayakan Pengelolaan ke Tim Kami
               </h2>
               <p class="text-base text-slate-600">
                  Mereka membuktikan bahwa website dan media sosial yang terkelola rapi setiap minggu mampu
                  melipatgandakan jumlah calon pelanggan.
               </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

               <!-- Testimonial 1 -->
               <div
                  class="bg-white rounded-3xl p-8 border border-slate-200 card-shadow-subtle flex flex-col justify-between">
                  <div>
                     <div class="flex text-amber-400 text-sm mb-4">★★★★★</div>
                     <p class="text-sm text-slate-700 italic leading-relaxed mb-6">
                        "Dulu bayar agensi 4 juta per bulan tapi postingannya jarang dan website lemot banget. Setelah
                        dikelola tim OkeIniAja paket Growth, website sewa tenda kami tembus halaman 1 Google dan chat WA
                        pelanggan masuk tiap hari!"
                     </p>
                  </div>
                  <div class="flex items-center gap-3 pt-4 border-t border-slate-100">
                     <img class="w-11 h-11 rounded-full object-cover"
                        src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=120&auto=format&fit=crop&q=80"
                        alt="Budi Santoso">
                     <div>
                        <h4 class="text-sm font-bold text-slate-900">Budi Santoso</h4>
                        <p class="text-xs text-slate-500">Owner Sewa Tenda & Event Organizer</p>
                     </div>
                  </div>
               </div>

               <!-- Testimonial 2 -->
               <div
                  class="bg-white rounded-3xl p-8 border border-slate-200 card-shadow-subtle flex flex-col justify-between">
                  <div>
                     <div class="flex text-amber-400 text-sm mb-4">★★★★★</div>
                     <p class="text-sm text-slate-700 italic leading-relaxed mb-6">
                        "Sebagai pemilik usaha kuliner, saya sama sekali nggak sempat nulis artikel blog atau mikir ide
                        postingan IG tiap hari. Semua materi dibuatkan rapi oleh tim OkeIniAja. Followers naik dan
                        pesanan katering bertambah drastis."
                     </p>
                  </div>
                  <div class="flex items-center gap-3 pt-4 border-t border-slate-100">
                     <img class="w-11 h-11 rounded-full object-cover"
                        src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=120&auto=format&fit=crop&q=80"
                        alt="Dewi Lestari">
                     <div>
                        <h4 class="text-sm font-bold text-slate-900">Dewi Lestari</h4>
                        <p class="text-xs text-slate-500">Founder Sambal Bu Dewi Solo</p>
                     </div>
                  </div>
               </div>

               <!-- Testimonial 3 -->
               <div
                  class="bg-white rounded-3xl p-8 border border-slate-200 card-shadow-subtle flex flex-col justify-between">
                  <div>
                     <div class="flex text-amber-400 text-sm mb-4">★★★★★</div>
                     <p class="text-sm text-slate-700 italic leading-relaxed mb-6">
                        "Paling puas dengan pengerjaan kompresi foto katalog dan tombol direct WhatsApp-nya. Website
                        katalog kami yang tadinya lelet sekarang dibuka di HP super ngebut. Sangat membantu penjualan
                        B2B kami!"
                     </p>
                  </div>
                  <div class="flex items-center gap-3 pt-4 border-t border-slate-100">
                     <img class="w-11 h-11 rounded-full object-cover"
                        src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=120&auto=format&fit=crop&q=80"
                        alt="Hendra Wijaya">
                     <div>
                        <h4 class="text-sm font-bold text-slate-900">Hendra Wijaya</h4>
                        <p class="text-xs text-slate-500">Direktur CV Sumber Rezeki Logistik</p>
                     </div>
                  </div>
               </div>

            </div>
         </div>
      </section>

      <!-- RISK-FREE GUARANTEE SECTION -->
      <section class="py-16 bg-white border-t border-slate-200/80">
         <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="inline-flex p-3 rounded-2xl bg-emerald-50 text-emerald-600 mb-4">
               <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                     d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
               </svg>
            </div>
            <h3 class="text-2xl sm:text-3xl font-extrabold text-slate-900 mb-3">Garansi 30 Hari Kepuasan 100% Bebas
               Risiko</h3>
            <p class="text-slate-600 text-sm sm:text-base max-w-2xl mx-auto leading-relaxed">
               Kami sangat yakin layanan pengelolaan dari OkeIniAja akan membawa dampak positif bagi keteraturan dan
               penjualan bisnis Anda. Jika dalam 30 hari pertama Anda merasa layanan kami tidak bermanfaat, beri tahu
               kami dan kami kembalikan biaya langganan Anda secara penuh. Tanpa pertanyaan berbelit-belit.
            </p>
         </div>
      </section>

      <!-- FAQ SECTION (ACCORDION) -->
      <section id="faq" class="py-24 bg-slate-50">
         <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
               <span
                  class="text-xs font-extrabold uppercase tracking-wider text-brand-600 bg-brand-50 px-3 py-1 rounded-full border border-brand-200">
                  Pertanyaan Sering Ditanyakan
               </span>
               <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-4 mb-4">
                  Pertanyaan Seputar Layanan Pengelolaan OkeIniAja
               </h2>
               <p class="text-base text-slate-600">
                  Semua yang perlu Anda ketahui mengenai alur kerja, materi, dan kerjasama pengelolaan website & media
                  sosial bersama kami.
               </p>
            </div>

            <!-- Accordion List -->
            <div class="space-y-4">

               <!-- FAQ 1 -->
               <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-sm">
                  <button type="button" onclick="toggleFaq(1)"
                     class="w-full p-5 text-left font-bold text-slate-900 flex justify-between items-center hover:text-brand-600 transition-colors">
                     <span>Apakah materi artikel dan desain konten medsos dibuatkan oleh tim OkeIniAja?</span>
                     <svg id="faqIcon-1" class="w-5 h-5 text-slate-400 transition-transform duration-200" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                     </svg>
                  </button>
                  <div id="faqAnswer-1"
                     class="hidden px-5 pb-5 text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                     Ya, benar sekali! Anda tidak perlu pusing menulis artikel atau mendesain konten sendiri. Tim
                     copywriter dan desainer kami yang akan meriset topik, menyusun artikel SEO ramah Google, serta
                     mendesain materi visual medsos (Feed, Carousel, Reels) beserta caption yang memikat.
                  </div>
               </div>

               <!-- FAQ 2 -->
               <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-sm">
                  <button type="button" onclick="toggleFaq(2)"
                     class="w-full p-5 text-left font-bold text-slate-900 flex justify-between items-center hover:text-brand-600 transition-colors">
                     <span>Apakah saya bisa me-review materi sebelum artikel dan konten diposting?</span>
                     <svg id="faqIcon-2" class="w-5 h-5 text-slate-400 transition-transform duration-200" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                     </svg>
                  </button>
                  <div id="faqAnswer-2"
                     class="hidden px-5 pb-5 text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                     Tentu saja! Kami selalu menyediakan jadwal kalender konten dan draf artikel terlebih dahulu. Anda
                     berhak memberikan masukan atau koreksi sebelum konten dijadwalkan tayang di website dan akun media
                     sosial Anda.
                  </div>
               </div>

               <!-- FAQ 3 -->
               <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-sm">
                  <button type="button" onclick="toggleFaq(3)"
                     class="w-full p-5 text-left font-bold text-slate-900 flex justify-between items-center hover:text-brand-600 transition-colors">
                     <span>Bagaimana cara tim OkeIniAja mengakses website dan akun media sosial saya?</span>
                     <svg id="faqIcon-3" class="w-5 h-5 text-slate-400 transition-transform duration-200" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                     </svg>
                  </button>
                  <div id="faqAnswer-3"
                     class="hidden px-5 pb-5 text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                     Sangat aman. Untuk website (WordPress, Custom, dsb.), Anda cukup membuatkan akun dengan peran
                     Editor. Untuk media sosial (Instagram & Facebook), Anda cukup menautkan akses melalui Meta Business
                     Suite tanpa perlu memberikan kata sandi pribadi Anda.
                  </div>
               </div>

               <!-- FAQ 4 -->
               <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-sm">
                  <button type="button" onclick="toggleFaq(4)"
                     class="w-full p-5 text-left font-bold text-slate-900 flex justify-between items-center hover:text-brand-600 transition-colors">
                     <span>Apakah ada kontrak minimal kerja sama?</span>
                     <svg id="faqIcon-4" class="w-5 h-5 text-slate-400 transition-transform duration-200" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                     </svg>
                  </button>
                  <div id="faqAnswer-4"
                     class="hidden px-5 pb-5 text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                     Layanan kami berjalan fleksibel secara bulanan tanpa ikatan kontrak jangka panjang yang
                     memberatkan. Anda bebas melanjutkan, meng-upgrade paket, atau berhenti kapan saja tanpa biaya
                     pinalti pembatalan.
                  </div>
               </div>

               <!-- FAQ 5 -->
               <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-sm">
                  <button type="button" onclick="toggleFaq(5)"
                     class="w-full p-5 text-left font-bold text-slate-900 flex justify-between items-center hover:text-brand-600 transition-colors">
                     <span>Bagaimana cara pembayaran dan aktivasi layanannya?</span>
                     <svg id="faqIcon-5" class="w-5 h-5 text-slate-400 transition-transform duration-200" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                     </svg>
                  </button>
                  <div id="faqAnswer-5"
                     class="hidden px-5 pb-5 text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                     Setelah Anda memilih paket, Anda akan diarahkan ke WhatsApp admin kami untuk konfirmasi data usaha
                     dan pembayaran via Transfer Bank (BCA, Mandiri, BRI, BNI) atau QRIS. Setelah itu, onboarding
                     dimulai dan pengerjaan artikel serta desain konten langsung berjalan dalam 1-2 hari kerja!
                  </div>
               </div>

            </div>
         </div>
      </section>

      <!-- HIGH CONVERTING FINAL CTA BANNER -->
      <section
         class="py-20 bg-gradient-to-tr from-slate-950 via-slate-900 to-brand-950 text-white relative overflow-hidden">
         <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <span
               class="inline-block px-3.5 py-1 text-xs font-bold tracking-wider text-brand-300 bg-brand-900/60 border border-brand-700/60 rounded-full uppercase mb-6">
               ⚡ Kembangkan Bisnis Anda Bersama Kami
            </span>
            <h2 class="text-3xl sm:text-5xl font-extrabold tracking-tight mb-6 max-w-3xl mx-auto leading-tight">
               Siap Mengubah Website & Medsos Jadi Saluran Penjualan Aktif Setiap Hari?
            </h2>
            <p class="text-base sm:text-lg text-slate-300 max-w-2xl mx-auto mb-10 leading-relaxed">
               Jangan biarkan calon pelanggan lari ke kompetitor hanya karena website Anda lambat dan akun media sosial
               Anda mati suri. Mulai kelola secara profesional bersama tim OkeIniAja.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
               <a href="#harga"
                  class="w-full sm:w-auto px-8 py-4 rounded-2xl bg-gradient-to-r from-brand-600 to-orange-500 hover:from-brand-700 hover:to-orange-600 text-white font-bold text-base shadow-xl shadow-brand-500/30 transition-all flex items-center justify-center gap-2">
                  <span>Pilih Paket Pengelolaan Sekarang &rarr;</span>
               </a>
               <button onclick="openCustomModal()"
                  class="w-full sm:w-auto px-7 py-4 rounded-2xl bg-white/10 hover:bg-white/20 border border-white/20 text-white font-semibold text-base transition-all">
                  Konsultasi Dulu via WhatsApp
               </button>
            </div>
            <div class="mt-8 flex items-center justify-center gap-6 text-xs text-slate-400">
               <span>✓ Dikerjakan Terima Beres</span>
               <span>✓ Garansi 30 Hari Puas</span>
               <span>✓ Tanpa Kontrak Mengikat</span>
            </div>
         </div>
      </section>

   </main>

   <!-- SAAS FOOTER -->
   <footer class="bg-slate-950 text-slate-400 text-xs border-t border-slate-800 pt-16 pb-12">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
         <div class="grid grid-cols-1 md:grid-cols-5 gap-10 mb-12">

            <!-- Col 1: Brand Info -->
            <div class="md:col-span-2 space-y-4">
               <div class="flex items-center gap-3">
                  <div
                     class="w-9 h-9 rounded-xl bg-gradient-to-tr from-brand-600 to-orange-500 flex items-center justify-center text-white">
                     <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2"
                           d="M13 10V3L4 14h7v7l9-11h-7z" />
                     </svg>
                  </div>
                  <span class="text-xl font-bold text-white"><?= $site_name ?></span>
               </div>
               <p class="text-slate-400 text-xs sm:text-sm leading-relaxed max-w-sm">
                  Layanan profesional pengelolaan website, SEO Google, dan media sosial terpadu untuk Bisnis & UMKM di
                  Indonesia. Tingkatkan reputasi, jangkauan pelanggan, dan penjualan setiap hari tanpa repot.
               </p>
               <div class="pt-2 text-slate-500 text-xs">
                  <p>📍 Jakarta & Tasikmalaya, Indonesia</p>
                  <p>📞 WhatsApp Layanan: +62 812-9131-1218</p>
               </div>
            </div>

            <!-- Col 2: Solusi & Fitur -->
            <div>
               <!-- <h4 class="text-sm font-bold text-white uppercase tracking-wider mb-4">Cakupan Layanan</h4>
               <ul class="space-y-2.5">
                  <li><a href="#layanan" class="hover:text-white transition-colors">Artikel SEO Bulanan</a></li>
                  <li><a href="#layanan" class="hover:text-white transition-colors">Desain Konten Medsos</a></li>
                  <li><a href="#layanan" class="hover:text-white transition-colors">Upload Katalog Produk</a></li>
                  <li><a href="#layanan" class="hover:text-white transition-colors">Optimasi Kecepatan Web</a></li>
                  <li><a href="#layanan" class="hover:text-white transition-colors">Backup Rutin & Keamanan</a></li>
               </ul> -->
            </div>

            <!-- Col 3: Paket & Harga -->
            <div>
               <!-- <h4 class="text-sm font-bold text-white uppercase tracking-wider mb-4">Paket Pengelolaan</h4>
               <ul class="space-y-2.5">
                  <li><a href="#harga" class="hover:text-white transition-colors">Basic Maintenance</a></li>
                  <li><a href="#harga" class="hover:text-white transition-colors">Standard Growth</a></li>
                  <li><a href="#harga" class="hover:text-white transition-colors">Premium Pro</a></li>
                  <li><a href="#harga" class="hover:text-white transition-colors">Custom & Photoshoot</a></li>
                  <li><a href="#kalkulator-roi" class="hover:text-white transition-colors">Kalkulator Penghematan</a>
                  </li>
               </ul> -->
            </div>

            <!-- Col 4: Keamanan & Bantuan -->
            <div>
               <h4 class="text-sm font-bold text-white uppercase tracking-wider mb-4">Bantuan & Legal</h4>
               <ul class="space-y-2.5">
                  <li><a href="#faq" class="hover:text-white transition-colors">Pusat Bantuan (FAQ)</a></li>
                  <li><a href="https://api.whatsapp.com/send?phone=<?= $contact_wa ?>" target="_blank"
                        class="hover:text-white transition-colors">Konsultasi WhatsApp</a></li>
                  <li><a href="#"
                        onclick="alert('Syarat & Ketentuan berlaku untuk seluruh paket pengelolaan. Hubungi tim kami untuk perjanjian lengkap.'); return false;"
                        class="hover:text-white transition-colors">Syarat & Ketentuan</a></li>
                  <li><a href="#"
                        onclick="alert('Kami menghormati privasi data usaha dan kerahasiaan materi Anda 100%.'); return false;"
                        class="hover:text-white transition-colors">Kebijakan Privasi</a></li>
                  <li><span
                        class="inline-block mt-2 px-2 py-0.5 bg-emerald-950 text-emerald-400 rounded text-[10px] border border-emerald-800">Garansi
                        Kepuasan 30 Hari</span></li>
               </ul>
            </div>

         </div>

         <!-- Bottom copyright bar -->
         <div class="border-t border-slate-800/80 pt-8 flex flex-col sm:flex-row items-center justify-between gap-4">
            <p>&copy; <?= $current_year ?> <?= $site_name ?>. Seluruh hak cipta dilindungi undang-undang.</p>
            <p class="text-slate-500 text-[11px]">
               *Harga belum termasuk anggaran iklan berbayar (Ad budget) jika Anda mengambil opsi tambahan Meta Ads.
            </p>
         </div>
      </div>
   </footer>

   <!-- FLOATING WHATSAPP CHAT BUTTON -->
   <a href="https://api.whatsapp.com/send?phone=<?= $contact_wa ?>&text=Halo%20Admin%20OkeIniAja.com,%20saya%20tertarik%20dengan%20layanan%20pengelolaan%20website%20dan%20media%20sosial"
      target="_blank" rel="noopener noreferrer"
      class="fixed bottom-6 right-6 z-40 bg-emerald-500 hover:bg-emerald-600 text-white p-3.5 rounded-full shadow-2xl hover:scale-110 active:scale-95 transition-all flex items-center justify-center group"
      aria-label="Chat WhatsApp">
      <span class="absolute -top-1 -right-1 flex h-4 w-4">
         <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-300 opacity-75"></span>
         <span
            class="relative inline-flex rounded-full h-4 w-4 bg-emerald-400 text-[9px] font-bold text-slate-900 items-center justify-center">1</span>
      </span>
      <svg class="w-7 h-7 fill-current" viewBox="0 0 24 24">
         <path
            d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
      </svg>
      <span
         class="max-w-0 overflow-hidden whitespace-nowrap group-hover:max-w-xs transition-all duration-300 ease-in-out font-bold text-xs pl-0 group-hover:pl-2">
         Konsultasi Pengelolaan
      </span>
   </a>

   <!-- RECENT PURCHASE TOAST NOTIFICATION (FOMO / SOCIAL PROOF) -->
   <div id="liveOrderToast"
      class="fixed bottom-6 left-6 z-40 bg-white border border-slate-200/90 rounded-2xl p-3.5 shadow-xl max-w-sm hidden sm:flex items-center gap-3 transform transition-all duration-500 -translate-y-4 opacity-0 pointer-events-none">
      <div class="w-10 h-10 rounded-xl bg-emerald-100 text-emerald-600 flex items-center justify-center shrink-0">
         <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
         </svg>
      </div>
      <div>
         <p class="text-xs font-bold text-slate-800" id="toastTitle">Rian dari Surabaya</p>
         <p class="text-[11px] text-slate-500" id="toastDesc">Baru saja mengaktifkan Paket Standard Growth</p>
         <span class="text-[10px] text-brand-600 font-medium" id="toastTime">2 menit yang lalu</span>
      </div>
   </div>

   <!-- ORDER & CHECKOUT MODAL -->
   <div id="modalPlan"
      class="fixed inset-0 bg-slate-950/70 backdrop-blur-md hidden items-center justify-center p-4 z-50 overflow-y-auto">
      <div class="bg-white rounded-3xl p-6 sm:p-8 max-w-lg w-full shadow-2xl relative border border-slate-100 my-8">
         <button onclick="closeModal()"
            class="absolute top-5 right-5 text-slate-400 hover:text-slate-800 p-1 rounded-full hover:bg-slate-100 transition-colors">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
         </button>

         <div class="mb-6">
            <span
               class="text-[11px] font-extrabold text-brand-700 bg-brand-50 px-2.5 py-0.5 rounded-full uppercase tracking-wider">
               Formulir Pemesanan Layanan
            </span>
            <h3 id="modalTitle" class="text-2xl font-extrabold text-slate-900 mt-2">Paket Terpilih</h3>
            <div class="flex items-center gap-2 mt-1">
               <p id="modalPrice" class="text-xl font-bold text-brand-600">Rp 0</p>
               <span id="modalCycle" class="text-xs text-slate-500">(Billing Bulanan)</span>
            </div>
         </div>

         <form onsubmit="handleFormSubmit(event)" class="space-y-4">
            <div>
               <label class="block text-xs font-bold text-slate-700 mb-1">Nama Pemilik / PIC Usaha *</label>
               <input type="text" id="clientName" required placeholder="Contoh: Budi Santoso"
                  class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:outline-none focus:border-brand-600 focus:ring-1 focus:ring-brand-600 transition-all">
            </div>
            <div>
               <label class="block text-xs font-bold text-slate-700 mb-1">Nama Usaha / Brand *</label>
               <input type="text" id="clientBusiness" required placeholder="Contoh: CV Jaya Abadi Mandiri"
                  class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:outline-none focus:border-brand-600 focus:ring-1 focus:ring-brand-600 transition-all">
            </div>
            <div>
               <label class="block text-xs font-bold text-slate-700 mb-1">Nomor WhatsApp Aktif *</label>
               <input type="tel" id="clientWa" required placeholder="08123456789"
                  class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:outline-none focus:border-brand-600 focus:ring-1 focus:ring-brand-600 transition-all">
            </div>
            <div>
               <label class="block text-xs font-bold text-slate-700 mb-1">Link Website / Akun Instagram Saat Ini</label>
               <input type="text" id="clientWeb" placeholder="https://tokosaya.com atau @tokosaya (jika ada)"
                  class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:outline-none focus:border-brand-600 focus:ring-1 focus:ring-brand-600 transition-all">
            </div>
            <div>
               <label class="block text-xs font-bold text-slate-700 mb-1">Kode Voucher Promo (Opsional)</label>
               <div class="flex gap-2">
                  <input type="text" id="voucherCode" placeholder="Masukkan HEMAT40"
                     class="uppercase flex-1 px-4 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-600">
                  <button type="button" onclick="applyVoucher()"
                     class="px-4 py-2 bg-slate-100 hover:bg-slate-200 text-slate-800 font-bold rounded-xl text-xs transition-all">
                     Terapkan
                  </button>
               </div>
               <p id="voucherFeedback" class="text-[11px] text-emerald-600 mt-1 hidden font-semibold"></p>
            </div>
            <div>
               <label class="block text-xs font-bold text-slate-700 mb-1">Catatan Kebutuhan Khusus</label>
               <textarea id="clientNote" rows="2"
                  placeholder="Contoh: Butuh penekanan pada katalog produk baru dan target area Jabodetabek"
                  class="w-full px-4 py-2 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-brand-600"></textarea>
            </div>

            <!-- Payment instruction note -->
            <div class="p-3 bg-slate-50 rounded-xl border border-slate-200/80 text-[11px] text-slate-600 space-y-1">
               <div class="flex items-center gap-1.5 font-bold text-slate-800">
                  <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                  </svg>
                  Garansi Kepuasan & Dikerjakan Terima Beres
               </div>
               <p>Setelah formulir dikirim, tim admin kami akan segera menghubungi Anda di WhatsApp untuk verifikasi
                  kebutuhan dan memulai proses onboarding.</p>
            </div>

            <button type="submit"
               class="w-full py-3.5 bg-emerald-600 hover:bg-emerald-700 text-white font-extrabold rounded-xl transition-all text-sm flex items-center justify-center gap-2 shadow-lg shadow-emerald-600/25 active:scale-95">
               <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                  <path
                     d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
               </svg>
               <span>Lanjutkan & Kirim via WhatsApp</span>
            </button>
         </form>
      </div>
   </div>

   <!-- DEMO MODAL -->
   <div id="modalDemo"
      class="fixed inset-0 bg-slate-950/80 backdrop-blur-md hidden items-center justify-center p-4 z-50">
      <div
         class="bg-slate-900 text-white rounded-3xl p-6 sm:p-8 max-w-2xl w-full shadow-2xl relative border border-slate-800">
         <button onclick="closeDemoModal()"
            class="absolute top-5 right-5 text-slate-400 hover:text-white p-1 rounded-full hover:bg-slate-800 transition-colors">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
         </button>

         <div class="mb-4">
            <span class="text-xs font-bold uppercase text-brand-400">Contoh Hasil Pengerjaan Layanan</span>
            <h3 class="text-2xl font-bold mt-1">Standar Kualitas Pengerjaan Tim OkeIniAja</h3>
         </div>

         <div
            class="aspect-video bg-slate-950 rounded-2xl flex flex-col items-center justify-center border border-slate-800 relative overflow-hidden p-6 text-center">
            <div
               class="w-16 h-16 rounded-full bg-brand-600/30 text-brand-400 flex items-center justify-center mb-3 animate-pulse">
               <svg class="w-8 h-8 fill-current" viewBox="0 0 24 24">
                  <path d="M8 5v14l11-7z" />
               </svg>
            </div>
            <h4 class="text-lg font-bold text-white mb-2">Simulasi Pengelolaan Terpadu</h4>
            <p class="text-xs text-slate-400 max-w-md">
               Tim kami mengintegrasikan pembuatan artikel SEO berkala, desain konten Instagram & Facebook, optimasi
               kecepatan web, hingga formulir leads WhatsApp siap pakai.
            </p>
            <div class="mt-6 flex flex-wrap gap-2 justify-center">
               <span class="text-[11px] bg-slate-800 px-3 py-1 rounded-full text-slate-300">⚡ Kompresi WebP
                  Lossless</span>
               <span class="text-[11px] bg-slate-800 px-3 py-1 rounded-full text-slate-300">📈 Halaman 1 Google
                  SEO</span>
               <span class="text-[11px] bg-slate-800 px-3 py-1 rounded-full text-slate-300">💬 Direct WhatsApp
                  Lead</span>
            </div>
         </div>

         <div class="mt-6 flex justify-end gap-3">
            <button onclick="closeDemoModal()"
               class="px-5 py-2.5 text-xs font-bold text-slate-400 hover:text-white rounded-xl">
               Tutup
            </button>
            <a href="#harga" onclick="closeDemoModal()"
               class="px-6 py-2.5 text-xs font-bold bg-brand-600 hover:bg-brand-500 text-white rounded-xl shadow-md">
               Pilih Paket Pengelolaan
            </a>
         </div>
      </div>
   </div>

   <!-- LOGIN MODAL -->
   <div id="modalLogin"
      class="fixed inset-0 bg-slate-950/70 backdrop-blur-md hidden items-center justify-center p-4 z-50">
      <div class="bg-white rounded-3xl p-6 sm:p-8 max-w-md w-full shadow-2xl relative border border-slate-100">
         <button onclick="closeLoginModal()"
            class="absolute top-5 right-5 text-slate-400 hover:text-slate-800 p-1 rounded-full hover:bg-slate-100 transition-colors">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
         </button>

         <div class="mb-6">
            <div class="w-10 h-10 rounded-xl bg-brand-50 text-brand-600 flex items-center justify-center mb-3">
               <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                     d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
               </svg>
            </div>
            <h3 class="text-2xl font-extrabold text-slate-900">Masuk ke Portal Klien</h3>
            <p class="text-xs text-slate-500 mt-1">Pantau progres artikel, kalender medsos, dan laporan bulanan bisnis
               Anda</p>
         </div>

         <form onsubmit="handleLoginSubmit(event)" class="space-y-4">
            <div>
               <label class="block text-xs font-bold text-slate-700 mb-1">Email atau No. WhatsApp Terdaftar *</label>
               <input type="text" id="loginUser" required placeholder="nama@bisnisanda.com atau 0812xxx"
                  class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:outline-none focus:border-brand-600 focus:ring-1 focus:ring-brand-600 transition-all">
            </div>
            <div>
               <div class="flex justify-between items-center mb-1">
                  <label class="block text-xs font-bold text-slate-700">Password / PIN Akun *</label>
                  <a href="#"
                     onclick="alert('Silakan hubungi WhatsApp CS 6281291311218 untuk bantuan akses akun Anda.'); return false;"
                     class="text-[11px] text-brand-600 hover:underline">Lupa Password?</a>
               </div>
               <input type="password" id="loginPass" required placeholder="••••••••"
                  class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:outline-none focus:border-brand-600 focus:ring-1 focus:ring-brand-600 transition-all">
            </div>
            <button type="submit"
               class="w-full py-3.5 bg-slate-900 hover:bg-brand-600 text-white font-extrabold rounded-xl transition-all text-sm shadow-md hover:shadow-brand-500/25 active:scale-95 flex items-center justify-center gap-2">
               <span>Masuk ke Portal</span>
               <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
               </svg>
            </button>
         </form>

         <div class="mt-6 pt-4 border-t border-slate-100 text-center text-xs text-slate-500">
            Belum berlangganan paket pengelolaan?
            <a href="#harga" onclick="closeLoginModal()" class="font-bold text-brand-600 hover:underline">Pilih Paket
               Sekarang &rarr;</a>
         </div>
      </div>
   </div>

   <!-- JAVASCRIPT LOGIC -->
   <script>
      let currentBilling = 'monthly';
      let selectedPlanName = '';
      let selectedPlanPrice = '';
      let discountApplied = false;

      // Pricing structure
      const planPrices = {
         'Basic Maintenance': {
            monthly: 'Rp 75.000',
            yearly: 'Rp 63.750',
            rawMonthly: 75000,
            rawYearly: 63750
         },
         'Standard Growth': {
            monthly: 'Rp 150.000',
            yearly: 'Rp 127.500',
            rawMonthly: 150000,
            rawYearly: 127500
         },
         'Premium Pro': {
            monthly: 'Rp 275.000',
            yearly: 'Rp 233.750',
            rawMonthly: 275000,
            rawYearly: 233750
         }
      };

      // Switch Tab UMKM vs Custom
      function switchTab(tab) {
         const tabUmkm = document.getElementById('tabUmkm');
         const tabCustom = document.getElementById('tabCustom');
         const retainerSection = document.getElementById('retainerSection');
         const customSection = document.getElementById('customSection');

         if (tab === 'umkm') {
            tabUmkm.className = "px-6 py-2.5 text-sm font-bold rounded-xl bg-white shadow-sm text-slate-900 transition-all";
            tabCustom.className = "px-6 py-2.5 text-sm font-medium rounded-xl text-slate-600 hover:text-slate-900 transition-all";
            retainerSection.classList.remove('hidden');
            customSection.classList.add('hidden');
         } else {
            tabCustom.className = "px-6 py-2.5 text-sm font-bold rounded-xl bg-white shadow-sm text-slate-900 transition-all";
            tabUmkm.className = "px-6 py-2.5 text-sm font-medium rounded-xl text-slate-600 hover:text-slate-900 transition-all";
            retainerSection.classList.add('hidden');
            customSection.classList.remove('hidden');
         }
      }

      // Set Billing Period
      function setBilling(type) {
         currentBilling = type;
         const btnMonthly = document.getElementById('btnMonthly');
         const btnYearly = document.getElementById('btnYearly');

         const priceBasic = document.querySelector('.price-basic');
         const priceGrowth = document.querySelector('.price-growth');
         const pricePro = document.querySelector('.price-pro');

         const labels = document.querySelectorAll('.billing-label');
         const subPrices = document.querySelectorAll('.sub-price');

         if (type === 'monthly') {
            btnMonthly.className = "px-5 py-2 font-bold rounded-full bg-white shadow-sm text-slate-900 transition-all";
            btnYearly.className = "px-5 py-2 font-medium rounded-full text-slate-600 hover:text-slate-900 transition-all flex items-center gap-1.5";

            priceBasic.textContent = planPrices['Basic Maintenance'].monthly;
            priceGrowth.textContent = planPrices['Standard Growth'].monthly;
            pricePro.textContent = planPrices['Premium Pro'].monthly;

            labels.forEach(l => l.textContent = "/ bulan");
            subPrices.forEach(s => s.textContent = "Ditagih bulanan • Batal kapan saja");
         } else {
            btnYearly.className = "px-5 py-2 font-bold rounded-full bg-white shadow-sm text-slate-900 transition-all flex items-center gap-1.5";
            btnMonthly.className = "px-5 py-2 font-medium rounded-full text-slate-600 hover:text-slate-900 transition-all";

            priceBasic.textContent = planPrices['Basic Maintenance'].yearly;
            priceGrowth.textContent = planPrices['Standard Growth'].yearly;
            pricePro.textContent = planPrices['Premium Pro'].yearly;

            labels.forEach(l => l.textContent = "/ bulan");
            subPrices.forEach(s => s.textContent = "Ditagih tahunan (Hemat 15% + 2 Bln Gratis)");
         }
      }

      // Select Plan and Open Checkout Modal
      function selectPlan(planName, customPrice = null) {
         selectedPlanName = planName;
         document.getElementById('modalTitle').textContent = planName;

         let displayPrice = '';
         if (customPrice) {
            displayPrice = customPrice;
            document.getElementById('modalCycle').textContent = '(Kustom)';
         } else if (planPrices[planName]) {
            const p = planPrices[planName][currentBilling];
            displayPrice = p;
            document.getElementById('modalCycle').textContent = currentBilling === 'yearly' ? '(Billing Tahunan - Hemat 15%)' : '(Billing Bulanan)';
         } else {
            displayPrice = '-';
         }

         selectedPlanPrice = displayPrice;
         document.getElementById('modalPrice').textContent = displayPrice;

         // Reset voucher
         discountApplied = false;
         document.getElementById('voucherFeedback').classList.add('hidden');
         document.getElementById('voucherCode').value = '';

         const modal = document.getElementById('modalPlan');
         modal.classList.remove('hidden');
         modal.classList.add('flex');
      }

      function openCustomModal() {
         selectPlan('Custom & Photoshoot Project', 'Sesuai Ruang Lingkup');
      }

      function closeModal() {
         const modal = document.getElementById('modalPlan');
         modal.classList.add('hidden');
         modal.classList.remove('flex');
      }

      // Apply Voucher Code
      function applyVoucher() {
         const code = document.getElementById('voucherCode').value.trim().toUpperCase();
         const feedback = document.getElementById('voucherFeedback');

         if (code === 'HEMAT40' || code === 'OKE40') {
            discountApplied = true;
            feedback.textContent = '🎉 Kupon Berhasil! Diskon 40% diterapkan pada invoice layanan Anda.';
            feedback.className = 'text-[11px] text-emerald-600 mt-1 block font-semibold';
         } else if (code === '') {
            feedback.textContent = 'Silakan masukkan kode kupon promo.';
            feedback.className = 'text-[11px] text-rose-500 mt-1 block font-semibold';
         } else {
            feedback.textContent = 'Kode kupon tidak valid atau telah kedaluwarsa.';
            feedback.className = 'text-[11px] text-rose-500 mt-1 block font-semibold';
         }
      }

      // Handle Checkout Submission
      function handleFormSubmit(event) {
         event.preventDefault();
         const name = document.getElementById('clientName').value.trim();
         const business = document.getElementById('clientBusiness').value.trim();
         const phone = document.getElementById('clientWa').value.trim();
         const website = document.getElementById('clientWeb').value.trim() || '-';
         const notes = document.getElementById('clientNote').value.trim() || '-';
         const voucher = document.getElementById('voucherCode').value.trim().toUpperCase() || '-';
         const billingText = currentBilling === 'yearly' ? 'Tahunan (Hemat 15% + 2 Bln Gratis)' : 'Bulanan';

         const waNumber = '<?= $contact_wa ?>';

         let message = `Halo Admin OkeIniAja.com,\n\nSaya ingin memesan layanan pengelolaan website & media sosial:\n`;
         message += `📌 *Paket Layanan:* ${selectedPlanName}\n`;
         message += `💰 *Biaya / Siklus:* ${selectedPlanPrice} (${billingText})\n`;
         if (discountApplied) {
            message += `🎁 *Kupon Promo:* ${voucher} (Diskon 40% Aktif)\n`;
         }
         message += `\n*Detail Usaha Klien:*\n`;
         message += `👤 *Nama Pemesan/PIC:* ${name}\n`;
         message += `🏢 *Nama Usaha/Brand:* ${business}\n`;
         message += `📱 *Nomor WhatsApp:* ${phone}\n`;
         message += `🌐 *Website / Akun Medsos:* ${website}\n`;
         message += `📝 *Catatan / Kebutuhan Khusus:* ${notes}\n\n`;
         message += `Mohon info langkah aktivasi dan pengerjaan selanjutnya. Terima kasih!`;

         const waUrl = `https://api.whatsapp.com/send?phone=${waNumber}&text=${encodeURIComponent(message)}`;

         window.open(waUrl, '_blank');
         closeModal();
      }


      // Interactive ROI Level Calculator
      function setRoiLevel(level) {
         const btnBasic = document.getElementById('roiBtn-basic');
         const btnGrowth = document.getElementById('roiBtn-growth');
         const btnPro = document.getElementById('roiBtn-pro');

         const oldCost = document.getElementById('calcOldCost');
         const newCost = document.getElementById('calcNewCost');
         const savings = document.getElementById('calcSavings');

         // Reset borders
         [btnBasic, btnGrowth, btnPro].forEach(b => {
            b.className = "p-4 rounded-2xl border-2 border-slate-200 text-left hover:border-brand-500 transition-all";
         });

         if (level === 'basic') {
            btnBasic.className = "p-4 rounded-2xl border-2 border-brand-600 bg-brand-50/50 text-left transition-all";
            oldCost.textContent = "Rp 4.500.000 / bln";
            newCost.textContent = "Rp 75.000 / bln";
            savings.textContent = "Hemat Rp 53.100.000";
         } else if (level === 'growth') {
            btnGrowth.className = "p-4 rounded-2xl border-2 border-brand-600 bg-brand-50/50 text-left transition-all";
            oldCost.textContent = "Rp 6.500.000 / bln";
            newCost.textContent = "Rp 150.000 / bln";
            savings.textContent = "Hemat Rp 76.200.000";
         } else {
            btnPro.className = "p-4 rounded-2xl border-2 border-brand-600 bg-brand-50/50 text-left transition-all";
            oldCost.textContent = "Rp 10.000.000 / bln";
            newCost.textContent = "Rp 275.000 / bln";
            savings.textContent = "Hemat Rp 116.700.000";
         }
      }

      // Comparison Table Toggle
      function toggleComparisonTable() {
         const container = document.getElementById('comparisonTableContainer');
         const chevron = document.getElementById('compareChevron');
         const text = document.getElementById('compareToggleText');

         if (container.classList.contains('hidden')) {
            container.classList.remove('hidden');
            chevron.classList.add('rotate-180');
            text.textContent = 'Tutup Tabel Perbandingan Detail';
         } else {
            container.classList.add('hidden');
            chevron.classList.remove('rotate-180');
            text.textContent = 'Buka Tabel Perbandingan Detail Paket';
         }
      }

      // FAQ Accordion
      function toggleFaq(index) {
         const answer = document.getElementById(`faqAnswer-${index}`);
         const icon = document.getElementById(`faqIcon-${index}`);

         if (answer.classList.contains('hidden')) {
            answer.classList.remove('hidden');
            icon.classList.add('rotate-180');
         } else {
            answer.classList.add('hidden');
            icon.classList.remove('rotate-180');
         }
      }

      // Demo Modal Controls
      function openDemoModal() {
         const modal = document.getElementById('modalDemo');
         modal.classList.remove('hidden');
         modal.classList.add('flex');
      }

      function closeDemoModal() {
         const modal = document.getElementById('modalDemo');
         modal.classList.add('hidden');
         modal.classList.remove('flex');
      }

      // Login Modal Controls
      function openLoginModal() {
         const modal = document.getElementById('modalLogin');
         if (modal) {
            modal.classList.remove('hidden');
            modal.classList.add('flex');
         }
      }

      function closeLoginModal() {
         const modal = document.getElementById('modalLogin');
         if (modal) {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
         }
      }

      function handleLoginSubmit(event) {
         event.preventDefault();
         const user = document.getElementById('loginUser').value.trim();
         alert(`Selamat datang kembali, ${user}! Akun Anda sedang diverifikasi. Mengarahkan ke Portal Klien...`);
         closeLoginModal();
      }

      // Mobile Menu
      function toggleMobileMenu() {
         const menu = document.getElementById('mobileMenu');
         const hamburger = document.getElementById('hamburgerIcon');
         const close = document.getElementById('closeIcon');

         if (menu.classList.contains('hidden')) {
            menu.classList.remove('hidden');
            hamburger.classList.add('hidden');
            close.classList.remove('hidden');
         } else {
            menu.classList.add('hidden');
            hamburger.classList.remove('hidden');
            close.classList.add('hidden');
         }
      }

      function scrollToPricing() {
         const elem = document.getElementById('harga');
         if (elem) elem.scrollIntoView({ behavior: 'smooth' });
      }

      // FOMO Live Sign-up Ticker
      const liveOrders = [
         { name: 'Rian (Surabaya)', plan: 'Paket Standard Growth', time: '2 menit lalu' },
         { name: 'Siti Rahma (Bandung)', plan: 'Paket Basic Maintenance', time: '5 menit lalu' },
         { name: 'Hendra (Medan)', plan: 'Paket Premium Pro', time: '11 menit lalu' },
         { name: 'CV Berkah Mandiri (Semarang)', plan: 'Paket Standard Growth', time: '17 menit lalu' },
         { name: 'drg. Maya (Yogyakarta)', plan: 'Paket Pengelolaan Web + Medsos', time: '24 menit lalu' }
      ];
      let orderIndex = 0;

      function triggerToast() {
         const toast = document.getElementById('liveOrderToast');
         if (!toast) return;

         const current = liveOrders[orderIndex];
         document.getElementById('toastTitle').textContent = current.name;
         document.getElementById('toastDesc').textContent = `Baru saja mengaktifkan ${current.plan}`;
         document.getElementById('toastTime').textContent = current.time;

         toast.classList.remove('hidden');
         setTimeout(() => {
            toast.classList.remove('-translate-y-4', 'opacity-0');
            toast.classList.add('translate-y-0', 'opacity-100');
         }, 50);

         setTimeout(() => {
            toast.classList.remove('translate-y-0', 'opacity-100');
            toast.classList.add('-translate-y-4', 'opacity-0');
         }, 5000);

         orderIndex = (orderIndex + 1) % liveOrders.length;
      }

      // Start initial toast after 4s, repeat every 22s
      setTimeout(() => {
         triggerToast();
         setInterval(triggerToast, 22000);
      }, 4000);
   </script>
</body>

</html>