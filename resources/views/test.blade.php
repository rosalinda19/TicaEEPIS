<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Publikasi Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .title {
            text-align: center;
            font-weight: bold;
            font-size: 16px;
        }

        .section-title {
            font-weight: bold;
            margin-top: 20px;
        }

        .content {
            margin-top: 10px;
            margin-bottom: 20px;
        }

        .content table {
            width: 100%;
            border-collapse: collapse;
        }

        .content table tr td {
            vertical-align: top;
            padding: 2px 5px;
        }

        .signature {
            text-align: center;
            margin-top: 40px;
        }

        .signature div {
            display: inline-block;
            width: 200px;
        }

        .note {
            font-size: 10px;
            margin-top: 20px;
        }

        .content table td:first-child {
            width: 150px;
        }

        .content table td:nth-child(2) {
            width: 10px;
        }

        .signature .nip {
            margin-top: 40px;
        }

        .signature .name {
            margin-top: 80px;
        }
    </style>
</head>

<body>
    <div class="title">DAFTAR PUBLIKASI MAHASISWA</div>
    <div class="title">S2 TERAPAN POLITEKNIK ELEKTRONIKA NEGERI SURABAYA</div>

    <div class="content">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>{!! $nama !!}</td>
            </tr>
            <tr>
                <td>NRP</td>
                <td>:</td>
                <td>{!! $nrp !!}</td>
            </tr>
            <tr>
                <td>Program Studi</td>
                <td>:</td>
                <td>{!! $program_studi !!}</td>
            </tr>
            <tr>
                <td>Pembimbing 1</td>
                <td>:</td>
                <td>{!! $dosen_pembimbing1 !!}</td>
            </tr>
            <tr>
                <td>Pembimbing 2</td>
                <td>:</td>
                <td>{!! $dosen_pembimbing2 !!}</td>
            </tr>
            @if ($dosen_pembimbing3)
                <tr>
                    <td>Pembimbing 3</td>
                    <td>:</td>
                    <td>{!! $dosen_pembimbing3 !!}</td>
                </tr>
            @endif
            <tr>
                <td>Judul Tesis</td>
                <td>:</td>
                <td>{!! $judul_penelitian !!}</td>
            </tr>
        </table>
    </div>

    <div class="section-title">Data Publikasi Jurnal :</div>
    <div class="content">
        <table>
            <tr>
                <td>Judul</td>
                <td>:</td>
                <td>{!! $judul !!}</td>
            </tr>
            <tr>
                <td>Urutan penulis</td>
                <td>:</td>
                <td>{!! $urutan_penulis !!}</td>
            </tr>
            <tr>
                <td>Status</td>
                <td>:</td>
                <td>{!! $status !!}</td>
            </tr>
            <tr>
                <td>Jenis Jurnal *</td>
                <td>:</td>
                <td>{!! $jenis_jurnal !!}</td>
            </tr>
            <tr>
                <td>Nama Jurnal</td>
                <td>:</td>
                <td>{!! $nama_jurnal !!}</td>
            </tr>
            <tr>
                <td>Volume dan nomer</td>
                <td>:</td>
                <td>{!! $volume_dan_nomor !!}</td>
            </tr>
            <tr>
                <td>Halaman</td>
                <td>:</td>
                <td>{!! $halaman !!}</td>
            </tr>
            <tr>
                <td>Tahun</td>
                <td>:</td>
                <td>{!! $tahun !!}</td>
            </tr>
            <tr>
                <td>Link Dokumen</td>
                <td>:</td>
                <td>{!! $link_dokumen !!}</td>
            </tr>
        </table>
    </div>

    <div class="section-title">Data Publikasi Seminar :</div>
    <div class="content">
        <table>
            <tr>
                <td>Judul</td>
                <td>:</td>
                <td>{!! $judul_seminar !!}</td>
            </tr>
            <tr>
                <td>Urutan penulis</td>
                <td>:</td>
                <td>{!! $urutan_penulis_seminar !!}</td>
            </tr>
            <tr>
                <td>Status</td>
                <td>:</td>
                <td>{!! $status_seminar !!}</td>
            </tr>
            <tr>
                <td>Jenis Seminar</td>
                <td>:</td>
                <td>{!! $jenis_seminar !!}</td>
            </tr>
            <tr>
                <td>Nama Seminar</td>
                <td>:</td>
                <td>{!! $nama_seminar !!}</td>
            </tr>
            <tr>
                <td>Penyelenggara</td>
                <td>:</td>
                <td>{!! $penyelenggara !!}</td>
            </tr>
            <tr>
                <td>Tahun</td>
                <td>:</td>
                <td>{!! $tahun_seminar !!}</td>
            </tr>
            <tr>
                <td>Link Dokumen</td>
                <td>:</td>
                <td>{!! $link_dokumen_seminar !!}</td>
            </tr>
        </table>
    </div>

    <div class="signature">
        Menyetujui,
        <br><br><br><br>
        <div>Pembimbing 1</div>
        <div>Pembimbing 2</div>
        <br><br><br>
        <div>___________________________</div>
        <div>___________________________</div>
        <div>NIP.</div>
        <div>NIP.</div>
    </div>

    <div class="note">
        * Diisi dengan Jurnal Nasional Terindeks Sinta (S1/S2/S3/S4/S5/S6) atau Jurnal Internasional Terindeks DOAJ /
        Scopus (Q1/Q2/Q3/Q4) / Thomson Reuters<br>
        Sertakan bukti dokumen paper
    </div>
</body>

</html>
