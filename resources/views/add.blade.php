@extends('layouts.base')
@section('title', 'Ajouter Livre')

@section('css')
    <link rel="stylesheet" href="css/add.css">
@endsection

@section('content')
<form action="/add" method="POST">
    @csrf
    <h1>Ajouter un Livre</h1>
    <div class="mb-3">
      <label for="text" class="form-label">Titre</label>
      <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
      <label for="text" class="form-label">Auteur</label>
      <input type="text" name="author" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="text" class="form-label">Année de Parution</label>
        <input type="text" name="publication_year" class="form-control" id="exampleInputPassword1" required>
      </div>
      <div class="mb-3">
        <label for="text" class="form-label">Genre</label>
        <input type="text" name="genre" class="form-control" id="exampleInputPassword1" placeholder="Roman,Thrilleur,Voyage">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Résumé</label>
        <textarea class="form-control" name="synopsis" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <div>
      <label for="avatar">Choisir une image:</label>
      <input type="file"
       id="avatar" name="avatar"
       accept="image/png, image/jpeg">
      </div>
    <button type="submit" class="btn btn-primary">Envoyer</button>
  </form>
@endsection