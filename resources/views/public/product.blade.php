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
        <div class="flex flex-col">
          <h6 class="">Combinalo con: </h6>
          <div class="grid grid-3">

          </div>

        </div>

      </div>
    </section>

  </main>

@section('scripts_importados')


@stop

@stop
