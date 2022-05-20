@extends('frontend.layouts.frontendlayout')
@section('contents')
<div class="container mt-100">
    <div class="row">
        <div class="col-sm-6 pl-0">
            <div class="baner-left-side">
                <h1>
                    {{$top_text->title}}
                </h1>
                <p class="pt-3"> {{$top_text->description}}</p>

                <div>
                    <form action="#" id="header-search-people" class="form-area" novalidate="novalidate"
                        autocomplete="off">
                        <div class="row">
                            <div class="col-md-12 p-0">
                                <div class="styled-input wide multi">
                                    <div class="first-name" id="input-first-name">
                                        <input type="text" placeholder="Search doctors" name="fn" id="fn"
                                            autocomplete="off" data-placeholder-focus="false" required />

                                        <div class="icon-absoulte">
                                            <svg width="18" height="19" viewBox="0 0 18 19" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.625 11H11.0325L10.8225 10.7975C11.5575 9.9425 12 8.8325 12 7.625C12 4.9325 9.8175 2.75 7.125 2.75C4.4325 2.75 2.25 4.9325 2.25 7.625C2.25 10.3175 4.4325 12.5 7.125 12.5C8.3325 12.5 9.4425 12.0575 10.2975 11.3225L10.5 11.5325V12.125L14.25 15.8675L15.3675 14.75L11.625 11Z"
                                                    fill="#B5C1D7" />
                                            </svg>

                                        </div>


                                    </div>
                                    <div class="last-name border-0" id="input-last-name">
                                        <input type="text" placeholder="Select a location" name="ln" id="ln"
                                            autocomplete="off" data-placeholder-focus="false" required />
                                        <div class="icon-absoulte">
                                            <svg width="18" height="19" viewBox="0 0 18 19" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9 9.5C9.825 9.5 10.5 8.825 10.5 8C10.5 7.175 9.825 6.5 9 6.5C8.175 6.5 7.5 7.175 7.5 8C7.5 8.825 8.175 9.5 9 9.5ZM9 2C12.15 2 15 4.415 15 8.15C15 10.535 13.1625 13.34 9.495 16.5725C9.21 16.82 8.7825 16.82 8.4975 16.5725C4.8375 13.34 3 10.535 3 8.15C3 4.415 5.85 2 9 2Z"
                                                    fill="#B5C1D7" />
                                            </svg>


                                        </div>
                                    </div>
                                    <div class="city" id="input-city">
                                        <button type="submit" class="primary-btn serach-btn"
                                            id="submit_btn">SEARCH</button>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </form>
                </div>

                <div class="mt-4">
                    <div class="o-switch btn-group" data-toggle="buttons" role="group">
                        <label class="btn btn-tabtoggle active">
                            <input type="radio" name="options" id="option1" autocomplete="off" checked> <span
                                class="medical-dir-span"> Doctors </span>
                            <br>
                            <p class="medical-dir-para">Book an appointment</p>
                        </label>
                        <label class="btn btn-tabtoggle">
                            <input type="radio" name="options" id="option2" autocomplete="off"><span
                                class="medical-dir-span"> Consult</span> <br>
                            <p class="medical-dir-para">With top doctors</p>
                        </label>
                        <label class="btn btn-tabtoggle">
                            <input type="radio" name="options" id="option3" autocomplete="off"> <span
                                class="medical-dir-span">Diagnostics</span> <br>
                            <p class="medical-dir-para">Test & checkups</p>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 text-right">
            <div class="text-left">
                <button class="btn btn-doc-onli">
                    <img src="{{ asset('/') }}/frontendtheme/images/green-dot.png" class="mr-3" alt="">
                    1423 Doctor online
                </button>
            </div>
            <div>
                <div class="class-absolute">
                    <img src="{{ asset('/') }}/frontendtheme/images/main-doc.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <div>

        <div class="col-sm-8">
            <div class="d-flex" id="abolute">
                <h6 class="book-appoinment">Book Free Appointments</h6>
                <div class="d-flex align-items-center mr-3">
                    <p class="book-appointment">
                        <img src="{{ asset('/') }}/frontendtheme/images/patient 1.png" alt="">
                    <div class="text-white ml-4">
                        Get free consultation for 50+ diseases across India
                    </div>
                    </p>
                </div>
                <div class="d-flex align-items-center mr-3">
                    <p class="book-appointment">
                        <img src="{{ asset('/') }}/frontendtheme/images/front-desk 1.png" alt="">
                    <div class="text-white ml-4">
                        In-person and online
                        consultation with
                        experienced doctors
                    </div>
                    </p>
                </div>
                <div class="d-flex align-items-center mr-3">
                    <p class="book-appointment">
                        <img src="{{ asset('/') }}/frontendtheme/images/doctor 2.png" alt="">
                    <div class="text-white ml-4">
                        Extensive medical
                        assistance throughout
                        your treatment
                    </div>
                    </p>
                </div>
            </div>
        </div>

    </div>


</div>


</section>



<section class=" mt-100">
    <div class="container">
        <div class="col-sm-12 text-right">

        </div>
        <div class="row align-items-end">
            <div class="col-sm-7">
                <div class="img-media">
                    <img src="{{ asset('/') }}/frontendtheme/images/diagonis.png" alt="">
                    <button class="btn btn-dignis">
                        Get in Touch
                        <div class="icon-class">
                            <i class="fas fa-chevron-right ml-2"></i>
                        </div>
                    </button>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="text-right">
                    <h1 class="head-main-3">Diagnostic <br>
                        Centers</h1>
                </div>
                <div class="row ">
                    <div class="col-sm-6">
                        <div class="cards">
                            <div>
                                <img src="{{ asset('/') }}/frontendtheme/images/1.png" alt="">
                                <div class="row">
                                    <div class="col-9 p-0">
                                        <p class="text-white digoniis-para">Blood Test</p>
                                    </div>
                                    <div class="col-2 text-right p-0">
                                        <div class="icon-class">
                                            <i class="fas fa-chevron-right"></i>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="cards">
                            <div>
                                <img src="{{ asset('/') }}/frontendtheme/images/4.png" alt="">
                                <div class="row">
                                    <div class="col-9 p-0">
                                        <p class="text-white digoniis-para">ECG</p>
                                    </div>
                                    <div class="col-2 text-right p-0">
                                        <div class="icon-class">
                                            <i class="fas fa-chevron-right"></i>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="cards">
                            <div>
                                <img src="{{ asset('/') }}/frontendtheme/images/3.png" alt="">
                                <div class="row">
                                    <div class="col-9 p-0">
                                        <p class="text-white digoniis-para">MRI</p>
                                    </div>
                                    <div class="col-2 text-right p-0">
                                        <div class="icon-class">
                                            <i class="fas fa-chevron-right"></i>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="cards">
                            <div>
                                <img src="{{ asset('/') }}/frontendtheme/images/2.png" alt="">
                                <div class="row">
                                    <div class="col-9 p-0">
                                        <p class="text-white digoniis-para">BP Test</p>
                                    </div>
                                    <div class="col-2 text-right p-0">
                                        <div class="icon-class">
                                            <i class="fas fa-chevron-right"></i>
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

<section class="mt-100">
    <div class="container">

        <div class="row align-items-end">
            <div class="col-sm-5">
                <div class="">
                    <h1 class="head-main-3">Doctors</h1>
                </div>
                <div class="row ">
                    <div class="col-sm-6">
                        <div class="cards-1">
                            <div>
                                <img src="{{ asset('/') }}/frontendtheme/images/5.png" alt="">
                                <div class="row">
                                    <div class="col-9 p-0">
                                        <p class="doctos-p">Dermotoglost</p>
                                    </div>
                                    <div class="col-2 text-right p-0">
                                        <div class="icon-class">
                                            <i class="fas fa-chevron-right"></i>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="cards-1">
                            <div>
                                <img src="{{ asset('/') }}/frontendtheme/images/6.png" alt="">
                                <div class="row">
                                    <div class="col-9 p-0">
                                        <p class="doctos-p">Cardio</p>
                                    </div>
                                    <div class="col-2 text-right p-0">
                                        <div class="icon-class">
                                            <i class="fas fa-chevron-right"></i>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="cards-1">
                            <div>
                                <img src="{{ asset('/') }}/frontendtheme/images/7.png" alt="">
                                <div class="row">
                                    <div class="col-9 p-0">
                                        <p class="doctos-p">Bones</p>
                                    </div>
                                    <div class="col-2 text-right p-0">
                                        <div class="icon-class">
                                            <i class="fas fa-chevron-right"></i>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="cards-1">
                            <div>
                                <img src="{{ asset('/') }}/frontendtheme/images/8.png" alt="">
                                <div class="row">
                                    <div class="col-9 p-0">
                                        <p class="doctos-p">So on</p>
                                    </div>
                                    <div class="col-2 text-right p-0">
                                        <div class="icon-class">
                                            <i class="fas fa-chevron-right"></i>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="img-media">
                    <img src="{{ asset('/') }}/frontendtheme/images/doctor.png" alt="">
                    <button class="btn btn-dignis-1">
                        Get in Touch
                        <div class="icon-class">
                            <i class="fas fa-chevron-right ml-2"></i>
                        </div>
                    </button>
                </div>
            </div>

        </div>

    </div>
