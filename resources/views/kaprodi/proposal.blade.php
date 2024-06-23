<x-temp-layout>
    <div class="max-w-5xl mx-auto bg-third rounded-lg shadow-lg p-6 header-bg my-8">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold text-gray-700">Proposal Tesis</h1>
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
                            Laporan Proposal
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Persetujuan Maju Sidang
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Penerima Naskah
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Lembar Monitoring
                        </th>
                        <th scope="col" class="px-6 py-3">
                            PPT
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($proposal as $proposal)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $loop->iteration }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $proposal->nrp }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $proposal->nama }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $proposal->judul }}
                            </td>
                            <td class="border p-2 text-center icon-cell">
                                <a href="{{ asset('storage/' . $proposal->laporan) }}" target="_blank"><i
                                        class="fa fa-file"></i></a>
                            </td>
                            <td class="border p-2 text-center icon-cell">
                                <a href="{{ asset('storage/' . $proposal->seminar_tesis) }}" target="_blank"><i
                                        class="fa fa-file"></i></a>
                            </td>
                            <td class="border p-2 text-center icon-cell">
                                <a href="{{ asset('storage/' . $proposal->penerima_naskah) }}" target="_blank"><i
                                        class="fa fa-file"></i></a>
                            </td>
                            <td class="border p-2 text-center icon-cell">
                                <a href="{{ asset('storage/' . $proposal->lembar_monitoring) }}" target="_blank"><i
                                        class="fa fa-file"></i></a>
                            </td>
                            <td class="border p-2 text-center icon-cell">
                                <a href="{{ asset('storage/' . $proposal->ppt) }}" target="_blank"><i
                                        class="fa fa-file"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-temp-layout>
