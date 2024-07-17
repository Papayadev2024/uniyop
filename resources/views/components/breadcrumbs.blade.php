@if (isset($breadcrumbs) && is_array($breadcrumbs) && count($breadcrumbs) > 0)
  <div class="bg-[#F8F8F8] h-24 flex items-center justify-center px-5">
    <nav aria-label="breadcrumb" class="flex gap-4 items-center w-11/12">
      <ol class="breadcrumb flex flex-row items-center gap-3">
        @foreach ($breadcrumbs as $index => $breadcrumb)
          @if ($index > 0)
            <li class="text-[14px] mx-6 font-normal">/</li>
          @endif
          @if ($loop->last)
            <li class="breadcrumb-item active text-[14px] text-[#006BF6] font-normal" aria-current="page">
              {{ $breadcrumb['title'] }}
            </li>
          @else
            <li class="breadcrumb-item text-[14px] font-normal"><a
                href="{{ $breadcrumb['url'] }}">{{ $breadcrumb['title'] }}</a></li>
          @endif
        @endforeach
      </ol>
    </nav>
  </div>
@endif
