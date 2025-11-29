<x-app-layout full-width="true">
    <x-slot name="header">
        <div>
            <p class="text-sm text-gray-500">Admin Panel · Penggunaan Lahan</p>
            <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
                Edit Penggunaan Lahan
            </h2>
        </div>
    </x-slot>

    @include('admin.land_uses.partials.form', [
        'action' => route('admin.land-uses.update', $landUse),
        'method' => 'PUT',
        'submitLabel' => 'Perbarui Penggunaan Lahan'
    ])
</x-app-layout>
