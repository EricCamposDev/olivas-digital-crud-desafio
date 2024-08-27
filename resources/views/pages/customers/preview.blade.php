@extends('app')

@section('title', 'Dados do cliente')

@section('content')

<section>
    <div class="row">
        <div class="col-lg-2">
            <img src="{{ asset('storage/images/'.$customer[0]->avatar) }}" class="img-thumbnail" alt="" />
        </div>
        <div class="col-lg-4">
            <div class="card mt-3">
                <div class="card-body">
                    <h3>Nome: <span class="fw-bold">{{ $customer[0]->name }}</span></h3>
                    <h3>E-mail: <span class="fw-bold">{{ $customer[0]->email }}</span></h3>
                    <h3>Tipo: <span class="fw-bold">{{ $customer[0]->customerType->name }}</span></h3>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection