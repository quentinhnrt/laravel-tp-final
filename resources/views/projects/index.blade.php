@extends('base')

@section('title', 'Accueil des Projets')

@section('content')

<h1>Liste des Projets</h1>

@foreach ($projects as $project)
    <article>
        <h1>{{ $project->name }}</h1>
        <p>{{ $project->description }}</p>
        <p>Client: {{ $project->client }}</p>
        <p>Chef de projet: {{ $project->project_manager_id }}</p>
        <p>
            <a href="{{ route('administration.projects.show', ['project' => $project]) }}" class="btn btn-primary">
                Voir les détails
            </a>
        </p>
    </article>
@endforeach

<div class="pagination">
</div>

@endsection