</section>

<section class="mt-100">
    <div class="container">
        <h1 class="head-main-3 text-center mb-5">Medical Directory</h1>

        <div id="demo" class="carousel slide silder-1" data-ride="false">

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-sm-6 mt-3">
                            <div class="">
                                <div class="border  rounded-lg p-2">
                                    <div class="row">
                                        <div class="col-8 p-0 pl-3 pt-3">
                                            <div class="row mb-2">
                                                <div class="col-2 p-0">
                                                    <img src="{{ asset('/') }}/frontendtheme/images/logo company.png"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <h5 class="doctor-name">Monika Chauhan</h5>
                                                    <p class="sub-para">Diagnostic Centers</p>
                                                </div>
                                            </div>

                                            <div class="row mb-2">
                                                <div class="col-sm-6 p-0">
                                                    <p class="sub-para">Phone</p>
                                                    <h6 class="address-num">
                                                        (505) 555-0125
                                                    </h6>
                                                </div>
                                                <div class="col-sm-6 p-0">
                                                    <p class="sub-para">Adress</p>
                                                    <h6 class="address-num">
                                                        2118 Thornridge Cir. Syracuse, Connecticut
                                                    </h6>
                                                </div>
                                            </div>

                                            <div>
                                                <p class="sub-para">We are the fastest growing doctors directory,
                                                    medical directory, and hospital...</p>
                                            </div>
                                        </div>
                                        <div class="col-4 p-0">
                                            <img style="width: -webkit-fill-available;"
                                                src="{{ asset('/') }}/frontendtheme/images/maps.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-3">
                            <div class="">
                                <div class="border  rounded-lg p-2">
                                    <div class="row">
                                        <div class="col-8 p-0 pl-3 pt-3">
                                            <div class="row mb-2">
                                                <div class="col-2 p-0">
                                                    <img src="{{ asset('/') }}/frontendtheme/images/logo company.png"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <h5 class="doctor-name">Monika Chauhan</h5>
                                                    <p class="sub-para">Diagnostic Centers</p>
                                                </div>
                                            </div>

                                            <div class="row mb-2">
                                                <div class="col-sm-6 p-0">
                                                    <p class="sub-para">Phone</p>
                                                    <h6 class="address-num">
                                                        (505) 555-0125
                                                    </h6>
                                                </div>
                                                <div class="col-sm-6 p-0">
                                                    <p class="sub-para">Adress</p>
                                                    <h6 class="address-num">
                                                        2118 Thornridge Cir. Syracuse, Connecticut
                                                    </h6>
                                                </div>
                                            </div>

                                            <div>
                                                <p class="sub-para">We are the fastest growing doctors directory,
                                                    medical directory, and hospital...</p>
                                            </div>
                                        </div>
                                        <div class="col-4 p-0">
                                            <img style="width: -webkit-fill-available;"
                                                src="{{ asset('/') }}/frontendtheme/images/maps.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-3">
                            <div class="">
                                <div class="border  rounded-lg p-2">
                                    <div class="row">
                                        <div class="col-8 p-0 pl-3 pt-3">
                                            <div class="row mb-2">
                                                <div class="col-2 p-0">
                                                    <img src="{{ asset('/') }}/frontendtheme/images/logo company.png"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <h5 class="doctor-name">Monika Chauhan</h5>
                                                    <p class="sub-para">Diagnostic Centers</p>
                                                </div>
                                            </div>

                                            <div class="row mb-2">
                                                <div class="col-sm-6 p-0">
                                                    <p class="sub-para">Phone</p>
                                                    <h6 class="address-num">
                                                        (505) 555-0125
                                                    </h6>
                                                </div>
                                                <div class="col-sm-6 p-0">
                                                    <p class="sub-para">Adress</p>
                                                    <h6 class="address-num">
                                                        2118 Thornridge Cir. Syracuse, Connecticut
                                                    </h6>
                                                </div>
                                            </div>

                                            <div>
                                                <p class="sub-para">We are the fastest growing doctors directory,
                                                    medical directory, and hospital...</p>
                                            </div>
                                        </div>
                                        <div class="col-4 p-0">
                                            <img style="width: -webkit-fill-available;"
                                                src="{{ asset('/') }}/frontendtheme/images/maps.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-3">
                            <div class="">
                                <div class="border  rounded-lg p-2">
                                    <div class="row">
                                        <div class="col-8 p-0 pl-3 pt-3">
                                            <div class="row mb-2">
                                                <div class="col-2 p-0">
                                                    <img src="{{ asset('/') }}/frontendtheme/images/logo company.png"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <h5 class="doctor-name">Monika Chauhan</h5>
                                                    <p class="sub-para">Diagnostic Centers</p>
                                                </div>
                                            </div>

                                            <div class="row mb-2">
                                                <div class="col-sm-6 p-0">
                                                    <p class="sub-para">Phone</p>
                                                    <h6 class="address-num">
                                                        (505) 555-0125
                                                    </h6>
                                                </div>
                                                <div class="col-sm-6 p-0">
                                                    <p class="sub-para">Adress</p>
                                                    <h6 class="address-num">
                                                        2118 Thornridge Cir. Syracuse, Connecticut
                                                    </h6>
                                                </div>
                                            </div>

                                            <div>
                                                <p class="sub-para">We are the fastest growing doctors directory,
                                                    medical directory, and hospital...</p>
                                            </div>
                                        </div>
                                        <div class="col-4 p-0">
                                            <img style="width: -webkit-fill-available;"
                                                src="{{ asset('/') }}/frontendtheme/images/maps.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-3">
                            <div class="">
                                <div class="border  rounded-lg p-2">
                                    <div class="row">
                                        <div class="col-8 p-0 pl-3 pt-3">
                                            <div class="row mb-2">
                                                <div class="col-2 p-0">
                                                    <img src="{{ asset('/') }}/frontendtheme/images/logo company.png"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <h5 class="doctor-name">Monika Chauhan</h5>
                                                    <p class="sub-para">Diagnostic Centers</p>
                                                </div>
                                            </div>

                                            <div class="row mb-2">
                                                <div class="col-sm-6 p-0">
                                                    <p class="sub-para">Phone</p>
                                                    <h6 class="address-num">
                                                        (505) 555-0125
                                                    </h6>
                                                </div>
                                                <div class="col-sm-6 p-0">
                                                    <p class="sub-para">Adress</p>
                                                    <h6 class="address-num">
                                                        2118 Thornridge Cir. Syracuse, Connecticut
                                                    </h6>
                                                </div>
                                            </div>

                                            <div>
                                                <p class="sub-para">We are the fastest growing doctors directory,
                                                    medical directory, and hospital...</p>
                                            </div>
                                        </div>
                                        <div class="col-4 p-0">
                                            <img style="width: -webkit-fill-available;"
                                                src="{{ asset('/') }}/frontendtheme/images/maps.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-3">
                            <div class="">
                                <div class="border  rounded-lg p-2">
                                    <div class="row">
                                        <div class="col-8 p-0 pl-3 pt-3">
                                            <div class="row mb-2">
                                                <div class="col-2 p-0">
                                                    <img src="{{ asset('/') }}/frontendtheme/images/logo company.png"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <h5 class="doctor-name">Monika Chauhan</h5>
                                                    <p class="sub-para">Diagnostic Centers</p>
                                                </div>
                                            </div>

                                            <div class="row mb-2">
                                                <div class="col-sm-6 p-0">
                                                    <p class="sub-para">Phone</p>
                                                    <h6 class="address-num">
                                                        (505) 555-0125
                                                    </h6>
                                                </div>
                                                <div class="col-sm-6 p-0">
                                                    <p class="sub-para">Adress</p>
                                                    <h6 class="address-num">
                                                        2118 Thornridge Cir. Syracuse, Connecticut
                                                    </h6>
                                                </div>
                                            </div>

                                            <div>
                                                <p class="sub-para">We are the fastest growing doctors directory,
                                                    medical directory, and hospital...</p>
                                            </div>
                                        </div>
                                        <div class="col-4 p-0">
                                            <img style="width: -webkit-fill-available;"
                                                src="{{ asset('/') }}/frontendtheme/images/maps.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="carousel-item ">
                    <div class="row">
                        <div class="col-sm-6 mt-3">
                            <div class="">
                                <div class="border  rounded-lg p-2">
                                    <div class="row">
                                        <div class="col-8 p-0 pl-3 pt-3">
                                            <div class="row mb-2">
                                                <div class="col-2 p-0">
                                                    <img src="{{ asset('/') }}/frontendtheme/images/logo company.png"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <h5 class="doctor-name">Monika Chauhan</h5>
                                                    <p class="sub-para">Diagnostic Centers</p>
                                                </div>
                                            </div>

                                            <div class="row mb-2">
                                                <div class="col-sm-6 p-0">
                                                    <p class="sub-para">Phone</p>
                                                    <h6 class="address-num">
                                                        (505) 555-0125
                                                    </h6>
                                                </div>
                                                <div class="col-sm-6 p-0">
                                                    <p class="sub-para">Adress</p>
                                                    <h6 class="address-num">
                                                        2118 Thornridge Cir. Syracuse, Connecticut
                                                    </h6>
                                                </div>
                                            </div>

                                            <div>
                                                <p class="sub-para">We are the fastest growing doctors directory,
                                                    medical directory, and hospital...</p>
                                            </div>
                                        </div>
                                        <div class="col-4 p-0">
                                            <img style="width: -webkit-fill-available;"
                                                src="{{ asset('/') }}/frontendtheme/images/maps.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-3">
                            <div class="">
                                <div class="border  rounded-lg p-2">
                                    <div class="row">
                                        <div class="col-8 p-0 pl-3 pt-3">
                                            <div class="row mb-2">
                                                <div class="col-2 p-0">
                                                    <img src="{{ asset('/') }}/frontendtheme/images/logo company.png"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <h5 class="doctor-name">Monika Chauhan</h5>
                                                    <p class="sub-para">Diagnostic Centers</p>
                                                </div>
                                            </div>

                                            <div class="row mb-2">
                                                <div class="col-sm-6 p-0">
                                                    <p class="sub-para">Phone</p>
                                                    <h6 class="address-num">
                                                        (505) 555-0125
                                                    </h6>
                                                </div>
                                                <div class="col-sm-6 p-0">
                                                    <p class="sub-para">Adress</p>
                                                    <h6 class="address-num">
                                                        2118 Thornridge Cir. Syracuse, Connecticut
                                                    </h6>
                                                </div>
                                            </div>

                                            <div>
                                                <p class="sub-para">We are the fastest growing doctors directory,
                                                    medical directory, and hospital...</p>
                                            </div>
                                        </div>
                                        <div class="col-4 p-0">
                                            <img style="width: -webkit-fill-available;"
                                                src="{{ asset('/') }}/frontendtheme/images/maps.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-3">
                            <div class="">
                                <div class="border  rounded-lg p-2">
                                    <div class="row">
                                        <div class="col-8 p-0 pl-3 pt-3">
                                            <div class="row mb-2">
                                                <div class="col-2 p-0">
                                                    <img src="{{ asset('/') }}/frontendtheme/images/logo company.png"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <h5 class="doctor-name">Monika Chauhan</h5>
                                                    <p class="sub-para">Diagnostic Centers</p>
                                                </div>
                                            </div>

                                            <div class="row mb-2">
                                                <div class="col-sm-6 p-0">
                                                    <p class="sub-para">Phone</p>
                                                    <h6 class="address-num">
                                                        (505) 555-0125
                                                    </h6>
                                                </div>
                                                <div class="col-sm-6 p-0">
                                                    <p class="sub-para">Adress</p>
                                                    <h6 class="address-num">
                                                        2118 Thornridge Cir. Syracuse, Connecticut
                                                    </h6>
                                                </div>
                                            </div>

                                            <div>
                                                <p class="sub-para">We are the fastest growing doctors directory,
                                                    medical directory, and hospital...</p>
                                            </div>
                                        </div>
                                        <div class="col-4 p-0">
                                            <img style="width: -webkit-fill-available;"
                                                src="{{ asset('/') }}/frontendtheme/images/maps.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-3">
                            <div class="">
                                <div class="border  rounded-lg p-2">
                                    <div class="row">
                                        <div class="col-8 p-0 pl-3 pt-3">
                                            <div class="row mb-2">
                                                <div class="col-2 p-0">
                                                    <img src="{{ asset('/') }}/frontendtheme/images/logo company.png"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <h5 class="doctor-name">Monika Chauhan</h5>
                                                    <p class="sub-para">Diagnostic Centers</p>
                                                </div>
                                            </div>

                                            <div class="row mb-2">
                                                <div class="col-sm-6 p-0">
                                                    <p class="sub-para">Phone</p>
                                                    <h6 class="address-num">
                                                        (505) 555-0125
                                                    </h6>
                                                </div>
                                                <div class="col-sm-6 p-0">
                                                    <p class="sub-para">Adress</p>
                                                    <h6 class="address-num">
                                                        2118 Thornridge Cir. Syracuse, Connecticut
                                                    </h6>
                                                </div>
                                            </div>

                                            <div>
                                                <p class="sub-para">We are the fastest growing doctors directory,
                                                    medical directory, and hospital...</p>
                                            </div>
                                        </div>
                                        <div class="col-4 p-0">
                                            <img style="width: -webkit-fill-available;"
                                                src="{{ asset('/') }}/frontendtheme/images/maps.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-3">
                            <div class="">
                                <div class="border  rounded-lg p-2">
                                    <div class="row">
                                        <div class="col-8 p-0 pl-3 pt-3">
                                            <div class="row mb-2">
                                                <div class="col-2 p-0">
                                                    <img src="{{ asset('/') }}/frontendtheme/images/logo company.png"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <h5 class="doctor-name">Monika Chauhan</h5>
                                                    <p class="sub-para">Diagnostic Centers</p>
                                                </div>
                                            </div>

                                            <div class="row mb-2">
                                                <div class="col-sm-6 p-0">
                                                    <p class="sub-para">Phone</p>
                                                    <h6 class="address-num">
                                                        (505) 555-0125
                                                    </h6>
                                                </div>
                                                <div class="col-sm-6 p-0">
                                                    <p class="sub-para">Adress</p>
                                                    <h6 class="address-num">
                                                        2118 Thornridge Cir. Syracuse, Connecticut
                                                    </h6>
                                                </div>
                                            </div>

                                            <div>
                                                <p class="sub-para">We are the fastest growing doctors directory,
                                                    medical directory, and hospital...</p>
                                            </div>
                                        </div>
                                        <div class="col-4 p-0">
                                            <img style="width: -webkit-fill-available;"
                                                src="{{ asset('/') }}/frontendtheme/images/maps.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-3">
                            <div class="">
                                <div class="border  rounded-lg p-2">
                                    <div class="row">
                                        <div class="col-8 p-0 pl-3 pt-3">
                                            <div class="row mb-2">
                                                <div class="col-2 p-0">
                                                    <img src="{{ asset('/') }}/frontendtheme/images/logo company.png"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <h5 class="doctor-name">Monika Chauhan</h5>
                                                    <p class="sub-para">Diagnostic Centers</p>
                                                </div>
                                            </div>

                                            <div class="row mb-2">
                                                <div class="col-sm-6 p-0">
                                                    <p class="sub-para">Phone</p>
                                                    <h6 class="address-num">
                                                        (505) 555-0125
                                                    </h6>
                                                </div>
                                                <div class="col-sm-6 p-0">
                                                    <p class="sub-para">Adress</p>
                                                    <h6 class="address-num">
                                                        2118 Thornridge Cir. Syracuse, Connecticut
                                                    </h6>
                                                </div>
                                            </div>

                                            <div>
                                                <p class="sub-para">We are the fastest growing doctors directory,
                                                    medical directory, and hospital...</p>
                                            </div>
                                        </div>
                                        <div class="col-4 p-0">
                                            <img style="width: -webkit-fill-available;"
                                                src="{{ asset('/') }}/frontendtheme/images/maps.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-sm-6 mt-3">
                            <div class="">
                                <div class="border  rounded-lg p-2">
                                    <div class="row">
                                        <div class="col-8 p-0 pl-3 pt-3">
                                            <div class="row mb-2">
                                                <div class="col-2 p-0">
                                                    <img src="{{ asset('/') }}/frontendtheme/images/logo company.png"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <h5 class="doctor-name">Monika Chauhan</h5>
                                                    <p class="sub-para">Diagnostic Centers</p>
                                                </div>
                                            </div>

                                            <div class="row mb-2">
                                                <div class="col-sm-6 p-0">
                                                    <p class="sub-para">Phone</p>
                                                    <h6 class="address-num">
                                                        (505) 555-0125
                                                    </h6>
                                                </div>
                                                <div class="col-sm-6 p-0">
                                                    <p class="sub-para">Adress</p>
                                                    <h6 class="address-num">
                                                        2118 Thornridge Cir. Syracuse, Connecticut
                                                    </h6>
                                                </div>
                                            </div>

                                            <div>
                                                <p class="sub-para">We are the fastest growing doctors directory,
                                                    medical directory, and hospital...</p>
                                            </div>
                                        </div>
                                        <div class="col-4 p-0">
                                            <img style="width: -webkit-fill-available;"
                                                src="{{ asset('/') }}/frontendtheme/images/maps.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-3">
                            <div class="">
                                <div class="border  rounded-lg p-2">
                                    <div class="row">
                                        <div class="col-8 p-0 pl-3 pt-3">
                                            <div class="row mb-2">
                                                <div class="col-2 p-0">
                                                    <img src="{{ asset('/') }}/frontendtheme/images/logo company.png"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <h5 class="doctor-name">Monika Chauhan</h5>
                                                    <p class="sub-para">Diagnostic Centers</p>
                                                </div>
                                            </div>

                                            <div class="row mb-2">
                                                <div class="col-sm-6 p-0">
                                                    <p class="sub-para">Phone</p>
                                                    <h6 class="address-num">
                                                        (505) 555-0125
                                                    </h6>
                                                </div>
                                                <div class="col-sm-6 p-0">
                                                    <p class="sub-para">Adress</p>
                                                    <h6 class="address-num">
                                                        2118 Thornridge Cir. Syracuse, Connecticut
                                                    </h6>
                                                </div>
                                            </div>

                                            <div>
                                                <p class="sub-para">We are the fastest growing doctors directory,
                                                    medical directory, and hospital...</p>
                                            </div>
                                        </div>
                                        <div class="col-4 p-0">
                                            <img style="width: -webkit-fill-available;"
                                                src="{{ asset('/') }}/frontendtheme/images/maps.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-3">
                            <div class="">
                                <div class="border  rounded-lg p-2">
                                    <div class="row">
                                        <div class="col-8 p-0 pl-3 pt-3">
                                            <div class="row mb-2">
                                                <div class="col-2 p-0">
                                                    <img src="{{ asset('/') }}/frontendtheme/images/logo company.png"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <h5 class="doctor-name">Monika Chauhan</h5>
                                                    <p class="sub-para">Diagnostic Centers</p>
                                                </div>
                                            </div>

                                            <div class="row mb-2">
                                                <div class="col-sm-6 p-0">
                                                    <p class="sub-para">Phone</p>
                                                    <h6 class="address-num">
                                                        (505) 555-0125
                                                    </h6>
                                                </div>
                                                <div class="col-sm-6 p-0">
                                                    <p class="sub-para">Adress</p>
                                                    <h6 class="address-num">
                                                        2118 Thornridge Cir. Syracuse, Connecticut
                                                    </h6>
                                                </div>
                                            </div>

                                            <div>
                                                <p class="sub-para">We are the fastest growing doctors directory,
                                                    medical directory, and hospital...</p>
                                            </div>
                                        </div>
                                        <div class="col-4 p-0">
                                            <img style="width: -webkit-fill-available;"
                                                src="{{ asset('/') }}/frontendtheme/images/maps.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-3">
                            <div class="">
                                <div class="border  rounded-lg p-2">
                                    <div class="row">
                                        <div class="col-8 p-0 pl-3 pt-3">
                                            <div class="row mb-2">
                                                <div class="col-2 p-0">
                                                    <img src="{{ asset('/') }}/frontendtheme/images/logo company.png"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <h5 class="doctor-name">Monika Chauhan</h5>
                                                    <p class="sub-para">Diagnostic Centers</p>
                                                </div>
                                            </div>

                                            <div class="row mb-2">
                                                <div class="col-sm-6 p-0">
                                                    <p class="sub-para">Phone</p>
                                                    <h6 class="address-num">
                                                        (505) 555-0125
                                                    </h6>
                                                </div>
                                                <div class="col-sm-6 p-0">
                                                    <p class="sub-para">Adress</p>
                                                    <h6 class="address-num">
                                                        2118 Thornridge Cir. Syracuse, Connecticut
                                                    </h6>
                                                </div>
                                            </div>

                                            <div>
                                                <p class="sub-para">We are the fastest growing doctors directory,
                                                    medical directory, and hospital...</p>
                                            </div>
                                        </div>
                                        <div class="col-4 p-0">
                                            <img style="width: -webkit-fill-available;"
                                                src="{{ asset('/') }}/frontendtheme/images/maps.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-3">
                            <div class="">
                                <div class="border  rounded-lg p-2">
                                    <div class="row">
                                        <div class="col-8 p-0 pl-3 pt-3">
                                            <div class="row mb-2">
                                                <div class="col-2 p-0">
                                                    <img src="{{ asset('/') }}/frontendtheme/images/logo company.png"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <h5 class="doctor-name">Monika Chauhan</h5>
                                                    <p class="sub-para">Diagnostic Centers</p>
                                                </div>
                                            </div>

                                            <div class="row mb-2">
                                                <div class="col-sm-6 p-0">
                                                    <p class="sub-para">Phone</p>
                                                    <h6 class="address-num">
                                                        (505) 555-0125
                                                    </h6>
                                                </div>
                                                <div class="col-sm-6 p-0">
                                                    <p class="sub-para">Adress</p>
                                                    <h6 class="address-num">
                                                        2118 Thornridge Cir. Syracuse, Connecticut
                                                    </h6>
                                                </div>
                                            </div>

                                            <div>
                                                <p class="sub-para">We are the fastest growing doctors directory,
                                                    medical directory, and hospital...</p>
                                            </div>
                                        </div>
                                        <div class="col-4 p-0">
                                            <img style="width: -webkit-fill-available;"
                                                src="{{ asset('/') }}/frontendtheme/images/maps.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-3">
                            <div class="">
                                <div class="border  rounded-lg p-2">
                                    <div class="row">
                                        <div class="col-8 p-0 pl-3 pt-3">
                                            <div class="row mb-2">
                                                <div class="col-2 p-0">
                                                    <img src="{{ asset('/') }}/frontendtheme/images/logo company.png"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <h5 class="doctor-name">Monika Chauhan</h5>
                                                    <p class="sub-para">Diagnostic Centers</p>
                                                </div>
                                            </div>

                                            <div class="row mb-2">
                                                <div class="col-sm-6 p-0">
                                                    <p class="sub-para">Phone</p>
                                                    <h6 class="address-num">
                                                        (505) 555-0125
                                                    </h6>
                                                </div>
                                                <div class="col-sm-6 p-0">
                                                    <p class="sub-para">Adress</p>
                                                    <h6 class="address-num">
                                                        2118 Thornridge Cir. Syracuse, Connecticut
                                                    </h6>
                                                </div>
                                            </div>

                                            <div>
                                                <p class="sub-para">We are the fastest growing doctors directory,
                                                    medical directory, and hospital...</p>
                                            </div>
                                        </div>
                                        <div class="col-4 p-0">
                                            <img style="width: -webkit-fill-available;"
                                                src="{{ asset('/') }}/frontendtheme/images/maps.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>



            <!-- Indicators -->
            <ul class="carousel-indicators mt-4 ">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>

            <button class="btn btn-dignis-2">
                View All
                <div class="icon-class">
                    <i class="fas fa-chevron-right ml-2"></i>
                </div>
            </button>


        </div>

    </div>
