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
        <div class="w-3/5 p-12 pb-3.5 bg-gray-200 mt-80px">
            <form action="https://formsubmit.co/crea-receptions@live.fr" method="post">
                <h2 class="pt-6 text-xl font-semibold">vos<br>coordonnées</h2>
                <div class="flex flex-wrap text-xs">
                    <input type="hidden" name="_subject" value="[CREARECEPTION] Demande de devis">
                    <input type="hidden" name="_next" value="{{ $page->baseUrl}}\thanks\">
                    <div class="w-1/2 px-4 mt-7 py-2.5">
                        <input type="radio" value="Mme" name="civilite" class="ml-4"/> <span class="ml-1">Mme</span>
                        <input type="radio" value="Mr" name="civilite" class="ml-11"/> <span class="ml-1">Mr</span>
                        <input type="radio" value="Mlle" name="civilite" class="ml-11"/> <span class="ml-1">Mlle</span>
                    </div>
                    <div class="w-1/2 px-4">
                        <input type="text" placeholder="Nom *" name="lastname" value="" class="px-5 py-2.5 w-full mt-7 bg-transparent border border-gray-400 border-solid rounded-lg"/>
                    </div>
                    <div class="w-1/2 px-4">
                        <input type="text" placeholder="Nom de jeune fille" name="birthname" value="" class="px-5 py-2.5 w-full mt-7 bg-transparent border border-gray-400 border-solid rounded-lg"/>
                    </div>
                    <div class="w-1/2 px-4">
                        <input type="text" placeholder="Prénom *" name="firstname" value="" class="px-5 py-2.5 w-full mt-7 bg-transparent border border-gray-400 border-solid rounded-lg"/>
                    </div>
                    <div class="w-1/2 px-4">
                        <input type="text" placeholder="Entreprise" name="society" value="" class="px-5 py-2.5 w-full mt-7 bg-transparent border border-gray-400 border-solid rounded-lg"/>
                    </div>
                    <div class="w-full px-4">
                        <input type="text" placeholder="Adresse" name="address" value="" class="px-5 py-2.5 w-full mt-7 bg-transparent border border-gray-400 border-solid rounded-lg"/>
                    </div>
                    <div class="w-1/2 px-4">
                        <input type="text" placeholder="Ville" name="city" value="" class="px-5 py-2.5 w-full mt-7 bg-transparent border border-gray-400 border-solid rounded-lg"/>
                    </div>
                    <div class="w-1/2 px-4">
                        <input type="text" placeholder="Code postal" name="postalcode" value="" class="px-5 py-2.5 w-full mt-7 bg-transparent border border-gray-400 border-solid rounded-lg"/>
                    </div>
                    <div class="w-1/2 px-4">
                        <input type="tel" placeholder="Téléphone *" name="tel" value="" class="px-5 py-2.5 w-full mt-7 bg-transparent border border-gray-400 border-solid rounded-lg"/>
                    </div>
                    <div class="w-1/2 px-4">
                        <input type="email" placeholder="Email *" name="email" value="" class="px-5 py-2.5 w-full mt-7 bg-transparent border border-gray-400 border-solid rounded-lg"/>
                    </div>
                    <div class="clear"></div>
                </div>
                <h2 class="pt-12 text-xl font-semibold">votre<br/>r&eacute;ception</h2>
                <div class="flex flex-wrap text-xs">
                    <div class="w-1/2 px-4">
                        <input type="date" placeholder="Date" name="date" value="" class="px-5 py-2.5 w-full mt-7 bg-transparent border border-gray-400 border-solid rounded-lg"/>
                    </div>
                    <div class="w-1/2 px-4">
                        <select name="type" value="" class="px-5 py-2.5 w-full mt-7 bg-transparent border border-gray-400 border-solid rounded-lg">
                            <option value="Mariage">Mariage</option>
                            <option value="Cocktail">Cocktail</option>
                            <option value="Diner de gala">Diner de gala</option>
                            <option value="Baptême">Baptême</option>
                            <option value="Séminaire">Séminaire</option>
                            <option value="Autre">Autre</option>
                        </select>
                    </div>
                    <div class="w-1/2 px-4">
                        <input type="text" placeholder="Lieu" name="place" value="" class="px-5 py-2.5 w-full mt-7 bg-transparent border border-gray-400 border-solid rounded-lg"/>
                    </div>
                    <div class="w-1/2 px-4">
                        <input type="text" placeholder="Nombre de convives" name="nbgguests" value="" class="px-5 py-2.5 w-full mt-7 bg-transparent border border-gray-400 border-solid rounded-lg"/>
                    </div>
                    <div class="w-full px-4">
                        <textarea placeholder="Précisions complémentaires" name="text" value="" class="px-5 py-2.5 w-full h-52 mt-7 bg-transparent border border-gray-400 border-solid rounded-lg"></textarea>
                    </div>
                </div>
                <div class="px-4 text-xs mt-7">
                    * Champs obligatoires
                </div>
                <div class="static flex justify-center mt-7">
                    <button type="submit" class="py-0.5 text-white bg-anis px-7 font-semibold absolute">
                        envoyer <span class="text-gray-700 underline font-script">la demande</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
