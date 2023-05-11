@extends('backend/layout/create')

@section('konten')
<div class="col-12 grid-margin">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Tambah Wisata</h4>
      <form class="form-sample" method="POST" action="{{ url('wisata')}}" enctype="multipart/form-data">
        @csrf
        <p class="card-description">
          Informasi Wisata Wonosobo
        </p>
        <div class="mb-3 mt-4">
            <label for="image" class="form-label">Image</label>
            <input class="form-control" type="file" name="image" id="formFile"
            accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">

        </div>
        <div class="mt-3"><img src="" id="output" width="400"></div>
        <div class="mb-3 mt-4">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="text" class="form-control " id="exampleInputEmail1" name="name" placeholder="nama wisata">
        </div>
        <div class="mb-3">
             <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="deskripsi" placeholder="deskripsi">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Rating</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="rating" placeholder="rating">
         </div>
         <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Harga</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="price" placeholder="price">
         </div>
         <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Location</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="location" placeholder="location">
         </div>
         <div class="col-md-6">
            <label for="category" class="form-label">Pilih Category</label>
            <select class="form-select @error('category_id') is-invalid @enderror" aria-label="Default select example"
            name="category_id">
            @foreach ($category as $item)
                <option value="{{ $item->id }}">{{ $item->id }} - {{ $item->name }}</option>
            @endforeach
            </select>
            @error('category_id')
                <div class="invalid-feedback">
                    Pilih salah satu kategori
                </div>
            @enderror
        </div>
    
        <button type="submit" class="btn btn-primary me-2">Submit</button>
        <button class="btn btn-light">Cancel</button>
      </form>
    </div>
  </div>
</div>
    
@endsection