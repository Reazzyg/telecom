$(document).ready(function () {
  $('.owl-carousel').owlCarousel({
    loop: false,
    margin: 30,
    stagePadding: 15,
    responsive: false,
    items: 3,
    responsive: {
      1200: {
        loop: true,
        autoWidth: false,
      },
    },
  });
});
