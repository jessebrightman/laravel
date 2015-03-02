
@extends('layouts.basic')

@section('maincontent')
    <h1>All Students</h1>

    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($students as $s)

                <tr>
                    <td>{{ $s->firstname }}</td>
                    <td>{{ $s->lastname }}</td>

                    <!-- we will also add show, edit, and delete buttons -->
                    <td>
                        <!-- show the student (uses the show method found at GET /student/{id} -->
                        <a class="btn btn-small btn-success" href="{{ URL::to('students/' . $s->id) }}">Details</a>

                        <!-- edit this student (uses the edit method found at GET /student/{id}/edit -->
                        <a class="btn btn-small btn-info" href="{{ URL::to('students/' . $s->id . '/edit') }}">Edit</a>

                        <!-- delete the student (uses the destroy method DESTROY /student/{id} -->
                        <!-- we will add this later since its a little more complicated than the other two buttons -->
                        {{ Form::open(array('url' => 'students/' . $s->id, 'class' => 'pull-right')) }}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
                        {{ Form::close() }}
                    </td>
                </tr>
        @endforeach
        </tbody>
    </table>
@stop