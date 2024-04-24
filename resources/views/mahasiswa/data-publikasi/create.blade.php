<x-temp-layout>
    <div class=" p-6 bg-gray-100 flex items-center justify-center">
        <div class="container max-w-screen-lg mx-auto">
            <div>
                <div class="bg-third rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                        <h2 class="font-semibold text-xl text-black">Publikasi</h2>
                        <div class="md:col-span-5 text-left">
                            <div class="inline-flex items-end">
                                <button class="bg-primary hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                                    type="button">Template Berkas</button>
                            </div>
                        </div>
                        <div class="lg:col-span-3">
                            <form method="POST" action="{{ route('mahasiswa.data-publikasi') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                    <div class="md:col-span-5">
                                        <label for="tanggal">Tanggal</label>
                                        <input type="date" name="tanggal" id="tanggal"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                    </div>
                                    <div class="md:col-span-5">
                                        <label for="berkas_publikasi">Berkas Publikasi</label>
                                        <input type="file" name="berkas_publikasi" id="berkas_publikasi"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                    </div>
                                    <div class="md:col-span-5 text-right">
                                        <div class="inline-flex items-end">
                                            <button
                                                class="bg-primary hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                                                type="button">Exit</button>
                                            <button
                                                class="bg-primary hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                                                type="submit">Submit</button>
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
