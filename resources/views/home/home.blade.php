@extends('layouts.index')

@section('container')
    <div class="row">
        <div class="col-sm-12 col-lg-6">
            <p>ALLA MORTE</p>
            <h1 class="fw-bolder">Semua bisa menjadi bagian ALLA MORTE</h1>
            <div class="teks mb-4">
                AM Membership dibuat untuk semua orang yang mendukung dan mencintai produk <b>AM</b>. Dengan membership ini setiap
                penggemar <b>AM</b> akan mendapatkan banyak keuntungan menarik. Kamu bisa mendapatkan merchandise yang
                menarik dan juga mengikuti program seru dari <b>AM</b>.
            </div>
            <a href="/register">
                <button type="button" class="btn btn-dark mb-4">Register</button>
            </a>
        </div>
        <div class="col-sm-12 col-lg-6 text-center">
            <img src="img/am.jpeg" class="rounded" alt="" style="width: 50%">
        </div>
    </div>
@endsection
