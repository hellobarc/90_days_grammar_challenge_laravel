@extends('layouts.app')
  
@section('content')
    <!-- 90 days grammer challenge -->
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <h1 class="heading_color text-center fw-bolder font-size-h1">90 Days grammer challenge</h1>
                    <p class="fs-3">Add body text</p>

                    <iframe class="video_size" src="{{$currentClass->embed_link}}" frameborder="0"></iframe>

                    <div>
                        <a href="{{route('student.class', $currentClass->id)}}" class=" mb-1 mt-1 p-fontSize text-decoration-none text-dark"><span class="fw-bolder">Class {{$currentClass->class_number}}:</span> {{$currentClass->title}}</a>
                        <br>
                        <a class="text-decoration-none" href="{{route('student.class', $currentClass->id)}}">Download Materials</a>
                    </div>
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
    <!-- win Exciting Gifts -->
    <section class="my-5" style="position: relative;">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h1 class="heading_color my-5  text-center fw-bold font-size-h1">Win Exciting Gifts</h1>
                    <div class="row">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <img class="img-width" src="{{asset('images/screen.webp')}}" alt="">
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="wining-gift-middle-alignment">
                                <p class="fs-3 fw-bolder">Take a text and win exciting gifts</p>
                                <p class="p-fontSize">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                <a href="" class="bt-custom float-start">Take a test</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- win grand prize -->
    <section class="my-5" style="position: relative;">
        <div class="container">
            <div class="">
                <div class="">
                    <div class="row wining-grand-price">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                           <div class="wining-gift-middle-alignment-2">
                                <p class="fs-3 fw-bold"><b>Win grand Prize</b></p>
                                <p class="p-fontSize">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                <a href="" class="bt-custom float-start">Take a test</a>
                           </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <img class="img-width" src="{{asset('images/screen.webp')}}" alt="">
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
                                <p class="p-fontSize">Start From February 15. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                <a href="{{route('student.class', $previousClass[0]->id)}}" class="bt-custom float-start">Start Now</a> 
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
                        <p class="p-fontSize">Start From February 15. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <a href="{{route('student.class', $id=1)}}" class="bt-custom float-start">Start Now</a>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <img class="img-width" src="{{asset('images/take_online_course.webp')}}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- 90 Days Grammar challenge -->
    <section style="background:#fff !important;" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h1 class="heading_color text-center fw-bolder font-size-h1 mb-4">What is 90 Days Grammar challenge?</h1>
                    <div class="row">
                        <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12 mx-auto">
                            <div class="row">
                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="div-round">
                                        <p class="what-challenges-box p-fontSize">Starting from February 15. body textAdd a little bit of body textAdd a little bit of body textAdd a little bit of body text</p>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="div-round">
                                        <p class="what-challenges-box p-fontSize">Starting from February 15. body textAdd a little bit of body textAdd a little bit of body textAdd a little bit of body text</p>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="div-round">
                                        <p class="what-challenges-box p-fontSize">Starting from February 15. body textAdd a little bit of body textAdd a little bit of body textAdd a little bit of body text</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- This is why you should stick 90 days -->
    <section style="background:#fff !important;" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h1 class="heading_color text-center fw-bolder font-size-h1 mb-5">What is 90 Days Grammar challenge?</h1>
                    <div class="row">
                        <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12 mx-auto">
                            <div class="row">
                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="">
                                        <p class="fs-3 p-columns"><b>Reason 1</b></p>
                                        <p class="stick-box p-fontSize">Starting from February 15. body textAdd a little bit of body textAdd a little bit of body textAdd a little bit of body text</p>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="">
                                        <p class="fs-3 p-columns"><b>Reason 2</b></p>
                                        <p class="stick-box p-fontSize">Starting from February 15. body textAdd a little bit of body textAdd a little bit of body textAdd a little bit of body text</p>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="">
                                        <p class="fs-3 p-columns"><b>Reason 3</b></p>
                                        <p class="stick-box p-fontSize">Starting from February 15. body textAdd a little bit of body textAdd a little bit of body textAdd a little bit of body text</p>
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