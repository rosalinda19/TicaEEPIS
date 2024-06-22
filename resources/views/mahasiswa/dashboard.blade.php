<x-temp-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tracking Progres') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto py-1 px-1">
        @if ($final)
            <div class="inline-flex items-end py-6">
                <button class="bg-primary text-white font-bold py-2 px-4 rounded"
                    type="">{{ $final->created_at }}</button>
            </div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-12">
                <div class="bg-third rounded shadow-lg mb-6">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div class="container">
                            <div class="border-b border-blue-200 mb-4 pb-2">
                                <h2 class="font-bold text-xl mb-2">Final Tesis</h2>
                            </div>
                            <div class="pl-6 pt-3 text-white font-medium">
                                <div class="grid grid-cols-3 gap-2 mb-2">
                                    <span class="font-semibold col-span-1">Tanggal Upload</span>
                                    <span class="col-span-2">: {{ $final->created_at }}</span>
                                </div>
                                <div class="grid grid-cols-3 gap-2 mb-2">
                                    <span class="font-semibold col-span-1">Jam</span>
                                    <span class="col-span-2">: {{ $final->created_at }}</span>
                                </div>
                                <div class="grid grid-cols-3 gap-2 mb-2">
                                    <span class="font-semibold col-span-1">Judul Tesis</span>
                                    <span class="col-span-2">: {{ $final->judul_penelitian }}</span>
                                </div>
                                <div class="grid grid-cols-3 gap-2 mb-2">
                                    <span class="font-semibold col-span-1">File Final Tesis</span>
                                    <span class="col-span-2">: {{ $final->laporan }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        @if ($tesis_2)
            <div class="inline-flex items-end py-6">
                <button class="bg-primary text-white font-bold py-2 px-4 rounded"
                    type="">{{ $tesis_2->created_at }}</button>
            </div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-12">
                <div class="bg-third rounded shadow-lg mb-6">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div class="container">
                            <div class="border-b border-blue-200 mb-4 pb-2">
                                <h2 class="font-bold text-xl mb-2">Progress Tesis 2</h2>
                            </div>
                            <div class="pl-6 pt-3 text-white font-medium">
                                <div class="grid grid-cols-3 gap-2 mb-2">
                                    <span class="font-semibold col-span-1">Tanggal Upload</span>
                                    <span class="col-span-2">: {{ $tesis_2->created_at }}</span>
                                </div>
                                <div class="grid grid-cols-3 gap-2 mb-2">
                                    <span class="font-semibold col-span-1">Jam</span>
                                    <span class="col-span-2">: {{ $tesis_2->created_at }}</span>
                                </div>
                                <div class="grid grid-cols-3 gap-2 mb-2">
                                    <span class="font-semibold col-span-1">Judul Tesis</span>
                                    <span class="col-span-2">: {{ $tesis_2->judul_penelitian }}</span>
                                </div>
                                <div class="grid grid-cols-3 gap-2 mb-2">
                                    <span class="font-semibold col-span-1">File Progres Tesis 2</span>
                                    <span class="col-span-2">: {{ $tesis_2->laporan }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        @if ($tesis_1)
            <div class="inline-flex items-end py-6">
                <button class="bg-primary text-white font-bold py-2 px-4 rounded"
                    type="">{{ $tesis_1->created_at }}</button>
            </div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-12">
                <div class="bg-third rounded shadow-lg mb-6">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div class="container">
                            <div class="border-b border-blue-200 mb-4 pb-2">
                                <h2 class="font-bold text-xl mb-2">Progress Tesis 1</h2>
                            </div>
                            <div class="pl-6 pt-3 text-white font-medium">
                                <div class="grid grid-cols-3 gap-2 mb-2">
                                    <span class="font-semibold col-span-1">Tanggal Upload</span>
                                    <span class="col-span-2">: {{ $tesis_1->created_at }}</span>
                                </div>
                                <div class="grid grid-cols-3 gap-2 mb-2">
                                    <span class="font-semibold col-span-1">Jam</span>
                                    <span class="col-span-2">: {{ $tesis_1->created_at }}</span>
                                </div>
                                <div class="grid grid-cols-3 gap-2 mb-2">
                                    <span class="font-semibold col-span-1">Judul Tesis</span>
                                    <span class="col-span-2">: {{ $tesis_1->judul_penelitian }}</span>
                                </div>
                                <div class="grid grid-cols-3 gap-2 mb-2">
                                    <span class="font-semibold col-span-1">File Progres Tesis 1</span>
                                    <span class="col-span-2">: {{ $tesis_1->laporan }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        @if ($proposal)
            <div class="inline-flex items-end py-6">
                <button class="bg-primary text-white font-bold py-2 px-4 rounded"
                    type="">{{ $proposal->created_at }}</button>
            </div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-12">
                <div class="bg-third rounded shadow-lg mb-6">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div class="container">
                            <div class="border-b border-blue-200 mb-4 pb-2">
                                <h2 class="font-bold text-xl mb-2">Proposal Tesis</h2>
                            </div>
                            <div class="pl-6 pt-3 text-white font-medium">
                                <div class="grid grid-cols-3 gap-2 mb-2">
                                    <span class="font-semibold col-span-1">Tanggal Upload</span>
                                    <span class="col-span-2">: {{ $proposal->created_at }}</span>
                                </div>
                                <div class="grid grid-cols-3 gap-2 mb-2">
                                    <span class="font-semibold col-span-1">Jam</span>
                                    <span class="col-span-2">: {{ $proposal->created_at }}</span>
                                </div>
                                <div class="grid grid-cols-3 gap-2 mb-2">
                                    <span class="font-semibold col-span-1">Judul Tesis</span>
                                    <span class="col-span-2">: {{ $proposal->judul_penelitian }}</span>
                                </div>
                                <div class="grid grid-cols-3 gap-2 mb-2">
                                    <span class="font-semibold col-span-1">File Proposal Tesis</span>
                                    <span class="col-span-2">: {{ $proposal->laporan }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        @if ($judul)
            <div class="inline-flex items-end py-6">
                <button class="bg-primary text-white font-bold py-2 px-4 rounded"
                    type="">{{ $judul->created_at }}</button>
            </div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-12">
                <div class="bg-third rounded shadow-lg mb-6">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div class="container">
                            <div class="border-b border-blue-200 mb-4 pb-2">
                                <h2 class="font-bold text-xl mb-2">Pengajuan Judul</h2>
                            </div>
                            <div class="pl-6 pt-3 text-white font-medium">
                                <div class="grid grid-cols-3 gap-2 mb-2">
                                    <span class="font-semibold col-span-1">Judul Tesis</span>
                                    <span class="col-span-2">: {{ $judul->judul_penelitian }}</span>
                                </div>
                                <div class="grid grid-cols-3 gap-2 mb-2">
                                    <span class="font-semibold col-span-1">Dosen Pembimbing</span>
                                    <span class="col-span-2">: </span>
                                </div>
                                <div class="grid grid-cols-3 gap-2 mb-2">
                                    <span class="font-semibold col-span-1">1. {{ $judul->dosen_pembimbing1 }}</span>
                                </div>
                                <div class="grid grid-cols-3 gap-2 mb-2">
                                    <span class="font-semibold col-span-1">2. {{ $judul->dosen_pembimbing2 }}</span>
                                </div>
                                <div class="grid grid-cols-3 gap-2 mb-2">
                                    <span class="font-semibold col-span-1">3. {{ $judul->dosen_pembimbing3 }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</x-temp-layout>
