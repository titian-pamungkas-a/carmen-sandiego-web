@extends('layouts.app')

@section('title', 'Attribute setiap Kota')
  
@section('contents')
    <h1 class="mb-0">Edit Attribute Kota</h1>
    <hr />
    <form action="{{ route('cityattributes.update', $cityattributes->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            {{-- <div class="col mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="name" value="{{ $attributes->name }}" >
            </div> --}}
            {{-- <div class="col mb-3">
                <label class="form-label">Province</label>
                <input type="text" name="city2" class="form-control" placeholder="City after" value="{{ $links->city2 }}" >
            </div> --}}
            <div class="col">
                <label class="form-label">Kota</label>
                <select name="cityId" id="cityId" class="form-control">
                    {{--- <option value="{{$cities->firstWhere('id', $cityattributes->cityId)->id}}">{{$cities->firstWhere('id', $cityattributes->cityId)->name}}</option> --}}
                    @foreach ($cities as $city)
                        @if ($city->id != $cityattributes->cityId)
                            <option value="{{$city->id}}">{{ $city->name }}</option>
                        @else
                            <option selected value="{{$city->id}}">{{ $city->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="col">
                <label class="form-label">Attribute</label>
                <select name="attributeId" id="attributeId" class="form-control">
                    <option value="{{$attribute->firstWhere('id', $cityattributes->attributeId)->id}}">{{$attribute->firstWhere('id', $cityattributes->attributeId)->name}}</option>
                    @foreach ($attribute as $att)
                        <option value="{{$att->id}}">{{ $att->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama Attribute</label>
                <input type="text" name="attributeName" class="form-control" placeholder="Attribute Name" value="{{ $cityattributes->attributeName }}" >
            </div>
            {{-- <div class="col mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" placeholder="Descriptoin" >{{ $product->description }}</textarea>
            </div> --}}
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection