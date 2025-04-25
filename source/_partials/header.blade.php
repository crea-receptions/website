  <header class="container mx-auto text-sm font-bold text-gray-400 min-h-100 max-h-352 lg:max-h-100">
    <div class="justify-center hidden space-x-8 lg:flex lg:visible">
      <div class="pl-9 pt-9 hover:text-anis"><a href="{{ $page->baseUrl }}/">Accueil</a></div>
      <div class="pt-9 hover:text-anis"><a href="{{ $page->baseUrl }}/prestations-particuliers/">Particuliers</a></div>
      <div class="pt-9 hover:text-anis"><a href="{{ $page->baseUrl }}/prestations-professionnels/">Professionnels</a></div>
      <div class="z-50 pt-5"><img src="{{ $page->baseUrl }}/assets/img/main/logo-creareception.webp" alt="Logo CreaReception"></div>
      <div class="pt-9 hover:text-anis"><a href="{{ $page->baseUrl }}/partenaires/">Partenaires</a></div>
      <div class="pt-9 hover:text-anis"><a href="{{ $page->baseUrl }}/references/">Références</a></div>
      <div class="pt-9 hover:text-anis"><a href="{{ $page->baseUrl }}/contact/">Contact</a></div>
      <div class="pt-9">
        <a href="https://www.facebook.com/creareceptionstraiteur/" target="_blank">
          <img src="{{ $page->baseUrl }}/assets/img/main/facebook-picto.webp">
        </a>
      </div>
      <div class="pt-9">
        <a href="https://www.instagram.com/creareceptions/" target="_blank">
          <img src="{{ $page->baseUrl }}/assets/img/main/insta-picto.webp">
        </a>
      </div>
    </div>
    <div class="lg:hidden">
      <nav class="" x-data="{ open: false }">
        <div class="flex items-center justify-between pt-10">
          <img src="{{ $page->baseUrl }}/assets/img/main/burger.webp" alt="Menu" class="pl-10" @click="open = !open">
          <div class="flex items-center">
            <div class="pr-5">
              <a href="https://www.facebook.com/creareceptionstraiteur/" target="_blank">
                <img src="{{ $page->baseUrl }}/assets/img/main/facebook-picto.webp">
              </a>
            </div>
            <div class="pr-10 md:pr-5">
              <a href="https://www.instagram.com/creareceptions/" target="_blank">
                <img src="{{ $page->baseUrl }}/assets/img/main/insta-picto.webp">
              </a>
            </div>
          </div>
        </div>
        <ul class="font-bold" x-show="open">
          <li class="pt-6 pl-18 hover:text-anis"><a href="{{ $page->baseUrl }}/">Accueil</a></li>
          <li class="pt-6 pl-18 hover:text-anis"><a href="{{ $page->baseUrl }}/prestations-particuliers/">Particuliers</a></li>
          <li class="pt-6 pl-18 hover:text-anis"><a href="{{ $page->baseUrl }}/prestations-professionnels/">Professionnels</a></li>
          <li class="pt-6 pl-18 hover:text-anis"><a href="{{ $page->baseUrl }}/partenaires/">Partenaires</a></li>
          <li class="pt-6 pl-18 hover:text-anis"><a href="{{ $page->baseUrl }}/references/">Références</a></li>
          <li class="py-6 pl-18 hover:text-anis"><a href="{{ $page->baseUrl }}/contact/">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>
