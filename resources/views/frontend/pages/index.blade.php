@extends('frontend.layouts.frontendlayout')
@section('contents')
<script>
    var map;
    function myMap(lat,lng,mapId) {
        var mapOptions = {
            center: new google.maps.LatLng(parseFloat(lat),parseFloat(lng)),
            zoom: 10,
            mapTypeId: google.maps.MapTypeId.HYBRID
        }
        map = new google.maps.Map(document.getElementById(mapId), mapOptions);
        addMarker(mapOptions.center);
    }  
    // Function for adding a marker to the page.
    function addMarker(location) {
        marker = new google.maps.Marker({
            position: location,
            map: map
        });
    }
</script>
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDkMEqoEE1brT48lNfuQpxGqVQ5jj6F6sU"></script>
<div class="container mt-100">
    <div class="row">
        <div class="col-sm-6 pl-0">
            <div class="baner-left-side">
                <h1>
                    {{$top_text->title}}
                </h1>
                <p class="pt-3"> {{$top_text->description}}</p>

                <div>
                    <form action="{{route('doctors')}}" method="get" id="header-search-people" class="form-area" novalidate="novalidate"
                        autocomplete="off">
                        <div class="row">
                            <div class="col-md-12 p-0">
                                <div class="styled-input wide multi">
                                    <div class="first-name" id="input-first-name">
                                        <input type="text" placeholder="Search doctors" name="keyword" id="fn"
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
                                        <input type="text" placeholder="Select a location" name="location" id="ln"
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
                    <img src="{{ asset('/') }}frontendtheme/images/green-dot.png" class="mr-3" alt="">
                    {{App\DoctorsModel::where('status','Active')->count()}} Doctors online
                </button>
            </div>
            <div>
                <div class="class-absolute">
                    <img src="{{ asset('/') }}uploads/content/{{$banner_image}}" alt="">
                </div>
            </div>
        </div>
    </div>

    <div>

        <div class="col-sm-8">
            <div class="d-flex" id="abolute">
                <h6 class="book-appoinment">Book Free Appointments</h6>
                @foreach($book_free as $row)
                <div class="d-flex align-items-center mr-3">
                    <p class="book-appointment">
                        <img src="{{ asset('/') }}uploads/content/{{$row->image}}" alt="">
                    <div class="text-white ml-4">
                        {{$row->description}}
                    </div>
                    </p>
                </div>
                @endforeach
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
            {{-- <div class="col-sm-7">
                <div class="img-media">
                    <img src="{{ asset('/') }}uploads/content/{{$get_in_touch_image}}" alt="">
                    <button class="btn btn-dignis">
                        Get in Touch
                        <div class="icon-class">
                            <i class="fas fa-chevron-right ml-2"></i>
                        </div>
                    </button>
                </div>
            </div> --}}
            <div class="col-sm-12">
                <div class="text-left">
                    <h1 class="head-main-3">Diagnostic <br>
                        Centers</h1>
                </div>
                <div class="row ">
                    @foreach($digoCat as $row)
                    <div class="col-sm-3">
                        <div class="cards">
                            <div>
                                <img src="{{ asset('/') }}/uploads/category/{{$row->image}}" alt="">
                                <div class="row">
                                    <div class="col-9 p-0">
                                        <p class="text-white digoniis-para">{{$row->name}}</p>
                                    </div>
                                    <div class="col-2 text-right p-0">
                                        <a href="{{url('diagnostics')}}?category={{$row->slug}}">
                                            <div class="icon-class">
                                                <i class="fas fa-chevron-right"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</section>

<section class="mt-100">
    <div class="container">

        <div class="row align-items-end">
            <div class="col-sm-12">
                <div class="">
                    <h1 class="head-main-3">Doctors</h1>
                </div>
                <div class="row ">
                    @foreach($doctorCat as $row)
                        <div class="col-sm-3">
                            <div class="cards-1">
                                <div>
                                    <img src="{{ asset('/') }}/uploads/category/{{$row->image}}" alt="">
                                    <div class="row">
                                        <div class="col-9 p-0">
                                            <p class="doctos-p">{{$row->name}}</p>
                                        </div>
                                        <div class="col-2 text-right p-0">
                                        <a href="{{url('doctors')}}?category={{$row->slug}}">
                                            <div class="icon-class">
                                                <i class="fas fa-chevron-right"></i>
                                            </div>
                                         </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            {{-- <div class="col-sm-7">
                <div class="img-media">
                    <img src="{{ asset('/') }}uploads/content/{{$doctor_image}}" alt="">
                    <button class="btn btn-dignis-1">
                        Get in Touch
                        <div class="icon-class">
                            <i class="fas fa-chevron-right ml-2"></i>
                        </div>
                    </button>
                </div>
            </div> --}}

        </div>

    </div>
</section>

