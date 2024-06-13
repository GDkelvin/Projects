{{-- Layout chung --}}
@extends('courseView.layouts.layout')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    {{-- <link rel="stylesheet" type="text/css" href="{{ url('/css/layout.css') }}" /> --}}
    <link rel="stylesheet" type="text/css" href="{{ url('/css/allcourses.css') }}" />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>   
    <!-- {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script> --}} -->
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,100;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
    <script type="text/javascript" src="{{asset('/js/detcourse.js') }}" defer></script>
    {{-- <script type="text/javascript" src="{{asset('/js/homepage.js')}}" defer></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.5/dist/sweetalert2.all.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>
     <!-- Icons -->
     <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>
<body>
    <div class="container_hg">
        <!-- Main -->
        <div class="main-content">
            <main>
                <h3>Tên khóa học</h3>
                <p class="opacity_5">Giới thiệu về khóa học</p>
                
                <!-- Slideshow -->
                <div class="swiper mySwiper">
                    <div class="wrapper swiper-wrapper">
                        <div class="slide swiper-slide">
                            <img src="{{asset('images/1.jpg')}}" alt="" class="image">
                        </div>
                        <div class="slide swiper-slide">
                            <img src="{{asset('images/3.jpg')}}" alt="" class="image">
                        </div>
                        <div class="slide swiper-slide">
                            <img src="{{asset('images/4.jpg')}}" alt="" class="image">
                        </div>
                        <div class="slide swiper-slide">
                            <img src="{{asset('images/4.jpg')}}" alt="" class="image">
                        </div>
                        <div class="slide swiper-slide">
                            <img src="{{asset('images/4.jpg')}}" alt="" class="image">
                        </div>
                        <div class="slide swiper-slide">
                            <img src="{{asset('images/4.jpg')}}" alt="" class="image">
                        </div>
                        <div class="slide swiper-slide">
                            <img src="{{asset('images/4.jpg')}}" alt="" class="image">
                        </div>
                    </div>
                    <div class="swiper-button-next" style="color: #fff"></div>
                    <div class="swiper-button-prev" style="color: #fff"></div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- End Slideshow -->

                <h4>Nội dung bài học</h4>
                <p id="chapter">3 Chương - 9 bài - thời gian</p>

                <!--Drop down list-->
                <div class="accordion">
                    <div class="contentBx">
                        <div class="label">
                            <div class="icon-title">
                                <i class='bx bx-plus'></i>
                                <span>1. Giới thiệu</span>
                            </div>
                            <div class="total-articles">3 bài</div>
                        </div>
                        <div class="content">
                            <div class="icon-title">
                                <i class='bx bx-award' ></i>
                                <span>1. Giới thiệu</span>
                            </div>
                            <div class="total-articles">9:00</div>
                        </div>
                        <div class="content">
                            <div class="icon-title">
                                <i class='bx bx-award' ></i>
                                <span>1. Giới thiệu</span>
                            </div>
                            <div class="total-articles">9:00</div>
                        </div>
                        <div class="content">
                            <div class="icon-title">
                                <i class='bx bx-award' ></i>
                                <span>1. Giới thiệu</span>
                            </div>
                            <div class="total-articles">9:00</div>
                        </div>
                    </div>
                    <div class="contentBx">
                        <div class="label">
                            <div class="icon-title">
                                <i class='bx bx-plus'></i>
                                <span>2. Giới thiệu</span>
                            </div>
                            <div class="total-articles">3 bài</div>
                        </div>
                        <div class="content">
                            <div class="icon-title">
                                <i class='bx bx-award' ></i>
                                <span>1. Giới thiệu</span>
                            </div>
                            <div class="total-articles">9:00</div>
                        </div>
                    </div>
                    <div class="contentBx">
                        <div class="label">
                            <div class="icon-title">
                                <i class='bx bx-plus'></i>
                                <span>3. Giới thiệu</span>
                            </div>
                            <div class="total-articles">3 bài</div>
                        </div>
                        <div class="content">
                            <div class="icon-title">
                                <i class='bx bx-award' ></i>
                                <span>1. Giới thiệu</span>
                            </div>
                            <div class="total-articles">9:00</div>
                        </div>
                    </div>
                    
                </div>
                <!--End drop down list-->
                
            </main>

        </div>

        <!-- right sidebar -->
        <div class="sidebar-right">
            <div class="signup-course">
                <img src="{{asset('images/tải xuống.png')}}">
                <h3>Word cơ bản</h3>
                <button class = "register-course"style="font-weight: 400"
                onclick="CartOnclick(1)">Đăng kí học ngay</button>
            </div>   
            <div class="detail">
                <ul class = "course-info1">
                    <li><i class='bx bx-book-open' ></i>Trình độ: Beginner</li>
                    <li><i class='bx bx-book-open' ></i>Tổng số bài: 9 bài</li>
                    <li><i class='bx bx-book-open' ></i>Thời gian: 180 phút</li>
                    <li><i class='bx bx-book-open' ></i>Chi phí: Miễn Phí</li>
                </ul>
            </div>   
        </div>
        
    </div>
   
    <!-- <script>
        var swiper = new Swiper(".mySwiper", {
          spaceBetween: 10,
          centeredSlides: true,
            
          autoplay: {
            delay: 2500,
            disableOnInteraction: false,
          },
          pagination: {
            clickable: true,
            el: ".swiper-pagination",
            type: "progressbar",
            
          },
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
          
        });
      </script> -->
</html>
@endsection