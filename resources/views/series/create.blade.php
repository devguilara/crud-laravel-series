
<x-layout title="Nova Série">
    <a href="{{ URL::previous()}}" class="btn btn-primary mt-3 mb-3" >Voltar</a>
    <form action="{{route('series.store')}}" method="post">
        @csrf
        <div class="row mb-3">

            <div class="mb-3 col-8">
                <label class="form-label" for="nome">Nome:</label>
                <input autofocus class="form-control" type="text" id="nome" name="nome"
                value="{{old('nome')}}">
            </div>

            <div class="mb-3 col-2">
                <label class="form-label" for="seasons">Nº Temporadas:</label>
                <input class="form-control" type="text" id="seasons" name="seasons"
                value="{{old('nome')}}">
            </div>

            <div class="mb-3 col-2">
                <label class="form-label" for="epsSeasons">Eps / Temporadas</label>
                <input class="form-control" type="text" id="epsSeasons" name="epsSeasons"
                value="{{old('nome')}}">
            </div>
        </div>

        <button class="btn btn-success" type="submit">Adicionar</button>
    </form>
</x-layout>