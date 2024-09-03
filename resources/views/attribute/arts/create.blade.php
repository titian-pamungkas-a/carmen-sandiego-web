@extends('layouts.app')
  
@section('title', 'Create Art')
  
@section('contents')
    <h1 class="mb-0">Add Art</h1>
    <hr />
    <form action="{{ route('arts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                {{-- <input type="text" name="city1" class="form-control" placeholder="City Before"> --}}
                <label class="form-label">City Name</label>
                <select name="cityId" id="cityId" class="form-control">
                    <option value="">== Pilih Kota ==</option>
                    @foreach ($cities as $city)
                        <option value="{{$city->id}}">{{ $city->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col">
                {{-- <input type="text" name="city2" class="form-control" placeholder="City After"> --}}
                <label class="form-label">Art</label>
                <input type="text" name="name" class="form-control" placeholder="Kesenian">
            </div>
        </div>
        {{-- <div class="row mb-3">
            <div class="col">
                <label class="form-label">Distance in Hour</label>
                <input type="text" name="distanceHour" class="form-control" placeholder="Distance between cities">
            </div>
            {{-- <div class="col">
                <textarea class="form-control" name="description" placeholder="Descriptoin"></textarea>
            </div>
        </div> --}}
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection