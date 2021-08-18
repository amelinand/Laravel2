@extends('layouts.base')
@section('title', 'Livres')

@section('css')
    <link rel="stylesheet" href="/css/book.css">
@endsection

@section('content')

<div class="card">
    <div class="card-body">
    <h1>{{$book->title}} </h1>
    </div>
</div>

<div div class="card">
    <div class="card-body">
        <P>Auteur: {{$book->author}} </P>
        <p>Année de parution: {{$book->publication_year}} </p>
        <p>Genre: {{$book->genre}} </p>
        <p>Synopsis: {{$book->synopsis}}</p>
</div>
</div>