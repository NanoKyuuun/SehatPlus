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
                    <form action="{{ route('konsultasi.store' )}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-5">
                            <label for="tanggal_konsultasi" class="block mb-2 text-sm font-medium text-gray-900">Tanggal Konsultasi</label>
                            <input type="date" id="tanggal_konsultasi" name="tanggal_konsultasi" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Tanggal Konsultasi" value="{{ old('tanggal_konsultasi') }}" required />
                            <x-input-error :messages="$errors->get('tanggal_konsultasi')" class="mt-2" />
                        </div>
                        @if (auth()->user()->hasRole('admin') || auth()->user()->hasRole('pasien'))
                        <div class="mb-5">
                            <label for="keluhan" class="block mb-2 text-sm font-medium text-gray-900">Keluhan</label>
                            <input id="keluhan" type="hidden" name="keluhan" value="{{ old('keluhan') }}">
                            <trix-editor input="keluhan"></trix-editor>
                            <x-input-error :messages="$errors->get('keluhan')" class="mt-2" />
                        </div>
                        @else
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Keluhan</label>
                        <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" readonly placeholder="Your keluhan...">Hanya Pasien yang bisa isi</textarea>
                        @endif
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>