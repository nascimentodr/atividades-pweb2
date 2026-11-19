@extends('layouts.app')

@section('titulo', 'Categorias - Laravel MVC')

@section('conteudo')
    <span class="badge">Projeto 2 - Laravel MVC</span>
    <h1>Categorias da Loja</h1>
    <p class="sub">Listagem de todas as categorias disponíveis.</p>

    <div class="grid">
        @foreach ($categorias as $categoria)
            <a class="card" href="/categorias/{{ $categoria->id }}">
                <div class="emoji">{{ $categoria->emoji }}</div>
                <p class="nome">{{ $categoria->nome }}</p>
                <p class="desc">{{ $categoria->descricao }}</p>
            </a>
        @endforeach
    </div>
@endsection