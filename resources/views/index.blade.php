
@extends('layouts.app')


@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="assets/img/hero-1.png" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase animated bounceInDown">Welcome To</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Sportainment Rabbani</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="assets/img/hero-1.png" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase animated bounceInDown">Top Scorer</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">To The Final Match</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="assets/img/hero-1.png" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase animated bounceInDown">Best Security Services</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Safe & Secure Home For Your Family</h1>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" id="about">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="h-100">
                        <img class="w-100 h-100 rounded wow zoomIn" data-wow-delay="0.3s" src="assets/img/about-us.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="mb-4">
                        <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">About Us</h5>
                        <h4 class= "mb-0">Sportainment Arena</h4>
                    </div>
                    <p class="mb-4">Sportainment Rabbani Arena adalah arena olahraga multifungsi yang berada di Kota Bandung, Jawa Barat.
                        Sportainment Arena menyediakan lapangan untuk Futsal, Basket, Badminton, Tenis Meja, Lempar Pisau hingga Panahan.
                        Sportainment Arena juga dapat digunakan untuk kegiatan seminar, workshop, dan acara lainnya.
                    </p>
                    <div class="icon">
                        <a href="#contact">
                            <i class="fa-solid fa-map-location-dot" style="color: #B8C2CE;"></i>
                        </a>
                    </div>
                    <h5 style="margin-left: 85px">Alamat</h5>
                    <p class="mb-5" style="margin-left: 85px; font-size: 14px">Jl. A.H. Nasution No.285, Pasanggrahan, Kec. Ujung Berung, Kota Bandung, Jawa Barat 40614</p>

                    <div class="icon">
                        <a href="#contact">
                            <i class="fa-solid fa-users" style="color: #B8C2CE;"></i>
                        </a>
                    </div>
                    <h5 style="margin-left: 85px">Kapasitas</h5>
                    <p class="mb-5" style="margin-left: 85px; font-size: 14px">600 Orang</p>

                    <div class="icon">
                        <a href="#contact">
                            <i class="fa-solid fa-car" style="color: #B8C2CE;"></i>
                        </a>
                    </div>
                    <h5 style="margin-left: 85px">Parkiran</h5>
                    <p class="mb-5" style="margin-left: 85px; font-size: 14px">Terdapat parkir <i>indoor</i> maupun <i>outdoor</i> yang luas untuk mobil dan motor</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    

    <!-- Gallery Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" id="category">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 600px;">
                <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">Category</h5>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="bg-category">
                        <h1 class="txt-contact text-center">Futsal</h1>
                    </div>
                    <br>
                    <img src="assets/img/img-futsal.png" class="card-img-top" alt="photo futsal">
                </div>
                <div class="col-lg-4">
                    <img src="assets/img/img-basketball.png" class="card-img-top" alt="photo basket">
                    <br>
                    <br>
                    <div class="bg-category">
                        <h1 class="txt-contact text-center">Basket</h1>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bg-category">
                        <h1 class="txt-contact text-center">Badminton</h1>
                    </div>
                    <br>
                    <img src="assets/img/img-badminton.png" class="card-img-top" alt="photo badminton">
                </div>
            </div>
            <div class="row g-5 mt-4">
                <div class="col-lg-4">
                    <div class="bg-category">
                        <h1 class="txt-contact text-center">Memanah</h1>
                    </div>
                    <br>
                    <img src="assets/img/img-memanah.png" class="card-img-top" alt="photo memanah">
                </div>
                <div class="col-lg-4">
                    <img src="assets/img/img-lempar-pisau.png" class="card-img-top" alt="photo Lempar Pisau">
                    <br>
                    <br>
                    <div class="bg-category">
                        <h1 class="txt-contact text-center">Lempar Pisau</h1>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bg-category">
                        <h1 class="txt-contact text-center">Tenis Meja</h1>
                    </div>
                    <br>
                    <img src="assets/img/img-tenis-meja.png" class="card-img-top" alt="photo tenis-meja">
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery End -->


    <!-- Booking Start -->
    <div class="container-fluid pt-5 wow fadeInUp" data-wow-delay="0.1s" style="margin-bottom: 50px;" id="booking">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 600px;">
                <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">Booking</h5>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                    <div class="position-relative">
                        <div class="bg-primary text-center py-2 mb-2">
                            <h3 class="text-white">Calendar</h3>
                        </div>
                        <div id="calendar"></div>
                    </div>
                </div>
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
                    @foreach ($list_lapangan as $lapang)                        
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="heading-{{$lapang->id}}">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{$lapang->id}}" aria-expanded="true" aria-controls="collapse-{{$lapang->id}}">
                              {{$lapang->nama}}
                            </button>
                          </h2>
                          <div id="collapse-{{$lapang->id}}" class="accordion-collapse collapse" aria-labelledby="heading-{{$lapang->id}}" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <table class="table text-center" style="vertical-align:middle;font-size:13px;">
                                    <thead class="text-start">
                                        <tr><th colspan="4">
                                            <input type="hidden" id="isWeekend" name="isWeekend" class="isWeekend">
                                            <h6 class="resDate"></h6>
                                        </th>
                                    </tr></thead>
                                    <tbody class="jadwal">
                                        @foreach ($sesi as $item)
                                        <tr>
                                            <td class="col-md-3 col-6">Sesi {{$item->sesi}} <br> <span><b>{{$item->jam_mulai}} - {{$item->jam_selesai}}</b></span> </td>
                                            <td class="col-md-3 col-6"></td>
                                            <td class="price col-md-3 col-6"> 
                                            <b class="price-weekday" style="display: none">
                                                @if  ($item->sesi < 10 )
                                                Rp {{number_format($lapang->harga_weekday_perjam_1)}}
                                                @else
                                                Rp {{number_format($lapang->harga_weekday_perjam_2)}}
                                                @endif
                                            </b>
                                            <b class="price-weekend" style="display: none">
                                                @if ($item->sesi < 10 )
                                                Rp {{number_format($lapang->harga_weekend_perjam_1)}}
                                                @else
                                                Rp {{number_format($lapang->harga_weekend_perjam_2)}}
                                                @endif
                                            </b>
                                            </td>
                                            <td class="col-md-3 col-6">
                                                
                                                @if (Auth::check())
                                                <a href="#" onclick="addToCart('{{$lapang->id}}', '{{$item->sesi}}' )" class="btn btn-sm btn-primary"><i class="fas fa-shopping-cart"></i> Book Now</a>
                                                @else
                                                <a href="{{route('login')}}" class="btn btn-sm btn-warning" style="font-size: 11px"><i class="fas fa-shopping-cart" aria-hidden="true"></i> Book Now (Sign!)</a>
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                          </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="mt-3 checkout" id="checkout"> 
                      <a href="/cart" class="btn btn-primary form-control">
                          <i class="fas fa-shopping-cart" aria-hidden="true"></i> Checkout
                      </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking End -->

     <!-- Artikel Start -->
     <div class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s" id="artikel">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 600px;">
                <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">Artikel</h5>
            </div>
            <div class="row gx-5">
                @foreach ($artikel_show as $item)                
                <div class="col-lg-4 mb-5 mb-lg-0" >
                    <div class="mb-4">
                        <img data-wow-delay="0.3s" src="{{asset($item->image)}}" width="400">
                    </div>
                    <p style="font-size: 10px"> {{$item->upload_by}} </p>
                    <p style="font-size: 10px"> {{date('d-m-Y', strtotime($item->created_at))}} </p>
                    <p class="title-artikel"><b> {{$item->judul}} </b></p>
                    <p class="mb-4" style="text-align: justify"> {{$item->isi_artikel}} </p> 
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Artikel End -->

    <!-- Contact Start -->
    <div class="container-fluid my-5" id="contact">
        <div class="container bg-offer px-5">
            <div class="row">
                <div class="col-lg-6 pt-5">
                    <h1 class="txt-contact mb-4">CONTACT <br/>INFORMATION</h1>
                    <p class="px-3 py-1" style="border: solid 2px #262626; border-radius: 5px; width:285px;"> sportainmentrabbani@gmail.com </p>
                    <a href="https://wa.me/6285175375475" class="btn btn-black me-3 text-white">Whatsapp: +62 851-7537-5475</a>
                    <br>
                    <div class="mt-5 d-flex">
                        <a class="btn btn-lg btn-black btn-lg-square rounded me-2" href="#"><i class="fa-brands fa-twitter" style="color: #fff"></i></a>
                        <a class="btn btn-lg btn-black btn-lg-square rounded me-2" href="#"><i class="fa-brands fa-facebook-f" style="color: #fff"></i></a>
                        <a class="btn btn-lg btn-black btn-lg-square rounded" href="#"><i class="fa-brands fa-instagram" style="color: #fff"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="assets/img/img-contact.png" alt="Image" class="img-fluid">
                </div>                    
            </div>
            
        </div>
    </div>
    <!-- Contact End -->

    <div class="container-fluid mt-5">
        <div class="container cnt-iframe px-5">
            <iframe class="responsive-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.786903612167!2d107.7050847!3d-6.916061999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68dda71b0e9acb%3A0xcf382aaf3a0667ed!2sSMP%20QLP%20Rabbani%20Bandung!5e0!3m2!1sen!2sid!4v1711088781858!5m2!1sen!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-secondary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>

     <!-- JavaScript Libraries -->
     <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
     <script src="{{asset ('admin/plugins/fullcalendar/locales/id.js')}}"></script>
     <script>
        document.addEventListener('DOMContentLoaded', function() {
          var calendarEl = document.getElementById('calendar');
          var calendar = new FullCalendar.Calendar(calendarEl, 
          {
            locale: 'id',
            initialView: 'dayGridMonth',
            dateClick: function (info) {
                moment.locale('id');
                var dateSelected = moment(info.dateStr).format('dddd, Do MMMM YYYY');

                var dayOfWeek = (info.date).getDay();
                var isWeekend = (dayOfWeek === 0) || (dayOfWeek === 6)
                
                $('.isWeekend').val(isWeekend);
                if(!isWeekend){
                    $('.price-weekend').hide();
                    $('.price-weekday').show();
                } else {
                    $('.price-weekend').show();
                    $('.price-weekday').hide();
                }
                
                $('.resDate').html(dateSelected );


            }
        });
        calendar.render();
        
    });

    function generate_id_booking (lapang, sesi, tanggal) {
        const today = new Date();
        const number = +1;

        if (number < 10) {
            temp = "00" 
        } else if (number < 100) {
            temp = "0"
        } else {
            temp = ""
        }
        
        const id_booking = "SAR" + today.getFullYear() + (today.getMonth() + 1) + today.getDate() + lapang + sesi + temp + number;

        return id_booking

    }

    function addToCart (id_lapang, id_sesi) {

        const id_booking = generate_id_booking( id_lapang, id_sesi, $('.resDate').text());
        // console.log(id_booking);
        const isWeekend = $('.isWeekend').val();
        const price = $('.price').val();
        console.log(isWeekend);

        const data = {
            id_lapang: id_lapang,
            id_sesi: id_sesi,
            id_booking: id_booking,
            tanggal: $('.resDate').text(),
            price: price
        }

        // $.ajax({
        //     url: '/cart/add',
        //     type: 'POST',
        //     data: data,
        //     success: function (response) {
        //         console.log(response);
        //     }
        // })

    }
  
      </script>

@endsection
