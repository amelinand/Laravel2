@extends('layouts.base')
@section('title', 'Nos Livres')
@section('css')
    <link rel="stylesheet" href="css/books.css">
@endsection

@section('content')
    
    <div class="card">
        <div class="card-body">
        <h1>Nos Livres</h1>
        </div>
    </div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Titre</th>
            <th scope="col">Auteur</th>
            <th scope="col">Année de parution</th>
            <th scope="col">Genre</th>
            <th scope="col">Modifier</th>
            <th scope="col">Supprimer</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($allthebooks as $book)    
            <tr>
                <td> {{$book->id}} </td>
                <td><a href="book/{{$book->id}}"> {{$book->title}} </a></td>
                <td> {{$book->author}} </td>
                <td> {{$book->publication_year}} </td>
                <td> {{$book->genre}} </td>
                <td>
                  <form action="/edit" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$book->id}}">
                    <input type="image" src="img/change.png">
                  </form>
                </td>
                <td>
                  <form action="deleteBook" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$book->id}}">
                    <input type="image" src="img/trash-icon.png">
                  </form>
                </td>
                

            </tr>
            @endforeach
            
        </tbody>
      </table>
@endsection
