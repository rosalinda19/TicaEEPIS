<x-temp-layout>
    <div class="min-h-screen p-6 bg-gray-100 flex items-center justify-center">
        <div class="container max-w-screen-lg mx-auto">
            <div>
                <div class="bg-third rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                        <h2 class="font-semibold text-xl text-black">Pengajuan Judul</h2>
                        <div class="lg:col-span-3">
                            <form method="POST" action="{{ route('mahasiswa.pengajuan-judul') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                    <div class="md:col-span-5">
                                        <label for="nama_mahasiswa">Nama Mahasiswa</label>
                                        <input type="text" name="nama_mahasiswa" id="nama_mahasiswa"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                    </div>
                                    <div class="md:col-span-5">
                                        <label for="NRP">NRP</label>
                                        <input type="text" name="NRP" id="NRP"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                    </div>
                                    <div class="md:col-span-5">
                                        <label for="Program_Study">Program Studi</label>
                                        <input type="text" name="Program_Study" id="Program_Study"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                    </div>
                                    <div class="md:col-span-5">
                                        <label for="judul_tesis">Judul Tesis</label>
                                        <input type="text" name="judul_tesis" id="judul_tesis"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                    </div>

                                    <div class="md:col-span-5">
                                        <label for="dosen_pembimbing1">Dosen Pembimbing</label>
                                        <input type="text" name="dosen_pembimbing1" id="dosen_pembimbing1"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""
                                            placeholder="Dosen Pembimbing 1" />
                                    </div>
                                    <div class="md:col-span-5">
                                        <input type="text" name="dosen_pembimbing2" id="dosen_pembimbing2"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""
                                            placeholder="Dosen Pembimbing 2" />
                                    </div>
                                    <div class="md:col-span-5">
                                        <input type="text" name="dosen_pembimbing3" id="dosen_pembimbing3"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""
                                            placeholder="Dosen Pembimbing 3" />
                                    </div>
                                    <h3 class="font-semibold text-xl text-black">Data Publikasi Jurnal</h3>
                                    <div class="md:col-span-5">
                                        <label for="judul">Judul</label>
                                        <input type="text" name="judul" id="judul"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                    </div>
                                    <div class="md:col-span-5">
                                        <label for="urutan_penulis">Urutan Penulis</label>
                                        <input type="text" name="urutan_penulis" id="urutan_penulis"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                    </div>
                                    <div class="md:col-span-5">
                                        <label for="status">Status</label>
                                        <input type="text" name="status" id="status"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                    </div>
                                    <div class="md:col-span-5">
                                        <label for="jenis_jurnal">Jenis Jurnal</label>
                                        <input type="text" name="jenis_jurnal" id="jenis_jurnal"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                    </div>
                                    <div class="md:col-span-5">
                                        <label for="nama_jurnal">Nama Jurnal</label>
                                        <input type="text" name="nama_jurnal" id="nama_jurnal"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                    </div>
                                    <div class="md:col-span-5">
                                        <label for="volume_nomer">Volume dan Nomer</label>
                                        <input type="text" name="volumen_nomer" id="volume_nomer"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                    </div>
                                    <div class="md:col-span-5">
                                        <label for="Halaman">Halaman</label>
                                        <input type="text" name="Halaman" id="Halaman"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                    </div>
                                    <div class="md:col-span-5">
                                        <label for="tahun">Tahun</label>
                                        <input type="text" name="tahun" id="tahun"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                    </div>
                                    <div class="md:col-span-5">
                                        <label for="link_dokumen">Link Dokumen</label>
                                        <input type="text" name="link_dokumen" id="link_dokumen"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                    </div>
                                    <h3 class="font-semibold text-xl text-black">Data Publikasi Seminar</h3>
                                    <div class="md:col-span-5">
                                        <label for="judul">Judul</label>
                                        <input type="text" name="judul" id="judul"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                    </div>
                                    <div class="md:col-span-5">
                                        <label for="urutan_penulis">Urutan Penulis</label>
                                        <input type="text" name="urutan_penulis" id="urutan_penulis"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                    </div>
                                    <div class="md:col-span-5">
                                        <label for="status">Status</label>
                                        <input type="text" name="status" id="status"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                    </div>
                                    <div class="md:col-span-5">
                                        <label for="jenis_seminar">Jenis Seminar</label>
                                        <input type="text" name="jenis_seminar" id="jenis_seminar"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                    </div>
                                    <div class="md:col-span-5">
                                        <label for="nama_Seminar">Nama Seminar</label>
                                        <input type="text" name="nama_seminar" id="nama_seminar"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                    </div>
                                    <div class="md:col-span-5">
                                        <label for="penyelenggara">Penyelenggara</label>
                                        <input type="text" name="penyelenggara" id="penyelenggara"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                    </div>
                                    <div class="md:col-span-5">
                                        <label for="tahun">Tahun</label>
                                        <input type="text" name="tahun" id="tahun"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                    </div>
                                    <div class="md:col-span-5">
                                        <label for="link_dokumen">Link Dokumen</label>
                                        <input type="text" name="link_dokumen" id="link_dokumen"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                    </div>
                                    <div class="md:col-span-5 text-right">
                                        <div class="inline-flex items-end">
                                            <button onclick="window.history.back()"
                                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                                                type="button">Kembali</button>
                                            <button
                                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                                                type="submit">Kirim</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-temp-layout>

