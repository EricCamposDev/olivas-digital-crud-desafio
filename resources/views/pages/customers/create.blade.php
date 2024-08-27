@extends('app')

@section('title', 'Cadastrar Novo Cliente')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Cadastrar Novo Cliente</h1>
    <form action="{{ url('customers/create') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="name" class="form-label">Nome</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Digite o nome" required />
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Digite o e-mail" required />
            </div>
        </div>
        <div class="mb-3">
            <label for="avatar" class="form-label">Imagem de Perfil</label>
            <input type="file" id="avatar" name="avatar" class="form-control" required />
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipo de Cliente</label>
            <select id="type" name="type" class="form-select" required>
                <option value="" disabled selected>Selecione o tipo de cliente</option>
                <option value="1">Pessoa Física</option>
                <option value="2">Pessoa Jurídica</option>
            </select>
        </div>
        
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </form>
</div>
@endsection
