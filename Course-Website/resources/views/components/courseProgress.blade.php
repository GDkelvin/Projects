 {{-- Item 1 (Home Progress Notification) --}}
 <div class="card card-progress">
    {{-- when hover --}}
    <a href="/course/mycourse/1/1" style="text-decoration: none">
      <div class="card-progress-hover" >
          <button class="btn btn-primary directBtn">
              <i class="fa-solid fa-arrow-right"></i>
          </button>
      </div>
    </a>
    <div class="row g-0">
      <div class="col-md-4">
        <img class = "course-icon-progress" src="{{ asset('/images/iconword-bigger.png') }}" alt="">
      </div>
      <div class="col-md-8" >
        <div class="card-body card-body-progress">
            <p class="card-subtitle mb-2 title-progress">Word cơ bản - 
                <span class="card-subtitle mb-2 author-progress">Phạm Thị Thanh Thảo</span>
            </p>
            <h5 class="card-title" style="margin-bottom: 23px">Bài 2: Tùy chỉnh thao tác lưu</h5>
            <div class="progress mt-1 progress-mini " data-height="5" style="height: 5px;">
                <div class="progress-bar" role="progressbar" data-width="40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"></div>
            </div>
            <p class="card-text progress-mini-num"><small class="text-muted">Tiến độ: 40%</small></p>
        </div>
      </div>
    </div>
</div>