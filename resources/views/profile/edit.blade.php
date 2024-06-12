<style>
    .w-full {
        max-width: none !important;
        width: auto !important;
        display: flex !important;
        padding: 0px !important;
    }
</style>
<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="flex">
            <img class="block h-500 m-10 w-auto fill-current text-gray-800 dark:text-gray-200 flex items-center justify-center" src="/assets/img/FaUserGraduate.png">
    </div>
    <div class="max-w-sm flex items-center justify-center"
        style="max-width: 25vw; min-height: 60vh; display: flex; background-color: lightgrey;">
        <div class="px-12 py-4" style="align-content: center;">
            <div class="font-bold text-xl mb-2">Selamat Datang di Tica</div>
            <p class="text-gray-700 text-base">
                Program Pascasarjana Politeknik Elektronika Negeri Surabaya membuka Penerimaan Mahasiswa Baru
                Tahun 2023 Gelombang 2, bagi Program Magister Terapan pada bidang Teknologi Rekayasa untuk
                Program Studi S2 Terapan Teknik Elektro dan Program Studi S2 Terapan Teknik Informatika dan
                Komputer.
            </p>
            <p class="font-bold">
                Login mahasiswa menggunakan E-Mail
            </p>
            <p class="font-bold">
                @xx.student.pens.ac.id
            </p>
            <p class="font-bold">
                xx=kode jurusan
            </p>
        </div>
    </div>
</x-guest-layout>
