@extends('template')

@section('content')
<h1>Product (update)</h1>
<form action="{{ route('product.update', ['id' => $product->id])}}" method="post">
@csrf
<div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input name="name" type="text" class="form-control" id="name" placeholder="Name">
</div>
<div class="mb-3">
    <label for="price" class="form-label">Price</label>
    <input name="price" type="number" step="0.01" class="form-control" id="price" placeholder="Price">
</div>
<input type="submit" value="Update" class="btn btn-success">
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</button>


<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Product</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Delete this row?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="{{ route('product.delete', ['id' => $product->id ])}}" class="btn btn-outline-danger">Delete</a>
      </div>
    </div>
  </div>
</div>


@endsection