</section>

<section class=" mt-100">
    <div class="container">
        <div class="col-sm-12 text-right">

        </div>
        <div class="row align-items-end">
            <div class="col-sm-6">
                <div class="img-media">
                    <img src="{{ asset('/') }}/frontendtheme/images/trust-doc.png" alt="">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="text-right">
                    <h1 class="head-main-3">Why you should
                        <br>
                        trust us?
                    </h1>
                </div>
                <div class="row ">
                    <div class="col-sm-6">
                        <div class="cards-2">
                            <div>
                                <img src="{{ asset('/') }}/frontendtheme/images/12.png" alt="">
                                <div class="row">
                                    <div class="col-12 p-0">
                                        <p class="head-para">COVID - 19 safe</p>
                                        <p class="sub-para">Your safety is taken care of by thermal screening,
                                            social distancing, sanitized clinics and hospital rooms, sterilized
                                            surgical equipment</p>
                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="cards-2">
                            <div>
                                <img src="{{ asset('/') }}/frontendtheme/images/11.png" alt="">
                                <div class="row">
                                    <div class="col-12 p-0">
                                        <p class="head-para">Post Surgery Care</p>
                                        <p class="sub-para">We offer free follow-up consultations and
                                            instructions
                                            including dietary tips as well as exercises to every patient to ensure
                                            they have a smooth recovery to their daily routines.</p>
                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="cards-2">
                            <div>
                                <img src="{{ asset('/') }}/frontendtheme/images/10.png" alt="">
                                <div class="row">
                                    <div class="col-12 p-0">
                                        <p class="head-para">Medical Expertise</p>
                                        <p class="sub-para">Our surgeons spend a lot of time with you to diagnose
                                            your condition. You are assisted in all pre-surgery medical diagnostics.
                                            We offer advanced laser and laparoscopic surgical treatment.</p>
                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="cards-2">
                            <div>
                                <img src="{{ asset('/') }}/frontendtheme/images/9.png" alt="">
                                <div class="row">
                                    <div class="col-12 p-0">
                                        <p class="head-para">Assisted Surgery Experience</p>
                                        <p class="sub-para">Adedicated Medical Coordinator assists you throughout
                                            the surgery journey from insurance paperwork, to free commute from home
                                            to hospital </p>
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
<section class="mt-100 bg-2 py-100">
    <div class="container">
        <h1 class="head-main-3 text-center mb-5">Doctor Directory</h1>
        <div id="demo1" class="carousel slide " data-ride="false">


            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div>
                        <div class="row">
                            <div class="col-sm-3 mb-4">
                                <div>
                                    <div class="bg-white p-3 doctor-dir">
                                        <div>
                                            <div>
                                                <img src="{{ asset('/') }}/frontendtheme/images/review-doc.png"
                                                    alt="">
                                            </div>
                                            <div>
                                                <h6 class="star-review"><span class="fas fa-star checked"></span>
                                                    4.7</h6>
                                            </div>

                                        </div>

                                        <div>
                                            <p class="head-para mt-2">Monika Chauhan</p>
                                            <p class="sub-para mt-2">Diagnostic Centers</p>

                                        </div>

                                        <div class="d-flex align-items-center my-2">
                                            <p class="sub-para"> <i class="fas fa-phone-alt"></i>
                                            <h6 class="address-num ml-3">
                                                (702) 555-0122
                                            </h6>
                                            </p>

                                        </div>

                                        <div class="d-flex align-items-center my-2">
                                            <p class="sub-para"> <i class="fas fa-map-marker-alt"></i>
                                            <h6 class="address-num m-0 ml-3">
                                                4140 Parker Rd. Allentown, New Mexico 31134
                                            </h6>
                                            </p>

                                        </div>

                                        <div class="mt-3">
                                            <p class="sub-para">Amet minim mollit non deserunt ullamco est sit
                                                aliqua dolor do amet sint. Velit officia conseq...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 mb-4">
                                <div>
                                    <div class="bg-white p-3 doctor-dir">
                                        <div>
                                            <div>
                                                <img src="{{ asset('/') }}/frontendtheme/images/review-doc.png"
                                                    alt="">
                                            </div>
                                            <div>
                                                <h6 class="star-review"><span class="fas fa-star checked"></span>
                                                    4.7</h6>
                                            </div>

                                        </div>

                                        <div>
                                            <p class="head-para mt-2">Monika Chauhan</p>
                                            <p class="sub-para mt-2">Diagnostic Centers</p>

                                        </div>

                                        <div class="d-flex align-items-center my-2">
                                            <p class="sub-para"> <i class="fas fa-phone-alt"></i>
                                            <h6 class="address-num ml-3">
                                                (702) 555-0122
                                            </h6>
                                            </p>

                                        </div>

                                        <div class="d-flex align-items-center my-2">
                                            <p class="sub-para"> <i class="fas fa-map-marker-alt"></i>
                                            <h6 class="address-num m-0 ml-3">
                                                4140 Parker Rd. Allentown, New Mexico 31134
                                            </h6>
                                            </p>

                                        </div>

                                        <div class="mt-3">
                                            <p class="sub-para">Amet minim mollit non deserunt ullamco est sit
                                                aliqua dolor do amet sint. Velit officia conseq...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 mb-4">
                                <div>
                                    <div class="bg-white p-3 doctor-dir">
                                        <div>
                                            <div>
                                                <img src="{{ asset('/') }}/frontendtheme/images/review-doc.png"
                                                    alt="">
                                            </div>
                                            <div>
                                                <h6 class="star-review"><span class="fas fa-star checked"></span>
                                                    4.7</h6>
                                            </div>

                                        </div>

                                        <div>
                                            <p class="head-para mt-2">Monika Chauhan</p>
                                            <p class="sub-para mt-2">Diagnostic Centers</p>

                                        </div>

                                        <div class="d-flex align-items-center my-2">
                                            <p class="sub-para"> <i class="fas fa-phone-alt"></i>
                                            <h6 class="address-num ml-3">
                                                (702) 555-0122
                                            </h6>
                                            </p>

                                        </div>

                                        <div class="d-flex align-items-center my-2">
                                            <p class="sub-para"> <i class="fas fa-map-marker-alt"></i>
                                            <h6 class="address-num m-0 ml-3">
                                                4140 Parker Rd. Allentown, New Mexico 31134
                                            </h6>
                                            </p>

                                        </div>

                                        <div class="mt-3">
                                            <p class="sub-para">Amet minim mollit non deserunt ullamco est sit
                                                aliqua dolor do amet sint. Velit officia conseq...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 mb-4">
                                <div>
                                    <div class="bg-white p-3 doctor-dir">
                                        <div>
                                            <div>
                                                <img src="{{ asset('/') }}/frontendtheme/images/review-doc.png"
                                                    alt="">
                                            </div>
                                            <div>
                                                <h6 class="star-review"><span class="fas fa-star checked"></span>
                                                    4.7</h6>
                                            </div>

                                        </div>

                                        <div>
                                            <p class="head-para mt-2">Monika Chauhan</p>
                                            <p class="sub-para mt-2">Diagnostic Centers</p>

                                        </div>

                                        <div class="d-flex align-items-center my-2">
                                            <p class="sub-para"> <i class="fas fa-phone-alt"></i>
                                            <h6 class="address-num ml-3">
                                                (702) 555-0122
                                            </h6>
                                            </p>

                                        </div>

                                        <div class="d-flex align-items-center my-2">
                                            <p class="sub-para"> <i class="fas fa-map-marker-alt"></i>
                                            <h6 class="address-num m-0 ml-3">
                                                4140 Parker Rd. Allentown, New Mexico 31134
                                            </h6>
                                            </p>

                                        </div>

                                        <div class="mt-3">
                                            <p class="sub-para">Amet minim mollit non deserunt ullamco est sit
                                                aliqua dolor do amet sint. Velit officia conseq...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 mb-4">
                                <div>
                                    <div class="bg-white p-3 doctor-dir">
                                        <div>
                                            <div>
                                                <img src="{{ asset('/') }}/frontendtheme/images/review-doc.png"
                                                    alt="">
                                            </div>
                                            <div>
                                                <h6 class="star-review"><span class="fas fa-star checked"></span>
                                                    4.7</h6>
                                            </div>

                                        </div>

                                        <div>
                                            <p class="head-para mt-2">Monika Chauhan</p>
                                            <p class="sub-para mt-2">Diagnostic Centers</p>

                                        </div>

                                        <div class="d-flex align-items-center my-2">
                                            <p class="sub-para"> <i class="fas fa-phone-alt"></i>
                                            <h6 class="address-num ml-3">
                                                (702) 555-0122
                                            </h6>
                                            </p>

                                        </div>

                                        <div class="d-flex align-items-center my-2">
                                            <p class="sub-para"> <i class="fas fa-map-marker-alt"></i>
                                            <h6 class="address-num m-0 ml-3">
                                                4140 Parker Rd. Allentown, New Mexico 31134
                                            </h6>
                                            </p>

                                        </div>

                                        <div class="mt-3">
                                            <p class="sub-para">Amet minim mollit non deserunt ullamco est sit
                                                aliqua dolor do amet sint. Velit officia conseq...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 mb-4">
                                <div>
                                    <div class="bg-white p-3 doctor-dir">
                                        <div>
                                            <div>
                                                <img src="{{ asset('/') }}/frontendtheme/images/review-doc.png"
                                                    alt="">
                                            </div>
                                            <div>
                                                <h6 class="star-review"><span class="fas fa-star checked"></span>
                                                    4.7</h6>
                                            </div>

                                        </div>

                                        <div>
                                            <p class="head-para mt-2">Monika Chauhan</p>
                                            <p class="sub-para mt-2">Diagnostic Centers</p>

                                        </div>

                                        <div class="d-flex align-items-center my-2">
                                            <p class="sub-para"> <i class="fas fa-phone-alt"></i>
                                            <h6 class="address-num ml-3">
                                                (702) 555-0122
                                            </h6>
                                            </p>

                                        </div>

                                        <div class="d-flex align-items-center my-2">
                                            <p class="sub-para"> <i class="fas fa-map-marker-alt"></i>
                                            <h6 class="address-num m-0 ml-3">
                                                4140 Parker Rd. Allentown, New Mexico 31134
                                            </h6>
                                            </p>

                                        </div>

                                        <div class="mt-3">
                                            <p class="sub-para">Amet minim mollit non deserunt ullamco est sit
                                                aliqua dolor do amet sint. Velit officia conseq...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 mb-4">
                                <div>
                                    <div class="bg-white p-3 doctor-dir">
                                        <div>
                                            <div>
                                                <img src="{{ asset('/') }}/frontendtheme/images/review-doc.png"
                                                    alt="">
                                            </div>
                                            <div>
                                                <h6 class="star-review"><span class="fas fa-star checked"></span>
                                                    4.7</h6>
                                            </div>

                                        </div>

                                        <div>
                                            <p class="head-para mt-2">Monika Chauhan</p>
                                            <p class="sub-para mt-2">Diagnostic Centers</p>

                                        </div>

                                        <div class="d-flex align-items-center my-2">
                                            <p class="sub-para"> <i class="fas fa-phone-alt"></i>
                                            <h6 class="address-num ml-3">
                                                (702) 555-0122
                                            </h6>
                                            </p>

                                        </div>

                                        <div class="d-flex align-items-center my-2">
                                            <p class="sub-para"> <i class="fas fa-map-marker-alt"></i>
                                            <h6 class="address-num m-0 ml-3">
                                                4140 Parker Rd. Allentown, New Mexico 31134
                                            </h6>
                                            </p>

                                        </div>

                                        <div class="mt-3">
                                            <p class="sub-para">Amet minim mollit non deserunt ullamco est sit
                                                aliqua dolor do amet sint. Velit officia conseq...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 mb-4">
                                <div>
                                    <div class="bg-white p-3 doctor-dir">
                                        <div>
                                            <div>
                                                <img src="{{ asset('/') }}/frontendtheme/images/review-doc.png"
                                                    alt="">
                                            </div>
                                            <div>
                                                <h6 class="star-review"><span class="fas fa-star checked"></span>
                                                    4.7</h6>
                                            </div>

                                        </div>

                                        <div>
                                            <p class="head-para mt-2">Monika Chauhan</p>
                                            <p class="sub-para mt-2">Diagnostic Centers</p>

                                        </div>

                                        <div class="d-flex align-items-center my-2">
                                            <p class="sub-para"> <i class="fas fa-phone-alt"></i>
                                            <h6 class="address-num ml-3">
                                                (702) 555-0122
                                            </h6>
                                            </p>

                                        </div>

                                        <div class="d-flex align-items-center my-2">
                                            <p class="sub-para"> <i class="fas fa-map-marker-alt"></i>
                                            <h6 class="address-num m-0 ml-3">
                                                4140 Parker Rd. Allentown, New Mexico 31134
                                            </h6>
                                            </p>

                                        </div>

                                        <div class="mt-3">
                                            <p class="sub-para">Amet minim mollit non deserunt ullamco est sit
                                                aliqua dolor do amet sint. Velit officia conseq...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div>
                        <div class="row">
                            <div class="col-sm-3 mb-4">
                                <div>
                                    <div class="bg-white p-3 doctor-dir">
                                        <div>
                                            <div>
                                                <img src="{{ asset('/') }}/frontendtheme/images/review-doc.png"
                                                    alt="">
                                            </div>
                                            <div>
                                                <h6 class="star-review"><span class="fas fa-star checked"></span>
                                                    4.7</h6>
                                            </div>

                                        </div>

                                        <div>
                                            <p class="head-para mt-2">Monika Chauhan</p>
                                            <p class="sub-para mt-2">Diagnostic Centers</p>

                                        </div>

                                        <div class="d-flex align-items-center my-2">
                                            <p class="sub-para"> <i class="fas fa-phone-alt"></i>
                                            <h6 class="address-num ml-3">
                                                (702) 555-0122
                                            </h6>
                                            </p>

                                        </div>

                                        <div class="d-flex align-items-center my-2">
                                            <p class="sub-para"> <i class="fas fa-map-marker-alt"></i>
                                            <h6 class="address-num m-0 ml-3">
                                                4140 Parker Rd. Allentown, New Mexico 31134
                                            </h6>
                                            </p>

                                        </div>

                                        <div class="mt-3">
                                            <p class="sub-para">Amet minim mollit non deserunt ullamco est sit
                                                aliqua dolor do amet sint. Velit officia conseq...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 mb-4">
                                <div>
                                    <div class="bg-white p-3 doctor-dir">
                                        <div>
                                            <div>
                                                <img src="{{ asset('/') }}/frontendtheme/images/review-doc.png"
                                                    alt="">
                                            </div>
                                            <div>
                                                <h6 class="star-review"><span class="fas fa-star checked"></span>
                                                    4.7</h6>
                                            </div>

                                        </div>

                                        <div>
                                            <p class="head-para mt-2">Monika Chauhan</p>
                                            <p class="sub-para mt-2">Diagnostic Centers</p>

                                        </div>

                                        <div class="d-flex align-items-center my-2">
                                            <p class="sub-para"> <i class="fas fa-phone-alt"></i>
                                            <h6 class="address-num ml-3">
                                                (702) 555-0122
                                            </h6>
                                            </p>

                                        </div>

                                        <div class="d-flex align-items-center my-2">
                                            <p class="sub-para"> <i class="fas fa-map-marker-alt"></i>
                                            <h6 class="address-num m-0 ml-3">
                                                4140 Parker Rd. Allentown, New Mexico 31134
                                            </h6>
                                            </p>

                                        </div>

                                        <div class="mt-3">
                                            <p class="sub-para">Amet minim mollit non deserunt ullamco est sit
                                                aliqua dolor do amet sint. Velit officia conseq...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 mb-4">
                                <div>
                                    <div class="bg-white p-3 doctor-dir">
                                        <div>
                                            <div>
                                                <img src="{{ asset('/') }}/frontendtheme/images/review-doc.png"
                                                    alt="">
                                            </div>
                                            <div>
                                                <h6 class="star-review"><span class="fas fa-star checked"></span>
                                                    4.7</h6>
                                            </div>

                                        </div>

                                        <div>
                                            <p class="head-para mt-2">Monika Chauhan</p>
                                            <p class="sub-para mt-2">Diagnostic Centers</p>

                                        </div>

                                        <div class="d-flex align-items-center my-2">
                                            <p class="sub-para"> <i class="fas fa-phone-alt"></i>
                                            <h6 class="address-num ml-3">
                                                (702) 555-0122
                                            </h6>
                                            </p>

                                        </div>

                                        <div class="d-flex align-items-center my-2">
                                            <p class="sub-para"> <i class="fas fa-map-marker-alt"></i>
                                            <h6 class="address-num m-0 ml-3">
                                                4140 Parker Rd. Allentown, New Mexico 31134
                                            </h6>
                                            </p>

                                        </div>

                                        <div class="mt-3">
                                            <p class="sub-para">Amet minim mollit non deserunt ullamco est sit
                                                aliqua dolor do amet sint. Velit officia conseq...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 mb-4">
                                <div>
                                    <div class="bg-white p-3 doctor-dir">
                                        <div>
                                            <div>
                                                <img src="{{ asset('/') }}/frontendtheme/images/review-doc.png"
                                                    alt="">
                                            </div>
                                            <div>
                                                <h6 class="star-review"><span class="fas fa-star checked"></span>
                                                    4.7</h6>
                                            </div>

                                        </div>

                                        <div>
                                            <p class="head-para mt-2">Monika Chauhan</p>
                                            <p class="sub-para mt-2">Diagnostic Centers</p>

                                        </div>

                                        <div class="d-flex align-items-center my-2">
                                            <p class="sub-para"> <i class="fas fa-phone-alt"></i>
                                            <h6 class="address-num ml-3">
                                                (702) 555-0122
                                            </h6>
                                            </p>

                                        </div>

                                        <div class="d-flex align-items-center my-2">
                                            <p class="sub-para"> <i class="fas fa-map-marker-alt"></i>
                                            <h6 class="address-num m-0 ml-3">
                                                4140 Parker Rd. Allentown, New Mexico 31134
                                            </h6>
                                            </p>

                                        </div>

                                        <div class="mt-3">
                                            <p class="sub-para">Amet minim mollit non deserunt ullamco est sit
                                                aliqua dolor do amet sint. Velit officia conseq...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 mb-4">
                                <div>
                                    <div class="bg-white p-3 doctor-dir">
                                        <div>
                                            <div>
                                                <img src="{{ asset('/') }}/frontendtheme/images/review-doc.png"
                                                    alt="">
                                            </div>
                                            <div>
                                                <h6 class="star-review"><span class="fas fa-star checked"></span>
                                                    4.7</h6>
                                            </div>

                                        </div>

                                        <div>
                                            <p class="head-para mt-2">Monika Chauhan</p>
                                            <p class="sub-para mt-2">Diagnostic Centers</p>

                                        </div>

                                        <div class="d-flex align-items-center my-2">
                                            <p class="sub-para"> <i class="fas fa-phone-alt"></i>
                                            <h6 class="address-num ml-3">
                                                (702) 555-0122
                                            </h6>
                                            </p>

                                        </div>

                                        <div class="d-flex align-items-center my-2">
                                            <p class="sub-para"> <i class="fas fa-map-marker-alt"></i>
                                            <h6 class="address-num m-0 ml-3">
                                                4140 Parker Rd. Allentown, New Mexico 31134
                                            </h6>
                                            </p>

                                        </div>

                                        <div class="mt-3">
                                            <p class="sub-para">Amet minim mollit non deserunt ullamco est sit
                                                aliqua dolor do amet sint. Velit officia conseq...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 mb-4">
                                <div>
                                    <div class="bg-white p-3 doctor-dir">
                                        <div>
                                            <div>
                                                <img src="{{ asset('/') }}/frontendtheme/images/review-doc.png"
                                                    alt="">
                                            </div>
                                            <div>
                                                <h6 class="star-review"><span class="fas fa-star checked"></span>
                                                    4.7</h6>
                                            </div>

                                        </div>

                                        <div>
                                            <p class="head-para mt-2">Monika Chauhan</p>
                                            <p class="sub-para mt-2">Diagnostic Centers</p>

                                        </div>

                                        <div class="d-flex align-items-center my-2">
                                            <p class="sub-para"> <i class="fas fa-phone-alt"></i>
                                            <h6 class="address-num ml-3">
                                                (702) 555-0122
                                            </h6>
                                            </p>

                                        </div>

                                        <div class="d-flex align-items-center my-2">
                                            <p class="sub-para"> <i class="fas fa-map-marker-alt"></i>
                                            <h6 class="address-num m-0 ml-3">
                                                4140 Parker Rd. Allentown, New Mexico 31134
                                            </h6>
                                            </p>

                                        </div>

                                        <div class="mt-3">
                                            <p class="sub-para">Amet minim mollit non deserunt ullamco est sit
                                                aliqua dolor do amet sint. Velit officia conseq...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 mb-4">
                                <div>
                                    <div class="bg-white p-3 doctor-dir">
                                        <div>
                                            <div>
                                                <img src="{{ asset('/') }}/frontendtheme/images/review-doc.png"
                                                    alt="">
                                            </div>
                                            <div>
                                                <h6 class="star-review"><span class="fas fa-star checked"></span>
                                                    4.7</h6>
                                            </div>

                                        </div>

                                        <div>
                                            <p class="head-para mt-2">Monika Chauhan</p>
                                            <p class="sub-para mt-2">Diagnostic Centers</p>

                                        </div>

                                        <div class="d-flex align-items-center my-2">
                                            <p class="sub-para"> <i class="fas fa-phone-alt"></i>
                                            <h6 class="address-num ml-3">
                                                (702) 555-0122
                                            </h6>
                                            </p>

                                        </div>

                                        <div class="d-flex align-items-center my-2">
                                            <p class="sub-para"> <i class="fas fa-map-marker-alt"></i>
                                            <h6 class="address-num m-0 ml-3">
                                                4140 Parker Rd. Allentown, New Mexico 31134
                                            </h6>
                                            </p>

                                        </div>

                                        <div class="mt-3">
                                            <p class="sub-para">Amet minim mollit non deserunt ullamco est sit
                                                aliqua dolor do amet sint. Velit officia conseq...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 mb-4">
                                <div>
                                    <div class="bg-white p-3 doctor-dir">
                                        <div>
                                            <div>
                                                <img src="{{ asset('/') }}/frontendtheme/images/review-doc.png"
                                                    alt="">
                                            </div>
                                            <div>
                                                <h6 class="star-review"><span class="fas fa-star checked"></span>
                                                    4.7</h6>
                                            </div>

                                        </div>

                                        <div>
                                            <p class="head-para mt-2">Monika Chauhan</p>
                                            <p class="sub-para mt-2">Diagnostic Centers</p>

                                        </div>

                                        <div class="d-flex align-items-center my-2">
                                            <p class="sub-para"> <i class="fas fa-phone-alt"></i>
                                            <h6 class="address-num ml-3">
                                                (702) 555-0122
                                            </h6>
                                            </p>

                                        </div>

                                        <div class="d-flex align-items-center my-2">
                                            <p class="sub-para"> <i class="fas fa-map-marker-alt"></i>
                                            <h6 class="address-num m-0 ml-3">
                                                4140 Parker Rd. Allentown, New Mexico 31134
                                            </h6>
                                            </p>

                                        </div>

                                        <div class="mt-3">
                                            <p class="sub-para">Amet minim mollit non deserunt ullamco est sit
                                                aliqua dolor do amet sint. Velit officia conseq...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div>
                        <div class="row">
                            <div class="col-sm-3 mb-4">
                                <div>
                                    <div class="bg-white p-3 doctor-dir">
                                        <div>
                                            <div>
                                                <img src="{{ asset('/') }}/frontendtheme/images/review-doc.png"
                                                    alt="">
                                            </div>
                                            <div>
                                                <h6 class="star-review"><span class="fas fa-star checked"></span>
                                                    4.7</h6>
                                            </div>

                                        </div>

                                        <div>
                                            <p class="head-para mt-2">Monika Chauhan</p>
                                            <p class="sub-para mt-2">Diagnostic Centers</p>

                                        </div>

                                        <div class="d-flex align-items-center my-2">
                                            <p class="sub-para"> <i class="fas fa-phone-alt"></i>
                                            <h6 class="address-num ml-3">
                                                (702) 555-0122
                                            </h6>
                                            </p>

                                        </div>

                                        <div class="d-flex align-items-center my-2">
                                            <p class="sub-para"> <i class="fas fa-map-marker-alt"></i>
                                            <h6 class="address-num m-0 ml-3">
                                                4140 Parker Rd. Allentown, New Mexico 31134
                                            </h6>
                                            </p>

                                        </div>

                                        <div class="mt-3">
                                            <p class="sub-para">Amet minim mollit non deserunt ullamco est sit
                                                aliqua dolor do amet sint. Velit officia conseq...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 mb-4">
                                <div>
                                    <div class="bg-white p-3 doctor-dir">
                                        <div>
                                            <div>
                                                <img src="{{ asset('/') }}/frontendtheme/images/review-doc.png"
                                                    alt="">
                                            </div>
                                            <div>
                                                <h6 class="star-review"><span class="fas fa-star checked"></span>
                                                    4.7</h6>
                                            </div>

                                        </div>

                                        <div>
                                            <p class="head-para mt-2">Monika Chauhan</p>
                                            <p class="sub-para mt-2">Diagnostic Centers</p>

                                        </div>

                                        <div class="d-flex align-items-center my-2">
                                            <p class="sub-para"> <i class="fas fa-phone-alt"></i>
                                            <h6 class="address-num ml-3">
                                                (702) 555-0122
                                            </h6>
                                            </p>

                                        </div>

                                        <div class="d-flex align-items-center my-2">
                                            <p class="sub-para"> <i class="fas fa-map-marker-alt"></i>
                                            <h6 class="address-num m-0 ml-3">
                                                4140 Parker Rd. Allentown, New Mexico 31134
                                            </h6>
                                            </p>

                                        </div>

                                        <div class="mt-3">
                                            <p class="sub-para">Amet minim mollit non deserunt ullamco est sit
                                                aliqua dolor do amet sint. Velit officia conseq...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 mb-4">
                                <div>
                                    <div class="bg-white p-3 doctor-dir">
                                        <div>
                                            <div>
                                                <img src="{{ asset('/') }}/frontendtheme/images/review-doc.png"
                                                    alt="">
                                            </div>
                                            <div>
                                                <h6 class="star-review"><span class="fas fa-star checked"></span>
                                                    4.7</h6>
                                            </div>

                                        </div>

                                        <div>
                                            <p class="head-para mt-2">Monika Chauhan</p>
                                            <p class="sub-para mt-2">Diagnostic Centers</p>

                                        </div>

                                        <div class="d-flex align-items-center my-2">
                                            <p class="sub-para"> <i class="fas fa-phone-alt"></i>
                                            <h6 class="address-num ml-3">
                                                (702) 555-0122
                                            </h6>
                                            </p>

                                        </div>

                                        <div class="d-flex align-items-center my-2">
                                            <p class="sub-para"> <i class="fas fa-map-marker-alt"></i>
                                            <h6 class="address-num m-0 ml-3">
                                                4140 Parker Rd. Allentown, New Mexico 31134
                                            </h6>
                                            </p>

                                        </div>

                                        <div class="mt-3">
                                            <p class="sub-para">Amet minim mollit non deserunt ullamco est sit
                                                aliqua dolor do amet sint. Velit officia conseq...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 mb-4">
                                <div>
                                    <div class="bg-white p-3 doctor-dir">
                                        <div>
                                            <div>
                                                <img src="{{ asset('/') }}/frontendtheme/images/review-doc.png"
                                                    alt="">
                                            </div>
                                            <div>
                                                <h6 class="star-review"><span class="fas fa-star checked"></span>
                                                    4.7</h6>
                                            </div>

                                        </div>

                                        <div>
                                            <p class="head-para mt-2">Monika Chauhan</p>
                                            <p class="sub-para mt-2">Diagnostic Centers</p>

                                        </div>

                                        <div class="d-flex align-items-center my-2">
                                            <p class="sub-para"> <i class="fas fa-phone-alt"></i>
                                            <h6 class="address-num ml-3">
                                                (702) 555-0122
                                            </h6>
                                            </p>

                                        </div>

                                        <div class="d-flex align-items-center my-2">
                                            <p class="sub-para"> <i class="fas fa-map-marker-alt"></i>
                                            <h6 class="address-num m-0 ml-3">
                                                4140 Parker Rd. Allentown, New Mexico 31134
                                            </h6>
                                            </p>

                                        </div>

                                        <div class="mt-3">
                                            <p class="sub-para">Amet minim mollit non deserunt ullamco est sit
                                                aliqua dolor do amet sint. Velit officia conseq...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 mb-4">
                                <div>
                                    <div class="bg-white p-3 doctor-dir">
                                        <div>
                                            <div>
                                                <img src="{{ asset('/') }}/frontendtheme/images/review-doc.png"
                                                    alt="">
                                            </div>
                                            <div>
                                                <h6 class="star-review"><span class="fas fa-star checked"></span>
                                                    4.7</h6>
                                            </div>

                                        </div>

                                        <div>
                                            <p class="head-para mt-2">Monika Chauhan</p>
                                            <p class="sub-para mt-2">Diagnostic Centers</p>

                                        </div>

                                        <div class="d-flex align-items-center my-2">
                                            <p class="sub-para"> <i class="fas fa-phone-alt"></i>
                                            <h6 class="address-num ml-3">
                                                (702) 555-0122
                                            </h6>
                                            </p>

                                        </div>

                                        <div class="d-flex align-items-center my-2">
                                            <p class="sub-para"> <i class="fas fa-map-marker-alt"></i>
                                            <h6 class="address-num m-0 ml-3">
                                                4140 Parker Rd. Allentown, New Mexico 31134
                                            </h6>
                                            </p>

                                        </div>

                                        <div class="mt-3">
                                            <p class="sub-para">Amet minim mollit non deserunt ullamco est sit
                                                aliqua dolor do amet sint. Velit officia conseq...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 mb-4">
                                <div>
                                    <div class="bg-white p-3 doctor-dir">
                                        <div>
                                            <div>
                                                <img src="{{ asset('/') }}/frontendtheme/images/review-doc.png"
                                                    alt="">
                                            </div>
                                            <div>
                                                <h6 class="star-review"><span class="fas fa-star checked"></span>
                                                    4.7</h6>
                                            </div>

                                        </div>

                                        <div>
                                            <p class="head-para mt-2">Monika Chauhan</p>
                                            <p class="sub-para mt-2">Diagnostic Centers</p>

                                        </div>

                                        <div class="d-flex align-items-center my-2">
                                            <p class="sub-para"> <i class="fas fa-phone-alt"></i>
                                            <h6 class="address-num ml-3">
                                                (702) 555-0122
                                            </h6>
                                            </p>

                                        </div>

                                        <div class="d-flex align-items-center my-2">
                                            <p class="sub-para"> <i class="fas fa-map-marker-alt"></i>
                                            <h6 class="address-num m-0 ml-3">
                                                4140 Parker Rd. Allentown, New Mexico 31134
                                            </h6>
                                            </p>

                                        </div>

                                        <div class="mt-3">
                                            <p class="sub-para">Amet minim mollit non deserunt ullamco est sit
                                                aliqua dolor do amet sint. Velit officia conseq...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 mb-4">
                                <div>
                                    <div class="bg-white p-3 doctor-dir">
                                        <div>
                                            <div>
                                                <img src="{{ asset('/') }}/frontendtheme/images/review-doc.png"
                                                    alt="">
                                            </div>
                                            <div>
                                                <h6 class="star-review"><span class="fas fa-star checked"></span>
                                                    4.7</h6>
                                            </div>

                                        </div>

                                        <div>
                                            <p class="head-para mt-2">Monika Chauhan</p>
                                            <p class="sub-para mt-2">Diagnostic Centers</p>

                                        </div>

                                        <div class="d-flex align-items-center my-2">
                                            <p class="sub-para"> <i class="fas fa-phone-alt"></i>
                                            <h6 class="address-num ml-3">
                                                (702) 555-0122
                                            </h6>
                                            </p>

                                        </div>

                                        <div class="d-flex align-items-center my-2">
                                            <p class="sub-para"> <i class="fas fa-map-marker-alt"></i>
                                            <h6 class="address-num m-0 ml-3">
                                                4140 Parker Rd. Allentown, New Mexico 31134
                                            </h6>
                                            </p>

                                        </div>

                                        <div class="mt-3">
                                            <p class="sub-para">Amet minim mollit non deserunt ullamco est sit
                                                aliqua dolor do amet sint. Velit officia conseq...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 mb-4">
                                <div>
                                    <div class="bg-white p-3 doctor-dir">
                                        <div>
                                            <div>
                                                <img src="{{ asset('/') }}/frontendtheme/images/review-doc.png"
                                                    alt="">
                                            </div>
                                            <div>
                                                <h6 class="star-review"><span class="fas fa-star checked"></span>
                                                    4.7</h6>
                                            </div>

                                        </div>

                                        <div>
                                            <p class="head-para mt-2">Monika Chauhan</p>
                                            <p class="sub-para mt-2">Diagnostic Centers</p>

                                        </div>

                                        <div class="d-flex align-items-center my-2">
                                            <p class="sub-para"> <i class="fas fa-phone-alt"></i>
                                            <h6 class="address-num ml-3">
                                                (702) 555-0122
                                            </h6>
                                            </p>

                                        </div>

                                        <div class="d-flex align-items-center my-2">
                                            <p class="sub-para"> <i class="fas fa-map-marker-alt"></i>
                                            <h6 class="address-num m-0 ml-3">
                                                4140 Parker Rd. Allentown, New Mexico 31134
                                            </h6>
                                            </p>

                                        </div>

                                        <div class="mt-3">
                                            <p class="sub-para">Amet minim mollit non deserunt ullamco est sit
                                                aliqua dolor do amet sint. Velit officia conseq...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo1" data-slide-to="0" class="active"></li>
                <li data-target="#demo1" data-slide-to="1"></li>
                <li data-target="#demo1" data-slide-to="2"></li>
            </ul>

            <button class="btn btn-dignis-3">
                View All Doctors
                <div class="icon-class">
                    <i class="fas fa-chevron-right ml-2"></i>
                </div>
            </button>


        </div>

    </div>
</section>




<section class="mt-100 ">
    <div class="container">
        <div class="bg-care text-center img-media">
            <img src="{{ asset('/') }}/frontendtheme/images/care.png" alt="">

            <div class="row">
                <div class="col-sm-6">
                    <div class="abolute-green">
                        <button class="btn btn-dignis-4">
                            Get in Touch
                            <div class="icon-class">
                                <i class="fas fa-chevron-right ml-2"></i>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div>

        </div>
    </div>
    </div>
</section>
@endsection
