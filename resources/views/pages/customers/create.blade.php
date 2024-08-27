@extends('app')

@section('title', 'Cadastrar Novo Cliente')

@section('content')

<form action="{{ url('customers/create') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name" placeholder="nome" required  /><br>
    <input type="email" name="email" placeholder="e-mail" required  /><br>

    <input type="file" name="avatar" required  /><br>
    <input type="submit" value="cadastrar">
</form>

@endsection