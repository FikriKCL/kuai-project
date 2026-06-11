    <section class="navbar">
        <nav class="relative bg-[#3A6532] after:pointer-events-none after:absolute after:inset-x-0 after:bottom-0 after:h-px after:bg-white/10">
            <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
                <div class="relative flex h-16 items-center justify-center">
                    <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                        <button type="button" id="mobileMenuBtn"
                            class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-white/5 hover:text-white focus:outline-2 focus:-outline-offset-1 focus:outline-indigo-500">
                            <span class="absolute -inset-0.5"></span>
                            <span class="sr-only">Open main menu</span>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" class="size-6" id="menuIconOpen">
                                <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" class="size-6 hidden" id="menuIconClose">
                                <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                    <div class="flex flex-1 items-center justify-start">
                        <div class="flex shrink-0 items-center">
                            <img src="{{ asset('assets/logo_kuai.png') }}" alt="KUAI Logo">
                        </div>
                    </div>
                    <div class="hidden sm:flex space-x-4 text-center justify-end">
                        <a href="{{ url('/') }}" class="rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-white/5 hover:text-white">Dashboard</a>
                        <a href="{{ url('/product') }}" class="rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-white/5 hover:text-white">Layanan & Harga</a>
                    </div>
                </div>
                {{-- Mobile menu --}}
                <div id="mobileMenu" class="hidden sm:hidden">
                    <div class="space-y-1 px-2 pt-2 pb-3">
                        <a href="{{ url('/') }}" class="block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-white/5">Dashboard</a>
                        <a href="#productSection" class="block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-white/5">Layanan & Harga</a>
                    </div>
                </div>
            </div>
        </nav>
    </section>