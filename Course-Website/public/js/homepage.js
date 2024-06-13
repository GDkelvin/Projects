// Test
// Search Bar// Search Bar
// Search Bar
// Search Bar


$('input').on('focusin', function() {
    $(this).parent().find('label').addClass('active');
  });
  $('input').on('focusout', function() {
    if (!this.value) {
      $(this).parent().find('label').removeClass('active');
    }
  });
  document.addEventListener("DOMContentLoaded", function () {
    // Lấy thẻ input và modal content
    const input = document.getElementById('input');
    //--> xử lý xuất hiện khung
    const modalContent = document.querySelector('.modal-content');
    // Lấy tất cả các card-item --> xử lý xuất hiện suggest
    const cardItems = document.querySelectorAll('.card-item');
    
    // Lấy các phần tử dropdown và dropdown_menu --> xử lý dropdown
    var Notidropdown = document.querySelector(".bellIcon");
    var NotidropdownMenu = document.querySelector(".notiBox_menu");
    var dropdown = document.querySelector(".profileAvatar");
    var dropdownMenu = document.querySelector(".dropdown_menu");

    // Hàm để ẩn dropdown menu
    function hideDropdownMenu(menu) {
        menu.style.display = "none";
    }

    // Thêm sự kiện click vào biểu tượng thông báo
    Notidropdown.addEventListener("click", function () {
        NotidropdownMenu.style.display = (NotidropdownMenu.style.display === "block") ? "none" : "block";
        // Ẩn dropdown menu của profile (nếu đang hiển thị)
        hideDropdownMenu(dropdownMenu);
        // Ẩn các card-item khi dropdown menu được mở
        hideCardItems();
    });

    // Thêm sự kiện click vào biểu tượng profile
    dropdown.addEventListener("click", function () {
        dropdownMenu.style.display = (dropdownMenu.style.display === "block") ? "none" : "block";
        // Ẩn dropdown menu thông báo (nếu đang hiển thị)
        hideDropdownMenu(NotidropdownMenu);
        // Ẩn các card-item khi dropdown menu được mở
        hideCardItems();
    });

    // Biến để lưu trạng thái của card-item
    let cardItemsVisible = false;

    // Sự kiện khi nhập vào input
    input.addEventListener('input', function () {
        // Kiểm tra nếu có nội dung trong input và modal content không có class 'expanded'
        if (input.value.trim() !== '') {
            // Thêm class 'expanded' cho modal content
            modalContent.classList.add('expanded');
            // Hiển thị các card-item
            cardItems.forEach(function (cardItem) {
                cardItem.style.animation = "slideDown 1.5s forwards"; // Apply slideDown animation
                cardItem.style.display = 'block';
            });
            // Gán giá trị true cho biến cardItemsVisible
            cardItemsVisible = true;
        } else {
            // Nếu không có nội dung trong input
            if (!cardItemsVisible) {
                // Nếu card-items không được hiển thị trước đó, không làm gì cả
                return;
            }
            // Nếu card-items đã được hiển thị trước đó, ẩn chúng
            modalContent.classList.remove('expanded');
            cardItems.forEach(function (cardItem) {
                cardItem.style.display = 'none';
            });
            // Gán giá trị false cho biến cardItemsVisible
            cardItemsVisible = false;
        }
    });

    // Sự kiện khi nhấn phím Esc
    input.addEventListener('keydown', function (event) {
        if (event.key === 'Escape') {
            input.value = ''; // Xóa nội dung của input
            // Ẩn modal và các card-item
            modalContent.classList.remove('expanded');
            cardItems.forEach(function (cardItem) {
                cardItem.style.display = 'none';
            });
            // Gán giá trị false cho biến cardItemsVisible
            cardItemsVisible = false;
        }
    });

    // Modal Search Box
    // Get the modal
    var modal = document.getElementById("modalSearchBox");

    // Get the button that opens the modal
    var btn = document.querySelector(".search-box");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("closeBtn")[0];

    // Ẩn các card-item khi modal được mở
    function hideCardItems() {
        if (input.value.trim() === '') {
            cardItems.forEach(function (cardItem) {
                cardItem.style.animation = "slideUp 10s forwards"; // Apply slideDown animation
                cardItem.style.display = 'none';
            });
        }
    }

    // When the user clicks the button, open the modal 
    btn.onclick = function () {
        modal.style.animation = "slideDown 0.4s forwards"; // Apply slideDown animation
        modal.style.display = "block";
    }

    // Hide Content of dropdown menu when the modal is Showed
    btn.addEventListener("click", function () {
        // Ẩn dropdown menu của profile (nếu đang hiển thị)
        hideDropdownMenu(dropdownMenu);
        // Ẩn dropdown menu thông báo (nếu đang hiển thị)
        hideDropdownMenu(NotidropdownMenu);
        hideCardItems(); // Ẩn các card-item
    });

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.animation = "slideUp 0.4s forwards"; // Apply slideUp animation
        setTimeout(() => {
            modal.style.display = "none";
        }, 400); // Delay closing the modal to match the animation duration
        resetModal(); // Reset modal and card items
    }

    // Function to reset modal and card items
    function resetModal() {
        input.value = ''; // Set search box value to empty
        // Ẩn modal và các card-item
        modalContent.classList.remove('expanded');
        cardItems.forEach(function (cardItem) {
            cardItem.style.display = 'none';
        });
        // Gán giá trị false cho biến cardItemsVisible
        cardItemsVisible = false;
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.animation = "slideUp 0.4s forwards"; // Apply slideUp animation
            setTimeout(() => {
                modal.style.display = "none";
            }, 400); // Delay closing the modal to match the animation duration
            resetModal();
            changeSearchIconColor('white');
        }
    }
});
// Search Icon changes when the modal is opened
function changeSearchIconColor(color) {
    document.querySelector('.searchIcon').style.fill = color;
}
document.querySelector('.closeBtn').addEventListener('click', function() {
    changeSearchIconColor('white');
});
document.querySelector('.search-box').addEventListener('click', function() {
    changeSearchIconColor('black');
});

