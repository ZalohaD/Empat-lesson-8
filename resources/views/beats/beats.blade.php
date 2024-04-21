<x-layout>
    <h2>Latest beats</h2>
    <ul>
        @foreach ($beats as $beat)
            <li><a href="{{ route('beatById', ['id' => $beat->id]) }}">{{ $beat->name }}</a></li>    
        @endforeach
    </ul>
</x-layout>