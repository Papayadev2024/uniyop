@extends('components.public.matrix', ['pagina' => 'index'])

@section('css_importados')

@stop

@php
  $bannersBottom = array_filter($banners, function ($banner) {
      return $banner['potition'] === 'bottom';
  });
  $bannerMid = array_filter($banners, function ($banner) {
      return $banner['potition'] === 'mid';
  });
@endphp

@section('content')

  <main class="z-[15] ">

    <section class="bg-[#f1f1f1] ">
      <x-swipper-card :items="$slider" />
    </section>

    {{-- Seccion Categoria  --}}
    @if ($categorias->count() > 0)
      <x-sections.simple title="Categorias">
        <x-swipper-card-categoria :items="$categorias" />
      </x-sections.simple>
    @endif


    {{-- seccion Ultimos Productos  --}}
    @if ($ultimosProductos->count() > 0)
      <section class="w-full px-[5%] py-10 lg:py-20">
        <div class="flex flex-col md:flex-row justify-between w-full gap-3" data-aos="zoom-out-left">
          <h1 class="text-2xl md:text-3xl font-semibold font-Inter_Medium text-[#323232]">Últimos productos agregados</h1>
          <a href="/catalogo" class="flex items-center text-base font-Inter_Medium font-semibold text-[#006BF6] ">Ver todos
            los productos <img src="{{ asset('images/img/arrowBlue.png') }}" alt="Icono" class="ml-2 "></a>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-5 md:flex-row gap-4 mt-14 w-full">
          @foreach ($ultimosProductos as $item)
            <x-product.container width="col-span-1 " bgcolor="" :item="$item" />
            {{-- <x-productos-card width="w-1/5" bgcolor="" :item="$item" /> --}}
          @endforeach
        </div>
      </section>
    @endif


    {{-- seccion Gran Descuento  --}}
    @if (count($bannerMid) > 0)
      <section class="flex flex-col md:flex-row justify-between bg-[#EEEEEE] mt-14" data-aos="fade-down-right">
        <x-banner-section :banner="$bannerMid" />
      </section>
    @endif

    {{-- seccion Productos populares  --}}
    @if ($productosPupulares->count() > 0)
      <section class=" bg-[#F8F8F8]">
        <div class="w-full px-[5%] py-14 lg:py-20" data-aos="fade-down-left">
          <div class="flex flex-col md:flex-row justify-between w-full gap-3">
            <h1 class="text-2xl md:text-3xl font-semibold font-Inter_Medium text-[#323232]">Productos Destacados</h1>
            {{-- <div class="flex  flex-col md:flex-row gap-2 md:gap-8">
              <a href="/catalogo" class="flex items-center   font-Inter_Medium  hover:text-[#006BF6] ">Todos</a>
              @foreach ($categoriasAll as $item)
                <a href="/catalogo/{{ $item->id }}"
                  class="flex items-center font-Inter_Medium  hover:text-[#006BF6]  transition ease-out duration-300 transform  ">{{ $item->name }}
                </a>
              @endforeach
            </div> --}}
          </div>
          @foreach ($productosPupulares->chunk(4) as $taken)
            <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 md:flex-row gap-4 mt-14 w-full">
              @foreach ($taken as $item)
                <x-product.container width="w-1/4" bgcolor="bg-[#FFFFFF]" :item="$item" />
                {{-- <x-productos-card width="w-1/4" bgcolor="bg-[#FFFFFF]" :item="$item" /> --}}
              @endforeach
            </div>
          @endforeach
        </div>
      </section>
    @endif

    {{-- Seccion Blog --}}
    @if ($blogs->count() > 0)
      <section class="w-full px-[5%] py-7 lg:py-14" data-aos="fade-up">
        <div class="flex flex-col md:flex-row justify-between w-full gap-3">
          <h1 class="text-2xl md:text-3xl font-semibold font-Inter_Medium text-[#323232]">Blog & Eventos</h1>
          <a href="/blog/0" class="flex items-center text-base font-Inter_Medium font-semibold text-[#006BF6]">Ver todos
            las Publicaciones <img src="{{ asset('images/img/arrowBlue.png') }}" alt="Icono" class="ml-2 "></a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 mt-14 gap-10 sm:gap-5">
          @foreach ($blogs as $post)
            <x-blog.container-post :post="$post" />
          @endforeach
        </div>

      </section>
    @endif


    {{-- gran descuento --}}
    @if (count($bannersBottom) > 0)
      <section class="w-full px-[5%] mt-7 lg:mt-10 " data-aos="zoom-out-right">
        <div class="bg-gradient-to-b from-gray-50 to-white flex flex-col md:flex-row justify-between bg-[#EEEEEE]">
          <x-banner-section :banner="$bannersBottom" />
        </div>
      </section>
    @endif


    @if ($benefit->count() > 0)
      <section class="py-10 lg:py-13 bg-[#F8F8F8] w-full px[5%]" data-aos="zoom-out-right">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 ">
          @foreach ($benefit as $item)
            <div class="flex flex-col items-center w-full gap-1 justify-center text-center px-[10%] xl:px-[18%]">
              <img src="{{ asset($item->icono) }}" alt="">
              <h4 class="text-xl font-bold font-Inter_Medium"> {{ $item->titulo }} </h4>
              <div class="text-lg leading-8 text-[#444444] font-Inter_Medium">{!! $item->descripcionshort !!}</div>
            </div>
          @endforeach
        </div>
      </section>
    @endif



  </main>
  {{-- modalOfertas --}}



  <!-- Modal toggle -->


  <!-- Main modal -->

  <div id="modalofertas" class="modal">

    <!-- Modal body -->
    <div class="p-1 ">
      <x-swipper-card-ofertas :items="$popups" id="modalOfertas" />
    </div>


  </div>


@section('scripts_importados')

  <script>
    let pops = @json($popups);
    $(document).ready(function() {
      console.log(pops.length)
      if (pops.length > 0) {
        $('#modalofertas').modal({
          show: true,
          fadeDuration: 100
        })

      }

    })
  </script>


@stop

@stop
