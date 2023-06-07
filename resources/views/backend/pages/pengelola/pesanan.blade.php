@extends('backend/layout/create')

@section('konten')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">List Transaksi User</h4>
        {{-- <p class="card-description">
          <a href="/admin/create" class="btn btn-primary float-end btn-sm" style="margin-right: 10px">+ Tambah</a><br>
        </p> --}}
        
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>
                  Name
                </th>
                <th>
                  Jenis Wisata
                </th>
                <th>
                  Image
                </th>
                <th>
                  Status
                </th>
                <th>
                    Jumlah Tiket
                </th>
                <th>
                    Total Harga
                </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($transaksi as $i)
              <tr>
                <td>
                  {{ $i->cart->user->name }}
                </td>
                <td>
                  {{ $i->wisata->name }}
                </td>
                <td>
                  <img width="60px" height="60px" src="{{ asset($i->image) }}" >
                </td>
                <td>
                    @if( $i->cart->status  == 1)
                        <form action="/verify" method="get" class="d-inline">
                            @csrf
                            <input type="hidden" name="id" value="{{ $i->cart->id }}">
                            <button type="submit" class="btn btn-warning" >Verify</button>
                        </form>
                    @else
                        <form action="/block" method="get" class="d-inline">
                            @csrf
                            <input type="hidden" name="id" value="{{ $i->cart->id }}">
                            <button type="submit" class="btn btn-success" >Verified</button>
                        </form>
                    @endif
                </td>
                <td>
                  {{ $i->jumlah }}
                </td>
                <td>
                  Rp. {{ number_format($i->jumlah_harga-$i->cart->kode) }}
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection