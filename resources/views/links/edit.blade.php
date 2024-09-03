@extends('layouts.app')

@section('title', 'Hubungan Antar Kota')
  
@section('contents')
    <h1 class="mb-0">Edit Hubungan</h1>
    <hr />
    <form action="{{ route('links.update', $links->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Kota Sebelum</label>
                <select name="city1" id="city1" class="form-control">
                    @foreach ($cities as $city)
                        @if ($links->city1 != $city->id)
                            <option value="{{$city->id}}">{{ $city->name }}</option>
                        @else
                            <option value="{{$city->id}}" selected>{{ $city->name }}</option>
                        @endif
                    @endforeach
                </select>
                {{-- <input type="text" name="city1" class="form-control" placeholder="City before" value="{{ $links->city1 }}" > --}}
            </div>
            <div class="col mb-3">
                <label class="form-label">Kota Sesudah</label>
                <select name="city2" id="city2" class="form-control">
                    @foreach ($cities as $city)
                        @if ($links->city2 != $city->id)
                            <option value="{{$city->id}}">{{ $city->name }}</option>
                        @else
                            <option value="{{$city->id}}" selected>{{ $city->name }}</option>
                        @endif
                    @endforeach
                </select>
                {{-- <input type="text" name="city2" class="form-control" placeholder="City after" value="{{ $links->city2 }}" > --}}
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Jarak (jam)</label>
                <input type="text" name="distanceHour" class="form-control" placeholder="Distance in Hour" value="{{ $links->distanceHour }}" >
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