@extends('layouts/default')


@section('content')
    <h1>Priorities</h1>
    <a href="{{ route('priorities.create') }}" class="btn btn-primary">Create New Priority</a>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($priorities as $priority)
                <tr>
                    <td>{{ $priority->name }}</td>
                    <td>
                        <a href="{{ route('priorities.edit', $priority) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('priorities.destroy', $priority) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
