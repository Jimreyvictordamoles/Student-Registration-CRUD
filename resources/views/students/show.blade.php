@extends('students.layout')

@section('content')
    <div class="row">
        <div class="pull-left py-3">
            <h1>Student's Page</h1>
            <a href="{{ route('students\index') }}" class="btn btn-primary my-3">Back</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <dl class="row">
                <dt class="col-sm-3">First Name: </dt>
                <dd class="col-sm-9">{{ $students->firstname }}</dd>

                <dt class="col-sm-3">Last Name: </dt>
                <dd class="col-sm-9">{{ $students->lastname }}</dd>

                <dt class="col-sm-3">Middle Name: </dt>
                <dd class="col-sm-9">{{ $students->middlename }}</dd>

                <dt class="col-sm-3">Section: </dt>
                <dd class="col-sm-9">{{ $students->section }}</dd>

                <dt class="col-sm-3">Gender: </dt>
                <dd class="col-sm-9">{{ $students->gender }}</dd>
                
                <dt class="col-sm-3">Date of Birth: </dt>
                <dd class="col-sm-9">{{ $students->dob }}</dd>

                <dt class="col-sm-3">Lrn Number: </dt>
                <dd class="col-sm-9">{{ $students->lrnno }}</dd>

                <dt class="col-sm-3">Home Address: </dt>
                <dd class="col-sm-9">{{ $students->homeaddress }}</dd>

                <dt class="col-sm-3">Email Address: </dt>
                <dd class="col-sm-9">{{ $students->emailaddress }}</dd>

                <dt class="col-sm-3">Mobile: </dt>
                <dd class="col-sm-9">{{ $students->mobile }}</dd>

                <dt class="col-sm-3">Grade: </dt>
                <dd class="col-sm-9">{{ $students->gradelvl }}</dd>

                <dt class="col-sm-3">Strand: </dt>
                <dd class="col-sm-9">{{ $students->strand }}</dd>
            </dl>
        </div>
    </div>
@endsection