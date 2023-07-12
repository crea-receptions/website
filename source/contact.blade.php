---
title: Contact - Créa Réceptions – Traiteur événementiel
title1: nous
title2: contacter
title_img: /assets/img/main-contact.png
---
@extends('_layouts.page')

@section('pagecontent')
<div class="container relative mx-auto max-w-1166">
    <div class="flex justify-center">
        <div class="w-3/5 bg-gray-100 mt-80px">
        <form action="https://formsubmit.co/crea-receptions@live.fr" method="post">
            <h2>vos<br>coordonnées</h2>
            <input type="hidden" name="_subject" value="[CREARECEPTION] Demande de devis">
            <input type="hidden" name="_next" value="{{ $page->baseUrl}}\thanks\">
            <div class="bloc-left">
                <input type="radio" value="Mme" name="civilite"/> <span class="label">Mme</span>
                <input type="radio" value="Mr" name="civilite"/> <span class="label">Mr</span>
                <input type="radio" value="Mlle" name="civilite"/> <span class="label">Mlle</span>
            </div>
            <div class="bloc-left">
                <input type="text" placeholder="Nom *" name="lastname" value=""/>
            </div>
            <div class="bloc-left birthname">
                <input type="text" placeholder="Nom de jeune fille" name="birthname" value=""/>
            </div>
            <div class="bloc-left">
                <input type="text" placeholder="Prénom *" name="firstname" value=""/>
            </div>
            <div class="bloc-left">
                <input type="text" placeholder="Entreprise" name="society" value=""/>
            </div>
            <input class="big" type="text" placeholder="Adresse" name="address" value=""/>
            <div class="bloc-left">
                <input type="text" placeholder="Ville" name="city" value=""/>
            </div>
            <div class="bloc-left">
                <input type="text" placeholder="Code postal" name="postalcode" value=""/>
            </div>
            <div class="bloc-left">
                <input type="tel" placeholder="Téléphone *" name="tel" value=""/>
            </div>
            <div class="bloc-left">
                <input type="email" placeholder="Email *" name="email" value=""/>
            </div>
            <div class="clear"></div>
            <h2>votre<br/>r&eacute;ception</h2>
            <div class="bloc-left">
                <input type="date" placeholder="Date" name="date" value=""/>
            </div>
            <div class="bloc-left">
                <select name="type" value="">
                    <option value="Mariage">Mariage</option>
                    <option value="Cocktail">Cocktail</option>
                    <option value="Diner de gala">Diner de gala</option>
                    <option value="Baptême">Baptême</option>
                    <option value="Séminaire">Séminaire</option>
                    <option value="Autre">Autre</option>
                </select>
            </div>
            <div class="bloc-left">
                <input type="text" placeholder="Lieu" name="place" value=""/>
            </div>
            <div class="bloc-left">
                <input type="text" placeholder="Nombre de convives" name="nbgguests" value=""/>
            </div>
            <textarea class="big" name="text" value=""></textarea>
            <div class="small">
                * Champs obligatoires
            </div>
            <div class="clear"></div>
            <input type="hidden" id="_wpnonce" name="_wpnonce" value="c6e81b0324" /><input type="hidden" name="_wp_http_referer" value="/contact/" />                    <button class="discover" type="submit">
                valider <span class="script">ici</span>
            </button>
        </form>
        </div>
    </div>
</div>
@endsection
