@extends('students.layout')

@section('content')

    <div class="row">
        <div class="pull-left py-3">
            <h1>
                Student's Registration
            </h1>

            <a href="{{ url('/index/create') }}" class="btn btn-success my-3" title="Add new parts">Add new</a>
        </div>
    </div>

    <div class="row">

        <table class="table table-bordered table-light">

            <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Middle Name</th>
                    <th>Section</th>
                    <th>Gender</th>
                    <th>Date of Birth</th>
                    <th>Student Number</th>
                    <th>Lrn Number</th>
                    <th>Home Address</th>
                    <th>Email Address</th>
                    <th>Mobile</th>
                    <th>Grade Level</th>
                    <th>Strand</th>
                    <th>Actions</th>
                </tr>
            </thead>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif


            @foreach($students as $item)
                <tbody>
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->firstname }}</td>
                        <td>{{ $item->lastname }}</td>
                        <td>{{ $item->middlename }}</td>
                        <td>{{ $item->section }}</td>
                        <td>{{ $item->gender }}</td>
                        <td>{{ $item->dob }}</td>
                        <td>{{ $item->studentnum }}</td>
                        <td>{{ $item->lrnno }}</td>
                        <td>{{ $item->homeaddress }}</td>
                        <td>{{ $item->emailaddress }}</td>
                        <td>{{ $item->mobile }}</td>
                        <td>{{ $item->gradelvl }}</td>
                        <td>{{ $item->strand }}</td>
            
                        <td>
                            <a href="{{ route('students\show', $item->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('students\edit', $item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('students\destroy', $item->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            @endforeach

        </table>


    </div>


@endsection