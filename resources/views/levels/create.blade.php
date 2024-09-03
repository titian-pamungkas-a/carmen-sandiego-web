@extends('layouts.app')
  
@section('title', 'Level Permainan Random')
  
@section('contents')
    <h1 class="mb-0">Tambah Level</h1>
    <hr />
    <form action="{{ route('levels.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">Jumlah Level</label>
                <input type="text" name="levelCount" class="form-control" placeholder="Jumlah Level">
            </div>
            <div class="col">
                <label class="form-label">Jumlah Kota</label>
                <input type="text" name="cityCount" class="form-control" placeholder="Jumlah Kota">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">Total Waktu</label>
                <input type="text" name="totalTime" class="form-control" placeholder="Total Waktu">
            </div>
            <div class="col">
                <label class="form-label">Level Musuh</label>
                <input type="text" name="criminalLevel" class="form-control" placeholder="Level Musuh">
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