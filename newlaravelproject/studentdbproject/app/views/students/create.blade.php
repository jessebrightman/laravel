@extends('layouts.basic')

@section('maincontent')

<h1>Create a Student</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'students')) }}

<div class="form-group">
    {{ Form::label('firstname', 'First Name') }}
    {{ Form::text('firstname', Input::old('firstname'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('lastname', 'Last Name') }}
    {{ Form::text('lastname', Input::old('lastname'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('birthdate', 'Date') }}
    {{ Form::text('birthdate', Input::old('birthdate'), array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('motto', 'Motto') }}
    {{ Form::text('motto', Input::old('motto'), array('class' => 'form-control')) }}
</div>

{{ Form::submit('Create!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop
