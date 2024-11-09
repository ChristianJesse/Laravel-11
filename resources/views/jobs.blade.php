<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>

    <ul>
        @foreach ($jobs as $job )
            <li>
                <a href="/jobs/1">
                    {{ $job['title'] }}: Pays {{ $job['salary'] }}
                </a>
            </li>
        @endforeach

    </ul>
</x-layout>
