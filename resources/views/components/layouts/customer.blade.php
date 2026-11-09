<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Pembersih.id - Layanan Jasa Kebersihan' }}</title>
    <script src="[suspicious link removed]"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-800 font-sans antialiased">
    <header class="bg-white border-b border-gray-200 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
            <a href="/" class="font-bold text-xl text-blue-600">Pembersih.id</a>
            <nav class="flex items-center gap-4 text-sm font-medium">
                <a href="{{ route('customer.services.index') }}" class="hover:text-blue-600">Layanan</a>
                @auth
                    <a href="{{ route('customer.orders.index') }}" class="hover:text-blue-600">Pesanan Saya</a>
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="text-red-600 hover:underline">Keluar</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Masuk</a>
                    <a href="{{ route('register') }}" class="bg-blue-600 text-white px-3 py-1.5 rounded-lg hover:bg-blue-700">Daftar</a>
                @endauth
            </nav>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
        {{ $slot }}
    </main>
</body>
</html>
