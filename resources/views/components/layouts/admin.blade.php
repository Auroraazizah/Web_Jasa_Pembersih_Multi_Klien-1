<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Portal Admin - Pembersih.id' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-800 font-sans antialiased flex min-h-screen">
    <!-- Sidebar Admin -->
    <aside class="w-64 bg-red-950 text-red-100 flex flex-col">
        <div class="h-16 flex items-center px-6 font-bold text-lg border-b border-red-900">
            Portal Admin
        </div>
        <nav class="flex-1 p-4 space-y-1 text-sm">
            <a href="{{ route('admin.clients.index') }}" class="block px-3 py-2 rounded hover:bg-red-900">Verifikasi Client</a>
            <a href="{{ route('admin.commissions.index') }}" class="block px-3 py-2 rounded hover:bg-red-900">Skema Komisi</a>
            <a href="{{ route('admin.reports.platform') }}" class="block px-3 py-2 rounded hover:bg-red-900">Laporan Platform</a>
            <a href="{{ route('admin.tickets.index') }}" class="block px-3 py-2 rounded hover:bg-red-900">Pusat Pengaduan</a>
        </nav>
        <div class="p-4 border-t border-red-900">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="w-full text-left px-3 py-2 text-red-300 hover:bg-red-900 rounded">Keluar</button>
            </form>
        </div>
    </aside>

    <div class="flex-1 flex flex-col">
        <header class="h-16 bg-white border-b border-gray-200 px-6 flex items-center justify-between">
            <h1 class="font-semibold text-lg">{{ $title ?? 'Admin Dashboard' }}</h1>
            <span class="text-sm font-medium text-red-700">Administrator</span>
        </header>
        <main class="p-6 flex-1">
            {{ $slot }}
        </main>
    </div>
</body>
</html>
