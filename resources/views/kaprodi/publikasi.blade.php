<x-temp-layout>
    <div class="max-w-5xl mx-auto bg-third rounded-lg shadow-lg p-6 header-bg my-8">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold text-gray-700">Publikasi</h1>
            <div class="flex items-center space-x-4">
                <input type="text" placeholder="Search" class="border border-gray-300 rounded p-2">
                <button class="bg-primary text-white px-4 py-2 rounded shadow hover:bg-blue-600">Search</button>
            </div>
        </div>
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No.
                        </th>
                        <th scope="col" class="px-6 py-3">
                            NRP Mahasiswa
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Mahasiswa
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Program Studi
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Judul
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Pembimbing 1
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Pembimbing 2
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Pembimbing 3
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Judul Publikasi
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status Publikasi
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jenis Jurnal
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Volume dan Nomer
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Halaman Publikasi
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tahun Publikasi
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Link Dokumen
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Judul Seminar
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Urutan Penulis Seminar
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status Seminar
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jenis Seminar
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Seminar
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Penyelenggara Seminar
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tahun Seminar
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Link Dokumen Seminar
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($publikasi as $item)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $loop->iteration }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $item->nrp }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->nama }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->prodi }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->judul }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->dosen_pembimbing1 }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->dosen_pembimbing2 }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->dosen_pembimbing3 }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->judul }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->status }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->jenis_jurnal }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->volume_dan_nomor }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->halaman }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->tahun }}
                            </td>
                            <td class="border p-2 text-center icon-cell"><i class="fa fa-file"></i></td>
                            <td class="px-6 py-4">
                                {{ $item->judul_seminar }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->urutan_penulis_seminar }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->status_seminar }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->jenis_seminar }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->nama_seminar }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->penyelenggara }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->tahun_seminar }}
                            </td>
                            <td class="border p-2 text-center icon-cell"><i class="fa fa-file"></i></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-temp-layout>
