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
    <x-navbar/>
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
        <a href="{{ route('product') }}"
          class="w-52 inline-flex items-center justify-center rounded-4xl bg-[#D08A4E] text-white hover:bg-[#b5733b] focus:ring-4 focus:ring-[#D08A4E]/40 shadow-xs font-medium text-base px-5 py-3 focus:outline-none transition duration-200">
          Lihat Layanan
        </a>
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
        <a href="{{ route('product') }}" class="px-5 py-2 inline-flex bg-[#D08A4E] hover:bg-[#b5733b] text-white text-sm font-medium rounded-full transition duration-200 mb-4 shadow-sm">
            Lihat daftar Menu
        </a>
        
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

        <a href="{{ route('product') }}" class="px-5 py-2 inline-flex bg-[#D08A4E] hover:bg-[#b5733b] text-white text-sm font-medium rounded-full transition duration-200 shadow-sm mt-4">
            Lihat daftar Menu
        </a>
        
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
<footer class="bg-[#3A6532] text-white">
    <div class="w-full py-16">

        <div class="flex justify-between items-start px-4">

            <!-- Kiri -->
            <div>
                <img
                    src="{{ asset('assets/logo_kuai.png') }}"
                    alt="Kuai Logo"
                    class="h-12 mb-6">

                <p class="text-white/80 leading-relaxed max-w-sm">
                    Layanan cuci sepatu terbaik se-Bandung Raya dengan hasil
                    bersih maksimal dan aman untuk semua jenis sepatu.
                </p>

                <div class="flex gap-4 mt-6">
                    <a href="https://www.instagram.com/kuaiproject/" class="w-10 h-10 rounded-full border border-white/30 flex items-center justify-center">
                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M7.75 2h8.5A5.76 5.76 0 0 1 22 7.75v8.5A5.76 5.76 0 0 1 16.25 22h-8.5A5.76 5.76 0 0 1 2 16.25v-8.5A5.76 5.76 0 0 1 7.75 2Zm0 2A3.75 3.75 0 0 0 4 7.75v8.5A3.75 3.75 0 0 0 7.75 20h8.5A3.75 3.75 0 0 0 20 16.25v-8.5A3.75 3.75 0 0 0 16.25 4h-8.5ZM12 7a5 5 0 1 1 0 10 5 5 0 0 1 0-10Zm0 2a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm5.25-2.25a1.25 1.25 0 1 1 0 2.5 1.25 1.25 0 0 1 0-2.5Z"/>
                        </svg>
                    </a>
                    <a href="https://linktr.ee/KuaiProject?utm_source=ig&utm_medium=social&utm_content=link_in_bio" class="w-10 h-10 rounded-full border border-white/30 flex items-center justify-center">
                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M7.95 3.15 12 7.2l4.05-4.05 2.1 2.1L14.1 9.3h5.7v3h-5.7l4.05 4.05-2.1 2.1L12 14.4l-4.05 4.05-2.1-2.1L9.9 12.3H4.2v-3h5.7L5.85 5.25l2.1-2.1ZM10.5 15.6h3v5.25h-3V15.6Z"/>
                        </svg>
                    </a>
                    <a href="https://api.whatsapp.com/send/?phone=6282243439506&text&type=phone_number&app_absent=0" class="w-10 h-10 rounded-full border border-white/30 flex items-center justify-center">
                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.52 3.48A11.84 11.84 0 0 0 12.04 0C5.48 0 .15 5.33.15 11.89c0 2.1.55 4.15 1.6 5.95L0 24l6.32-1.66a11.84 11.84 0 0 0 5.72 1.46h.01c6.56 0 11.89-5.33 11.89-11.89 0-3.18-1.24-6.16-3.42-8.43ZM12.05 21.8h-.01a9.86 9.86 0 0 1-5.03-1.38l-.36-.21-3.75.98 1-3.65-.24-.38a9.86 9.86 0 0 1-1.51-5.27c0-5.46 4.44-9.9 9.9-9.9a9.84 9.84 0 0 1 7 2.9 9.82 9.82 0 0 1 2.9 7c0 5.46-4.44 9.91-9.9 9.91Zm5.43-7.42c-.3-.15-1.76-.87-2.03-.97-.27-.1-.47-.15-.67.15-.2.3-.77.97-.94 1.17-.17.2-.35.22-.65.07-.3-.15-1.26-.46-2.4-1.47-.89-.79-1.49-1.77-1.66-2.07-.17-.3-.02-.46.13-.61.13-.13.3-.35.45-.52.15-.17.2-.3.3-.5.1-.2.05-.37-.02-.52-.07-.15-.67-1.62-.92-2.22-.24-.58-.49-.5-.67-.51h-.57c-.2 0-.52.07-.79.37-.27.3-1.04 1.02-1.04 2.49s1.07 2.89 1.22 3.09c.15.2 2.1 3.2 5.08 4.49.71.31 1.26.49 1.69.63.71.23 1.36.2 1.87.12.57-.09 1.76-.72 2.01-1.42.25-.7.25-1.3.17-1.42-.07-.13-.27-.2-.57-.35Z"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Kanan -->
            <div class="text-right">
                <h3 class="font-bold text-lg mb-5">
                    Kontak
                </h3>

                <ul class="space-y-3 text-white/80">
                    <li>Bandung, Jawa Barat</li>
                    <li>+62 812 3456 7890</li>
                    <li>hello@kuai.id</li>
                </ul>
            </div>

        </div>

        <div class="border-t border-white/20 mt-12 pt-6 px-4">
            <div class="flex justify-between items-center">

                <p class="text-white/70 text-sm">
                    © 2026 KUAI Sneaker Laundry. All rights reserved.
                </p>

                <div class="flex gap-6 text-sm text-white/70">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Service</a>
                </div>

            </div>
        </div>

    </div>
</footer>

</body>

</html>