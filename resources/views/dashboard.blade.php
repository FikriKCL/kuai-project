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
<nav class="relative bg-[#3A6532] after:pointer-events-none after:absolute after:inset-x-0 after:bottom-0 after:h-px after:bg-white/10">
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="relative flex h-16 items-center justify-center">
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <!-- Mobile menu button-->
        <button type="button" command="--toggle" commandfor="mobile-menu" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-white/5 hover:text-white focus:outline-2 focus:-outline-offset-1 focus:outline-indigo-500">
          <span class="absolute -inset-0.5"></span>
          <span class="sr-only">Open main menu</span>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 in-aria-expanded:hidden">
            <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 not-in-aria-expanded:hidden">
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
            <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-white/5 hover:text-white">Product</a>
            <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-white/5 hover:text-white">Journal</a>
            <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-white/5 hover:text-white">About</a>
            <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-white/5 hover:text-white">Career</a>
            <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-white/5 hover:text-white">Get Started</a>
          </div>
  </div>
  <el-disclosure id="mobile-menu" hidden class="block sm:hidden">
    <div class="space-y-1 px-2 pt-2 pb-3">
      <!-- Current: "bg-gray-950/50 text-white", Default: "text-gray-300 hover:bg-white/5 hover:text-white" -->
      <a href="#" aria-current="page" class="block rounded-md bg-gray-950/50 px-3 py-2 text-base font-medium text-white">Dashboard</a>
            <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-white/5 hover:text-white">Journal</a>
            <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-white/5 hover:text-white">About</a>
            <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-white/5 hover:text-white">Career</a>
            <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-white/5 hover:text-white">Get Started</a>  
    </div>
  </el-disclosure>
</nav>
</section>


<section class="bg-[#3A6532] max-h-dvh py-12">
    <div class="py-8 px-4 mx-auto max-w-screen-2xl text-center lg:py-16">
        <h1 class="mb-6 text-4xl font-bold tracking-tighter text-heading text-white md:text-5xl lg:text-6xl">Cuci Sepatu Terbaik Se-</h1>
        <h1 class="mb-6 text-4xl font-bold tracking-tighter text-heading text-white md:text-5xl lg:text-6xl">Bandung Raya</h1>
        <p class="mb-8 text-base font-normal text-body md:text-xl text-white">Menjaga dan merawat sepatu anda dengan ketulusan hati terdalam. <br>Dijamin bersih dan menjaga keawetan sepatumu</p>
        <div class="flex flex-col gap-4 space-y-4 sm:flex-row sm:justify-center sm:space-y-0 md:space-x-4">
            <button type="button" class="w-52 inline-flex items-center justify-center rounded-4xl bg-[#D08A4E] text-white bg-brand hover:bg-brand-strong box-border border border-transparent focus:ring-4 focus:ring-brand-medium shadow-xs font-medium rounded-base text-base px-5 py-3 focus:outline-none">
                Layanan
            </button>
            <button type="button" class="w-52 inline-flex items-center justify-center rounded-4xl bg-white text-[#3A6532] bg-brand hover:bg-brand-strong box-border border border-transparent focus:ring-4 focus:ring-[#D08A4E] focus:ring-brand-medium shadow-xs font-medium rounded-base text-base px-5 py-3 focus:outline-none">
                Merchandise
            </button>
        </div>
    </div>
</section>
<section class="flex w-full justify-center">
        <div class="flex flex-row gap-6 w-full max-w-7xl bg-white rounded-xl self-center p-6">
            <div class="flex-1">
                <p class="font-sans font-extralight">Barang Anda Adalah Tanggung Jawab Kami</p>
            </div>
            <div class="flex-1">
                <p class="font-sans font-extralight text-left place-self-end text-lg">jasa perawatan dan cuci sepatu premium pertama di Indonesia <br> dengan layanan yang dirancang untuk memberikan kemudahan, <br> kenyamanan, dan hasil yang maksimal.</p>
            </div>
        </div>
    </section>
</body>
</html>
