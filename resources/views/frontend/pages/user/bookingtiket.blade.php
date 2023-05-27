<html lang="en">
    @include('frontend.include.header')
    @section('title')
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="resources\js\app.js"></script>
<head>
    <title>Booking Tiket</title>
    @yield('content')
    @include('frontend.include.source')
    <h1>Booking Tiket</h1>
</head>
<body>
    <div class="row my-4">
       <div class ="container">
            <div class="col-8">
                <div class="p-3 mb-2 bg-secondary text-black">
                <form>
                    <form action="#">
                        <label for="Tanggal">Tanggal</label>
                        <input type="date" class="form-control" id="Tanggal" name="Tanggal">
                    <div class="mb-3">
                    <label for="jumlahTiket">Jumlah Tiket</label>
                        <input type="number" class="form-control"value="1">
                    </div>
                    <div class="mb-3">
                        <label for="totalHarga" class="form-label">Total Harga</label>
                        <input type="BigInt" class="form-control" id="totalHarga">
                    </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
                </form>
    </div>
</body>
</html>
@include('frontend.include.footer')
