@extends('backend/layout/create')

@section('konten')
<div class="col-12 grid-margin">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Edit Informasi Promosi</h4>
      <form class="form-sample" method="POST" action="/promosi/{{ $item->id }}">
        @method('PUT')
        @csrf
        <p class="card-description">
          Personal Informasi
        </p>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="text" class="form-control " id="exampleInputEmail1" name="name" value="{{ $item->name }}" placeholder="nama">
        </div>
        <div class="mb-3 mt-4">
            <label for="image" class="form-label">Image</label>
            <img class="img-preview img-fluid mb-3 col-sm-3">
            <input class="form-control" type="file" id="image" name="image" onchange="previewimage()" value="{{ $product->image }}">
        </div>
        <div class="mt-3"><img src="{{ asset($item->image) }}" id="output" width="400"></div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Potongan</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="price" value="{{ $item->price }}" placeholder="price">
        </div>
        <button type="submit" class="btn btn-primary me-2">Save</button>
        <button class="btn btn-light">Cancel</button>
      </form>
    </div>
  </div>
</div>
    
@endsection