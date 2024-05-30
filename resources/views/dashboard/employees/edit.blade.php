@extends('base')

@section('title', 'Employees creation')

@section('content')
    @include('dashboard.employees.form', ['employee' => $employee])
@endsection
