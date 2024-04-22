<x-temp-layout>
    <div class="min-h-screen p-6 bg-gray-100 flex items-center justify-center">
        <div class="container max-w-screen-lg mx-auto">
            <div>
                <div class="bg-third rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                        <h2 class="font-semibold text-xl text-black">Seminar Proposal</h2>
                        <div class="md:col-span-5 text-left">
                            <div class="inline-flex items-end">
                                <button class="bg-primary hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                                    type="button">Template Berkas</button>
                            </div>
                        </div>
                        <div class="lg:col-span-3">
                            <form method="POST" action="{{ route('mahasiswa.seminar-proposal') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                    <div class="md:col-span-5">
                                        <label for="laporan">Laporan Proposal</label>
                                        <input type="file" name="laporan" id="laporan"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                    </div>
                                    <div class="md:col-span-5">
                                        <label for="penerima_naskah">Penerima Naskah</label>
                                        <input type="file" name="penerima_naskah" id="penerima_naskah"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                    </div>
                                    <div class="md:col-span-5">
                                        <label for="seminar_tesis">Seminar Tesis</label>
                                        <input type="file" name="seminar_tesis" id="seminar_tesis"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                    </div>
                                    <div class="md:col-span-5">
                                        <label for="lembar_monitoring">Lembar Monitoring</label>
                                        <input type="file" name="lembar_monitoring" id="lembar_monitoring"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                    </div>
                                    <div class="md:col-span-5">
                                        <label for="ppt">PPT</label>
                                        <input type="file" name="ppt" id="ppt"
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
