{{-- Phong --}}
@extends('courseView.layouts.layout')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>HomePage</title>
    <!-- Font icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Css File -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/homepage.css') }}" />
    {{-- <link rel="stylesheet" type="text/css" href="{{ url('/css/layout.css') }}" /> --}}
    <link rel="stylesheet" type="text/css" href="{{ url('/css/cardStyle.css') }}" />
    {{-- Swipper --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    
    <!-- Js File -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>   
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.5/dist/sweetalert2.all.min.js"></script>
    
    
    {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>
    {{-- <script type="text/javascript" src="{{asset('/js/homepage.js')}}" defer></script> --}}
    <script type="text/javascript" src="{{asset('/js/courseJS.js') }}"></script>   
    
<body>
    <!-- Slider Course -->
    <div class="slide_course">
        <!-- Slider Item -->
        <div class="slider">
            <!-- Img item -->
            <div class="list">
                <div class="item">
                    <img src="{{asset('images/1.jpg')}}" alt="">
                </div>
                <div class="item">
                    <img src="{{asset('images/2.jpg')}}" alt="">
                </div>
                <div class="item">
                    <img src="{{asset('images/3.jpg')}}" alt="">
                </div>
                <div class="item">
                    <img src="{{asset('images/4.jpg')}}" alt="">
                </div>
                <div class="item">
                    <img src="{{asset('images/5.jpg')}}" alt="">
                </div>
            </div>
            <!-- Ti right and left button -->
            <div class="buttons ">
                <button id="prev" class="outlineNone">
                    <i class="fa-solid fa-arrow-left"></i>
                </button>
                <button id="next" class="outlineNone">
                    <i class="fa-solid fa-arrow-right"></i>
                </button>
            </div>
            <!-- Dots events -->
            <ul class="dots">
                <li class="active"></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
        <!-- Slide Content 1 -->
        <div class="slide_content">
        <div class="slide_name">
            <h1>Tiến trình gần đây</h1>
            <a href="/course/mycourse" class="">
                <button class="slide_btn outlineNone"> 
                    <span>
                        Khóa học của tôi
                    </span>
                </button>
            </a>
        </div>
        <!-- Content Course 1 -->
        <div class="content_course" style="display: flex; gap: 2.5%; width: 98%">
            <!-- Content Item 1  -->
            <x-courseProgress/> 
            <x-courseProgress/> 
            <x-courseProgress/> 
            <x-courseProgress/> 
            <x-courseProgress/> 
            <x-courseProgress/> 
            <x-courseProgress/> 
            <!-- Content Item 1  -->
            <!-- Content Item 1  --> 
            {{-- <x-courseNotRegistered/> 
            <x-courseNotRegistered/> 
            <x-courseNotRegistered/> 
            <x-courseNotRegistered/>  --}}
            {{-- <x-courseNotRegistered/> --}}
        </div>
        </div>
        <!-- Slide Content 2 -->
        <div class="slide_content">
        <div class="slide_name">
            <h1>Các khóa học nổi bật</h1>
            <a href="/course/allcourses" class="">
                <button class="slide_btn outlineNone"> 
                    <span>
                        Tất cả các khóa học
                    </span>
                </button>
            </a>
        </div>
         <!-- Content Course 2-->
         <div class="content_course2" style="flex-wrap:wrap;" >
         <!-- Content item 2 -->
         <div class="swiper mySwiper">
            <div class="sub-tilte-courses">
                Vì bạn đã học <a href="/">"Word cơ bản"</a>:
            </div>
            <div class="swiper-wrapper">
                <x-courseNotRegistered/>  
                <x-courseNotRegistered/>
                <x-courseNotRegistered/>              
                <x-courseNotRegistered/>              
                <x-courseNotRegistered/>              
                <x-courseNotRegistered/> 
                <x-courseNotRegistered/>  
            </div>
         </div>
                        
         <div class="swiper mySwiper">
            <div class="sub-tilte-courses">
                Vì <a href="/">"Word cơ bản"</a> đã được thêm vào wish list của bạn:
            </div>
            <div class="swiper-wrapper">
                <x-courseNotRegistered/>  
                <x-courseNotRegistered/>
                <x-courseNotRegistered/>              
                <x-courseNotRegistered/>              
                <x-courseNotRegistered/>              
                <x-courseNotRegistered/> 
                <x-courseNotRegistered/>  
            </div>
         </div>

         <div class="swiper mySwiper">
            <div class="sub-tilte-courses">
                Top khóa học về <a href="/">Tin học văn phòng</a>:
            </div>
            <div class="swiper-wrapper">
                <x-courseNotRegistered/>  
                <x-courseNotRegistered/>
                <x-courseNotRegistered/>              
                <x-courseNotRegistered/>              
                <x-courseNotRegistered/>              
                <x-courseNotRegistered/> 
                <x-courseNotRegistered/>  
            </div>
         </div>
            {{-- <x-courseNotRegistered/>              
            <x-courseNotRegistered/>              
            <x-courseNotRegistered/>              
            <x-courseNotRegistered/>              
            <x-courseNotRegistered/>              
            <x-courseNotRegistered/>              
            <x-courseNotRegistered/>              
            <x-courseNotRegistered/>               --}}

         <!-- Content item 2 -->
         <!-- Content item 2 -->
         <!-- Content item 2 -->
         <!-- Content item 2 -->
         <!-- Content item 2 -->                                  
            </div>
         </div>
    </div> 
</body>
{{-- Swipper --}}
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    document.querySelector(".homeBtn").style.backgroundColor = "#68E89A";
    document.querySelector(".homeBtn").style.pointerEvents = "none";
    var swiper2 = new Swiper(".mySwiper", {
    slidesPerView: 4,
    spaceBetween: 100,
    // grabCursor: true,
    // centeredSlides: true,
  });
</script>
</html>
@endsection
