<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Stay - HOME</title>
    <!-- linking our common-links file -->
    <?php require('inc/links.php'); ?>
    
    <!-- for carousel -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    

    <style>
        .availability-form{
            margin-top: -50px;
            z-index: 2;
            position: relative;
        }

        @media screen and (max-width:575px){
            .availability-form{
                margin-top:  25px; 
                padding: 0 35px;
            }
        }
    </style>
</head>
<body class="bg-light">

    <?php require('inc/header.php'); ?>

    <!-- carousel -->
    <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper swiper-container swiper-fade swiper-initialized swiper-horizontal swiper-pointer-events  swiper-watch-progress swiper-backface-hidden">
            <div class="swiper-wrapper" id="swiper-wrapper-d10e2e1050e8fd46ee" aria-live="polite">
                <div class="swiper-slide swiper-slide-visible swiper-slide-active" style="width: 1440px; opacity: 1; transform: translate3d(0px, 0px, 0px);" role="group" aria-label="1 / 4">
                    <img src="images/carousel/1.png" class="w-100 d-block">
                </div>
                <div class="swiper-slide swiper-slide-visible swiper-slide-active" style="width: 1440px; opacity: 1; transform: translate3d(0px, 0px, 0px);" role="group" aria-label="1 / 4">
                    <img src="images/carousel/2.png" class="w-100 d-block">
                </div>
                <div class="swiper-slide swiper-slide-visible swiper-slide-active" style="width: 1440px; opacity: 1; transform: translate3d(0px, 0px, 0px);" role="group" aria-label="1 / 4">
                    <img src="images/carousel/3.png" class="w-100 d-block">
                </div>
                <div class="swiper-slide swiper-slide-visible swiper-slide-active" style="width: 1440px; opacity: 1; transform: translate3d(0px, 0px, 0px);" role="group" aria-label="1 / 4">
                    <img src="images/carousel/4.png" class="w-100 d-block">
                </div>
                <div class="swiper-slide swiper-slide-visible swiper-slide-active" style="width: 1440px; opacity: 1; transform: translate3d(0px, 0px, 0px);" role="group" aria-label="1 / 4">
                    <img src="images/carousel/5.png" class="w-100 d-block">
                </div>
                <div class="swiper-slide swiper-slide-visible swiper-slide-active" style="width: 1440px; opacity: 1; transform: translate3d(0px, 0px, 0px);" role="group" aria-label="1 / 4">
                    <img src="images/carousel/6.png" class="w-100 d-block">
                </div>
            </div>
        </div> 
    </div>

 

    <!-- our rooms -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>
    <div class="container">
        <div class="row">
        <div class="col-lg-4 col-md-6 my-3">
                <!-- card -->
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Double-Prime Rooms</h5>
                        <h6 class="mb-4">₹2100 per night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Double Bed
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    1 Bathroom
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    1 Balcony
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    2 Sofa
                                </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Telivision
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                AC
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Room heater
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Mini Fridge
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Spa
                            </span>
                        </div>


                        <div class="guests mb-4">
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                6 persons
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="rooms.php" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                        </div>
                    </div>
                </div>    
            </div>

            <div class="col-lg-4 col-md-6 my-3">
                <!-- card -->
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5> Prime Rooms</h5>
                        <h6 class="mb-4">₹1600 per night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Single Bed
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    1 Bathroom
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    1 Balcony
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    1 Sofa
                                </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Telivision
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                AC
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Room heater
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Spa 
                            </span>
                        </div>


                        <div class="guests mb-4">
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                3 persons
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="rooms.php" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                        </div>
                    </div>
                </div>    
            </div>

            <div class="col-lg-4 col-md-6 my-3">
                <!-- card -->
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Double-Deluxe Rooms</h5>
                        <h6 class="mb-4">₹200 per night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Double Bed
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    1 Bathroom
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    1 Balcony
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    1 Sofa
                                </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Telivision
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Spa
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Room heater
                            </span>
                        </div>


                        <div class="guests mb-4">
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                6 Persons
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="rooms.php" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </div>

    <!-- our facilities -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>
    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                 <img src="images/features/wifi.svg" width="80px">
                 <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                 <img src="images/facilities/IMG_41622.svg" width="80px">
                 <h5 class="mt-3">TV</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                 <img src="images/facilities/IMG_96423.svg" width="80px">
                 <h5 class="mt-3">Room Heater</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                 <img src="images/facilities/IMG_47816.svg" width="80px">
                 <h5 class="mt-3">Spa</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                 <img src="images/facilities/IMG_49949.svg" width="80px">
                 <h5 class="mt-3">AC</h5>
            </div>

        </div>
    </div>

    <!-- our testimonials -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>
    <div class="container mt-5">
        <!-- swiper -->
        <div class="swiper swiper-testimonials">
            <div class="swiper-wrapper mb-5">
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/features/star.svg" width="30px">                    
                        <h6 class="m-0 ms-2">Amit Negi</h6>
                    </div>
                    <p>
                    Excellent hotel with excellent location located at the city center,extremely clean & comfortable . Upon arrival we were warmly welcomed by the friendly reception staff. Would definetely recommend this hotel to everybody! It's a true sample of excellent hospitality.
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/features/star.svg" width="30px">                    
                        <h6 class="m-0 ms-2">Sachit Srivastav</h6>
                    </div>
                    <p>
                    I would like to put on record the kindness and courtesy in which the front office staff is amazing and would give them 5 star rating. Specific appreciation to Chirag Bansal for their humbleness and Keep up the good work team.
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div> 
                </div>

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/features/star.svg" width="30px">                    
                        <h6 class="m-0 ms-2">Sachin Chauhan</h6>
                    </div>
                    <p>
                    Stayed at hotel for one night, spacious rooms neat and clean, foods are delicious, room heater was out of order but staffs are well-behaved and other services are upto the mark.
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>                  
                </div>

                <div class="swiper-pagination"></div>
            </div>
    </div>
    </div>
        
    <!-- Reach Us -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>
    <div class="container"> 
        <div class="row">
            <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
                <iframe class="w-100 rounded" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d442.9111731460813!2d75.4044201!3d27.3666764!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396ced63be62c27f%3A0xaed47ced1019e240!2sKhatu%20syam%20baba%20mandir%20rajasthan!5e0!3m2!1sen!2sin!4v1668060431224!5m2!1sen!2sin" height="320px " loading="lazy"></iframe>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Call us</h5>
                    <a href="tel: +918963838178" class="d-inline-block mb-2 text-decoration-none text-dark"> <i class="bi bi-telephone-fill"></i> +918963838178</a>
                    <br>
                    <a href="tel: +918963838178" class="d-inline-block text-decoration-none text-dark"> <i class="bi bi-telephone-fill"></i> +919599854196</a>
                </div>
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Follow us</h5>
                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                        <i class="bi bi-twitter me-1"></i> Twitter
                        </span>
                    </a>
                    <br>
                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                        <i class="bi bi-facebook me-1"></i> Facebook
                        </span>
                    </a>
                    <br>
                    <a href="#" class="d-inline-block">
                        <span class="badge bg-light text-dark fs-6 p-2">
                        <i class="bi bi-instagram me-1"></i> Instagram
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- including footer.php file (for footer and bootstrap include link) -->
    <?php require('inc/footer.php'); ?>
    
    
    <!-- for carousel 1-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    
    
    <!--initializer for carousel 1-->
    <script>
      var swiper = new Swiper(".swiper-container", {
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
        }
      });

    // initializer for carousel 2
        var swiper = new Swiper(".swiper-testimonials", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            slidesPerView: "3",
            loop: true,
            coverflowEffect: {
             rotate: 50,
             stretch: 0,
             depth: 100,
             modifier: 1,
             slideShadows: false,
            },
            pagination: {
            el: ".swiper-pagination",
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                }
            }
        });
    </script>
</body>
</html>
