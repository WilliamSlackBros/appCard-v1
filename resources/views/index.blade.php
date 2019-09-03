@extends('layout.app',["current"=>"home"])<!--impostar o layout app-->

@section('body')
   <div class="jumbotron bg-light boder boder-secondary">
<div class="row">
    <div class="card-deck">
        <div class="card boder boder-primary">
            <img class="card-img-top" alt=""> <!-- src="holder.js/100x180/" -->
            <div class="card-body">
                <h4 class="card-title">Cadastro de Produtos</h4>
                <p class="card-text">
                Cadastrar Produtos
                </p>
                <a href="/produtos" class="btn btn-primary">Cadastrar</a>
            </div>
        </div>
        <div class="card boder boder-primary">
            <img class="card-img-top" alt="">
            <div class="card-body">
                <h4 class="card-title">Cadastro de Categorias</h4>
                <p class="card-text">
                Cadastrar Categorias
                </p>
                <a href="/categorias/novo" class="btn btn-primary">Cadastrar</a>
            </div>
        </div>
    </div>
</div>
   </div>
@endsection