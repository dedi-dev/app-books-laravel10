@extends('books.layout')

@section('content')
    <h3>{{$book->title}}</h3>
    <p>Written by : {{$book->author}}</p>
    <p>Number of page : {{$book->page}}</p>
    <p>Published on : {{$book->year}}</p>

    <a href="{{route('books.index')}}" class="btn btn-secondary">Back to Home</a>
@endsection