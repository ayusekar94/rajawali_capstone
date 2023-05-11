@extends('backend/layout/create')

@section('konten')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Informasi Berita</h4>
        <p class="card-description">
          <a href="/berita/create" class="btn btn-primary float-end btn-sm" style="margin-right: 10px">+ Tambah</a><br>
        </p>
        <div class="card mt-3 mb-4">
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>
                 No
                </th>
                <th>
                  Berita
                </th>
                <th>
                  Image
                </th>
                <th>
                  Deskripsi
                </th>
                <th>
                  Aksi
                </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($item as $i)
              <tr>
                <td>
                  {{ $i->no }}
                </td>
                </td>
                <img src="{{ asset($item->image) }}" class="img-thumbnail" style="width:400px" />
                <td>
                  {{ $i-> description}}
                </td>
                <!-- <td>
                  <i class="menu-icon mdi mdi-phone"></i>
                  {{ $i->noHp }} <hr>
                  <i class="menu-icon mdi mdi-home-map-marker"></i>
                  {{ $i->alamat }}
                </td> -->
                <td>
                  <form action="/berita/{{ $i->id }}" method="POST">
                    {{-- Update  --}}
                    <a type="button" href="/berita/{{ $i->id }}/edit" class="btn btn-warning btn-rounded btn-icon btn-sm"><i class="mdi mdi-lead-pencil"></i></a>
                    @method("delete")
                    @csrf
                    {{-- Delete  --}}
                      <button class="badge bg-danger border-0" onclick="return confirm('apakah anda yakin ?')"><i class="mdi mdi-delete-forever"></i></button>
                    </button>
                    </form> 
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
    </div>
  </div>
@endsection