<x-layout>
    <x-slot:heading>
        Home Page
    </x-slot:heading>
    <h1>This is Home page</h1>

    @foreach ($jobs as $job )
        <li>{{ $job['title'] }}: Pays {{ $job['salary'] }}</li>
    @endforeach


</x-layout>
