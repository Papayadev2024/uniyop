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

    <section class="bg-[#f8f8f8] ">
      <x-swipper-card :items="$slider" />

    </section>

    {{-- Seccion Categoria  --}}
    @if ($categorias->count() > 0)

      <x-sections.simple title="Categorias">

        @foreach ($categorias->take(2) as $item)
          <x-content-categoria :item="$item" />
        @endforeach

      </x-sections.simple>

    @endif

    @if ($ultimosProductos->count() > 0)
      <section class="w-11/12 mx-auto ">
        <div class="flex flex-row justify-between mt-20 w-full px-16">
          <h1 class="text-[29px] font-semibold">Últimos productos</h1>
          <a href="/catalogo" class="flex items-center font-semibold text-[#006BF6] ">Ver todos los productos <img
              src="{{ asset('images/img/arrowBlue.png') }}" alt="Icono" class="ml-2 "></a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-5 md:flex-row gap-4 mt-14 w-full px-16">

          @foreach ($ultimosProductos as $item)
            <x-product.container width="col-span-1 " bgcolor="" :item="$item" />

            {{-- <x-productos-card width="w-1/5" bgcolor="" :item="$item" /> --}}
          @endforeach


        </div>

      </section>
    @endif
    {{-- seccion Ultimos Productos  --}}


    {{-- seccion Gran Descuento  --}}

    @if (count($bannerMid) > 0)
      <section class="flex flex-row justify-between bg-[#EEEEEE] mt-14 min-h-[450px] ">

        <x-banner-section :banner="$bannerMid" />

      </section>
    @endif


    @if ($productosPupulares->count() > 0)
      {{-- seccion Productos populares  --}}
      <section class=" bg-[#F8F8F8]">
        <div class="w-11/12 mx-auto pt-[75px]  pb-[75px] px-16">
          <div class="flex flex-row justify-between w-full">
            <h1 class="text-[29px] font-semibold text-[#323232]">Productos Populares</h1>
            <div class="flex  flex-col md:flex-row gap-2 md:gap-8">

              <a href="/catalogo" class="flex items-center   font-Inter_Medium  hover:text-[#006BF6] ">Todos
              </a>

              @foreach ($categoriasAll as $item)
                <a href="/catalogo/{{ $item->id }}"
                  class="flex items-center font-Inter_Medium  hover:text-[#006BF6]  transition ease-out duration-300 transform  ">{{ $item->name }}
                </a>
              @endforeach


            </div>

          </div>


          @foreach ($productosPupulares->chunk(4) as $taken)
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-4 w-full">
              @foreach ($taken as $item)
                <x-product.container width="w-1/4" bgcolor="bg-[#FFFFFF]" :item="$item" />
                {{-- <x-productos-card width="w-1/4" bgcolor="bg-[#FFFFFF]" :item="$item" /> --}}
              @endforeach

            </div>
          @endforeach





        </div>

      </section>

    @endif

    @if ($blogs->count() > 0)
      {{-- Seccion Blog --}}

      <section class="w-11/12 mx-auto mt-14">
        <div class="flex flex-row justify-between w-full px-16">
          <h1 class="text-[29px] font-semibold text-[#323232]">Blog & Eventos</h1>
          <a href="/blog/0" class="flex items-center font-semibold text-[#006BF6] ">Ver todos las Publicaciones <img
              src="{{ asset('images/img/arrowBlue.png') }}" alt="Icono" class="ml-2 "></a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 mt-14 gap-4 px-16">
          @foreach ($blogs as $item)
            <div class="flex flex-col  text-start bg-[#FFFFFF]">

              <a href="/post/{{ $item->id }}">
                <img src="{{ asset($item->url_image . $item->name_image) }}" alt="" class="w-full   object-cover">
              </a>

              <div class="flex content-between flex-col gap-4 mt-4 w-full">
                <div class="text-sm w-full">
                  <img src="{{ asset('images\img\calendar.png') }}" alt="" class="mr-2 inline">
                  {{ $item->created_at->translatedFormat('j \\d\\e F \\d\\e Y') }}

                </div>
                <div class="text-lg">{{ $item->title }}</div>
              </div>

            </div>
          @endforeach



        </div>

      </section>
    @endif



    @if (count($bannersBottom) > 0)
      {{-- gran descuento --}}
      <section class="w-11/12 mx-auto mt-14 ">
        <div class="bg-gradient-to-b from-gray-50 to-white flex flex-row justify-between  min-h-[450px] ">
          <x-banner-section :banner="$bannersBottom" />

        </div>


      </section>
    @endif


    @if ($benefit->count() > 0)
      <section class="mt-4 md:mt-14 bg-[#F8F8F8]">

        <div class="grid grid-cols-1 md:grid-cols-3 w-11/12 mx-auto p-2 md:p-10 ">
          @foreach ($benefit as $item)
            <div class="flex flex-col items-center w-full gap-3 justify-center text-center">
              <img src="{{ asset($item->icono) }}" alt="">
              <h4 class="text-xl font-bold"> {{ $item->titulo }} </h4>
              <span class="text-lg py-2 px-5 2xl:px-16 leading-8">{!! $item->descripcion !!}</span>
            </div>
          @endforeach

        </div>

      </section>

    @endif



  </main>


@section('scripts_importados')




@stop

@stop
