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
                            Hospital
                        </h1>
                    </div>
                </div>
                <div class="col-sm-6 ">
                    <nav aria-label="breadcrumb  " class="breadcrumb-main">
                        <ol class="breadcrumb justify-content-end ">

                            <li class="breadcrumb-item "><a href="{{url('/')}}">Home</a></li>
                            <li class="breadcrumb-item active " aria-current="page">{{$info->name}}</li>
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
                    <img class="img-width" src="{{ asset('/') }}uploads/hospital/{{empty($info->image)? 'no-image.png' : $info->image}}" alt="">
                </div>
                <div class="col-sm-6 p-0">
                    <div id="demo1" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                            @foreach($info->galleryTop as $row)
                               <li data-target="#demo{{$loop->iteration}}" data-slide-to="{{$loop->index}}" class="@if($loop->index==0) active @endif"></li>
                            @endforeach
                        </ul>
                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            @foreach($info->galleryTop as $row)
                                <div class="carousel-item @if($loop->index==0) active @endif">
                                    <img class="img-width" src="{{ asset('/') }}uploads/hospital/{{$row->image}}" alt="Los Angeles">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="row   p-4">
                <div class="col-sm-6 pl-0">
                    <p class="full-cnter-page-span">Description</p>
                    <h1 class="full-cnter-page-head my-3">
                        {{$info->name}}
                    </h1>
                    {!! $info->contents!!}
                    <div class="mb-3">
                        <p class="full-cnter-page-span">Speciality</p>
                        <p class="full-cnter-page-span-1">{{$info->category->name}}</p>

                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="d-flex align-items-center">
                        <span class="star-review-2 mr-4"><span class="fas fa-star checked"></span>
                        {{$info->avg_rating}}</span>
                        <p class="full-cnter-page-span mr-4">{{$info->reviews->count()}} reviews</p>
                    </div>

                    <div id="map" style="width:100%;height:260px;background:grey" class="my-3"></div>


                    <div class="mb-3">
                        <p class="full-cnter-page-span">Phone number</p>
                        <p class="full-cnter-page-span-1">{{$info->phone}}</p>

                    </div>
                    <div class="mb-3">
                        <p class="full-cnter-page-span">Address </p>
                        <p class="full-cnter-page-span-1">{{$info->address}}</p>

                    </div>
                    <div class="mb-3">
                        <p class="full-cnter-page-span">Dentistry</p>
                        <p class="full-cnter-page-span-1">{{$info->working_hours}}</p>

                    </div>
                    @if(!empty($info->website))
                    <div class="mb-3">
                        <p class="full-cnter-page-span">Official website</p>
                        <a href="{{$info->website}}" target="_blank">{{$info->website}}</a>
                    </div>
                    @endif
                </div>

            </div>
            <hr>
            @if(!empty($info->galleryBottom))
            <div id="demo2" class="carousel slide p-4" data-ride="carousel">
                <!-- The slideshow -->
                <div class="carousel-inner">
                    @foreach($info->galleryBottom->skip(3)->chunk(4) as $images)
                    <div class="carousel-item @if($loop->index==0) active @endif">
                        <div class="row">
                            @foreach($images as $row)
                            <div class="col-sm-3 p-0">
                                <img src="{{ asset('/') }}frontendtheme/images/22.png" class="img-width" alt="">
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                </div>
                <br>
                <!-- Indicators -->
                <ul class="carousel-indicators">
                    @foreach($info->galleryBottom->skip('3')->chunk(4) as $images)
                     <li data-target="#demo{{$loop->index}}" data-slide-to="{{$loop->index}}" class="@if($loop->index==0) active @endif"></li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
    </section>
    <section class="mt-5">
        <div class="container bg-white hospital-dir">
            <h1 class="all-review ml-4 my-3">All reviews {{$info->reviews->count()}} <span class="star-review-2"><span
                        class="fas fa-star checked"></span>
                        {{$info->avg_rating}}</span></h1>
            <div class="row">
                <div class="col-sm-3">
                    <div class="section-tab">
                        <h2 class="sort-text">Sort</h2>
                        <ul class="nav nav-tabs" id="myTab1" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link @if(Request::get('sortBy')=="new") active @endif" href="?sortBy=new">
                                    <i class="fas fa-calendar-alt"></i> By Newer</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if(Request::get('sortBy')=="old") active @endif" href="?sortBy=old">
                                    <i class="fas fa-calendar-alt"></i> By Older</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if(Request::get('sortBy')=="rating") active @endif" href="?sortBy=rating"> 
                                    <i class="fas fa-star"></i> By rating</a>
                            </li>
                        </ul>
                    </div>
                    <br>
                    <form action="{{route('hospitalReviewSubmit')}}" method="post">
                        <input type="hidden" name="hospital_id" value="{{$info->id}}">
                    @csrf
                    <div class="section-tab">
                        <h2 class="sort-text">Give Review</h2>
                        @if(Session::has('success'))
                        <div class="alert alert-success">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <strong>{{Session::get('success')}}</strong>
                        </div>
                        @endif
                        <ul class="nav nav-tabs" id="myTab1" role="tablist">
                            <li class="nav-item">
                                <input type="text" required="required" name="name" class="form-control" placeholder="Enter Name.">
                            </li>
                            <li class="nav-item">
                                <textarea name="comments" required="required" class="form-control" placeholder="Enter Comment."></textarea>
                            </li>
                            <li class="nav-item">
                                <select name="rating" class="form-control">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </li>
                        </ul>
                    </div>
                    <button type="submit" class="btn btn-dignis-11">
                        Submit Review
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
                  </form>
                </div>
                @php 
                  $reviews = App\HospitalReviewModel::where("hospital_id",$info->id);
                  if(Request::has('sortBy') && Request::get('sortBy')=="new"){
                    $reviews = $reviews->orderBy("id","desc");
                  }elseif(Request::has('sortBy') && Request::get('sortBy')=="old"){
                    $reviews = $reviews->orderBy("id");
                  }elseif(Request::has('sortBy') && Request::get('sortBy')=="rating"){
                    $reviews = $reviews->orderBy("id","desc");
                  } 
                  $reviews = $reviews->get();
                @endphp
                <div class="col-sm-9">
                    <div class="tab-content">
                        <div class="tab-pane active" id="home" role="tabpanel">
                            @foreach($reviews as $row)
                            <div class="col-sm-12 mb-4 p-0">
                                <div>
                                    <div class="border-review">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div>
                                                    <p class="head-para mt-2">{{$row->name}}</p>
                                                    <p class="sub-para mt-2">{{$row->created_at->format('Y-m-d H:i:s A')}}</p>
                                                </div>
                                                <span class="star-review-2"><span class="fas fa-star checked"></span>
                                                {{$row->rating}}</span>
                                                <div class="mt-3">
                                                    <p class="sub-para">{{$row->comments}}</p>
                                                </div>
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