{{-- Layout chung --}}
@extends('courseView.layouts.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    {{-- <link rel="stylesheet" type="text/css" href="{{ url('/css/layout.css') }}" /> --}}
    <link rel="stylesheet" type="text/css" href="{{ url('/css/cardStyle.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('/css/courseStyle.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    {{-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>   
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <script type="text/javascript" src="{{asset('/js/courseJS.js') }}"></script>
    
    {{-- <script type="text/javascript" src="{{asset('/js/homepage.js')}}"></script> --}}
    
    <title>Document</title>
</head>
<body>
    <main class="main_course" style="margin-left: 0px">
        <div class="title">
            Khóa học
        </div>
        {{-- flex-direction: row --}}
        <div class="filter-search-container"> 
            <div class="filter-container">
                <div class="filter" style="background-color: transparent">
                    <button type="button" class="dropdown-toggle filterBtn" id="defaultDropdown" data-toggle="dropdown" aria-haspopup="true" 
                    aria-expanded="true" data-bs-toggle="dropdown" data-bs-auto-close="true">
                        <span>Truy cập gần nhất</span>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="defaultDropdown">
                        <a class="dropdown-item" href="#">Đăng ký gần nhất</a>
                        <a class="dropdown-item" href="#">Truy cập gần nhất</a>
                        <a class="dropdown-item" href="#">Bảng chữ cái (A - Z)</a>
                    </div>
                </div>
                <div class="filter">
                    <button type="button" class="dropdown-toggle filterBtn" id="defaultDropdown" data-toggle="dropdown" aria-haspopup="true" 
                    aria-expanded="true" data-bs-toggle="dropdown" data-bs-auto-close="true">
                        Tiến độ
                    </button>
                    <div class="dropdown-menu" aria-labelledby="defaultDropdown">
                        <a class="dropdown-item" href="#">Đang học</a>
                        <a class="dropdown-item" href="#">Chưa bắt đầu</a>
                    </div>
                </div>
                <div class="filter">
                    <button type="button" class="dropdown-toggle filterBtn" id="defaultDropdown" data-toggle="dropdown" aria-haspopup="true" 
                    aria-expanded="true" data-bs-toggle="dropdown" data-bs-auto-close="true">
                        Cấp độ
                    </button>
                    <div class="dropdown-menu" aria-labelledby="defaultDropdown">
                        <a class="dropdown-item" href="#">Cơ bản</a>
                        <a class="dropdown-item" href="#">Nâng cao</a>
                    </div>
                </div>
                <div class="filter">
                    <button type="button" class="dropdown-toggle filterBtn" id="defaultDropdown" data-toggle="dropdown" aria-haspopup="true" 
                    aria-expanded="true" data-bs-toggle="dropdown" data-bs-auto-close="true">
                        Lộ trình
                    </button>
                    <div class="dropdown-menu" aria-labelledby="defaultDropdown">
                        <a class="dropdown-item" href="#">Tin học văn học</a>
                    </div>
                </div>
                <button type="button" class="resetBtn">
                    Hoàn tác
                </button>
            </div>
            <div class="search-container">
                <input type="text" class="search-bar" placeholder="Tìm kiếm khóa học">
            
                <i class="fa-solid fa-magnifying-glass search-icon" style="color: #000000;"></i>
            </div>
        </div>
        <!-- Content Tag -->
        <content class="row" style="margin-top: 36px !important; margin-left: -15px !important">
            <x-courseNotRegistered/>
            <x-courseNotRegistered/>
            <x-courseNotRegistered/>
            <x-courseNotRegistered/>
            <x-courseNotRegistered/>
            <x-courseNotRegistered/>
            <x-courseNotRegistered/>
            <x-courseNotRegistered/>
        </content>
        {{-- <content class="notHavingCourse">
            <div class="helper-pic">
                <img src="{{asset('images/nothavingcourse.png')}}" width="106%" height="106%" alt="">
            </div>
            

            <div class="helper">
                <div class="helper-header">Chào mừng bạn mới !</div>
                <div class="helper-content">Hiện tại bạn chưa đăng ký khóa học nào, 
                    hãy cùng xem qua một vài lộ trình nhé.</div>
                <button class="allroadmapBtn" style="margin: 20px">
                    <a class = "text_inside"href="#">
                        <span>Tất cả lộ trình
                            <i class="fa-solid fa-chevron-right fa-2xs" 
                            style="font-weight: bolder; font-size: 13px;"></i> 
                        </span>
                        
                    </a> 
                </button>
            </div>
        </content> --}}
        
    </main>
    
</body>
<script>
    document.querySelector(".courseBtn").style.backgroundColor = "#68E89A";
    document.querySelector(".courseBtn").style.pointerEvents = "none";
</script>
</html>
@endsection