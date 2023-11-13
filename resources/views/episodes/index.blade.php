<x-layout title="Episódios" :mensagem-sucesso="$mensagemSucesso">
    <a href="{{ URL::previous()}}" class="btn btn-primary mt-3 mb-3" >Voltar</a>
    <form action="" method="post">
        @csrf
    <ul class="list-group">
        @foreach ($episodes as $episode)
            <li class="list-group-item list-group-item-action list-group-item-primary d-flex justify-content-between align-items-center">
              Episódio :   {{$episode->number}}
             <input  
                class="form-check-input" 
                type="checkbox" 
                name="episodes[]"
                value="{{$episode->id}}"
                @if($episode->watched) checked  @endif                       
             />      
            
            </li>
            
        @endforeach
    </ul>
    <button class="btn btn-primary mt-3" type="submit">Salvar</button>
</form>
</x-layout>
<!--
-->          
