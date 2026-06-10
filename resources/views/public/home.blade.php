<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Kuai — Shoe Care Price List</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --green-dark:  #1a3d1e;
            --green-mid:   #2d6b32;
            --green-light: #3d8b43;
            --gold:        #c49328;
            --gold-light:  #d4a843;
        }
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: 'DM Sans', sans-serif;
            background: #f8f8f5;
            color: #1a1a1a;
        }
        /* Top Banner */
        .top-banner {
            background: #1a3d1e;
            color: #fff;
            text-align: center;
            font-size: 13px;
            padding: 8px 16px;
            letter-spacing: 0.02em;
        }
        .top-banner a { color: var(--gold-light); font-weight: 600; margin-left: 6px; text-decoration: none; }
        .top-banner a:hover { text-decoration: underline; }

        /* Navbar */
        .navbar {
            background: white;
            border-bottom: 1px solid #e8e8e8;
            padding: 0 24px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 60px;
            position: sticky;
            top: 0;
            z-index: 100;
        }
        .logo { font-family: 'Playfair Display', serif; font-size: 22px; font-weight: 700; color: #1a3d1e; letter-spacing: -0.02em; }
        .nav-links { display: flex; gap: 24px; list-style: none; }
        .nav-links a { font-size: 13px; color: #444; text-decoration: none; font-weight: 500; transition: color .2s; }
        .nav-links a:hover { color: #1a3d1e; }
        .nav-btn {
            background: #1a3d1e; color: white;
            padding: 8px 18px; border-radius: 8px;
            font-size: 13px; font-weight: 600; text-decoration: none;
            transition: background .2s;
        }
        .nav-btn:hover { background: #2d6b32; }

        /* Hero Section */
        .hero {
            background: #1a3d1e;
            color: white;
            text-align: center;
            padding: 40px 20px 32px;
        }
        .hero-subtitle { font-size: 12px; letter-spacing: 0.12em; text-transform: uppercase; color: rgba(255,255,255,.5); margin-bottom: 8px; }
        .hero h1 { font-family: 'Playfair Display', serif; font-size: clamp(28px,5vw,42px); font-weight: 700; margin-bottom: 10px; }
        .hero p { font-size: 14px; color: rgba(255,255,255,.65); max-width: 420px; margin: 0 auto; line-height: 1.6; }

        /* Product Grid Section */
        .products-section {
            background: #1a3d1e;
            padding: 20px 20px 0;
        }
        .products-grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 12px;
            max-width: 1100px;
            margin: 0 auto;
        }
        @media(max-width:900px) { .products-grid { grid-template-columns: repeat(3,1fr); } }
        @media(max-width:600px) { .products-grid { grid-template-columns: repeat(2,1fr); } }

        /* Product Card */
        .product-card {
            background: white;
            border-radius: 14px;
            overflow: hidden;
            cursor: pointer;
            transition: transform .2s, box-shadow .2s;
        }
        .product-card:hover { transform: translateY(-3px); box-shadow: 0 10px 28px rgba(0,0,0,.18); }
        .product-card img, .product-card .img-placeholder {
            width: 100%; aspect-ratio: 1/1; object-fit: cover; display: block;
        }
        .product-card .img-placeholder {
            background: linear-gradient(135deg, #d5e8d4, #b8d4b7);
            display: flex; align-items: center; justify-content: center;
        }
        .product-card .img-placeholder svg { width: 36px; height: 36px; color: #6aaa6a; opacity:.5; }
        .card-body { padding: 10px 10px 8px; }
        .card-name { font-size: 12px; font-weight: 600; color: #1a1a1a; margin-bottom: 2px; line-height: 1.3; }
        .card-desc { font-size: 10px; color: #888; line-height: 1.4; margin-bottom: 8px; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; }
        .card-footer { display: flex; align-items: center; justify-content: space-between; gap: 6px; }
        .card-price {
            background: var(--gold); color: white;
            font-size: 11px; font-weight: 700;
            padding: 4px 10px; border-radius: 30px;
            letter-spacing: 0.02em;
        }
        .btn-add {
            width: 28px; height: 28px; border-radius: 50%;
            background: var(--green-dark); color: white;
            border: none; cursor: pointer; font-size: 18px; line-height: 1;
            display: flex; align-items: center; justify-content: center;
            transition: background .2s, transform .15s;
            flex-shrink: 0;
        }
        .btn-add:hover { background: var(--green-mid); transform: scale(1.1); }
        .btn-add:active { transform: scale(.95); }

        /* Cart Section */
        .cart-section {
            background: #1a3d1e;
            padding: 24px 20px 40px;
        }
        .cart-box {
            max-width: 1100px;
            margin: 0 auto;
            background: rgba(255,255,255,.1);
            border: 1px solid rgba(255,255,255,.15);
            border-radius: 16px;
            padding: 20px;
        }
        .cart-title { color: white; font-weight: 700; font-size: 16px; margin-bottom: 16px; }
        .cart-items { display: flex; flex-wrap: wrap; gap: 14px; align-items: flex-start; }
        .cart-item {
            position: relative;
            background: white;
            border-radius: 12px;
            overflow: hidden;
            width: 110px;
            flex-shrink: 0;
            cursor: pointer;
        }
        .cart-item img, .cart-item .ci-placeholder {
            width: 100%; aspect-ratio: 1/1; object-fit: cover; display: block;
        }
        .cart-item .ci-placeholder {
            background: linear-gradient(135deg, #d5e8d4, #b8d4b7);
            display: flex; align-items: center; justify-content: center;
        }
        .cart-item .ci-body { padding: 8px; }
        .ci-name { font-size: 11px; font-weight: 600; color: #1a1a1a; margin-bottom: 3px; line-height: 1.3; }
        .ci-price { font-size: 11px; font-weight: 700; color: var(--gold); }
        .ci-remove {
            position: absolute; top: 5px; right: 5px;
            width: 22px; height: 22px; border-radius: 50%;
            background: #e53935; color: white;
            border: none; cursor: pointer; font-size: 14px; line-height: 1;
            display: flex; align-items: center; justify-content: center;
            box-shadow: 0 2px 6px rgba(229,57,53,.35);
            transition: transform .15s;
        }
        .ci-remove:hover { transform: scale(1.15); }

        /* Cart Actions */
        .cart-actions {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-left: auto;
            min-width: 140px;
        }
        .btn-add-order {
            background: rgba(255,255,255,.15);
            color: white;
            border: 1.5px solid rgba(255,255,255,.3);
            border-radius: 12px;
            padding: 10px 14px;
            font-size: 13px;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: background .2s;
        }
        .btn-add-order:hover { background: rgba(255,255,255,.2); }
        .btn-checkout {
            background: var(--gold);
            color: white;
            border: none;
            border-radius: 12px;
            padding: 14px;
            font-size: 14px;
            font-weight: 700;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            transition: background .2s;
            letter-spacing: 0.06em;
            text-transform: uppercase;
        }
        .btn-checkout:hover { background: #b8841e; }

        /* Empty cart hint */
        .cart-empty { color: rgba(255,255,255,.4); font-size: 13px; font-style: italic; padding: 16px 0; }

        /* Checkout Modal */
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
        .modal-box {
            background: white;
            border-radius: 20px;
            width: 100%;
            max-width: 480px;
            max-height: 90vh;
            overflow-y: auto;
            padding: 28px;
            box-shadow: 0 24px 60px rgba(0,0,0,.25);
        }
        .modal-title { font-family: 'Playfair Display', serif; font-size: 22px; font-weight: 700; color: #1a3d1e; margin-bottom: 4px; }
        .modal-subtitle { font-size: 13px; color: #888; margin-bottom: 20px; }
        .form-group { margin-bottom: 14px; }
        .form-group label { display: block; font-size: 12px; font-weight: 600; color: #555; margin-bottom: 5px; text-transform: uppercase; letter-spacing: .05em; }
        .form-group input, .form-group textarea {
            width: 100%;
            border: 1.5px solid #e5e5e5;
            border-radius: 10px;
            padding: 10px 14px;
            font-size: 13px;
            outline: none;
            transition: border-color .2s;
            font-family: inherit;
        }
        .form-group input:focus, .form-group textarea:focus { border-color: #2d6b32; }
        .form-group textarea { resize: none; }
        .order-summary { background: #f8faf8; border-radius: 12px; padding: 14px; margin-bottom: 18px; }
        .summary-item { display: flex; justify-content: space-between; font-size: 13px; color: #555; margin-bottom: 6px; }
        .summary-total { display: flex; justify-content: space-between; font-size: 15px; font-weight: 700; color: #1a3d1e; border-top: 1.5px solid #e5e5e5; padding-top: 10px; margin-top: 6px; }
        .btn-submit-order {
            width: 100%;
            background: linear-gradient(135deg, #2d6b32, #1a3d1e);
            color: white;
            border: none;
            border-radius: 12px;
            padding: 14px;
            font-size: 14px;
            font-weight: 700;
            cursor: pointer;
            transition: opacity .2s;
            letter-spacing: .04em;
        }
        .btn-submit-order:hover { opacity: .9; }
        .btn-submit-order:disabled { opacity: .6; cursor: not-allowed; }
        .modal-close { float: right; background: none; border: none; cursor: pointer; color: #999; font-size: 22px; line-height: 1; }

        /* Success State */
        .success-state { text-align: center; padding: 20px 0; }
        .success-icon { width: 64px; height: 64px; background: #e8f5e9; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px; }
        .success-icon svg { width: 32px; height: 32px; color: #2d6b32; }

        /* Footer */
        .footer {
            background: var(--gold);
            padding: 40px 20px;
            text-align: center;
        }
        .footer-logo { font-family: 'Playfair Display', serif; font-size: 26px; font-weight: 700; color: white; margin-bottom: 6px; }
        .footer-tagline { font-size: 12px; color: rgba(255,255,255,.7); margin-bottom: 28px; line-height: 1.5; max-width: 360px; margin-left: auto; margin-right: auto; }
        .footer-title { font-size: 22px; font-weight: 700; color: white; margin-bottom: 6px; font-family: 'Playfair Display', serif; }
        .footer-subtitle { font-size: 12px; color: rgba(255,255,255,.7); margin-bottom: 24px; line-height: 1.5; max-width: 400px; margin-left: auto; margin-right: auto; }
        .location-cards { display: flex; flex-direction: column; gap: 14px; max-width: 540px; margin: 0 auto; }
        .location-card {
            background: white;
            border-radius: 16px;
            padding: 0;
            overflow: hidden;
            display: flex;
            align-items: center;
            text-align: left;
        }
        .location-card img { width: 110px; height: 90px; object-fit: cover; flex-shrink: 0; }
        .location-card .loc-img-placeholder {
            width: 110px; height: 90px; flex-shrink: 0;
            background: linear-gradient(135deg, #c8d8c8, #a8c0a8);
            display: flex; align-items: center; justify-content: center;
        }
        .location-info { padding: 14px 16px; flex: 1; }
        .location-name { font-size: 14px; font-weight: 700; color: #1a1a1a; margin-bottom: 2px; }
        .location-address { font-size: 12px; color: #666; margin-bottom: 10px; }
        .location-btns { display: flex; gap: 8px; }
        .btn-lokasi {
            background: #1a3d1e; color: white;
            padding: 6px 14px; border-radius: 8px;
            font-size: 11px; font-weight: 600;
            text-decoration: none;
            transition: background .2s;
        }
        .btn-lokasi:hover { background: #2d6b32; }
        .btn-chat {
            background: var(--gold); color: white;
            padding: 6px 14px; border-radius: 8px;
            font-size: 11px; font-weight: 600;
            text-decoration: none;
            transition: background .2s;
        }
        .btn-chat:hover { background: #b8841e; }

        .footer-bottom { background: #1a3d1e; text-align: center; padding: 14px; }
        .footer-bottom-inner { display: flex; justify-content: space-between; align-items: center; max-width: 1100px; margin: 0 auto; font-size: 12px; color: rgba(255,255,255,.4); flex-wrap: wrap; gap: 8px; }
        .footer-bottom-links { display: flex; gap: 16px; }
        .footer-bottom-links a { color: rgba(255,255,255,.4); text-decoration: none; }
        .footer-bottom-links a:hover { color: rgba(255,255,255,.7); }

        /* Toast */
        .toast {
            position: fixed; bottom: 24px; right: 24px;
            background: #1a3d1e; color: white;
            padding: 12px 20px; border-radius: 12px;
            font-size: 13px; font-weight: 500;
            transform: translateY(80px); opacity: 0;
            transition: all .3s ease;
            z-index: 9999;
            box-shadow: 0 8px 24px rgba(0,0,0,.2);
        }
        .toast.show { transform: translateY(0); opacity: 1; }
    </style>
</head>
<body>

<!-- Top Banner -->
<div class="top-banner">
    Bergabung menjadi member untuk diskon 90% — <a href="#">JOIN</a>
</div>

<!-- Navbar -->
<nav class="navbar">
    <div class="logo">kuai</div>
    <ul class="nav-links">
        <li><a href="#">Product</a></li>
        <li><a href="#">Journal</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Careers</a></li>
    </ul>
    <a href="#" class="nav-btn">Get started →</a>
</nav>

<!-- Hero / Price List Header -->
<section class="hero">
    <div class="hero-subtitle">— Since 2020 —</div>
    <h1>Price List Kami</h1>
    <p>Menjaga dan merawat sepatu anda dengan ketulusan hati terdalam.<br>Dijamin bersih dan menjaga keawetan sepatumu</p>
</section>

<!-- Product Grid -->
<section class="products-section">
    <div class="products-grid" id="productGrid">
        @forelse($products as $product)
        <div class="product-card" onclick="addToCart({{ $product->id }}, '{{ addslashes($product->name) }}', {{ $product->price }}, '{{ $product->image ? Storage::url($product->image) : '' }}', '{{ addslashes($product->description) }}')">
            @if($product->image)
                <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}" loading="lazy">
            @else
                <div class="img-placeholder">
                    <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                </div>
            @endif
            <div class="card-body">
                <div class="card-name">{{ $product->name }}</div>
                <div class="card-desc">{{ $product->description }}</div>
                <div class="card-footer">
                    <span class="card-price">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                    <button class="btn-add" onclick="event.stopPropagation(); addToCart({{ $product->id }}, '{{ addslashes($product->name) }}', {{ $product->price }}, '{{ $product->image ? Storage::url($product->image) : '' }}', '{{ addslashes($product->description) }}')">+</button>
                </div>
            </div>
        </div>
        @empty
        <div style="grid-column: 1/-1; text-align:center; color:rgba(255,255,255,.4); padding: 60px 20px; font-size:14px;">
            Produk belum tersedia. Admin belum menambahkan produk.
        </div>
        @endforelse
    </div>

    <!-- Cart Section -->
    <div class="cart-section" style="margin-top: 24px;">
        <div class="cart-box">
            <div class="cart-title">Pesanan Anda:</div>
            <div class="cart-items" id="cartItems">
                <div class="cart-empty" id="cartEmpty">Belum ada item. Klik + pada produk untuk menambahkan.</div>
                <!-- Cart items will be injected here -->
                <div class="cart-actions" id="cartActions" style="display:none;">
                    <button class="btn-add-order" onclick="openModal()">
                        <svg width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                        Tambah Pesanan anda
                    </button>
                    <button class="btn-checkout" onclick="openModal()">
                        <svg width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                        CHECKOUT
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer Locations -->
<footer>
    <div class="footer">
        <div class="footer-logo">kuai</div>
        <div class="footer-tagline">Kami memberikan berbagai macam layanan untuk perawatan barang kesayangan<br>anda yang akan dikerjakan dari tim kami yang sudah berpengalaman dan profesional.</div>
        <div class="footer-title">Alamat Headquarter</div>
        <div class="footer-subtitle">Kami memberikan berbagai macam layanan untuk perawatan barang kesayangan<br>anda yang akan dikerjakan dari tim kami yang sudah berpengalaman dan profesional.</div>
        <div class="location-cards">
            <div class="location-card">
                <div class="loc-img-placeholder">
                    <svg width="32" height="32" fill="none" viewBox="0 0 24 24" stroke="#6aaa6a" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                </div>
                <div class="location-info">
                    <div class="location-name">Bandung, Cibiru Hilir No.67</div>
                    <div class="location-address">Jalan Mahatmagandi</div>
                    <div class="location-btns">
                        <a href="https://maps.google.com" target="_blank" class="btn-lokasi">Lokasi Kami</a>
                        <a href="https://wa.me/6281234567890" target="_blank" class="btn-chat">Chat</a>
                    </div>
                </div>
            </div>
            <div class="location-card">
                <div class="loc-img-placeholder">
                    <svg width="32" height="32" fill="none" viewBox="0 0 24 24" stroke="#6aaa6a" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                </div>
                <div class="location-info">
                    <div class="location-name">Bandung, Cibiru Hilir No.67</div>
                    <div class="location-address">Jalan Mahatmagandi</div>
                    <div class="location-btns">
                        <a href="https://maps.google.com" target="_blank" class="btn-lokasi">Lokasi Kami</a>
                        <a href="https://wa.me/6281234567890" target="_blank" class="btn-chat">Chat</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="footer-bottom-inner">
            <span>©Kuai {{ date('Y') }}</span>
            <div class="footer-bottom-links">
                <a href="#">Product</a>
                <a href="#">Journal</a>
                <a href="#">About</a>
                <a href="#">Careers</a>
                <a href="#">Get started</a>
            </div>
        </div>
    </div>
</footer>

<!-- Checkout Modal -->
<div class="modal-overlay" id="checkoutModal">
    <div class="modal-box" id="modalBox">
        <div id="formState">
            <div style="display:flex;justify-content:space-between;align-items:flex-start;">
                <div>
                    <div class="modal-title">Checkout</div>
                    <div class="modal-subtitle">Isi data diri Anda untuk melanjutkan pesanan</div>
                </div>
                <button class="modal-close" onclick="closeModal()">×</button>
            </div>

            <!-- Order Summary -->
            <div class="order-summary" id="modalSummary"></div>

            <!-- Form -->
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" id="custName" placeholder="Masukkan nama lengkap">
            </div>
            <div class="form-group">
                <label>Nomor WhatsApp</label>
                <input type="tel" id="custPhone" placeholder="Contoh: 081234567890">
            </div>
            <div class="form-group">
                <label>Alamat Lengkap</label>
                <textarea id="custAddress" rows="3" placeholder="Jl. Nama Jalan No. X, Kota..."></textarea>
            </div>
            <div class="form-group">
                <label>Catatan (opsional)</label>
                <input type="text" id="custNotes" placeholder="Instruksi khusus, dll.">
            </div>
            <div id="formError" style="display:none;background:#fee2e2;border:1px solid #fca5a5;color:#dc2626;padding:10px 14px;border-radius:10px;font-size:13px;margin-bottom:14px;"></div>
            <button class="btn-submit-order" id="submitBtn" onclick="submitOrder()">Kirim Pesanan</button>
        </div>

        <div class="success-state" id="successState" style="display:none;">
            <div class="success-icon">
                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
            </div>
            <div style="font-family:'Playfair Display',serif;font-size:22px;font-weight:700;color:#1a3d1e;margin-bottom:8px;">Pesanan Terkirim!</div>
            <div style="font-size:13px;color:#666;line-height:1.6;margin-bottom:20px;">Terima kasih! Pesanan Anda telah kami terima. Tim kami akan menghubungi Anda melalui WhatsApp secepatnya.</div>
            <button onclick="closeModal(true)" class="btn-submit-order" style="max-width:200px;margin:0 auto;">Tutup</button>
        </div>
    </div>
</div>

<!-- Toast -->
<div class="toast" id="toast"></div>

<script>
// Cart State
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

    // Remove old cart item elements (not the empty div or actions div)
    container.querySelectorAll('.cart-item').forEach(el => el.remove());

    if (cart.length === 0) {
        empty.style.display = '';
        actions.style.display = 'none';
        return;
    }

    empty.style.display = 'none';
    actions.style.display = 'flex';
    actions.style.flexDirection = 'column';
    actions.style.gap = '10px';
    actions.style.marginLeft = 'auto';
    actions.style.minWidth = '140px';

    cart.forEach(item => {
        const el = document.createElement('div');
        el.className = 'cart-item';
        el.innerHTML = `
            <button class="ci-remove" onclick="removeFromCart(${item.id})">×</button>
            ${item.image
                ? `<img src="${item.image}" alt="${item.name}" loading="lazy">`
                : `<div class="ci-placeholder"><svg width="28" height="28" fill="none" viewBox="0 0 24 24" stroke="#6aaa6a" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg></div>`
            }
            <div class="ci-body">
                <div class="ci-name">${item.name}${item.qty > 1 ? ` ×${item.qty}` : ''}</div>
                <div class="ci-price">Rp ${formatNum(item.price * item.qty)}</div>
            </div>
        `;
        container.insertBefore(el, actions);
    });
}

function formatNum(n) {
    return n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.');
}

// Modal
function openModal() {
    if (cart.length === 0) { showToast('Tambahkan produk terlebih dahulu!'); return; }
    renderModalSummary();
    document.getElementById('checkoutModal').classList.add('open');
    document.getElementById('formState').style.display = '';
    document.getElementById('successState').style.display = 'none';
    document.getElementById('formError').style.display = 'none';
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
        html += `<div class="summary-item"><span>${item.name} ×${item.qty}</span><span>Rp ${formatNum(item.price * item.qty)}</span></div>`;
    });
    html += `<div class="summary-total"><span>Total</span><span>Rp ${formatNum(total)}</span></div>`;
    document.getElementById('modalSummary').innerHTML = html;
}

async function submitOrder() {
    const name    = document.getElementById('custName').value.trim();
    const phone   = document.getElementById('custPhone').value.trim();
    const address = document.getElementById('custAddress').value.trim();
    const notes   = document.getElementById('custNotes').value.trim();
    const errEl   = document.getElementById('formError');
    const submitBtn = document.getElementById('submitBtn');

    errEl.style.display = 'none';

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
    el.style.display = '';
}

// Toast
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
