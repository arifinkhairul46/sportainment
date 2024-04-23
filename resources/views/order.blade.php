@extends('layouts.app')

@section('content')
    <div class="container-fluid ">
        <img src="assets/img/img-order-page.png" alt="img-banner-profile" class="image-banner-order">
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
                        <table id="t_order" class="table mt-3">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">ID ORDER</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Diskon</th>
                                    <th scope="col">Total Bayar</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach($order as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->id_booking}}</td>
                                    <td>
                                        @if($item->status_bayar == 1)
                                            <span class="bg-warning">Menunggu Konfirmasi</span>
                                        @elseif($item->status_bayar == 2)
                                            <span class="bg-success">Pembayaran Diterima</span>
                                        @endif
                                    </td>
                                    <td>Rp. {{$item->total_harga}}</td>
                                    <td>Rp. {{$item->diskon}}</td>
                                    <td>Rp. {{$item->total_bayar}}</td>
                                    <td>
                                        <a href="/order/{{$item->id}}" class="btn btn-sm btn-primary">Detail</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection