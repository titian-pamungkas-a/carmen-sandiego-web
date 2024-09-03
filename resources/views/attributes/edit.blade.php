@extends('layouts.app')

@section('title', 'Attribute')
  
@section('contents')
    <h1 class="mb-0">Edit Attribute</h1>
    <hr />
    <form action="{{ route('attributes.update', $attributes->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="name" class="form-control" placeholder="name" value="{{ $attributes->name }}" >
            </div>
            {{-- <div class="col mb-3">
                <label class="form-label">Province</label>
                <input type="text" name="city2" class="form-control" placeholder="City after" value="{{ $links->city2 }}" >
            </div> --}}
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Kalimat dalam Permainan</label>
                <input type="text" name="sentence" class="form-control" placeholder="Sentence" value="{{ $attributes->sentence }}" >
            </div>
            {{-- <div class="col mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" placeholder="Descriptoin" >{{ $product->description }}</textarea>
            </div> --}}
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection