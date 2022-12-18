@extends('students.layout')
@section ('content')


<form action="{{ route('students.update',$student->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label>Name </label>
      <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp " value="{{ $student->name }}">
      
    </div>
    <div class="mb-3">
        <label>Address </label>
        <input type="text" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $student->address }}">
        
      </div>
      <div class="mb-3">
        <label>Email </label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $student->email }}">
        
      </div>
      <div class="mb-3">
        <label>Number</label>
        <input type="number" name="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $student->number }}">
        
      </div>
      {{-- Gender --}}
      <div>
      <h3>Select Gender</h3>
      <input type="radio" name="gender" value="male" @if ($student->gender == 'male') checked @endif >Male
      <br>
    <input type="radio" name="gender" value="female" @if ($student->gender == 'female') checked @endif >Female
    <br>
      <input type="radio" name="gender" value="others" @if ($student->gender == 'others') checked @endif >Others

  </div>
      <br>


    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection