{{-- Phong --}}
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
    <link rel="stylesheet" type="text/css" href="{{ url('/css/layout.css') }}" />
    <!-- Js File -->
    {{-- Include khi cần --}}
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>
    
    {{-- Include khi cần --}}
    <script type="text/javascript" src="{{asset('/js/homepage.js')}}" defer></script>
<body class = "body_big">
            <!-- == HEADER == -->
<div id="header">
    <!-- Logo Icon -->
    <div id="logo">
        <img src="{{asset('images/415791565_1101418471001982_6189920452808394444_n.png')}}" alt="" class="logoImg" >
    </div>
        <!-- Search Box -->
          <!-- Search Bar (container của search) -->
    <div class="container-input search-box">
        <!-- Search Icon -->
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-search" viewBox="0 0 16 16" style="left: 3%; position: relative;" >
                <path class="searchIcon" d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
        </svg>
        <!-- Search Box -->
        <input id="input" type="search" placeholder="Tìm kiếm" name="query" class="SearchInput" value>
    </div>
    <!-- Right - infomation -->
    <div class="subnav">
        <!-- myCourse Button -->
        <a href="/course/mycourse" class="myCourse_btn">
            <button class="btn bgrk#E2E2E2" style="border-radius: 10px"> 
                <span>Khóa học của tôi</span>
            </button>
        </a>
        <!-- Shopping -->
        <div class="shopping_container">
            <div class="shopCart_icon">
                <i class="fa-solid fa-cart-shopping shoppingCart"></i>
            </div>
        <!-- Shopping Box -->
        </div>
      
      <!-- Notification -->
      <div class="notification_container">
             <!-- Bell Icon (set event listner)-->
            <button class="bellIcon outlineNone" >
                <svg viewBox="0 0 448 512" class="bell"><path d="M224 0c-17.7 0-32 14.3-32 32V49.9C119.5 61.4 64 124.2 64 200v33.4c0 45.4-15.5 89.5-43.8 124.9L5.3 377c-5.8 7.2-6.9 17.1-2.9 25.4S14.8 416 24 416H424c9.2 0 17.6-5.3 21.6-13.6s2.9-18.2-2.9-25.4l-14.9-18.6C399.5 322.9 384 278.8 384 233.4V200c0-75.8-55.5-138.6-128-150.1V32c0-17.7-14.3-32-32-32zm0 96h8c57.4 0 104 46.6 104 104v33.4c0 47.9 13.9 94.6 39.7 134.6H72.3C98.1 328 112 281.3 112 233.4V200c0-57.4 46.6-104 104-104h8zm64 352H224 160c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7s18.7-28.3 18.7-45.3z"></path></svg>
            </button>
            <!-- Notice Box -->
            <div class="notificaiont_box">
                <div class="dropdow dropdown-1">
                    {{-- Lấy container chứa thông báo --}}
                    <ul class="notiBox_menu notiBox_menu-1">
                        <header>
                        <p class="noticeBox_name">Thông báo</p>
                        </header>
                        <div class="notification_content">
                        <li class="notiBox_item"><a href="">23 task was returned from the workflow</a></li>
                        <li class="notiBox_item"><a href="">23 task was returned from the workflow</a></li>
                        <li class="notiBox_item"><a href="">23 task was returned from the workflow</a></li>
                        <li class="notiBox_item"><a href="">23 task was returned from the workflow</a></li>
                        <li class="notiBox_item"><a href="">23 task was returned from the workflow</a></li>
                        <li class="notiBox_item"><a href="">23 task was returned from the workflow</a></li>
                        <li class="notiBox_item"><a href="">23 task was returned from the workflow</a></li>
                        <li class="notiBox_item"><a href="">23 task was returned from the workflow</a></li>
                        <li class="notiBox_item"><a href="">23 task was returned from the workflow</a></li>
                        <li class="notiBox_item"><a href="">23 task was returned from the workflow</a></li>
                        <li class="notiBox_item"><a href="">23 task was returned from the workflow</a></li>
                        </div>
                        <!-- Show All notifications -->
                        <div class="showAllcontent">
                        <a href="#">
                            <p>Show all notifications</p>
                        </a>
                    </div>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Profile User -->
        <div class="user_container menu">
            <!--User Avatar (set eventlistener) -->
             <div class="profileAvatar">
                <img src="{{asset('images/423221567_7135333573191069_509031383483258617_n.png')}}" alt="" class="AvaImg" >
                <!-- Profile drop Down -->
            <div class="dropdown dropdown-1">
                {{-- lấy container chứa profile --}}
                <ul class="dropdown_menu dropdown_menu-1">
                 <li class="dropdown_item"><a href="">Trang Cá Nhân</a></li>
                 <li class="dropdown_item"><a href="">Danh Sách Yêu Thích</a></li>
                 <li class="dropdown_item"><a href="">Cài Đặt</a></li>
                 <li class="dropdown_item"><a href="">Đăng Xuất</a></li>
                </ul>
            </div>
            </div>
        </div>
    </div>    
        <!-- Modal Box (container của suggestion) -->
        <div id="modalSearchBox" class="modalBox">
        <!-- Modal content -->
        <div class="modal-content ">
            <!-- Modal Header -->
            <div class="modal-header">
                <!-- Close Button -->          
                <button class="closeBtn outlineNone">
                <i class="fa-solid fa-xmark closeIcon"></i>
                    <span>Đóng</span>
                 </button>                 
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
            <!-- Popular search -->
            <div class="popularSearch">
                <h2>Popular Searches</h2>
                <!-- Popular Item -->
                <div class="UserPopularItem">
                <button class="ui-btn outlineNone" type="button" role="link">
                   <a href="">HTML</a>
                </button>
                <button class="ui-btn outlineNone" type="button" role="link">
                   <a href="">CSS</a>
                </button>
                 <button class="ui-btn outlineNone" type="button" role="link">
                   <a href="">C/C++</a>
                </button> 
                <button class="ui-btn outlineNone" type="button" role="link">
                   <a href="">JAVA</a>
                </button> 
                <button class="ui-btn outlineNone" type="button" role="link">
                   <a href="">FULL STACK </a>
                </button>
                </div>
            </div>
            <!-- Suggestion Items for User -->
            <div class="suggest_box">
            <div class="suggest_item">
                <!-- Card Item -->
                <div class="card-item">
                <div class="img-card iCard-style1">
                        <div class="card-content">
                            <div class="card-image">
                                <img src="{{asset('images/tải xuống.png')}}"/>
                            </div>
                            <div class="card-text">
                                <h4 id="item1">HTML</h4>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Image by <a href="https://pixabay.com/users/Hans-2/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=3461451" style="color:#795548">Hans Braxmeier</a> from <a href="https://pixabay.com/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=3461451" style="color:#795548">Pixabay</a>
                                </p>
                            </div>
                        </div>
                        <div class="card-link">
                            <a href="#" title="Read Full"><span>Read Full</span></a>
                        </div>
                    </div>   
                </div>
                 <!-- Card Item -->
                 <div class="card-item">
                <div class="img-card iCard-style1">
                        <div class="card-content">
                            <div class="card-image">
                                <img src="{{asset('images/tải xuống.png')}}"/>
                            </div>
                            <div class="card-text">
                                <h4 id="item2">CSS</h4>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Image by <a href="https://pixabay.com/users/Hans-2/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=3461451" style="color:#795548">Hans Braxmeier</a> from <a href="https://pixabay.com/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=3461451" style="color:#795548">Pixabay</a>
                                </p>
                            </div>
                        </div>
                        <div class="card-link">
                            <a href="#" title="Read Full"><span>Read Full</span></a>
                        </div>
                    </div>   
                </div>
                 <!-- Card Item -->
                 <div class="card-item">
                <div class="img-card iCard-style1">
                        <div class="card-content">
                            <div class="card-image">
                                <img src="{{asset('images/tải xuống.png')}}"/>
                            </div>
                            <div class="card-text">
                                <h4 id="java">JAVA</h4>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Image by <a href="https://pixabay.com/users/Hans-2/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=3461451" style="color:#795548">Hans Braxmeier</a> from <a href="https://pixabay.com/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=3461451" style="color:#795548">Pixabay</a>
                                </p>
                            </div>
                        </div>
                        <div class="card-link">
                            <a href="#" title="Read Full"><span>Read Full</span></a>
                        </div>
                    </div>   
                </div>
            </div>
            </div>
            </div>
    </div>
    </div>
