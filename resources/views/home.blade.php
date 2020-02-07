
@extends('layouts.main')

@section('content')
<!-- Hero section -->
<section id="hero">
  <div id="hero-content" class="container">
    <h1>The best professional community. For You</h1>
    <div class="heading-border"></div>
    <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum laudantium deserunt, incidunt, hic ad perferendis aspernatur suscipit minus sit amet, odio eos eligendi pariatur praesentium, quo natus in doloremque. Ipsa.</h2>
    <form class="search-form" action="">
      <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         width="28.931px" height="28.932px" viewBox="0 0 28.931 28.932" style="enable-background:new 0 0 28.931 28.932;"
         xml:space="preserve">
        <g>
          <path d="M28.344,25.518l-6.114-6.115c1.486-2.067,2.303-4.537,2.303-7.137c0-3.275-1.275-6.355-3.594-8.672
            C18.625,1.278,15.543,0,12.266,0C8.99,0,5.909,1.275,3.593,3.594C1.277,5.909,0.001,8.99,0.001,12.266
            c0,3.276,1.275,6.356,3.592,8.674c2.316,2.316,5.396,3.594,8.673,3.594c2.599,0,5.067-0.813,7.136-2.303l6.114,6.115
            c0.392,0.391,0.902,0.586,1.414,0.586c0.513,0,1.024-0.195,1.414-0.586C29.125,27.564,29.125,26.299,28.344,25.518z M6.422,18.111
            c-1.562-1.562-2.421-3.639-2.421-5.846S4.86,7.983,6.422,6.421c1.561-1.562,3.636-2.422,5.844-2.422s4.284,0.86,5.845,2.422
            c1.562,1.562,2.422,3.638,2.422,5.845s-0.859,4.283-2.422,5.846c-1.562,1.562-3.636,2.42-5.845,2.42S7.981,19.672,6.422,18.111z"/>
        </g>
      </svg>
      <label for="search-input">Search for companies,jobs or persons</label>
      <input type="text" id="search-input" autocomplete="off">
    </form>
  </div>
  <div id="hero-bg">

  </div>
</section>

<svg id="curveDownColor" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
      <path d="M0 0 C 50 100 80 100 100 0 Z" style="fill:#fff"></path>
</svg>

<!-- Search suggestions section -->
<section id="suggestions" class="main-section main-container">
    <h1 class="section-title">
      Trouver votre travail ou stage ideal
    </h1>
  <div class="suggestions">
    <h2>Suggestions de recherche</h2>
    <span>Ventes</span>
    <span>Ingénierie</span>
    <span>Développement commercial</span>
    <span>Finance</span>
    <span>Services de la santé</span>
    <span>Marketing</span>
    <span>Technologies de l'information</span>
    <span>Administration</span>
    <span>Ressources humaines</span>
    <span>Exploitation</span>
  </div>
</section>
<svg class="fusion-waves-candy" fill="var(--main-color)" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" viewBox="0 54 1024 162" preserveAspectRatio="none"><path class="st3" d="M0 216.312h1024v-3.044c-50.8-17.1-108.7-30.7-172.7-37.9-178.6-19.8-220 36.8-404.9 21.3-206.6-17.2-228-126.5-434.5-141.6-3.9-.3-7.9-.5-11.9-.7v161.944z"></path></svg>

<!-- Post your job offer -->
<section id="job-offer" class="main-section main-container" style="background:var(--main-color)">
  <div class="section-left">
    <h1 class="section-title">Publiez votre offre d’emploi auprès de millions de personnes</h1>
    <a href="">Publier une offre d'emploi</a>
  </div>
  <div class="section-right">

  </div>
</section>

<!-- Functionnalities wrapper section -->
<section id="func-wrapper" class="main-section main-container">
  <div class="section-left">
    <h1 class="section-title" style="color:var(--main-color)">À qui s’adresse GETAJOB ?</h1>
    <p>À toute personne cherchant à construire sa carrière professionnelle</p>
  </div>

  <div class="section-right">
  <div class="section-right" style="position:relative">
    <div class="section-bg">
    </div>
  </div>
</section>
@endsection
