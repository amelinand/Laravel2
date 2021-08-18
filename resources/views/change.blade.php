@extends('layouts.base')
@section('title', 'Modifier un livre')

@section('css')
    <link rel="stylesheet" href="css/add.css">
@endsection

@section('content')
<form action="/change" method="POST">
    @csrf
    <h1>Modifier un Livre</h1>
    <input type="hidden" name="id" value="{{$book->id}}">
    <div class="mb-3">
      <label for="text" class="form-label">Titre</label>
      <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$book->title}}">
      <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
      <label for="text" class="form-label">Auteur</label>
      <input type="text" name="author" class="form-control" id="exampleInputPassword1" value="{{$book->author}}">
    </div>
    <div class="mb-3">
        <label for="text" class="form-label">Année de Parution</label>
        <input type="text" name="publication_year" class="form-control" id="exampleInputPassword1"  value="{{$book->publication_year}}" required>
      </div>
      <div class="mb-3">
        <label for="text" class="form-label">Genre</label>
        <input type="text" name="genre" class="form-control" id="exampleInputPassword1" value="{{$book->genre}}">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Résumé</label>
        <textarea class="form-control" name="synopsis" id="exampleFormControlTextarea1" rows="3">{{$book->synopsis}}</textarea>
      </div>
      <div>
      <label for="avatar">Choisir une image:</label>
      <input type="file"
       id="avatar" name="avatar"
       accept="image/png, image/jpeg">
      </div>
    <button type="submit" class="btn btn-primary">Modifier</button>
  </form>
@endsection