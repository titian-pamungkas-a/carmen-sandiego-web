@extends('layouts.app')
  
@section('title', 'Kota dalam Permainan')
  
@section('contents')
    <h2 class="mb-0">Detail Kota</h2>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama Kota</label>
            <input type="text" name="name" class="form-control" placeholder="Title" value="{{ $cities->name }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Provinsi</label>
            <input type="text" name="province" class="form-control" placeholder="Price" value="{{ $cities->province }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Gambar</label>
            <input type="text" name="imagePath" class="form-control" placeholder="Product Code" value="{{ $cities->imagePath }}" readonly>
        </div>
        {{-- <div class="col mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="description" placeholder="Descriptoin" readonly>{{ $product->description }}</textarea>
        </div> --}}
    </div>
    <div>
        <hr style="height:2px;border-width:0;color:gray;background-color:gray" />
    </div>
    <div class="d-flex align-items-center justify-content-between">
        <h2 class="mb-0">Attribute</h2>
        <a href="{{ route('cityattributes.create') }}" class="btn btn-primary">Tambah Attribute</a>
    </div>
    <hr />
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Attribute</th>
                <th>Nama Attribute</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($attributeName->count() > 0)
                @foreach($attributeName as $rs)
                <tr>
                    <td class="align-middle">{{ $rs->id }}</td>
                    <td class="align-middle">{{ $cities->name }}</td>
                    <td class="align-middle">{{ $attributes->firstWhere('id', $rs->attributeId)->name }}</td>
                    <td class="align-middle">{{ $rs->attributeName }}</td>
                    <td class="align-middle">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ route('cityattributes.edit', $rs->id) }}" type="button" class="btn btn-warning">Edit</a>
                            {{-- <a href="" type="button" class="btn btn-danger">Delete</a> --}}
                            <form action="{{ route('cityattributes.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger m-0">Hapus</button>
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
    <div>
        <hr style="height:2px;border-width:0;color:gray;background-color:gray" />
    </div>
    <div class="d-flex align-items-center justify-content-between">
        <h2 class="mb-0">Hubungan Antar Kota</h2>
        <a href="{{ route('links.create') }}" class="btn btn-primary">Tambah Hubungan</a>
    </div>
    <hr />
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>ID</th>
                <th>Kota Sebelum</th>
                <th>Kota Sesudah</th>
                <th>Jarak (jam)</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($links->count() > 0)
                @foreach($links as $rs)
                <tr>
                    <td class="align-middle">{{ $rs->id }}</td>
                    <td class="align-middle">{{ $cities->firstWhere('id', $rs->city1)->name}}</td>
                    <td class="align-middle">{{ $cities->firstWhere('id', $rs->city2)->name }}</td>
                    <td class="align-middle">{{ $rs->distanceHour }}</td>
                    <td class="align-middle">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ route('links.edit', $rs->id) }}" type="button" class="btn btn-warning">Edit</a>
                            {{-- <a href="{{ route('links.', $rs->id) }}" type="button" class="btn btn-danger">Delete</a> --}}
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
    </table>
@endsection