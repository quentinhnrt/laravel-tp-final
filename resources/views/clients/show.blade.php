@extends('base')

@section('title', $client->name . ' ' . $client->address)

@section('content')
<article>
    <h1>{{ $client->name }} {{ $client->address }}</h1>
    <p>
        {!! $client->contentclient !!}
    </p>
    <p>
        {!! $client->website !!}
    </p>
</article>
@endsection
