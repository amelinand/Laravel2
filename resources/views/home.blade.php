
@extends('layouts.base')
@section('title', 'Accueil')


@section('css')
    <link rel="stylesheet" href="css/home.css">
@endsection

@section('content')
<h1>Volume Shop</h1>
<h3>En Avant Première!</h3>
<div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="https://images-na.ssl-images-amazon.com/images/I/41dcyMSrAmL._SX300_BO1,204,203,200_.jpg" class="img-fluid rounded-start" alt="..." height="400" width="400">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Ne coupez jamais la poire en deux</h5>
          <p class="card-text">Livre grand format</p>
          <p class="card-text">Sortie: 14 août 2019</p>
          <p class="card-text">Un guide aussi original que spectaculaire pour tirer, enfin, le meilleur de nos vies professionnelle et personnelle !</p>
          <button type="button" class="btn btn-light">Pré commande!</small></button>
        </div>
      </div>
    </div>
</div>
<div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="https://images-na.ssl-images-amazon.com/images/I/41tmI-mBozL._SX331_BO1,204,203,200_.jpg" class="img-fluid rounded-start" alt="..." height="600" width="400">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Jordan Belfort, le loup de Wall Street</h5>
          <p class="card-text">Livre grand format</p>
          <p class="card-text">Sortie: 14 août 2019</p>
          <p class="card-text">Jordan Belfort, incarné par Leonardo di Caprio dans le film Le Loup de Wall Street.</p>
          <button type="button" class="btn btn-light">Pré commande!</small></button>
        </div>
      </div>
    </div>
</div>
<div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="https://images-na.ssl-images-amazon.com/images/I/41P3zTSEmlS._SX311_BO1,204,203,200_.jpg" class="img-fluid rounded-start" alt="..." height="400" width="400">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Une personne sensible</h5>
          <p class="card-text">L'empathie comme super-pouvoir pour surmonter la négativité et améliorer les compétences sociales</p>
          <p class="card-text">Corps en tilleul</p>
          <p class="card-text">Sortie: 14 août 2019</p>
          <button type="button" class="btn btn-light">Pré commande!</small></button>
        </div>
      </div>
    </div>
</div>
<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="https://images-eu.ssl-images-amazon.com/images/I/41L7lOjYvmL._SY291_BO1,204,203,200_QL40_ML2_.jpg" class="img-fluid rounded-start" alt="..." height="400" width="400">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Le langage corporel</h5>
        <p class="card-text">Interprétez facilement le langage corporel et comprenez immédiatement les gens qui vous entourent</p>
        <p class="card-text">Corps en tilleul</p>
        <p class="card-text">Sortie: 14 août 2019</p>
        <button type="button" class="btn btn-light">Pré commande!</small></button>
      </div>
    </div>
  </div>
</div>

@endsection