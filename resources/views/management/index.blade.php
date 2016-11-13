@extends('layouts.app')

@section('content')

        @if(Session::has('success2'))

        <div class="alert alert-success" role="alert">
          {{ Session::get('success2')}}
        </div>

        
        @endif

<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">

        @if(Session::has('success'))

        <div class="alert alert-success" role="alert">
          <strong>Well done!</strong>{{ Session::get('success')}}
        </div>

        @endif

        <div class="panel-heading">Schedules 

        <a class="btn btn-info" href="{{ route('management.create') }}">Add Student</a>
        </div>
        <div class="panel-body">
          <table class="table">
            <thead class="thead-inverse">
              <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
            @foreach($students as $manage)
              <tr>
              <th scope="row">{{ $manage->id }}</th>
                <td>{{ $manage->first_name }}</td>
                <td>{{ $manage->last_name }}</td>
                <td>{{ $manage->email }}</td>
                <td><a class="btn btn-info" href="{{ route('management.show', $manage->id) }}">More</a></td>

              </tr>
              @endforeach

            </tbody>
          </table>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection