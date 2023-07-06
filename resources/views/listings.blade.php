<h1>{{$heading}}</h1>

@if(count($listings) == 0)
    <h2>No listings found</h2>
@endif

@foreach ($listings as $listing)
<h2>
    {{$listing['title']}}
</h2>
<p>
    {{$listing['description']}}
</p>
@endforeach
