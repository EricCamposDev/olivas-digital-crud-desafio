@extends('app')

@section('title', 'Listar Clientes')

@section('content')

<section class="mt-3 mb-3">
    @if($customers->isNotEmpty())
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>opções</th>
            </tr>
        </thead>
        <tbody>
            @foreach($customers as $customer)
            <tr>
                <td>{{ $customer->id }}</td>
                <td><img src="{{ asset('storage/images/' . $customer->avatar) }}" class="rounded-circle" alt="Imagem de {{ $customer->avatar }}" width="30"> {{ $customer->name }}</td>
                <td>{{ $customer->email }}</td>
                <td>
                    <a href="{{ url('customers/preview/'.$customer->id) }}" class="btn btn-primary fw-bold"><i class="bi bi-eye"></i> Ver</a>
                    <button class="btn btn-danger fw-bold" data-bs-toggle="modal" data-bs-target=".delete-{{ $customer->id }}"><i class="bi bi-trash"></i> deletar</button>
                    <button class="btn btn-secondary fw-bold"><i class="bi bi-pen"></i> editar</button>
                </td>
            </tr>

            <div class="modal fade delete-{{ $customer->id }}" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="{{ route('customers.delete', $customer->id) }}" method="POST">
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
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancelar</button>
                                <button type="submit" class="btn btn-danger">Sim, deletar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            @endforeach
        </tbody>
    </table>
    @else

    @endif
</section>

@endsection