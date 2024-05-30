@extends('base')

@section('title', 'Accueil des Clients')

@section('content')

<h1>Liste des Auteurs</h1>

@foreach ($clients as $client)
    <article>
        <h2>{{ $client->lastname }} {{ $client->firstname }}</h2>
        <p>{{ $client->contentauthor }}</p>
        <!-- Vous pouvez ajouter d'autres champs ici selon vos besoins -->
        <p>
            <a href="{{ route('clients.show', ['client' => $client]) }}" class="btn btn-primary">
                Voir les détails
            </a>
        </p>
    </article>
@endforeach

<div class="pagination">
    <!-- Si vous souhaitez ajouter une pagination, vous pouvez le faire ici -->
</div>

@endsection
