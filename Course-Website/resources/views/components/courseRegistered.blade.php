
{{-- Item 1 (Registered) --}}
<div class="card_item" style="padding-left: 0; padding-top: 25px">
    <div class="card border-0" style="width: 24rem; border: none">
        <div class="card-img-top card-top" >
            <div class="label label-default">Beginner</div>
            <img class = "course-icon" src="{{ asset('/images/iconword-bigger.png') }}" alt="">
        </div>
        <div class="card-img-top card-top top2">
            {{-- <div class="label label-default">Beginner</div>
            <img class = "course-icon" src="{{ asset('/images/iconword-bigger.png') }}" alt=""> --}}
            <div class="direction">
                <a href="/course/mycourse/1/1" style="text-decoration: none; border-radius: 40px;filter: drop-shadow(0px 4px 3px rgba(0, 0, 0, 0.5));">
                    <button class="btn btn-primary moreInfo" style="padding-left: 7px">
                        <div>Tiếp tục học</div>
                        <i class="fa-solid fa-angles-right"></i>
                    </button>
                </a>
            </div>
        </div>
        <div class="card-body" >
            <h5 class="card-title font-weight-bold">Word cơ bản</h5>
            <p class="card-subtitle mb-2">Phạm Thị Thanh Thảo</p>
            <p class="card-text" style="margin-bottom: 8px">Tiến độ: 40%</p>
            {{-- Percentage for my course --}}
            <div class="progress mt-1 " data-height="8" style="height: 6px;">
                <div class="progress-bar" role="progressbar" data-width="40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"></div>
            </div>
        </div>
    </div>
</div>