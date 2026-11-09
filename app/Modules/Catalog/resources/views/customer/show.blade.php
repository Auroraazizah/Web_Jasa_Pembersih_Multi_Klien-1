<x-layouts.customer title="{{ $service->name }} - Pembersih.id">
    <div class="max-w-4xl mx-auto bg-white p-8 rounded-xl shadow-sm border border-gray-200 my-6">
        <a href="{{ route('customer.services.index') }}" class="text-sm text-blue-600 hover:underline mb-4 inline-block">&larr; Kembali ke Katalog</a>
        
        <div class="flex flex-col md:flex-row justify-between items-start border-b border-gray-200 pb-6 mb-6">
            <div>
                <span class="inline-block px-3 py-1 text-xs font-semibold bg-blue-50 text-blue-600 rounded-md mb-2">
                    {{ $service->category }}
                </span>
                <h1 class="text-3xl font-bold text-gray-900">{{ $service->name }}</h1>
                <p class="text-gray-500 mt-1">Disediakan oleh: <strong class="text-gray-700">{{ $service->client->business_name ?? 'Mitra Pembersih' }}</strong> ({{ $service->client->service_area ?? '-' }})</p>
            </div>
            <div class="mt-4 md:mt-0 text-left md:text-right">
                <span class="text-sm text-gray-500 block">Harga Layanan</span>
                <span class="text-2xl font-bold text-blue-600">Rp {{ number_format($service->base_price, 0, ',', '.') }}</span>
            </div>
        </div>

        <div class="mb-8">
            <h3 class="text-lg font-bold text-gray-900 mb-2">Deskripsi Layanan</h3>
            <p class="text-gray-700 leading-relaxed whitespace-pre-line">{{ $service->description }}</p>
        </div>

        @auth
            <a href="{{ route('customer.orders.create', $service->id) }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold px-6 py-3 rounded-lg text-center transition">
                Pesan Jasa Ini Sekarang
            </a>
        @else
            <div class="bg-gray-50 p-4 rounded-lg border border-gray-200 text-center">
                <p class="text-sm text-gray-600 mb-3">Silakan masuk ke akun Anda terlebih dahulu untuk memesan layanan ini.</p>
                <a href="{{ route('login') }}" class="bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium px-5 py-2 rounded-lg transition inline-block">
                    Masuk Akun
                </a>
            </div>
        @endauth
    </div>
</x-layouts.customer>
