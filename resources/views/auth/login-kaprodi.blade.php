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
        <form method="POST" action="{{ route('login') }}" class="flex items-center justify-center"
            style="min-width: 25vw; min-height: 60vh;">
            @csrf
            <div class="card mb-3 items-center flex flex-col">
                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                        required autofocus autocomplete="username"
                        style="height: 52px !important; width: 250px !important;" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="current-password" style="height: 52px !important; width: 250px !important;" />
                    <x-input-error :messages="$errors->get('password')" class="mt-8" />
                </div>
                <div class="flex items-center justify-center mt-8">
                    <x-primary-button class="ms-2" style="height: 40; width: 80; ">
                        {{ __('Masuk') }}
                    </x-primary-button>
                </div>
        </form>
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
