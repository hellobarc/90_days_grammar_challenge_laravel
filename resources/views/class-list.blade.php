@extends('layouts.app')
  
@section('content')
<!-- class List -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1 class="text-center font-size-h1  text-danger fw-bolder mt-2 mb-3">Class List</h1>
            </div>
        </div>
        <div class="row mb-5">
            @foreach ($data as $rows)
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                    <iframe class="previous_images" src="{{$rows->embed_link}}" frameborder="0"></iframe>
                    <p class="p-fontSize mt-2"><span class="fw-bolder">Class {{$rows->class_number}}:</span> {{$rows->title}}</p>
                </div>
            @endforeach
        </div>        
    </div>
</section>
<!-- Take online Course -->
<section class="my-5" style="position: relative;">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                <h1 class="heading_color py-5 text-center fw-bolder font-size-h1">Take Online Course</h1>
                <div class="row">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <img class="img-width" src="{{asset('images/take_online_course.webp')}}" alt="">
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="take-online-class-middle-alignment">
                            <p class="fs-3 fw-bold">1 Month IELTS Advanced Course</p>
                            <p class="p-fontSize">
                                Master all 4 modules, score high, unlock your future! Achieve your desired score. Starts from 4,990 taka. Enroll now & conquer the IELTS!
                            </p>
                            <a href="#" class="bt-custom float-start">Start Now</a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- 3 month ielts course -->
<section class="my-5" style="position: relative;">
    <div class="container">
        <div class="row wining-grand-price">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="take-online-class-middle-alignment-2">
                    <p class="fs-3 fw-bold">3 Month IELTS Course</p>
                    <p class="p-fontSize">
                        Unlock your full potential with our intensive 3-month IELTS Course! Join us to master essential skills, boost your confidence, and ace the IELTS exam. Course starts from 9,990 taka.
                    </p>
                    <a href="" class="bt-custom float-start">Start Now</a>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <img class="img-width" src="{{asset('images/take_online_course.webp')}}" alt="">
            </div>
        </div>
    </div>
</section>
@endsection