{{-- 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Publikasi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 60%;
            margin: auto;
            background-color: #cfe2f3;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
        }

        form {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .form-group {
            width: 48%;
            margin-bottom: 20px;
        }

        .form-group.full-width {
            width: 100%;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Form Publikasi</h1>
        @if (session('success'))
        <div style="color: green;">{{ session('success') }}</div>
        @endif
        <form action="/mahasiswa/publikasi" method="post">
            @csrf
            <div class="form-group">
                <label for="nama_mahasiswa">Nama Mahasiswa</label>
                <input type="text" id="nama_mahasiswa" name="nama_mahasiswa" required>
            </div>
            <div class="form-group">
                <label for="nrp">NRP</label>
                <input type="text" id="nrp" name="nrp" required>
            </div>
            <div class="form-group">
                <label for="program_studi">Program Studi</label>
                <input type="text" id="program_studi" name="program_studi" required>
            </div>
            <div class="form-group">
                <label for="pembimbing">Pembimbing</label>
                <input type="text" id="pembimbing" name="pembimbing" required>
            </div>
            <div class="form-group full-width">
                <label for="judul_tesis">Judul Tesis</label>
                <textarea id="judul_tesis" name="judul_tesis" rows="3" required></textarea>
            </div>
            <div class="form-group full-width">
                <h3>Data Publikasi Jurnal</h3>
            </div>
            <div class="form-group">
                <label for="judul_jurnal">Judul</label>
                <input type="text" id="judul_jurnal" name="judul_jurnal" required>
            </div>
            <div class="form-group">
                <label for="urutan_penulis">Urutan Penulis</label>
                <input type="text" id="urutan_penulis" name="urutan_penulis" required>
            </div>
            <div class="form-group">
                <label for="status_jurnal">Status</label>
                <input type="text" id="status_jurnal" name="status_jurnal" required>
            </div>
            <div class="form-group">
                <label for="jenis_jurnal">Jenis Jurnal</label>
                <input type="text" id="jenis_jurnal" name="jenis_jurnal" required>
            </div>
            <div class="form-group">
                <label for="nama_jurnal">Nama Jurnal</label>
                <input type="text" id="nama_jurnal" name="nama_jurnal" required>
            </div>
            <div class="form-group">
                <label for="volume_nomor">Volume dan Nomor</label>
                <input type="text" id="volume_nomor" name="volume_nomor" required>
            </div>
            <div class="form-group">
                <label for="halaman_jurnal">Halaman</label>
                <input type="text" id="halaman_jurnal" name="halaman_jurnal" required>
            </div>
            <div class="form-group">
                <label for="tahun_jurnal">Tahun</label>
                <input type="text" id="tahun_jurnal" name="tahun_jurnal" required>
            </div>
            <div class="form-group">
                <label for="link_jurnal">Link Dokumen</label>
                <input type="text" id="link_jurnal" name="link_jurnal">
            </div>
            <div class="form-group full-width">
                <h3>Data Publikasi Seminar</h3>
            </div>
            <div class="form-group">
                <label for="judul_seminar">Judul</label>
                <input type="text" id="judul_seminar" name="judul_seminar" required>
            </div>
            <div class="form-group">
                <label for="urutan_penulis_seminar">Urutan Penulis</label>
                <input type="text" id="urutan_penulis_seminar" name="urutan_penulis_seminar" required>
            </div>
            <div class="form-group">
                <label for="status_seminar">Status</label>
                <input type="text" id="status_seminar" name="status_seminar" required>
            </div>
            <div class="form-group">
                <label for="jenis_seminar">Jenis Seminar</label>
                <input type="text" id="jenis_seminar" name="jenis_seminar" required>
            </div>
            <div class="form-group">
                <label for="nama_seminar">Nama Seminar</label>
                <input type="text" id="nama_seminar" name="nama_seminar" required>
            </div>
            <div class="form-group">
                <label for="penyelenggara_seminar">Penyelenggara</label>
                <input type="text" id="penyelenggara_seminar" name="penyelenggara_seminar" required>
            </div>
            <div class="form-group">
                <label for="tahun_seminar">Tahun</label>
                <input type="text" id="tahun_seminar" name="tahun_seminar" required>
            </div>
            <div class="form-group">
                <label for="link_seminar">Link Dokumen</label>
                <input type="text" id="link_seminar" name="link_seminar">
            </div>
            <div class="form-group full-width">
                <h3>Menyetujui</h3>
            </div>
            <div class="form-group">
                <label for="pembimbing1">Pembimbing 1</label>
                <input type="text" id="pembimbing1" name="pembimbing1" required>
            </div>
            <div class="form-group">
                <label for="nip_pembimbing1">NIP Pembimbing 1</label>
                <input type="text" id="nip_pembimbing1" name="nip_pembimbing1" required>
            </div>
            <div class="form-group">
                <label for="pembimbing2">Pembimbing 2</label>
                <input type="text" id="pembimbing2" name="pembimbing2" required>
            </div>
            <div class="form-group">
                <label for="nip_pembimbing2">NIP Pembimbing 2</label>
                <input type="text" id="nip_pembimbing2" name="nip_pembimbing2" required>
            </div>
            <div class="form-group full-width">
                <button type="submit">Kirim</button>
            </div>
        </form>
    </div>
</body>

</html> --}}