@extends('subjects.layout')
@section ('content')


<form action="{{ route('subjects.update',$subject->subject_id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label>Name </label>
        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp " value="{{$subject->name}}">
        
      </div>
    <div class="mb-3">
      <label>Subject Name </label>
      <input type="text" name="subject" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp " value="{{$subject->subject}}">
      
    </div>

      <br>


    <button type="submit" name="submit" class="btn btn-primary">Submit</button>

 
  </form>
@endsection