<x-temp-layout>
    <div class="min-h-screen p-6 bg-gray-100 flex items-center justify-center">
        <div class="container max-w-screen-lg mx-auto">
            <div>
                <div class="bg-third rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                        <h2 class="font-semibold text-xl text-black">Pengajuan Judul</h2>
                        <div class="lg:col-span-3">
                            <form method="POST" action="{{ route('mahasiswa.pengajuan-judul') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                    <div class="md:col-span-5">
                                        <label for="tahun_angkatan">Tahun Angkatan</label>
                                        <div class="mt-2">
                                            <select id="tahun_angkatan" name="tahun_angkatan"
                                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                <option hidden>Pilih tahun angkatan</option>
                                                <option value="2024">2024</option>
                                                <option value="2023">2023</option>
                                                <option value="2022">2022</option>
                                                <option value="2021">2021</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="md:col-span-5">
                                        <label for="tahun_ajaran">Tahun Ajaran</label>
                                        <div class="mt-2">
                                            <select id="tahun_ajaran" name="tahun_ajaran"
                                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                <option hidden>Pilih tahun ajaran</option>
                                                <option value="2023-2024">2023-2024</option>
                                                <option value="2022-2023">2022-2023</option>
                                                <option value="2021-2022">2021-2022</option>
                                                <option value="2020-2021">2020-2021</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="md:col-span-5">
                                        <label for="tanggal">Tanggal Upload</label>
                                        <input type="date" name="tanggal" id="tanggal"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                    </div>
                                    <div class="md:col-span-5">
                                        <label for="tahun_angkatan">Semester</label>
                                        <div class="mt-2">
                                            <select id="semester" name="semester"
                                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                <option hidden>Pilih semester</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="md:col-span-5">
                                        <label for="judul_penelitian">Judul Penelitian</label>
                                        <input type="text" name="judul_penelitian" id="judul_penelitian"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                    </div>

                                    <div class="md:col-span-5">
                                        <label for="dosen_pembimbing1">Dosen Pembimbing</label>
                                        <input type="text" name="dosen_pembimbing1" id="dosen_pembimbing1"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""
                                            placeholder="Dosen Pembimbing 1" />
                                    </div>
                                    <div class="md:col-span-5">
                                        <input type="text" name="dosen_pembimbing2" id="dosen_pembimbing2"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""
                                            placeholder="Dosen Pembimbing 2" />
                                    </div>
                                    <div class="md:col-span-5">
                                        <input type="text" name="dosen_pembimbing3" id="dosen_pembimbing3"
                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""
                                            placeholder="Dosen Pembimbing 3" />
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
