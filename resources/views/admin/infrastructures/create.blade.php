<x-app-layout full-width="true">
    <x-slot name="header">
        <div>
            <p class="text-sm text-gray-500">Admin Panel · Infrastruktur</p>
            <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
                Tambah Infrastruktur Baru
            </h2>
        </div>
    </x-slot>

    @include('admin.infrastructures.partials.form', [
        'action' => route('admin.infrastructures.store'),
        'method' => 'POST',
        'submitLabel' => 'Simpan Infrastruktur'
    ])
</x-app-layout>
