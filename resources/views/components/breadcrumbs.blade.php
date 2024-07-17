@if (isset($breadcrumbs) && is_array($breadcrumbs) && count($breadcrumbs) > 0)
  <div class="bg-[#F8F8F8] h-48 flex items-center justify-center px-16  pt-4 Inter_Regular ">
    <nav aria-label="breadcrumb" class="flex gap-4 items-center w-11/12">
      <ol class="breadcrumb flex flex-row items-center gap-3">
        @foreach ($breadcrumbs as $index => $breadcrumb)
          @if ($index > 0)
            <li class="text-[16px] mx-6 Inter_Regular">/</li>
          @endif
          @if ($loop->last)
            <li class="breadcrumb-item active text-[16px] text-[#006BF6] Inter_Regular" aria-current="page">
              {{ $breadcrumb['title'] }}
            </li>
          @else
            <li class="breadcrumb-item text-[16px] Inter_Regular"><a
                href="{{ $breadcrumb['url'] }}">{{ $breadcrumb['title'] }}</a></li>
          @endif
        @endforeach
      </ol>
    </nav>
  </div>
@endif
