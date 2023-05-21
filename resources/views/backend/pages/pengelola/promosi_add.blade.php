@extends('backend/layout/create')

@section('konten')
<div class="col-12 grid-margin">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Tambah Promosi</h4>
      <form class="form-sample" method="POST" action="{{ url('promosi')}}" enctype="multipart/form-data">
        @csrf
        <p class="card-description">
          Informasi Promosi
        </p>
        <div class="mb-3 mt-4">
            <label for="image" class="form-label">Image</label>
            <img class="img-preview img-fluid mb-3 col-sm-3">
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewimage()">
            @error('image')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mt-3"><img src="" id="output" width="400"></div>
        <div class="mb-3 mt-4">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="text" class="form-control " id="exampleInputEmail1" name="name" placeholder="nama wisata">
        </div>
         <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Potongan</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="price" placeholder="price">
         </div>
        <button type="submit" class="btn btn-primary me-2">Submit</button>
        <button class="btn btn-light">Cancel</button>
      </form>
    </div>
  </div>
</div>
    
@endsection