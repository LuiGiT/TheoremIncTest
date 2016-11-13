@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Training Management System</div>
                <div class="panel-body">

                    <form method="POST"  action="{{ route('management.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" class="form-control" name="first_name">
                        </div>

                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" class="form-control" name="last_name">
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email">
                        </div>                                                

                        <div class="form-group">
                            <label>Hiring Manager Email</label>
                            <input type="text" class="form-control" name="manager_email">
                        </div>

                        <div class="panel-group">
                            <table class="table table-hover">
                              <thead>
                                <tr>
                                  <th>Course Name</th>
                                  <th>Host</th>
                                  <th>Scheduled</th>
                                  <th>Duration</th>
                                  <th>Time Frame</th>
                              </tr>
                          </thead>
                          <tbody>

                              <tr>
                                  <td>
                                      <select class="form-control" name="course_name">
                                          @foreach($management as $manage)
                                          <option value="{{ $manage->course_name }}">{{ $manage->course_name }}</option>
                                          @endforeach    
                                      </select>
                                  </td>         
                                  <td>
                                      <select class="form-control" name="host">
                                          @foreach($management as $manage)
                                          <option value="{{ $manage->host }}">{{ $manage->host }}</option>
                                          @endforeach    
                                      </select>
                                  </td>
                                  <td>
                                      <select class="form-control" name="who_scheduled">
                                          @foreach($management as $manage)
                                          <option value="{{ $manage->who_scheduled }}">{{ $manage->who_scheduled }}</option>
                                          @endforeach    
                                      </select>
                                  </td>  
                                  <td>
                                      <select class="form-control" name="duration">
                                          <option value="15 Min">15 Min</option>
                                          <option value="20 Min">20 Min</option>
                                          <option value="30 Min">30 Min</option>
                                          <option value="1 Hour">1 Hour</option>
                                          <option value="1 Hour 30 Min">1 Hour 30 Min</option>
                                          <option value="4 Hour">4 Hour</option> 
                                      </select>
                                  </td>
                                  <td>
                                      <select class="form-control" name="time_frame">
                                          <option value="Day 1">Day 1</option>
                                          <option value="Week 1">Week 1</option>
                                          <option value="Week 2">Week 2</option>
                                          <option value="Within 30 days">Within 30 days</option>
                                          <option value="Within 60 days">Within 60 days</option>  
                                      </select>
                                  </td>                                                                                                         
                              </tr>                
                          </tbody>
                      </table>

                  </div>

              </div>

              <button type="submit" class="btn btn-primary">Save</button>
          </form>


      </div>
  </div>
</div>
@endsection
