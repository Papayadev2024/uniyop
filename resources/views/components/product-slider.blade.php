<div class="col-span-3 h-full" data-aos="fade-up" data-aos-offset="150">
  <!-- Asegúrate de que este div tome todo el alto disponible -->
  <div class="swiper h-full img-complementarias"> <!-- Asegura que el swiper tome todo el alto -->

    <div class="swiper-wrapper gap-2 h-full"> <!-- Asegura que el wrapper tome todo el alto -->
      @foreach ($product->galeria as $image)
        <div class="swiper-slide w-full h-full col-span-1"> <!-- Asegura que cada slide tome todo el alto -->
          <div class="flex gap-2 items-center justify-start h-full">
            <!-- Asegura que este div tome todo el alto -->
            <div class="flex justify-center items-center h-full">
              <!-- Asegura que este div tome todo el alto -->

              {{-- Verifica si la imagen no es la carátula --}}
              <img class="size-full object-cover h-full w-full shadow-xl"
                src="{{ $image->imagen ? asset($image->imagen) : asset('images/img/noimagen.jpg') }}" />

            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>

<script>
  var headerServices = new Swiper(".img-complementarias", {
    slidesPerView: 3,
    spaceBetween: 0,
    loop: true,
    centeredSlides: false,
    initialSlide: 0, // Empieza en el cuarto slide (índice 3) */
    /* pagination: {
      el: ".swiper-pagination-estadisticas",
      clickable: true,
    }, */
    //allowSlideNext: false,  //Bloquea el deslizamiento hacia el siguiente slide
    //allowSlidePrev: false,  //Bloquea el deslizamiento hacia el slide anterior
    allowTouchMove: true, // Bloquea el movimiento táctil
    autoplay: {
      delay: 5500,
      disableOnInteraction: true,
      pauseOnMouseEnter: true
    },

    breakpoints: {
      0: {
        slidesPerView: 1,
        centeredSlides: false,
        loop: true,
      },
      1024: {
        slidesPerView: 3,
        centeredSlides: false,

      },
    },
  });
</script>
