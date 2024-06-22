<style>
    .w-full {
        max-width: none !important;
        width: auto !important;
        display: flex !important;
        padding: 0px !important;
    }
</style>
<x-guest-layout>
    <x-slot name="header">
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="flex items-center justify-center">
            <img class="block h-45 m-10" src="/assets/img/FaUserGraduate.png">
    </div>
    <div class="flex items-center justify-center"
        style="min-height: 60vh; display: flex; background-color: lightgrey;">
        <div class="px-12 py-4" style="align-content: center;">
            <div class="flex flex-col" style="width: 250">
                <div class="flex flex-col">
                     <label for="">Nama</label>
                     <input type="text" name="" id=""
                     value="{{ $user->name }}" disabled
                         class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                 </div>
                 <div class="flex flex-col">
                     <label for="">NRP</label>
                     <input type="text" name="" id=""
                     value="{{ $user->nrp }}" disabled
                         class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                 </div>
                 
                 <div class="flex flex-col">
                     <label for="">Program Study</label>
                     <input type="text" name="" id=""
                     value="{{ $prodi->nama }}" disabled
                         class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                 </div>
                 <div class="flex flex-col text-center">
                     <div class="inline-flex items-end m-2" style="justify-content: center;">
                         <button onclick="window.location.href='logout'"
                             class="bg-blue-900 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                             type="button">Exit</button>
                     </div>
                 </div>
             </div>
        </div>
    </div>
</x-guest-layout>
