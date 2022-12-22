@extends('subjects.layout')
@section('content')
<h1>
    Subject List
</h1>
<div class="pull-right">
    <a class="btn btn-success" href="{{ route('subjects.create') }}"> Add New</a>
</div>
<br>
<table class="table table-bordered">
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Subject</th>

        <th width="280px">Action</th>
    </tr>
    @foreach ($subjects as $subject)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $subject->name }}</td>
        <td>{{ $subject->subject}}</td>

        <td>
            <form action="{{ route('subjects.destroy',$subject->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('subjects.show',$subject->id) }}">Show</a>

                <a class="btn btn-primary" href="{{ route('subjects.edit',$subject->id) }}">Edit</a>

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

{!! $subjects->links() !!}
</table>
@endsection