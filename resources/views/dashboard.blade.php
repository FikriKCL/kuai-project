<!-- Include this script tag or install `@tailwindplus/elements` via npm: -->
<!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script> -->
<!doctype html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#3A6532]">
  <section class="navbar">
    <nav
      class="relative bg-[#3A6532] after:pointer-events-none after:absolute after:inset-x-0 after:bottom-0 after:h-px after:bg-white/10">
      <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-center">
          <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
            <!-- Mobile menu button-->
            <button type="button" command="--toggle" commandfor="mobile-menu"
              class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-white/5 hover:text-white focus:outline-2 focus:-outline-offset-1 focus:outline-indigo-500">
              <span class="absolute -inset-0.5"></span>
              <span class="sr-only">Open main menu</span>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon"
                aria-hidden="true" class="size-6 in-aria-expanded:hidden">
                <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon"
                aria-hidden="true" class="size-6 not-in-aria-expanded:hidden">
                <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </button>
          </div>
          <div class="flex flex-1 items-center justify-start">
            <div class="flex shrink-0 items-center">
              <img src="{{ asset('assets/logo_kuai.png') }}" alt="KUAI Logo">
            </div>
          </div>
          <div class="flex space-x-4 text-center justify-end">
            <!-- Current: "bg-gray-950/50 text-white", Default: "text-gray-300 hover:bg-white/5 hover:text-white" -->
            <a href="#"
              class="rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-white/5 hover:text-white">Product</a>
            <a href="#"
              class="rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-white/5 hover:text-white">Journal</a>
            <a href="#"
              class="rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-white/5 hover:text-white">About</a>
            <a href="#"
              class="rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-white/5 hover:text-white">Career</a>
            <a href="#"
              class="rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-white/5 hover:text-white">Get
              Started</a>
          </div>
        </div>
        <el-disclosure id="mobile-menu" hidden class="block sm:hidden">
          <div class="space-y-1 px-2 pt-2 pb-3">
            <!-- Current: "bg-gray-950/50 text-white", Default: "text-gray-300 hover:bg-white/5 hover:text-white" -->
            <a href="#" aria-current="page"
              class="block rounded-md bg-gray-950/50 px-3 py-2 text-base font-medium text-white">Dashboard</a>
            <a href="#"
              class="rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-white/5 hover:text-white">Journal</a>
            <a href="#"
              class="rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-white/5 hover:text-white">About</a>
            <a href="#"
              class="rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-white/5 hover:text-white">Career</a>
            <a href="#"
              class="rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-white/5 hover:text-white">Get
              Started</a>
          </div>
        </el-disclosure>
    </nav>
  </section>

  <section class="bg-[#3A6532] max-h-dvh py-12">
    <div class="py-8 px-4 mx-auto max-w-screen-2xl text-center lg:py-16">
      <h1 class="mb-6 text-4xl font-bold tracking-tighter text-heading text-white md:text-5xl lg:text-6xl">Cuci Sepatu
        Terbaik Se-</h1>
      <h1 class="mb-6 text-4xl font-bold tracking-tighter text-heading text-white md:text-5xl lg:text-6xl">Bandung Raya
      </h1>
      <p class="mb-8 text-base font-normal text-body md:text-xl text-white">Menjaga dan merawat sepatu anda dengan
        ketulusan hati terdalam. <br>Dijamin bersih dan menjaga keawetan sepatumu</p>
      <div class="flex flex-col gap-4 space-y-4 sm:flex-row sm:justify-center sm:space-y-0 md:space-x-4">
        <button type="button"
          class="w-52 inline-flex items-center justify-center rounded-4xl bg-[#D08A4E] text-white bg-brand hover:bg-brand-strong box-  -transparent focus:ring-4 focus:ring-brand-medium shadow-xs font-medium rounded-base text-base px-5 py-3 focus:outline-none">
          Layanan
        </button>
        <button type="button"
          class="w-52 inline-flex items-center justify-center rounded-4xl bg-white text-[#3A6532] bg-brand hover:bg-brand-strong box-  -transparent focus:ring-4 focus:ring-[#D08A4E] focus:ring-brand-medium shadow-xs font-medium rounded-base text-base px-5 py-3 focus:outline-none">
          Merchandise
        </button>
      </div>
    </div>
  </section>
