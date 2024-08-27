@extends('app')

@section('title', 'Dashboard')

@section('content')

<table class="min-w-full bg-white border border-gray-200">
    <tr>
        <th>Vendedor</th>
        <th>Email</th>
    </tr>
    @foreach($sellers as $seller)
    <tr>
        <td>{{ $seller->name }}</td>
        <td>{{ $seller->email }}</td>
    </tr>
    @endforeach
</table>

@endsection