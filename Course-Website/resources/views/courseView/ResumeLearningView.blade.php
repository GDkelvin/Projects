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
    
    {{-- <link rel="stylesheet" type="text/css" href="{{ url('/css/layout.css') }}" /> --}}
    
    <link rel="stylesheet" type="text/css" href="{{ url('/css/resumelearning.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>   
    
    <!-- {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script> --}} -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C500%2C700"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto%3A500"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amiri%3A700"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alfa+Slab+One%3A400"/>
    <!-- Icon font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- <script type="text/javascript" src="{{asset('/js/homepage.js')}}" defer></script> --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>
<body>

    <main class="maindetail" >
        <!-- html detail huy -->
        <div class="detail">
            <!-- div chua vd bai hoc -->
            <div class="video">
                <!-- chèn vd -->
                <div class="vdbaihoc">
                    <x-interact-video/>
                </div>
                        <!-- frame_2 btn chuyển bài -->
                <div class="frame_2">
                    <div class="btn_previous">
                        <i class="fa-solid fa-arrow-left iconLeft"></i>
                        <p class="baitruoc">Bài trước</p>
                    </div>
                    <div class="btn_next">
                        <p class="baitieptheo">Bài sau </p>
                        <i class="fa-solid fa-arrow-right IconRight"></i>
                    </div>
                </div>
                <p class="tenbaihoc">Tên bài học</p>
            </div>
             <!-- accordion : các bài học -->
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
        </div>
        
    </main>  
</body>
  <!-- js droplist dow  -->
  <script>
        // Wait for the DOM to be fully loaded
        document.addEventListener("DOMContentLoaded", function() {
          // Get all elements with the class name 'label'
          var labels = document.querySelectorAll('.accordion .contentBx .label');
      
          // Loop through each label
          labels.forEach(function(label) {
            // Add a click event listener to each label
            label.addEventListener('click', function() {
              // Toggle the 'active' class on the parent contentBx
              this.parentNode.classList.toggle('active');
            });
          });
        });
      </script>
<script>
    
</script>
</html>
@endsection