<nav aria-label="breadcrumb" class="bg-white p-1 inline-block border border-gray-200 shadow-sm">
     <ol class="breadcrumb flex flex-row items-center gap-1 rounded">
          <li class="breadcrumb-item inline-block">
               <a href="{{ route('home') }}">
                    <i class="fas fa-home"></i>
               </a>
          </li>
          @foreach ($breadcrumbs as $breadcrumb)
          @if ($breadcrumb['active'])
               <li class="breadcrumb-item inline-block border-s-2"  aria-current="page">
                    {{ $breadcrumb['label'] }}
               </li>
          @else
               <li class="breadcrumb-item inline-block border-s-2">
                    <a href="{{ $breadcrumb['url'] }}">
                         {{ $breadcrumb['label'] }}
                    </a>
               </li>
          @endif
          @endforeach
     </ol>
</nav>