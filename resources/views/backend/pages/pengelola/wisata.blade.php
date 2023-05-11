@extends('backend/layout/create')

@section('konten')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Daftar Wisata Wonosobo</h4>
        <p class="card-description">
          <a href="/wisata/create" class="btn btn-primary float-end btn-sm" style="margin-right: 10px">+ Tambah</a><br>
        </p>
        <div class="card mb-4">
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>
                  No
                </th>
                <th>
                  Nama Wisata
                </th>
                <th>
                  Image
                </th>
                <th>
                  Deskripsi
                </th>
                <th>
                  Rating
                </th>
                <th>
                  Price
                </th>
                <th>
                  Lokasi
                </th>
                <th>
                  Category
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
                <td>
                  {{ $i->name }}
                </td>
                <img src="{{ asset($item->image) }}" class="img-thumbnail" style="width:400px" />
                <td>
                  {{ $i-> description}}
                </td>
                <td>
                  {{ $i-> rating}}
                </td>
                <td>
                  {{ $i-> price}}
                </td>
                <td>
                  {{ $i-> location}}
                </td>
                <td>
                  {{ $item->category->name }}
                </td>
                <td>
                  <form action="/wisata/{{ $i->id }}" method="POST">
                    {{-- Update  --}}
                    <a type="button" href="/wisata/{{ $i->id }}/edit" class="btn btn-warning btn-rounded btn-icon btn-sm"><i class="mdi mdi-lead-pencil"></i></a>
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