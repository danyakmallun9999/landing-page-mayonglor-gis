<x-app-layout full-width="true">
    <x-slot name="header">
        <div>
            <p class="text-sm text-gray-500">Admin Panel · Batas Wilayah</p>
            <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
                Tambah Batas Wilayah Baru
            </h2>
        </div>
    </x-slot>

    @include('admin.boundaries.partials.form', [
        'action' => route('admin.boundaries.store'),
        'method' => 'POST',
        'submitLabel' => 'Simpan Batas Wilayah'
    ])
</x-app-layout>
