@extends('components.public.matrix', ['pagina' => 'catalogo'])

@section('css_importados')


@stop


@section('content')

  @php
    $breadcrumbs = [['title' => 'Inicio', 'url' => route('index')], ['title' => 'Blogs', 'url' => '']];
  @endphp

  @component('components.breadcrumbs', ['breadcrumbs' => $breadcrumbs])
  @endcomponent

  <div class="flex flex-col md:flex-row md:gap-10 w-11/12 mx-auto font-poppins mt-16">
    <section class="flex flex-col gap-10 md:basis-3/12   ">
      <button class="w-full h-12 bg-[#F1F1F1] text-[15px] text-center font-medium rounded-lg" type="button"> Limpiar
        Todo</button>
      <div class="flex flex-col gap-4">
        <h2 class="font-semibold">Precio </h2>
        <p class="font-normal text-[12px] text-[#666666]"> 0 Seleccionados </p>
        <div class="flex flex-row gap-4">
          <input type="text" class="w-24 rounded-xl custom-border" placeholder="S/ 00.00">
          <input type="text" class="w-24 rounded-xl custom-border" placeholder="S/ 00.00">
        </div>
        <button class="text-white bg-[#0168EE] rounded-md font-bold h-10 w-24"> Filtrar</button>

      </div>
      <div class="flex flex-col gap-4">
        <h2 class="font-semibold">Marca </h2>
        <p class="font-normal text-[12px] text-[#666666]"> 0 Seleccionados </p>
        <div class="flex flex-col gap-4 ">
          <div class="flex flex-row gap-2  items-center">
            <input type="checkbox" class="bg-[#DEE2E6] rounded-sm  border-none"> <span class="text-custom-border "> Marca
              Uno (1)
            </span>

          </div>
          <div class="flex flex-row gap-2 items-center">
            <input type="checkbox" class=" bg-[#DEE2E6] rounded-sm  border-none"> <span class="text-custom-border"> Marca
              Dos
              (4) </span>

          </div>
          <div class="flex flex-row gap-2 items-center">
            <input type="checkbox" class=" bg-[#DEE2E6] rounded-sm border-none "> <span class="text-custom-border"> Marca
              Tres
              (3) </span>

          </div>
          <div class="flex flex-row gap-2 items-center">
            <input type="checkbox" class=" bg-[#DEE2E6] rounded-sm border-none"> <span class="text-custom-border"> Marca
              Cuatro
              (2)
            </span>

          </div>


        </div>
        <button class="text-white bg-[#0168EE] rounded-md font-bold h-10 w-24"> Filtrar</button>

      </div>
      <div class="flex flex-col gap-4">
        <h2 class="font-semibold">Tamaño </h2>
        <p class="font-normal text-[12px] text-[#666666]"> 0 Seleccionados </p>
        <div class="flex flex-col gap-4 ">
          <div class="flex flex-row gap-2  items-center">
            <input type="checkbox" class="bg-[#DEE2E6] rounded-sm  border-none"> <span class="text-custom-border "> Marca
              Uno (1)
            </span>

          </div>
          <div class="flex flex-row gap-2 items-center">
            <input type="checkbox" class=" bg-[#DEE2E6] rounded-sm  border-none"> <span class="text-custom-border"> Marca
              Dos
              (4) </span>

          </div>
          <div class="flex flex-row gap-2 items-center">
            <input type="checkbox" class=" bg-[#DEE2E6] rounded-sm border-none "> <span class="text-custom-border"> Marca
              Tres
              (3) </span>

          </div>
          <div class="flex flex-row gap-2 items-center">
            <input type="checkbox" class=" bg-[#DEE2E6] rounded-sm border-none"> <span class="text-custom-border"> Marca
              Cuatro
              (2)
            </span>

          </div>


        </div>
        <button class="text-white bg-[#0168EE] rounded-md font-bold h-10 w-24"> Filtrar</button>

      </div>
      <div class="flex flex-col gap-4">
        <h2 class="font-semibold">Color </h2>
        <p class="font-normal text-[12px] text-[#666666]"> 0 Seleccionados </p>
        <div class="flex flex-col gap-4 ">
          <div class="flex flex-row gap-2  items-center">
            <input type="checkbox" class="bg-[#DEE2E6] rounded-sm  border-none"> <span class="text-custom-border "> Marca
              Uno (1)
            </span>

          </div>
          <div class="flex flex-row gap-2 items-center">
            <input type="checkbox" class=" bg-[#DEE2E6] rounded-sm  border-none"> <span class="text-custom-border"> Marca
              Dos
              (4) </span>

          </div>
          <div class="flex flex-row gap-2 items-center">
            <input type="checkbox" class=" bg-[#DEE2E6] rounded-sm border-none "> <span class="text-custom-border"> Marca
              Tres
              (3) </span>

          </div>
          <div class="flex flex-row gap-2 items-center">
            <input type="checkbox" class=" bg-[#DEE2E6] rounded-sm border-none"> <span class="text-custom-border"> Marca
              Cuatro
              (2)
            </span>

          </div>


        </div>
        <button class="text-white bg-[#0168EE] rounded-md font-bold h-10 w-24"> Filtrar</button>

      </div>
    </section>
    <section class="flex flex-col gap-10 md:basis-9/12   ">

      <div class="grid grid-cols-2 gap-4">
        <div class="flex flex-col h-10 w-full bg-gray-500">HERE</div>
        <div class="flex flex-col h-10 w-full bg-gray-500">HERE</div>

      </div>
      <div class="w-full h-12     font-medium flex flex-row justify-center items-center">
        <div><span class="font-normal text-[17px] text-[#666666] ml-3">Paginacion Laravel </span></div>

      </div>
    </section>
  </div>









@section('scripts_importados')


  <script src="{{ asset('js/storage.extend.js') }}"></script>


@stop

@stop
