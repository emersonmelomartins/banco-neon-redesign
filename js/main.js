var swiper = new Swiper(".slide-depoimentos", {
  slidesPerView: 3,
  spaceBetween: 32,
  pagination: {
    el: ".s-depoimentos .top .swiper-pagination",
    clickable: true,
  },
  breakpoints: {
    320: {
      slidesPerView: 1.3,
      spaceBetween: 16,
    },
    600: {
      slidesPerView: 2.3,
      spaceBetween: 15,
    },
    1200: {
      slidesPerView: 3,
      spaceBetween: 32,
    },
  },
});

const btnMenuMobile = document.getElementById("js-btn-menu");
const menuList = document.getElementById("menu-list");

btnMenuMobile.addEventListener("click", function () {
  btnMenuMobile.classList.toggle("is-active");
  menuList.classList.toggle("is-opened");
});
