@extends('layouts.app')
  
@section('content')
<!-- 90 days grammer challenge -->
<section class="">
    <div class="container">
        <div class="row">
            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12 mx-auto">
                <iframe class="video_size_class" src="{{$findData->embed_link}}" frameborder="0"></iframe>
                <div>
                    <p class=" mb-1 mt-1 p-fontSize"><span class="fw-bolder">Class {{$findData->class_number}}:</span> Tense For IELTS</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                </div>
                <div class="d-flex justify-content-start">
                        <img src="{{asset('images/boss.png')}}" alt="" class="sir-profile-img">
                    <div class="mx-3">
                        <h5 class="fw-bold mt-3">Mohammad Maruf Firoz</h5>
                        <p>Founder & CEO, British American Resource Center</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12 mx-auto">
                <h3 class="fw-bold">Download Materials</h3>
                @if(auth()->user())
                    <a href="{{$findData->ebook_link}}" class="text-decoration-none p-fontSize">Free eBook</a><br>
                @else
                    <a href="{{route('login')}}" class="text-decoration-none p-fontSize">Free eBook</a><br>
                @endif
                
                <a href="{{$findData->test_link}}" target="_blank" class="text-decoration-none p-fontSize">Extra Tests</a>
            </div>
        </div>
    </div>
</section>
 <!-- previous classes -->
 <section class="my-3 previous">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                <h1 class="heading_color my-5  text-center fw-bolder font-size-h1">Previous Classes</h1>
                
                <div class="row">
                    @foreach ($previousClass as $rows)
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                        <iframe class="previous_images" src="{{$rows->embed_link}}" frameborder="0"></iframe>
                        <a href="{{route('student.class', $rows->id)}}" class="p-fontSize mt-2 text-decoration-none text-dark"><span class="fw-bolder">Class {{$rows->class_number}}:</span> {{$rows->title}}</a>
                    </div>
                    @endforeach
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                        <div class="see-all-fullBox">
                            <a class="see-all-div text-decoration-none" href="{{route('student.class.list')}}">
                                <p class="text-danger mb-0 fs-5">See All</p>
                                <img src="images/icons/right-arrow.png" class="see-all-arrow" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Take online Course -->
<section class="my-5" style="position: relative;">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                <h1 class="heading_color my-5 text-center fw-bolder font-size-h1">Take Online Course</h1>
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
                            <a href="" class="bt-custom float-start">Start Now</a> 
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
                    <a href="#" class="bt-custom float-start">Start Now</a>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <img class="img-width" src="{{asset('images/take_online_course.webp')}}" alt="">
            </div>
        </div>
    </div>
</section>
@endsection