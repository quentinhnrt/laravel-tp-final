@extends('base')

@section('title', $client->name . ' ' . $client->address)

@section('content')
<article>
    <h1>{{ $client->name }}</h1>
    <h2> {{ $client->address }}</h2>
    <p>
        {!! $client->contentclient !!}
    </p>
    <p>
        {!! $client->website !!}
    </p>
    <p>
        {!! $client->projectlist !!}
    </p>
    <p>
        <a href="{{ route('administration.clients.edit', ['client' => $client]) }}" class="btn btn-primary">Modifier le client</a>
        <form action="{{ route('administration.clients.destroy', ['client' => $client]) }}" method="POST" style="display: inline;" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce client ?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Supprimer le client</button>
        </form>
    </p>
</article>
@endsection
