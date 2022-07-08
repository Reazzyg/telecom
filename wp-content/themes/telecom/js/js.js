$(document).ready(function () {
  $('.owl-carousel').owlCarousel({
    loop: false,
    margin: 30,
    stagePadding: 15,
    responsive: false,
    items: 3,
    responsive: {
      1200: {
        autoWidth: false,
        items: 3,
      },
      698: {
        items: 2,
      },
      320: {
        items: 1,
      },
    },
  });
  function openMenu() {
    let burger = document.querySelector('.header-menu-button');
    burger.addEventListener('click', function () {
      let menu = document.querySelector('.header-menu-mobile-list');
      menu.classList.toggle('header-menu-mobile-list-active');
      burger.classList.toggle('header-menu-button-close');
    });
  }
  openMenu();
});
