@extends('admin.layouts.app')
@section('title', 'Produk')
@section('heading', 'Manajemen Produk')
@section('subheading', 'Kelola semua produk yang ditampilkan di website')

@section('content')
<div class="flex items-center justify-between mb-5">
    <form action="" method="GET" class="flex items-center gap-2">
        <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari produk..."
            class="border border-gray-200 rounded-xl px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-green-500 w-60">
        <select name="status" class="border border-gray-200 rounded-xl px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-green-500">
            <option value="">Semua Status</option>
            <option value="1" {{ request('status') === '1' ? 'selected' : '' }}>Aktif</option>
            <option value="0" {{ request('status') === '0' ? 'selected' : '' }}>Nonaktif</option>
        </select>
        <button type="submit" class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-4 py-2 rounded-xl text-sm transition-colors">Filter</button>
    </form>
    <a href="{{ route('admin.products.create') }}"
        class="flex items-center gap-2 text-white px-5 py-2.5 rounded-xl text-sm font-medium transition-all hover:opacity-90"
        style="background: linear-gradient(135deg, #2d7034, #1f4f24);">
        <i data-lucide="plus" class="w-4 h-4"></i> Tambah Produk
    </a>
</div>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
    @forelse($products as $product)
    <div class="card overflow-hidden group">
        <div class="relative h-44 bg-gray-100 overflow-hidden">
            @if($product->image)
            <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}"
                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
            @else
            <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-gray-100 to-gray-200">
                <i data-lucide="image" class="w-10 h-10 text-gray-300"></i>
            </div>
            @endif
            <div class="absolute top-2 right-2">
                <span class="text-xs px-2 py-1 rounded-full font-medium {{ $product->is_active ? 'bg-green-100 text-green-700' : 'bg-gray-100 text-gray-500' }}">
                    {{ $product->is_active ? 'Aktif' : 'Nonaktif' }}
                </span>
            </div>
        </div>
        <div class="p-4">
            <div class="text-xs text-gray-400 mb-1">{{ $product->category }}</div>
            <h3 class="font-semibold text-gray-800 text-sm mb-1 truncate">{{ $product->name }}</h3>
            <p class="text-xs text-gray-400 line-clamp-2 mb-3">{{ $product->description }}</p>
            <div class="flex items-center justify-between mb-3">
                <span class="font-bold text-green-700">{{ $product->formatted_price }}</span>
                <span class="text-xs text-gray-400">Stok: {{ $product->stock }}</span>
            </div>
            <div class="flex items-center gap-2">
                <a href="{{ route('admin.products.edit', $product) }}"
                    class="flex-1 text-center text-xs py-1.5 rounded-lg border border-gray-200 hover:bg-gray-50 text-gray-600 transition-colors">
                    Edit
                </a>
                <form action="{{ route('admin.products.toggle', $product) }}" method="POST" class="flex-1">
                    @csrf @method('PATCH')
                    <button type="submit"
                        class="w-full text-xs py-1.5 rounded-lg transition-colors {{ $product->is_active ? 'bg-yellow-50 border border-yellow-200 text-yellow-600 hover:bg-yellow-100' : 'bg-green-50 border border-green-200 text-green-600 hover:bg-green-100' }}">
                        {{ $product->is_active ? 'Nonaktifkan' : 'Aktifkan' }}
                    </button>
                </form>
                <form action="{{ route('admin.products.destroy', $product) }}" method="POST"
                    onsubmit="return confirm('Hapus produk ini?')">
                    @csrf @method('DELETE')
                    <button type="submit" class="text-xs p-1.5 rounded-lg border border-red-100 text-red-400 hover:bg-red-50 transition-colors">
                        <i data-lucide="trash-2" class="w-3.5 h-3.5"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
    @empty
    <div class="col-span-full card p-12 text-center">
        <i data-lucide="package-open" class="w-12 h-12 text-gray-300 mx-auto mb-3"></i>
        <p class="text-gray-400">Belum ada produk. <a href="{{ route('admin.products.create') }}" class="text-green-600 hover:underline">Tambah produk baru</a></p>
    </div>
    @endforelse
</div>

<div class="mt-5">
    {{ $products->withQueryString()->links() }}
</div>
@endsection
