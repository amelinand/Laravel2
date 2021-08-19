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
      <select type="text" name="author_id" class="form-control">
        @foreach ($authors as $author) 
        @if ($book->author_id === $author->id)
         <option value="{{$author->id}}" selected>{{$author->name}}</option>
        @else 
         <option value="{{$author->id}}">{{$author->name}}</option>
        @endif 
        @endforeach
      </select>
    </div>
    <div class="mb-3">
        <label for="text" class="form-label">Année de Parution</label>
        <input type="text" name="publication_year" class="form-control" id="exampleInputPassword1"  value="{{$book->publication_year}}" required>
      </div>
      <div class="mb-3">
        <label for="text" class="form-label">Genre</label>
        @foreach ($genres as $genre)
          <input type="checkbox" name="genres[]" class="form-check-input" value="{{$genre->id}}">
          <label for="">{{$genre->name}}</label>
        @endforeach
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