<x-temp-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <div class="container">
                    <h1>Tracking Progress</h1>
                    <ul class="timeline">
                        @foreach($progresses as $progress)
                            <li class="timeline-item">
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4>{{ $progress->title }}</h4>
                                        <p class="timeline-date">{{ $progress->date->format('j - m - Y') }}</p>
                                    </div>
                                    <div class="timeline-body">
                                        <p>Jam : {{ $progress->time }}</p>
                                        <p>Deskripsi : {{ $progress->description }}</p>
                                        @if($progress->file)
                                            <p>File : <a href="{{ asset('storage/'.$progress->file) }}">{{ $progress->file }}</a></p>
                                        @endif
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                </div>
            </div>
        </div>
    </div>
</x-temp-layout>
