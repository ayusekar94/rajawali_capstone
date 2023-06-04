@extends('frontend.include.template')
@section('title','Pofil User')
@section('content')

@include('frontend.include.navbar')
<section class="homepage4">
    <div class="container">
        <div class="row my-5">
            <div class="col-4">
                <div class="card border-0" style="width: 16rem;">
                    <img src={{ asset('assets/frontend/css/images/user.jpg') }} class="card-img-top rounded-circle" alt="...">
                    <div class="mb-3">
                        <label for="formFile" class="form-label"> </label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card border-0 bg-light" style="width: 30rem;">
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Alamat</label>
                            <input type="textarea" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">No HP</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="button" class="btn btn-outline-dark btn-sm">Simpan & Bayar</button>
                        </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
