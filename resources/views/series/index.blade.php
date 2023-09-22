<x-layout title="Ver Series">
    <ul>
        @foreach($series as $serie)
            <li>{{$serie->nome}}</li>
        @endforeach
    </ul>

    <button><a href="/inserir">Ir para adicionar series</a></button>
</x-layout>