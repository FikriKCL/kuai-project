<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin — Kuai</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'DM Sans', sans-serif; }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center" style="background: linear-gradient(135deg, #1f4f24 0%, #0f2812 60%, #071508 100%);">

    <div class="w-full max-w-sm mx-4">
        <div class="text-center mb-8">
            <div class="font-serif text-white text-4xl font-bold mb-2" style="font-family: 'Playfair Display', serif;">kuai</div>
            <div class="text-white/50 text-sm">Panel Administrasi</div>
        </div>

        <div class="bg-white rounded-2xl shadow-2xl p-8">
            <h2 class="text-xl font-semibold text-gray-800 mb-1">Masuk ke Admin</h2>
            <p class="text-gray-400 text-sm mb-6">Masukkan kredensial Anda untuk melanjutkan</p>

            @if($errors->any())
            <div class="bg-red-50 border border-red-200 text-red-600 rounded-lg px-4 py-3 text-sm mb-4">
                {{ $errors->first() }}
            </div>
            @endif

            <form action="{{ route('admin.login.post') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-1.5">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" required
                        class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent"
                        placeholder="admin@kuai.id">
                </div>
                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-700 mb-1.5">Password</label>
                    <input type="password" name="password" required
                        class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent"
                        placeholder="••••••••">
                </div>
                <button type="submit"
                    class="w-full py-3 rounded-xl text-white font-medium text-sm transition-all hover:opacity-90 active:scale-95"
                    style="background: linear-gradient(135deg, #2d7034, #1f4f24);">
                    Masuk
                </button>
            </form>

            <div class="mt-6 pt-4 border-t border-gray-100">
                <p class="text-xs text-gray-400 text-center">© {{ date('Y') }} Kuai Shoe Care. All rights reserved.</p>
            </div>
        </div>
    </div>
</body>
</html>
