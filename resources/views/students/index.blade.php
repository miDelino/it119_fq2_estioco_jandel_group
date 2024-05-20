@extends('students.layout')

@section('content')

    <div class="row mb-4">
        <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Student Management System</h2>
            </div>
            <div class="pull-right">
            <a class="btn btn-success" href="{{ route('students.create') }}">Create New Student</a>
        </div>
    </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Date of Birth:</th>
                <th>Contact Numbers</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->gender }}</td>
                <td>{{ $student->place }}</td>
                <td>{{ $student->birth_date }}</td>
                <td>{{ $student->phone }}</td>
                <td>
                    <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="d-inline">
                        <a class="btn btn-info" href="{{ route('students.show', $student->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('students.edit', $student->id) }}">Edit</a>

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




