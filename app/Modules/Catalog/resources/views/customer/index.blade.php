<x-layouts.customer title="Katalog Layanan - Pembersih.id">
    <div class="mb-8 text-center sm:text-left">
        <h1 class="text-3xl font-bold text-gray-900">Katalog Layanan Pembersih</h1>
        <p class="text-gray-600 mt-2">Pilih jasa pembersih terbaik dari mitra terpercaya kami</p>
    </div>

    @if ($services->isEmpty())
        <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-200 text-center">
            <p class="text-gray-500 font-medium">Belum ada layanan pembersih yang tersedia saat ini.</p>
        </div>
    @else
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($services as $service)
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden flex flex-col justify-between hover:shadow-md transition">
                    <div class="p-6">
                        <span class="inline-block px-2.5 py-1 text-xs font-semibold bg-blue-50 text-blue-600 rounded-md mb-3">
                            {{ $service->category }}
                        </span>
                        <h3 class="text-xl font-bold text-gray-900 mb-1">{{ $service->name }}</h3>
                        <p class="text-sm text-gray-500 mb-4">Mitra: {{ $service->client->business_name ?? 'Mitra Pembersih' }}</p>
                        <p class="text-gray-600 text-sm line-clamp-3 mb-4">{{ $service->description }}</p>
                    </div>
                    <div class="px-6 py-4 bg-gray-50 border-t border-gray-100 flex items-center justify-between">
                        <div>
                            <span class="text-xs text-gray-500 block">Mulai dari</span>
                            <span class="text-lg font-bold text-blue-600">Rp {{ number_format($service->base_price, 0, ',', '.') }}</span>
                        </div>
                        <a href="{{ route('customer.services.show', $service->id) }}" class="bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium px-4 py-2 rounded-lg transition">
                            Detail Jasa
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</x-layouts.customer>
