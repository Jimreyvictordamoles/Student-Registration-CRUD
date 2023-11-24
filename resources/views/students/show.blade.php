@extends('students.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">First Name : {{ $students->firstname }}</h5>
        <p class="card-text">Last Name : {{ $students->lastname }}</p>
        <p class="card-text">Middle Name : {{ $students->middlename }}</p>
        <p class="card-text">Section : {{ $students->secion }}</p>
        <p class="card-text">Gender : {{ $students->gender }}</p>
        <p class="card-text">Date of Birth : {{ $students->dob }}</p>
        <p class="card-text">Student Number : {{ $students->studentnum }}</p>
        <p class="card-text">Lrn Number : {{ $students->lrnno }}</p>
        <p class="card-text">Home Address : {{ $students->homeaddress }}</p>
        <p class="card-text">Email Address : {{ $students->emailaddress }}</p>
        <p class="card-text">Mobile : {{ $students->mobile }}</p>
        <p class="card-text">Grade Level : {{ $students->gradelvl }}</p>
        <p class="card-text">Strand : {{ $students->strand }}</p>
  </div>
       
    </hr>
  
  </div>
</div>