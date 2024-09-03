@extends('layouts.app')
  
@section('title', 'Attribute')
  
@section('contents')
    <h1 class="mb-0">Tambah Attribute</h1>
    <hr />
    <form action="{{ route('attributes.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            {{-- <div class="col">
                {{-- <input type="text" name="city1" class="form-control" placeholder="City Before">
                <label class="form-label">City before</label>
                <select name="city1" id="city1" class="form-control">
                    <option value="">== Pilih Kota ==</option>
                    @foreach ($cities as $city)
                        <option value="{{$city->id}}">{{ $city->name }}</option>
                    @endforeach
                </select>
            </div> --}}
            {{-- <div class="col">
                {{-- <input type="text" name="city2" class="form-control" placeholder="City After">
                <label class="form-label">City after</label>
                <select name="city2" id="city2" class="form-control">
                    <option value="">== Pilih Kota ==</option>
                    @foreach ($cities as $city)
                        <option value="{{$city->id}}">{{ $city->name }}</option>
                    @endforeach
                </select>
            </div> --}}
            <div class="col">
                <label class="form-label">Nama</label>
                <input type="text" name="name" class="form-control" placeholder="Attribute Name">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">Kalimat dalam Permainan</label>
                <input type="text" name="sentence" class="form-control" placeholder="Sentence in game">
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