@extends('layouts.app')
  
@section('title', 'Hubungan Antar Kota')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Hubungan</h1>
        <div>
            <select name="city" id="city" class="btn btn-secondary dropdown-toggle" onchange="window.location.href=this.value;">
                <option value="">== Pilih Kota ==</option>
                @foreach ($cities as $city)
                    <option value="{{$city->id}}">{{ $city->name }}</option>          
                @endforeach
            </select>
            <a href="{{ route('links.create') }}" class="btn btn-primary">Tambah Hubungan</a>
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
                <th>#</th>
                <th>ID</th>
                <th>Kota Sebelum</th>
                <th>Kota Sesudah</th>
                <th>Jarak (jam)</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>+
            @if($links->count() > 0)
                @foreach($links as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->id }}</td>
                        <td class="align-middle">{{ $cities->firstWhere('id', $rs->city1)->name}}</td>
                        <td class="align-middle">{{ $cities->firstWhere('id', $rs->city2)->name }}</td>
                        <td class="align-middle">{{ $rs->distanceHour }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('links.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('links.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('links.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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