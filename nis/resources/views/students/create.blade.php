@extends('students.layout')
@section ('content')


<form action="{{ route('students.store') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label>Name </label>
      <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  value="{{ old('name') }}">
      
    </div>
    <div class="mb-3">
        <label>Address </label>
        <input type="text" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('address') }}">
        
      </div>
      <div class="mb-3">
        <label>Email </label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('email') }}">
        
      </div>
      <div class="mb-3">
        <label>Number</label>
        <input type="number" name="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('number') }}">
        
      </div>
      {{-- <div class="mb-3">
        <label>Id</label>
        <input type="number" name="subject_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('number') }}">
        
      </div>
       --}}
      {{-- Gender --}}
      <div>
      <h3>Select Gender</h3>
      <input type="radio" name="gender" value="male">Male
      <br>
    <input type="radio" name="gender" value="female">Female
    <br>
      <input type="radio" name="gender" value="others">Others

  </div>
      <br>


      <div class="form-group1">
        <label for="subject">Faculties:</label>
        <select id="subject" name="subject_id" value="subject" >
       @foreach ($data as $row)
       <option value = {{$row->id}}>{{$row->subject}}</option>
           
       @endforeach
      </select>
      </div>
      <br>
      <br>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection