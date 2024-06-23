<head>
    <style>
        .text-justify {
            text-align: justify;
        }
    </style>
</head>
<x-temp-layout>
    <div class="max-w-5xl mx-auto bg-third rounded-lg shadow-lg p-6 header-bg my-8">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold text-gray-700">Pengajuan Judul</h1>
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
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            1
                        </th>
                        <td class="px-6 py-4">
                            3120600002
                        </td>
                        <td class="px-6 py-4">
                            Krisna Wahyu Setyawan
                        </td>
                        <td class="px-6 py-4">
                            Teknik Informatika
                        </td>
                        <td class="px-6 py-4">
                            2017
                        </td>
                        <td class="px-6 py-4">
                            2021/2022
                        </td>
                        <td class="px-6 py-4">
                            2021-08-12
                        </td>
                        <td class="px-6 py-4">
                            2
                        </td>
                        <td class="px-6 py-4">
                            Klasifikasi Neural Network Untuk Meperkirakan Tingkat Gagal Panen Tanaman Jagung
                        </td>
                        <td class="px-6 py-4">
                            Dr.Setiawardhana, S.T.,M.T
                        </td>
                        <td class="px-6 py-4">
                            Dr.Arna Fariza, S.Kom, M.Kom
                        </td>
                        <td class="px-6 py-4">
                            Dian Septiani Santoso M. Kom.
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            2
                        </th>
                        <td class="px-6 py-4">
                            3120600006
                        </td>
                        <td class="px-6 py-4">
                            Rosalinda Dwi Vicesa
                        </td>
                        <td class="px-6 py-4">
                            Teknik Informatika
                        </td>
                        <td class="px-6 py-4">
                            2017
                        </td>
                        <td class="px-6 py-4">
                            2021/2022
                        </td>
                        <td class="px-6 py-4">
                            2021-08-12
                        </td>
                        <td class="px-6 py-4">
                            2
                        </td>
                        <td class="px-6 py-4">
                            Antisipasi Penyakit Osteoporosis dengan Analisan Hasil Rontgen menggunakan Metode CNN
                        </td>
                        <td class="px-6 py-4">
                            Prof Iwan Syarif, S.Kom., M.Kom., M.Sc., Ph.D.
                        </td>
                        <td class="px-6 py-4">
                            Dr.Arna Fariza, S.Kom, M.Kom
                        </td>
                        <td class="px-6 py-4">
                            Dian Septiani Santoso M. Kom.
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-temp-layout>