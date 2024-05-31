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
</article>
@endsection
