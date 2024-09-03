@extends('layouts.app')
  
@section('title', 'Art')
  
@section('contents')
    <h1 class="mb-0">Detail Art</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">City</label>
            <input type="text" name="cityId" class="form-control" placeholder="city" value="{{ $city }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Art</label>
            <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $arts->name }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">ID</label>
            <input type="text" name="id" class="form-control" placeholder="ID" value="{{ $arts->id }}" readonly>
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