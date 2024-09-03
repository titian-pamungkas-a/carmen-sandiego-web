@extends('layouts.app')
  
@section('title', 'Skenario yang ditentukan')
  
@section('contents')
    <h1 class="mb-0">Tambah Scenario</h1>
    <hr />
    <form action="{{ route('fixes.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col-6">
                <label class="form-label">Nama</label>
                <input type="text" name="name" class="form-control" placeholder="Nama">
            </div>
            <div class="col-6">
                <label class="form-label">Penjahat</label>
                    <select name="criminalId" id="criminalId" class="form-control">
                        @foreach ($criminals as $criminal)
                            <option value="{{$criminal->id}}">{{ $criminal->name . " - " . $criminal->diff }}</option>
                        @endforeach
                    </select>
                </label>
            </div>
                
        </div>
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">Total Waktu</label>
                <input type="text" name="totalTime" class="form-control" placeholder="Total Waktu">
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