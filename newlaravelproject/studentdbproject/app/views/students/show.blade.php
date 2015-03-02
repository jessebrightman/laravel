
@extends('layouts.basic')

@section('maincontent')
    <h1>Showing Student</h1>

    <div class="jumbotron text-center">
        <h2>{{ $student->firstname }} {{ $student->lastname }}</h2>
        <p>
            <strong>Birthdate:</strong> {{ $student->birthdate }}<br>
            <strong>Motto:</strong> {{ $student->motto }}
        </p>
    </div>


@stop