<section class="flex w-full justify-center pb-12">
    <div class="flex flex-col gap-8 w-full max-w-7xl bg-white rounded-xl self-center p-6 shadow-md">
        
        <div class="flex flex-col md:flex-row gap-6 w-full">
            <div class="flex-1">
                <p class="font-sans font-extralight text-xl text-gray-800">Barang Anda Adalah Tanggung Jawab Kami</p>
            </div>
            <div class="flex-1">
                <p class="font-sans font-extralight text-left text-base text-gray-600 leading-relaxed">
                    jasa perawatan dan cuci sepatu premium pertama di Indonesia <br class="hidden md:block"> 
                    dengan layanan yang dirancang untuk memberikan kemudahan, <br class="hidden md:block"> 
                    kenyamanan, dan hasil yang maksimal.
                </p>
            </div>
        </div>

        <!-- untuk bagian jumbotron 4 kotak -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 w-full">
            
            <div class="bg-[#D08A4E] rounded-2xl p-6 flex items-start gap-4 text-white shadow-sm">
                <div class="w-16 h-16 bg-white rounded-2xl shrink-0 flex items-center justify-center">
                    </div>
                <div>
                    <h3 class="text-xl font-bold mb-1 tracking-tight">Garansi Cuci Ulang</h3>
                    <p class="text-white/80 text-xs leading-relaxed font-sans font-light">ika hasilnya kurang memuaskan, kami tangani kembali tanpa biaya tambahan. *S&K berlaku</p>
                </div>
            </div>

            <div class="bg-[#D08A4E] rounded-2xl p-6 flex items-start gap-4 text-white shadow-sm">
                <div class="w-16 h-16 bg-white rounded-2xl shrink-0 flex items-center justify-center"></div>
                <div>
                    <h3 class="text-xl font-bold mb-1 tracking-tight">Konsultasi</h3>
                    <p class="text-white/80 text-xs leading-relaxed font-sans font-light">ika hasilnya kurang memuaskan, kami tangani kembali tanpa biaya tambahan. *S&K berlaku</p>
                </div>
            </div>

            <div class="bg-[#D08A4E] rounded-2xl p-6 flex items-start gap-4 text-white shadow-sm">
                <div class="w-16 h-16 bg-white rounded-2xl shrink-0 flex items-center justify-center"></div>
                <div>
                    <h3 class="text-xl font-bold mb-1 tracking-tight">Kami Antar</h3>
                    <p class="text-white/80 text-xs leading-relaxed font-sans font-light">ika hasilnya kurang memuaskan, kami tangani kembali tanpa biaya tambahan. *S&K berlaku</p>
                </div>
            </div>

            <div class="bg-[#D08A4E] rounded-2xl p-6 flex items-start gap-4 text-white shadow-sm">
                <div class="w-16 h-16 bg-white rounded-2xl shrink-0 flex items-center justify-center"></div>
                <div>
                    <h3 class="text-xl font-bold mb-1 tracking-tight">Layanan Bergaransi</h3>
                    <p class="text-white/80 text-xs leading-relaxed font-sans font-light">ika hasilnya kurang memuaskan, kami tangani kembali tanpa biaya tambahan. *S&K berlaku</p>
                </div>
            </div>

        </div>

    </div>
</section>
<section class="flex w-full justify-center bg-white py-16 px-4">
  <section class="flex w-full justify-center pb-12">
    <div class="grid grid-cols-1 md:grid-cols-2 w-full max-w-7xl bg-white rounded-xl overflow-hidden shadow-md">
        <div class="w-full h-64 md:h-96 bg-gray-100">
            <img src="{{ asset('assets/fotoSepatu/pexels-craytive-1456733.jpg') }}" alt="Kuai Shoes" class="w-full h-full object-cover">
        </div>
        
        <div class="flex flex-col justify-center p-8 md:p-16 bg-white">
            <h2 class="text-3xl md:text-4xl font-serif font-normal text-gray-900 leading-tight mb-4">
                Berjalan pelihara kaki,<br>berkata pelihara lidah
            </h2>
            <p class="text-gray-500 font-sans font-light text-base">-Kuai</p>
        </div>
    </div>
