<div class="flex flex-col items-center w-full gap-4  justify-center">
  <span class="text-[#666666]">
    @foreach ($banner as $item)
      {{ $item['title'] }}
    @endforeach
  </span>
  <h2 class="text-2xl ">
    @foreach ($banner as $item)
      {{ $item['description'] }}
    @endforeach
  </h2>
  <h3 class="text-2xl font-bold text-[#15294C]">
    @foreach ($banner as $item)
      {{ $item['price'] }}
    @endforeach
  </h3>
  <button
    class="bg-[#006BF6] text-sm font-semibold text-white text-center p-3 rounded-3xl flex items-center justify-center w-32"
    type="button">

    @foreach ($banner as $item)
      {{ $item['title_btn'] }}
    @endforeach

  </button>
</div>
<div class="w-full flex items-center justify-center content-center relative">
  @foreach ($banner as $item)
    <img src="{{ asset($item['image']) }}" alt="" class=" w-[28rem] object-cover object-center absolute">
  @endforeach

</div>
