@extends('layouts.app')
  
@section('title', 'Data Penjahat dalam Permainan')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Musuh</h1>
        
    </div>
    
    {{-- @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif --}}
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>ID</th>
                <th>Nama Musuh</th>
                <th>Hobi</th>
                <th>Rambut</th>
                <th>Pakaian</th>
                <th>Hobi (tempat)</th>
                <th>Hobi (alat)</th>
                <th>Hobi (tokoh)</th>
            </tr>
        </thead>
        <tbody>+
            @if($criminals->count() > 0)
                @foreach($criminals as $rs)
                    <tr>
                        <th class="align-middle">{{ $rs->id }}</th>
                        <th class="align-middle">{{ $rs->name }}</th>
                        <th class="align-middle">{{ $hobbies->firstWhere('id', $rs->religionId)->name}}</th>
                        <th class="align-middle">{{ $rs->hair }}</th>
                        <th class="align-middle">{{ $rs->outfit }}</th>
                        <td class="align-middle">{{ $hobbies->firstWhere('id', $rs->religionId)->place}}</td>
                        <td class="align-middle">{{ $hobbies->firstWhere('id', $rs->religionId)->equipment}}</td>
                        <td class="align-middle">{{ $hobbies->firstWhere('id', $rs->religionId)->figure}}</td>
                        
                        {{-- <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('links.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('links.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('links.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td> --}}
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