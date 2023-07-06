<h1>{{$heading}}</h1>


@if(count($listings) == 0)
    <h2>No listings found</h2>
@endif

@foreach ($listings as $listing)
<a href="/findlisting/{{$listing['id']}}">{{$listing['title']}}
</a>
<p>
    {{$listing['description']}}
</p>
@endforeach
