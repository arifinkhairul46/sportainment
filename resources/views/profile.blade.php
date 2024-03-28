@extends('layouts.app')

@section('content')
    <div class="container-fluid ">
        <img src="assets/img/img-order-page.png" alt="img-banner-profile" width="1700" height="320">
    </div>
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <nav class="nav flex-column nav-menu">
                            <a class="nav-link border fw-normal" href="/profile">PROFILE</a>
                            <a class="nav-link border fw-normal" href="/order">ORDERS</a>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body mb-3 row">
                        <div class="col-lg-6">
                            <h5 class="card-title mt-3">Profile Details</h5>
                            <div class="row mt-3">
                                <div class="col-md-4 label fw-semibold">Full Name</div>
                                <div class="col-md-8">{{auth()->user()->name}}</div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-4 label fw-semibold">Email</div>
                                <div class="col-md-8">{{auth()->user()->email}}</div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-4 label fw-semibold">Phone</div>
                                <div class="col-md-8">087885293721</div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h5 class="card-title mt-3">Other Info</h5>
                            <div class="row mt-3">
                                <div class="col-md-4 label fw-semibold">Club Name</div>
                                <div class="col-md-8">rabba</div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-4 label fw-semibold">Other Phone</div>
                                <div class="col-md-8">-</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection