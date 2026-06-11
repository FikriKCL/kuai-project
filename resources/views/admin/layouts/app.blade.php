<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Admin') — Kuai Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        kuai: {
                            50:  '#f0f7f0',
                            100: '#dceedd',
                            200: '#b9ddbb',
                            300: '#88c48d',
                            400: '#56a65d',
                            500: '#3A6532',
                            600: '#2d5229',
                            700: '#1f4f24',
                            800: '#173a1b',
                            900: '#0f2812',
                            950: '#071508',
                        },
                        gold: {
                            400: '#e0a060',
                            500: '#D08A4E',
                            600: '#b5733b',
                        }
                    },
                    fontFamily: {
                        display: ['Playfair Display', 'serif'],
                        body:    ['DM Sans', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.min.js"></script>
    @stack('styles')
    <style>
        body { font-family: 'DM Sans', sans-serif; }
        .sidebar-link { transition: all .2s ease; }
        .sidebar-link:hover, .sidebar-link.active { background: rgba(255,255,255,.12); border-left: 3px solid #D08A4E; }
        .sidebar-link.active { background: rgba(255,255,255,.15); }
        .card { background: white; border-radius: 16px; box-shadow: 0 2px 12px rgba(0,0,0,.06); }
        .stat-card { background: white; border-radius: 16px; border: 1px solid #f0f0f0; transition: transform .2s, box-shadow .2s; }
        .stat-card:hover { transform: translateY(-2px); box-shadow: 0 8px 24px rgba(0,0,0,.1); }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">

<div class="flex h-screen overflow-hidden relative">
    <!-- Mobile Sidebar Overlay -->
    <div id="sidebarOverlay" class="fixed inset-0 bg-black/50 z-40 hidden md:hidden transition-opacity opacity-0"></div>

    <!-- Sidebar -->
    <aside id="sidebar" class="fixed md:static inset-y-0 left-0 z-50 w-64 transform -translate-x-full md:translate-x-0 transition-transform duration-300 ease-in-out flex flex-col h-full" style="background: linear-gradient(180deg, #3A6532 0%, #1a3d1e 100%);">
        <div class="p-6 border-b border-white/10">
            <div class="flex items-center gap-3">
                <img src="{{ asset('assets/logo_kuai.png') }}" alt="KUAI Logo" class="h-8 w-auto">
            </div>
            <div class="text-white/50 text-xs mt-1 font-body">Admin Panel</div>
        </div>

        <nav class="flex-1 p-4 space-y-1 overflow-y-auto">
            <a href="{{ route('admin.dashboard') }}" class="sidebar-link flex items-center gap-3 px-4 py-3 text-white/80 rounded-lg text-sm font-medium {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <i data-lucide="layout-dashboard" class="w-4 h-4"></i> Dashboard
            </a>
            <a href="{{ route('admin.products.index') }}" class="sidebar-link flex items-center gap-3 px-4 py-3 text-white/80 rounded-lg text-sm font-medium {{ request()->routeIs('admin.products*') ? 'active' : '' }}">
                <i data-lucide="package" class="w-4 h-4"></i> Produk
            </a>
            <a href="{{ route('admin.orders.index') }}" class="sidebar-link flex items-center gap-3 px-4 py-3 text-white/80 rounded-lg text-sm font-medium {{ request()->routeIs('admin.orders*') ? 'active' : '' }}">
                <i data-lucide="shopping-cart" class="w-4 h-4"></i> Pesanan
                @php $pendingCount = \App\Models\Order::where('status','pending')->count(); @endphp
                @if($pendingCount > 0)
                <span class="ml-auto bg-gold-500 text-white text-xs px-2 py-0.5 rounded-full">{{ $pendingCount }}</span>
                @endif
            </a>
            <div class="pt-4 pb-2">
                <div class="text-white/30 text-xs uppercase tracking-wider px-4 font-semibold">Lainnya</div>
            </div>
            <a href="{{ route('home') }}" target="_blank" class="sidebar-link flex items-center gap-3 px-4 py-3 text-white/80 rounded-lg text-sm font-medium">
                <i data-lucide="external-link" class="w-4 h-4"></i> Lihat Website
            </a>
        </nav>

        <div class="p-4 border-t border-white/10">
            <div class="flex items-center gap-3 mb-3">
                <div class="w-8 h-8 rounded-full bg-gold-500 flex items-center justify-center text-white text-sm font-bold">
                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                </div>
                <div>
                    <div class="text-white text-sm font-medium leading-tight">{{ auth()->user()->name }}</div>
                    <div class="text-white/40 text-xs">Administrator</div>
                </div>
            </div>
            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button type="submit" class="w-full flex items-center gap-2 text-white/60 hover:text-white text-sm px-2 py-1.5 rounded transition-colors">
                    <i data-lucide="log-out" class="w-4 h-4"></i> Keluar
                </button>
            </form>
        </div>
    </aside>

    <!-- Main content -->
    <div class="flex-1 flex flex-col overflow-hidden">
        <!-- Top bar -->
        <header class="bg-white border-b border-gray-100 px-6 py-4 flex items-center justify-between">
            <div class="flex items-center gap-4">
                <button id="mobileSidebarToggle" class="md:hidden text-gray-500 hover:text-gray-700">
                    <i data-lucide="menu" class="w-6 h-6"></i>
                </button>
                <div>
                    <h1 class="font-display text-xl font-semibold text-gray-800">@yield('heading', 'Dashboard')</h1>
                    <div class="text-sm text-gray-400 mt-0.5">@yield('subheading', '')</div>
                </div>
            </div>
            <div class="flex items-center gap-4">
                <div class="text-sm text-gray-400">{{ now()->isoFormat('dddd, D MMMM Y') }}</div>
            </div>
        </header>

        <!-- Flash messages -->
        <div class="px-6 pt-4">
            @if(session('success'))
            <div class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg flex items-center gap-2 mb-2">
                <i data-lucide="check-circle" class="w-4 h-4 flex-shrink-0"></i>
                {{ session('success') }}
            </div>
            @endif
            @if(session('error'))
            <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg flex items-center gap-2 mb-2">
                <i data-lucide="alert-circle" class="w-4 h-4 flex-shrink-0"></i>
                {{ session('error') }}
            </div>
            @endif
        </div>

        <!-- Page content -->
        <main class="flex-1 overflow-y-auto p-6">
            @yield('content')
        </main>
    </div>
</div>

<script>
    lucide.createIcons();

    // Mobile Sidebar Toggle
    const sidebar = document.getElementById('sidebar');
    const sidebarOverlay = document.getElementById('sidebarOverlay');
    const mobileSidebarToggle = document.getElementById('mobileSidebarToggle');

    function toggleSidebar() {
        if (!sidebar) return;
        const isOpen = sidebar.classList.contains('translate-x-0');
        if (isOpen) {
            sidebar.classList.remove('translate-x-0');
            sidebar.classList.add('-translate-x-full');
            sidebarOverlay.classList.remove('opacity-100');
            sidebarOverlay.classList.add('opacity-0');
            setTimeout(() => sidebarOverlay.classList.add('hidden'), 300);
        } else {
            sidebar.classList.remove('-translate-x-full');
            sidebar.classList.add('translate-x-0');
            sidebarOverlay.classList.remove('hidden');
            setTimeout(() => {
                sidebarOverlay.classList.remove('opacity-0');
                sidebarOverlay.classList.add('opacity-100');
            }, 10);
        }
    }

    if (mobileSidebarToggle) {
        mobileSidebarToggle.addEventListener('click', toggleSidebar);
    }
    if (sidebarOverlay) {
        sidebarOverlay.addEventListener('click', toggleSidebar);
    }
</script>
@stack('scripts')
</body>
</html>
