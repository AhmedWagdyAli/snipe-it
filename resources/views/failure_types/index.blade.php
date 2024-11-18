@extends('layouts/default')

@section('content')
    <h1>Failure Types</h1>
    <a href="{{ route('failure_types.create') }}" class="btn btn-primary">Create New Failure Type</a>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($failureTypes as $failureType)
                <tr>
                    <td>{{ $failureType->name }}</td>
                    <td>
                        <a href="{{ route('failure_types.edit', $failureType) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('failure_types.destroy', $failureType) }}" method="POST" style="display:inline;">
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
