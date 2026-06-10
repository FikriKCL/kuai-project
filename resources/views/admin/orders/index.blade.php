@extends('admin.layouts.app')
@section('title', 'Pesanan')
@section('heading', 'Manajemen Pesanan')
@section('subheading', 'Pantau dan kelola semua pesanan pelanggan')

@section('content')
<!-- Filter Bar -->
<div class="flex flex-wrap items-center gap-2 mb-5">
    <form action="" method="GET" class="flex items-center gap-2 flex-wrap">
        <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari nama / telp / ID..."
            class="border border-gray-200 rounded-xl px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-green-500 w-full sm:w-56">
        <select name="status" class="border border-gray-200 rounded-xl px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-green-500">
            <option value="">Semua Status</option>
            <option value="pending"    {{ request('status') === 'pending'    ? 'selected' : '' }}>Pending</option>
            <option value="processing" {{ request('status') === 'processing' ? 'selected' : '' }}>Diproses</option>
            <option value="completed"  {{ request('status') === 'completed'  ? 'selected' : '' }}>Selesai</option>
            <option value="cancelled"  {{ request('status') === 'cancelled'  ? 'selected' : '' }}>Dibatalkan</option>
        </select>
        <button type="submit" class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-4 py-2 rounded-xl text-sm transition-colors">Filter</button>
        @if(request()->hasAny(['search','status']))
        <a href="{{ route('admin.orders.index') }}" class="text-sm text-gray-400 hover:text-gray-600">Reset</a>
        @endif
    </form>
</div>

<!-- Orders Table -->
<div class="card overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-sm">
            <thead>
                <tr class="border-b border-gray-100 bg-gray-50/50">
                    <th class="text-left px-5 py-3.5 text-gray-500 font-medium text-xs uppercase tracking-wide">#ID</th>
                    <th class="text-left px-5 py-3.5 text-gray-500 font-medium text-xs uppercase tracking-wide">Pelanggan</th>
                    <th class="text-left px-5 py-3.5 text-gray-500 font-medium text-xs uppercase tracking-wide">Items</th>
                    <th class="text-left px-5 py-3.5 text-gray-500 font-medium text-xs uppercase tracking-wide">Total</th>
                    <th class="text-left px-5 py-3.5 text-gray-500 font-medium text-xs uppercase tracking-wide">Status</th>
                    <th class="text-left px-5 py-3.5 text-gray-500 font-medium text-xs uppercase tracking-wide">Tanggal</th>
                    <th class="text-right px-5 py-3.5 text-gray-500 font-medium text-xs uppercase tracking-wide">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-50">
                @forelse($orders as $order)
                @php $badge = $order->status_badge; @endphp
                <tr class="hover:bg-gray-50/50 transition-colors">
                    <td class="px-5 py-4 font-mono text-gray-400 text-xs">#{{ str_pad($order->id, 4, '0', STR_PAD_LEFT) }}</td>
                    <td class="px-5 py-4">
                        <div class="font-medium text-gray-800">{{ $order->customer_name }}</div>
                        <div class="text-xs text-gray-400">{{ $order->customer_phone }}</div>
                    </td>
                    <td class="px-5 py-4 text-gray-500">{{ $order->items->count() }} item</td>
                    <td class="px-5 py-4 font-semibold text-gray-800">{{ $order->formatted_total }}</td>
                    <td class="px-5 py-4">
                        <span class="text-xs px-2.5 py-1 rounded-full font-medium {{ $badge['class'] }}">
                            {{ $badge['label'] }}
                        </span>
                    </td>
                    <td class="px-5 py-4 text-gray-400 text-xs">{{ $order->created_at->format('d M Y H:i') }}</td>
                    <td class="px-5 py-4 text-right">
                        <div class="flex items-center justify-end gap-2">
                            <a href="{{ route('admin.orders.show', $order) }}"
                                class="text-xs px-3 py-1.5 rounded-lg border border-gray-200 hover:bg-gray-50 text-gray-600 transition-colors">
                                Detail
                            </a>
                            <form action="{{ route('admin.orders.destroy', $order) }}" method="POST"
                                onsubmit="return confirm('Hapus pesanan ini?')">
                                @csrf @method('DELETE')
                                <button type="submit" class="text-xs p-1.5 rounded-lg border border-red-100 text-red-400 hover:bg-red-50 transition-colors">
                                    <i data-lucide="trash-2" class="w-3.5 h-3.5"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="px-5 py-16 text-center">
                        <i data-lucide="inbox" class="w-10 h-10 text-gray-200 mx-auto mb-3"></i>
                        <p class="text-gray-400 text-sm">Belum ada pesanan</p>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

<div class="mt-4">
    {{ $orders->withQueryString()->links() }}
</div>
@endsection
