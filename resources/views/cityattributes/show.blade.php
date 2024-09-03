@extends('layouts.app')
  
@section('title', 'Attribute setiap Kota')
  
@section('contents')
    <h1 class="mb-0">Detail Attribute Kota</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Kota</label>
            <input type="text" name="cityId" class="form-control" placeholder="City" value="{{ $cities->firstWhere('id', $cityattributes->cityId)->name }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Attribute</label>
            <input type="text" name="attributeId" class="form-control" placeholder="Attribute" value="{{ $attribute->firstWhere('id', $cityattributes->attributeId)->name }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama Attribute</label>
            <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $cityattributes->attributeName }}" readonly>
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