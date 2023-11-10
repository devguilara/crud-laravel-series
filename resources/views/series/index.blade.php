<x-layout title="Séries">
    <a class="btn btn-dark mb-3" href="{{route('series.create')}}">Adicionar nova</a>

    @isset($mensagemSucesso)
    <div class="alert alert-success" role="alert">
        {{$mensagemSucesso}}
    </div>
    @endisset

    <ul class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item list-group-item-action list-group-item-primary d-flex justify-content-between align-items-center">
                
                {{$serie->nome}}

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
