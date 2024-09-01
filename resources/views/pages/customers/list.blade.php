@extends('app')

@section('title', 'Listar Clientes')

@section('content')

<section class="mt-3 mb-3">
    @if($customers->isNotEmpty())
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4>Lista de Clientes</h4>
            <a href="{{ route('customers.create') }}" class="btn btn-primary">
                <i class="bi bi-plus-circle"></i> Cadastrar Cliente
            </a>
        </div>
        <div class="card-body">
            <table class="table table-hover table-bordered">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Opções</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($customers as $customer)
                    <tr>
                        <td>{{ $customer->id }}</td>
                        <td>
                            <img src="{{ asset('storage/images/' . $customer->avatar) }}" class="rounded-circle" alt="Imagem de {{ $customer->avatar }}" width="30"> 
                            {{ $customer->name }}
                        </td>
                        <td>{{ $customer->email }}</td>
                        <td>
                            <a href="{{ route('customers.preview', $customer->id) }}" class="btn btn-info btn-sm fw-bold">
                                <i class="bi bi-eye"></i> Ver
                            </a>
                            <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-secondary btn-sm fw-bold">
                                <i class="bi bi-pen"></i> Editar
                            </a>
                            <button class="btn btn-danger btn-sm fw-bold" data-bs-toggle="modal" data-bs-target=".delete-{{ $customer->id }}">
                                <i class="bi bi-trash"></i> Deletar
                            </button>
                        </td>
                    </tr>

                    <div class="modal fade delete-{{ $customer->id }}" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="{{ route('customers.destroy', $customer->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <div class="modal-header">
                                        <h5 class="modal-title">Deletar {{ $customer->name }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Você deseja deletar o registro?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                        <button type="submit" class="btn btn-danger">Sim, deletar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @else
    <div class="alert alert-warning">
        Nenhum cliente encontrado.
    </div>
    @endif
</section>

@endsection
