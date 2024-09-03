@extends('layouts.app')
  
@section('title', 'Attribute setiap Kota')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Attribute Kota</h1>
        <div>
            {{-- <select name="city" id="city" class="btn btn-secondary dropdown-toggle" onchange="window.location.href=this.value;">
                <option value="">== Pilih Kota ==</option>
                @foreach ($cities as $city)
                    <option value="{{$city->id}}">{{ $city->name }}</option>          
                @endforeach
            </select> --}}
            <a href="{{ route('cityattributes.create') }}" class="btn btn-primary">Tambah Attribute Kota</a>
        </div>
        
    </div>
    
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>ID</th>
                <th>Kota</th>
                <th>Attribute</th>
                <th>Nama Attribute</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>+
            @if($cityattributes->count() > 0)
                @foreach($cityattributes as $rs)
                    <tr>
                        <td class="align-middle">{{ $rs->id }}</td>
                        <td class="align-middle">{{ $cities->firstWhere('id', $rs->cityId)->name}}</td>
                        <td class="align-middle">{{ $attribute->firstWhere('id', $rs->attributeId)->name}}</td>
                        <td class="align-middle">{{ $rs->attributeName}}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('cityattributes.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('cityattributes.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('cityattributes.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Product not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection