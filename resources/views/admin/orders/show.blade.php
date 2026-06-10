@extends('admin.layouts.app')
@section('title', 'Detail Pesanan #' . str_pad($order->id, 4, '0', STR_PAD_LEFT))
@section('heading', 'Detail Pesanan')
@section('subheading', '#' . str_pad($order->id, 4, '0', STR_PAD_LEFT) . ' · ' . $order->created_at->format('d M Y H:i'))

@section('content')
<div class="grid grid-cols-1 xl:grid-cols-3 gap-5">

    <!-- Order Items -->
    <div class="xl:col-span-2 space-y-4">
        <div class="card p-5">
            <h3 class="font-semibold text-gray-800 mb-4">Item Pesanan</h3>
            <div class="space-y-3">
                @foreach($order->items as $item)
                <div class="flex items-center gap-4 p-3 rounded-xl bg-gray-50">
                    @if($item->product && $item->product->image)
                    <img src="{{ Storage::url($item->product->image) }}" class="w-14 h-14 object-cover rounded-lg flex-shrink-0" alt="">
                    @else
                    <div class="w-14 h-14 rounded-lg bg-gray-200 flex items-center justify-center flex-shrink-0">
                        <i data-lucide="package" class="w-6 h-6 text-gray-400"></i>
                    </div>
                    @endif
                    <div class="flex-1 min-w-0">
                        <div class="font-medium text-gray-800 text-sm">{{ $item->product_name }}</div>
                        <div class="text-xs text-gray-400 mt-0.5">
                            Rp {{ number_format($item->price, 0, ',', '.') }} × {{ $item->quantity }}
                        </div>
                    </div>
                    <div class="font-semibold text-gray-800 text-sm">
                        Rp {{ number_format($item->subtotal, 0, ',', '.') }}
                    </div>
                </div>
                @endforeach
            </div>

            <div class="mt-4 pt-4 border-t border-gray-100 flex justify-between items-center">
                <span class="font-medium text-gray-600">Total</span>
                <span class="text-lg font-bold text-green-700">{{ $order->formatted_total }}</span>
            </div>

            @if($order->notes)
            <div class="mt-4 p-3 bg-amber-50 rounded-xl border border-amber-100">
                <div class="text-xs text-amber-600 font-medium mb-1">Catatan Pelanggan</div>
                <div class="text-sm text-amber-700">{{ $order->notes }}</div>
            </div>
            @endif
        </div>
    </div>

    <!-- Right Panel -->
    <div class="space-y-4">
        <!-- Customer Info -->
        <div class="card p-5">
            <h3 class="font-semibold text-gray-800 mb-4">Info Pelanggan</h3>
            <div class="space-y-3 text-sm">
                <div class="flex items-start gap-3">
                    <i data-lucide="user" class="w-4 h-4 text-gray-400 mt-0.5 flex-shrink-0"></i>
                    <div>
                        <div class="text-gray-400 text-xs mb-0.5">Nama</div>
                        <div class="font-medium text-gray-800">{{ $order->customer_name }}</div>
                    </div>
                </div>
                <div class="flex items-start gap-3">
                    <i data-lucide="phone" class="w-4 h-4 text-gray-400 mt-0.5 flex-shrink-0"></i>
                    <div>
                        <div class="text-gray-400 text-xs mb-0.5">Telepon</div>
                        <div class="font-medium text-gray-800">
                            <a href="https://wa.me/{{ preg_replace('/^0/', '62', $order->customer_phone) }}" target="_blank"
                                class="text-green-600 hover:underline flex items-center gap-1">
                                {{ $order->customer_phone }}
                                <i data-lucide="external-link" class="w-3 h-3"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="flex items-start gap-3">
                    <i data-lucide="map-pin" class="w-4 h-4 text-gray-400 mt-0.5 flex-shrink-0"></i>
                    <div>
                        <div class="text-gray-400 text-xs mb-0.5">Alamat</div>
                        <div class="text-gray-800">{{ $order->customer_address }}</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Update Status -->
        <div class="card p-5">
            <h3 class="font-semibold text-gray-800 mb-4">Update Status</h3>
            @php $badge = $order->status_badge; @endphp
            <div class="mb-3">
                <span class="text-xs px-2.5 py-1 rounded-full font-medium {{ $badge['class'] }}">
                    Status saat ini: {{ $badge['label'] }}
                </span>
            </div>
            <form action="{{ route('admin.orders.status', $order) }}" method="POST">
                @csrf @method('PATCH')
                <select name="status" class="w-full border border-gray-200 rounded-xl px-3 py-2 text-sm mb-3 focus:outline-none focus:ring-2 focus:ring-green-500">
                    <option value="pending"    {{ $order->status === 'pending'    ? 'selected' : '' }}>Pending</option>
                    <option value="processing" {{ $order->status === 'processing' ? 'selected' : '' }}>Diproses</option>
                    <option value="completed"  {{ $order->status === 'completed'  ? 'selected' : '' }}>Selesai</option>
                    <option value="cancelled"  {{ $order->status === 'cancelled'  ? 'selected' : '' }}>Dibatalkan</option>
                </select>
                <button type="submit"
                    class="w-full py-2.5 text-white rounded-xl text-sm font-medium transition-all hover:opacity-90"
                    style="background: linear-gradient(135deg, #3A6532, #2d5229);">
                    Simpan Status
                </button>
            </form>
        </div>

        <a href="{{ route('admin.orders.index') }}"
            class="flex items-center gap-2 text-sm text-gray-500 hover:text-gray-700 transition-colors">
            <i data-lucide="arrow-left" class="w-4 h-4"></i> Kembali ke daftar pesanan
        </a>
    </div>
</div>
@endsection
