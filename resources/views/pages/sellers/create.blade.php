@extends('app')

@section('title', 'Cadastrar Novo Vendedor')

@section('content')

<form action="{{ url('sellers/create') }}" method="POST">

    @csrf

    <div class="mb-4">
        <label for="name" class="block text-gray-700 font-bold mb-2">Nome:</label>
        <input type="text" id="name" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Seu nome">
    </div>

    <div class="mb-4">
        <label for="name" class="block text-gray-700 font-bold mb-2">E-mail:</label>
        <input type="email" id="name" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Seu nome">
    </div>

    <button type="submit" class="bg-blue-500 hover:bg-blue-700 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Cadastrar</button>

</form>

@endsection