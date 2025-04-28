@extends('_layouts.sample')

@section('pagecontent')
    <div class="container relative mx-auto max-w-1166 pt-6">
        <x-exemple-retour/>
        <x-exemple
            title1="Exemples"
            title2="<br>brunchs" 
            title_image="/assets/img/exemples/brunchs/brunch-header.webp"
            image01="/assets/img/exemples/brunchs/brunch-01.webp"
            image02="/assets/img/exemples/brunchs/brunch-02.webp"
            image03="/assets/img/exemples/brunchs/brunch-03.webp"
            image04="/assets/img/exemples/brunchs/brunch-04.webp"
            image05="/assets/img/exemples/brunchs/brunch-05.webp"
            image06="/assets/img/exemples/brunchs/brunch-06.webp"
            image07="/assets/img/exemples/brunchs/brunch-07.webp"
            image08="/assets/img/exemples/brunchs/brunch-08.webp"
            image09="/assets/img/exemples/brunchs/brunch-09.webp"
            image10="/assets/img/exemples/brunchs/brunch-10.webp"
            image11=""
            image12=""/>
    <x-exemple-devis :page="$page" />
@endsection
