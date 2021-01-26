<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="/css/app.css" rel="stylesheet">
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.0.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.0.1/mapbox-gl.css' rel='stylesheet' />
    <title>Document</title>
</head>
<body class="px-10">
    <header>
        <nav class="menu flex justify-between items-stretch shadow">
            <div class="px-8">
                <img class="h-40" src="/images/logo-efa.jpg" alt="logo-efa">
            </div>
            <ol class="flex justify-between items-stretch py-10">
                <li class="m-3 font-bold text-lg uppercase active item"><a href="#">Accueil</a></li>
                <li class="m-3 font-bold text-lg uppercase item"><a href="#">Clubs enfants</a></li>
                <li class="m-3 font-bold text-lg uppercase item">Evenements</li>
                <li class="m-3 font-bold text-lg uppercase item">Contact</li>
            </ol>
            <img class="h-10" src="/images/logo-facebook.jpg" alt="facebook-icon">
            <img class="h-10" src="/images/logo-lang.png" alt="switch-lang">
        </nav>
    </header>

    <section>
        <h1 class="py-10 text-4xl font-bold text-center">Bilinguisme ne veut pas dire élitisme</h1>
        <q>Tout sujet peut accéder au bilinguisme s’il bénéficie d’une immersion en langue régionale et/ou étrangère dès le plus jeune âge.
            Pr Jean Petit, Psycholinguiste</q>

        <p>Comment garantir une immersion parfaite en allemand à nos enfants tout en vivant en France ?
            Pour maintenir un bilinguisme équilibré, EFA a créé trois ateliers ludiques germanophones où nos petits jouent, chantent et s’amusent exclusivement dans la langue de Goethe et la perfectionnent « en parlant ».  
            Grâce à la variété des contacts sociaux, ils enrichissent leur allemand dans tous les domaines. Cela leur permet également de faire connaissance des coutumes et de la culture de leur parent allemand.</p>
    </section>

    <div id="kids-clubs"></div>
        <h2 class="py-10 text-2xl font-bold text-center">Clubs pour enfants</h2>
        <section class="flex justify-between items-stretch">
            <div class="card">
                <img src="" alt="">
                <h5>0 à 3 ans</h5>
                <p>En allemand, nos petits vont jouer, chanter, raconter des histoires, rire et faire des petits jeux de motricité. Bien qu’ils n’aillent pas encore à l’école, l’entourage français les conditionne à parler français. Ce groupe offre une parfaite occasion de stimuler l’allemand de nos bambins. Simultanément, les parents se souviennent ou apprennent des chants d’enfance. Les échanges en allemand entre grands et petits ont déjà montré ses fruits.</p>
                <button>Plus d'informations</button>
            </div>
            <div class="card">
                <img src="" alt="">
                <h5>3 à 6 ans</h5>
                <p>Souvent la matinée se déroule autour d'un thème : parfois tout le monde se transforme en animaux sauvages, où bien nous préparons une salade de fruits délicieuse avec des fruits apportés. Sont proposés des chansons, des jeux de doigts et et des jeux de motricité ; des travaux artistiques ne doivent pas manquer car les petits artistes adorent rapporter "une oeuvre d'art" à la maison. Tous les enfants ont déjà entendu l'allemand dans leur familles, certains ne sont pas encore habitués à parler en allemand. Des rituels tellesque la chanson du début et de la fin aident à faire des premiers pas, d'autres jeux sollicitent les enfants à devenir plus actifs. Küken- et Tigerentenclub, c'est vivre un moment en allemand et s'amuser en même temps. Atelier animé par une éducatrice allemande.</p>
                <button>Plus d'informations</button>
            </div>
            <div class="card">
                <img src="" alt="">
                <h5>7 à 10 ans</h5>
                <p>Avec la participation des enfants, nous organisons des activités sportives et créatives pour jouer et communiquer en allemand.</p>
                <button>Plus d'informations</button>
            </div>
        </section>

    <div id="family">
        <h2 class="py-10 text-2xl  font-bold text-center">Activités en Famille</h2>
            <section class="flex">
                <img class="rounded-lg shadow" src="/images/photo1.png" alt="">
                <p>CarnavalDescription de l’évenementJe souhaite venir -> Lien vers formulaire pré-rempli
                    Brunch de PâquesDescription de l’évenementJe souhaite venir -> Lien vers formulaire pré-rempli
                    Fête d’étéDescription de l’évenementJe souhaite venir -> Lien vers formulaire pré-rempli</p>
            </section>
            <section class="flex py-10">
                <p>Fabrication de lanternesDescription de l’évenementJe souhaite venir -> Lien vers formulaire pré-rempli
                    Défilé aux lanternes pour les enfants - MartinsumzugDescription de l’évenementJe souhaite venir -> Lien vers formulaire pré-rempli
                    Fabrication de décorations de NoëlDescription de l’évenementJe souhaite venir -> Lien vers formulaire pré-rempli</p>
                <img class="rounded-lg shadow" src="/images/photo2.png" alt="">
            </section>
    </div>
    
    <section class="flex justify-center py-10">
        <form action="">
        <h2 class="text-2xl font-bold">Nous Contacter</h2>
          <div class="mt-8 max-w-md">
            <div class="grid grid-cols-1 gap-6">
              <label class="block">
                <span class="text-gray-700">Nom / Prénom</span>
                <input
                  type="text"
                  class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0"
                  placeholder=""
                />
              </label>
              <label class="block">
                <span class="text-gray-700">E-Mail</span>
                <input
                  type="email"
                  class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0"
                  placeholder="john@example.com"
                />
              </label>
              <label class="block">
                <span class="text-gray-700">Votre Message</span>
                <textarea
                  class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0"
                  rows="3"
                ></textarea>
              </label>
              <div class="block">
                <div class="mt-2">
                  <div>
                    <label class="inline-flex items-center">
                      <input
                        type="checkbox"
                        class="rounded bg-gray-200 border-transparent focus:border-transparent focus:bg-gray-200 text-gray-700 focus:ring-1 focus:ring-offset-2 focus:ring-gray-500"
                      />
                      <span class="ml-2">Inscrivez-vous moi à la Newsletter</span>
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
        <div id="map" style="width: 400px; height:300px;" class="rounded-lg m-10"></div>
    </section>

    <footer class="p-10 bg-gray-200 rounded-lg">
        <address>Présidente : Stephanie Zillmer <br>
            07 51 89 89 89 <br>
            contact@efa-34.org
        </address>
        <p>© {{ now()->year }} EFA – Eveil Franco Allemand</p>
    </footer>

    <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoicGF1bGFudG9pbmVjb2xpbiIsImEiOiJjazBqYmdiYWIwOGFjM2huMTR0enVpejk1In0.DmB49AgRVNtdlx9L_HKZlQ';
        var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11', // stylesheet location
        center: [3.890981, 43.596478], // starting position [lng, lat]
        zoom: 16 // starting zoom
        });
        </script>
</body>
</html>