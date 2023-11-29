@extends ('students.layout')

@section('content')


    <div class="row">
        <div class="pull-left py-3">
            <h3>
                Change Information
            </h3>
            
            <a href="{{ route('students\index') }}" class="btn btn-primary my-3">Back</a>
        </div>
    </div>

@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form method="POST" action="{{ route('students\update', $students->id) }}">
        @csrf
        @method('PUT')


        <div class="row">

            <div class="mb-3">
              <label>First Name</label></br>
              <input type="text" name="firstname" id="firstname" class="form-control" value="{{ $students->firstname }}"></br>
            </div>

            <div class="mb-3">
              <label>Last Name</label></br>
              <input type="text" name="lastname" id="lastname" class="form-control" value="{{ $students->lastname }}"></br>
            </div>

            <div class="mb-3">
              <label>Middle Name</label></br>
              <input type="text" name="middlename" id="middlename" class="form-control" value="{{ $students->middlename }}"></br>
            </div>

            <div class="mb-3">
                <select class="form-select border border-secondary border-1" id="section" name="section">
                    <option selected disabled>Section</option>
                    <option value="Helium" {{ $students->section == 'Helium' ? 'selected' : '' }}>Helium</option>
                    <option value="Hydrogen" {{ $students->section == 'Hydrogen' ? 'selected' : '' }}>Hydrogen</option>
                    <option value="Ruby" {{ $students->section == 'Ruby' ? 'selected' : '' }}>Ruby</option>
                    <option value="Emerald" {{ $students->section == 'Emerald' ? 'selected' : '' }}>Emerald</option>
                    <option value="Amethyst" {{ $students->section == 'Amethyst' ? 'selected' : '' }}>Amethyst</option>
                    <option value="Pearl" {{ $students->section == 'Pearl' ? 'selected' : '' }}>Pearl</option>
                    <option value="Carbon" {{ $students->section == 'Carbon' ? 'selected' : '' }}>Carbon</option>
                    <option value="Gold" {{ $students->section == 'Gold' ? 'selected' : '' }}>Gold</option>
                </select>
            </div>

            <div class="mb-3">
                <select class="form-select border border-secondary border-1" id="gender" name="gender">
                    <option selected disabled>Gender</option>
                    <option value="Male" {{ $students->gender == 'Male' ? 'selected' : '' }}>Male</option>
                    <option value="Female" {{ $students->gender == 'Female' ? 'selected' : '' }}>Female</option>
                    <option value="Others" {{ $students->gender == 'Others' ? 'selected' : '' }}>Others</option>
                </select>
            </div>

            <div class="mb-3">
              <label>Date of Birth</label></br>
              <input type="date" name="dob" id="dob" class="form-control" value="{{ $students->dob }}"></br>
            </div>

            <div class="mb-3">
              <label>Student Number</label></br>
              <input type="number" class="form-control border border-secondary border-1" name="studentnum" id="studentnum" class="form-control" value="{{ $students->studentnum }}"></br>
            </div>
            
            <div class="mb-3">
              <label>Lrn Number</label></br>
              <input type="number" class="form-control border border-secondary border-1" name="lrnno" id="lrnno" class="form-control" value="{{ $students->lrnno }}"></br>
            </div>

            <div class="mb-3">
              <label>Home Address</label></br>
              <input type="text" name="homeaddress" id="homeaddress" class="form-control" value="{{ $students->homeaddress }}"></br>
            </div>

            <div class="mb-3">
              <label>Email Address</label></br>
              <input type="text" name="emailaddress" id="emailaddress" class="form-control" value="{{ $students->emailaddress }}"></br>
            </div>

            <div class="mb-3">
              <label>Mobile</label></br>
              <input type="number" class="form-control border border-secondary border-1" name="mobile" id="mobile" class="form-control" value="{{ $students->mobile }}"></br>
            </div>

            <div class="mb-3">
                <select class="form-select border border-secondary border-1" id="gradelvl" name="gradelvl">
                    <option selected disabled>Grade Level</option>
                    <option value="11" {{ $students->gradelvl == '11' ? 'selected' : '' }}>11</option>
                    <option value="12" {{ $students->gradelvl == '12' ? 'selected' : '' }}>12</option>
                </select>
            </div>

            <div class="mb-3">
                <select class="form-select border border-secondary border-1" id="strand" name="strand">
                    <option selected disabled>Strand</option>  
                    <option value="TVL" {{ $students->strand == 'TVL' ? 'selected' : '' }}>TVL</option>
                    <option value="ABM" {{ $students->strand == 'ABM' ? 'selected' : '' }}>ABM</option>
                    <option value="HUMMS" {{ $students->strand == 'HUMMS' ? 'selected' : '' }}>HUMMS</option>
                    <option value="STEM" {{ $students->strand == 'STEM' ? 'selected' : '' }}>STEM</option>
                    <option value="GAS" {{ $students->strand == 'GAS' ? 'selected' : '' }}>GAS</option>
                </select>
            </div>

            <div class="col-sm-12 d-flex justify-content-end">
                <button type="submit" class="btn btn-success">Save</button>
            </div>

        </div>

    </form>


@endsection