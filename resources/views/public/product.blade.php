@extends('components.public.matrix', ['pagina' => 'catalogo'])

@section('css_importados')

@stop



@section('content')
  <?php
  // Definición de la función capitalizeFirstLetter()
  // function capitalizeFirstLetter($string)
  // {
  //     return ucfirst($string);
  // }
  ?>

  <style>
    .swiper-pagination-bullet-active {
      background-color: #272727;
    }

    .swiper-pagination-bullet:not(.swiper-pagination-bullet-active) {
      background-color: #979693 !important;
    }

    .blocker {
      z-index: 20;
    }
  </style>
  @php
    $images = ['', '_ambiente'];
    $x = $product->toArray();
    $i = 1;
  @endphp
  <main class="font-poppins" id="mainSection">
    @csrf
    @php
      $breadcrumbs = [['title' => 'Inicio', 'url' => route('index')], ['title' => 'Producto', 'url' => '']];
    @endphp

    @component('components.breadcrumbs', ['breadcrumbs' => $breadcrumbs])
    @endcomponent
    <section class="flex flex-col gap-10 md:flex-row md:gap-24 w-11/12 m-auto">
      <div class="grid grid-col-1  gap-1  w-full mt-10">
        <div class=" col-span-1">
          <div class="bg-gray-300 w-full h-[400px] ">

          </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 w-full">
          <div class=" col-span-1">
            <div class="bg-gray-300 w-full h-[200px]">

            </div>
          </div>
          <div class=" col-span-1">
            <div class="bg-gray-300 w-full h-[200px]">

            </div>
          </div>
          <div class=" col-span-1">
            <div class="bg-gray-300 w-full h-[200px]">

            </div>
          </div>

        </div>
      </div>
      <div class="flex flex-col gap-6 w-full mt-10">
        <div class="flex flex-col gap-3">
          <h3 class="font-normal text-3xl"> Cargador DRosafe</h3>
          <p class="font-normal text-sm gap-2">Disponibilidad: <span class="text-[#006BF6]">Quedan 5 en stock</span> </p>

        </div>
        <div class="flex flex-col gap-5 ">
          <p class="font-normal text-sm gap-2">SKU: 202 </p>

          <div class="flex flex-row gap-3 content-center items-center">
            <div class=" content-center flex flex-row gap-2 items-center">
              <span class="font-bold text-2xl gap-2 text-[#006BF6]">S/ 55.00</span>

              <span class="text-[#666666] font-normal line-through text-sm">S/ 75.00</span>
            </div>
            <span
              class="font-medium text-center  content-center text-xs gap-2 bg-[#006BF6] text-white h-8 w-14 rounded-3xl">
              -27% </span>

          </div>
          <p class="text-sm leading-6 "> Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit
            laboriosam,
            nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea
            voluptate velit esse quam nihil molestiae consequatur.</p>

        </div>
        <div class="flex flex-col gap-6">
          <div class="flex flex-row gap-3 text-center">
            <span>Tamaño:</span>
            <span class="rounded-md bg-[#006BF6] h-6 w-10 text-white text-sm"> S</span>
            <span class="rounded-md bg-[#F7F8FA] h-6 w-10 text-sm"> M </span>
            <span class="rounded-md bg-[#F7F8FA] h-6 w-10 text-sm"> L </span>
          </div>
          <div class="flex flex-row gap-3 text-center">
            <span>Color:</span>
            <span class="rounded-full bg-[#D9D9D9] h-6 w-6 text-white text-sm"> </span>
            <span class="rounded-full bg-[#D9D9D9] h-6 w-6 text-sm"> </span>
            <span class="rounded-full bg-[#D9D9D9] h-6 w-6 text-sm"> </span>
          </div>
          <div class="flex flex-row gap-3 text-center">
            <span>Model:</span>
            <span class="rounded-md bg-[#006BF6] h-6 w-24 text-white text-sm"> iphone 11</span>
            <span class="rounded-md bg-[#F7F8FA] h-6 w-24 text-sm"> iphone 12 </span>
            <span class="rounded-md bg-[#F7F8FA] h-6 w-24 text-sm"> iphone 13 </span>
          </div>

        </div>
        <div class="flex flex-row gap-6">
          <div class="flex flex-row gap-2 items-center">
            <i class="h-5 w-5 inline-block"
              style="background-image: url('{{ asset('images/img/regla.png') }}'); background-size: contain; background-position: center; background-repeat: no-repeat;"></i>
            <a href="" class=""> Guias y mediddas</a>
          </div>
          <div class="flex flex-row gap-2 items-center">
            <i class="h-5 w-5 inline-block"
              style="background-image: url('{{ asset('images/img/carrito.png') }}'); background-size: contain; background-position: center; background-repeat: no-repeat;"></i>
            <a href="" class=""> Envio</a>
          </div>
          <div class="flex flex-row gap-2 items-center">
            <i class="h-5 w-5 inline-block"
              style="background-image: url('{{ asset('images/img/mail.png') }}'); background-size: contain; background-position: center; background-repeat: no-repeat;"></i>
            <a href="" class="">Preguntar sobre este producto</a>
          </div>
        </div>

        <div class="flex flex-col gap-4">
          <div class="flex flex-row gap-5">
            <div class="flex flex-row border border-[#CCCCCC] rounded-lg">
              <button type="button" class=" w-4 px-4 ">-</button>
              <input type="text" class="w-12 text-center  rounded-md border-none" value="1">
              <button type="button" class="w-4 px-4">+</button>

            </div>

            <button class="bg-[#0D2E5E] w-60 text-white text-center rounded-3xl font-bold"> Agregar al Carrito </button>
            <button class="bg-[#0D2E5E] w-12 h-12 rounded-full text-white flex justify-center items-center">
              <img src="{{ asset('images/img/blanco.png') }}" alt="" class="w-8 h-8">
            </button>

          </div>

        </div>
        <div class="flex flex-col mt-9">
          <h6 class="">Combinalo con: </h6>
          <div class="grid grid-cols-3 gap-3  mb-6">
            <div class="flex flex-col items-center justify-center col-span-1  shadow-lg py-2  pb-5">
              <img src="{{ asset('images\img\1.png') }}" alt="" class="h-40 w-40 ">
              <span>Droubook space gray</span>
              <h2 class="font-bold text-[#006BF6]">S/ 80.00</h2>
            </div>
            <div class="flex flex-col items-center justify-center col-span-1 shadow-lg pb-5">
              <img src="{{ asset('images\img\2.png') }}" alt="" class="h-40 w-40 ">
              <span>DrouPods Pro white</span>
              <h2 class="font-bold text-[#006BF6]">S/ 39.00</h2>
            </div>
            <div class="flex flex-col items-center justify-center col-span-1 shadow-lg pb-5">
              <img src="{{ asset('images\img\3.png') }}" alt="" class="h-40 w-40 ">
              <span>lPhone 13 white color</span>
              <h2 class="font-bold text-[#006BF6]">S/ 110.00</h2>
            </div>


          </div>

        </div>
        <div class="flex flex-col mt-9 gap-2">
          <span>
            Pago seguro garantizado
          </span>
          <div class="flex flex-row gap-4">
            <img src="{{ asset('images\svg\amazon.png') }}" alt="" class="h-9 w-14">
            <img src="{{ asset('images\svg\american.svg') }}" alt="" class="h-9 w-14">
            <img src="{{ asset('images\svg\applepay.png') }}" alt="" class="h-9 w-14">
            <img src="{{ asset('images\svg\bitcoin.png') }}" alt="" class="h-9 w-14">
            <img src="{{ asset('images\svg\Vector-1.svg') }}" alt="" class="h-9 w-14">
            <img src="{{ asset('images\svg\gpay.png') }}" alt="" class="h-9 w-14">

            <img src="{{ asset('images\svg\visa.svg') }}" alt="" class="h-9 w-14">

            <img src="{{ asset('images\svg\paypal.svg') }}" alt="" class="h-9 w-14">
          </div>
          <div class="flex flex-row gap-4 mt-6">
            <span>Compartir</span>
            <img src="{{ asset('images\svg\gb.svg') }}" alt="" class="h-8 w-8">
            <img src="{{ asset('images\svg\twitter.svg') }}" alt="" class="h-8 w-8">
            <img src="{{ asset('images\svg\pinterest.svg') }}" alt="" class="h-8 w-8">
          </div>
        </div>

      </div>
    </section>
    <section class="bg-[#F8F8F8]">
      <div class="w-11/12 mx-auto pt-20 ">
        <div class="flex flex-row justify-between w-full ">
          <h1 class="text-[29px] font-semibold">Productos Relacionados</h1>
          <a href="" class="flex items-center font-semibold text-[#006BF6] ">Ver todos los productos <img
              src="{{ asset('images/img/arrowBlue.png') }}" alt="Icono" class="ml-2 "></a>
        </div>
        <div class="grid grid-cols-4 gap-4 mt-14 w-full">
          <div class="col-span-1 flex flex-col justify-center items-center text-center bg-white shadow-lg py-2  pb-5">
            <img src="{{ asset('images\img\img1.png') }}" alt="" class="w-full   object-cover">
            <h2 class="text-xl mt-4  ">
              Drou watch ultra
            </h2>
            <div class="flex content-between flex-row gap-4">
              <span class="text-[#006BF6] text-base font-semibold">S/ 70.00</span>
              <span class="text-sm text-[#15294C] opacity-60 line-through">S/ 85.00</span>
            </div>

          </div>
          <div class="col-span-1 flex flex-col justify-center items-center text-center bg-white shadow-lg py-2  pb-5">
            <img src="{{ asset('images\img\img2.png') }}" alt="" class="w-full   object-cover">
            <h2 class="text-xl mt-4 ">
              Laptop Lenovo Gris
            </h2>
            <div class="flex content-between flex-row gap-4">
              <span class="text-[#006BF6] text-base font-semibold">S/ 80.00</span>


            </div>

          </div>
          <div class="col-span-1 flex flex-col justify-center items-center text-center bg-white shadow-lg py-2  pb-5">
            <img src="{{ asset('images\img\img3.png') }}" alt="" class="w-full   object-cover">
            <h2 class="text-xl mt-4 ">
              Homepod mini 2022
            </h2>
            <div class="flex content-between flex-row gap-4">
              <span class="text-[#006BF6] text-base font-semibold">S/ 39.00</span>
              <span class="text-sm text-[#15294C] opacity-60 line-through">S/ 60.00</span>
            </div>


          </div>
          <div class="col-span-1 flex flex-col justify-center items-center text-center bg-white shadow-lg py-2  pb-5">
            <img src="{{ asset('images\img\img4.png') }}" alt="" class="w-full   object-cover">
            <h2 class="text-xl mt-4 ">
              DroSafe Charger
            </h2>
            <div class="flex content-between flex-row gap-4">

              <span class="text-[#006BF6] text-base font-semibold">S/ 55.00</span>
              <span class="text-sm text-[#15294C] opacity-60 line-through">S/ 75.00</span>

            </div>

          </div>
        </div>
      </div>

    </section>
    <section class="">
      <div class="w-11/12 mx-auto pt-20 ">
        <h3 class="text-[30px] font-medium"> ¿Qué dicen los clientes sobre nosotros?</h3>

        <div class="grid grid-cols-3 w-full gap-8 pt-20">
          <div class="flex flex-col bg-[#F7F7F7] col-span-1 p-7 gap-6">
            <div class="flex items-center gap-4"> <!-- Contenedor Flex para la imagen y el texto -->
              <p class="font-medium text-[20px] flex-1">Gran calidad</p>
              <!-- flex-1 hace que el texto ocupe el espacio disponible -->
              <img src="{{ asset('images\svg\icons8-comillas-48.png') }}" alt=""
                class="w-10 h-10 rounded-full">
            </div>
            <p class="font-normal text-[16px]">Duis auctor eros id risus fringilla, eget porta leo vestibulum. Morbi
              mollis ligula non dui consectetur, a rhoncus nulla dictum. Etiam mattis pulvinar ipsum.
            </p>
            <div class="font-bold text-[20px] w-5">
              Ademir Neyra
            </div>
            <p class="text-[13px] font-normal">Lima, Peru</p>
          </div>
          <div class="flex flex-col bg-[#F7F7F7] col-span-1 p-7 gap-6">
            <div class="flex items-center gap-4"> <!-- Contenedor Flex para la imagen y el texto -->
              <p class="font-medium text-[20px] flex-1">Gran calidad</p>
              <!-- flex-1 hace que el texto ocupe el espacio disponible -->
              <img src="{{ asset('images\svg\icons8-comillas-48.png') }}" alt=""
                class="w-10 h-10 rounded-full">
            </div>
            <p class="font-normal text-[16px]">Duis auctor eros id risus fringilla, eget porta leo vestibulum. Morbi
              mollis ligula non dui consectetur, a rhoncus nulla dictum. Etiam mattis pulvinar ipsum.
            </p>
            <div class="font-bold text-[20px] w-5">
              Ademir Neyra
            </div>
            <p class="text-[13px] font-normal">Lima, Peru</p>
          </div>
          <div class="flex flex-col bg-[#F7F7F7] col-span-1 p-7 gap-6">
            <div class="flex items-center gap-4"> <!-- Contenedor Flex para la imagen y el texto -->
              <p class="font-medium text-[20px] flex-1">Gran calidad</p>
              <!-- flex-1 hace que el texto ocupe el espacio disponible -->
              <img src="{{ asset('images\svg\icons8-comillas-48.png') }}" alt=""
                class="w-10 h-10 rounded-full">
            </div>
            <p class="font-normal text-[16px]">Duis auctor eros id risus fringilla, eget porta leo vestibulum. Morbi
              mollis ligula non dui consectetur, a rhoncus nulla dictum. Etiam mattis pulvinar ipsum.
            </p>
            <div class="font-bold text-[20px] w-5">
              Ademir Neyra
            </div>
            <p class="text-[13px] font-normal">Lima, Peru</p>
          </div>
        </div>


      </div>


    </section>


  </main>

@section('scripts_importados')


@stop

@stop
