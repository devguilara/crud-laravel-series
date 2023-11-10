<x-layout title="Temporadas de {{$series->nome }} ">
    <ul class="list-group">
        @foreach ($seasons as $season)
            <li class="list-group-item list-group-item-action list-group-item-primary d-flex justify-content-between align-items-center">
              Temporada :   {{$season->number}}
                <span class="badge bg-primary">
                   {{$season->episodes->count() }}
                 </span>
            </li>
            
        @endforeach
    </ul>
</x-layout>
<!--
-->          
