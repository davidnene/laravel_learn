@extends('layout')
@section('content')

@if(count($listings) == 0)
    <h2>No listings found</h2>
@endif

@foreach ($listings as $listing)
<a target="_blank" href="/findlisting/{{$listing['id']}}">{{$listing['title']}}
</a>
<p>
    {{$listing['description']}}
</p>
@endforeach
@endsection