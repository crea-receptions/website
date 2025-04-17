<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    @include('_partials.head')
    <body class="text-base font-base">
        @yield('content')

        @include('_partials.footer')
    </body>
</html>
