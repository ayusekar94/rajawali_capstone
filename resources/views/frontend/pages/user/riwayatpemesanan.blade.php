@extends('frontend.include.template')
@section('title','Riwayat Pesanan')
@section('content')

@include('frontend.include.navbar')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 mb-3 mt-5">
        </div>
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h3><i class="fa fa-history"></i> Riwayat Pemesanan</h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Jumlah Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            {{-- @foreach($carts as $item)
                                <td>{{ $item->tanggal }}</td>
                                <td>
                                    @if($item->status == 1)
                                        Sudah Pesan & Belum dibayar
                                    @else
                                        Sudah dibayar 
                                    @endif
                                </td>
                                <td>Rp. {{ number_format($item->jumlah_harga-$item->kode) }}</td>
                                <td>
                                    <a href="{{ url('history') }}/{{ $item->id }}" class="btn btn-primary"><i class="fa fa-file-text-o"></i> Detail</a>
                                </td>
                            </tr>
                            @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <div class="container">
    <h1>Detail Riwayat Pemesanan</h1>
        <div class="ticket mt-5">
            <img src={{ asset('assets/frontend/css/images/Sinsu.jpeg') }} class="card-img-top rounded mb-3" alt="Tiket 1">
                <div class="info">
                    <p>Nama Wisata :</p>
                    <p>Tanggal Wisata : </p>
                    <p>Harga Tiket : </p>
                    <p>Jumlah Tiket : </p>
                    <button type="submit" class="btn btn-primary "> Struk Pembayaran </button>
                </div>
        </div>
</div>
<div class="container">
    <div class="row mt-5">
        <div class="col-4 mt-5">
            <h2>Riwayat Pesanan</h2>
            <div class="card border-0" style="width: 8rem;">
                <img src={{ asset('assets/frontend/css/images/Sinsu.jpeg') }} class="card-img-top rounded mb-3" alt="...">
            </div>
            <button type="submit" class="btn btn-primary ">Lihat Riwayat</button>
        </div>
    </div>
</div>         --}}
@endsection