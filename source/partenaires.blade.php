---
title: Partenaires - Créa Réceptions – Traiteur événementiel
title1: nos
title2: partenaires
title_img: /assets/img/main/main-partenaires.webp
---
@extends('_layouts.page')

@section('pagecontent')
    <div class="container relative mx-auto max-w-1166">
        <div class="-ml-8 font-sans font-bold text-center text-gray-100 text-16xl">particuliers</div>
        <div class="relative -top-9">
            <div class="z-10 w-3/5 grey-background h-93prct mb-50px top-20"></div>
            <div class="relative z-50 mx-auto space-y-36 max-w-929">
                <x-partenaire mode="even" title="Chateau de" subtitle="la Roque Forcade" image="{{ $page->baseUrl }}/assets/img/partenaires/chateaularoqueforcade.webp" image_alt="Chateau de la Roque Forcade" link="https://www.chateaudelaroqueforcade.com/">
                    Domaine viticole de caractère niché au cœur de la Provence, à 25 mn d'Aix-en-Provence et Marseille, le Château de la Roque Forcade est idéalement situé au pied du pittoresque village de Peypin. Entouré d'oliviers, bercé par le chant des cigales et parfumé par la lavande, le domaine offre un cadre exceptionnel avec une vue imprenable sur la Sainte-Baume, parfait pour vos événements privés et professionnels.
                </x-partenaire>
                <x-partenaire title="Chateau de" subtitle="Roquefeuille" image="{{ $page->baseUrl }}/assets/img/partenaires/chateauderoquefeuille.webp" image_alt="Chateau de Roquefeuille" link="https://chateauderoquefeuille.fr/">
                    Domaine viticole d’exception de 200 hectares en plein coeur de la Provence, près d’Aix En Provence, au pied de la Sainte Victoire.
                </x-partenaire>
                <x-partenaire mode="even" title="Chateau" subtitle="Saint Hilaire" image="{{ $page->baseUrl }}/assets/img/partenaires/chateausainthilaire.webp" image_alt="Chateau Saint Hilaire" link="https://www.chateau-saint-hilaire.fr/">
                    AU CŒUR DE LA PROVENCE MYTHIQUE<br><br>Le Château Saint Hilaire, un domaine entre vignes et oliviers vous accueille pour votre événement dans un cadre exceptionnel
                </x-partenaire>
                <x-partenaire title="Inga" subtitle="des Riaux" image="{{ $page->baseUrl }}/assets/img/partenaires/ingadesriaux.webp" image_alt="Inga des Riaux" link="http://www.ingadesriaux.com/">
                    Amarré dans le 16ème arrondissement de Marseille, avec ses 35 mètres de long et ses 6 mètres de large, ce bateau finlandais en bois construit en 1928, vous ouvre ses portes dans une ambiance unique, chaleureuse et conviviale.
                </x-partenaire>
                <x-partenaire mode="even" title="Chateau de" subtitle="la Beaumetane" image="{{ $page->baseUrl }}/assets/img/partenaires/chateaudelabeaumetane.webp" image_alt="Chateau de la Beaumetane" link="https://www.chateau-la-beaumetane.fr/">
                    En plein cœur de la Provence, proche d’Aix, de Marseille et de Salon, entouré de vignes, Nathalie et Mike vous accueillent au Château la Beaumetane dans un cadre enchanteur. Le Château la Beaumetane est un lieu magique, chargé d'histoire, pour vos évènements privés et professionnels.
                </x-partenaire>
                <x-partenaire title="Le Moulin" subtitle="de Gemenos" image="{{ $page->baseUrl }}/assets/img/partenaires/lemoulindegemenos.webp" image_alt="Le Moulin de Gemenos" link="http://www.moulin-gemenos.fr/">
                    Un authentique Moulin familial au pied du massif de la Sainte Baume. Depuis 30 ans, deux générations se sont succédées pour en faire un lieu de caractère afin d’accueillir vos événements familiaux, professionnels ou associatifs.
                </x-partenaire>
                <x-partenaire mode="even" title="Le Mas de" subtitle="Garguiers" image="{{ $page->baseUrl }}/assets/img/partenaires/masdegarguiers.webp" image_alt="Le Mas des Garguiers" link="http://www.mas-garguier.fr/">
                    Magnifique cadre pour vos évènements sur Gemenos! Nous officions sur ce site et sommes heureux de ce partenariat ! N'hésitez pas à vous y rendre de notre part, vous serez conquis par ce lieu !
                </x-partenaire>
            </div>
        </div>
        <div class="-ml-8 font-sans font-bold text-center text-gray-100 text-16xl">professionnels</div>
        <div class="relative -top-9">
            <div class="z-10 w-3/5 grey-background h-93prct mb-50px top-20"></div>
            <div class="relative z-50 mx-auto space-y-36 max-w-929">
                <x-partenaire title="Palais des" subtitle="congrès Agora" image="{{ $page->baseUrl }}/assets/img/partenaires/agora.webp" image_alt="Palais des congrès Agora" link="http://www.agora-congres.com/">
                    Le centre de congrès AGORA bénéficie d'une situation privilégiée au coeur du triangle Aix en Provence, Marseille, Cassis bénéficiant d'une grande proximité avec tous les moyens d'accès (autoroute, TGV, avion) ainsi que des centres d'intérêts touristiques et culturels.
                </x-partenaire>
                <x-partenaire mode="even" title="Le" subtitle="BUZ" image="{{ $page->baseUrl }}/assets/img/partenaires/lebuz.webp" image_alt="Le BUZ" link="https://www.buz-marseille.fr/">
                    Situé sur Marseille, le Buz vous séduira de par son modernisme, son originalité, son cadre... Pour tous vos événements, professionnels ou particuliers, il saura répondre à vos attentes !
                </x-partenaire>
                <x-partenaire title="Chateau de" subtitle="la Buzine" image="{{ $page->baseUrl }}/assets/img/partenaires/chateaudelabuzine.webp" image_alt="Chateau de la Buzine" link="https://labuzine.com/">
                    Pour vos séminaires, soirées, inaugurations, mariages... Faites confiance à un professionnel, Cadre magnifique sur la Valentine, Marseille. Allez-y de notre part ! Excellent accueil...
                </x-partenaire>
            </div>
        </div>
    </div>
@endsection
