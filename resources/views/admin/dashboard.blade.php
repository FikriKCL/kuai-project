@extends('admin.layouts.app')
@section('title', 'Dashboard')
@section('heading', 'Dashboard')
@section('subheading', 'Selamat datang kembali, ' . auth()->user()->name)

@section('content')
<!-- Stats Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-5 mb-6">
    <div class="stat-card p-5">
        <div class="flex items-center justify-between mb-3">
            <div class="text-gray-400 text-sm font-medium">Total Produk</div>
            <div class="w-10 h-10 rounded-xl flex items-center justify-center" style="background:#e8f5e9">
                <i data-lucide="package" class="w-5 h-5" style="color:#3A6532"></i>
            </div>
        </div>
        <div class="text-3xl font-bold text-gray-800">{{ $totalProducts }}</div>
        <div class="text-xs text-green-600 mt-1 flex items-center gap-1">
            <i data-lucide="check-circle" class="w-3 h-3"></i> {{ $activeProducts }} aktif
        </div>
    </div>

    <div class="stat-card p-5">
        <div class="flex items-center justify-between mb-3">
            <div class="text-gray-400 text-sm font-medium">Total Pesanan</div>
            <div class="w-10 h-10 rounded-xl flex items-center justify-center" style="background:#fff3e0">
                <i data-lucide="shopping-cart" class="w-5 h-5" style="color:#e65100"></i>
            </div>
        </div>
        <div class="text-3xl font-bold text-gray-800">{{ $totalOrders }}</div>
        <div class="text-xs text-orange-500 mt-1 flex items-center gap-1">
            <i data-lucide="clock" class="w-3 h-3"></i> {{ $pendingOrders }} menunggu
        </div>
    </div>

    <div class="stat-card p-5">
        <div class="flex items-center justify-between mb-3">
            <div class="text-gray-400 text-sm font-medium">Total Pendapatan</div>
            <div class="w-10 h-10 rounded-xl flex items-center justify-center" style="background:#e8f5e9">
                <i data-lucide="trending-up" class="w-5 h-5" style="color:#3A6532"></i>
            </div>
        </div>
        <div class="text-2xl font-bold text-gray-800">Rp {{ number_format($totalRevenue, 0, ',', '.') }}</div>
        <div class="text-xs text-gray-400 mt-1">Dari pesanan selesai</div>
    </div>

    <div class="stat-card p-5">
        <div class="flex items-center justify-between mb-3">
            <div class="text-gray-400 text-sm font-medium">Pendapatan Hari Ini</div>
            <div class="w-10 h-10 rounded-xl flex items-center justify-center" style="background:#fce4ec">
                <i data-lucide="calendar" class="w-5 h-5" style="color:#c62828"></i>
            </div>
        </div>
        <div class="text-2xl font-bold text-gray-800">Rp {{ number_format($todayRevenue, 0, ',', '.') }}</div>
        <div class="text-xs text-gray-400 mt-1">{{ now()->format('d M Y') }}</div>
    </div>
</div>

<div class="grid grid-cols-1 xl:grid-cols-3 gap-5 mb-6">
    <!-- Revenue Chart -->
    <div class="card p-6 xl:col-span-2">
        <div class="flex items-center justify-between mb-5">
            <div>
                <h3 class="font-semibold text-gray-800">Pendapatan Bulanan</h3>
                <p class="text-xs text-gray-400 mt-0.5">6 bulan terakhir</p>
            </div>
        </div>
        <canvas id="revenueChart" height="90"></canvas>
    </div>

    <!-- Order Status Donut -->
    <div class="card p-6">
        <h3 class="font-semibold text-gray-800 mb-1">Status Pesanan</h3>
        <p class="text-xs text-gray-400 mb-5">Distribusi semua pesanan</p>
        <canvas id="statusChart" height="160"></canvas>
        <div class="mt-4 space-y-2">
            @php
                $statusColors = ['pending'=>'#f59e0b','processing'=>'#3b82f6','completed'=>'#22c55e','cancelled'=>'#ef4444'];
                $statusLabels = ['pending'=>'Pending','processing'=>'Diproses','completed'=>'Selesai','cancelled'=>'Dibatalkan'];
            @endphp
            @foreach($statusColors as $s => $color)
            <div class="flex items-center justify-between text-sm">
                <div class="flex items-center gap-2">
                    <div class="w-3 h-3 rounded-full" style="background:{{ $color }}"></div>
                    <span class="text-gray-600">{{ $statusLabels[$s] }}</span>
                </div>
                <span class="font-medium text-gray-700">{{ $orderStats[$s] ?? 0 }}</span>
            </div>
            @endforeach
        </div>
    </div>
