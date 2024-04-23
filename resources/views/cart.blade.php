@extends('layouts.app')

@section('content')
    <div class="container-fluid ">
        <img src="assets/img/img-order-page.png" alt="img-banner-profile" width="1640" height="320">
    </div>
    <div class="container">
        <div class="card shadow my-3">
            <div class="card-body row justify-content-center">
                <div class="col-sm-11" style="font-size:13px;">
                    <h5 class="card-title mt-3">Information Details</h5>

                    <div class="row">
                        <div class="col-md-6">
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
                                <div class="col-md-8">
                                    @if(auth()->user()->no_hp)
                                        {{auth()->user()->no_hp}}
                                    @else
                                    -
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="mt-4 mb-0">

                <div class="card-body mt-3">
                    <table class="table cart" style="vertical-align:middle;">
                        <thead>
                            <tr>
                                <th>Lapangan</th>
                                <th>Tanggal</th>
                                <th>Sesi</th>
                                <th>Harga</th>
                                <th class="col-sm-2">Action</th>
                            </tr>
                        </thead>
                        <tbody class="cart_list">
                            <?php $total = 0; ?>
                            @foreach($data as $item) 
                                <tr>
                                    <td>{{$item['id_lapang']}}</td>
                                    <td>{{$item['tanggal']}}</td>
                                    <td>Sesi {{$item['id_sesi']}}</td>
                                    <td>Rp {{number_format($item['price'])}}</td>
                                    <td><button class="btn btn-sm btn-danger text-xs" onclick="remove_cart()" ><i class="fas fa-trash" aria-hidden="true"></i> Remove</button></td>
                                </tr>
                                <?php $total += $item['price']; ?>
                            @endforeach
                            <tr>
                                <td colspan="3"><h6>Total Harga</h6></td>
                                <td colspan="2"><h6>Rp {{number_format($total)}} </h6></td>
                            </tr>
                            <tr>
                                <td colspan="3">Diskon</td>
                                <td colspan="2">Rp 0</td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <div class="form-group row">
                                        <div class="col-xl-5 col-md-7 col-7">
                                            <input type="text" class="form-control form-control-sm" name="coupon" placeholder="Kode Diskon" value="" >
                                        </div>
                                        <div class="col-sm-3 col-3">
                                            <button class="btn btn-primary text-xs" onclick="check_coupon()">Apply</button>
                                        </div>
                                    </div>
                                </td>
                                <td colspan="2">Rp 0</td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <h6>Grand Total</h6>
                                </td>
                                <td colspan="2">
                                    <h6>Rp 700.000</h6>
                                </td>
                            </tr>
                            
                            <tr>
                                <td colspan="5" class="text-end">
                                    <button class="btn btn-primary btn-sm" onclick="checkout()"><i class="fas fa-money-bill-wave" aria-hidden="true"></i> Booking</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div> 
    </div>

    <script>
        function checkout(){
            alert('Checkout');
        }

        function check_coupon(){
            alert('Check Coupon');
        }

        function remove_cart(){
            alert('Remove Cart');
        }
    </script>
@endsection