@extends('layouts.app')

@section('title', 'Skenario yang ditentukan')
  
@section('contents')
    <h1 class="mb-0">Edit Skenario</h1>
    <hr />
    <form action="{{ route('cities.update', $cities->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $cities->name }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Province</label>
                <input type="text" name="province" class="form-control" placeholder="Province" value="{{ $cities->province }}" >
            </div>
        </div>
        {{-- <div class="row">
            <div class="col mb-3">
                <label class="form-label">Product Code</label>
                <input type="text" name="product_code" class="form-control" placeholder="Product Code" value="{{ $product->product_code }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" placeholder="Descriptoin" >{{ $product->description }}</textarea>
            </div>
        </div> --}}
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection