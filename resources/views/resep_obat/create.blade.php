<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Konsultasi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                        <form method="post" action="/dashboard/resep-obat/" class="mt-6 space-y-6">
                        @csrf
                        <div>
                            <x-input-label for="konsultasi_medis_id" :value="__('Konsultasi Id')" />
                            <x-text-input id="konsultasi_medis_id" name="konsultasi_medis_id" type="text" class="mt-1 block w-full" :value="old('konsultasi_medis_id', $data->id)" required autocomplete="konsultasi_medis_id" readonly/>
                            <x-input-error class="mt-2" :messages="$errors->get('konsultasi_medis_id')" />
                        </div>
                        <div>
                            <x-input-label for="diagnisis" :value="__('Diagnosa')" />
                            <x-text-input id="diagnisis" name="diagnisis" type="text" class="mt-1 block w-full" :value="old('diagnisis')" required autocomplete="diagnisis" />
                            <x-input-error class="mt-2" :messages="$errors->get('diagnisis')" />
                        </div>
                        <div>
                            <x-input-label for="obat" :value="__('Obat')" />
                            <x-text-input id="obat" name="obat" type="text" class="mt-1 block w-full" :value="old('obat')" required autocomplete="obat" />
                            <x-input-error class="mt-2" :messages="$errors->get('obat')" />
                        </div>
                        <div>
                            <x-input-label for="dosis" :value="__('dosis')" />
                            <x-text-input id="dosis" name="dosis" type="text" class="mt-1 block w-full" :value="old('dosis')" required autocomplete="dosis" />
                            <x-input-error class="mt-2" :messages="$errors->get('dosis')" />
                        </div>
                        <div>
                            <x-input-label for="aturan_minum" :value="__('Aturan Minum')" />
                            <x-text-input id="aturan_minum" name="aturan_minum" type="text" class="mt-1 block w-full" :value="old('aturan_minum')" required autocomplete="aturan_minum" />
                            <x-input-error class="mt-2" :messages="$errors->get('aturan_minum')" />
                        </div>
                        <div class="flex items-center gap-4">
                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>