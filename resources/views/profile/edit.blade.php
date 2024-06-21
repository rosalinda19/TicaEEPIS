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
    <div class="flex items-center justify-center">
            <img class="block h-45 m-10" src="/assets/img/FaUserGraduate.png">
    </div>
    <div class="max-w-sm flex items-center justify-center"
        style="max-width: 25vw; min-height: 60vh; display: flex; background-color: lightgrey;">
        <div class="px-12 py-4" style="align-content: center;">
            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
               <div class="md:col-span-5">
                    <label for="">Nama</label>
                    <input type="text" name="" id=""
                    value="{{ $user->name }}" disabled
                        class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                </div>
                <div class="md:col-span-5">
                    <label for="">NRP</label>
                    <input type="text" name="" id=""
                    value="{{ $user->nrp }}" disabled
                        class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                </div>
                
                <div class="md:col-span-5">
                    <label for="">Program Study</label>
                    <input type="text" name="" id=""
                    value="{{ $prodi->nama }}" disabled
                        class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                </div>
                <div class="md:col-span-5 text-center">
                    <div class="inline-flex items-end">
                        <button
                            class="bg-blue-900 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                            type="button">Exit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
