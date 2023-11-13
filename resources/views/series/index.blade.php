<x-layout title="Séries" :mensagem-sucesso="$mensagemSucesso">
    <a class="btn btn-dark mb-3" href="{{route('series.create')}}">Adicionar nova</a>
    
    <ul class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item list-group-item-action list-group-item-primary d-flex justify-content-between align-items-center">
               <a href="{{route('seasons.index', $serie->id)}}">
                {{$serie->nome}}
            </a> 
                <span class="d-flex">
                    <a class="btn btn-warning btn-sm" href="{{route('series.edit', $serie->id)}}"><i class="fa-solid fa-pen-to-square"></i></a>
                    <form action="{{route('series.destroy', $serie->id) }}" method="post" class="ms-2">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                    </form>
                 </span>
            </li>
            
        @endforeach
    </ul>
</x-layout>
<!--
-->          
