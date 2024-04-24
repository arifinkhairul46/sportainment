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
                                    <td id="nama_lapang">{{$item['nama_lapang']}}</td>
                                    <td>{{date('d-m-Y', strtotime($item['tanggal'])) }}</td>
                                    <td>Sesi {{$item['id_sesi']}}</td>
                                    <td>Rp {{number_format($item['price'])}}</td>
                                    <td><button class="btn btn-sm btn-danger text-xs" onclick="remove_cart('{{$item['id_booking']}}')" ><i class="fas fa-trash" aria-hidden="true"></i> Remove</button></td>
                                </tr>
                                <?php $total += $item['price']; ?>
                            @endforeach
                            <tr>
                                <td colspan="3"><h6>Total Harga</h6></td>
                                <td colspan="2"><h6>Rp {{number_format($total)}} </h6></td>
                            </tr>
                            
                            <tr>
                                <td colspan="3">
                                    {{-- <form action="{{route('diskon.store')}}" method="POST">
                                        @csrf --}}
                                        <div class="form-group row">
                                            <div class="col-xl-5 col-md-7 col-7">
                                                <input type="text" class="form-control form-control-sm diskon" id="diskon" name="diskon" placeholder="Kode Diskon" >
                                            </div>
                                            <div class="col-sm-3 col-3">
                                                <button onclick="check_diskon()" class="btn btn-primary text-xs" >Apply</button>
                                            </div>
                                        </div>
                                    {{-- </form> --}}
                                </td>
                                <td colspan="2" id="rpdiskon">Rp 0 </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <h6>Grand Total</h6>
                                </td>
                                <td colspan="2">
                                    <h6 id="rptotal">Rp {{number_format($total)}}</h6>
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

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script>
       

        function checkout(){
            var nama_lapang = $('#nama_lapang').val();
            alert(nama_lapang);
        }

        function remove_cart(id){
            alert(id);

            if(confirm('Are you sure want to remove this item?')){
                $.ajax({
                    url: '/cart/remove/'+id,
                    type: 'GET',
                    success: function(response){
                        location.reload();
                    }
                });
            }
        
        }

        function addCommas(nStr)
        {
            nStr += '';
            x = nStr.split('.');
            x1 = x[0];
            x2 = x.length > 1 ? '.' + x[1] : '';
            var rgx = /(\d+)(\d{3})/;
            while (rgx.test(x1)) {
                x1 = x1.replace(rgx, '$1' + ',' + '$2');
            }
            return x1 + x2;
        }

        function check_diskon(){
            var diskon = $('#diskon').val();
            alert(diskon);
            var total = {{$total}};
            var diskon0 = 0;
            
            $.ajax({
                url: '/diskon',
                type: 'GET',
                data: {
                    diskon: diskon
                },
                success: function(response){
                    if(response == 'Kode diskon tidak ditemukan'){
                        alert('Kode diskon tidak ditemukan');
                        $('#rpdiskon').html('Rp '+ diskon0);
                        grand_total =addCommas(total);
                        $('#rptotal').html('Rp '+ grand_total);
                        return;
                    }else{
                        diskon = addCommas(response.persentase * total / 100);
                        $('#rpdiskon').html( 'Rp '+ diskon);
                        grand_total = addCommas(total - response.persentase * total / 100);
                        $('#rptotal').html('Rp '+grand_total);
                    }
                }
            });
        }
    </script>
@endsection