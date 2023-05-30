@extends('backend/layout/create')

@section('konten')
<div class="col-12 grid-margin">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Edit Informasi Promosi</h4>
      <form class="form-sample" method="POST" action="/promosi/{{ $promosi->id }}" id="myForm" enctype="multipart/form-data" class="row g-3">
        @method('PUT')
        @csrf
        <p class="card-description">
          Personal Informasi
        </p>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="text" class="form-control " id="exampleInputEmail1" name="name" value="{{ $promosi->name }}" placeholder="nama">
        </div>
        <div>
        <label for="image" class="form-label">Image</label>
        <input class="form-control" type="file" name="image" id="formFile"
        accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
        </div>
        <div class="mt-3"><img src="{{ asset($promosi->image) }}" id="output" width="400"></div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Potongan</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="price" value="{{ $promosi->price }}" placeholder="price">
        </div>
        <button type="submit" class="btn btn-primary me-2">Save</button>
        <button class="btn btn-light">Cancel</button>
      </form>
    </div>
  </div>
</div>
    
@endsection