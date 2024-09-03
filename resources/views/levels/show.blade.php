@extends('layouts.app')
  
@section('title', 'Level Permainan Random')
  
@section('contents')
    <h1 class="mb-0">Detail Level</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Jumlah Level</label>
            <input type="text" name="levelCount" class="form-control" placeholder="Jumlah Level" value="{{ $levels->levelCount }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Jumlah Kota</label>
            <input type="text" name="cityCount" class="form-control" placeholder="Jumlah Kota" value="{{ $levels->cityCount }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Total Waktu</label>
            <input type="text" name="totalTime" class="form-control" placeholder="Total Waktu" value="{{ $levels->totalTime }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Level Musuh</label>
            <input type="text" name="criminalLevel" class="form-control" placeholder="Level Musuh" value="{{ $levels->criminalLevel }}" readonly>
        </div>
    </div>
    {{-- <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $cities->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $cities->updated_at }}" readonly>
        </div>
    </div> --}}
@endsection