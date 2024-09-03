@extends('layouts.app')
  
@section('title', 'Skenario yang ditentukan')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Skenario</h1>
        <a href="{{ route('fixes.create') }}" class="btn btn-primary">Tambah Skenario</a>
    </div>
    <hr />
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
                <th>Nama</th>
                <th>Penjahat</th>
                <th>Total Waktu</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>+
            @if($fixes->count() > 0)
                @foreach($fixes as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->id }}</td>
                        <td class="align-middle">{{ $rs->name }}</td>
                        <td class="align-middle">{{ $criminals->firstWhere('id', $rs->criminalId)->name }}</td>
                        <td class="align-middle">{{ $rs->totalTime }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('fixes.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                {{-- <a href="{{ route('cities.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a> --}}
                                <form action="{{ route('fixes.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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