</section>
</section>
<section class="flex w-full justify-center bg-white py-16 px-4">
    <div class="flex flex-col items-center w-full max-w-7xl">
        
        <h2 class="text-3xl font-bold text-gray-800 mb-3 tracking-tight">Layanan Kami</h2>
        <button type="button" class="px-5 py-2 bg-[#D08A4E] hover:bg-[#b5733b] text-white text-sm font-medium rounded-full transition duration-200 mb-4 shadow-sm">
            Lihat daftar Menu
        </button>
        
        <p class="text-center text-gray-500 text-sm max-w-xl leading-relaxed mb-8 font-sans font-light">
            Kami memberikan berbagai macam layanan untuk perawatan barang kesayangan anda yang akan dikerjakan oleh tim kami yang sudah berpengalaman dan professional.
        </p>

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-4 w-full mb-8">
            
            <div class="bg-[#3A6532] rounded-2xl p-3 flex flex-col justify-center border border-gray-100 shadow-sm overflow-hidden group">
                <div class="w-full aspect-square rounded-xl bg-gray-200 mb-3 overflow-hidden">
                    <img src="{{ asset('assets/fotoSepatu/deepclean.jpg') }}" alt="Deep Cleaning" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                </div>
                <div>
                    <h4 class="text-white font-bold text-base leading-tight mb-1 text-center">Deep Cleaning</h4>
                    <p class="text-white/70 text-[10px] leading-tight mb-3 font-sans font-light text-center">Pembersihan total dan menyeluruh dengan detail</p>
                </div>
                <div class="flex items-center justify-center bg-[#D08A4E] rounded-lg p-1.5">
                    <span class="text-white text-xs font-bold tracking-wide">Rp. 50.000</span>
                </div>
            </div>

            <div class="bg-[#3A6532] rounded-2xl p-3 flex flex-col justify-center border border-gray-100 shadow-sm overflow-hidden group">
                <div class="w-full aspect-square rounded-xl bg-gray-200 mb-3 overflow-hidden">
                    <img src="{{ asset('assets/fotoSepatu/whiteshoes.avif') }}" alt="White Shoe" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                </div>
                <div>
                    <h4 class="text-white font-bold text-base leading-tight mb-1 text-center">White Shoe</h4>
                    <p class="text-white/70 text-[10px] leading-tight mb-3 font-sans font-light text-center">Sepatu putih/cerah</p>
                </div>
                <div class="flex items-center justify-center bg-[#D08A4E] rounded-lg p-1.5">
                    <span class="text-white text-xs font-bold tracking-wide">Rp. 60.000</span>
                </div>
            </div>

            <div class="bg-[#3A6532] rounded-2xl p-3 flex flex-col justify-center border border-gray-100 shadow-sm overflow-hidden group">
                <div class="w-full aspect-square rounded-xl bg-gray-200 mb-3 overflow-hidden">
                    <img src="{{ asset('assets/fotoSepatu/halfsuede.jpg') }}" alt="Half Suede" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                </div>
                <div>
                    <h4 class="text-white font-bold text-base leading-tight mb-1 text-center">Half Suede</h4>
                    <p class="text-white/70 text-[10px] leading-tight mb-3 font-sans font-light text-center">Bagian sepatu yang memiliki suede</p>
                </div>
                <div class="flex items-center justify-center bg-[#D08A4E] rounded-lg p-1.5">
                    <span class="text-white text-xs font-bold tracking-wide">Rp. 60.000</span>
                </div>
            </div>

            <div class="bg-[#3A6532] rounded-2xl p-3 flex flex-col justify-center border border-gray-100 shadow-sm overflow-hidden group">
                <div class="w-full aspect-square rounded-xl bg-gray-200 mb-3 overflow-hidden">
                    <img src="{{ asset('assets/fotoSepatu/fullsuede.webp') }}" alt="Full Suede" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                </div>
                <div>
                    <h4 class="text-white font-bold text-base leading-tight mb-1 text-center">Full Suede</h4>
                    <p class="text-white/70 text-[10px] leading-tight mb-3 font-sans font-light text-center">sepatu yang memiliki suede full</p>
                </div>
                <div class="flex items-center justify-center bg-[#D08A4E] rounded-lg p-1.5">
                    <span class="text-white text-xs font-bold tracking-wide text-center">Rp. 85.000</span>
                </div>
            </div>

            <div class="bg-[#3A6532] rounded-2xl p-3 flex flex-col justify-center border border-gray-100 shadow-sm overflow-hidden group">
                <div class="w-full aspect-square rounded-xl bg-gray-200 mb-3 overflow-hidden">
                    <img src="{{ asset('assets/fotoSepatu/express.webp') }}" alt="EXPRESS" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                </div>
                <div>
                    <h4 class="text-white font-bold text-base leading-tight mb-1 text-center">EXPRESS</h4>
                    <p class="text-white/70 text-[10px] leading-tight mb-3 font-sans font-light text-center">Sehari beres pokoknya</p>
                </div>
                <div class="flex items-center justify-center bg-[#D08A4E] rounded-lg p-1.5">
                    <span class="text-white text-xs font-bold tracking-wide">Rp. 75.000</span>
                </div>
            </div>
            
            <div class="bg-[#3A6532] rounded-2xl p-3 flex flex-col justify-center border border-gray-100 shadow-sm overflow-hidden group">
                <div class="w-full aspect-square rounded-xl bg-gray-200 mb-3 overflow-hidden">
                    <img src="{{ asset('assets/fotoSepatu/fullsuede.webp') }}" alt="Full Suede EXPRESS" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                </div>
                <div>
                    <h4 class="text-white font-bold text-base leading-tight mb-1 text-center">Full Suede EXPRESS</h4>
                    <p class="text-white/70 text-[10px] leading-tight mb-3 font-sans font-light text-center">sehari beres pokoknya</p>
                </div>
                <div class="flex items-center justify-center bg-[#D08A4E] rounded-lg p-1.5">
                    <span class="text-white text-xs font-bold tracking-wide">Rp. 95.000</span>
                </div>
            </div>

            <div class="bg-[#3A6532] rounded-2xl p-3 flex flex-col justify-center border border-gray-100 shadow-sm overflow-hidden group">
                <div class="w-full aspect-square rounded-xl bg-gray-200 mb-3 overflow-hidden">
                    <img src="{{ asset('assets/fotoSepatu/kiddos.jpg') }}" alt="Kiddos" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                </div>
                <div>
                    <h4 class="text-white font-bold text-base leading-tight mb-1 text-center">Kiddos</h4>
                    <p class="text-white/70 text-[10px] leading-tight mb-3 font-sans font-light text-center">untuk sepatu anak</p>
                </div>
                <div class="flex items-center justify-center bg-[#D08A4E] rounded-lg p-1.5">
                    <span class="text-white text-xs font-bold tracking-wide">Rp. 40.000</span>
                </div>
            </div>

            <div class="bg-[#3A6532] rounded-2xl p-3 flex flex-col justify-center border border-gray-100 shadow-sm overflow-hidden group">
                <div class="w-full aspect-square rounded-xl bg-gray-200 mb-3 overflow-hidden">
                    <img src="{{ asset('assets/fotoSepatu/bag small.jpg') }}" alt="Bag spa SMALL" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                </div>
                <div>
                    <h4 class="text-white font-bold text-base leading-tight mb-1 text-center">Bag spa SMALL</h4>
                    <p class="text-white/70 text-[10px] leading-tight mb-3 font-sans font-light text-center">treatment untuk tas kecil</p>
                </div>
                <div class="flex items-center justify-center bg-[#D08A4E] rounded-lg p-1.5">
                    <span class="text-white text-xs font-bold tracking-wide">Rp. 40.000</span>
                </div>
            </div>

            <div class="bg-[#3A6532] rounded-2xl p-3 flex flex-col justify-center border border-gray-100 shadow-sm overflow-hidden group">
                <div class="w-full aspect-square rounded-xl bg-gray-200 mb-3 overflow-hidden">
                    <img src="{{ asset('assets/fotoSepatu/bag large.webp') }}" alt="Bag spa LARGE" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                </div>
                <div>
                    <h4 class="text-white font-bold text-base leading-tight mb-1 text-center">Bag spa LARGE</h4>
                    <p class="text-white/70 text-[10px] leading-tight mb-3 font-sans font-light text-center">treatment untuk tas besar</p>
                </div>
                <div class="flex items-center justify-center bg-[#D08A4E] rounded-lg p-1.5">
                    <span class="text-white text-xs font-bold tracking-wide">Rp. 60.000</span>
                </div>
            </div>

            <div class="bg-[#3A6532] rounded-2xl p-3 flex flex-col justify-center border border-gray-100 shadow-sm overflow-hidden group">
                <div class="w-full aspect-square rounded-xl bg-gray-200 mb-3 overflow-hidden">
                    <img src="{{ asset('assets/fotoSepatu/cap.webp') }}" alt="Cap Cleaning" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                </div>
                <div>
                    <h4 class="text-white font-bold text-base leading-tight mb-1 text-center">Cap Cleaning</h4>
                    <p class="text-white/70 text-[10px] leading-tight mb-3 font-sans font-light text-center">Pembersihan mendalam untuk topi kesayangan</p>
                </div>
                <div class="flex items-center justify-center bg-[#D08A4E] rounded-lg p-1.5">
                    <span class="text-white text-xs font-bold tracking-wide">Rp. 35.000</span>
                </div>
            </div>

            <div class="bg-[#3A6532] rounded-2xl p-3 flex flex-col justify-center border border-gray-100 shadow-sm overflow-hidden group">
                <div class="w-full aspect-square rounded-xl bg-gray-200 mb-3 overflow-hidden">
                    <img src="{{ asset('assets/fotoSepatu/repaint.jpg') }}" alt="Repaint Sepatu" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                </div>
                <div>
                    <h4 class="text-white font-bold text-base leading-tight mb-1 text-center">Repaint Sepatu</h4>
                    <p class="text-white/70 text-[10px] leading-tight mb-3 font-sans font-light text-center">TERMASUK deepclean + cuci</p>
                </div>
                <div class="flex items-center justify-center bg-[#D08A4E] rounded-lg p-1.5">
                    <span class="text-white text-xs font-bold tracking-wide text-center">Rp. 175.000 - Rp. 200.000</span>
                </div>
            </div>

            <div class="bg-[#3A6532] rounded-2xl p-3 flex flex-col justify-center border border-gray-100 shadow-sm overflow-hidden group">
                <div class="w-full aspect-square rounded-xl bg-gray-200 mb-3 overflow-hidden">
                    <img src="{{ asset('assets/fotoSepatu/midsole.webp') }}" alt="Repaint Midsole" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                </div>
                <div>
                    <h4 class="text-white font-bold text-base leading-tight mb-1 text-center">Repaint Midsole</h4>
                    <p class="text-white/70 text-[10px] leading-tight mb-3 font-sans font-light text-center">TIDAK TERMASUK deepclean + cuci</p>
                </div>
                <div class="flex items-center justify-center bg-[#D08A4E] rounded-lg p-1.5">
                    <span class="text-white text-xs font-bold tracking-wide text-center">Rp. 125.000</span>
                </div>
            </div>

            <div class="bg-[#3A6532] rounded-2xl p-3 flex flex-col justify-center border border-gray-100 shadow-sm overflow-hidden group">
                <div class="w-full aspect-square rounded-xl bg-gray-200 mb-3 overflow-hidden">
                    <img src="{{ asset('assets/fotoSepatu/repaint bag.webp') }}" alt="Repaint Tas" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                </div>
                <div>
                    <h4 class="text-white font-bold text-base leading-tight mb-1 text-center">Repaint Tas</h4>
                    <p class="text-white/70 text-[10px] leading-tight mb-3 font-sans font-light text-center">Termasuk bag spa</p>
                </div>
                <div class="flex items-center justify-center bg-[#D08A4E] rounded-lg p-1.5">
                    <span class="text-white text-xs font-bold tracking-wide">Rp. 150.000 - Rp. 225.000</span>
                </div>
            </div>

            <div class="bg-[#3A6532] rounded-2xl p-3 flex flex-col justify-center border border-gray-100 shadow-sm overflow-hidden group">
                <div class="w-full aspect-square rounded-xl bg-gray-200 mb-3 overflow-hidden">
                    <img src="{{ asset('assets/fotoSepatu/fullreglue.jpg') }}" alt="Full Reglue" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                </div>
                <div>
                    <h4 class="text-white font-bold text-base leading-tight mb-1 text-center">Full Reglue</h4>
                    <p class="text-white/70 text-[10px] leading-tight mb-3 font-sans font-light text-center">TIDAK TERMASUK deepclean</p>
                </div>
                <div class="flex items-center justify-center bg-[#D08A4E] rounded-lg p-1.5">
                    <span class="text-white text-xs font-bold tracking-wide">Rp. 125.000</span>
                </div>
            </div>

        </div>

        <button type="button" class="px-5 py-2 bg-[#D08A4E] hover:bg-[#b5733b] text-white text-sm font-medium rounded-full transition duration-200 shadow-sm mt-4">
            Lihat daftar Menu
        </button>
        
    </div>
