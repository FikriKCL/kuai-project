<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Kuai — Shoe Care Price List</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* Modal & Toast — minimal custom CSS needed beyond Tailwind */
        .modal-overlay {
            display: none;
            position: fixed; inset: 0;
            background: rgba(0,0,0,.55);
            z-index: 1000;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .modal-overlay.open { display: flex; }
        .toast-notification {
            position: fixed; bottom: 24px; right: 24px;
            background: #3A6532; color: white;
            padding: 12px 20px; border-radius: 12px;
            font-size: 13px; font-weight: 500;
            transform: translateY(80px); opacity: 0;
            transition: all .3s ease;
            z-index: 9999;
            box-shadow: 0 8px 24px rgba(0,0,0,.2);
        }
        .toast-notification.show { transform: translateY(0); opacity: 1; }
    </style>
</head>

<body class="bg-[#3A6532]">

    {{-- ============ NAVBAR (sama dengan dashboard) ============ --}}
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
                        <a href="#productSection" class="rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-white/5 hover:text-white">Layanan & Harga</a>
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

    {{-- ============ HERO SECTION ============ --}}
    <section class="bg-[#3A6532] max-h-dvh py-12">
        <div class="py-8 px-4 mx-auto max-w-screen-2xl text-center lg:py-16">
            <p class="mb-2 text-xs tracking-widest uppercase text-white/50">— Since 2020 —</p>
            <h1 class="mb-6 text-4xl font-bold tracking-tighter text-white md:text-5xl lg:text-6xl">Price List Kami</h1>
            <p class="mb-8 text-base font-normal md:text-xl text-white/80">Menjaga dan merawat sepatu anda dengan
                ketulusan hati terdalam. <br>Dijamin bersih dan menjaga keawetan sepatumu</p>
            <div class="flex flex-col gap-4 space-y-4 sm:flex-row sm:justify-center sm:space-y-0 md:space-x-4">
                <a href="#productSection"
                    class="w-52 inline-flex items-center justify-center rounded-4xl bg-[#D08A4E] text-white hover:bg-[#b5733b] focus:ring-4 focus:ring-[#D08A4E]/40 shadow-xs font-medium text-base px-5 py-3 focus:outline-none transition duration-200">
                    Layanan
                </a>
                <a href="#cartSection"
                    class="w-52 inline-flex items-center justify-center rounded-4xl bg-white text-[#3A6532] hover:bg-gray-100 focus:ring-4 focus:ring-[#D08A4E]/40 shadow-xs font-medium text-base px-5 py-3 focus:outline-none transition duration-200">
                    Pesanan Saya
                </a>
            </div>
        </div>
    </section>

    {{-- ============ PRODUCT GRID ============ --}}
    <section id="productSection" class="flex w-full justify-center bg-white py-16 px-4">
        <div class="flex flex-col items-center w-full max-w-7xl">

            <h2 class="text-3xl font-bold text-gray-800 mb-3 tracking-tight">Layanan Kami</h2>
            <p class="text-center text-gray-500 text-sm max-w-xl leading-relaxed mb-8 font-light">
                Kami memberikan berbagai macam layanan untuk perawatan barang kesayangan anda yang akan dikerjakan oleh tim kami yang sudah berpengalaman dan professional.
            </p>

            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-4 w-full mb-8" id="productGrid">

                @forelse($products as $product)
                <div class="bg-[#3A6532] rounded-2xl p-3 flex flex-col justify-between border border-gray-100 shadow-sm overflow-hidden group cursor-pointer transition-transform duration-200 hover:-translate-y-1 hover:shadow-lg"
                     onclick="addToCart({{ $product->id }}, '{{ addslashes($product->name) }}', {{ $product->price }}, '{{ $product->image ? Storage::url($product->image) : '' }}', '{{ addslashes($product->description) }}')">
                    <div class="w-full aspect-square rounded-xl bg-gray-200 mb-3 overflow-hidden">
                        @if($product->image)
                        <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" loading="lazy">
                        @else
                        <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-green-100 to-green-200">
                            <svg class="w-10 h-10 text-green-400 opacity-50" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                        </div>
                        @endif
                    </div>
                    <div>
                        <h4 class="text-white font-bold text-base leading-tight mb-1 text-center">{{ $product->name }}</h4>
                        <p class="text-white/70 text-[10px] leading-tight mb-3 font-light text-center">{{ Str::limit($product->description, 50) }}</p>
                    </div>
                    <div class="flex items-center justify-between gap-2">
                        <div class="flex-1 flex items-center justify-center bg-[#D08A4E] rounded-lg p-1.5">
                            <span class="text-white text-xs font-bold tracking-wide">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                        </div>
                        <button class="w-7 h-7 rounded-full bg-white text-[#3A6532] flex items-center justify-center text-lg font-bold shrink-0 hover:scale-110 hover:bg-gray-100 transition-transform duration-150 active:scale-95"
                                onclick="event.stopPropagation(); addToCart({{ $product->id }}, '{{ addslashes($product->name) }}', {{ $product->price }}, '{{ $product->image ? Storage::url($product->image) : '' }}', '{{ addslashes($product->description) }}')"
                                aria-label="Tambah {{ $product->name }}">+</button>
                    </div>
                </div>
                @empty
                <div class="col-span-full text-center text-gray-400 py-16 text-sm">
                    Produk belum tersedia. Admin belum menambahkan produk.
                </div>
                @endforelse

            </div>
        </div>
    </section>

    {{-- ============ CART SECTION ============ --}}
    <section id="cartSection" class="bg-[#3A6532] py-8 px-4">
        <div class="max-w-7xl mx-auto">
            <div class="bg-white/10 border border-white/15 rounded-2xl p-5 md:p-6">
                <h3 class="text-white font-bold text-lg mb-4">Pesanan Anda:</h3>
                <div class="flex flex-wrap gap-4 items-start" id="cartItems">
                    <div class="text-white/40 text-sm italic py-4" id="cartEmpty">Belum ada item. Klik + pada produk untuk menambahkan.</div>
                    {{-- Cart items will be injected here --}}
                    <div class="flex flex-col gap-3 ml-auto min-w-[140px]" id="cartActions" style="display:none;">
                        <button class="bg-[#D08A4E] hover:bg-[#b5733b] text-white border-none rounded-xl py-3.5 px-4 text-sm font-bold cursor-pointer flex items-center justify-center gap-2 transition duration-200 uppercase tracking-wider"
                                onclick="openModal()" id="checkoutBtn">
                            <svg width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                            CHECKOUT
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============ FOOTER — ALAMAT HEADQUARTER (sama dengan dashboard) ============ --}}
    <section class="bg-[#D08A4E] py-16 px-4 flex w-full justify-center">
        <div class="flex flex-col items-center w-full max-w-7xl">

            <div class="mb-4">
                <img src="{{ asset('assets/logo_kuai.png') }}" alt="Kuai Logo" class="h-8 w-auto brightness-0 invert">
            </div>

            <h2 class="text-4xl md:text-5xl font-bold text-white mb-3 tracking-tight text-center">Alamat Headquarter</h2>

            <p class="text-center text-white/80 text-xs md:text-sm max-w-2xl leading-relaxed mb-10 font-light">
                Kami memberikan berbagai macam layanan untuk perawatan barang kesayangan anda yang akan dikerjakan oleh tim kami yang sudah berpengalaman dan professional.
            </p>

            <div class="w-full bg-white rounded-3xl p-6 md:p-8 shadow-xl flex flex-col gap-6">
                <div class="flex flex-col md:flex-row items-center gap-6 border border-gray-200 rounded-2xl p-4 md:p-6">
                    <div class="w-full md:w-1/2 aspect-[16/9] md:h-44 rounded-xl overflow-hidden bg-gray-100 shrink-0">
                        <img src="{{ asset('assets/fotoSepatu/Screenshot 2026-06-10 211157 copy.png') }}" alt="Bumi Panyileukan" class="w-full h-full object-cover">
                    </div>
                    <div class="w-full md:w-1/2 flex flex-col justify-between h-full py-2">
                        <div class="mb-6 md:mb-0">
                            <h3 class="text-xl md:text-2xl font-bold text-gray-800 leading-tight">Bumi Panyileukan</h3>
                            <p class="text-gray-600 text-lg md:text-xl font-light">Terusan, Komp. Bumi Panyileukan Jl. Teratai VIII No.10, RT.04/RW.12, Cipadung Kidul, Kec. Panyileukan, Kota Bandung, Jawa Barat 40614</p>
                        </div>
                        <div class="flex gap-4 mt-4">
                            <a href="https://maps.google.com" target="_blank" class="px-6 py-2 bg-[#3A6532] hover:bg-[#2d5229] text-white font-medium text-sm rounded-full transition duration-200 text-center shadow-sm min-w-[120px]">
                                Lokasi Kami
                            </a>
                            <a href="https://wa.me/6281234567890" target="_blank" class="px-6 py-2 bg-[#D08A4E] hover:bg-[#b5733b] text-white font-medium text-sm rounded-full transition duration-200 text-center shadow-sm min-w-[120px]">
                                Chat
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============ BOTTOM NAVBAR / FOOTER (sama dengan dashboard) ============ --}}
    <section>
        <nav class="relative bg-white after:pointer-events-none after:absolute after:inset-x-0 after:bottom-0 after:h-px after:bg-gray-200 shadow-sm">
            <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
                <div class="relative flex h-16 items-center justify-center">
                    <div class="flex flex-1 items-center justify-start">
                        <div class="flex shrink-0 items-center">
                            <img src="{{ asset('assets/logo_kuai.png') }}" alt="KUAI Logo">
                        </div>
                    </div>
                    <div class="hidden sm:flex space-x-4 text-center justify-end">
                        <a href="{{ url('/') }}" class="rounded-md px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-100">Dashboard</a>
                        <a href="#productSection" class="rounded-md px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-100">Layanan & Harga</a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="bg-[#3A6532] text-center py-4">
            <div class="flex justify-between items-center max-w-7xl mx-auto px-4 text-xs text-white/40 flex-wrap gap-2">
                <span>©Kuai {{ date('Y') }}</span>
                <div class="flex gap-4">
                    <a href="{{ url('/') }}" class="text-white/40 hover:text-white/70 transition-colors">Dashboard</a>
                    <a href="#productSection" class="text-white/40 hover:text-white/70 transition-colors">Layanan & Harga</a>
                </div>
            </div>
        </div>
    </section>

    {{-- ============ CHECKOUT MODAL ============ --}}
    <div class="modal-overlay" id="checkoutModal">
        <div class="bg-white rounded-3xl w-full max-w-md max-h-[90vh] overflow-y-auto p-7 shadow-2xl" id="modalBox">
            <div id="formState">
                <div class="flex justify-between items-start mb-5">
                    <div>
                        <div class="text-2xl font-bold text-[#3A6532]">Checkout</div>
                        <div class="text-sm text-gray-400">Isi data diri Anda untuk melanjutkan pesanan</div>
                    </div>
                    <button class="text-gray-400 hover:text-gray-600 text-2xl leading-none transition-colors" onclick="closeModal()">×</button>
                </div>

                {{-- Order Summary --}}
                <div class="bg-green-50 rounded-xl p-4 mb-5" id="modalSummary"></div>

                {{-- Form --}}
                <div class="mb-3.5">
                    <label class="block text-xs font-semibold text-gray-500 mb-1.5 uppercase tracking-wider">Nama Lengkap</label>
                    <input type="text" id="custName" placeholder="Masukkan nama lengkap"
                        class="w-full border-2 border-gray-200 rounded-xl px-4 py-2.5 text-sm outline-none transition-colors focus:border-[#3A6532]">
                </div>
                <div class="mb-3.5">
                    <label class="block text-xs font-semibold text-gray-500 mb-1.5 uppercase tracking-wider">Nomor WhatsApp</label>
                    <input type="tel" id="custPhone" placeholder="Contoh: 081234567890"
                        class="w-full border-2 border-gray-200 rounded-xl px-4 py-2.5 text-sm outline-none transition-colors focus:border-[#3A6532]">
                </div>
                <div class="mb-3.5">
                    <label class="block text-xs font-semibold text-gray-500 mb-1.5 uppercase tracking-wider">Alamat Lengkap</label>
                    <textarea id="custAddress" rows="3" placeholder="Jl. Nama Jalan No. X, Kota..."
                        class="w-full border-2 border-gray-200 rounded-xl px-4 py-2.5 text-sm outline-none transition-colors focus:border-[#3A6532] resize-none"></textarea>
                </div>
                <div class="mb-4">
                    <label class="block text-xs font-semibold text-gray-500 mb-1.5 uppercase tracking-wider">Catatan (opsional)</label>
                    <input type="text" id="custNotes" placeholder="Instruksi khusus, dll."
                        class="w-full border-2 border-gray-200 rounded-xl px-4 py-2.5 text-sm outline-none transition-colors focus:border-[#3A6532]">
                </div>
                <div id="formError" class="hidden bg-red-50 border border-red-200 text-red-600 px-4 py-3 rounded-xl text-sm mb-4"></div>
                <button class="w-full bg-[#3A6532] hover:bg-[#2d5229] text-white rounded-xl py-3.5 text-sm font-bold transition-all tracking-wider" id="submitBtn" onclick="submitOrder()">Kirim Pesanan</button>
            </div>

            <div class="text-center py-5" id="successState" style="display:none;">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-[#3A6532]" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                </div>
                <div class="text-2xl font-bold text-[#3A6532] mb-2">Pesanan Terkirim!</div>
                <div class="text-sm text-gray-500 leading-relaxed mb-5">Terima kasih! Pesanan Anda telah kami terima. Tim kami akan menghubungi Anda melalui WhatsApp secepatnya.</div>
                <button onclick="closeModal(true)" class="bg-[#3A6532] hover:bg-[#2d5229] text-white rounded-xl py-3 px-8 text-sm font-bold transition-all">Tutup</button>
            </div>
        </div>
    </div>

    {{-- Toast --}}
    <div class="toast-notification" id="toast"></div>

    <script>
    // ========== Mobile Menu Toggle ==========
    document.getElementById('mobileMenuBtn').addEventListener('click', function() {
        const menu = document.getElementById('mobileMenu');
        const iconOpen = document.getElementById('menuIconOpen');
        const iconClose = document.getElementById('menuIconClose');
        menu.classList.toggle('hidden');
        iconOpen.classList.toggle('hidden');
        iconClose.classList.toggle('hidden');
    });

    // ========== Cart State ==========
    let cart = [];

    function addToCart(id, name, price, image, desc) {
        const existing = cart.find(i => i.id === id);
        if (existing) {
            existing.qty++;
            showToast(name + ' ditambahkan (+1)');
        } else {
            cart.push({ id, name, price, image, qty: 1 });
            showToast(name + ' ditambahkan ke pesanan!');
        }
        renderCart();
    }

    function removeFromCart(id) {
        cart = cart.filter(i => i.id !== id);
        renderCart();
    }

    function renderCart() {
        const container = document.getElementById('cartItems');
        const empty = document.getElementById('cartEmpty');
        const actions = document.getElementById('cartActions');

        // Remove old cart item elements
        container.querySelectorAll('.cart-item').forEach(el => el.remove());

        if (cart.length === 0) {
            empty.style.display = '';
            actions.style.display = 'none';
            return;
        }

        empty.style.display = 'none';
        actions.style.display = 'flex';

        cart.forEach(item => {
            const el = document.createElement('div');
            el.className = 'cart-item relative bg-white rounded-xl overflow-hidden w-28 shrink-0 cursor-pointer shadow-sm';
            el.innerHTML = `
                <button class="absolute top-1.5 right-1.5 w-5 h-5 rounded-full bg-red-500 text-white text-xs flex items-center justify-center shadow-md hover:scale-110 transition-transform" onclick="removeFromCart(${item.id})">×</button>
                ${item.image
                    ? `<img src="${item.image}" alt="${item.name}" class="w-full aspect-square object-cover" loading="lazy">`
                    : `<div class="w-full aspect-square bg-gradient-to-br from-green-100 to-green-200 flex items-center justify-center"><svg width="28" height="28" fill="none" viewBox="0 0 24 24" stroke="#6aaa6a" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg></div>`
                }
                <div class="p-2">
                    <div class="text-[11px] font-semibold text-gray-800 leading-tight mb-1">${item.name}${item.qty > 1 ? ` ×${item.qty}` : ''}</div>
                    <div class="text-[11px] font-bold text-[#D08A4E]">Rp ${formatNum(item.price * item.qty)}</div>
                </div>
            `;
            container.insertBefore(el, actions);
        });
    }

    function formatNum(n) {
        return n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.');
    }

    // ========== Modal ==========
    function openModal() {
        if (cart.length === 0) { showToast('Tambahkan produk terlebih dahulu!'); return; }
        renderModalSummary();
        document.getElementById('checkoutModal').classList.add('open');
        document.getElementById('formState').style.display = '';
        document.getElementById('successState').style.display = 'none';
        document.getElementById('formError').style.display = 'none';
        document.getElementById('formError').classList.add('hidden');
    }

    function closeModal(clearCart = false) {
        document.getElementById('checkoutModal').classList.remove('open');
        if (clearCart) {
            cart = [];
            renderCart();
            document.getElementById('custName').value = '';
            document.getElementById('custPhone').value = '';
            document.getElementById('custAddress').value = '';
            document.getElementById('custNotes').value = '';
        }
    }

    function renderModalSummary() {
        const total = cart.reduce((s, i) => s + i.price * i.qty, 0);
        let html = '';
        cart.forEach(item => {
            html += `<div class="flex justify-between text-sm text-gray-600 mb-1.5"><span>${item.name} ×${item.qty}</span><span>Rp ${formatNum(item.price * item.qty)}</span></div>`;
        });
        html += `<div class="flex justify-between text-base font-bold text-[#3A6532] border-t-2 border-gray-200 pt-3 mt-2"><span>Total</span><span>Rp ${formatNum(total)}</span></div>`;
        document.getElementById('modalSummary').innerHTML = html;
    }

    async function submitOrder() {
        const name    = document.getElementById('custName').value.trim();
        const phone   = document.getElementById('custPhone').value.trim();
        const address = document.getElementById('custAddress').value.trim();
        const notes   = document.getElementById('custNotes').value.trim();
        const errEl   = document.getElementById('formError');
        const submitBtn = document.getElementById('submitBtn');

        errEl.classList.add('hidden');

        if (!name)    { showFormError('Nama lengkap wajib diisi.'); return; }
        if (!phone)   { showFormError('Nomor WhatsApp wajib diisi.'); return; }
        if (!address) { showFormError('Alamat wajib diisi.'); return; }

        submitBtn.disabled = true;
        submitBtn.textContent = 'Memproses...';

        const items = cart.map(i => ({ id: i.id, qty: i.qty }));

        try {
            const res = await fetch('{{ route("checkout") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    'Accept': 'application/json',
                },
                body: JSON.stringify({
                    customer_name:    name,
                    customer_phone:   phone,
                    customer_address: address,
                    notes:            notes,
                    items:            items,
                })
            });

            const data = await res.json();

            if (data.success) {
                document.getElementById('formState').style.display = 'none';
                document.getElementById('successState').style.display = '';
            } else {
                showFormError(data.message || 'Terjadi kesalahan, coba lagi.');
            }
        } catch (e) {
            showFormError('Gagal menghubungi server. Periksa koneksi internet.');
        }

        submitBtn.disabled = false;
        submitBtn.textContent = 'Kirim Pesanan';
    }

    function showFormError(msg) {
        const el = document.getElementById('formError');
        el.textContent = msg;
        el.classList.remove('hidden');
    }

    // ========== Toast ==========
    function showToast(msg) {
        const t = document.getElementById('toast');
        t.textContent = msg;
        t.classList.add('show');
        clearTimeout(window._toastTimer);
        window._toastTimer = setTimeout(() => t.classList.remove('show'), 2500);
    }

    // Close modal on backdrop click
    document.getElementById('checkoutModal').addEventListener('click', function(e) {
        if (e.target === this) closeModal();
    });
    </script>
</body>

</html>
