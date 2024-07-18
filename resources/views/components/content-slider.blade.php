<div class="mt-16 mx-auto w-11/12 p-8 pb-0">
  <div class="relative z-20">
    <h2 class="text-[#006BF6]  text-[29px] text-center">{{ $item->botontext1 }} 1</h2>
    <h1 class=" text-[56px] font-semibold text-center">{{ $item->title }}</h1>
    <div class="flex flex-col items-center justify-center w-full md:w-[591px] mx-auto">
      <h3 class="text-[17px]  text-center leading-9">{{ $item->description }}</h3>
    </div>
    <div class="flex flex-col items-center justify-center  mx-auto mt-3">
      <a href="{{ $item->link2 }}"
        class="bg-[#006BF6] text-sm font-semibold text-white text-center p-3 rounded-3xl flex items-center justify-center"
        type="button">
        {{ $item->botontext2 }}
        <img src="{{ asset('images/img/Vector.png') }}" alt="Icono" class="ml-2">
      </a>
    </div>

  </div>
  <div class="h-80 relative z-10">
    <img class="block h-80  mx-auto w-[75%] object-contain bottom-0 left-0 mt-[-100px]"
      src="{{ asset($item->url_image . $item->name_image) }}" alt="">
  </div>
</div>
