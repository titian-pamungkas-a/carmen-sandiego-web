@extends('layouts.app')
  
@section('title', 'Attribute')
  
@section('contents')
    <h1 class="mb-0">Detail Attribute</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="name" class="form-control" placeholder="name" value="{{ $attributes->name }}" readonly>
        </div>
        {{-- <div class="col mb-3">
            <label class="form-label">City after</label>
            <input type="text" name="city2" class="form-control" placeholder="City after" value="{{ $links->city2 }}" readonly>
        </div> --}}
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Kalimat dalam Permainan</label>
            <input type="text" name="sentence" class="form-control" placeholder="sentence" value="{{ $attributes->sentence }}" readonly>
        </div>
        {{-- <div class="col mb-3">
            <label class="form-label">Distance in Hour</label>
            <input type="text" name="distanceHour" class="form-control" placeholder="Distance in Hour" value="{{ $links->distanceHour }}" readonly>
        </div> --}}
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