@extends('frontend.layouts.frontendlayout')
@push('css')
<style>
    select.input-lg {
            -webkit-appearance: none;
            -moz-appearance: none;
            -o-appearance: none;
            background: #F3F6FA;
            border-radius: 8px;
            color: #77889A;
            font-size: 14px;
            padding-left: 30px;
            line-height: 17px;
            height: 45px;

            border: none;

        }

        .section-tab {
            border: 1px solid #DAE0EB;
            border-radius: 10px;
            padding: 15px;
        }

        select+i.fa {
            float: right;
            margin-top: -31px;
            margin-right: 10px;
            pointer-events: none;
            background: #5792F8;
            border-radius: 5px;
            color: white;
            padding: 5px;
            font-size: 8px;
        }

        div#demo1 .carousel-indicators {
            position: absolute !important;
        }

        div#demo1 .carousel-indicators {
            position: absolute !important;
        }



        #myTab1 .nav-link {
            border: 1px solid transparent;
            border-top-left-radius: .25rem;
            border-top-right-radius: .25rem;
            background: #ccc;
            margin-left: 0;
            font-weight: 400;
            font-size: 15px;
            line-height: 18px;
            padding: 15px;
            color: #77889A !important;
            margin-bottom: 15px;
        }

        #myTab1 .nav-link.active {
            color: #495057;
            border-radius: 8px;
            background-color: #1467F5 !important;
            color: #fff !important;
            border-color: transparent !important;
        }

        #myTab1 .nav-link {
            border: 1px solid transparent;
            background: #F3F6FA;
            border-radius: 8px;
        }


        #myTab1 {

            display: block;

            border-bottom: 0;
            border-right: 1px solid transparent;

        }
