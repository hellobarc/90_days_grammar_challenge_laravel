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
        <div class="row">
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <img class="previous_images" src="{{asset('images/t.jpg')}}" alt="">
                <p class=" p-fontSize"><b>Class 7:</b> Tense For IELTS</p>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <img class="previous_images" src="{{asset('images/t1.jpg')}}" alt="">
                <p class=" p-fontSize"><b>Class 7:</b> Tense For IELTS</p>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <img class="previous_images" src="{{asset('images/thumbnail.webp')}}" alt="">
                <p class=" p-fontSize"><b>Class 7:</b> Tense For IELTS</p>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <img class="previous_images" src="{{asset('images/t.jpg')}}" alt="">
                <p class=" p-fontSize"><b>Class 7:</b> Tense For IELTS</p>
            </div>
        </div>
        <div class="mt-5">
            <div class="row">
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <img class="previous_images" src="{{asset('images/t.jpg')}}" alt="">
                    <p class=" p-fontSize"><b>Class 7:</b> Tense For IELTS</p>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <img class="previous_images" src="{{asset('images/t1.jpg')}}" alt="">
                    <p class=" p-fontSize"><b>Class 7:</b> Tense For IELTS</p>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <img class="previous_images" src="{{asset('images/thumbnail.webp')}}" alt="">
                    <p class=" p-fontSize"><b>Class 7:</b> Tense For IELTS</p>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <img class="previous_images" src="{{asset('images/t.jpg')}}" alt="">
                    <p class=" p-fontSize"><b>Class 7:</b> Tense For IELTS</p>
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
                            <p class="p-fontSize">Start From February 15. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
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
        <div class="row">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                <div class="row">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="take-online-class-middle-alignment-2">
                            <p class="fs-3 fw-bold">3 Month IELTS Course</p>
                            <p class="p-fontSize">Start From February 15. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <a href="" class="bt-custom float-start">Start Now</a>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <img class="img-width" src="{{asset('images/take_online_course.webp')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection