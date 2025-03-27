@extends('template')
@section('content')
<h1>Produto</h1>
<table class="table">
<thead>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Preço</th>
    </tr>
</thead>
<tbody>
    @foreach ($products as $p)
    <tr>
        <td>{{ $p->id }}</td>
        <td>{{ $p->name }}</td>
        <td>{{ $p->price }}</td>
        <td><a href="{{ route('product.update', ['id' => $p->id])}}">Update</a></td>
    </tr>
    @endforeach
</tbody>
</table>
<a href="{{ route('product.new') }}" class="btn btn-primary">Novo</a>
@endsection