</div>

<div class="grid grid-cols-1 xl:grid-cols-2 gap-5">
    <!-- Top Products -->
    <div class="card p-6">
        <h3 class="font-semibold text-gray-800 mb-4">Produk Terlaris</h3>
        @if($topProducts->isEmpty())
        <div class="text-gray-400 text-sm text-center py-8">Belum ada data penjualan</div>
        @else
        <div class="space-y-3">
            @foreach($topProducts as $i => $p)
            <div class="flex items-center gap-3">
                <div class="w-7 h-7 rounded-full flex items-center justify-center text-xs font-bold text-white flex-shrink-0"
                    style="background: {{ ['#3A6532','#D08A4E','#3b82f6','#ef4444','#8b5cf6'][$i] ?? '#9ca3af' }}">
                    {{ $i + 1 }}
                </div>
                <div class="flex-1 min-w-0">
                    <div class="text-sm font-medium text-gray-700 truncate">{{ $p->product_name }}</div>
                    <div class="text-xs text-gray-400">{{ $p->total_qty }} item terjual</div>
                </div>
                <div class="text-sm font-semibold text-green-700">Rp {{ number_format($p->total_revenue, 0, ',', '.') }}</div>
            </div>
            @endforeach
        </div>
        @endif
    </div>

    <!-- Recent Orders -->
    <div class="card p-6">
        <div class="flex items-center justify-between mb-4">
            <h3 class="font-semibold text-gray-800">Pesanan Terbaru</h3>
            <a href="{{ route('admin.orders.index') }}" class="text-xs text-green-600 hover:underline">Lihat semua</a>
        </div>
        @if($recentOrders->isEmpty())
        <div class="text-gray-400 text-sm text-center py-8">Belum ada pesanan</div>
        @else
        <div class="space-y-3">
            @foreach($recentOrders->take(6) as $order)
            @php $badge = $order->status_badge; @endphp
            <div class="flex items-center gap-3">
                <div class="flex-1 min-w-0">
                    <div class="text-sm font-medium text-gray-700">{{ $order->customer_name }}</div>
                    <div class="text-xs text-gray-400">#{{ $order->id }} · {{ $order->created_at->format('d M') }}</div>
                </div>
                <span class="text-xs px-2 py-1 rounded-full font-medium {{ $badge['class'] }}">{{ $badge['label'] }}</span>
                <div class="text-sm font-semibold text-gray-700">{{ $order->formatted_total }}</div>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const monthLabels = @json($monthLabels);
const monthData   = @json($monthData);

// Revenue Chart
new Chart(document.getElementById('revenueChart'), {
    type: 'bar',
    data: {
        labels: monthLabels,
        datasets: [{
            label: 'Pendapatan',
            data: monthData,
            backgroundColor: 'rgba(58,101,50,0.15)',
            borderColor: '#3A6532',
            borderWidth: 2,
            borderRadius: 8,
            borderSkipped: false,
        }]
    },
    options: {
        responsive: true,
        plugins: { legend: { display: false }, tooltip: {
            callbacks: { label: ctx => 'Rp ' + ctx.raw.toLocaleString('id-ID') }
        }},
        scales: {
            x: { grid: { display: false }, border: { display: false } },
            y: { grid: { color: '#f0f0f0' }, border: { display: false },
                 ticks: { callback: v => 'Rp ' + (v/1000).toFixed(0) + 'rb' }
            }
        }
    }
});

// Status Donut Chart
const statusData = @json($orderStats);
new Chart(document.getElementById('statusChart'), {
    type: 'doughnut',
    data: {
        labels: ['Pending','Diproses','Selesai','Dibatalkan'],
        datasets: [{
            data: [
                statusData.pending    || 0,
                statusData.processing || 0,
                statusData.completed  || 0,
                statusData.cancelled  || 0,
            ],
            backgroundColor: ['#f59e0b','#3b82f6','#22c55e','#ef4444'],
            borderWidth: 0,
            hoverOffset: 4,
        }]
    },
    options: {
        cutout: '70%',
        plugins: { legend: { display: false } }
    }
});
</script>
@endpush
