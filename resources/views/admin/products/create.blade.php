@extends('admin.layouts.app')
@section('title', 'Tambah Produk')
@section('heading', 'Tambah Produk Baru')
@section('subheading', 'Produk akan tampil di halaman utama website setelah disimpan')

@section('content')
<div class="max-w-2xl">
    <div class="card p-6">
        <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1.5">Nama Produk <span class="text-red-500">*</span></label>
                    <input type="text" name="name" value="{{ old('name') }}" required
                        class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-green-500 @error('name') border-red-300 @enderror"
                        placeholder="Contoh: Deep Cleaning">
                    @error('name')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1.5">Kategori <span class="text-red-500">*</span></label>
                    <input type="text" name="category" value="{{ old('category') }}" required
                        class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-green-500"
                        placeholder="Contoh: Cleaning, Repair, Treatment">
                    @error('category')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                </div>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-1.5">Deskripsi <span class="text-red-500">*</span></label>
                <textarea name="description" rows="3" required
                    class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-green-500 resize-none"
                    placeholder="Deskripsi singkat produk/layanan...">{{ old('description') }}</textarea>
                @error('description')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1.5">Harga (Rp) <span class="text-red-500">*</span></label>
                    <input type="number" name="price" value="{{ old('price') }}" required min="0"
                        class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-green-500"
                        placeholder="50000">
                    @error('price')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1.5">Stok <span class="text-red-500">*</span></label>
                    <input type="number" name="stock" value="{{ old('stock', 0) }}" required min="0"
                        class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-green-500"
                        placeholder="100">
                    @error('stock')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                </div>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-1.5">Foto Produk</label>
                <div class="border-2 border-dashed border-gray-200 rounded-xl p-6 text-center hover:border-green-400 transition-colors cursor-pointer relative"
                    id="dropzone">
                    <input type="file" name="image" accept="image/*" class="absolute inset-0 opacity-0 cursor-pointer" id="imageInput"
                        onchange="previewImage(this)">
                    <div id="dropzoneContent">
                        <i data-lucide="upload-cloud" class="w-8 h-8 text-gray-300 mx-auto mb-2"></i>
                        <p class="text-sm text-gray-400">Klik atau seret foto ke sini</p>
                        <p class="text-xs text-gray-300 mt-1">JPG, PNG, WebP maks. 2MB</p>
                    </div>
                    <img id="imagePreview" class="hidden mx-auto max-h-40 rounded-lg" alt="Preview">
                </div>
                @error('image')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
            </div>

            <div class="mb-6">
                <label class="flex items-center gap-3 cursor-pointer">
                    <div class="relative">
                        <input type="checkbox" name="is_active" value="1" class="sr-only peer" {{ old('is_active', true) ? 'checked' : '' }}>
                        <div class="w-10 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-green-600"></div>
                    </div>
                    <span class="text-sm font-medium text-gray-700">Tampilkan di website utama</span>
                </label>
            </div>

            <div class="flex items-center gap-3">
                <button type="submit"
                    class="px-6 py-2.5 text-white rounded-xl text-sm font-medium transition-all hover:opacity-90"
                    style="background: linear-gradient(135deg, #3A6532, #2d5229);">
                    Simpan Produk
                </button>
                <a href="{{ route('admin.products.index') }}" class="px-6 py-2.5 border border-gray-200 rounded-xl text-sm text-gray-600 hover:bg-gray-50 transition-colors">
                    Batal
                </a>
            </div>
        </form>
    </div>
</div>

<script>
function previewImage(input) {
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = e => {
            document.getElementById('imagePreview').src = e.target.result;
            document.getElementById('imagePreview').classList.remove('hidden');
            document.getElementById('dropzoneContent').classList.add('hidden');
        };
        reader.readAsDataURL(input.files[0]);
    }
}
</script>
@endsection