</div>
            <!-- == CONTENT == -->
<div id="content">
    <!-- Side-bar Menu -->
    <div id="sidebar_menu">
        <div class="sub_sidebar">
            <ul class="select_topic">
            <li>
                <a href="/course">
                     <!-- Button 1 -->
                    <button class="menu_btn homeBtn outlineNone">
                        <!-- icon -->
                        <div class="icon" > 
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                                <path stroke="black" stroke-width="0.5px" d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4z"/>
                              </svg>
                        </div>
                        <span class="button-content ">Trang chủ </span>
                    </button>                      
                </a>
            </li>
            
            <li>
                <a href=""> 
                     <!-- Button 2 -->
                    <button class="menu_btn rmapBtn outlineNone">
                        <!-- icon -->
                        <div class="icon"> 
                            <i class="fa-solid fa-arrow-trend-up icon1"></i>
                        </div>
                        <span class="button-content ">Lộ trình</span>
                     </button>
                </a>
            </li>
            <li>
                <a href="/course/allcourses">
                    <!-- Button 3 -->
                     <button class="menu_btn courseBtn outlineNone">
                        <!-- icon -->
                        <div class="icon"> 
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-columns" viewBox="0 0 16 16">
                                <path stroke="black" stroke-width="0.5px" d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm8.5 0v8H15V2zm0 9v3H15v-3zm-1-9H1v3h6.5zM1 14h6.5V6H1z"/>
                              </svg>
                        </div>
                        <span class="button-content  ">Khóa học</span>
                     </button>
                </a>
            </li>
            <li>
                <a href="">
                    <!-- Button 4 -->
                    <button class="menu_btn blogBtn outlineNone">
                        <!-- icon -->
                        <div class="icon"> 
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                                <path stroke="black" stroke-width="0.5px" d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"/>
                              </svg>
                        </div>
                        <span class="button-content ">Bài viết </span>
                    </button>
                </a>
            </li>
            <li>
                <a href="">
                    <!-- Button 5 -->
                    <button class="menu_btn contactBtn outlineNone">
                        <!-- icon -->
                        <div class="icon"> 
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                <path stroke="black" stroke-width="0.5px" d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                              </svg>
                        </div>
                        <span class="button-content ">Liên hệ </span>
                    </button>
                </a>
            </li>
            </ul>
        </div>      
    </div>
    <!-- Main Content -->
    <div id="main_content">
                @yield('content')
    </div>
