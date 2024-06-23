<x-temp-layout>
    <div class="max-w-5xl mx-auto bg-third rounded-lg shadow-lg p-6 header-bg my-8">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold text-gray-700">Revisi Tesis</h1>
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
                            Judul
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jenis Revisi
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tanggal Upload
                        </th>
                        <th scope="col" class="px-6 py-3">
                            File Revisi
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Catatan
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($revisi as $revisi)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $loop->iteration }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $revisi->nrp }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $revisi->nama }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $revisi->judul }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $revisi->jenis_seminar }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $revisi->tanggal_upload }}
                            </td>
                            <td class="border p-2 text-center icon-cell">
                                <a href="{{ asset('storage/' . $revisi->file_revisi) }}" target="_blank"><i
                                        class="fa fa-file"></i></a>
                            </td>
                            <td class="px-6 py-4">
                                {{ $revisi->catatan }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-temp-layout>
