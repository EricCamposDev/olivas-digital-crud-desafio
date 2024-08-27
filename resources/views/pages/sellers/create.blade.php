@extends('app')

@section('title', 'Cadastrar Novo Vendedor')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Cadastrar Novo Vendedor</h1>
    <form action="{{ url('sellers/create') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Nome:</label>
            <input type="text" id="name" name="name" class="form-control" placeholder="Digite o nome" required />
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">E-mail:</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Digite o e-mail" required />
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <a href="{{ url('sellers') }}" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</div>
@endsection