// Content Couse && Course_item
const slider = document.querySelector('.content_course');
let isDown = false;
let startX;
let scrollLeft ;
slider.addEventListener('mousedown', (e) => {
    isDown = true;
    slider.classList.add('active');
    startX = e.pageX - slider.offsetLeft;
    scrollLeft = slider.scrollLeft;
});

slider.addEventListener('mouseleave', () => {
    isDown = false;
    slider.classList.remove('active');
});

slider.addEventListener('mouseup', () => {
    isDown = false;
    slider.classList.remove('active');
  
});

slider.addEventListener('mousemove', (e) => {
    if(!isDown) return ;
   e.preventDefault();
   const x = e.pageX - slider.offsetLeft;
   const walk = (x - startX) * 2;
   slider.scrollLeft = scrollLeft - walk;
});



// Swiper slider changes
let swiper = document.querySelector('.slider .list');
let items = document.querySelectorAll('.slider .list .item');
let next = document.getElementById('next');
let prev = document.getElementById('prev');
let dots = document.querySelectorAll('.slider .dots li');
let sliderWidth = document.querySelector('.slider').offsetWidth;
let lengthItems = items.length - 1;
let active = 0;
// Thiết lập kích thước của mỗi ảnh trong slider bằng kích thước của slider
items.forEach(item => {
    item.style.width = sliderWidth + 'px';
});

next.onclick = function(){
    active = active + 1 <= lengthItems ? active + 1 : 0;
    reloadSlider();
}
prev.onclick = function(){
    active = active - 1 >= 0 ? active - 1 : lengthItems;
    reloadSlider();
}
let refreshInterval = setInterval(()=> {next.click()}, 3000);
function reloadSlider(){
    swiper.style.left = -items[active].offsetLeft + 'px';
    // 
    let last_active_dot = document.querySelector('.slider .dots li.active');
    last_active_dot.classList.remove('active');
    dots[active].classList.add('active');

    clearInterval(refreshInterval);
    refreshInterval = setInterval(()=> {next.click()}, 3000);
}
dots.forEach((li, key) => {
    li.addEventListener('click', ()=>{
         active = key;
         reloadSlider();
    })
})// Xử lý sự kiện resize để cập nhật lại kích thước của slider và ảnh
window.onresize = function(event) {
    sliderWidth = document.querySelector('.slider').offsetWidth;
    // Thiết lập lại kích thước của mỗi ảnh trong slider bằng kích thước của slider
    items.forEach(item => {
        item.style.width = sliderWidth + 'px';
    });
    reloadSlider();
};
// Footer transition 
gsap.registerPlugin(ScrollTrigger);

gsap.utils.toArray(".revealUp").forEach(function (elem) {
  ScrollTrigger.create({
    trigger: elem,
    start: "top 80%",
    end: "bottom 20%",
    markers: false,
    onEnter: function () {
      gsap.fromTo(
        elem,
        { y: 100, autoAlpha: 0 },
        {
          duration: 1.25,
          y: 0,
          autoAlpha: 1,
          ease: "back",
          overwrite: "auto"
        }
      );
    },
    onLeave: function () {
      gsap.fromTo(elem, { autoAlpha: 1 }, { autoAlpha: 0, overwrite: "auto" });
    },
    onEnterBack: function () {
      gsap.fromTo(
        elem,
        { y: -100, autoAlpha: 0 },
        {
          duration: 1.25,
          y: 0,
          autoAlpha: 1,
          ease: "back",
          overwrite: "auto"
        }
      );
    },
    onLeaveBack: function () {
      gsap.fromTo(elem, { autoAlpha: 1 }, { autoAlpha: 0, overwrite: "auto" });
    }
  });
});

