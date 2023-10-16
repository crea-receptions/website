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
        <div class="w-4/5 sm:w-3/5 p-4 md:px-8 lg:px-10 xl:px-12 pb-3.5 bg-gray-200 mt-80px relative">
            <div class="absolute py-2 sm:py-12 -top-120px sm:-top-144px -right-30px sm:-right-120px w-213 sm:w-300 green-bloc3 bg-center px-2 sm:px-10">
                <div class="relative mx-auto text-3xl text-center text-white pt-16 w-213 h-201 green-title bg-center">
                    <p class="m-0 font-sans">demander</p>
                    <p class="mt-0 font-script">un devis</p>
                    <div class="absolute h-1.4 bg-gray-900 w-15 top-95px -left-40px sm:-left-80px"></div>
                </div>
            </div>
            <form action="https://formsubmit.co/4f4c7cf0d2b3477a4e7135219887c40e" method="post">
                <div class="relative">
                    <h2 class="pt-20 text-xl font-semibold">vos<br>coordonnées</h2>
                    <div class="absolute h-1.4 bg-gray-900 w-15 top-95px -left-65px md:-left-80px"></div>
                </div>
                <div class="flex flex-wrap text-xs">
                    <input type="hidden" name="_subject" value="[CREARECEPTION] Demande de devis">
                    <input type="hidden" name="_next" value="{{ $page->baseUrl}}/thanks/">
                    <div class="w-full sm:w-1/2 px-1 sm:px-2 md:px-3 lg:px-4 mt-7 py-2.5 space-x-3 sm:space-x-3 md:space-x-4 lg:space-x-8 xl:space-x-11">
                        <span><input type="radio" value="Mme" name="civilite" class="ml-1 sm:ml-1 md:ml-2 lg:ml-3 xl:ml-4"/> <span class="ml-1">Mme</span></span>
                        <span><input type="radio" value="Mr" name="civilite"/> <span class="ml-1">Mr</span></span>
                        <span><input type="radio" value="Mlle" name="civilite"/> <span class="ml-1">Mlle</span></span>
                    </div>
                    <div class="w-full px-1 sm:w-1/2 sm:px-2 md:px-3 lg:px-4 mt-7">
                        <input type="text" placeholder="Nom *" name="lastname" value="" class="px-5 py-2.5 w-full bg-transparent border border-gray-400 border-solid rounded-lg"/>
                    </div>
                    <div class="w-full px-1 sm:w-1/2 sm:px-2 md:px-3 lg:px-4 mt-7">
                        <input type="text" placeholder="Nom de jeune fille" name="birthname" value="" class="px-5 py-2.5 w-full bg-transparent border border-gray-400 border-solid rounded-lg"/>
                    </div>
                    <div class="w-full px-1 sm:w-1/2 sm:px-2 md:px-3 lg:px-4 mt-7">
                        <input type="text" placeholder="Prénom *" name="firstname" value="" class="px-5 py-2.5 w-full bg-transparent border border-gray-400 border-solid rounded-lg"/>
                    </div>
                    <div class="w-full px-1 sm:w-1/2 sm:px-2 md:px-3 lg:px-4 mt-7">
                        <input type="text" placeholder="Entreprise" name="society" value="" class="px-5 py-2.5 w-full bg-transparent border border-gray-400 border-solid rounded-lg"/>
                    </div>
                    <div class="w-full px-1 sm:px-2 md:px-3 lg:px-4 mt-7">
                        <input type="text" placeholder="Adresse" name="address" value="" class="px-5 py-2.5 w-full bg-transparent border border-gray-400 border-solid rounded-lg"/>
                    </div>
                    <div class="w-full px-1 sm:w-1/2 sm:px-2 md:px-3 lg:px-4 mt-7">
                        <input type="text" placeholder="Ville" name="city" value="" class="px-5 py-2.5 w-full bg-transparent border border-gray-400 border-solid rounded-lg"/>
                    </div>
                    <div class="w-full px-1 sm:w-1/2 sm:px-2 md:px-3 lg:px-4 mt-7">
                        <input type="text" placeholder="Code postal" name="postalcode" value="" class="px-5 py-2.5 w-full bg-transparent border border-gray-400 border-solid rounded-lg"/>
                    </div>
                    <div class="w-full px-1 sm:w-1/2 sm:px-2 md:px-3 lg:px-4 mt-7">
                        <input type="tel" placeholder="Téléphone *" name="tel" value="" class="px-5 py-2.5 w-full bg-transparent border border-gray-400 border-solid rounded-lg"/>
                    </div>
                    <div class="w-full px-1 sm:w-1/2 sm:px-2 md:px-3 lg:px-4 mt-7">
                        <input type="email" placeholder="Email *" name="email" value="" class="px-5 py-2.5 w-full bg-transparent border border-gray-400 border-solid rounded-lg"/>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="relative">
                    <h2 class="pt-12 text-xl font-semibold">votre<br/>r&eacute;ception</h2>
                    <div class="absolute h-1.4 bg-gray-900 w-15 top-65px -left-65px md:-left-80px"></div>
                </div>
                <div class="flex flex-wrap text-xs">
                    <div class="w-full px-4 sm:w-1/2 mt-7">
                        <input type="date" placeholder="Date" name="date" value="" class="px-5 py-2.5 w-full bg-transparent border border-gray-400 border-solid rounded-lg"/>
                    </div>
                    <div class="w-full px-4 sm:w-1/2 mt-7">
                        <select name="type" value="" class="px-5 py-2.5 w-full bg-transparent border border-gray-400 border-solid rounded-lg">
                            <option value="Mariage">Mariage</option>
                            <option value="Cocktail">Cocktail</option>
                            <option value="Diner de gala">Diner de gala</option>
                            <option value="Baptême">Baptême</option>
                            <option value="Séminaire">Séminaire</option>
                            <option value="Autre">Autre</option>
                        </select>
                    </div>
                    <div class="w-full px-4 sm:w-1/2 mt-7">
                        <input type="text" placeholder="Lieu" name="place" value="" class="px-5 py-2.5 w-full bg-transparent border border-gray-400 border-solid rounded-lg"/>
                    </div>
                    <div class="w-full px-4 sm:w-1/2 mt-7">
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
            <div class="absolute py-2 sm:py-12 px-2 sm:px-10 -bottom-100px sm:-bottom-144px -left-30px sm:-left-40px md:-left-60px lg:-left-80px xl:-left-120px w-213 sm:w-300 green-bloc3">
                <div class="relative mx-auto text-3xl text-center text-white pt-14 w-213 h-201 green-title">
                    <p class="m-0 font-sans">notre</p>
                    <p class="mt-0 font-script">adresse</p>
                    <div class="absolute h-1.4 bg-gray-900 w-15 top-95px -right-30px sm:-right-80px"></div>
                </div>
            </div>
            <div class="pb-2">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11607.692823898653!2d5.59939!3d43.336796!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x93f9f83e398936e2!2zQ3LDqWEtUsOpY2VwdGlvbnM!5e0!3m2!1sfr!2sfr!4v1559301181671!5m2!1sfr!2sfr" style="border:0" allowfullscreen="" width="960" height="450" frameborder="0"></iframe>
            </div>
        </div>
        <div class="relative -right-80px sm:-right-120px md:-right-144px text-sm text-gray-400">
            CRÉA RÉCEPTIONS<br>
            ZAC de Saint Esteve lot 20 Box 3&nbsp;<br>
            13360 ROQUEVAIRE
        </div>
    </div>
</div>
@endsection