</style>
@endpush
@section('contents')
<div class="container mt-100">
            <div class="row">
                <div class="col-sm-6 pl-0">
                    <div class="baner-left-side-1">
                        <h1>
                            medical centers
                        </h1>
                    </div>
                </div>
                <div class="col-sm-6 ">
                    <nav aria-label="breadcrumb  " class="breadcrumb-main">
                        <ol class="breadcrumb justify-content-end ">

                            <li class="breadcrumb-item "><a href="#">Home</a></li>
                            <li class="breadcrumb-item active " aria-current="page">Dr. Walikar's dental care & Implant
                                centre</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section class="">
        <div class="container upper-section p-0 mt-5">
            <div class="row p-4">
                <div class="col-sm-6 p-0">
                    <img class="img-width" src="{{ asset('/') }}frontendtheme/images/carusek.png" alt="">
                </div>
                <div class="col-sm-6 p-0">
                    <div id="demo1" class="carousel slide" data-ride="carousel">

                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                            <li data-target="#demo1" data-slide-to="0" class="active"></li>
                            <li data-target="#demo1" data-slide-to="1"></li>
                            <li data-target="#demo1" data-slide-to="2"></li>
                            <li data-target="#demo1" data-slide-to="3"></li>
                        </ul>

                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="img-width" src="{{ asset('/') }}frontendtheme/images/carusek2.png" alt="Los Angeles">
                            </div>
                            <div class="carousel-item">
                                <img class="img-width" src="{{ asset('/') }}frontendtheme/images/carusek.png" alt="Chicago">
                            </div>
                            <div class="carousel-item">
                                <img class="img-width" src="{{ asset('/') }}frontendtheme/images/carusek2.png" alt="New York">
                            </div>
                            <div class="carousel-item">
                                <img class="img-width" src="{{ asset('/') }}frontendtheme/images/carusek.png" alt="Chicago">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row   p-4">
                <div class="col-sm-6 pl-0">
                    <p class="full-cnter-page-span">Description</p>
                    <h1 class="full-cnter-page-head my-3">
                        Dr. Walikar's dental care & Implant centre
                    </h1>
                    <p class="full-cnter-page-para">Dr. WALIKAR'S DENTAL CARE & IMPLANT CENTRE (rated 5 by NiceLocal
                        users) operates in the area of dentistry to provide residents of Solapur with necessary
                        therapeutic treatment.

                        <br>
                        <br>

                        Dr. WALIKAR'S DENTAL CARE & IMPLANT CENTRE (rated 5 by NiceLocal users) operates in the area of
                        dentistry to provide residents of Solapur with necessary therapeutic treatment.
                        <br>
                        <br>
                        You may find this professional by the following address: Solapur, Maharashtra 413008, Saiful,
                        Rohini Nagar, Jule, Ground floor, CARE HOSPITAL,NH52.
                        <br>
                        <br>
                    </p>
                    <div class="mb-3">
                        <p class="full-cnter-page-span">Type of health facility</p>
                        <p class="full-cnter-page-span-1">Dental clinic</p>

                    </div>
                    <div class="mb-3">
                        <p class="full-cnter-page-span">Diagnostics </p>
                        <p class="full-cnter-page-span-1">Comprehensive medical examination programs </p>

                    </div>
                    <div class="mb-3">
                        <p class="full-cnter-page-span">Dentistry</p>
                        <p class="full-cnter-page-span-1">Dental implants, Teeth whitening, Laser dentistry </p>

                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="d-flex align-items-center">
                        <span class="star-review-2 mr-4"><span class="fas fa-star checked"></span>
                            4.7</span>
                        <p class="full-cnter-page-span mr-4">15 reviews</p>

                        <p class="full-cnter-page-span mr-4">Will be closed in 9 h. 11 min.</p>
                    </div>

                    <div id="map" style="width:100%;height:260px;background:grey" class="my-3"></div>


                    <div class="mb-3">
                        <p class="full-cnter-page-span">Phone number</p>
                        <p class="full-cnter-page-span-1">+91 (844) 600</p>

                    </div>
                    <div class="mb-3">
                        <p class="full-cnter-page-span">Address </p>
                        <p class="full-cnter-page-span-1">Solapur, Maharashtra 413008, Saiful, Rohini Nagar, Jule,
                            Ground floor Solapur CARE HOSPITAL ,NH52 </p>

                    </div>
                    <div class="mb-3">
                        <p class="full-cnter-page-span">Dentistry</p>
                        <p class="full-cnter-page-span-1">Sun: 09:30—15:00; mon-sat: 09:30—20:30</p>

                    </div>
                    <div class="mb-3">
                        <p class="full-cnter-page-span">Official website</p>
                        <a href="">Drwalikars-dentalcare.in</a>

                    </div>
                </div>

            </div>
            <hr>
            <div id="demo2" class="carousel slide p-4" data-ride="carousel">
                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-sm-3 p-0">
                                <img src="{{ asset('/') }}frontendtheme/images/22.png" class="img-width" alt="">
                            </div>
                            <div class="col-sm-3 p-0">
                                <img src="{{ asset('/') }}frontendtheme/images/32.png" class="img-width" alt="">
                            </div>
                            <div class="col-sm-3 p-0">
                                <img src="{{ asset('/') }}frontendtheme/images/43.png" class="img-width" alt="">
                            </div>
                            <div class="col-sm-3 p-0">
                                <img src="{{ asset('/') }}frontendtheme/images/52.png" class="img-width" alt="">
                            </div>
                        </div>

                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-3 p-0">
                                <img src="{{ asset('/') }}frontendtheme/images/52.png" class="img-width" alt="">
                            </div>
                            <div class="col-sm-3 p-0">
                                <img src="{{ asset('/') }}frontendtheme/images/32.png" class="img-width" alt="">
                            </div>
                            <div class="col-sm-3 p-0">
                                <img src="{{ asset('/') }}frontendtheme/images/43.png" class="img-width" alt="">
                            </div>
                            <div class="col-sm-3 p-0">
                                <img src="{{ asset('/') }}frontendtheme/images/22.png" class="img-width" alt="">
                            </div>
                        </div>

                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-3 p-0">
                                <img src="{{ asset('/') }}frontendtheme/images/32.png" class="img-width" alt="">
                            </div>
                            <div class="col-sm-3 p-0">
                                <img src="{{ asset('/') }}frontendtheme/images/52.png" class="img-width" alt="">
                            </div>
                            <div class="col-sm-3 p-0">
                                <img src="{{ asset('/') }}frontendtheme/images/22.png" class="img-width" alt="">
                            </div>
                            <div class="col-sm-3 p-0">
                                <img src="{{ asset('/') }}frontendtheme/images/43.png" class="img-width" alt="">
                            </div>
                        </div>

                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-3 p-0">
                                <img src="{{ asset('/') }}frontendtheme/images/52.png" class="img-width" alt="">
                            </div>
                            <div class="col-sm-3 p-0">
                                <img src="{{ asset('/') }}frontendtheme/images/32.png" class="img-width" alt="">
                            </div>
                            <div class="col-sm-3 p-0">
                                <img src="{{ asset('/') }}frontendtheme/images/43.png" class="img-width" alt="">
                            </div>
                            <div class="col-sm-3 p-0">
                                <img src="{{ asset('/') }}frontendtheme/images/22.png" class="img-width" alt="">
                            </div>
                        </div>

                    </div>
                </div>
                <br>
                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#demo2" data-slide-to="0" class="active"></li>
                    <li data-target="#demo2" data-slide-to="1"></li>
                    <li data-target="#demo2" data-slide-to="2"></li>
                    <li data-target="#demo2" data-slide-to="3"></li>
                </ul>


            </div>
        </div>
    </section>
    <section class="mt-5">
        <div class="container bg-white doctor-dir">
            <h1 class="all-review ml-4 my-3">All reviews 8 <span class="star-review-2"><span
                        class="fas fa-star checked"></span>
                    4.7</span></h1>
            <div class="row">
                <div class="col-sm-3">
                    <div class="section-tab">
                        <h2 class="sort-text">Sort</h2>

                        <ul class="nav nav-tabs" id="myTab1" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#home" role="tab"
                                    aria-controls="home">
                                    <i class="fas fa-calendar-alt"></i> By date</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#profile" role="tab"
                                    aria-controls="profile"> <i class="fas fa-star"></i> By rating</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#messages" role="tab"
                                    aria-controls="messages">
                                    <i class="fas fa-users"></i> By popularity</a>
                            </li>

                        </ul>
                    </div>

                    <button class="btn btn-dignis-11">
                        Get in Touch
                        <div class="icon-class">
                            <i class=" ml-2"><svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M18.8332 3.33341C18.8332 2.41675 18.0832 1.66675 17.1665 1.66675H3.83317C2.9165 1.66675 2.1665 2.41675 2.1665 3.33341V13.3334C2.1665 14.2501 2.9165 15.0001 3.83317 15.0001H15.4998L18.8332 18.3334V3.33341ZM13.8332 9.16675H11.3332V11.6667C11.3332 12.1251 10.9582 12.5001 10.4998 12.5001C10.0415 12.5001 9.6665 12.1251 9.6665 11.6667V9.16675H7.1665C6.70817 9.16675 6.33317 8.79175 6.33317 8.33342C6.33317 7.87508 6.70817 7.50008 7.1665 7.50008H9.6665V5.00008C9.6665 4.54175 10.0415 4.16675 10.4998 4.16675C10.9582 4.16675 11.3332 4.54175 11.3332 5.00008V7.50008H13.8332C14.2915 7.50008 14.6665 7.87508 14.6665 8.33342C14.6665 8.79175 14.2915 9.16675 13.8332 9.16675Z"
                                        fill="white" />
                                </svg>
                            </i>
                        </div>
                    </button>
                </div>
                <div class="col-sm-9">
                    <div class="tab-content">
                        <div class="tab-pane active" id="home" role="tabpanel">
                            <div class="col-sm-12 mb-4 p-0">
                                <div>
                                    <div class="border-review">

                                        <div class="row">
                                            <div class="col-sm-8">

                                                <div>
                                                    <p class="head-para mt-2">Monika Chauhan</p>
                                                    <p class="sub-para mt-2">21 september 2021, 3:13 am</p>

                                                </div>

                                                <div class="d-flex justify-content-between align-items-center my-3">
                                                    <div class="d-flex align-items-center my-2">
                                                        <p class="sub-para"> <svg width="16" height="16"
                                                                viewBox="0 0 16 16" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M14.6602 2.66659C14.6602 1.93325 14.0668 1.33325 13.3335 1.33325H2.66683C1.9335 1.33325 1.3335 1.93325 1.3335 2.66659V10.6666C1.3335 11.3999 1.9335 11.9999 2.66683 11.9999H12.0002L14.6668 14.6666L14.6602 2.66659ZM11.3335 9.33325H4.66683C4.30016 9.33325 4.00016 9.03325 4.00016 8.66659C4.00016 8.29992 4.30016 7.99992 4.66683 7.99992H11.3335C11.7002 7.99992 12.0002 8.29992 12.0002 8.66659C12.0002 9.03325 11.7002 9.33325 11.3335 9.33325ZM11.3335 7.33325H4.66683C4.30016 7.33325 4.00016 7.03325 4.00016 6.66659C4.00016 6.29992 4.30016 5.99992 4.66683 5.99992H11.3335C11.7002 5.99992 12.0002 6.29992 12.0002 6.66659C12.0002 7.03325 11.7002 7.33325 11.3335 7.33325ZM11.3335 5.33325H4.66683C4.30016 5.33325 4.00016 5.03325 4.00016 4.66659C4.00016 4.29992 4.30016 3.99992 4.66683 3.99992H11.3335C11.7002 3.99992 12.0002 4.29992 12.0002 4.66659C12.0002 5.03325 11.7002 5.33325 11.3335 5.33325Z"
                                                                    fill="#B5C1D7" />
                                                            </svg>
                                                            </i>
                                                        </p>
                                                        <h6 class="address-num ml-2 mb-0">
                                                            Comment
                                                        </h6>
                                                        <p></p>

                                                    </div>

                                                </div>
                                                <div class="mt-3">
                                                    <p class="sub-para">Good infrastructure and well behaved staff Dr
                                                        vishal has done a commendable job in treating my tooth pain
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 mt-2">
                                                <div class="text-right">
                                                    <i class="fas fa-thumbs-up ml-2"></i>
                                                    <i class="fas fa-thumbs-down ml-2"></i>
                                                    <a href="" class="reply-tag ml-2">Reply</a>
                                                </div>
                                            </div>
                                        </div>




                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 mb-4 p-0">
                                <div>
                                    <div class="border-review">

                                        <div class="row">
                                            <div class="col-sm-8">

                                                <div>
                                                    <p class="head-para mt-2">Monika Chauhan</p>
                                                    <p class="sub-para mt-2">21 september 2021, 3:13 am</p>

                                                </div>

                                                <div class="d-flex justify-content-between align-items-center my-3">
                                                    <div class="d-flex align-items-center my-2">
                                                        <p class="sub-para"> <svg width="16" height="16"
                                                                viewBox="0 0 16 16" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M14.6602 2.66659C14.6602 1.93325 14.0668 1.33325 13.3335 1.33325H2.66683C1.9335 1.33325 1.3335 1.93325 1.3335 2.66659V10.6666C1.3335 11.3999 1.9335 11.9999 2.66683 11.9999H12.0002L14.6668 14.6666L14.6602 2.66659ZM11.3335 9.33325H4.66683C4.30016 9.33325 4.00016 9.03325 4.00016 8.66659C4.00016 8.29992 4.30016 7.99992 4.66683 7.99992H11.3335C11.7002 7.99992 12.0002 8.29992 12.0002 8.66659C12.0002 9.03325 11.7002 9.33325 11.3335 9.33325ZM11.3335 7.33325H4.66683C4.30016 7.33325 4.00016 7.03325 4.00016 6.66659C4.00016 6.29992 4.30016 5.99992 4.66683 5.99992H11.3335C11.7002 5.99992 12.0002 6.29992 12.0002 6.66659C12.0002 7.03325 11.7002 7.33325 11.3335 7.33325ZM11.3335 5.33325H4.66683C4.30016 5.33325 4.00016 5.03325 4.00016 4.66659C4.00016 4.29992 4.30016 3.99992 4.66683 3.99992H11.3335C11.7002 3.99992 12.0002 4.29992 12.0002 4.66659C12.0002 5.03325 11.7002 5.33325 11.3335 5.33325Z"
                                                                    fill="#B5C1D7" />
                                                            </svg>
                                                            </i>
                                                        </p>
                                                        <h6 class="address-num ml-2 mb-0">
                                                            Comment
                                                        </h6>
                                                        <p></p>

                                                    </div>

                                                </div>
                                                <div class="mt-3">
                                                    <p class="sub-para">Good infrastructure and well behaved staff Dr
                                                        vishal has done a commendable job in treating my tooth pain
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 mt-2">
                                        
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 mb-4 p-0">
                                <div>
                                    <div class="border-review">

                                        <div class="row">
                                            <div class="col-sm-8">

                                                <div>
                                                    <p class="head-para mt-2">Monika Chauhan</p>
                                                    <p class="sub-para mt-2">21 september 2021, 3:13 am</p>

                                                </div>

                                                <div class="d-flex justify-content-between align-items-center my-3">
                                                    <div class="d-flex align-items-center my-2">
                                                        <p class="sub-para"> <svg width="16" height="16"
                                                                viewBox="0 0 16 16" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M14.6602 2.66659C14.6602 1.93325 14.0668 1.33325 13.3335 1.33325H2.66683C1.9335 1.33325 1.3335 1.93325 1.3335 2.66659V10.6666C1.3335 11.3999 1.9335 11.9999 2.66683 11.9999H12.0002L14.6668 14.6666L14.6602 2.66659ZM11.3335 9.33325H4.66683C4.30016 9.33325 4.00016 9.03325 4.00016 8.66659C4.00016 8.29992 4.30016 7.99992 4.66683 7.99992H11.3335C11.7002 7.99992 12.0002 8.29992 12.0002 8.66659C12.0002 9.03325 11.7002 9.33325 11.3335 9.33325ZM11.3335 7.33325H4.66683C4.30016 7.33325 4.00016 7.03325 4.00016 6.66659C4.00016 6.29992 4.30016 5.99992 4.66683 5.99992H11.3335C11.7002 5.99992 12.0002 6.29992 12.0002 6.66659C12.0002 7.03325 11.7002 7.33325 11.3335 7.33325ZM11.3335 5.33325H4.66683C4.30016 5.33325 4.00016 5.03325 4.00016 4.66659C4.00016 4.29992 4.30016 3.99992 4.66683 3.99992H11.3335C11.7002 3.99992 12.0002 4.29992 12.0002 4.66659C12.0002 5.03325 11.7002 5.33325 11.3335 5.33325Z"
                                                                    fill="#B5C1D7" />
                                                            </svg>
                                                            </i>
                                                        </p>
                                                        <h6 class="address-num ml-2 mb-0">
                                                            Comment
                                                        </h6>
                                                        <p></p>

                                                    </div>

                                                </div>
                                                <div class="mt-3">
                                                    <p class="sub-para">Good infrastructure and well behaved staff Dr
                                                        vishal has done a commendable job in treating my tooth pain
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 mt-2">
        
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@push('scripts')
<script>
    function myMap() {
        var mapOptions = {
            center: new google.maps.LatLng(51.5, -0.12),
            zoom: 10,
            mapTypeId: google.maps.MapTypeId.HYBRID
        }
        var map = new google.maps.Map(document.getElementById("map"), mapOptions);
    }  
</script>
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
@endpush
@endsection