<x-layout title="Editar Série">
    <a href="{{ URL::previous()}}" class="btn btn-primary" >Voltar</a>
    <x-series.form :action="route('series.update', $serie->id)" :nome="$serie->nome" :update="true"/>
</x-layout>