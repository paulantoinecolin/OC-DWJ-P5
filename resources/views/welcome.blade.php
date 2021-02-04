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

<body>

    {{-- MENU --}}

    <header class="sticky top-0 text-blue-100 bg-blue-900 body-font">
        <div class="container flex flex-col flex-wrap p-5  mx-auto md:items-center md:flex-row">
            <a href="#" class="flex items-center w-40 mb-4 mr-40 font-medium text-gray-800 title-font md:mb-0">
                <img src="/images/logo-efa.jpg" alt="logo-efa" class="w-20 md:w-32 lg:w-48 rounded">
            </a>
            <nav class="flex flex-wrap items-center justify-center ml-4 text-base">
                <a href="#"
                    class="mr-5 text-lg uppercase font-bold text-blue-200 rounded-xl hover:text-white">{{ __('home') }}</a>
                <a href="#"
                    class="mr-5 text-lg uppercase font-bold text-blue-200 rounded-xl hover:text-white">{{ __('kidsclub') }}</a>
                <a href="#"
                    class="mr-5 text-lg uppercase font-bold text-blue-200 rounded-xl hover:text-white">{{ __('events') }}</a>
                <a href="#"
                    class="mr-5 text-lg uppercase font-bold text-blue-200 rounded-xl hover:text-white">{{ __('contact') }}</a>
            </nav>
            <a href="{{ app()->getLocale() == 'fr' ? route('german') : route('french') }}"
                class="p-1 ml-auto rounded-full ring-2 ring-offset-2 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                <img class="w-8 h-8 rounded-full "
                    src="{{ app()->getLocale() == 'fr' ? '/images/france.png' : '/images/germany.png' }}"
                    alt="">
            </a>
            <a href="https://www.facebook.com/eveilfrancoallemand" target="blank"
                class="flex ml-3 rounded-full ring-2 ring-offset-2 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"">
                <img class=" w-10 h-10 rounded-full "
                    src=" /images/logo-facebook.png" alt="">
            </a>
        </div>
    </header>

    <div class="container w-full p-15 m-4 mx-auto my-16 text-center bg-white h-96 rounded-xl">

        {{-- HEADER --}}

        <section class="text-gray-700 body-font">
            <div class="container px-8 mx-auto py-2 lg:px-4">
                <div class="flex flex-col w-full mb-12 text-left lg:text-center">
                    <h1 class="mb-6 text-2xl font-semibold tracking-tighter text-blue-800 sm:text-6xl title-font">
                        {{ __('titre') }}
                    </h1>
                    <h3 class="mb-1 text-xs italic font-semibold tracking-widest text-blue-600 uppercase title-font">{!!
                        nl2br(__('citation')) !!}</h3>
                    <p class="mx-auto text-base font-medium leading-relaxed text-gray-700 lg:w-1/2">
                        {{ __('accueil') }} </p>
                </div>
            </div>
        </section>

        {{-- CLUBS GRID --}}

        <section class="text-gray-700 body-font">
            <div class="container px-8 pt-24 mx-auto lg:px-4">
                <div id="kids-clubs" class="mt-10"></div>
                <h2 class="mb-1 text-2xl font-black tracking-widest text-blue-800 uppercase title-font">
                    {{ __('club-title') }}</h2>
                <div class="flex flex-wrap text-left">
                    <div class="px-8 py-6 lg:w-1/3 md:w-full">
                        <div class="p-6 rounded-md bg-blue-200">
                            <img class="object-cover object-center w-full h-40 mb-6 rounded"
                                src="/images/kids_club1.jpg" alt="content">
                            <h2 class="mb-3 text-lg font-semibold text-gray-700 lg:text-2xl title-font">
                                {{ __('clubcard1-title') }}
                            </h2>
                            <p class="mb-4 text-base leading-relaxed">{{ __('clubcard1-text') }}</p>
                        </div>
                    </div>
                    <div class="px-8 py-6 lg:w-1/3 md:w-full">
                        <div class="p-6 rounded-md bg-blue-200">
                            <img class="object-cover object-center w-full h-40 mb-6 rounded"
                                src="/images/kids_club2.jpg" alt="content">
                            <h2 class="mb-3 text-lg font-semibold text-gray-700 lg:text-2xl title-font">
                                {{ __('clubcard2-title') }}
                            </h2>
                            <p class="mb-4 text-base leading-relaxed">{{ __('clubcard2-text') }}</p>
                        </div>
                    </div>
                    <div class="px-8 py-6 lg:w-1/3 md:w-full">
                        <div class="p-6 rounded-md bg-blue-200">
                            <img class="object-cover object-center w-full h-40 mb-6 rounded"
                                src="/images/kids_club3.jpg" alt="content">
                            <h2 class="mb-3 text-lg font-semibold text-gray-700 lg:text-2xl title-font">
                                {{ __('clubcard3-title') }}
                            </h2>
                            <p class="mb-4 text-base leading-relaxed">{{ __('clubcard3-text') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- RIGHT --}}

        <section class="text-gray-700 body-font mt-24">
            <h2 class="mb-1 text-2xl font-black tracking-widest text-blue-800 uppercase title-font">
                {{ __('events-title') }}</h2>
            <div class="container flex flex-col items-center px-5 py-16 mx-auto lg:px-20 lg:py-14 md:flex-row">
                <div class="w-5/6 mb-10 lg:max-w-lg lg:w-full md:w-1/2 md:mb-0">
                    <img class="object-cover object-center rounded" alt="hero" src="/images/photo1.png">
                </div>
                <div
                    class="flex flex-col items-center text-center lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 md:items-start md:text-left">
                    <h1
                        class="mb-8 text-2xl font-bold tracking-tighter text-center text-blue-800 lg:text-left lg:text-2xl title-font">
                        Renforcer la langue allemande en permettant sa pratique en dehors du cercle familial</h1>
                    <p class="mb-8 text-base leading-relaxed text-center text-gray-700 lg:text-left lg:text-1xl">l’EFA
                        organise des rencontres familiaux pour donner l’occasion aux adultes de discuter et de
                        s’échanger
                        quelques conseils.</p>
                    <p class="flex items-center mb-2 text-gray-600"><span
                            class="inline-flex items-center justify-center flex-shrink-0 w-6 h-6 mr-2 rounded-full">
                            <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                height="24">
                                <path fill="none" d="M0 0h24v24H0z" />
                                <path d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z" /></svg>
                        </span>Carnaval</p>
                    <p class="flex items-center mb-2 text-gray-600"><span
                            class="inline-flex items-center justify-center flex-shrink-0 w-6 h-6 mr-2 rounded-full">
                            <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                height="24">
                                <path fill="none" d="M0 0h24v24H0z" />
                                <path d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z" />
                            </svg></span>Brunch de Pâques</p>
                    <p class="flex items-center mb-6 text-gray-600"><span
                            class="inline-flex items-center justify-center flex-shrink-0 w-6 h-6 mr-2 rounded-full">
                            <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                height="24">
                                <path fill="none" d="M0 0h24v24H0z" />
                                <path d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z" />
                            </svg></span>Fête d’été</p>
                </div>
            </div>
        </section>


        {{-- LEFT --}}

        <section class="text-gray-700 body-font">
            <div class="container flex flex-col items-center px-5 py-16 mx-auto lg:px-20 lg:py-24 md:flex-row">
                <div
                    class="flex flex-col items-center w-full pt-0 mb-16 text-left lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 lg:mr-20 md:items-start md:text-left md:mb-0 lg:text-center">
                    <h1
                        class="mb-8 text-2xl font-bold tracking-tighter text-center text-blue-800 lg:text-left lg:text-2xl title-font">
                        Soutenir les parents dans leur désir de communiquer dans leur langue maternelle
                    </h1>
                    <p class="mb-8 text-base leading-relaxed text-center text-gray-700 lg:text-left lg:text-1xl">
                        Les parents profitent eux aussi des échanges avec d’autres parents.
                        De nombreuses amitiés sont ainsi nées.
                    </p>
                    <p class="flex items-center mb-2 text-gray-600"><span
                            class="inline-flex items-center justify-center flex-shrink-0 w-6 h-6 mr-2 rounded-full">
                            <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                height="24">
                                <path fill="none" d="M0 0h24v24H0z" />
                                <path d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z" />
                            </svg>
                        </span>
                        Fabrication de lanternes
                    </p>
                    <p class="flex items-center mb-2 text-gray-600">
                        <span class="inline-flex items-center justify-center flex-shrink-0 w-6 h-6 mr-2 rounded-full">
                            <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                height="24">
                                <path fill="none" d="M0 0h24v24H0z" />
                                <path d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z" />
                            </svg>
                        </span>
                        Défilé aux lanternes pour les enfants
                    </p>
                    <p class="flex items-center mb-6 text-gray-600">
                        <span class="inline-flex items-center justify-center flex-shrink-0 w-6 h-6 mr-2 rounded-full">
                            <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                height="24">
                                <path fill="none" d="M0 0h24v24H0z" />
                                <path d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z" />
                            </svg>
                        </span>
                        Fabrication de décorations de Noël
                    </p>
                </div>
                <div class="w-5/6 lg:max-w-lg lg:w-full md:w-1/2">
                    <img class="object-cover object-center rounded-lg " alt="hero" src="/images/photo2.png">
                </div>
            </div>
        </section>



        {{-- FORM --}}

        <section class="text-gray-700 body-font">
            <div class=" container px-8 pt-48 mx-auto lg:px-4">
                <h2 class="mb-1 text-2xl font-black tracking-widest text-blue-800 uppercase title-font">
                    {{ __('contact-title') }}</h2>
                <div class="flex flex-wrap mt-10 mb-6">
                    <div class="flex flex-col w-full p-8 mx-auto mt-10 border rounded-lg lg:w-2/6 md:w-1/2 md:ml-auto md:mt-0">
                        <div>
                        <form action="/messages" method="POST">
                            @csrf

                            {{-- Name --}}
                            <div class="relative ">
                                @error('name')
                                    <span
                                        class=" text-red-500 text-xs">{{ $errors->first('name') }}
                                    </span>
                                @enderror
                                <input type="text" id="name" name="name" placeholder="*nom / prénom"
                                    value="{{ old('name') }}"
                                    class="w-full px-4 py-2 mb-4 mr-4 text-base text-blue-700 bg-blue-200 border-transparent rounded-lg focus:border-gray-500 focus:bg-blue-100 focus:ring-0 @error('name') border-red-500 @enderror"
                                    required>
                            </div>

                            {{-- E-Mail --}}
                            <div class="relative ">
                                @error('email')
                                    <span
                                        class=" text-red-500 text-xs">{{ $errors->first('email') }}
                                    </span>
                                @enderror
                                <input type="email" id="email" name="email" placeholder="*email"
                                    value="{{ old('email') }}"
                                    class="w-full px-4 py-2 mb-4 mr-4 text-base text-blue-700 bg-blue-200 border-transparent rounded-lg focus:border-gray-500 focus:bg-blue-100 focus:ring-0 @error('email') border-red-500 @enderror"
                                    required>
                            </div>

                            {{-- Message --}}
                            <div class="relative ">
                                @error('message')
                                    <span
                                        class="text-red-500 text-xs">{{ $errors->first('message') }}</span>
                                @enderror
                                <textarea id="message" name="message" placeholder="*message" maxlength="255"
                                    class="w-full px-4 py-2 mr-4 text-base text-blue-700 bg-blue-200 border-transparent rounded-lg focus:border-gray-500 focus:bg-blue-100 focus:ring-0 @error('message') border-red-500 @enderror"
                                    rows="3" required></textarea>
                                    <div id="counter" class="text-xs text-gray-500 font-semibold absolute bottom-2 right-2"></div>
                            </div>

                            {{-- Newsletter --}}
                            <div class="flex my-4">
                                <label class="flex items-center">
                                    <input type="hidden" name="newsletter" value="0">
                                    <input type="checkbox" name="newsletter" value="1" class="form-checkbox rounded">
                                    <span class="ml-2">Souscrire à la Newsletter </span>
                                </label>
                            </div>
                            <button
                                class="px-8 py-2 font-semibold text-white transition duration-500 ease-in-out transform rounded-lg shadow-xl bg-gradient-to-r from-blue-700 hover:from-blue-600 to-blue-600 hover:to-blue-700 focus:ring focus:outline-none"
                                value="send">Envoyer votre message</button>
                        </div>
                    </form>
                        <div class="flex flex-col mt-20 items-center my-4">
                            <p class="mb-2">1. Télécharger le bulletin d'adhésion</p>
                            <label
                            class="w-64 flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:shadow-xl hover:text-black">
                            <a href={{ url('/public/pdf/bulletin_adhesion.pdf') }}>
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                  </svg></a>
                                </label>
                            </div>
                        <div>
                            <form action="{{ route('membership') }}" method="POST"
                        enctype="multipart/form-data" class="rounded-lg  px-10 bg-white space-x-5 py-10">
                        @csrf
                            <p>2. Renvoyez-nous votre bulletin d'adhésion rempli et signé</p>
                            <label
                            class="w-64 flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:shadow-xl hover:text-black">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                              </svg>
                                    <span class="mt-2 text-base leading-normal">Choisir un fichier</span>
                                    <input type='file' name="pdf" class="hidden"/>
                                </label>
                                <button
                                class="mt-4 px-8 py-2 font-semibold text-white transition duration-500 ease-in-out transform rounded-lg shadow-xl bg-gradient-to-r from-blue-700 hover:from-blue-600 to-blue-600 hover:to-blue-700 focus:ring focus:outline-none"
                                value="Save">Envoyer votre fichier</button>
                            </form>
                        </div>
                    </div>



                    <div>
                        <div id="map" style="width: 400px; height:400px;" class="rounded-lg shadow-lg m-10">
                        </div>
                    </div>


                </div>    
            </div>
        </section>

        {{-- FOOTER --}}

        <footer class="mt-6 text-gray-700 bg-white body-font">
            <div>
                <div class="bg-blue-900 rounded-t-lg">
                    <div class="container flex flex-col flex-wrap px-5 py-6 mx-auto lg:px-20 sm:flex-row">
                        <div class="flex flex-wrap items-center justify-center mx-auto text-base">
                            <address class="justify-center mr-5 text-sm text-center text-blue-200">Stephanie Zillmer -
                                Présidente<br>
                                tél : 07 51 89 89 89 <br>
                                <a href="mailto:contact@efa-34.org" class="hover:text-white">e-mail :
                                    contact@efa-34.org</a>
                            </address>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap items-center justify-center px-5 py-6 mx-auto text-base bg-blue-900 ">
                    <div class="flex flex-wrap items-center justify-center mx-auto text-base">
                        <p class="mr-5 text-sm text-center text-gray-200"> &copy; EFA – Eveil Franco Allemand
                        </p>

                        <p class="justify-center mr-5 text-sm text-center text-blue-200 hover:text-blue-700">
                            {{ now()->year }}</p>
                    </div>
                </div>
            </div>
        </footer>

        <script>
            mapboxgl.accessToken =
                'pk.eyJ1IjoicGF1bGFudG9pbmVjb2xpbiIsImEiOiJjazBqYmdiYWIwOGFjM2huMTR0enVpejk1In0.DmB49AgRVNtdlx9L_HKZlQ';
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

        <script>
            function countChar(val) {
        var len = val.value.length;
        if (len >= 500) {
          val.value = val.value.substring(0, 10);
        } else {
          $('#charNum').text(500 - len);
        }
      };
        </script>

        <script>
            const messageEle = document.getElementById('message');
            const counterEle = document.getElementById('counter');

            messageEle.addEventListener('input', function(e) {
            const target = e.target;

            // Get the `maxlength` attribute
            const maxLength = target.getAttribute('maxlength');

            // Count the current number of characters
            counterEle.innerHTML = maxLength - target.value.length;
            });
        </script>
    </div>
</body>

</html>
