@extends('books.layout')

@section('content')
    <form action="{{route('books.store')}}" method="post">
        @csrf
        <label for="">Title</label><br>
        <input type="text" name="title" id=""><br><br>

        <label for="Author">Author</label><br>
        <input type="text" name="author" id=""><br><br>

        <label for="">Page</label><br>
        <input type="number" name="page" id=""><br><br>

        <label for="">Year</label><br>
        <input type="number" name="year" id=""><br><br>

        <input type="submit" value="Save" class="btn btn-primary">
    </form>
@endsection