<html lang="en">
    @include('frontend.include.header')
<head>
    <style>
        body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
            }

            .container {
                max-width: 1200px;
                margin: 1 auto;
                padding: 10px;
                background-color: #fff;
                border-radius: 5px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            }

            h1 {
                text-align: center;
                color: #333;
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

            .ticket .info {
                flex-grow: 1;
            }

            .ticket .info h3 {
                margin: 0;
                color: #333;
            }

            .ticket .info p {
                margin: 0;
                color: #888;
            }

            .total {
                text-align: right;
                margin-top: 20px;
                font-weight: bold;
            }
    </style>
</head>
<body>
    <div class="container">
    <h1>Keranjang Tiket</h1>
        <div class="ticket">
            <img src={{ asset('assets/frontend/css/images/Sinsu.jpeg') }} class="card-img-top rounded mb-3" alt="Tiket 1">
                <div class="info">
                <h5>Nama Wisata :</h5>
                <p>Tanggal Wisata : </p>
                <p>Harga Tiket : </p>
                <p>Jumlah Tiket : </p>
                </div>
        </div>
    <div class="ticket">
        <img src={{ asset('assets/frontend/css/images/Sinsu.jpeg') }} class="card-img-top rounded mb-3" alt="Tiket 2">
            <div class="info">
                <h5>Nama Wisata :</h5>
                <p>Tanggal Wisata : </p>
                <p>Harga Tiket : </p>
                <p>Jumlah Tiket : </p>
                </div>
    </div>
        <div class="total">
            Total Harga : $25
        </div>
    </div>
</body>
</html>
