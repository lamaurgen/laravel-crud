@extends('subjects.layout')
@section('content')

<form action="{{ route('subjects.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>  Name </label>
        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  >
        
      </div>
    <div class="mb-3">
      <label> Subject Name </label>
      <input type="text" name="subject" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  >
      
    </div>
        
      
      <br>


    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection