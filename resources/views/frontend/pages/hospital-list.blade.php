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
</style>
@endpush
@section('contents')
<div class="container mt-100">
    <div class="row">
        <div class="col-sm-6 pl-0">
            <div class="baner-left-side-1">
                <h1>
                    Hospitals
                </h1>
            </div>
        </div>
        <div class="col-sm-6 ">
            <nav aria-label="breadcrumb  " class="breadcrumb-main">
                <ol class="breadcrumb justify-content-end ">

                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item active " aria-current="page">Doctor Directory</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
</section>
<section class="mt-70 ">
<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="option-card">
                <h4>Refine Search</h4>
                <div class="mb-3">
                    <div class="icon-select">
                        <svg width="18" height="19" viewBox="0 0 18 19" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M15 17H3C2.80109 17 2.61032 16.921 2.46967 16.7803C2.32902 16.6397 2.25 16.4489 2.25 16.25V2.75C2.25 2.55109 2.32902 2.36032 2.46967 2.21967C2.61032 2.07902 2.80109 2 3 2H15C15.1989 2 15.3897 2.07902 15.5303 2.21967C15.671 2.36032 15.75 2.55109 15.75 2.75V16.25C15.75 16.4489 15.671 16.6397 15.5303 16.7803C15.3897 16.921 15.1989 17 15 17ZM6 5.75V7.25H12V5.75H6ZM6 8.75V10.25H12V8.75H6ZM6 11.75V13.25H9.75V11.75H6Z"
                                fill="#B5C1D7" />
                        </svg>
                        <input class="form-control input-lg custom-filed" type="text"
                            placeholder="Type Keyword" />
                    </div>
                </div>
                <div class="mb-3">
                    <div class="icon-select">
                        <svg width="18" height="19" viewBox="0 0 18 19" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9 9.5C9.825 9.5 10.5 8.825 10.5 8C10.5 7.175 9.825 6.5 9 6.5C8.175 6.5 7.5 7.175 7.5 8C7.5 8.825 8.175 9.5 9 9.5ZM9 2C12.15 2 15 4.415 15 8.15C15 10.535 13.1625 13.34 9.495 16.5725C9.21 16.82 8.7825 16.82 8.4975 16.5725C4.8375 13.34 3 10.535 3 8.15C3 4.415 5.85 2 9 2Z"
                                fill="#B5C1D7" />
                        </svg>
                        <select class="form-control input-lg">
                            <option value="option-1">Geo Location</option>
                            <option value="option-2">Option 2</option>
                            <option value="option-3">Option 3</option>
                        </select>
                        <i class="fa fa-chevron-down"></i>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="icon-select">
                        <svg width="18" height="19" viewBox="0 0 18 19" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.25 11.0465V15.5H9.75V11.0465C12.7095 11.4155 15 13.94 15 17H3C3.00002 15.5385 3.53339 14.1273 4.5 13.0312C5.46661 11.9351 6.80002 11.2293 8.25 11.0465V11.0465ZM9 10.25C6.51375 10.25 4.5 8.23625 4.5 5.75C4.5 3.26375 6.51375 1.25 9 1.25C11.4863 1.25 13.5 3.26375 13.5 5.75C13.5 8.23625 11.4863 10.25 9 10.25Z"
                                fill="#B5C1D7" />
                        </svg>

                        <select class="form-control input-lg">

                            <option value="option-1">Search user</option>
                            <option value="option-2">Option 2</option>
                            <option value="option-3">Option 3</option>
                        </select>
                        <i class="fa fa-chevron-down"></i>
                    </div>

                </div>
                <div class="mb-3">


                    <div class="icon-select">
                        <svg width="18" height="19" viewBox="0 0 18 19" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.25 8.75V4.25L9 2L6.75 4.25V5.75H2.25V16.25H15.75V8.75H11.25ZM5.25 14.75H3.75V13.25H5.25V14.75ZM5.25 11.75H3.75V10.25H5.25V11.75ZM5.25 8.75H3.75V7.25H5.25V8.75ZM9.75 14.75H8.25V13.25H9.75V14.75ZM9.75 11.75H8.25V10.25H9.75V11.75ZM9.75 8.75H8.25V7.25H9.75V8.75ZM9.75 5.75H8.25V4.25H9.75V5.75ZM14.25 14.75H12.75V13.25H14.25V14.75ZM14.25 11.75H12.75V10.25H14.25V11.75Z"
                                fill="#B5C1D7" />
                        </svg>
                        <select class="form-control input-lg">
                            <option value="option-1">Select city</option>
                            <option value="option-2">Option 2</option>
                            <option value="option-3">Option 3</option>
                        </select>
                        <i class="fa fa-chevron-down"></i>
                    </div>
                </div>
                <div class=" mb-3">
                    <div class="icon-select">
                        <svg width="18" height="19" viewBox="0 0 18 19" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.2169 12.173C13.2111 12.9665 14.6789 14.798 14.9534 17H3.04639C3.32089 14.798 4.78864 12.9665 6.78289 12.173L8.99989 15.5L11.2169 12.173ZM13.4999 2V6.5C13.4999 8.9855 11.4854 11 8.99989 11C6.51439 11 4.49989 8.9855 4.49989 6.5V2H13.4999ZM11.9999 6.5H5.99989C5.99989 8.1575 7.34239 9.5 8.99989 9.5C10.6574 9.5 11.9999 8.1575 11.9999 6.5Z"
                                fill="#B5C1D7" />
                        </svg>
                        <select class="form-control input-lg">
                            <option value="option-1">Doctor</option>
                            <option value="option-2">Option 2</option>
                            <option value="option-3">Option 3</option>
                        </select>
                        <i class="fa fa-chevron-down"></i>
                    </div>

                </div>
                <div >
                    <button class="btn btn-dignis-0">
                        Search
                        <div class="icon-class">
                            <i class="fas fa-search ml-2"></i>
                        </div>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-sm-9">
            <div class="col-sm-12 p-0">
                <div class="option-card mb-3">
                    <div class="row justify-content-between">
                        <div class="col-sm-3">
                            <p class="sorting">
                                Popular first
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9 3L5 6.99H8V14H10V6.99H13L9 3ZM16 17.01V10H14V17.01H11L15 21L19 17.01H16Z"
                                        fill="#77889A" />
                                </svg>
                            </p>
                        </div>
                        <div class="col-sm-3 text-right">
                            <ul class="nav nav-tabs border-0 justify-content-end" id="myTab" role="tablist">
                                <li class="nav-item ">
                                    <a class="nav-link active sub-items" id="home-tab" data-toggle="tab"
                                        href="#home" role="tab" aria-controls="home" aria-selected="true"> <svg
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M4 14H6C6.55 14 7 13.55 7 13V11C7 10.45 6.55 10 6 10H4C3.45 10 3 10.45 3 11V13C3 13.55 3.45 14 4 14ZM4 19H6C6.55 19 7 18.55 7 18V16C7 15.45 6.55 15 6 15H4C3.45 15 3 15.45 3 16V18C3 18.55 3.45 19 4 19ZM4 9H6C6.55 9 7 8.55 7 8V6C7 5.45 6.55 5 6 5H4C3.45 5 3 5.45 3 6V8C3 8.55 3.45 9 4 9ZM9 14H19C19.55 14 20 13.55 20 13V11C20 10.45 19.55 10 19 10H9C8.45 10 8 10.45 8 11V13C8 13.55 8.45 14 9 14ZM9 19H19C19.55 19 20 18.55 20 18V16C20 15.45 19.55 15 19 15H9C8.45 15 8 15.45 8 16V18C8 18.55 8.45 19 9 19ZM8 6V8C8 8.55 8.45 9 9 9H19C19.55 9 20 8.55 20 8V6C20 5.45 19.55 5 19 5H9C8.45 5 8 5.45 8 6Z"
                                                fill="#B5C1D7" />
                                        </svg></a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link sub-items" id="profile-tab" data-toggle="tab"
                                        href="#profile" role="tab" aria-controls="profile"
                                        aria-selected="false"> <svg width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5 11H8C8.55 11 9 10.55 9 10V6C9 5.45 8.55 5 8 5H5C4.45 5 4 5.45 4 6V10C4 10.55 4.45 11 5 11ZM5 18H8C8.55 18 9 17.55 9 17V13C9 12.45 8.55 12 8 12H5C4.45 12 4 12.45 4 13V17C4 17.55 4.45 18 5 18ZM11 18H14C14.55 18 15 17.55 15 17V13C15 12.45 14.55 12 14 12H11C10.45 12 10 12.45 10 13V17C10 17.55 10.45 18 11 18ZM17 18H20C20.55 18 21 17.55 21 17V13C21 12.45 20.55 12 20 12H17C16.45 12 16 12.45 16 13V17C16 17.55 16.45 18 17 18ZM11 11H14C14.55 11 15 10.55 15 10V6C15 5.45 14.55 5 14 5H11C10.45 5 10 5.45 10 6V10C10 10.55 10.45 11 11 11ZM16 6V10C16 10.55 16.45 11 17 11H20C20.55 11 21 10.55 21 10V6C21 5.45 20.55 5 20 5H17C16.45 5 16 5.45 16 6Z"
                                                fill="#77889A" />
                                        </svg></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="talent_content">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="fint-talentmain">
                            <div>
                                <div class="row">
                                    @foreach($hospitals as $row)
                                    <div class="col-sm-12 mb-4 p-0">
                                        <div>
                                            <div class="bg-white doctor-dir">
                                                <div class="row">
                                                    <div class="col-sm-8">
                                                        <div>
                                                            <p class="head-para mt-2">{{$row->name}}</p>
                                                            <p class="sub-para mt-2">Hospital</p>
                                                        </div>
                                                        <div
                                                            class="d-flex justify-content-between align-items-center my-3">
                                                            <div class="d-flex align-items-center my-2">
                                                                <p class="sub-para"> <i
                                                                        class="fas fa-phone-alt"></i>
                                                                <h6 class="address-num ml-2 mb-0">
                                                                    {{$row->phone}}
                                                                </h6>
                                                                </p>
                                                            </div>
                                                            <div class="d-flex align-items-center my-2">
                                                                <p class="sub-para"> <i
                                                                        class="fas fa-map-marker-alt"></i>
                                                                <h6 class="address-num m-0 ml-2 mb-0">
                                                                    {{$row->address}}
                                                                </h6>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="mt-3">
                                                            <p class="sub-para"> {{$row->description}}</p>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 p-0">
                                                        <div>
                                                            <div>
                                                                <img class="img-review"
                                                                    src="{{ asset('/') }}uploads/hospital/{{$row->image}}" alt="">
                                                            </div>
                                                            <div>
                                                                <h6 class="star-review-1"><span
                                                                        class="fas fa-star checked"></span>
                                                                        {{$row->avg_rating}}</h6>
                                                            </div>
                                                            <div>
                                                                <a href="tel:{{$row->phone}}" class="phone-icon">
                                                                    <svg width="40" height="40"
                                                                        viewBox="0 0 40 40" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <rect width="40" height="40" rx="10"
                                                                            fill="#2BC26B" />
                                                                        <rect x="8" y="8" width="24" height="24"
                                                                            rx="5" fill="#27AE60" />
                                                                        <path
                                                                            d="M24.8242 22.1832L23.1275 21.9895C22.72 21.9427 22.3192 22.083 22.0319 22.3702L20.8028 23.5994C18.9123 22.6374 17.3626 21.0943 16.4006 19.1972L17.6364 17.9613C17.9237 17.6741 18.064 17.2733 18.0172 16.8658L17.8235 15.1824C17.7433 14.5077 17.1755 14 16.4941 14H15.3385C14.5836 14 13.9557 14.6279 14.0025 15.3828C14.3565 21.0876 18.919 25.6435 24.6172 25.9975C25.372 26.0443 25.9999 25.4164 25.9999 24.6615V23.5059C26.0066 22.8312 25.4989 22.2633 24.8242 22.1832Z"
                                                                            fill="white" />
                                                                    </svg>

                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>                               
                                <div class="">
                                    <nav aria-label="Page navigation example">
                                        @include('frontend.layouts.pagination',['paginator' => $hospitals])
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="fint-talentmain">
                            <div>
                                <div class="row">
                                    @foreach($hospitals as $row)
                                    <div class="col-sm-4 mb-4">
                                        <div>
                                            <div class="bg-white doctor-dir">
                                                <div>
                                                    <div>
                                                        <img src="{{asset('/')}}uploads/hospital/{{$row->image}}" alt="">
                                                    </div>
                                                    <div>
                                                        <h6 class="star-review"><span
                                                                class="fas fa-star checked"></span>
                                                            {{$row->avg_rating}}</h6>
                                                    </div>
                                                </div>
                                                <div>
                                                    <p class="head-para mt-2">{{$row->name}}</p>
                                                    <p class="sub-para mt-2">Hospital</p>
                                                </div>
                                                <div class="d-flex align-items-center my-2">
                                                    <p class="sub-para"> <i class="fas fa-phone-alt"></i>
                                                    <h6 class="address-num ml-3">
                                                        {{$row->phone}}
                                                    </h6>
                                                    </p>
                                                </div>
                                                <div class="d-flex align-items-center my-2">
                                                    <p class="sub-para"> <i class="fas fa-map-marker-alt"></i>
                                                    <h6 class="address-num m-0 ml-3">
                                                        {{$row->address}}
                                                    </h6>
                                                    </p>

                                                </div>

                                                <div class="mt-3">
                                                    <p class="sub-para"> {{$row->description}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="">
                                    <nav aria-label="Page navigation example">
                                        @include('frontend.layouts.pagination',['paginator' => $hospitals])
                                    </nav>
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
@endsection