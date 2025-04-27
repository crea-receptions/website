@extends('_layouts.sample')

@section('pagecontent')
    <div class="container relative mx-auto max-w-1166 pt-6">
        <x-exemple-retour/>
        <x-exemple
            title1="Exemples"
            title2="petits<br>déjeuners<br>&amp; pauses" 
            title_image="/assets/img/exemples/pauses/pause-header.webp"
            image01="/assets/img/exemples/pauses/pause-01.webp"
            image02="/assets/img/exemples/pauses/pause-02.webp"
            image03="/assets/img/exemples/pauses/pause-03.webp"
            image04="/assets/img/exemples/pauses/pause-04.webp"
            image05="/assets/img/exemples/pauses/pause-05.webp"
            image06="/assets/img/exemples/pauses/pause-06.webp"
            image07="/assets/img/exemples/pauses/pause-07.webp"
            image08="/assets/img/exemples/pauses/pause-08.webp"
            image09="/assets/img/exemples/pauses/pause-09.webp"
            image10="/assets/img/exemples/pauses/pause-10.webp"
            image11=""
            image12=""/>
    <x-exemple-devis :page="$page" />
@endsection
