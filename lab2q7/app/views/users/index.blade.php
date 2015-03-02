@extends('layouts.basic')

@section('maincontent')
    <h1>All Users</h1>

    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>Name</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $u)

            <tr>
                <td>{{ $u->id }}</td>
                <td>{{ $u->email }}</td>
                <td>{{ $u->name }}</td>

                <!-- we will also add show, edit, and delete buttons -->
                <td>
                    <!-- show the user (uses the show method found at GET /user/{id} -->
                    <a class="btn btn-small btn-success" href="{{ URL::to('users/' . $u->id) }}">Details</a>

                    <!-- edit this student (uses the edit method found at GET /student/{id}/edit -->
                    <a class="btn btn-small btn-info" href="{{ URL::to('users/' . $u->id . '/edit') }}">Edit</a>

                    <!-- delete the student (uses the destroy method DESTROY /student/{id} -->
                    <!-- we will add this later since its a little more complicated than the other two buttons -->
                    {{ Form::open(array('url' => 'users/' . $u->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
                    {{ Form::close() }}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop