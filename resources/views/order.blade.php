@extends('layouts.app')

@section('content')
    <div class="container-fluid ">
        <img src="assets/img/img-order-page.png" alt="img-banner-profile" class="responsive" >
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
                    <div class="table-responsive">
                        <table id="t_order" class="table">
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
                                    <td>Rp. {{number_format($item->total_harga)}}</td>
                                    <td>Rp. {{number_format($item->diskon)}}</td>
                                    <td>Rp. {{number_format($item->total_harga - $item->diskon)}}</td>
                                    <td>
                                        <button type="button" class="btn btn-primary" onclick="detail_order('{{$item->id_booking}}')" data-toggle="modal" data-target=".bd-example-modal-lg">
                                            Detail
                                        </button>
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

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#t_order').DataTable( {
                responsive: true,
            });
        });

        function detail_order (id) {
            $('.bd-example-modal-lg').modal('show');
        }

        function close_modal () {
            $('.bd-example-modal-lg').modal('hide');
        }
    </script>

    <style>
        .dataTables_wrapper {
            padding: 12px;
        }
    </style>

    <!-- Modal -->
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail Order</h5>
                    <button type="button" class="close" onclick="close_modal()" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div id="invoice"></div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row mb-2">
                                        <label class="col-sm-4 fw-bold">Order ID</label>
                                        <label class="col-sm-8 detail_order_id">GCA202403140001</label>
                                    </div>
                                    <div class="row mb-2">
                                        <label class="col-sm-4 fw-bold">Disc Code</label>
                                        <label class="col-sm-8 detail_disc_code"></label>
                                    </div>
                                    <div class="row mb-2">
                                        <label class="col-sm-4 fw-bold">Pay Status</label>
                                        <label class="col-sm-8 detail_status"><span class="bg-warning text-white" style="padding:2px 5px 2px 5px;">Expired</span><br></label>
                                    </div>
                                    <div class="row mb-2">
                                        <label class="col-sm-4 fw-bold">Order Add</label>
                                        <label class="col-sm-8 detail_order_add">14 Mar 2024 10:45:38</label>
                                    </div>
                        
                                </div>
                                <div class="col-md-6">
                                    <div class="row mb-2">
                                        <label class="col-sm-4 fw-bold">Full Name</label>
                                        <label class="col-sm-8 detail_name">khairul arifin</label>
                                    </div>
                                    <div class="row mb-2">
                                        <label class="col-sm-4 fw-bold">Email Address</label>
                                        <label class="col-sm-8 detail_email">arifinkhairul46@gmail.com</label>
                                    </div>
                                    <div class="row mb-2">
                                        <label class="col-sm-4 fw-bold">Phone</label>
                                        <label class="col-sm-8 detail_phone">087885293721</label>
                                    </div>
                                   
                                </div>
                            </div>
    
                            <div class="table-responsive mt-5">
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Arena</th>
                                            <th>Tanggal</th>
                                            <th>Sesi</th>
                                            <th>Harga</th>
                                        </tr>
                                    </thead>
                                    <tbody id="listDetailOrder">
                                        <tr>
                                            <td>1</td>
                                            <td>C-tra Arena Basketball Court</td>
                                            <td>Jum, 15 Mar 2024</td><td>Sesi 3 : 10.00 - 12.00</td>
                                            <td>Rp 500.000</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" class="text-end">Total harga</td>
                                            <td>Rp 500.000</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" class="text-end">Diskon</td>
                                            <td>Rp 0</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" class="text-end">Grand Total</td>
                                            <td>Rp 500.000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="close_modal()">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
     </div>
@endsection