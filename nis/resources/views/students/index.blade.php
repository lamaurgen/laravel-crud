@extends('students.layout')
@section('content')
<h1>
    Students List
</h1>
<div class="pull-right">
    <a class="btn btn-success" href="{{ route('students.create') }}"> Add New</a>
</div>
<br>
<table class="table table-bordered">
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Address</th>
        <th>Email</th>
        <th>Number</th>
        <th>Gender</th>
        <th>Faculties</th>


        <th width="280px">Action</th>
    </tr>
    @foreach ($students as $student)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $student->name }}</td>
        <td>{{ $student->address}}</td>
        <td>{{ $student->email}}</td>
        <td>{{ $student->number}}</td>
        <td>{{ $student->gender}}</td>
       
        
        <td>{{$student->subject->subject}}</td>
    


        <td>
            <form action="{{ route('students.destroy',$student->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('students.show',$student->id) }}">Show</a>

                <a class="btn btn-primary" href="{{ route('students.edit',$student->id) }}">Edit</a>

                @csrf
                @method('DELETE')
  
                <button type="submit" class="btn btn-danger" onclick="return deleteFunction()">Delete</button>
            </form>
            <script>
                function deleteFunction() {
                var r = confirm("Are you sure you want to delete?");
                if (r == false) {
                return false;
                } }
        </script>   
        </td>
    </tr>
    @endforeach
</table>

{!! $students->links() !!}
</table>
@endsection