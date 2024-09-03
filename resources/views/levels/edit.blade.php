@extends('layouts.app')

@section('title', 'Level Permainan Random')
  
@section('contents')
    <h1 class="mb-0">Edit Level</h1>
    <hr />
    <form action="{{ route('levels.update', $levels->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Jumlah Level</label>
                <input type="text" name="levelCount" class="form-control" placeholder="Jumlah Level" value="{{ $levels->levelCount }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Jumlah Kota</label>
                <input type="text" name="cityCount" class="form-control" placeholder="Jumlah Kota" value="{{ $levels->cityCount }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Total Waktu</label>
                <input type="text" name="totalTime" class="form-control" placeholder="Total Waktu" value="{{ $levels->totalTime }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Level Musuh</label>
                <input type="text" name="criminalLevel" class="form-control" placeholder="Level musuh" value="{{ $levels->criminalLevel }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection