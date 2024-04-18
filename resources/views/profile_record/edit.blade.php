<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ __('Profile Information') }}
                            </h2>
                    
                            <p class="mt-1 text-sm text-gray-600">
                                {{ __("Update your account's profile information and email address.") }}
                            </p>
                        </header>
                        <div class="p-6 text-gray-900">
                            @if (session()->has('success'))
                                <div class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-200" role="alert" id="alert">
                                    <div class="ms-3 text-sm font-medium">
                                        {{ session('success') }}
                                    </div>
                                    <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8" onclick="closeAlert()" aria-label="Close">
                                        <span class="sr-only">Close</span>
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                    </button>
                                </div>
                            @endif
        
                            <script>
                                function closeAlert() {
                                    var alert = document.getElementById('alert');
                                    alert.style.display = 'none';
                                }
                            </script>
                        <form method="post" action="{{ route('profile_record.update') }}" class="mt-6 space-y-6">
                            @csrf
                            @method('patch')
                            <div>
                                <x-input-label for="tanggal_lahir" :value="__('Tanggal Lahir')" />
                                <x-text-input id="tanggal_lahir" name="tanggal_lahir" type="date" class="mt-1 block w-full" :value="old('tanggal_lahir',$profileRecord ? $profileRecord->tanggal_lahir : '')" required autocomplete="tanggal_lahir" />
                                <x-input-error class="mt-2" :messages="$errors->get('tanggal_lahir')" />
                            </div>
                            <div>
                                <x-input-label for="alamat" :value="__('Alamat')" />
                                <x-text-input id="alamat" name="alamat" type="text" class="mt-1 block w-full" :value="old('alamat', $profileRecord ? $profileRecord->alamat : '' )" required autocomplete="alamat" />
                                <x-input-error class="mt-2" :messages="$errors->get('alamat')" />
                            </div>
                            <div>
                            <label for="role" class="block mb-2 text-sm font-medium text-gray-900">jenis Kelamin</label>
                            <select id="jenis_kelamin" name="jenis_kelamin" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                    <option value="Laki-laki">Laki laki</option>
                                    <option value="Perempuan">Perempuan</option>
                            </select>
                            </div>
                            <div>
                                <x-input-label for="nomor_telepon" :value="__('Nomor telepon')" />
                                <x-text-input id="nomor_telepon" name="nomor_telepon" type="text" class="mt-1 block w-full" :value="old('nomor_telepon', $profileRecord ? $profileRecord->alamat : '' )" required autocomplete="nomor_telepon" />
                                <x-input-error class="mt-2" :messages="$errors->get('nomor_telepon')" />
                            </div>
                    
                            <div class="flex items-center gap-4">
                                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Update</button>
                            </div>
                        </form>
                    </section>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>