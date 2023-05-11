@extends('backend/layout/create')

@section('konten')
<main class="container-fluid px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Riwayat Pesanan</h1>
    </div>
  
    @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{ $message }}</p>
      </div>
    @endif
  
    <div class="card mb-4">
      <div class="card-body">
          <table class="table table-hover">
              <thead>
                  <tr>
                    <th>Name</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Jumlah</th>
                    <th>Price</th>
                  </tr>
              </thead>
              <tbody>
                @foreach ($transaction as $item)
                  <tr>
                    <td>{{ $item->cart->user->name }}</td>
                    <td>{{ $item->wisata->name}}</td>
                    <td>{{ $item->tanggal}}</td>
                    <td>
                      @if( $item->cart->status  == 1)
                      <form action="/verify" method="get" class="d-inline">
                          @csrf
                          <input type="hidden" name="id" value="{{ $item->cart->id }}">
                          <button type="submit" class="btn btn-warning" >Verify</button>
                      </form>
      
                  @else
                      <form action="/block" method="get" class="d-inline">
                          @csrf
                          <input type="hidden" name="id" value="{{ $item->cart->id }}">
                          <button type="submit" class="btn btn-success" >Verified</button>
                      </form>
                  @endif
                    </td>
                    <td>{{ $item->jumlah}}</td>
                    <td align="right">Rp. {{ number_format($item->jumlah_harga-$item->cart->kode) }}</td>
                  </tr>
                @endforeach
                <td>{{ $item->harga}}</td>
              </tbody>
          </table>
      </div>
    </div>
  </main>
@endsection