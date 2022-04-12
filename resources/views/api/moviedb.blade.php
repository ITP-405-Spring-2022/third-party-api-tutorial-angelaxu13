<h1>Title : {{$response->original_title}}</h1>

<h2>Overview</h2>
<p>
    {{$response->overview}}
</p>

<h2>Genres</h2>
<ul>
    @foreach ($response->genres as $genre)
        <li>
            {{$genre->name}}
        </li>
    @endforeach
</ul>