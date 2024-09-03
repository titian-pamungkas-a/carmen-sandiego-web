@extends('layouts.app')
  
@section('title', 'Attribute setiap Kota')
  
@section('contents')
    <h1 class="mb-0">Tambah Attribute Kota</h1>
    <hr />
    <form action="{{ route('cityattributes.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">Kota</label>
                <select name="cityId" id="cityId" class="form-control">
                    <option value="">== Pilih Kota ==</option>
                    @foreach ($cities as $city)
                        <option value="{{$city->id}}">{{ $city->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col">
                <label class="form-label">Attribute</label>
                <select name="attributeId" id="attributeId" class="form-control">
                    <option value="">== Pilih Attribute ==</option>
                    @foreach ($attribute as $att)
                        <option value="{{$att->id}}">{{ $att->name }}</option>
                    @endforeach
                </select>
            </div>
            {{-- <div class="col">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Attribute Name">
            </div> --}}
        </div>
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">Nama Attribute</label>
                <input type="text" name="attributeName" class="form-control" placeholder="Attribute name">
            </div>
            {{-- <div class="col">
                <textarea class="form-control" name="description" placeholder="Descriptoin"></textarea>
            </div> --}}
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection