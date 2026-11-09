<?php

namespace App\Modules\Catalog\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ServiceController extends Controller
{
    // Untuk Portal Pelanggan (Customer)
    public function publicIndex(Request $request): View
    {
        $services = Service::where('is_active', true)
            ->with('client')
            ->latest()
            ->get();

        return view('catalog::customer.index', compact('services'));
    }

    public function publicShow(Service $service): View
    {
        $service->load('client');

        return view('catalog::customer.show', compact('service'));
    }

    // Untuk Portal Client (Penyedia Jasa)
    public function index(Request $request): View
    {
        $client = $request->user()?->client;
        $services = $client ? $client->services()->latest()->get() : collect();

        return view('catalog::client.index', compact('services'));
    }

    public function create(): View
    {
        return view('catalog::client.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $client = $request->user()?->client;

        if (! $client) {
            return back()->withErrors(['error' => 'Profil Klien tidak ditemukan.']);
        }

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'category' => ['required', 'string', 'max:100'],
            'description' => ['required', 'string'],
            'base_price' => ['required', 'numeric', 'min:0'],
        ]);

        $client->services()->create([
            'name' => $validated['name'],
            'category' => $validated['category'],
            'description' => $validated['description'],
            'base_price' => (int) $validated['base_price'],
            'is_active' => true,
        ]);

        return redirect()->route('client.services.index')->with('success', 'Layanan berhasil ditambahkan!');
    }

    public function edit(Service $service): View
    {
        return view('catalog::client.edit', compact('service'));
    }

    public function update(Request $request, Service $service): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'category' => ['required', 'string', 'max:100'],
            'description' => ['required', 'string'],
            'base_price' => ['required', 'numeric', 'min:0'],
        ]);

        $service->update($validated);

        return redirect()->route('client.services.index')->with('success', 'Layanan berhasil diperbarui!');
    }

    public function toggleStatus(Service $service): RedirectResponse
    {
        $service->update(['is_active' => ! $service->is_active]);

        return back()->with('success', 'Status layanan berhasil diubah!');
    }
}