<section class="mt-100">
    <div class="container">
        <h1 class="head-main-3 text-center mb-5">Hospitals Directory</h1>
        <div id="demo" class="carousel slide silder-1" data-ride="false">
            <div class="carousel-inner">
                @foreach($medicals->chunk(6) as $medical)
                <div class="carousel-item @if($loop->index==0) active @endif">
                    <div class="row">
                        @foreach($medical as $row)
                        <div class="col-sm-6 mt-3">
                            <div class="">
                                <div class="border  rounded-lg p-2">
                                    <div class="row">
                                        <div class="col-8 p-0 pl-3 pt-3">
                                            <a href="{{route('hospitalDetails',$row->slug)}}">
                                            <div class="row mb-2">
                                                <div class="col-2 p-0">
                                                    <img src="{{ asset('/') }}frontendtheme/images/logo company.png"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <h5 class="doctor-name">{{$row->name}}</h5>
                                                    <p class="sub-para">Medical Centers</p>
                                                </div>
                                            </div>
                                             </a>

                                            <div class="row mb-2">
                                                <div class="col-sm-6 p-0">
                                                    <p class="sub-para">Phone</p>
                                                    <h6 class="address-num">
                                                        {{$row->phone}}
                                                    </h6>
                                                </div>
                                                <div class="col-sm-6 p-0">
                                                    <p class="sub-para">Adress</p>
                                                    <h6 class="address-num">
                                                        {{$row->address}}
                                                    </h6>
                                                </div>
                                            </div>
                                            <div>
                                                <p class="sub-para">{{$row->description}}</p>
                                            </div>
                                        </div>
                                        <div class="col-4 p-0">
                                            <div id="map_{{$row->id}}" style="width:100%;height:260px;background:grey" class="my-3"></div>
                                        </div>
                                        <script>
                                            var lat = "{{$row->latitude}}";
                                            var lng = "{{$row->longitude}}";
                                            lat = (lat)?lat:'13.0827';
                                            lng = (lng)?lng:'80.2707';
                                            var id = 'map_'+"{{$row->id}}";
                                            myMap(lat,lng,id);
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
            <!-- Indicators -->
            <ul class="carousel-indicators mt-4 ">
                @foreach($medicals->chunk(6) as $medical)
                   <li data-target="#demo" data-slide-to="{{$loop->index}}" class="@if($loop->index==0) active @endif"></li>
                @endforeach
            </ul>
            <a href="{{route('hospitals')}}">
            <button class="btn btn-dignis-2">
                View All
                <div class="icon-class">
                    <i class="fas fa-chevron-right ml-2"></i>
                </div>
            </button>
        </a>
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
                    <img src="{{ asset('/') }}uploads/content/{{$trust_us['image']}}" alt="">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="text-right">
                    <h1 class="head-main-3">{{$trust_us['title']}}
                    </h1>
                </div>
                <div class="row ">
                    @foreach ($trust_us_list as $row)
                    <div class="col-sm-6">
                        <div class="cards-2">
                            <div>
                                <img src="{{ asset('/') }}uploads/content/{{$row->image}}" alt="">
                                <div class="row">
                                    <div class="col-12 p-0">
                                        <p class="head-para">{{$row->title}}</p>
                                        <p class="sub-para">{{$row->description}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
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
                @foreach($doctors->chunk(8) as $doctor)
                <div class="carousel-item @if($loop->index==0) active @endif">
                    <div>
                        <div class="row">
                            @foreach($doctor as $doc)
                                <div class="col-sm-3 mb-4">
                                    <div>
                                        <div class="bg-white p-3 doctor-dir">
                                            <div>
                                                <a href="{{route('doctorDetails',$doc->slug)}}">
                                                <div>
                                                    <img src="{{ asset('/') }}uploads/doctor/{{empty($doc->profile_image)? 'no-image.png' : $doc->profile_image}}"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <h6 class="star-review"><span class="fas fa-star checked"></span>
                                                        {{$doc->avg_rating}}</h6>
                                                </div>
                                                </a>
                                            </div>

                                            <div>
                                                <p class="head-para mt-2">{{$doc->name}}</p>
                                                <p class="sub-para mt-2">{{$doc->category->name}}</p>

                                            </div>

                                            <div class="d-flex align-items-center my-2">
                                                <p class="sub-para"> <i class="fas fa-phone-alt"></i>
                                                <h6 class="address-num ml-3">
                                                    {{$doc->phone}}
                                                </h6>
                                                </p>

                                            </div>

                                            <div class="d-flex align-items-center my-2">
                                                <p class="sub-para"> <i class="fas fa-map-marker-alt"></i>
                                                <h6 class="address-num m-0 ml-3">
                                                    {{$doc->address}}
                                                </h6>
                                                </p>

                                            </div>

                                            <div class="mt-3">
                                                <p class="sub-para">{{$doc->description}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Indicators -->
            <ul class="carousel-indicators">
                @foreach($doctors->chunk(8) as $doctor)
                 <li data-target="#demo1" data-slide-to="{{$loop->index}}" class="@if($loop->index==0) active @endif"></li>
                @endforeach
            </ul>
            <a href="{{route('doctors')}}">
            <button class="btn btn-dignis-3">
                View All Doctors
                <div class="icon-class">
                    <i class="fas fa-chevron-right ml-2"></i>
                </div>
            </button>
        </a>
        </div>

    </div>
</section>
@push('scripts')
@endpush
@endsection
