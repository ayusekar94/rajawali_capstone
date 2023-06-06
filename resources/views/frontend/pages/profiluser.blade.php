@extends('frontend.include.template')
@section('title','Profil User')
@section('content')

@include('frontend.include.navbar')
<section class="profiluser" style="margin-top: 50px">
    <div class="container text-center padding-top-xlg">
          <div class="row margin-top-xlg margin-bottom-xlg">
            <div class="col-4">
                <div class="col-11">
                    <img class="img-responsive center-block" src={{ asset('assets/frontend/css/images/user.png') }}>
                </div>
              </div>
                <div class="col-6  text-left pull-right border-2">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama </label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama">
                          </div>
                          <div class="mb-3">
                            <label for="exampleFormControlInput2" class="form-label">Email</label>
                            <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="Masukkan Email">
                          </div>
                          <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                          </div>
                          <div class="mb-3">
                            <label for="exampleFormControlInput3" class="form-label">No.Hp </label>
                            <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="Masukkan No.Hp">
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Password">
                        </div>
                          <div class="d-grid gap-2 d-md-flex justify-content-md-end" >
                            <button type="button" class="btn btn-outline-dark btn-sm">Simpan</button>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
</section>
@endsection
