@extends('layouts.app')

@section('title', 'Skenario yang ditentukan')
  
@section('contents')
    <h1 class="mb-0">Edit Kota dalam Skenario</h1>
    <hr />
    {{-- <form action="{{ route('fixes.updatecity', $id1, $scenarios->id) }}" method="POST"> --}}
    <form action="{{ route('fixes.updatecity', ['id'=>$id1, 'cityId'=>$scenarios->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Urutan</label>
                <input type="text" name="order" class="form-control" placeholder="Name" value="{{ $scenarios->order }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Kota</label>
                    <select name="cityId" id="cityId" class="form-control">
                        @foreach ($cities as $city)
                            @if ($city->id != $scenarios->cityId)
                                <option value="{{$city->id}}">{{ $city->name  }}</option>
                            @else
                                <option value="{{$city->id}}" selected>{{ $city->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </label>
            </div>
        </div>
        {{-- <div class="row">
            <div class="col mb-3">
                <label class="form-label">Product Code</label>
                <input type="text" name="product_code" class="form-control" placeholder="Product Code" value="{{ $product->product_code }}" >
            </div>
            <div class="col mb-3">
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