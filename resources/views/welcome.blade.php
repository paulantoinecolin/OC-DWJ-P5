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
    <header id="home" class="sticky top-0 text-blue-100 bg-blue-900 body-font">
        <div class="container flex flex-col flex-wrap items-center py-2 mx-auto md:flex-row md:justify-between">
            <a href="#home" class="flex items-center mb-4 font-medium text-gray-800 title-font md:mb-0 lg:w-40">
                <img src="/images/logo-efa.jpg" alt="logo-efa" class="rounded w-24 md:w-32 lg:w-36">
            </a>
            <nav class="flex flex-col items-center text-base lg:flex-row lg:space-x-5">
                <a href="#home"
                    class="text-sm font-bold text-blue-200 rounded-xl hover:text-white lg:text-lg">{{ __('home') }}</a>
                <a href="#kidsclub"
                    class="text-sm font-bold text-blue-200 rounded-xl hover:text-white lg:text-lg">{{ __('kidsclub') }}</a>
                <a href="#events"
                    class="text-sm font-bold text-blue-200 rounded-xl hover:text-white lg:text-lg">{{ __('events') }}</a>
                <a href="#contact"
                    class="text-sm font-bold text-blue-200 rounded-xl hover:text-white lg:text-lg">{{ __('contact') }}</a>
            </nav>
            <div class="flex justify-center">
                <a href="{{ app()->getLocale() == 'fr' ? route('german') : route('french') }}"
                    class="p-1  hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                    <img class="w-6 h-6 rounded-full "
                        src="{{ app()->getLocale() == 'fr' ? '/images/france.png' : '/images/germany.png' }}"
                        alt="">
                </a>
                <a href="https://www.facebook.com/eveilfrancoallemand" target="blank"
                    class="flex ml-3 rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                    <img class=" w-8 h-8 rounded-full" src=" /images/logo-facebook.png" alt="">
                </a>
            </div>
        </div>
    </header>

    {{-- RGPD Banner --}}
    <div id="bannerRGPD" class="bg-blue-900">
        <div class="max-w-7xl mx-auto py-3 px-3 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between  flex-wrap md:ml-0 lg:ml-20">
                <div class="w-0 flex-1 flex justify-center items-center">
                    <span class="flex p-2 rounded-lg bg-blue-500">
                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
                        </svg>
                    </span>
                    <p class="ml-3 font-xs text-white truncate">
                        <span class="md:hidden">
                            Conditions d'utilisation des données
                        </span>
                        <span class="hidden md:inline">
                            Merci de lire nos conditions d'utililisation concernant l'utilisation de vos données
                        </span>
                    </p>
                </div>
                <div class="order-3 mt-2 flex-shrink-0 w-full sm:order-2 sm:mt-0 sm:w-auto">
                    <a href="#" id="accept"
                        class="flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-semibold text-blue-800 bg-white hover:bg-indigo-50">
                        Accepter
                    </a>
                </div>
                <div class="order-2 flex-shrink-0 sm:order-3 sm:ml-3">
                    <button id="dismiss" type="button"
                        class="-mr-1 flex p-2 rounded-md hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-white sm:-mr-2">
                        <span class="sr-only">Dismiss</span>
                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="container w-full p-15 m-4 mx-auto my-16 text-center bg-white h-96 rounded-xl">

        {{-- HEADER --}}
        <section class="text-gray-700 body-font">
            <div class="container px-8 mx-auto py-2 lg:px-4">
                <div class="flex flex-col w-full mb-12 text-left lg:text-center">
                    <h1 class="mb-6 text-2xl font-semibold tracking-tighter text-blue-800 sm:text-5xl title-font">
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
        <section id="kidsclub" class="text-gray-700 body-font mt-10">
            <div class="container  mx-auto lg:px-4">
                <div id="kids-clubs" class="mt-10"></div>
                <h2 class="mb-1 text-xl font-black tracking-widest text-blue-800 uppercase title-font lg:text-2xl">
                    {{ __('club-title') }}</h2>
                <div class="flex flex-wrap text-left">
                    <div class="px-8 py-6 lg:w-1/3 md:w-full">
                        <div class="p-6 rounded-md bg-gray-100 shadow-lg">
                            <img class="object-cover object-center w-full h-40 mb-6 rounded"
                                src="/images/kids_club1.jpg" alt="content">
                            <h2
                                class="mb-3 text-2xl font-bold tracking-tighter text-center text-blue-800 lg:text-2xl title-font">
                                {{ __('clubcard1-title') }}
                            </h2>
                            <p class="mb-4 text-base leading-relaxed text-justify">
                                {{ __('clubcard1-text') }}</p>
                        </div>
                    </div>
                    <div class="px-8 py-6 lg:w-1/3 md:w-full">
                        <div class="p-6 rounded-md bg-gray-100 shadow-lg">
                            <img class="object-cover object-center w-full h-40 mb-6 rounded"
                                src="/images/kids_club2.jpg" alt="content">
                            <h2
                                class="mb-3 text-2xl font-bold tracking-tighter text-center text-blue-800 lg:text-2xl title-font">
                                {{ __('clubcard2-title') }}
                            </h2>
                            <p class="mb-4 text-base leading-relaxed text-justify">
                                {{ __('clubcard2-text') }}</p>
                        </div>
                    </div>
                    <div class="px-8 py-6 lg:w-1/3 md:w-full">
                        <div class="p-6 rounded-md bg-gray-100 shadow-lg">
                            <img class="object-cover object-center w-full h-40 mb-6 rounded"
                                src="/images/kids_club3.jpg" alt="content">
                            <h2
                                class="mb-3 text-2xl font-bold tracking-tighter text-center text-blue-800 lg:text-2xl title-font">
                                {{ __('clubcard3-title') }}
                            </h2>
                            <p class="mb-4 text-base leading-relaxed text-justify">
                                {{ __('clubcard3-text') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- RIGHT --}}
        <section id="events" class="text-gray-700 body-font mt-24">
            <h2 class="mb-1 text-xl font-black tracking-widest text-blue-800 uppercase title-font lg:text-2xl">
                {{ __('events-title') }}</h2>
            <div
                class="container flex flex-col items-center mt-8 px-5 py-16 bg-gray-100 rounded-t-lg mx-auto lg:px-20 lg:py-14 md:flex-row">
                <div class="w-5/6 mb-10 lg:max-w-lg lg:w-full md:w-1/2 md:mb-0">
                    <img class="object-cover object-center shadow-lg rounded-lg" alt="hero" src="/images/photo1.png">
                </div>
                <div
                    class="flex flex-col items-center text-center lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 md:items-start md:text-left">
                    <h2
                        class="mb-8 text-2xl font-bold tracking-tighter text-center text-blue-800 lg:text-left lg:text-2xl title-font">
                        Renforcer la langue allemande en permettant sa pratique en dehors du cercle familial</h2>
                    <p
                        class="mb-8 font-bold text-base leading-relaxed text-center text-gray-700 lg:text-left lg:text-1xl">
                        l’EFA
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
            <div
                class="container flex flex-col items-center px-5 py-16 bg-gray-100 rounded-b-lg  mx-auto lg:px-20 lg:py-24 md:flex-row">
                <div
                    class="flex flex-col items-center w-full pt-0 mb-16 text-left lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 lg:mr-20 md:items-start md:text-left md:mb-0 lg:text-center">
                    <h2
                        class="mb-8 text-2xl font-bold tracking-tighter text-center text-blue-800 lg:text-left lg:text-2xl title-font">
                        Soutenir les parents dans leur désir de communiquer dans leur langue maternelle
                    </h2>
                    <p
                        class="mb-8 font-bold text-base leading-relaxed text-center text-gray-700 lg:text-left lg:text-1xl">
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
                    <img class="object-cover object-center shadow-lg rounded-lg " alt="hero" src="/images/photo2.png">
                </div>
            </div>
        </section>

        {{-- FORM --}}
        <section id="contact" class="text-gray-700 body-font">
            <div class="container px-8 pt-10 mx-auto lg:px-4">
                <h2 class="text-xl font-black tracking-widest text-blue-800 uppercase title-font lg:text-2xl">
                    {{ __('contact-title') }}</h2>
                <div class="flex flex-wrap mt-8">
                    <div
                        class="flex flex-col w-full p-8 mx-auto mt-10 border rounded-lg lg:w-2/6 md:w-1/2 md:ml-auto md:mt-0">
                        <div>
                            <h3 class="mb-5 text-2xl font-bold tracking-tighter text-blue-800 title-font">
                                Ecrivez nous</h3>
                            <form action="/messages" method="POST" class="inline-block">
                                @csrf
                                @if(session()->has('message'))
                                    <div class="bg-green-200 text-green-900 rounded-lg my-2 p-2">
                                        {{ session()->get('message') }}
                                    </div>
                                @endif
                                {{-- Name --}}
                                <div class="relative ">
                                    @error('name')
                                        <span
                                            class="text-red-500 text-xs">{{ $errors->first('name') }}
                                        </span>
                                    @enderror
                                    <input type="text" id="name" name="name" placeholder="*nom / prénom"
                                        value="{{ old('name') }}"
                                        class="w-full px-4 mb-4 text-base text-blue-700 bg-gray-100 border-transparent rounded-lg focus:border-gray-500 focus:bg-blue-100 focus:ring-0 @error('name') border-red-500 @enderror"
                                        required>
                                </div>
                                {{-- E-Mail --}}
                                <div class="relative ">
                                    @error('email')
                                        <span
                                            class="text-red-500 text-xs">{{ $errors->first('email') }}
                                        </span>
                                    @enderror
                                    <input type="email" id="email" name="email" placeholder="*email"
                                        value="{{ old('email') }}"
                                        class="w-full px-4 mb-4 text-base text-blue-700 bg-gray-100 border-transparent rounded-lg focus:border-gray-500 focus:bg-blue-100 focus:ring-0 @error('email') border-red-500 @enderror"
                                        required>
                                </div>
                                {{-- Message --}}
                                <div class="relative ">
                                    @error('message')
                                        <span
                                            class="text-red-500 text-xs">{{ $errors->first('message') }}</span>
                                    @enderror
                                    <textarea id="message" name="message" placeholder="*message" maxlength="255"
                                        class="w-full px-4 text-base text-blue-700 bg-gray-100 border-transparent rounded-lg focus:border-gray-500 focus:bg-blue-100 focus:ring-0 @error('message') border-red-500 @enderror"
                                        rows="3" required></textarea>
                                    <div id="counter"
                                        class="text-xs text-red-500 font-semibold absolute bottom-2 right-2">
                                    </div>
                                </div>
                                {{-- Newsletter --}}
                                <div class="flex my-2">
                                    <label class="flex items-center">
                                        <input type="hidden" name="newsletter" value="0">
                                        <input type="checkbox" name="newsletter" value="1"
                                            class="form-checkbox rounded">
                                        <span class="ml-2 text-sm">Souscrire à la Newsletter</span>
                                    </label>
                                </div>
                                <button
                                    class="px-8 py-2 font-semibold text-white transition duration-500 ease-in-out transform rounded-lg shadow-xl bg-gradient-to-r from-blue-700 hover:from-blue-600 to-blue-600 hover:to-blue-700 focus:ring focus:outline-none"
                                    value="send">Envoyer votre message</button>
                            </form>
                        </div>
                        <div class="flex flex-col flex-initial mt-10 items-center">
                            <label
                                class="w-64 flex flex-col items-center mb-10 px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:shadow-xl hover:text-black">
                                <a href={{ url('/public/pdf/bulletin_adhesion.pdf') }}>
                                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                    </svg></a>
                                <span class="mt-2 text-xs font-medium leading-normal">Téléchargez le bulletin
                                    d'adhésion</span>
                            </label>
                        </div>
                        <div>
                            <form action="{{ route('membership') }}" method="POST"
                                enctype="multipart/form-data" class="inline-block">
                                @csrf
                                @if(session()->has('feedback'))
                                    <div class="bg-green-200 text-green-900 rounded-lg my-2 p-2">
                                        {{ session()->get('feedback') }}
                                    </div>
                                @endif
                                <label
                                    class="w-64 flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:shadow-xl hover:text-black">
                                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                                    </svg>
                                    <span class="mt-2 text-xs font-medium leading-normal">Renvoyez le bulletin
                                        d'adhésion rempli</span>
                                    <input id="uploadFile" type="file" name="pdf" class="hidden" />
                                </label>
                                <div id="chosenFile" class=""></div>
                                <button id="submitFile"
                                    class="disabled:opacity-50 mt-4 px-12 py-2 font-semibold text-white rounded-lg shadow-xl transition duration-500 ease-in-out transform bg-gradient-to-r from-blue-700 hover:from-blue-600 to-blue-600 hover:to-blue-700 focus:ring focus:outline-none"
                                    value="Save">Envoyer votre fichier</button>
                            </form>
                        </div>
                    </div>
                    <div
                        class="flex flex-col w-full mx-auto mt-10 border rounded-lg lg:w-2/6 md:w-1/2 md:ml-auto md:mt-0">
                        <div class="container flex flex-col flex-wrap px-5 py-8 mx-auto sm:flex-row">
                            <div class="flex flex-wrap items-center justify-center mx-auto text-base">
                                <h3 class="mb-5 text-2xl font-bold tracking-tighter text-blue-800 title-font">
                                    Passez nous voir</h3>
                                <address
                                    class="w-70 items-center p-6 mb-10 justify-center text-sm text-left rounded-lg shadow-lg tracking-wide  text-gray-600">
                                    <div>
                                        <svg class="w-4 h-4 inline text-blue-700" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                        <label class="text-base not-italic">
                                            Stephanie Zillmer - Présidente
                                        </label>
                                    </div>
                                    <div>
                                        <svg class="w-4 h-4 inline text-blue-700" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                        </svg>
                                        <label class="text-base not-italic">07 51 89 89 89</label>
                                    </div>
                                    <div>
                                        <svg class="w-4 h-4 inline text-blue-700" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                        </svg>
                                        <a href="mailto:contact@efa-34.org"
                                            class="text-base not-italic hover:text-blue-700">contact@efa-34.org</a><br>
                                    </div>
                                    <div>
                                        <svg class="w-4 h-4 inline text-blue-700" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                        <a href="https://goo.gl/maps/46ES9pgGrdYFhzvr5" target="blank"
                                            class="text-base not-italic hover:text-blue-700">
                                            14 rue de l'Améthyste<span class="inline-block ml-5">34070
                                                Montpellier</span></a>
                                    </div>
                                </address>
                            </div>
                            <div id="map" style="width: 100%; height:400px;" class="mt-24 rounded-lg shadow-lg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- FOOTER --}}
        <footer>
            <div class="mt-10 px-5 py-4 text-base bg-blue-900 rounded-t-lg">
                <p class="text-sm text-gray-200"> &copy; EFA – Eveil Franco Allemand - {{ now()->year }}</p>
            </div>
        </footer>

        <script>
            // Mapbox
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
            // Form Feedback
            const messageEle = document.getElementById('message');
            const counterEle = document.getElementById('counter');

            messageEle.addEventListener('input', function (e) {
                const target = e.target;

                // Get the `maxlength` attribute
                const maxLength = target.getAttribute('maxlength');

                // Count the current number of characters
                counterEle.innerHTML = maxLength - target.value.length;
            });

        </script>

        <script>
            // Banner RGPD
            const buttonDismiss = document.getElementById('dismiss');
            const buttonAccept = document.getElementById('accept');
            const bannerRGPD = document.getElementById('bannerRGPD');

            buttonDismiss.addEventListener('click', function (e) {
                bannerRGPD.classList.add("hidden");
            })

            buttonAccept.addEventListener('click', function (e) {
                bannerRGPD.classList.add("hidden");
            })

        </script>

        <script>
            let submitDocument = document.getElementById('uploadFile');
            let submitButton = document.getElementById('submitFile');
            let chosenFile = document.getElementById('chosenFile');

            submitButton.disabled = true;

            submitDocument.addEventListener("change", function () {
                if (submitDocument.files.length > 0) {
                    let file = submitDocument.files[0];
                    submitButton.disabled = false;
                    chosenFile.innerHTML += file.name;
                    chosenFile.className += "bg-gray-100 text-gray-700 rounded-lg my-2 p-2";
                }
            });

        </script>
    </div>
</body>

</html>
