{{-- Item 1 --}}
<div class="col-md-3 col-sm-6 swiper-slide" style="">
    <div class="card border-0" style="width: 24rem; border: none">
        <div class="card-img-top card-top" >
            <div class="label label-default">Beginner</div>
            <img class = "course-icon" src="{{ asset('/images/iconword-bigger.png') }}" alt="">
        </div>
        <div class="card-img-top card-top top2">
            {{-- <div class="label label-default">Beginner</div>
            <img class = "course-icon" src="{{ asset('/images/iconword-bigger.png') }}" alt=""> --}}
            <div class="direction">
                <a href="/course/1" style="text-decoration: none; border-radius: 40px;filter: drop-shadow(0px 4px 3px rgba(0, 0, 0, 0.5));">
                    <button class="btn btn-primary moreInfo" >
                        <div>Xem thêm</div>
                        <i class="fa-solid fa-angles-right"></i>
                        
                    </button>
                </a>
                <canvas class="rec" style="background-color: white"></canvas>
                <button class="btn btn-primary option wishlist wish1" onclick="WishOnclick(1)">
                    <i class="fa-regular fa-heart"></i>
                </button>
                <button class="btn btn-primary option cart-register cart1" onclick="CartOnclick(1)">
                    <i class="fa-regular fa-pen-to-square"></i>
                </button>
            </div>
            

        </div>
        <div class="card-body course-info1" >
          <h5 class="card-title font-weight-bold">Word cơ bản</h5>
          <p class="card-subtitle mb-2">Phạm Thị Thanh Thảo</p>
          <p class="card-text font-weight-bold">Miễn phí</p>
        </div>
    </div>
</div>