<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="grid grid-flow-col w-full block">
        <div>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                        required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="current-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="flex items-center justify-center mt-4">
                    <x-primary-button class="ms-3">
                        {{ __('Masuk') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
        <div>
            <div class="max-w-sm ">
                <div class="px-6 py-4">
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
        </div>
    </div>

</x-guest-layout>
