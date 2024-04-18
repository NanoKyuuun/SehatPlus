<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Show Konsultasi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="min-w-full border-collapse border border-gray-300">
                        <tbody>
                            <tr>
                                <td class="border border-gray-300 px-4 py-2 font-semibold">Nama</td>
                                <td class="border border-gray-300 px-4 py-2">{{ auth()->user()->name }}</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-4 py-2 font-semibold">Tanggal</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $konsultasi->tanggal_konsultasi }}</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-4 py-2 font-semibold">Keluhan</td>
                                <td class="border border-gray-300 px-4 py-2">{!! $konsultasi->keluhan !!}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>