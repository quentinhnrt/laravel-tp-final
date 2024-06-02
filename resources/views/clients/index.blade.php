@extends('base')

@section('title', 'Accueil des Clients')

@section('content')

<h1>Liste des Clients</h1>

@foreach ($clients as $client)
    <article>
        <h1>{{ $client->name }} {{ $client->address }}</h1>
        <h2> {{ $client->address }}</h2>
        <p>{{ $client->website }}</p>
        <p>{{ $client->projectlist }}</p>
        <p>{{ $client->contentauthor }}</p>
        <p>
            <a href="{{ route('administration.clients.show', ['client' => $client]) }}" class="btn btn-primary">
                Voir les détails
            </a>
        </p>
    </article>
@endforeach

<div class="pagination">
</div>

@endsection