</section>

<section class="bg-[#D08A4E] py-16 px-4 flex w-full justify-center">
    <div class="flex flex-col items-center w-full max-w-7xl">
        
        <div class="mb-4">
            <img src="{{ asset('assets/logo_kuai.png') }}" alt="Kuai Logo" class="h-8 w-auto brightness-0 invert">
        </div>

        <h2 class="text-4xl md:text-5xl font-bold text-white mb-3 tracking-tight text-center">Alamat Headquarter</h2>
        
        <p class="text-center text-white/80 text-xs md:text-sm max-w-2xl leading-relaxed mb-10 font-sans font-light">
            Kami memberikan berbagai macam layanan untuk perawatan barang kesayangan anda yang akan dikerjakan oleh tim kami yang sudah berpengalaman dan professional.
        </p>

        <div class="w-full bg-white rounded-3xl p-6 md:p-8 shadow-xl flex flex-col gap-6">
            
            <div class="flex flex-col md:flex-row items-center gap-6 border border-gray-200 rounded-2xl p-4 md:p-6">
                <div class="w-full md:w-1/2 aspect-[16/9] md:h-44 rounded-xl overflow-hidden bg-gray-100 shrink-0">
                    <img src="{{ asset('assets/fotoSepatu/Screenshot 2026-06-10 211157 copy.png') }}" alt="Cibiru Hilir" class="w-full h-full object-cover">
                </div>
                <div class="w-full md:w-1/2 flex flex-col justify-between h-full py-2">
                    <div class="mb-6 md:mb-0">
                        <h3 class="text-xl md:text-2xl font-bold text-gray-800 leading-tight">Bumi Panyileukan</h3>
                        <p class="text-gray-600 text-lg md:text-xl font-sans font-light">Terusan, Komp. Bumi Panyileukan Jl. Teratai VIII No.10, RT.04/RW.12, Cipadung Kidul, Kec. Panyileukan, Kota Bandung, Jawa Barat 40614</p>
                    </div>
                    <div class="flex gap-4 mt-4">
                        <a href="#" class="px-6 py-2 bg-[#3A6532] hover:bg-[#2d4f26] text-white font-medium text-sm rounded-full transition duration-200 text-center shadow-sm min-w-[120px]">
                            Lokasi Kami
                        </a>
                        <a href="#" class="px-6 py-2 bg-[#D08A4E] hover:bg-[#b5733b] text-white font-medium text-sm rounded-full transition duration-200 text-center shadow-sm min-w-[120px]">
                            Chat
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
 <section class="navbar">
    <nav class="relative bg-white after:pointer-events-none after:absolute after:inset-x-0 after:bottom-0 after:h-px after:bg-gray-200 shadow-sm">
      <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-center">
          <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
            <button type="button" command="--toggle" commandfor="mobile-menu"
              class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-700 hover:bg-gray-100 focus:outline-2 focus:-outline-offset-1 focus:outline-indigo-500">
              <span class="absolute -inset-0.5"></span>
              <span class="sr-only">Open main menu</span>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon"
                aria-hidden="true" class="size-6 in-aria-expanded:hidden">
                <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon"
                aria-hidden="true" class="size-6 not-in-aria-expanded:hidden">
                <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </button>
          </div>
          <div class="flex flex-1 items-center justify-start">
            <div class="flex shrink-0 items-center">
              <img src="{{ asset('assets/logo_kuai.png') }}" alt="KUAI Logo">
            </div>
          </div>
          <div class="flex space-x-4 text-center justify-end">
            <a href="#"
              class="rounded-md px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-100">Product</a>
            <a href="#"
              class="rounded-md px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-100">Journal</a>
            <a href="#"
              class="rounded-md px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-100">About</a>
            <a href="#"
              class="rounded-md px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-100">Career</a>
            <a href="#"
              class="rounded-md px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-100">Get Started</a>
          </div>
        </div>
        
        <el-disclosure id="mobile-menu" hidden class="block sm:hidden">
          <div class="space-y-1 px-2 pt-2 pb-3 bg-white">
            <a href="#" aria-current="page"
              class="block rounded-md bg-gray-100 px-3 py-2 text-base font-medium text-gray-900">Dashboard</a>
            <a href="#"
              class="rounded-md px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-100">Journal</a>
            <a href="#"
              class="rounded-md px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-100">About</a>
            <a href="#"
              class="rounded-md px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-100">Career</a>
            <a href="#"
              class="rounded-md px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-100">Get Started</a>
          </div>
        </el-disclosure>
    </nav>
  </section>

</body>

</html>