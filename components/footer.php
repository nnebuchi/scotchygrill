<footer
      class="relative z-0 py-10 mx-auto flex flex-col items-center justify-between">
      <div
        class="bg-gradient-to-r to-[#079B3BA6] from-[#F8CB00A6] absolute top-0 bottom-0 left-0 right-0 -z-20 w-full h-full"></div>
      <div
        class="bg-[#000000] absolute top-0 bottom-0 left-0 right-0 -z-10 bg-opacity-70 w-full h-full"></div>
      <div
        class="footer container lg:gap-20 gap-10 flex mobilemd:flex-row flex-col sm:justify-evenly justify-center px-4 mx-auto mobilelg:flex-nowrap flex-wrap">
        <div
          class="flex flex-col mobilesm:gap-5 gap-3 lg:w-4/12 tabletlg:w-3/12 sm:w-3/12 w-8/12">
          <h1 class="scotchy-footer--title">Quicklinks</h1>

          <a href="index" class="scotchy-footer--links">Home</a>
          <a href="menu" class="scotchy-footer--links">Menu</a>

          <a class="scotchy-footer--links" href="about">About Us</a>
          <a class="scotchy-footer--links" href="blog">Blog</a>
          <a href="contact" class="scotchy-footer--links">Contact Us</a>
        </div>
        <div
          class="flex flex-col mobilesm:gap-5 gap-3 lg:w-4/12 tabletlg:w-5/12 sm:w-5/12 w-8/12">
          <h1 class="scotchy-footer--title">Contacts</h1>
          <a href="tel:317 445 8795" class="scotchy-footer--links"
            >Phone No: 317 445 8795</a
          >
          <a href="" class="scotchy-footer--links"
            >Address: 9713 District N Dr Suite #1210, Fishers, In 46037</a
          >
          <a href="mailto:info@scotchygrill.com" class="scotchy-footer--links"
            >Email:info@scotchygrill.com</a
          >
        </div>
        <div
          class="flex flex-col mobilesm:gap-5 gap-3 lg:w-4/12 tabletlg:w-4/12 sm:w-8/12 w-8/12">
          <div class="mobilelg:w-3/12 w-3/12">
            <img
              src="assets/icons/fav-icon.png"
              class="w-full h-full mobilesm:self-center"
              alt="" />
          </div>
          <div class="w-full">
            <span class="scotchy-footer--title">Scotchy Jamaican Grill</span>
            <p class="scotchy-footer--links text-base tabletlg:text-start w-80">
              A Jamaican Grill restaurant that aims to disrupt the fast-casual with flavour and culture.
            </p>
          </div>
        </div>
      </div>
      <div
        class="text-base scotchy-footer--links text-center tabletmd:mt-12 mt-10 mobilesm:w-full w-11/12">
        <p>
          Copyrights &copy; 2024 Scotchy Jamaican Grill. All Rights Reserved.
        </p>
      </div>
    </footer>

    <script type="module">
      const swiper = new Swiper(".swiper", {
        // Optional parameters
        effect: "coverflow",
        direction: "horizontal",
        loop: true,
        centeredSlides: true,
        centerInsufficientSlides: true,
        grabCursor: true,
        slidesPerView: "3",

        coverflowEffect: {
          rotate: 0,
          stretch: 0,
          depth: 200,
          modifier: 1,
          slideshadows: "true",
          scale: 1,
        },

        autoplay: {
          delay: 5000,
        },

        // If we need pagination
        pagination: {
          el: ".swiper-pagination",
        },

        // Navigation arrows
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },

        breakpoints: {
          // when window width is >= 320px
          320: {
            slidesPerView: 1.2,
            spaceBetween: 50,
          },
          // when window width is >= 480px
          480: {
            slidesPerView: 1.2,
            spaceBetween: 50,
          },
          567: {
            slidesPerView: 1.5,
            spaceBetween: 80,
          },
          // when window width is >= 640px
          640: {
            slidesPerView: 1.5,
            spaceBetween: 100,
          },
          800: {
            slidesPerView: 2,
            spaceBetween: 100,
          },
          992: {
            slidesPerView: 2.5,
            spaceBetween: 100,
          },
        },
      });
      const swiper2 = new Swiper(".swiper2", {
        pagination: ".swiper-pagination2",
        paginationClickable: true,
        // Optional parameters
        effect: "coverflow",
        direction: "horizontal",
        loop: true,
        crossfade: true,
        centeredSlides: true,
        centerInsufficientSlides: true,
        grabCursor: true,
        slidesPerView: "3",

        // perSlideOffset: 8,
        // perSlideRotate: 2,
        // rotate: true,
        coverflowEffect: {
          rotate: 0,
          stretch: 0,
          depth: 200,
          modifier: 1,
          slideshadows: "true",
          scale: 1,
        },

        autoplay: {
          delay: 5000,
        },

        // If we need pagination
        pagination: {
          el: ".swiper-pagination2",
        },

        // Navigation arrows
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },

        breakpoints: {
          // when window width is >= 320px
          // when window width is >= 320px
          320: {
            slidesPerView: 1,
            spaceBetween: 50,
          },
          // when window width is >= 480px
          480: {
            slidesPerView: 1,
            spaceBetween: 50,
          },
          567: {
            slidesPerView: 1,
            spaceBetween: 80,
          },
          // when window width is >= 640px
          640: {
            slidesPerView: 1.5,
            spaceBetween: 100,
          },
          800: {
            slidesPerView: 2,
            spaceBetween: 100,
          },
          992: {
            slidesPerView: 2.5,
            spaceBetween: 100,
          },
        },
      });
      const swiper3 = new Swiper(".swiper3", {
        pagination: ".swiper-pagination3",
        paginationClickable: true,
        // Optional parameters
        effect: "coverflow",
        direction: "horizontal",
        loop: false,
        crossfade: true,
        centeredSlides: false,
        centerInsufficientSlides: false,
        grabCursor: true,
       
        coverflowEffect: {
          rotate: 0,
          stretch: 0,
          depth: 200,
          modifier: 1,
          // slideshadows: "false",
          scale: 1,
        },

        autoplay: {
          delay: 5000,
        },

        // If we need pagination
        pagination: {
          el: ".swiper-pagination3",
        },

        // Navigation arrows
        navigation: {
          nextEl: ".swiper-button-next3",
          prevEl: ".swiper-button-prev3",
        },

        breakpoints: {
          // when window width is >= 320px
          // when window width is >= 320px
          320: {
            slidesPerView: 1,
            spaceBetween: 50,
          },
          345: {
            slidesPerView: 1,
            spaceBetween: 50,
          },
          // when window width is >= 480px
          480: {
            slidesPerView: 1,
            spaceBetween: 50,
          },
          567: {
            slidesPerView: 1,
            spaceBetween: 80,
          },
          // when window width is >= 640px
          640: {
            slidesPerView: 1,
            spaceBetween: 100,
          },
          // 767: {
          //   slidesPerView: 1.2,
          //   spaceBetween: 100,
          // },
          800: {
            slidesPerView: 1,
            spaceBetween: 50,
          },
          992: {
            slidesPerView:1.2,
            spaceBetween: 100,
          },
        },
      });
    
    </script>
    <script>
      AOS.init();
    </script>
  </body>
</html>