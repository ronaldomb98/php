@extends('layout')

@section('content')
    <div class="col-md-offset-2 col-md-8">
        <div class="table-responsive"></div>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Id Hobbie</th>
                <th>Name Hobbie</th>
            </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{$student->id}}</td>
                    <td>{{$student->name}}</td>
                    <td>{{$student->getHobbieName->id}}</td>
                    <td>{{$student->getHobbieName->name}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
