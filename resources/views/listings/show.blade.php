@extends('layout')
@section('content')

@unless($foundlisting == null)
    <h1>Your search results</h1>
    <h2>{{$foundlisting['title']}}</h2>
    <p>{{$foundlisting['description']}}</p>
@endunless
@endsection