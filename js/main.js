var swiper = new Swiper(".slide-depoimentos", {
  slidesPerView: 3,
  spaceBetween: 32,
  pagination: {
    el: ".s-depoimentos .top .swiper-pagination",
    clickable: true,
  },
});

const btnMenuMobile = document.getElementById("js-btn-menu");
const menuList = document.getElementById("menu-list");

btnMenuMobile.addEventListener("click", function () {
  btnMenuMobile.classList.toggle("is-active");
  menuList.classList.toggle("is-opened");
});
