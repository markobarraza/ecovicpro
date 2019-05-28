// menu responsive navbar
document.addEventListener('DOMContentLoaded', function () {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
});

// Or with jQuery

$(document).ready(function () {
    $('.sidenav').sidenav();
});


// SWIPER SLIDER

      $(document).ready(function () {
            var swiper = new Swiper('.swiper-container', {
              slidesPerView: 4,
              spaceBetween: 1,
              slidesPerGroup: 4,
              loop: false,
              loopFillGroupWithBlank: true,
              pagination: {
                  el: '.swiper-pagination',
                  clickable: true,
              },
              navigation: {
                  nextEl: '.swiper-button-next',
                  prevEl: '.swiper-button-prev',
              },
          });
        });
    
  