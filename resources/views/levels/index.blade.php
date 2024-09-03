@extends('layouts.app')
  
@section('title', 'Level Permainan Random')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Level</h1>
        <div>
            
            <a href="{{ route('levels.create') }}" class="btn btn-primary">Tambah Level</a>
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
                <th>Level ke-</th>
                <th>Jumlah Kota</th>
                <th>Total Waktu</th>
                <th>Level Musuh</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>+
            @if($levels->count() > 0)
                @foreach($levels as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->id }}</td>
                        <td class="align-middle">{{ $rs->levelCount }}</td>
                        <td class="align-middle">{{ $rs->cityCount }}</td>
                        <td class="align-middle">{{ $rs->totalTime }}</td>
                        <td class="align-middle">{{ $rs->criminalLevel }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('levels.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('levels.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('levels.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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