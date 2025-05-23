@extends('_layouts.sample')

@section('pagecontent')
    <div class="container relative mx-auto max-w-1166 pt-6">
        <x-exemple-retour/>
        <x-exemple
            title1="Exemples"
            title2="pièces<br>salées<br>maison" 
            title_image="/assets/img/exemples/sales/sale-header.webp"
            image01="/assets/img/exemples/sales/sale-01.webp"
            image02="/assets/img/exemples/sales/sale-02.webp"
            image03="/assets/img/exemples/sales/sale-03.webp"
            image04="/assets/img/exemples/sales/sale-04.webp"
            image05="/assets/img/exemples/sales/sale-05.webp"
            image06="/assets/img/exemples/sales/sale-06.webp"
            image07="/assets/img/exemples/sales/sale-07.webp"
            image08="/assets/img/exemples/sales/sale-08.webp"
            image09="/assets/img/exemples/sales/sale-09.webp"
            image10="/assets/img/exemples/sales/sale-10.webp"
            image11=""
            image12=""/>
        <x-exemple
            title1="Exemples"
            title2="pièces<br>sucrées<br>maison" 
            title_image="/assets/img/exemples/sucres/sucre-header.webp"
            image01="/assets/img/exemples/sucres/sucre-01.webp"
            image02="/assets/img/exemples/sucres/sucre-02.webp"
            image03="/assets/img/exemples/sucres/sucre-03.webp"
            image04="/assets/img/exemples/sucres/sucre-04.webp"
            image05="/assets/img/exemples/sucres/sucre-05.webp"
            image06="/assets/img/exemples/sucres/sucre-06.webp"
            image07="/assets/img/exemples/sucres/sucre-07.webp"
            image08="/assets/img/exemples/sucres/sucre-08.webp"
            image09="/assets/img/exemples/sucres/sucre-09.webp"
            image10="/assets/img/exemples/sucres/sucre-10.webp"
            image11=""
            image12=""/>
        <x-exemple
            title1="Exemples"
            title2="entrées<br>plats &<br>desserts" 
            title_image="/assets/img/exemples/repas/repas-header-pro.webp"
            image01="/assets/img/exemples/repas/repas-01.webp"
            image02="/assets/img/exemples/repas/repas-02.webp"
            image03="/assets/img/exemples/repas/repas-03.webp"
            image04="/assets/img/exemples/repas/repas-04.webp"
            image05="/assets/img/exemples/repas/repas-05-pro.webp"
            image06="/assets/img/exemples/repas/repas-06-pro.webp"
            image07="/assets/img/exemples/repas/repas-07-pro.webp"
            image08="/assets/img/exemples/repas/repas-08.webp"
            image09="/assets/img/exemples/repas/repas-09.webp"
            image10="/assets/img/exemples/repas/repas-10.webp"
            image11=""
            image12=""/>
        <x-exemple 
            title1="Exemples"
            title2="de<br>buffets"
            title_image="/assets/img/exemples/buffets/buffet-header.webp"
            image01="/assets/img/exemples/buffets/buffet-01.webp"
            image02="/assets/img/exemples/buffets/buffet-02.webp"
            image03="/assets/img/exemples/buffets/buffet-03.webp"
            image04="/assets/img/exemples/buffets/buffet-04.webp"
            image05="/assets/img/exemples/buffets/buffet-05.webp"
            image06="/assets/img/exemples/buffets/buffet-06.webp"
            image07="/assets/img/exemples/buffets/buffet-07.webp"
            image08="/assets/img/exemples/buffets/buffet-08.webp"
            image09="/assets/img/exemples/buffets/buffet-09.webp"
            image10="/assets/img/exemples/buffets/buffet-10.webp"
            image11=""
            image12=""/>
    </div>
    <x-exemple-devis :page="$page"/>
@endsection
