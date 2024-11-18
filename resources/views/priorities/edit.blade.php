@extends('layouts/default')

@section('content')
    <h1>Edit Priority</h1>
    <form action="{{ route('priorities.update', $priority) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ $priority->name }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
