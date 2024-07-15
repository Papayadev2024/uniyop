<footer class="font-poppins bg-[#FFFFFF]  mt-5 pb-10">
  <div class="flex flex-col gap-10 md:flex-row md:justify-center w-11/12 mx-auto py-16 ">
    <div class="basis-1/4 flex flex-col gap-2">
      <h3 class="font-bold text-[19px]">Contacta con Nosotros</h3>
      <p>Boots Perú</p>
      <p>No. 1259 Av. Aviación, San Borja</p>
      <p>Lima - Perú</p>
      <p>+51 987 654 321</p>
      <p>hola@mail.com</p>


    </div>

    <div class="basis-1/4 flex flex-col gap-5">
      <h3 class="font-bold text-[19px]">Informacion</h3>

      <a href="/" class="font-normal text-[14px]">Inicio</a>
      <a href="{{ route('catalogo') }}" class="font-normal text-[14px]">Productos</a>
      <a href="{{ route('contacto') }}" class="font-normal text-[14px]">Blog</a>
    </div>

    <div class="basis-1/4 flex flex-col gap-5">
      <h3 class="font-bold text-[19px]">Servicio al Cliente</h3>

      <a href="/" class="font-normal text-[14px]">Contacto</a>
      <a href="/" class="font-normal text-[14px]">Politicas y Reglas </a>




      {{--  <a href="{{ route('librodereclamaciones') }}"><img class="w-28"
           src="{{ asset('images/img/reclamaciones.png') }}" /></a> --}}
    </div>

    <div class="basis-1/4 flex flex-col gap-5">
      <h3 class="font-bold text-[19px]">Unete al Blog</h3>
      <p>¡Suscríbete ahora para no perderte ninguno de nuestros artículos!</p>

      <div class="relative bg-[#F8F8F8] rounded-full p-2 px-4">
        <form action="#" method="POST" class="flex">
          @csrf
          <input type="email" name="email" placeholder="Dejanos tu email"
            class="w-full border-none  p-2 bg-[#F8F8F8]  " />
          <button type="submit" class=" text-[#444444] p-2 font-semibold">Enviar</button>
        </form>
      </div>


    </div>


  </div>

  <div class="bg-[#F8F8F8] mt-5 h-16 flex items-center justify-center">
    <div class="flex flex-col md:flex-row justify-between items-center gap-5 w-11/12">
      <div class="text-center">
        <p class="font-normal text-[14px]">
          Copyright &copy; 2023 Mundo Web. Reservados todos los derechos
        </p>
      </div>

      <div class="flex gap-2 items-center justify-center">
        <img src="{{ asset('images/svg/visa.svg') }}" alt="visa" class="h-6" />
        <img src="{{ asset('images/svg/american.svg') }}" alt="american" class="h-6" />
        <img src="{{ asset('images/svg/mastercad.svg') }}" alt="mastercad" class="h-6" />
        <img src="{{ asset('images/svg/stripe.svg') }}" alt="stripe" class="h-6" />
        <img src="{{ asset('images/svg/paypal.svg') }}" alt="paypal" class="h-6" />
        <img src="{{ asset('images/svg/pay.svg') }}" alt="pay" class="h-6" />
      </div>
    </div>
  </div>

  </div>



</footer>
