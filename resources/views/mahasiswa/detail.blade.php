<x-temp-layout>
    <div class="max-w-7xl mx-auto py-1 px-1">
        @if ($final)
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-12">
                <div class="bg-third rounded shadow-lg mb-6">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div class="container">
                            <div class="border-b border-blue-200 mb-4 pb-2">
                                <h2 class="font-bold text-xl mb-2">Final Tesis</h2>
                            </div>
                            <div class="pl-6 pt-3 text-white font-medium">
                                <div class="grid grid-cols-3 gap-2 mb-2">
                                    <span class="font-semibold col-span-1">NRP</span>
                                    <span class="col-span-2">: {{ $final->nrp }}</span>
                                </div>
                                <div class="grid grid-cols-3 gap-2 mb-2">
                                    <span class="font-semibold col-span-1">Nama Mahasiswa</span>
                                    <span class="col-span-2">: {{ $final->nama }}</span>
                                </div>
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
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-12">
                <div class="bg-third rounded shadow-lg mb-6">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div class="container">
                            <div class="border-b border-blue-200 mb-4 pb-2">
                                <h2 class="font-bold text-xl mb-2">Progress Tesis 2</h2>
                            </div>
                            <div class="pl-6 pt-3 text-white font-medium">
                                <div class="grid grid-cols-3 gap-2 mb-2">
                                    <span class="font-semibold col-span-1">NRP</span>
                                    <span class="col-span-2">: {{ $tesis_2->nrp }}</span>
                                </div>
                                <div class="grid grid-cols-3 gap-2 mb-2">
                                    <span class="font-semibold col-span-1">Nama Mahasiswa</span>
                                    <span class="col-span-2">: {{ $tesis_2->nama }}</span>
                                </div>
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
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-12">
                <div class="bg-third rounded shadow-lg mb-6">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div class="container">
                            <div class="border-b border-blue-200 mb-4 pb-2">
                                <h2 class="font-bold text-xl mb-2">Progress Tesis 1</h2>
                            </div>
                            <div class="pl-6 pt-3 text-white font-medium">
                                <div class="grid grid-cols-3 gap-2 mb-2">
                                    <span class="font-semibold col-span-1">NRP</span>
                                    <span class="col-span-2">: {{ $tesis_1->nrp }}</span>
                                </div>
                                <div class="grid grid-cols-3 gap-2 mb-2">
                                    <span class="font-semibold col-span-1">Nama Mahasiswa</span>
                                    <span class="col-span-2">: {{ $tesis_1->nama }}</span>
                                </div>
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
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-12">
                <div class="bg-third rounded shadow-lg mb-6">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div class="container">
                            <div class="border-b border-blue-200 mb-4 pb-2">
                                <h2 class="font-bold text-xl mb-2">Proposal Tesis</h2>
                            </div>
                            <div class="pl-6 pt-3 text-white font-medium">
                                <div class="grid grid-cols-3 gap-2 mb-2">
                                    <span class="font-semibold col-span-1">NRP</span>
                                    <span class="col-span-2">: {{ $proposal->nrp }}</span>
                                </div>
                                <div class="grid grid-cols-3 gap-2 mb-2">
                                    <span class="font-semibold col-span-1">Nama Mahasiswa</span>
                                    <span class="col-span-2">: {{ $proposal->nama }}</span>
                                </div>
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
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-12">
                <div class="bg-third rounded shadow-lg mb-6">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div class="container">
                            <div class="border-b border-blue-200 mb-4 pb-2">
                                <h2 class="font-bold text-xl mb-2">Pengajuan Judul</h2>
                            </div>
                            <div class="pl-6 pt-3 text-white font-medium">
                                <div class="grid grid-cols-3 gap-2 mb-2">
                                    <span class="font-semibold col-span-1">NRP</span>
                                    <span class="col-span-2">: {{ $judul->nrp }}</span>
                                </div>
                                <div class="grid grid-cols-3 gap-2 mb-2">
                                    <span class="font-semibold col-span-1">Nama Mahasiswa</span>
                                    <span class="col-span-2">: {{ $judul->nama }}</span>
                                </div>
                                <div class="grid grid-cols-3 gap-2 mb-2">
                                    <span class="font-semibold col-span-1">Program Studi</span>
                                    <span class="col-span-2">: {{ $judul->prodi }}</span>
                                </div>
                                <div class="grid grid-cols-3 gap-2 mb-2">
                                    <span class="font-semibold col-span-1">Tahun Angkatan</span>
                                    <span class="col-span-2">: {{ $judul->tahun_angkatan }}</span>
                                </div>
                                <div class="grid grid-cols-3 gap-2 mb-2">
                                    <span class="font-semibold col-span-1">Tahun Ajaran</span>
                                    <span class="col-span-2">: {{ $judul->tahun_ajaran }}</span>
                                </div>
                                <div class="grid grid-cols-3 gap-2 mb-2">
                                    <span class="font-semibold col-span-1">Semester</span>
                                    <span class="col-span-2">: {{ $judul->semester }}</span>
                                </div>
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
