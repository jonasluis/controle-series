<x-layout title="Séries">

    <a href="/series/criar">Ir para tela de criar series</a>

    <ul>
        @foreach($series as $serie)
        <li>{{$serie}}</li>
        @endforeach
    </ul>
</x-layout>