@extends('_layouts.master')

@section('content')
    @include('_partials.header')
    
    @if($page->use_fancybox)
    <script type="text/javascript">
        $(document).ready(function() {
            $(".fancybox").fancybox({
                helpers: {
                    title: {
                        type: 'over'
                    }
                }
            });
        });
    </script>
    @endif

    <div class="relative mx-auto w-full h-244 sm:h-264 md:h-300 lg:h-324 xl:h-349 overflow-hidden">
        <div class="absolute left-0 right-0 z-10 mx-auto my-0 text-center text-white title top-65px h-280 h-264 md:w-328 md:h-310 lg:w-424 lg:h-400 xl:w-544 xl:h-514">
            <h1 class="font-sans text-2xl sm:text-3xl md:text-5xl lg:text-7xl" style="margin: revert;">
                {{ $page->title1 }}
                <span class="block text-4xl font-script sm:text-5xl md:text-7xl lg:text-9xl text-anis">{{ $page->title2 }}</span>
            </h1>
        </div>
        <div class="relative z-0 text-anis">
            <div class="w-full overflow-hidden h-698 grid justify-center">
                <img class="min-h-349 max-w-none lg:min-w-full" src="{{ $page->baseUrl }}{{ $page->title_img }}" alt="">
            </div>
        </div>
    </div>

    @yield('pagecontent')

@endsection
