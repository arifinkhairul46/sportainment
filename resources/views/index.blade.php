
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
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">TO The Final Match</h1>
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


    <!-- Pricing Plan Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="margin-bottom: 75px;">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 600px;">
                <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">Pricing Plan</h5>
                <h1 class="display-5 mb-0">Pricing Plan For CCTV Security Services</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="position-relative border border-primary rounded">
                        <div class="bg-primary text-center pt-5 pb-4">
                            <h3 class="text-white">Basic Plan</h3>
                            <h1 class="display-4 text-white">
                                <small class="align-top"
                                    style="font-size: 22px; line-height: 45px;">$</small>49<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                    Mo</small>
                            </h1>
                        </div>
                        <div class="text-center py-5">
                            <p class="border-bottom border-light mb-2 pb-2">HTML5 & CSS3</p>
                            <p class="border-bottom border-light mb-2 pb-2">Bootstrap v5</p>
                            <p class="border-bottom border-light mb-2 pb-2">Responsive Layout</p>
                            <p class="border-bottom border-light mb-2 pb-2">Browsers Compatibility</p>
                            <p class="mb-2 pb-2">Easy to Use</p>
                        </div>
                        <a href="" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">Order Now</a>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="position-relative border border-secondary rounded">
                        <div class="bg-secondary text-center pt-5 pb-4">
                            <h3 class="text-white">Standard Plan</h3>
                            <h1 class="display-4 text-white">
                                <small class="align-top"
                                    style="font-size: 22px; line-height: 45px;">$</small>49<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                    Mo</small>
                            </h1>
                        </div>
                        <div class="text-center py-5">
                            <p class="border-bottom border-light mb-2 pb-2">HTML5 & CSS3</p>
                            <p class="border-bottom border-light mb-2 pb-2">Bootstrap v5</p>
                            <p class="border-bottom border-light mb-2 pb-2">Responsive Layout</p>
                            <p class="border-bottom border-light mb-2 pb-2">Browsers Compatibility</p>
                            <p class="mb-2 pb-2">Easy to Use</p>
                        </div>
                        <a href="" class="btn btn-secondary py-2 px-4 position-absolute top-100 start-50 translate-middle">Order Now</a>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="position-relative border border-primary rounded">
                        <div class="bg-primary text-center pt-5 pb-4">
                            <h3 class="text-white">Extended Plan</h3>
                            <h1 class="display-4 text-white">
                                <small class="align-top"
                                    style="font-size: 22px; line-height: 45px;">$</small>49<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                    Mo</small>
                            </h1>
                        </div>
                        <div class="text-center py-5">
                            <p class="border-bottom border-light mb-2 pb-2">HTML5 & CSS3</p>
                            <p class="border-bottom border-light mb-2 pb-2">Bootstrap v5</p>
                            <p class="border-bottom border-light mb-2 pb-2">Responsive Layout</p>
                            <p class="border-bottom border-light mb-2 pb-2">Browsers Compatibility</p>
                            <p class="mb-2 pb-2">Easy to Use</p>
                        </div>
                        <a href="" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">Order Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->


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

@endsection
