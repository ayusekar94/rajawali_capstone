@extends('backend/layout/create')

@section('konten')
<div class="col-12 grid-margin">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Edit Informasi Wisata</h4>

      @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
        </div>
    @endif

      <form method="post" action="/wisata/{{ $wisata->id }}" id="myForm" enctype="multipart/form-data" class="row g-3">
        @method('PUT')
        @csrf
        <p class="card-description">
          Informasi Wisata Wonosobo
        </p>
        <div class="mb-3">
            <label for="desk" class="from-label">Nama Wisata</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1"
            aria-describedby="emailHelp" name="name" value="{{ $wisata->name }}" > 
            @error('name')
                <div class="invalid-feedback">
                    Nama tidak boleh kosong
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="img" class="form-label">Gambar</label>
            <img class="img-preview img-fluid mb-3 col-sm-3">
            <input class="form-control" type="file" id="image" name="image" onchange="previewimage()" value="{{ $wisata->image }}">
        </div>
        <div class="mb-3">
            <label for="desk" class="from-label">Deskripsi</label>
            <input type="text" class="form-control @error('description') is-invalid @enderror"
            id="exampleInputPassword1" name="description" value="{{ $wisata->description }}" > 
            @error('description')
                <div class="invalid-feedback">
                    Deskripsi tidak boleh kosong
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="desk" class="from-label">Rating</label>
            <input type="text" class="form-control @error('rating') is-invalid @enderror"
            id="exampleInputPassword1" name="rating" value="{{ $wisata->rating }}" > 
            @error('rating')
                <div class="invalid-feedback">
                    Rating tidak boleh kosong
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror"
                id="exampleInputPassword1" name="price" value="{{ $wisata->price }}">
            @error('price')
                <div class="invalid-feedback">
                    Harga tidak boleh kosong
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Location</label>
            <input type="text" class="form-control @error('location') is-invalid @enderror"
                id="exampleInputPassword1" name="location" value="{{ $wisata->location }}">
            @error('location')
                <div class="invalid-feedback">
                    Lokasi tidak boleh kosong
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Pilih Category</label>
            <select class="form-select @error('id_category') is-invalid @enderror" aria-label="Default select example"
            name="id_category">
            @foreach ($category as $item)
                <option value="{{ $item->id }}" {{ $wisata->id_category == $item->id ? 'selected' : '' }}>
                    {{ $item->name }}
                </option>
            @endforeach
            </select>
            @error('category_id')
                <div class="invalid-feedback">
                    Pilih salah satu kategori
                </div>
            @enderror
        </div>
        <div class="col-12">
        <button type="submit" class="btn btn-primary me-2">Save</button>
        <button class="btn btn-light">Cancel</button>
        </div>
      </form>
    </div>
  </div>
</div>
    
@endsection