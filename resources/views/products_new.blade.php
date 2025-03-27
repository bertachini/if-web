@extends('template')

@section('content')
<h1>Product (new)</h1>
<form action="{{ route('product.store')}}" method="post">
@csrf
<div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input name="name" type="text" class="form-control" id="name" placeholder="Name">
</div>
<div class="mb-3">
    <label for="price" class="form-label">Price</label>
    <input name="price" type="number" step="0.01" class="form-control" id="price" placeholder="Price">
</div>
<input type="submit" value="Add" class="btn btn-success">
@endsection
