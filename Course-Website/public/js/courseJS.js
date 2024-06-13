function WishOnclick(id) {
    console.log("Click");
    var wish = document.querySelector(`.wish${id}`);
    var wishIcon = wish.children[0];
    console.log(wishIcon);
    var clicks2 = $(this).data('clicks2');
    console.log(clicks2);
    if (typeof clicks2 === 'undefined'){
        clicks2 = true;
    }
    if (clicks2) {
        // odd clicks
        console.log("Option First Click");
        wish.classList.add("active-option");
        wishIcon.classList.add("activeIcon-option");
        // wish.style.cssText = `
        // background-color: #33E288; 
        // box-shadow: none;`;

        // wishIcon.style.cssText = `
        // color: white;`;
        
        //sử dụng method post để gửi về controller dữ liệu cập nhật vào db
        //Code here

        
    } else {
        // even clicks
        console.log("Option Second Click");
        wish.classList.remove("active-option");
        wishIcon.classList.remove("activeIcon-option");
        // wish.style.cssText = `
        // background-color: white; 
        // box-shadow: none;`;
        
        // wishIcon.style.cssText = `
        // color: black;`;
    }
    $(this).data("clicks2", !clicks2);   
}

//Nếu chọn tắt --> không đăng ký --> đổi hiệu lại như cũ, click quay về thành true 
//(set false vì cuối hàm đã false --> true)
function CartOnclick(id) {
    console.log("Click");
    var body_change = document.querySelector(`.body_big`);
    var cart = document.querySelector(`.cart${id}`);
    var course_info = document.querySelector(`.course-info${id}`);
    var cartIcon = cart.children[0];
    var course_price = course_info.children[2];
    var close_btn = document.querySelector('swal2-close');
    var notRegister = false;
    // console.log(cartIcon);
    var clicks = $(this).data('clicks');
    console.log(clicks);
    if (typeof clicks === 'undefined'){
        clicks = true;
    }
    if (clicks) {
        // odd clicks
        console.log("Option First Click");
        
        
        // cart.style.cssText = `
        // background-color: #33E288; 
        // box-shadow: none;`;

        // cartIcon.style.cssText = `
        // color: white;`;
        console.log(course_price.textContent);
        //sweet alert
        Swal.fire({
            title: "Xác nhận đăng ký",
            icon: "info",
            confirmButtonColor: "#3085d6 !important",
            showCloseButton: true,
            confirmButtonText: "Tôi đồng ý"
          }).then((result) => { 
            if (result.isConfirmed) {
                cart.classList.add("active-option");
                cartIcon.classList.add("activeIcon-option");
              Swal.fire({
                    title: "Đăng ký thành công!",
                    // text: "Chúc bạn học thật hiệu quả nhé.",
                    // Link dẫn sang /khóa học/chapter
                    html:`<span>Chúc bạn học thật hiệu quả nhé.
                    <a class = "learnNowLink" href = "/course/mycourse/1/1" 
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
                console.log("Không đồng ý đăng ký");
                $(this).data("clicks", clicks);
            }
          });
        //   
        // 
    } 
    
    else {
        // even clicks
        console.log("Option Second Click");
        cart.classList.remove("active-option");
        cartIcon.classList.remove("activeIcon-option");
        // cart.style.cssText = `
        // background-color: white; 
        // box-shadow: none;`;
        
        // cartIcon.style.cssText = `
        // color: black;`;
    }
    body_change.classList.remove("swal2-shown");
    $(this).data("clicks", !clicks); 
    // if (notRegister == true){
    //     console.log("Không đăng ký");
    //     $(this).data("clicks", clicks);
    // }
}
