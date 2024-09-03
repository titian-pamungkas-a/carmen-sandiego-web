@extends('layouts.app')
  
@section('title', 'Skenario yang ditentukan')
  
@section('contents')
    <h2 class="mb-0">Detail Skenario</h2>
    <hr />
    <form action="{{ route('fixes.update', $fixes->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="col mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="name" class="form-control" placeholder="Title" value="{{ $fixes->name }}">
        </div>
        <div class="row">
            <div class="col mb-3">
                {{-- <label class="form-label">Criminal</label>
                <input type="text" name="criminal" class="form-control" placeholder="Price" value="{{ $fixes->criminalId }}"> --}}
                <label class="form-label">Penjahat</label>
                    <select name="criminalId" id="criminalId" class="form-control">
                        @foreach ($criminals as $criminal)
                            @if ($criminal->id != $fixes->criminalId)
                                <option value="{{$criminal->id}}">{{ $criminal->name . " - " . $criminal->diff }}</option>
                            @else
                                <option value="{{$criminal->id}}" selected>{{ $criminal->name . " - " . $criminal->diff}}</option>
                            @endif
                        @endforeach
                    </select>
                </label>
            </div>
            <div class="col mb-3">
                <label class="form-label">Total Waktu</label>
            <input type="text" name="totalTime" class="form-control" placeholder="Total Time" value="{{ $fixes->totalTime }}">
            </div>
        </div>
        
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
    
    {{-- <div class="row">
        <div class="col mb-3">
            <label class="form-label">Image Path</label>
            <input type="text" name="imagePath" class="form-control" placeholder="Product Code" value="{{ $cities->imagePath }}" readonly>
        </div>
        {{-- <div class="col mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="description" placeholder="Descriptoin" readonly>{{ $product->description }}</textarea>
        </div>
    </div> --}}
    <div>
        <hr style="height:2px;border-width:0;color:gray;background-color:gray" />
    </div>
    <div class="d-flex align-items-center justify-content-between">
        <h2 class="mb-0">Kota</h2>
        <a href="{{ route('fixes.createcity', $fixes->id) }}" class="btn btn-primary">Tambah Kota</a>
    </div>
    <hr />
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>ID</th>
                <th>Urutan</th>
                <th>Kota</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($scenarios->count() > 0)
                @foreach($scenarios as $rs)
                <tr>
                    <td class="align-middle">{{ $rs->id }}</td>
                    <td class="align-middle">{{ $rs->order }}</td>
                    <td class="align-middle">{{ $cities->firstWhere('id', $rs->cityId)->name }}</td>
                    <td class="align-middle">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            {{-- <a href="{{route('fixes.editcity', $fixes->id, $rs->id)}}" type="button" class="btn btn-warning">Edit</a> --}}
                            <a href="{{route('fixes.editcity', ['id'=>$fixes->id, 'cityId'=>$rs->id])}}" type="button" class="btn btn-warning">Edit</a>
                            {{-- <a href="" type="button" class="btn btn-danger">Delete</a> --}}
                            <form action="" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger m-0">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Product not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
    {{-- <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $cities->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $cities->updated_at }}" readonly>
        </div>
    </div>
    <div>
        <hr style="height:2px;border-width:0;color:gray;background-color:gray" />
    </div>
    <div class="d-flex align-items-center justify-content-between">
        <h2 class="mb-0">Link</h2>
        <a href="{{ route('links.create') }}" class="btn btn-primary">Add Link</a>
    </div>
    <hr />
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>ID</th>
                <th>City Before</th>
                <th>City After</th>
                <th>Distance in Hour</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($scenarios->count() > 0)
                @foreach($scenarios as $rs)
                <tr>
                    <td class="align-middle">{{ $rs->id }}</td>
                    <td class="align-middle">{{ $cities->firstWhere('id', $rs->city1)->name}}</td>
                    <td class="align-middle">{{ $cities->firstWhere('id', $rs->city2)->name }}</td>
                    <td class="align-middle">{{ $rs->distanceHour }}</td>
                    <td class="align-middle">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ route('links.edit', $rs->id) }}" type="button" class="btn btn-warning">Edit</a>
                            {{-- <a href="{{ route('links.', $rs->id) }}" type="button" class="btn btn-danger">Delete</a>
                            <form action="{{ route('links.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger m-0">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Product not found</td>
                </tr>
            @endif
        </tbody>
    </table> --}}
