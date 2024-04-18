<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
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
                                <td class="border border-gray-300 px-4 py-2 font-semibold">Diagnosis</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $data_obat->resep_obats[0]->diagnisis }}</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-4 py-2 font-semibold">Obat</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $data_obat->resep_obats[0]->obat }}</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-4 py-2 font-semibold">Dosis</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $data_obat->resep_obats[0]->dosis }}</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-4 py-2 font-semibold">Aturan Minum</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $data_obat->resep_obats[0]->aturan_minum }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="/dashboard/resep-obat/{{ $data_obat->id }}/download/pdf" target="_blank" class="mr-2">
                        <button type="submit" class="inline-flex items-center mt-4 px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-wides">Download Resep</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>