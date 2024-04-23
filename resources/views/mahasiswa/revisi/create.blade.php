<x-temp-layout>
    <div class="min-h-screen p-6 bg-gray-100 flex items-center justify-center">
        <div class="container max-w-screen-lg mx-auto">
            <div>
                <div class="bg-third rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                        <h2 class="font-semibold text-xl text-black">Progress Tesis</h2>
                        <div class="lg:col-span-3">
                            <form method="POST" action="{{ route('mahasiswa.revisi') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                    <div class="md:col-span-5">
                                        <label for="kategori">Jenis Revisi</label>
                                        <div class="mt-2">
                                            <select id="kategori" name="kategori"
                                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                <option hidden>Pilih jenis revisi</option>
                                                <option value="proposal">Seminar Proposal</option>
                                                <option value="tesis_1">Seminar Tesis 1</option>
                                                <option value="tesis_2">Seminar Tesis 2</option>
                                                <option value="final">Seminar Final Tesis</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="md:col-span-5">
                                        <label for="file_revisi">File Revisi</label>
                                        <input type="file" name="file_revisi" id="file_revisi"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                    </div>
                                    <div class="md:col-span-5">
                                        <label for="catatan">Catatan</label>
                                        <input type="text" name="catatan" id="catatan"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                    </div>
                                    <div class="md:col-span-5 text-right">
                                        <div class="inline-flex items-end">
                                            <button
                                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                                                type="button">Exit</button>
                                            <button
                                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
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
