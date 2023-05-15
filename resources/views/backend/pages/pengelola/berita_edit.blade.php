@extends('backend/layout/create')

@section('konten')
<div class="col-12 grid-margin">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Edit Informasi Berita</h4>
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

      <form method="post" action="/berita/{{ $item->id }}" id="myForm" enctype="multipart/form-data" class="row g-3">
        @method('PUT')
        @csrf
        <p class="card-description">
          Informasi Berita Seputar Wisata Wonosobo
        </p>
        <div class="mb-3">
            <label for="desk" class="from-label">Berita</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1"
            aria-describedby="emailHelp" name="name" value="{{ $item->name }}" > 
            @error('name')
                <div class="invalid-feedback">
                   Berita tidak boleh kosong
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="img" class="form-label">Gambar</label>
            <img class="img-preview img-fluid mb-3 col-sm-3">
            <input class="form-control" type="file" id="image" name="image" onchange="previewimage()" value="{{ $item->image }}">
        </div>
        <div class="mb-3">
            <label for="desk" class="from-label">Deskripsi</label>
            <input type="text" class="form-control @error('description') is-invalid @enderror"
            id="exampleInputPassword1" name="description" value="{{ $item->description }}" > 
            @error('description')
                <div class="invalid-feedback">
                    Deskripsi tidak boleh kosong
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