
@extends('layouts.basic')

@section('maincontent')
    <h1>Edit {{ $student->firstname }} {{ $student->lastname }}</h1>

    <!-- if there are creation errors, they will show here -->
    {{ HTML::ul($errors->all()) }}

    {{ Form::model($student, array('route' => array('students.update', $student->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('firstname', 'First Name') }}
        {{ Form::text('firstname', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('lastname', 'Last Name') }}
        {{ Form::text('lastname', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('birthdate', 'Birthdate') }}
        {{ Form::text('birthdate',null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('motto', 'Motto') }}
        {{ Form::text('motto',null, array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Edit the Student!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

@stop