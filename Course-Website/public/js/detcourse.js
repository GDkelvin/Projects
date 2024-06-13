

var counter = 1;
    setInterval(function(){
      document.getElementById('radio' + counter).checked = true;
      counter++;
      if(counter > 4){
        counter = 1;
      }
    }, 5000);

//Accordion

const accordion = document.getElementsByClassName('contentBx');
for(i = 0; i < accordion.length; i++){
    accordion[i].addEventListener('click', function(){
        this.classList.toggle('active');
    })
}
var SwiperSlide = new Swiper(".mySwiper", {
  spaceBetween: 10,
  centeredSlides: true,
  loop: true,
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
//Register
function CartOnclick(id) {
  console.log("Click");
  var body_change = document.querySelector(`.body_big`);
  var course_info = document.querySelector(`.course-info${id}`);
  var course_price = course_info.children[3];
  var btn_register = document.querySelector(`.register-course`);
  // console.log(cartIcon);
  var clicks = $(this).data('clicks');
  // console.log(clicks);
  if (typeof clicks === 'undefined'){
      clicks = true;
  }
  if (clicks) {

      // odd clicks
      
      // cart.style.cssText = `
      // background-color: #33E288; 
      // box-shadow: none;`;

      // cartIcon.style.cssText = `
      // color: white;`;
      let price =  course_price.textContent.split(':')[1];
      price = price.trim();
      console.log(price);
      //sweet alert
      Swal.fire({
          title: "Xác nhận đăng ký",
          icon: "info",
          confirmButtonColor: "#3085d6 !important",
          showCloseButton: true,
          confirmButtonText: "Tôi đồng ý"
        }).then((result) => { 
          if (result.isConfirmed) { 
            

              btn_register.classList.add("active-registerBtn");
              btn_register.innerText = "Đã đăng ký";
              Swal.fire({
                title: "Đăng ký thành công!",
                // text: "Chúc bạn học thật hiệu quả nhé.",
                // Link dẫn sang /khóa học/chapter
                html:`<span>Chúc bạn học thật hiệu quả nhé.
                <a class = "learnNowLink" 
                style = "text-decoration: none; color: #398976; font-weight: 400">Học ngay!</a>
                </span>
                <style>
                    .learnNowLink:hover{
                        color: #B1D3CA!important;
                    }
                </style>`,
                icon: "success",
                showConfirmButton: false,
                showCloseButton: true,
                className: "swal-agree-course"
              })
              
              body_change.classList.remove("swal2-shown");
              //sử dụng method post để gửi về controller dữ liệu cập nhật vào db
              //Code here
          }
          else{
            
            $(this).data("clicks", clicks);
          }
        });
      //   
      // 
  } 
  
  else {
      // even clicks
      console.log("Option Second Click");
      btn_register.classList.remove("active-registerBtn");
      btn_register.innerText = "Đăng ký học ngay";
      // cart.classList.remove("active-option");
      // cartIcon.classList.remove("activeIcon-option");
      // cart.style.cssText = `
      // background-color: white; 
      // box-shadow: none;`;
      
      // cartIcon.style.cssText = `
      // color: black;`;
  }
  body_change.classList.remove("swal2-shown");
  $(this).data("clicks", !clicks);   
}