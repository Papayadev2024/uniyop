<footer class="font-Inter_Medium bg-[#FFFFFF] mt-5">

  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 md:justify-center w-full px-[5%] py-8 lg:py-16 ">

    <div class="flex flex-col text-[#444444] text-base gap-1">
      <h3 class="font-bold text-xl text-[#333333] pb-3">Contacta con Nosotros</h3>
      <p>{{ config('app.name') }}</p>
      <p>{{ $datosgenerales->address }}</p>
      <p> {{ $datosgenerales->city }} - {{ $datosgenerales->country }}</p>
      <p>{{ $datosgenerales->cellphone }}</p>
      <p>{{ $datosgenerales->email }}</p>
    </div>

    <div class="flex flex-col text-[#444444] text-base gap-1">
      <h3 class="font-bold text-xl text-[#333333] pb-3">Información</h3>
      <a href="/">Inicio</a>
      <a href="{{ route('Catalogo.jsx') }}">Productos</a>
      <a href="{{ route('blog', 0) }}">Blog</a>
    </div>

    <div class="flex flex-col text-[#444444] text-base gap-1">
      <h3 class="font-bold text-xl text-[#333333] pb-3">Servicio al Cliente</h3>
      <a href="/contacto">Contacto</a>
      <a href="#">Politicas y Reglas </a>
      {{--  <a href="{{ route('librodereclamaciones') }}"><img class="w-28"
           src="{{ asset('images/img/reclamaciones.png') }}" /></a> --}}
    </div>

    <div class=" flex flex-col gap-2 text-[#444444] text-base">
      <h3 class="font-bold text-xl text-[#333333] pb-3">Únete al Blog</h3>
      <p>¡Suscríbete ahora para no perderte ninguno de nuestros artículos!</p>
      <div class="relative bg-[#F8F8F8] rounded-full p-2 px-4">
        <form action="#" method="POST" class="flex">
          @csrf
          <input type="email" name="email" placeholder="Déjanos tu e-mail"
            class="w-full border-none focus:border-transparent ring-0 focus:ring-0 p-2 bg-[#F8F8F8]" />
          <button type="submit" class=" text-[#444444] p-2 font-semibold">Enviar</button>
        </form>
      </div>
    </div>

  </div>

  <div class="bg-[#F8F8F8] py-4 flex items-center justify-center">
    <div class="flex flex-col lg:flex-row justify-between items-center gap-5 w-full px-[5%]">
      <div class="text-center">
        <p class="font-normal text-sm text-[#444444]">
          Copyright &copy; 2023 Mundo Web. Reservados todos los derechos
        </p>
      </div>
      <div class="flex gap-2 items-center justify-center">
        <img src="{{ asset('images/svg/visa.svg') }}" alt="visa" class="h-7 md:h-10" />
        <img src="{{ asset('images/svg/american.svg') }}" alt="american" class="h-7 md:h-10" />
        <img src="{{ asset('images/svg/mastercad.svg') }}" alt="mastercad" class="h-7 md:h-10" />
        <img src="{{ asset('images/svg/stripe.svg') }}" alt="stripe" class="h-7 md:h-10" />
        <img src="{{ asset('images/svg/paypal.svg') }}" alt="paypal" class="h-7 md:h-10" />
        <img src="{{ asset('images/svg/pay.svg') }}" alt="pay" class="h-7 md:h-10" />
      </div>
    </div>
  </div>

</footer>
