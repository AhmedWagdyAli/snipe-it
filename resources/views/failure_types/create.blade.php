@extends('layouts/default')

@section('content')
    <h1>Create Failure Type</h1>
    <form action="{{ route('failure_types.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" required>
        </div>
        <div class="form-group">
            <label for="is_active">Active</label>
            <select name="is_active" class="form-control">
                <option value="false">false</option>
                <option value="true">true</option>

            </select>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
