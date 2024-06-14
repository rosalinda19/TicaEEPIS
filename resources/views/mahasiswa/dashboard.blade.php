<x-temp-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tracking Progres') }}
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-third rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div class="container">
                            <h1>Tracking Progress</h1>
                            <ul class="timeline">
                                {{-- @foreach($progresses as $progress) --}}
                                    <li class="timeline-item">
                                        <div class="timeline-panel">
                                            <div class="timeline-heading">
                                                {{-- <h4>{{ $progress->title }}</h4>
                                                <p class="timeline-date">{{ $progress->date->format('j - m - Y') }}</p> --}}
                                                <h4>ABC</h4>
                                                <p class="timeline-date">2024</p>
                                            </div>
                                            <div class="timeline-body">
                                                {{-- <p>Jam : {{ $progress->time }}</p>
                                                <p>Deskripsi : {{ $progress->description }}</p>
                                                @if($progress->file)
                                                    <p>File : <a href="{{ asset('storage/'.$progress->file) }}">{{ $progress->file }}</a></p>
                                                @endif --}}
                                                <p>Jam : ABC</p>
                                                <p>Deskripsi : DEF</p>
                                                <p>File : <a href="">FILE</a></p>
                                            </div>
                                        </div>
                                    </li>
                                {{-- @endforeach --}}
                            </ul>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-third rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div class="container">
                            <h1>Tracking Progress</h1>
                            <ul class="timeline">
                                {{-- @foreach($progresses as $progress) --}}
                                    <li class="timeline-item">
                                        <div class="timeline-panel">
                                            <div class="timeline-heading">
                                                {{-- <h4>{{ $progress->title }}</h4>
                                                <p class="timeline-date">{{ $progress->date->format('j - m - Y') }}</p> --}}
                                                <h4>ABC</h4>
                                                <p class="timeline-date">2024</p>
                                            </div>
                                            <div class="timeline-body">
                                                {{-- <p>Jam : {{ $progress->time }}</p>
                                                <p>Deskripsi : {{ $progress->description }}</p>
                                                @if($progress->file)
                                                    <p>File : <a href="{{ asset('storage/'.$progress->file) }}">{{ $progress->file }}</a></p>
                                                @endif --}}
                                                <p>Jam : ABC</p>
                                                <p>Deskripsi : DEF</p>
                                                <p>File : <a href="">FILE</a></p>
                                            </div>
                                        </div>
                                    </li>
                                {{-- @endforeach --}}
                            </ul>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </h2>
    </x-slot>
</x-temp-layout>
