---
title: Contact - Créa Réceptions – Traiteur événementiel
title1: nous
title2: contacter
title_img: /assets/img/main-contact.png
---
@extends('_layouts.page')

@section('pagecontent')
<div class="container relative mx-auto max-w-1166">
    <div class="flex flex-col items-center">
        <div class="w-3/5 p-12 pb-3.5 bg-gray-200 mt-80px relative">
            <div class="absolute pt-12 pb-12 pr-10 -top-144px -right-120px w-300 green-bloc3 pl-9">
                <div class="relative mx-auto text-3xl text-center text-white pt-14 w-213 h-201 green-title">
                    <p class="m-0 font-sans">demander</p>
                    <p class="mt-0 font-script">un devis</p>
                    <div class="absolute h-1.4 bg-gray-900 w-15 top-95px -left-80px"></div>
                </div>
            </div>
            <form action="https://formsubmit.co/4f4c7cf0d2b3477a4e7135219887c40e" method="post">
                <div class="relative">
                    <h2 class="pt-20 text-xl font-semibold">vos<br>coordonnées</h2>
                    <div class="absolute h-1.4 bg-gray-900 w-15 top-95px -left-80px"></div>
                </div>
                <div class="flex flex-wrap text-xs">
                    <input type="hidden" name="_subject" value="[CREARECEPTION] Demande de devis">
                    <input type="hidden" name="_next" value="{{ $page->baseUrl}}/thanks/">
                    <div class="w-1/2 px-4 mt-7 py-2.5">
                        <input type="radio" value="Mme" name="civilite" class="ml-4"/> <span class="ml-1">Mme</span>
                        <input type="radio" value="Mr" name="civilite" class="ml-11"/> <span class="ml-1">Mr</span>
                        <input type="radio" value="Mlle" name="civilite" class="ml-11"/> <span class="ml-1">Mlle</span>
                    </div>
                    <div class="w-1/2 px-4 mt-7">
                        <input type="text" placeholder="Nom *" name="lastname" value="" class="px-5 py-2.5 w-full bg-transparent border border-gray-400 border-solid rounded-lg"/>
                    </div>
                    <div class="w-1/2 px-4 mt-7">
                        <input type="text" placeholder="Nom de jeune fille" name="birthname" value="" class="px-5 py-2.5 w-full bg-transparent border border-gray-400 border-solid rounded-lg"/>
                    </div>
                    <div class="w-1/2 px-4 mt-7">
                        <input type="text" placeholder="Prénom *" name="firstname" value="" class="px-5 py-2.5 w-full bg-transparent border border-gray-400 border-solid rounded-lg"/>
                    </div>
                    <div class="w-1/2 px-4 mt-7">
                        <input type="text" placeholder="Entreprise" name="society" value="" class="px-5 py-2.5 w-full bg-transparent border border-gray-400 border-solid rounded-lg"/>
                    </div>
                    <div class="w-full px-4 mt-7">
                        <input type="text" placeholder="Adresse" name="address" value="" class="px-5 py-2.5 w-full bg-transparent border border-gray-400 border-solid rounded-lg"/>
                    </div>
                    <div class="w-1/2 px-4 mt-7">
                        <input type="text" placeholder="Ville" name="city" value="" class="px-5 py-2.5 w-full bg-transparent border border-gray-400 border-solid rounded-lg"/>
                    </div>
                    <div class="w-1/2 px-4 mt-7">
                        <input type="text" placeholder="Code postal" name="postalcode" value="" class="px-5 py-2.5 w-full bg-transparent border border-gray-400 border-solid rounded-lg"/>
                    </div>
                    <div class="w-1/2 px-4 mt-7">
                        <input type="tel" placeholder="Téléphone *" name="tel" value="" class="px-5 py-2.5 w-full bg-transparent border border-gray-400 border-solid rounded-lg"/>
                    </div>
                    <div class="w-1/2 px-4 mt-7">
                        <input type="email" placeholder="Email *" name="email" value="" class="px-5 py-2.5 w-full bg-transparent border border-gray-400 border-solid rounded-lg"/>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="relative">
                    <h2 class="pt-12 text-xl font-semibold">votre<br/>r&eacute;ception</h2>
                    <div class="absolute h-1.4 bg-gray-900 w-15 top-65px -left-80px"></div>
                </div>
                <div class="flex flex-wrap text-xs">
                    <div class="w-1/2 px-4 mt-7">
                        <input type="date" placeholder="Date" name="date" value="" class="px-5 py-2.5 w-full bg-transparent border border-gray-400 border-solid rounded-lg"/>
                    </div>
                    <div class="w-1/2 px-4 mt-7">
                        <select name="type" value="" class="px-5 py-2.5 w-full bg-transparent border border-gray-400 border-solid rounded-lg">
                            <option value="Mariage">Mariage</option>
                            <option value="Cocktail">Cocktail</option>
                            <option value="Diner de gala">Diner de gala</option>
                            <option value="Baptême">Baptême</option>
                            <option value="Séminaire">Séminaire</option>
                            <option value="Autre">Autre</option>
                        </select>
                    </div>
                    <div class="w-1/2 px-4 mt-7">
                        <input type="text" placeholder="Lieu" name="place" value="" class="px-5 py-2.5 w-full bg-transparent border border-gray-400 border-solid rounded-lg"/>
                    </div>
                    <div class="w-1/2 px-4 mt-7">
                        <input type="text" placeholder="Nombre de convives" name="nbgguests" value="" class="px-5 py-2.5 w-full bg-transparent border border-gray-400 border-solid rounded-lg"/>
                    </div>
                    <div class="w-full px-4 mt-7">
                        <textarea placeholder="Précisions complémentaires" name="text" value="" class="px-5 py-2.5 w-full h-52 bg-transparent border border-gray-400 border-solid rounded-lg"></textarea>
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
        <div class="relative w-4/5 mt-24 mb-7">
            <div class="absolute pt-12 pb-12 pr-10 -bottom-144px -left-144px w-300 green-bloc3 pl-9">
                <div class="relative mx-auto text-3xl text-center text-white pt-14 w-213 h-201 green-title">
                    <p class="m-0 font-sans">notre</p>
                    <p class="mt-0 font-script">adresse</p>
                    <div class="absolute h-1.4 bg-gray-900 w-15 top-95px -right-80px"></div>
                </div>
            </div>
            <div class="pb-2">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11607.692823898653!2d5.59939!3d43.336796!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x93f9f83e398936e2!2zQ3LDqWEtUsOpY2VwdGlvbnM!5e0!3m2!1sfr!2sfr!4v1559301181671!5m2!1sfr!2sfr" style="border:0" allowfullscreen="" width="960" height="450" frameborder="0"></iframe>
            </div>
        </div>
        <div class="-ml-48 text-sm text-gray-400">
            CRÉA RÉCEPTIONS<br>
            ZAC de Saint Esteve lot 20 Box 3&nbsp;<br>
            13360 ROQUEVAIRE
        </div>
    </div>
</div>
@endsection
