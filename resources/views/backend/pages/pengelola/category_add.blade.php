@extends('backend/layout/create')

@section('konten')
<div class="col-12 grid-margin">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Tambah Pengguna</h4>
      <form class="form-sample" method="POST" action="/category">@csrf
        <p class="card-description">
          Personal info 
        </p>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Nama Lengkap</label>
              <div class="col-sm-9">
                <input type="text" name="name" class="form-control" />
                @error('name')
                        <code>
                          {{ $message }}
                        </code>
                          @enderror
              </div>
            </div>
          </div>
        <button type="submit" class="btn btn-primary me-2">Submit</button>
        <button class="btn btn-light">Cancel</button>
      </form>
    </div>
  </div>
</div>
    
@endsection