</div>
            <!-- == FOOTER == -->
<div id="footerPage">
    <footer>
        <div class=" text-center text-md-left col-third">
          <div class="footer-wrap">
            <!-- Item 1 -->
            <div class="about">
                <!-- Logo Icon -->
              <img src="{{asset('images/415791565_1101418471001982_6189920452808394444_n.png')}}" alt="" class="imgIcon">
              <div class="text-muted py-4 section">
              <p class="#">Digital experience is <br>always embedded in <br> a physical experience.</p>                
            </div>
            </div>
            <!-- Item 2 -->
            <div class="Service ">
              <h6 class="fw-bold special_name">Services</h6>
              <p class="p10"><a href="">Web Hosting</a></p>
              <p class="p10"><a href="" >Domains</a></p>
              <p class="p10"><a href="">Premium Hosting</a></p>
              <p class="p10"><a href="">Private Server</a></p>
              <p class="p10"><a href="">E-mail Hosting</a></p>
            </div>
            <!-- Item 3 -->
            <div class="Follow_us ">
              <h6 class="fw-bold special_name">Follow Us</h6>
            <p class="p10">
                <a href="">
                <i class="fa-brands fa-facebook-f"></i>
                Facebook
                 </a>
            </p>
            <p class="p10">
                <a href="">
                    <i class="fa-brands fa-twitter"></i>
                Twitter
                </a>
            </p>
            <p class="p10">
                <a href="">
                <i class="fa-brands fa-instagram"></i>
                Instagram
                </a>
            </p>
            <p class="p10">
                <a href="">
                <i class="fa-brands fa-linkedin-in"></i>
                Linkedin
                </a>
            </p>
            </div>
            <!-- Item 4 -->
            <div class="Contact ">
              <h6 class="fw-bold special_name">Contact Us</h6>
              <p class="p10"><a href="">@gmail.com</a></p>
            </div>
            
          </div>
        </div>
    </footer>
</div>
</body>
</html>