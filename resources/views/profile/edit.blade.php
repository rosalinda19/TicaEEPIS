<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TicaEEPIS</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="antialiased">
    @include('layouts.navigation-temp')
    <div class=" p-6 bg-gray-100 flex items-center justify-center" style="height: 100vh">
        <div class="container max-w-screen-lg mx-auto">
            <div>
                <div class="bg-third rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural
                            lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to
                                additional content.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>






























{{-- 



<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TicaEEPIS</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="antialiased">
    @include('layouts.navigation-temp')

    <div class=" p-6 bg-gray-100 flex items-center justify-center" style="height: 100vh">
        <div class="container max-w-screen-lg mx-auto">
            <div>
                <div class="bg-third rounded shadow-lg p-4 px-4 md:p-8 mb-6">

                    {{-- <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                        <h2 class="font-semibold text-xl text-black">Publikasi</h2>
                        <div class="md:col-span-5 text-left">
                            <div class="inline-flex items-end">
                                <button class="bg-primary hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="button">Template Berkas</button>
                            </div>
                        </div>
                        <div class="lg:col-span-3">
                            <form method="POST" action="http://127.0.0.1:8000/mahasiswa/data-publikasi" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="oFVtu1GTmar4DdrJyneAxQSg8NaCw0JLnyrHIV66">                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                    <div class="md:col-span-5">
                                        <label for="tanggal">Tanggal</label>
                                        <input type="date" name="tanggal" id="tanggal" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="">
                                    </div>
                                    <div class="md:col-span-5">
                                        <label for="berkas_publikasi">Berkas Publikasi</label>
                                        <input type="file" name="berkas_publikasi" id="berkas_publikasi" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="">
                                    </div>
                                    <div class="md:col-span-5 text-right">
                                        <div class="inline-flex items-end">
                                            <button class="bg-primary hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="button">Exit</button>
                                            <button class="bg-primary hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div> 
<div class="card-group">
    <div class="card">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural
                lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    </div>
    <div class="card">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to
                additional content.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>

</body>

</html> --}}
