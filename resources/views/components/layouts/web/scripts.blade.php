<script defer src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
{{-- <script defer src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js" defer></script> --}}

@vite('resources/js/app.js')

<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  {{-- <script>
    var swiper = new Swiper(".testimonialSwiper", {
      slidesPerView: 3,
      centeredSlides: true,
      spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
  </script> --}}
  <script>
var swiper = new Swiper(".testimonialSwiper", {
  slidesPerView: 1,
  centeredSlides: true,
  spaceBetween: 30,
  loop: true,
  

  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
   breakpoints: {
                768: {
                    slidesPerView: 2,

                },
                1200: {
                    slidesPerView: 3,

                },
            },
            
});
</script>

<!-- Initialize Swiper -->



  
  <script>
    var swiper = new Swiper(".OurServices", {
      slidesPerView: 2,
      grid: {
        rows: 2,
      },
      spaceBetween: 10,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
       autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
    });
  </script>