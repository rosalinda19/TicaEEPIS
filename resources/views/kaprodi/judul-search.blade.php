<x-temp-layout>
    <div class="max-w-5xl mx-auto bg-third rounded-lg shadow-lg p-6 header-bg my-8">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold text-gray-700">Pengajuan Judul</h1>
            <div class="flex items-center space-x-4">
                <button class="bg-primary text-white px-4 py-2 rounded shadow hover:bg-blue-600">Count :
                    {!! $count !!}</button>
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
                            Tahun Angkatan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tahun Ajaran
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tanggal Upload
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Semester
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Judul Tesis
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Dosen Pembimbing 1
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Dosen Pembimbing 2
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Dosen Pembimbing 3
                        </th>
                    </tr>
                </thead>
                <tbody id="tableBody">
                    @foreach ($judul as $item)
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
                                {{ $item->tahun_angkatan }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->tahun_ajaran }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->tanggal_upload }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->semester }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->judul_penelitian }}
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
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-temp-layout>
