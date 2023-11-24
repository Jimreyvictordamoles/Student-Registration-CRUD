@extends('students.layout')
@section('content')
 
<div class="card">
  <div class="card-header">INFORMATION</div>
  <div class="card-body">
      
      <form action="{{ url('student/' .$students->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <label>First Name</label></br>
        <input type="text" name="firstname" id="firstname" class="form-control"></br>
        <label>Last Name</label></br>
        <input type="text" name="lastname" id="lastname" class="form-control"></br>
        <label>Middle Name</label></br>
        <input type="text" name="middlename" id="middlename" class="form-control"></br>
        <label>Section</label></br>
        <input type="text" name="section" id="section" class="form-control"></br>
        <label>Gender</label></br>
        <input type="text" name="gender" id="gender" class="form-control"></br>
        <label>Date of Birth</label></br>
        <input type="text" name="dob" id="dob" class="form-control"></br>
        <label>Student Number</label></br>
        <input type="text" name="studentnum" id="studentnum" class="form-control"></br>
        <label>Lrn Number</label></br>
        <input type="text" name="lrnno" id="lrnno" class="form-control"></br>
        <label>Home Address</label></br>
        <input type="text" name="homeaddress" id="homeaddress" class="form-control"></br>
        <label>Email Address</label></br>
        <input type="text" name="emailaddress" id="emailaddress" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" class="form-control"></br>
        <label>Grade Level</label></br>
        <input type="text" name="gradelvl" id="gradelvl" class="form-control"></br>
        <label>Strand</label></br>
        <input type="text" name="strand" id="strand" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop