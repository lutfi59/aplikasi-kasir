@extends('layout.template')
@section('title', $title)
@section('content')
    <div class="pt-3">
        <h2>Dashboard</h2>
    </div>
    <div>
        <div class="row">
            <div class="col-md-3 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-3">
                                <i class="fas fa-2xl fa-users"></i>
                            </div>
                            <div class="col-9">
                                <h5 class="m-0">Pengguna</h5>
                                <p class="fs-3 m-0">{{ count($users) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-3">
                                <i class="fas fa-2xl fa-boxes"></i>
                            </div>
                            <div class="col-9">
                                <h5 class="m-0">Kategori Produk</h5>
                                <p class="fs-3 m-0">{{ count($categories) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-3">
                                <i class="fas fa-2xl fa-box"></i>
                            </div>
                            <div class="col-9">
                                <h5 class="m-0">Produk</h5>
                                <p class="fs-3 m-0">{{ count($products) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-3">
                                <i class="fas fa-2xl fa-cash-register"></i>
                            </div>
                            <div class="col-9">
                                <h5 class="m-0">Transaksi</h5>
                                <p class="fs-3 m-0">{{ count($transactions) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
