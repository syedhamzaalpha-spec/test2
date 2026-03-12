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
 <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
   <!-- <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 2,
      grid: {
        row: 2,
       fill: "row"
      },
      autoplay:{
        delay: 2500,
      },
      spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
  </script>  -->
  

 <script>
var swiper = new Swiper(".mySwiper", {
  slidesPerView: 2,   // 2 columns
  grid: {
    rows: 2,          // 2 rows
    fill: "row"
  },
  
  spaceBetween: 20,

  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },

  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
   breakpoints: {

    0: {        // mobile
      slidesPerView: 1,
      grid: {
        rows: 1
      }
    },

   1040: {        // mobile
      slidesPerView: 1,
      grid: {
        rows: 1
      }
    },


    1170: {     // desktop
      slidesPerView: 2,
      grid: {
        rows: 2,
        fill: "row"
      }
    }

  }
}); 

</script> 

