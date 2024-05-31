@extends('base')

@section('title', $project->name . ' ' . $client->description)

@section('content')
<article>
    <h1>{{ $project->name }}</h1>
    <h2> {{ $project->description }}</h2>
    <p>
        {!! $project->contentclient !!}
    </p>
    <p>
        {!! $project->client !!}
    </p>
    <p>
        {!! $project->project_manager_id !!}
    </p>
    <p>
</article>
@endsection
