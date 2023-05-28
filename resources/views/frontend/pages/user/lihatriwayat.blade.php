<html lang="en">
    @include('frontend.include.header')
<head>
    <title>Detail Riwayat Pesanan</title>
    @yield('content')
    @include('frontend.include.source')
    <style>
    .container {
                max-width: 1200px;
                margin: 1 auto;
                padding: 10px;
                background-color: #fff;
                border-radius: 5px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            }
            .ticket {
                display: flex;
                align-items: center;
                margin-bottom: 10px;
                padding: 10px;
                background-color: #f9f9f9;
                border-radius: 5px;
            }
            .ticket img {
                width: 80px;
                height: 80px;
                margin-right: 10px;
                object-fit: cover;
                border-radius: 5px;
            }
    </style>
</head>
<body>
    @yield('content')
    @include('frontend.include.source')
    <div class="container">
        <h1>Detail Riwayat Pemesanan</h1>
            <div class="ticket">
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
</body>
<footer>
</footer>
</html>
