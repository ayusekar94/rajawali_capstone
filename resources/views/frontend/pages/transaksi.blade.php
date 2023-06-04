@extends('frontend.include.template')
@section('title','Transaksi')
@section('content')

@include('frontend.include.navbar')
<section class="homepage4">
  <div class="container">
      <div class="row my-5">
          <div class="col-3">
              <div class="card border-0" style="width: 15rem;">
              </div>
          </div>
          <div class="col-3">
              <div class="card border-0 bg-light" style="width: 40rem;">
                  <form>
                        <b >Detail</b>
                        <h5 >Total Pembayaran  </h5>
                        <h5 align="right">Harga </h5>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Masukan nominasi bayar</label>
                          <input type="text" class="form-control">
                      </div>
                      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="button" class="btn btn-outline-dark btn-sm">Simpan</button>
                      </div>
                    </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
@endsection
