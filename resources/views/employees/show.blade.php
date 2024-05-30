@extends('base')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>{{ $employee->firstname }}</h1>
            <p>{{ $employee->lastname }}</p>
            <p>{{ $employee->function }}</p>
        </div>
    </div>
@endsection
