@extends('layouts.app')
  
@section('title', 'Hubungan Antar Kota')
  
@section('contents')
    <h1 class="mb-0">Detail Hubungan</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Kota Sebelum</label>
            <input type="text" name="city1" class="form-control" placeholder="City before" value="{{ $cities->firstWhere('id', $links->city1)->name }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Kota Sesudah</label>
            <input type="text" name="city2" class="form-control" placeholder="City after" value="{{ $cities->firstWhere('id', $links->city2)->name }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">ID</label>
            <input type="text" name="id" class="form-control" placeholder="ID" value="{{ $links->id }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Jarak (jam)</label>
            <input type="text" name="distanceHour" class="form-control" placeholder="Distance in Hour" value="{{ $links->distanceHour }}" readonly>
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