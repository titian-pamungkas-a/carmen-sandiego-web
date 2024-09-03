@extends('layouts.app')

@section('title', 'Edit Art')
  
@section('contents')
    <h1 class="mb-0">Edit Art</h1>
    <hr />
    <form action="{{ route('arts.update', $arts->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">City</label>
                {{-- <input type="text" name="cityId" class="form-control" placeholder="City before" value="{{ $arts->cityId }}" > --}}
                <select name="cityId" id="cityId" class="form-control">
                    <option value="{{$citi->id}}">{{ $citi->name }}</option>
                    @foreach ($cities as $city)
                        <option value="{{$city->id}}">{{ $city->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col mb-3">
                <label class="form-label">Art</label>
                <input type="text" name="name" class="form-control" placeholder="City after" value="{{ $arts->name }}" >
            </div>
        </div>
        {{-- <div class="row">
            <div class="col mb-3">
                <label class="form-label">Product Code</label>
                <input type="text" name="distanceHour" class="form-control" placeholder="Distance in Hour" value="{{ $links->distanceHour }}" >
            </div>
            {{-- <div class="col mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" placeholder="Descriptoin" >{{ $product->description }}</textarea>
            </div>
        </div> --}}
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection