<x-app-layout full-width="true">
    <x-slot name="header">
        <div>
            <p class="text-sm text-gray-500">Admin Panel · Infrastruktur</p>
            <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
                Edit Infrastruktur
            </h2>
        </div>
    </x-slot>

    @include('admin.infrastructures.partials.form', [
        'action' => route('admin.infrastructures.update', $infrastructure),
        'method' => 'PUT',
        'submitLabel' => 'Perbarui Infrastruktur'
    ])
</x-app-layout>

