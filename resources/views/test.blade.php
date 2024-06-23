<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Publikasi Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>DAFTAR PUBLIKASI MAHASISWA</h1>
        <h2>S2 TERAPAN POLITEKNIK ELEKTRONIKA NEGERI SURABAYA</h2>

        <div class="data-mahasiswa">
            <p>Nama: {!! $judul !!}</p>
            <p>NRP: {!! $nrp !!}</p>
            <p>Program Studi: {!! $program_studi !!}</p>
        </div>

        <div class="pembimbing">
            <p>Pembimbing 1: {!! $dosen_pembimbing1 !!}</p>
            <p>Pembimbing 2: {!! $dosen_pembimbing2 !!}</p>
        </div>

        <div class="data-publikasi">
            <h3>Data Publikasi Jurnal :</h3>
            <p>Judul: {!! $judul !!}</p>
            <p>Status: {!! $status !!}</p>
            <p>Jenis Jurnal: {!! $jenis_jurnal !!}</p>
            <p>Volume dan Nomer: {!! $volume_dan_nomor !!}</p>
            <p>Halaman Publikasi: {!! $halaman !!}</p>
            <p>Tahun Publikasi: {!! $tahun !!}</p>
            <p>Link Dokumen: {!! $link_dokumen !!}</p>
            <h3>Data Publikasi Seminar</h3>
            <p>Judul: {!! $judul_seminar !!}</p>
            <p>Urutan Penulis: {!! $urutan_penulis_seminar !!}</p>
            <p>Status: {!! $status_seminar !!}</p>
            <p>Jenis Seminar: {!! $jenis_seminar !!}</p>
            <p>Nama Seminar: {!! $nama_seminar !!}</p>
            <p>Penyelenggara: {!! $penyelenggara !!}</p>
            <p>Tahun: {!! $tahun_seminar !!}</p>
            <p>Link Dokumen: {!! $link_dokumen_seminar !!}</p>

        </div>
    </div>

    <div class="persetujuan">
        <p>Menyetujui,</p>
        <p>Pembimbing 1 Pembimbing 2</p>
        <p>NIP. NIP.</p>
    </div>
