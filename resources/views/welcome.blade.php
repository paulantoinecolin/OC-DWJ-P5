<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="/css/app.css" rel="stylesheet">
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.0.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.0.1/mapbox-gl.css' rel='stylesheet' />
    <title>Eveil Franco Allemand - Enfants, bilingue, allemand, Montpellier</title>
</head>

<body class="text-gray-800">
  <div class="px-10">
    <header class="sticky top-0">
        <nav class="menu flex justify-between items-stretch shadow bg-blue-400 text-white">
            <div>
                <img class="h-20" src="/images/logo-efa.jpg" alt="logo-efa">
            </div>
            <ol class="flex justify-between items-center">
                <li class="m-3 font-bold text-lg uppercase active item"><a href="#">{{ __('home') }}</a></li>
                <li class="m-3 font-bold text-lg uppercase item"><a href="#">{{ __('kidsclub') }}</a></li>
                <li class="m-3 font-bold text-lg uppercase item">{{ __('events') }}</li>
                <li class="m-3 font-bold text-lg uppercase item">{{ __('contact') }}</li>
            </ol>
            <div class="flex justify-between items-center">
            <a href="{{ app()->getLocale() == 'fr' ? route('german') : route('french') }}" class="nav-link">{{ strtoupper(app()->getLocale()) }}</a>
            <img class="h-10" src="/images/logo-facebook.jpg" alt="facebook-icon">
            {{-- <a href="#" class="nav-link"><img class="h-10" src="/images/logo-lang.png" alt="switch-lang">FR</a>
            <a href="#" class="nav-link"><img class="h-10" src="/images/logo-lang.png" alt="switch-lang">DE</a> --}}
          </div>
        </nav>
    </header>

    <section>
        <h1 class="my-10 text-2xl font-bold text-center uppercase tracking-wider">{{  __('titre') }}</h1>
        <div class="flex text-justify px-8">
        <q class="ml-40 mr-10">{!! nl2br(__('citation')) !!}</q>

            <p class="text-justify mr-40">{{ __('accueil') }}</p>
          </div>
    </section>

    <div id="kids-clubs" class="mt-10"></div>
        <h2 class=" mb-6 text-xl font-bold text-center uppercase tracking-wider">{{ __('club-title') }}</h2>
        <section class="grid grid-cols-3 gap-4 space-x-10 mb-10">
            <div class="card shadow rounded-lg mx-5 bg-gray-50">
                <img src="/images/kids_club.jpg" alt="" class="rounded-t-lg mb-5">
                <h5 class="text-xl font-bold text-center px-10 mb-3">{{ __('clubcard1-title') }}</h5>
                <p class="px-10 mb-5 text-justify">{{ __('clubcard1-text') }}</p>
                <p class="text-center font-semibold uppercase text-white bg-blue-400 rounded-b-lg shadow-lg py-4 px-0 tracking-wider text-sm">{{ __('plus-info') }}</p>
            </div>
            <div class="card shadow rounded-lg mx-5 bg-gray-50">
              <img src="/images/kids_club.jpg" alt="" class="rounded-t-lg mb-5">
                <h5 class="text-xl font-bold text-center px-10 mb-3">{{ __('clubcard2-title') }}</h5>
                <p class="px-10 text-justify">{{ __('clubcard2-text') }}</p>
                <p class="text-center font-semibold uppercase text-white bg-blue-400 rounded-b-lg shadow-lg py-4 px-0 tracking-wider text-sm">{{ __('plus-info') }}</p>
            </div>
            <div class="card shadow rounded-lg mx-5 bg-gray-50">
              <img src="/images/kids_club.jpg" alt="" class="rounded-t-lg mb-5">
                <h5 class="text-xl font-bold text-center px-10 mb-3">{{ __('clubcard3-title') }}</h5>
                <p class="px-10 text-justify">{{ __('clubcard3-text') }}</p>
                <p class="text-center font-semibold uppercase text-white bg-blue-400 rounded-b-lg shadow-lg py-4 px-0 tracking-wider text-sm">{{ __('plus-info') }}</p>
            </div>
        </section>

    <div id="family" class="mt-10">
        <h2 class="mb-6 text-xl  font-bold text-center uppercase tracking-wider">{{ __('events-title') }}</h2>
            <section class="flex space-x-20 mb-10">
                <img class="rounded-lg shadow w-1/2" src="/images/photo1.png" alt="">
                <p>CarnavalDescription de l’évenementJe souhaite venir -> Lien vers formulaire pré-rempli
                    Brunch de PâquesDescription de l’évenementJe souhaite venir -> Lien vers formulaire pré-rempli
                    Fête d’étéDescription de l’évenementJe souhaite venir -> Lien vers formulaire pré-rempli</p>
            </section>
            <section class="flex space-x-20 mb-10">
                <p>Fabrication de lanternesDescription de l’évenementJe souhaite venir -> Lien vers formulaire pré-rempli
                    Défilé aux lanternes pour les enfants - MartinsumzugDescription de l’évenementJe souhaite venir -> Lien vers formulaire pré-rempli
                    Fabrication de décorations de NoëlDescription de l’évenementJe souhaite venir -> Lien vers formulaire pré-rempli</p>
                <img class="rounded-lg shadow w-1/2" src="/images/photo2.png" alt="">
            </section>
    </div>
    
    <div class="contact mt-10 mb-6">
        <h2 class="text-xl font-bold  text-center uppercase tracking-wider">{{ __('contact-title') }}</h2>
        <section class="flex justify-center space-x-40 py-10">

            <form action="/messages" method="POST" class="rounded-lg shadow-lg px-10 bg-white">
              @csrf
              <div class="mt-8 max-w-md">
                <div class="grid grid-cols-1 gap-6">
                  <label class="block">
                    <span class="text-gray-700">Nom / Prénom</span>
                    <input
                      name="name"
                      value="{{ old('name') }}"
                      type="text"
                      class="mt-1block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 @error('name') border-red-500 @enderror"
                      placeholder=""
                    />

                    @error('name')
                    <p class="text-red-500 text-xs">{{ $errors->first('name') }}</p>
                    @enderror
                  </label>
                  <label class="block">
                    <span class="text-gray-700">Votre Message</span>
                    <textarea
                    name="message"
                    class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 @error('message') border-red-500 @enderror"
                    rows="3"
                    >{{ old('message') }}</textarea>
                    @error('message')
                    <p class="text-red-500 text-xs">{{ $errors->first('message') }}</p>
                    @enderror
                  </label>
                  <div class="block">
                    <div class="mt-2">
                      <div>
                        <label class="inline-flex items-center">
                          <input type="hidden" name="newsletter" value="0">
                          <input
                            name="newsletter"
                            value="1"
                            type="checkbox"
                            class="rounded bg-gray-200 border-transparent focus:border-transparent focus:bg-gray-200 text-gray-700 focus:ring-1 focus:ring-offset-2 focus:ring-gray-500"
                          />
                          <span class="ml-2">Inscrivez-moi à la Newsletter</span>
                        </label>
                        <div><input type="submit" class="bg-blue-400 m-5 p-2 rounded-lg"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
            <div id="map" style="width: 400px; height:400px;" class="rounded-lg shadow-lg m-10"></div>
        </section>
    </div>

    <footer class="px-8 py-4 bg-blue-400 rounded-t-lg text-white font-bold  uppercase">
        <address>Présidente : Stephanie Zillmer <br>
            07 51 89 89 89 <br>
            contact@efa-34.org
        </address>
        <p>&copy; {{ now()->year }} EFA – Eveil Franco Allemand</p>
    </footer>
  </div>

    <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoicGF1bGFudG9pbmVjb2xpbiIsImEiOiJjazBqYmdiYWIwOGFjM2huMTR0enVpejk1In0.DmB49AgRVNtdlx9L_HKZlQ';
        var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11', // stylesheet location
        center: [3.891701, 43.596278], // starting position [lng, lat]
        zoom: 16 // starting zoom
        });

        map.addControl(new mapboxgl.NavigationControl());

        var marker = new mapboxgl.Marker()
        .setLngLat([3.89180, 43.596204])
        .addTo(map);
        </script>
</body>
</html>