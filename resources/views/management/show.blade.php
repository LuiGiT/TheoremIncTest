@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Schedules</div>
                <div class="panel-body">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">{{ $students->first_name }} {{ $students->last_name }}</h3>
                        </div>
                        <div class="panel-body">
                         <table class="table">
                            <thead class="thead-inverse">
                              <tr>
                                <th>#</th>
                                <th>Course</th>
                                <th>Host</th>
                                <th>Scheduled By</th>
                                <th>Lenght</th>
                                <th>Time Frame</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                              <th scope="row"></th>
                              <td>{{ $students->course_name }}</td>
                              <td>{{ $students->host }}</td>
                              <td>{{ $students->who_scheduled }}</td>
                              <td>{{ $students->duration }}</td>
                              <td>{{ $students->time_frame }}</td>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
</div>
</div>
</div>
@endsection
