@extends('layouts.app')
  
@section('title', 'Skenario yang ditentukan')
  
@section('contents')
    <h1 class="mb-0">Tambah Kota dalam Skenario</h1>
    <hr />
    <form action="{{ route('fixes.storecity', $id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col-6">
                <label class="form-label">Urutan</label>
                <input type="text" name="order" class="form-control" placeholder="Urutan">
            </div>
            <div class="col-6">
                <label class="form-label">Kota</label>
                    <select name="cityId" id="cityId" class="form-control">
                        @foreach ($cities as $city)
                            <option value="{{$city->id}}">{{ $city->name  }}</option>
                        @endforeach
                    </select>
                </label>
            </div>
                
        </div>
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">ID</label>
                <input type="text" name="fixesId" class="form-control" value="{{ $id }}" placeholder="Product Code" readonly>
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