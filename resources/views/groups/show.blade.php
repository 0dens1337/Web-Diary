@extends('layouts.app')
@section('content')
    <a class="btn btn-success" href="{{ route('subjects.create') }}">Create Subject</a>
    <table class="table table-striped mt-2">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Group Name</th>
            <th scope="col">Status</th>
            <th scope="col">Grade</th>
            <th scope="col">Actions</th>

        </tr>
        </thead>
        <tbody>
        @foreach($groups->subjects as $subject)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $subject->title }}</td>
                <td>{{ $subject->description }}</td>
                <td>{{ $groups->title }}</td>
                <td>{{ $subject->is_completed ? 'Completed': 'In progress' }}</td>
                <td>{{ $groups->grade }}</td>
                <td><a href="{{ route('subjects.show', $subject->id) }}" class="btn btn-outline-info btn-sm">View</a></td>

            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
