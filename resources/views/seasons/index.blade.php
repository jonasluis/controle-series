<x-layout title="Temporadas de {!!$series->name!!}">
    <ul class="list-group">
        @foreach($seasons as $season)
        <li class="list-group-item d-flex justify-content-between align-itenms-center">
            Temporada {{$season->number}}

            <span class="d-flex bg-secondary text-white p-1">
                {{ $season->episodes->count()}}
            </span>
        </li>
        @endforeach
    </ul>
</x-layout>
