@extends('layouts.app')
  
@section('title', 'Kota dalam Permainan')
  
@section('contents')
    <h1 class="mb-0">Tambah Kota</h1>
    <hr />
    <form action="{{ route('cities.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">Nama Kota</label>
                <input type="text" name="name" class="form-control" placeholder="Nama">
            </div>
            <div class="col">
                <label class="form-label">Provinsi</label>
                <input type="text" name="province" class="form-control" placeholder="Provinsi">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col mb-3">
                <label class="form-label">Gambar</label>
                <input type="text" name="imagePath" class="form-control" placeholder="Image Path" >
            </div> 
        </div>
        {{-- <div class="row mb-3">
            <div class="col">
                <input type="text" name="product_code" class="form-control" placeholder="Product Code">
            </div>
            <div class="col">
                <textarea class="form-control" name="description" placeholder="Descriptoin"></textarea>
            </div>
        </div> --}}
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection