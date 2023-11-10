<form action="{{$action}}" method="post">
    @csrf
    @if($update)
    @method('PUT')
    @endif
    <div class="mb-3">
        <label class="form-label" for="nome">Nome:</label>
        <input class="form-control" type="text" id="nome" name="nome"
        @isset($nome)value="{{$nome}}" @endisset>
    </div>
    <button class="btn btn-success" type="submit">Adicionar</button>
</form>