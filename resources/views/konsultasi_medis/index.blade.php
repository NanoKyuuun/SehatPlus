<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Konsultasi Medis') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
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

                    <a href="/dashboard/konsultasi-medis/create" class="mr-2">
                        <button type="submit" class="inline-flex items-center px-4 py-2 mb-4 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-wides">Ajukan Konsultasi</button>
                    </a>
                    <table class="w-full text-sm text-left rtl:text-right">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                            <tr>
                                <th scope="col" class="px-6 py-3">No</th>
                                <th scope="col" class="px-6 py-3">Tanggal Konsultasi</th>
                                <th scope="col" class="px-6 py-3">Keluhan</th>
                                <th scope="col" class="px-6 py-3">Actions</th>
                                <th scope="col" class="px-6 py-3">Obat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($konsultasi as $item)
                            <tr class="bg-white border-b ">
                                <td class="px-6 py-4">{{ $loop->iteration }}</td>
                                <td class="px-6 py-4">{{$item->tanggal_konsultasi}}</td>
                                <td class="px-6 py-4">{!! $item->keluhan !!}</td>
                                @if (auth()->user()->hasRole('pasien'))
                                <td class="px-6 py-4">
                                    <div class="flex">
                                        <a href="/dashboard/konsultasi-medis/{{ $item->id }}/edit" class="mr-2">
                                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-wides">Edit</button>
                                        </a>
                                    
                                        <!-- Tag <form> -->
                                        <form action="/dashboard/konsultasi-medis/{{ $item->id }}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-wides">Delete</button>
                                        </form>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex">
                                        @if ($item->resep_obats->isNotEmpty() && $item->resep_obats[0]->id)
                                            <a href="/dashboard/resep-obat/{{ $item->id }}" class="mr-2">
                                                <button type="button" class="inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-wides">Resep Obat</button>
                                            </a>
                                        @else
                                            <a href="" class="mr-2">
                                                <button type="button" class="inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-wides">Obat OTW</button>
                                            </a>
                                        @endif
                                    </div>
                                </td>
                                @endif
                                @if (auth()->user()->hasRole('dokter'))
                                <td class="px-6 py-4">
                                    <div class="flex">
                                        <a href="/dashboard/konsultasi-medis/{{ $item->id }}" class="mr-2">
                                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-wides">Lihat</button>
                                        </a>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex">
                                        @if (empty($item->resep_obats[0]))
                                        <a href="/dashboard/resep-obat/create/{{ $item->id }}" class="mr-2">
                                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-wides">Tambah</button>
                                        </a>
                                        <form action="" method="POST">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-wides">Belum ada Obat</button>
                                        </form>
                                        @else
                                        <a href="/dashboard/resep-obat/{{ $item->id }}/edit" class="mr-2">
                                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-wides">edit</button>
                                        </a>
                                        <form action="/dashboard/resep-obat/{{ $item->resep_obats[0]->id }}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-wides">Delete</button>
                                        </form>
                                        @endif
                                    </div>
                                </td>
                                @endif
                                @if (auth()->user()->hasRole('admin'))
                                <td class="px-6 py-4">
                                    <div class="flex">
                                        <a href="/dashboard/konsultasi-medis/{{ $item->id }}" class="mr-2">
                                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-wides">Lihat</button>
                                        </a>
                                        <a href="/dashboard/konsultasi-medis/{{ $item->id }}/edit" class="mr-2">
                                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-wides">Edit</button>
                                        </a>
                                    
                                        <!-- Tag <form> -->
                                        <form action="/dashboard/konsultasi-medis/{{ $item->id }}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-wides">Delete</button>
                                        </form>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex">
                                        @if ($item->resep_obats->isNotEmpty() && $item->resep_obats[0]->id)
                                            <a href="/dashboard/resep-obat/{{ $item->id }}" class="mr-2">
                                                <button type="button" class="inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-wides">Resep Obat</button>
                                            </a>
                                        @else
                                            <a href="" class="mr-2">
                                                <button type="button" class="inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-wides">Obat OTW</button>
                                            </a>
                                        @endif
                                        @if (empty($item->resep_obats[0]))
                                        <a href="/dashboard/resep-obat/create/{{ $item->id }}" class="mr-2">
                                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-wides">Tambah</button>
                                        </a>
                                        <form action="" method="POST">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-wides">Belum ada Obat</button>
                                        </form>
                                        @else
                                        <a href="/dashboard/resep-obat/{{ $item->id }}/edit" class="mr-2">
                                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-wides">edit</button>
                                        </a>
                                        <form action="/dashboard/resep-obat/{{ $item->resep_obats[0]->id }}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-wides">Delete</button>
                                        </form>
                                        @endif
                                    </div>
                                </td>
                                @endif
                            </tr> 
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>