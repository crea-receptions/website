---
title: Créa Réceptions – Traiteur événementiel – Roquevaire – Marseille
use_flickity: true
sliders: [
    {
        title1: le choix,
        title2: du goût,
        title_img: /assets/img/content/1_COVER_1380x700.webp
    },
    {
        title1: prestations,
        title2: sur mesure,
        title_img: /assets/img/content/main-home.webp
    },
    {
        title1: le plaisir,
        title2: des yeux,
        title_img: /assets/img/content/2_COVER_1380x700.webp
    }
]
---
@extends('_layouts.master')

@section('content')
    @include('_partials.header')
    
<script>
    $(document).ready(function() {
        $('.carousel').flickity({autoPlay: true,});
    });
</script>
<div id="slider" class="relative w-full overflow-hidden h-244 sm:h-324 md:h-389 lg:h-520 xl:h-698">
    <div class="carousel flickity-enabled is-draggable">
@foreach ($page->sliders as $slider)
        <div class="absolute min-w-full carousel-cell h-244 sm:h-324 md:h-389 lg:h-520 xl:h-698">
            <div class="absolute left-0 right-0 z-10 mx-auto my-0 text-center text-white title top-15px h-214 w-226 sm:top-30px sm:w-280 sm:h-264 md:top-45px md:w-328 md:h-310 lg:w-424 lg:h-400 lg:top-65px xl:w-544 xl:h-514 xl:top-80px">
                <h1 class="pt-16 font-sans text-2xl sm:text-3xl md:text-5xl lg:text-7xl sm:pt-18 md:pt-20 lg:pt-24 xl:pt-28" style="margin: revert;">
                    {{ $slider->title1 }}
                    <span class="block text-4xl font-script sm:text-5xl md:text-7xl lg:text-9xl leading-inherit text-anis">{{ $slider->title2 }}</span>
                </h1>
            </div>
            <div class="flex justify-center h-244 sm:h-324 md:h-389 lg:h-520 xl:h-698">
                <div class="absolute w-full h-244 sm:h-324 md:h-389 lg:h-520 xl:h-698"></div>
                <img class="h-fit left-1/2" src="{{ $page->baseUrl}}{{ $slider->title_img }}"/>
            </div>
        </div>
@endforeach
    </div>
</div>
<div id="container" class="relative mx-auto max-w-1166 top-15px">
    <div class="absolute z-20 w-full top-4 grey-background h-633"></div>
    <div class="absolute top-auto z-20 w-1/2 right-2 grey-background -bottom-16 h-349"></div>
    <div class="relative mx-auto max-w-929">
        <div class="relative z-50 mt-80px">
            <div class="w-full overflow-hidden">
                <img class="relative max-w-none -left-32 sm:-left-16 md:left-0" src="{{ $page->baseUrl }}\assets\img\content\FB_IMG_15166378787131.webp" alt="">
            </div>
            <div class="absolute pt-4 pb-12 pr-10 -top-60px left-16 sm:left-8 lg:-left-15px xl:-left-30px w-300 h-480 green-bloc1 pl-9">
                <div class="relative mx-auto text-3xl text-center text-white pt-14 w-213 h-201 green-title">
                    <p class="m-0 font-sans">qui sommes</p>
                    <p class="mt-0 font-script">nous ?</p>
                    <div class="absolute h-1.4 bg-gray-900 w-15 top-95px -right-80px"></div>
                </div>
                <p class="-mt-5 text-sm text-center text-gray-900">Créa-Réceptions, traiteur en Bouches du Rhône basé à Roquevaire, organisateur de réceptions depuis 2008, vous propose une cuisine de goût et de qualité qui valorise les produits régionaux. C’est aussi une équipe de professionnels et de partenaires de choix à l’écoute de sa clientèle afin de garantir un évènement à la hauteur de ses attentes.</p>
            </div>
        </div>
        <div class="flex flex-col justify-center mt-8 md:flex-row">
            <div class="relative z-50 px-8 mx-auto my-5 mr-4 text-center text-gray-800 md:px-0 md:w-1/2">
                <div class="mx-auto text-3xl grey-title w-213 h-201 pt-55px">
                    <p class="font-sans">évènements</p>
                    <p class="mt-0 font-script text-anis">particuliers</p>
                </div>
                <div class="relative pt-2 pb-3 text-sm font-base px-14prct -mt-50px">
                    <p class="pt-3 pb-4 text-center">Pour un mariage (à partir de 50 personnes),<br> un anniversaire / baptême / ... (à partir de 20), recevez vos invités en toute sérénité. Nous saurons nous adapter selon vos exigences et votre budget.</p>
                    <a href="{{ $page->baseUrl }}/prestations-particuliers/">
                        <div class="absolute left-0 right-0 px-4 py-2 mx-auto font-sans text-white -bottom-5 bg-anis w-140">
                            en savoir <span class="font-bold text-gray-800 underline font-script">plus</span>
                        </div>
                    </a>
                </div>
                <img class="mx-auto" src="{{ $page->baseUrl }}/assets/img/content/2_IMG_456x280.webp" alt="">
            </div>
            <div class="relative z-50 px-8 mx-auto my-5 mr-4 text-center text-gray-800 md:px-0 md:w-1/2">
                <div class="mx-auto text-3xl grey-title w-213 h-201 pt-55px">
                    <p class="font-sans">évènements</p>
                    <p class="mt-0 font-script text-anis">professionnels</p>
                </div>
                <div class="relative pt-2 pb-3 text-sm font-base px-14prct -mt-50px">
                    <p class="pt-3 pb-4 text-center">Pour un séminaire, une inauguration, une soirée de gala ou encore un goûter d'entreprise ou tout événement organisé par le C.E., nous vous apportons des solutions « clef en main » : petit déjeuner, pause, cocktail, plateaux repas ou repas.</p>
                    <a href="{{ $page->baseUrl }}/prestations-professionnels/">
                        <div class="absolute left-0 right-0 px-4 py-2 mx-auto font-sans text-white -bottom-5 bg-anis w-140">
                            en savoir <span class="font-bold text-gray-800 underline font-script">plus</span>
                        </div>
                    </a>
                </div>
                <img class="mx-auto" src="{{ $page->baseUrl }}/assets/img/content/1_IMG_456x280.webp" alt="">
            </div>
        </div>
    </div>
</div>
@endsection
