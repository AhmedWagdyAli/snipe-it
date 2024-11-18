@extends('layouts/default')

@section('content')
    <h1>Edit Failure Type</h1>
    <form action="{{ route('failure_types.update', $failureType) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ $failureType->name }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
