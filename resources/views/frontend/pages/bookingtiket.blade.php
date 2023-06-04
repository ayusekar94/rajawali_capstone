@extends('frontend.include.template')
@section('title','Booking Tiket')
@section('content')

@include('frontend.include.navbar')
<section class="homepage4">
    <div class="container">
        <div class="row my-5">
            <div class="col-4">

            </div>
            <div class="col-3">
                <div class="card border-0 bg-light" style="width: 30rem;">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Tanggal</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jumlah Tiket</label>
                            <input type="number"class="form-control"  >
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Harga Total</label>
                            <input class="form-control">
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="button" class="btn btn-outline-dark btn-sm">Pesan</button>
                        </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
