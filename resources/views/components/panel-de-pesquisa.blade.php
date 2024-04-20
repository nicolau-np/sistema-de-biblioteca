<div>
<form action="{{ $prefixroute }}/search" method="post">
    @method('POST')
    @csrf
    <div class="row">
        <div class="col-md-4">
            <input type="text" name="text_pesquisa" placeholder="Pesquisar..." class="form-control" />
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-primary">Pesquisar</button>
            &nbsp;
            <a href="{{ $prefixroute }}/create" class="btn btn-success">Novo</a>
        </div>
    </div>

</form>

</div>
