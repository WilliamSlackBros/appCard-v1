@extends('layout.app',["current"=>"produtos"])

@section('body')
    <div class="card border-primary">
      <div class="card-body">
            <form action="/produtos" method="post">
                <div class="form-group">
                    <label for="nomeCategoria">Nome da do Produto</label>
                    <input type="text" class="form-control" name="nomeProduto" id="nomeProduto" placeholder="Produto">
                </div>
                <button type="submit" class="btn btn-primaruy btn-sm">Salvar</button>
                <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
            </form>
      </div>
    </div>
@endsection