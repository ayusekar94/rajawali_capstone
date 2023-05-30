<html lang="en">
    @include('frontend.include.header')
<head>
    <title>Booking Tiket</title>
    @include('frontend.include.navbar')
    @yield('content')
    @include('frontend.include.source')
</head>
<body>
    <div class="container mt-5">
        <div class="mt-5">
            
        </div>
        <h1>Keranjang Tiket</h1>
        @if(!empty($cart))
            @foreach($transaksi as $item)
                <div class="ticket mt-3">
                    <img src={{ asset('assets/frontend/css/images/Sinsu.jpeg') }} class="card-img-top rounded mb-3" alt="Tiket 1">
                        <div class="info">
                        <h5>Nama Wisata :  {{ $item->wisata->name }}</h5>
                        <p>Tanggal      :  {{ $item->cart->tanggal }}</p>
                        <p>Harga Tiket  : Rp.  {{ number_format($item->wisata->price) }}</p>
                        <p>Jumlah Tiket :  {{ $item->jumlah }}</p>
                        </div>
                </div>
            @endforeach
            <div class="total mt-4 mb-5">
                Total Harga : Rp. {{ number_format($cart->jumlah_harga) }} <br>
                <a href="{{ url('konfirmasi') }}" class="btn btn-success" onclick="return confirm('Anda yakin akan Check Out ?');">
                    <i class="fa fa-shopping-cart"></i> Check Out
                </a>
            </div>
        @endif
    </div>
</body>
</html>
@include('frontend.include.footer')

