<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Doctor Directory')</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Rubik:400,700,900');

    </style>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Rubik' rel='stylesheet'>

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <link rel="stylesheet" href="{{ asset('/') }}/frontendtheme/style.css">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
    @stack('css')
</head>
<body>
    <section class="@if(\Request::route()->getName()=='home')banner-section @else banner-section-1 @endif">
        <nav class="navbar navbar-expand-lg navbar-dark bg-transprenat container pt-4">
            <a class="navbar-brand" href="#">Medical Directory</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdown"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Services
                            <i class="fas fa-chevron-down  dropdown-icon"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">1</a>
                            <a class="dropdown-item" href="#">2</a>
                            <a class="dropdown-item" href="#">3</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Find Doctors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">About Us</a>
                    </li>
                </ul>

            </div>
        </nav>

        @yield('contents')

        @php
          $bottom_get_in_touch = App\PageContentModel::where('key','bottom-get-in-touch')->where('page','home')->value('image');
        @endphp
        <section class="mt-100 ">
            <div class="container">
                <div class="bg-care text-center img-media">
                    <img src="{{ asset('/') }}/uploads/content/{{$bottom_get_in_touch }}" alt="">
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

        <footer class="footer-section mt-100">
            <div class="container">
    
                <div class="footer-content pt-5 pb-0">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 mb-50 pr-0 width-custom-1">
                            <div class="footer-widget">
                                <div class="footer-logo">
                                    <a href="index.html">Medical Directory</a>
                                </div>
                                <div class="footer-text">
                                    <p>Discover the best doctor, clinic & hospital the city nearest to you</p>
                                </div>
    
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-6 mb-30 width-custom-2">
                            <div class="footer-widget">
                                <div class="footer-widget-heading">
                                    <h3>Quick Links</h3>
                                </div>
                                <ul>
                                    <li><a href="{{route('home')}}">Home</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Find Doctors</a></li>
    
                                    <li><a href="#">About us</a></li>
    
    
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-6 mb-30 width-custom-2">
                            <div class="footer-widget">
                                <div class="footer-widget-heading">
                                    <h3>For Patients</h3>
                                </div>
                                <ul>
    
                                    <li><a href="#">FAQs</a></li>
                                    <li><a href="#">Online Consultation</a></li>
                                    <li><a href="#">Patient Help</a></li>
                                    <li><a href="#">Our Doctors</a></li>
    
    
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-6 mb-30 width-custom-2">
                            <div class="footer-widget">
                                <div class="footer-widget-heading">
                                    <h3 style="color: #00ffff00;">Quick Links</h3>
                                </div>
                                <ul>
    
                                    <li><a href="#">Our Doctors</a></li>
    
                                    <li><a href="#">Community</a></li>
    
                                    <li><a href="#">No Cost Emi</a></li>
    
                                    <li><a href="#">Create ABHA</a></li>
    
    
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-3 col-md-6 mb-50 width-custom-3">
                            <div class="footer-widget">
                                <div class="footer-widget-heading">
                                    <h3>Subscribe</h3>
                                </div>
    
                                <div class="subscribe-form">
                                    <form action="#" id="header-search-people" class="form-area  mt-0"
                                        novalidate="novalidate" autocomplete="off">
                                        <div class="row">
                                            <div class="col-md-12 p-0">
                                                <div class="styled-input wide multi">
    
                                                    <div class="last-name border-0" id="input-last-name">
                                                        <input type="text" placeholder="Enter your email" name="ln" id="ln"
                                                            autocomplete="off" data-placeholder-focus="false" required="">
                                                        <div class="icon-absoulte">
                                                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M20 4.5H4C2.9 4.5 2.01 5.4 2.01 6.5L2 18.5C2 19.6 2.9 20.5 4 20.5H20C21.1 20.5 22 19.6 22 18.5V6.5C22 5.4 21.1 4.5 20 4.5ZM19.6 8.75L12.53 13.17C12.21 13.37 11.79 13.37 11.47 13.17L4.4 8.75C4.15 8.59 4 8.32 4 8.03C4 7.36 4.73 6.96 5.3 7.31L12 11.5L18.7 7.31C19.27 6.96 20 7.36 20 8.03C20 8.32 19.85 8.59 19.6 8.75Z"
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
                            </div>
                        </div>
                    </div>
                </div>
    
                <hr style="border-top: 1px solid rgba(255, 255, 255, 0.15) ;" class="mt-0">
    
                <div class="row justify-content-between align-items-center pt-4">
                    <div class="col-sm-3">
                        <ul class="mainisocail">
                            <li class="icon-social"><a href=""><svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.9277 3.29953C12.4823 3.49652 12.0101 3.62589 11.5265 3.68337C12.0362 3.37854 12.4177 2.89879 12.5998 2.33353C12.1215 2.6182 11.5971 2.8177 11.0505 2.92562C10.6834 2.53279 10.1967 2.27226 9.66624 2.18454C9.13575 2.09682 8.59115 2.18682 8.11709 2.44055C7.64303 2.69428 7.26607 3.09752 7.04483 3.58758C6.82359 4.07764 6.77045 4.62707 6.89368 5.15045C5.92366 5.10183 4.97471 4.84976 4.10843 4.41059C3.24216 3.97142 2.47792 3.35498 1.86535 2.60128C1.64852 2.97371 1.53457 3.39708 1.53518 3.82803C1.53518 4.67387 1.96568 5.42112 2.62018 5.85862C2.23285 5.84642 1.85405 5.74182 1.51535 5.55354V5.58387C1.51546 6.14719 1.7104 6.69314 2.06709 7.12915C2.42379 7.56516 2.9203 7.8644 3.47243 7.97612C3.11287 8.07356 2.73586 8.08792 2.36993 8.01812C2.5256 8.503 2.82902 8.92707 3.23769 9.23093C3.64637 9.5348 4.13984 9.70325 4.64901 9.7127C4.14296 10.1101 3.56353 10.4039 2.94386 10.5773C2.32419 10.7507 1.67642 10.8002 1.0376 10.723C2.15275 11.4402 3.4509 11.8209 4.77676 11.8197C9.26435 11.8197 11.7184 8.10212 11.7184 4.87804C11.7184 4.77304 11.7155 4.66687 11.7108 4.56303C12.1885 4.2178 12.6008 3.79013 12.9283 3.30012L12.9277 3.29953Z"
                                            fill="white" fill-opacity="0.7" />
                                    </svg>
                                </a></li>
                            <li class="icon-social"><a href=""><svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6.99984 12.8332C3.77809 12.8332 1.1665 10.2216 1.1665 6.99984C1.1665 3.77809 3.77809 1.1665 6.99984 1.1665C10.2216 1.1665 12.8332 3.77809 12.8332 6.99984C12.8332 10.2216 10.2216 12.8332 6.99984 12.8332ZM5.18567 7.68234L5.19325 7.67825L5.70075 9.35242C5.76609 9.53384 5.85592 9.5665 5.965 9.55134C6.07467 9.53675 6.13242 9.47784 6.20417 9.409L6.89717 8.73934L8.38467 9.84067C8.6565 9.99059 8.85192 9.913 8.91959 9.58867L9.88617 5.02584C9.99292 4.60117 9.80625 4.43084 9.47667 4.56617L3.79909 6.7595C3.41175 6.91467 3.41409 7.13167 3.72909 7.22792L5.18567 7.68292V7.68234Z"
                                            fill="white" fill-opacity="0.7" />
                                    </svg>
                                </a></li>
                            <li class="icon-social"><a href=""><svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6.99984 1.1665C8.58475 1.1665 8.7825 1.17234 9.40434 1.2015C10.0256 1.23067 10.4485 1.32809 10.8207 1.47275C11.2057 1.62092 11.53 1.82159 11.8543 2.14534C12.151 2.43694 12.3805 2.78968 12.5269 3.179C12.671 3.55059 12.769 3.97409 12.7982 4.59534C12.8256 5.21717 12.8332 5.41492 12.8332 6.99984C12.8332 8.58475 12.8273 8.7825 12.7982 9.40434C12.769 10.0256 12.671 10.4485 12.5269 10.8207C12.3809 11.2102 12.1513 11.563 11.8543 11.8543C11.5626 12.1509 11.2099 12.3804 10.8207 12.5269C10.4491 12.671 10.0256 12.769 9.40434 12.7982C8.7825 12.8256 8.58475 12.8332 6.99984 12.8332C5.41492 12.8332 5.21717 12.8273 4.59534 12.7982C3.97409 12.769 3.55117 12.671 3.179 12.5269C2.78953 12.3808 2.43673 12.1512 2.14534 11.8543C1.84866 11.5628 1.61913 11.21 1.47275 10.8207C1.32809 10.4491 1.23067 10.0256 1.2015 9.40434C1.17409 8.7825 1.1665 8.58475 1.1665 6.99984C1.1665 5.41492 1.17234 5.21717 1.2015 4.59534C1.23067 3.9735 1.32809 3.55117 1.47275 3.179C1.61873 2.78944 1.84831 2.43661 2.14534 2.14534C2.43681 1.84856 2.78959 1.61901 3.179 1.47275C3.55117 1.32809 3.9735 1.23067 4.59534 1.2015C5.21717 1.17409 5.41492 1.1665 6.99984 1.1665ZM6.99984 4.08317C6.22629 4.08317 5.48442 4.39046 4.93744 4.93744C4.39046 5.48442 4.08317 6.22629 4.08317 6.99984C4.08317 7.77339 4.39046 8.51525 4.93744 9.06223C5.48442 9.60921 6.22629 9.9165 6.99984 9.9165C7.77339 9.9165 8.51525 9.60921 9.06223 9.06223C9.60921 8.51525 9.9165 7.77339 9.9165 6.99984C9.9165 6.22629 9.60921 5.48442 9.06223 4.93744C8.51525 4.39046 7.77339 4.08317 6.99984 4.08317ZM10.7915 3.93734C10.7915 3.74395 10.7147 3.55848 10.5779 3.42174C10.4412 3.28499 10.2557 3.20817 10.0623 3.20817C9.86895 3.20817 9.68348 3.28499 9.54674 3.42174C9.40999 3.55848 9.33317 3.74395 9.33317 3.93734C9.33317 4.13072 9.40999 4.31619 9.54674 4.45294C9.68348 4.58968 9.86895 4.6665 10.0623 4.6665C10.2557 4.6665 10.4412 4.58968 10.5779 4.45294C10.7147 4.31619 10.7915 4.13072 10.7915 3.93734ZM6.99984 5.24984C7.46397 5.24984 7.90909 5.43421 8.23727 5.7624C8.56546 6.09059 8.74984 6.53571 8.74984 6.99984C8.74984 7.46397 8.56546 7.90909 8.23727 8.23727C7.90909 8.56546 7.46397 8.74984 6.99984 8.74984C6.53571 8.74984 6.09059 8.56546 5.7624 8.23727C5.43421 7.90909 5.24984 7.46397 5.24984 6.99984C5.24984 6.53571 5.43421 6.09059 5.7624 5.7624C6.09059 5.43421 6.53571 5.24984 6.99984 5.24984Z"
                                            fill="white" fill-opacity="0.7" />
                                    </svg>
                                </a></li>
                            <li class="icon-social"><a href=""><svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.9845 12.25V8.1865H10.3454L10.549 6.60683H8.9845V5.59883C8.9845 5.1415 9.11167 4.82942 9.76733 4.82942H10.6038V3.41658C10.1989 3.37362 9.79189 3.35278 9.38467 3.35417C8.17892 3.35417 7.3535 4.09033 7.3535 5.4425V6.60683H5.98967V8.1865H7.3535V12.25H2.33333C2.17862 12.25 2.03025 12.1885 1.92085 12.0791C1.81146 11.9697 1.75 11.8214 1.75 11.6667V2.33333C1.75 2.17862 1.81146 2.03025 1.92085 1.92085C2.03025 1.81146 2.17862 1.75 2.33333 1.75H11.6667C11.8214 1.75 11.9697 1.81146 12.0791 1.92085C12.1885 2.03025 12.25 2.17862 12.25 2.33333V11.6667C12.25 11.8214 12.1885 11.9697 12.0791 12.0791C11.9697 12.1885 11.8214 12.25 11.6667 12.25H8.9845Z"
                                            fill="white" fill-opacity="0.7" />
                                    </svg>
                                </a></li>
    
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <div class="text-left">
                            <button class="btn btn-doc-onli">
                                <img src="{{asset('/')}}/frontendtheme/images/green-dot.png" class="mr-3" alt=""> 1423 Doctor online
                            </button>
                        </div>
                    </div>
                    <div class="col-sm-3 text-right">
                        <p class="copyright">© 2022 Medical Directory</p>
                    </div>
                </div>
            </div>
    
        </footer>
    @stack('scripts')
    </body>
    
    </html>
